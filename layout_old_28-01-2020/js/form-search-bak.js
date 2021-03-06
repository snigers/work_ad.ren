(function (global){
var ym = { modules: global.ymaps.modules };

(function (modules){
var project = { DEBUG: false };
if (typeof modules == 'undefined' && typeof require == 'function') {
    var modules = require('ym');
}

modules.define('util.providePackage', ['system.mergeImports'], function (provide, mergeImports) {
    provide(function (srcPackage, packageArgs) {
        var packageProvide = packageArgs[0],
            packageModules = Array.prototype.slice.call(packageArgs, 1),
            ns = mergeImports.joinImports(srcPackage.name, {}, srcPackage.deps, packageModules);

        packageProvide(ns);
    });
});
})(ym.modules);

ym.modules.define('form-search', [
 'util.defineClass',
 'search-model',
 'form-view',
 'map-view'
], function (provide, defineClass, SearchModel, FormView, MapView) {
  var FormSearch = defineClass(function () {
    this._mapView = new MapView();
    this._searchModel = new SearchModel();
    this._formView = new FormView();
    this._setupListeners();
  }, {
    _setupListeners: function () {
      this._searchModel.events
        .add('requestsuccess', this._onRequestSuccess, this)
        .add('requestfail', this._onRequestFail, this);
      this._formView.events
        .add('requestsubmit', this._onRequestSubmit, this);

      this._mapView.events
        .add('boundschange', this._onMapBoundsChange, this);

    },
    _onRequestSuccess: function (e) {
      this._mapView
        .clear()
        .render(e.get('target').getResult());
    },
    _onRequestFail: function (e) {
      this._formView.showMessage(e.get('target').getError());
    },
    _onRequestSubmit: function (e) {
      this._searchModel.search(e.get('request'));
    },
    _onMapBoundsChange: function (e) {
      var bounds = e.get('target').getBounds();
      this._searchModel.setGeocodeBounds(bounds);
      this._formView.setSuggestBounds(bounds);
    }
  });

  provide(FormSearch);
});

ym.modules.define('search-model', [
  'util.defineClass',
  'util.extend',
  'event.Manager',
  'geocode',
  'vow'
], function (provide, defineClass, extend, EventManager, geocode, vow) {
  var defaultOptions = {
    results: 1
  };
  var SearchModel = defineClass(function (options) {
    this.events = new EventManager({ context: this });
    this._options = extend({}, defaultOptions, options);
    this._result = null;
    this._error = null;
  }, {
    search: function (request) {
      (request.length?
        (
          this.events.fire('requestsend', {
            request: request
          }),
          geocode(request, this._options)
        ) : vow.reject(new Error('Задан пустой поисковый запрос'))
      )
      .then(this._onRequestSuccess, this)
      .fail(this._onRequestFail, this);
    },
    clear: function () {
      this._result = null;
      this._error = null;
    },
    _onRequestSuccess: function (res) {
      var result = this._result = res.geoObjects.get(0);
      if(!result) {
        throw new Error('По запросу "' + res.metaData.geocoder.request + '" ничего не найдено');
      }
      this.events.fire('requestsuccess', {
        result: result
      });
    },
    _onRequestFail: function (err) {
      this._error = err;
      this.events.fire('requestfail', {
        error: err
      });
    },
    getResult: function () {
      return this._result;
    },
    getError: function () {
      return this._error;
    },
    setGeocodeBounds: function (bounds) {
      this._options.boundedBy = bounds;
    }
  });

  provide(SearchModel);
});

ym.modules.define('form-view', [
  'util.defineClass',
  'util.bind',
  'event.Manager',
  'suggest-view'
], function (provide, defineClass, bind, EventManager, SuggestView) {
  var FormView = defineClass(function () {
    this.events = new EventManager({ context: this });

    var form = this._form = jQuery('form');
    this._controls = form.find('.control-group');
    this._message = form.find('.help-inline');
    this._suggestView = new SuggestView();

    this._setupListeners();
  }, {
    _setupListeners: function () {
      this._form
        .on('submit', bind(this._onFormSubmit, this));
      this._suggestView.events
        .add('querychange', this.hideMessage, this);
    },
    _clearListeners: function () {
      this._form.off("submit");
      this._suggestView.events
        .remove('querychange', this.hideMessage, this);
    },
    _onFormSubmit: function (e) {
      e.preventDefault();

      this.events.fire('requestsubmit', {
        request: this._suggestView.getRequest()
      });
    },
    showMessage: function (text) {
      this._controls
          .addClass('error');
      this._message
          .removeClass('invisible')
          .text(text instanceof Error? text.message : text);
    },
    hideMessage: function () {
      this._controls
          .removeClass('error');
      this._message
          .addClass('invisible')
          .text('');
    },
    setSuggestBounds: function (bounds) {
      this._suggestView.setSuggestBounds(bounds);
    }
  });
  provide(FormView);
});

ym.modules.define('map-view', [
  'util.defineClass',
  'util.extend',
  'Map',
  'Placemark',
  'event.Manager'
], function (provide, defineClass, extend, Map, Placemark, EventManager) {
  var config = {
    id: 'map',
    state: {
      center: [55.751574, 37.573856],
      zoom: 9,
      controls: ['zoomControl', 'geolocationControl', 'typeSelector']
    },
    options: {}
  };
  var MapView = defineClass(function () {
    var map = this._map = new Map(config.id, config.state, config.options);
    this.events = new EventManager({ context: map, parent: map.events });

    var myPlacemark;

    map.events.add('click', function (e) {

      var coords = e.get('coords');

      placePlacemark(coords);



    });

    function createPlacemark(coords) {

      return new ymaps.Placemark(coords, {
        iconCaption: 'поиск...'
      }, {
        preset: 'islands#violetDotIconWithCaption',
        draggable: true
      });
    }

    function getAddress(coords, myPlacemark) {
      myPlacemark.properties.set('iconCaption', 'поиск...');
      ymaps.geocode(coords).then(function (res) {
        var firstGeoObject = res.geoObjects.get(0);

        myPlacemark.properties
          .set({
            // Формируем строку с данными об объекте.
            iconCaption: [
              // Название населенного пункта или вышестоящее административно-территориальное образование.
              firstGeoObject.getLocalities().length ? firstGeoObject.getLocalities() : firstGeoObject.getAdministrativeAreas(),
              // Получаем путь до топонима, если метод вернул null, запрашиваем наименование здания.
              firstGeoObject.getThoroughfare() || firstGeoObject.getPremise()
            ].filter(Boolean).join(', '),
            // В качестве контента балуна задаем строку с адресом объекта.
            balloonContent: firstGeoObject.getAddressLine()
          });

        $(".search-query").val(firstGeoObject.getAddressLine());

      });


    }

    function placePlacemark(coords) {

      // Если метка уже создана – просто передвигаем ее.
      if (myPlacemark) {
        myPlacemark.geometry.setCoordinates(coords);
      }
      // Если нет – создаем.
      else {

        myPlacemark = createPlacemark(coords);
        map.geoObjects.add(myPlacemark);
        // Слушаем событие окончания перетаскивания на метке.
        myPlacemark.events.add('dragend', function () {
          getAddress(myPlacemark.geometry.getCoordinates());
        });
      }

      getAddress(coords, myPlacemark);

    }

    $(".search-query").on("blur", function () {

      ymaps.geocode($(".search-query").val(), {
        /**
         * Опции запроса
         * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/geocode.xml
         */
        // Сортировка результатов от центра окна карты.
        // boundedBy: myMap.getBounds(),
        // strictBounds: true,
        // Вместе с опцией boundedBy будет искать строго внутри области, указанной в boundedBy.
        // Если нужен только один результат, экономим трафик пользователей.
        results: 1
      }).then(function (res) {
        // Выбираем первый результат геокодирования.

        var firstGeoObject = res.geoObjects.get(0),
          // Координаты геообъекта.
          coords = firstGeoObject.geometry.getCoordinates(),
          // Область видимости геообъекта.
          bounds = firstGeoObject.properties.get('boundedBy');

        firstGeoObject.options.set('preset', 'islands#darkBlueDotIconWithCaption');
        // Получаем строку с адресом и выводим в иконке геообъекта.
        firstGeoObject.properties.set('iconCaption', firstGeoObject.getAddressLine());

        // Добавляем первый найденный геообъект на карту.
        map.geoObjects.add(firstGeoObject);
        // Масштабируем карту на область видимости геообъекта.
        map.setBounds(bounds, {
          // Проверяем наличие тайлов на данном масштабе.
          checkZoomRange: true
        });

        /**
         * Все данные в виде javascript-объекта.
         */
        console.log('Все данные геообъекта: ', firstGeoObject.properties.getAll());
        /**
         * Метаданные запроса и ответа геокодера.
         * @see https://api.yandex.ru/maps/doc/geocoder/desc/reference/GeocoderResponseMetaData.xml
         */
        console.log('Метаданные ответа геокодера: ', res.metaData);
        /**
         * Метаданные геокодера, возвращаемые для найденного объекта.
         * @see https://api.yandex.ru/maps/doc/geocoder/desc/reference/GeocoderMetaData.xml
         */
        console.log('Метаданные геокодера: ', firstGeoObject.properties.get('metaDataProperty.GeocoderMetaData'));
        /**
         * Точность ответа (precision) возвращается только для домов.
         * @see https://api.yandex.ru/maps/doc/geocoder/desc/reference/precision.xml
         */
        console.log('precision', firstGeoObject.properties.get('metaDataProperty.GeocoderMetaData.precision'));
        /**
         * Тип найденного объекта (kind).
         * @see https://api.yandex.ru/maps/doc/geocoder/desc/reference/kind.xml
         */
        console.log('Тип геообъекта: %s', firstGeoObject.properties.get('metaDataProperty.GeocoderMetaData.kind'));
        console.log('Название объекта: %s', firstGeoObject.properties.get('name'));
        console.log('Описание объекта: %s', firstGeoObject.properties.get('description'));
        console.log('Полное описание объекта: %s', firstGeoObject.properties.get('text'));
        /**
         * Прямые методы для работы с результатами геокодирования.
         * @see https://tech.yandex.ru/maps/doc/jsapi/2.1/ref/reference/GeocodeResult-docpage/#getAddressLine
         */
        console.log('\nГосударство: %s', firstGeoObject.getCountry());
        console.log('Населенный пункт: %s', firstGeoObject.getLocalities().join(', '));
        console.log('Адрес объекта: %s', firstGeoObject.getAddressLine());
        console.log('Наименование здания: %s', firstGeoObject.getPremise() || '-');
        console.log('Номер здания: %s', firstGeoObject.getPremiseNumber() || '-');

        /**
         * Если нужно добавить по найденным геокодером координатам метку со своими стилями и контентом балуна, создаем новую метку по координатам найденной и добавляем ее на карту вместо найденной.
         */

       var myPlacemark2 = new ymaps.Placemark(coords, {
           iconContent: 'моя метка',
           balloonContent: 'Содержимое балуна <strong>моей метки</strong>'
           }, {
           preset: 'islands#violetDotIconWithCaption'
           });

       map.geoObjects.add(myPlacemark2);

      });

    });


  }, {
    render: function (result) {
      this._map.geoObjects
        .add(this._point = result);

      this.setFocusOnPoint();

      return this;
    },
    clear: function () {
      if(this._point) {
        this._map.geoObjects
          .remove(this._point);
        this._point = null;
      }

      return this;
    },
    getPoint: function () {
      return this._point;
    },
    setFocusOnPoint: function () {
      var point = this._point;

      this._map.setBounds(point.properties.get('boundedBy'), {
        checkZoomRange: true,
        duration: 200
      })
      .then(function () {
        point.balloon.open();
      });
    }
  });

  provide(MapView);
});

ym.modules.define('suggest-view', [
  'util.defineClass',
  'util.bind',
  'util.extend',
  'suggest',
  'event.Manager'
], function (provide, defineClass, bind, extend, suggest, EventManager) {
  var defaultOptions = {
    results: 5,
    minLength: 3
  };
  var SuggestView = defineClass(function (options) {
    this.events = new EventManager();
    this._input = jQuery('.search-query');
    this._options = extend({}, defaultOptions, options);
    this._setupListeners();
  }, {
    _setupListeners: function () {
      var options = this._options;
      var originalItems, getItem = function (displayName) {
        for(var i = 0, len = originalItems.length; i < len; i++) {
          if(originalItems[i].displayName === displayName) {
            return originalItems[i];
          }
        }
      };

      this._input
        .on('keydown', bind(this._onQueryChange, this))
        .typeahead(extend({
          source: function (query, fn) {
            suggest(query, options).then(function (items) {
              originalItems = items;
              fn(items.map(function (it) { return it.displayName; }));
            }, this);
          },
          updater: function (item) {
            var val = getItem(item).value;

            this.$element.val(val);
            //this.$element[0].form.submit();
            //this.$element.closest('form').submit();



            return val;
          },
          matcher: function (item) {
            return true;
          },
          sorter: function (items) {
            return items;
          },
          highlighter: function (item) {
            return getItem(item).hl.reduceRight(function (s, range, index, hl) {
              return s.substring(0, range[0]) + '<strong>' + s.slice.apply(s, range) + '</strong>' + s.substring(range[1]);
            }, item);
          }
        }, options));
    },
    _clearListeners: function () {
      this._input.off('keydown');
    },
    _onQueryChange: function (e) {
      this.events.fire('querychange', {
        query: this._input.val()
      });
    },
    setSuggestBounds: function (bounds) {
      this._options.boundedBy = bounds;
    },
    getRequest: function () {
      return this._input.val();
    }
  });

  provide(SuggestView);
});

})(this);

