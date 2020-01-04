if ($(".stores-map").length) {

  if ($("#mobile-indicator").css("display") == "block") {
    var balMaxWidth = 240;
  } else {
    var balMaxWidth = 600;
  }

  var mapMargin = [0, 0, 0, 0];

  var baseUrl = "";

  var initialUrl = $("#stores_city option[selected]").data("stores");

  var getPointOptions = function () {
    return {
      iconLayout: 'default#image',
      iconImageHref: baseUrl + 'images/store-pin.png',
      iconImageSize: [27, 38],
      iconImageOffset: [-14, -38],
      hideIconOnBalloonOpen: false,
      balloonLayout: MyBalloonLayout
    };
  };

  ymaps.ready(function () {

    var myMap = new ymaps.Map('storesMap', {
        center: [55.771902, 37.578022],
        zoom: 3,
        behaviors: ['default'],
        controls: []
      }, {
        searchControlProvider: 'yandex#search',
        checkZoomRange: true,
        zoomMargin: mapMargin,
        balloonMaxWidth: balMaxWidth
      }),

      clusterer = new ymaps.Clusterer({
        /**
         * Через кластеризатор можно указать только стили кластеров,
         * стили для меток нужно назначать каждой метке отдельно.
         * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/option.presetStorage.xml
         */
        clusterIcons: [{
          href: baseUrl + 'images/ico-cluster.png',
          size: [55, 55],
          offset: [-28, -24]
        }],
        clusterIconContentLayout: ymaps.templateLayoutFactory.createClass('<div class="cluster-icon">$[properties.geoObjects.length]</div>'),
        /**
         * Ставим true, если хотим кластеризовать только точки с одинаковыми координатами.
         */
        groupByCoordinates: false,
        /**
         * Опции кластеров указываем в кластеризаторе с префиксом "cluster".
         * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/ClusterPlacemark.xml
         */
        clusterDisableClickZoom: false,
        clusterHideIconOnBalloonOpen: false,
        geoObjectHideIconOnBalloonOpen: false,
        zoomMargin: mapMargin,
        clusterBalloonMaxWidth: balMaxWidth
      }),

      getPointData = function (index) {
        return {
          balloonContentBody: 'балун <strong>метки ' + index + '</strong>',
          clusterCaption: 'метка <strong>' + index + '</strong>'
        };
      },

      MyBalloonLayout = ymaps.templateLayoutFactory.createClass(
        '<div class="parks-balloon">' +
        '<div class="close"></div>' +
        '<div class="parks-balloon-inner">' +
        '$[[options.contentLayout observeSize minWidth=290 maxWidth=487]]' +
        '</div>' +
        '</div>', {
          /**
           * Builds an instance of a layout based on a template and adds it to the parent HTML
           * element.
           * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/layout.templateBased.Base.xml#build
           * @function
           * @name build
           */
          build: function () {
            this.constructor.superclass.build.call(this);

            this._$element = $('.parks-balloon', this.getParentElement());

            this.applyElementOffset();

            this._$element.find('.close')
              .on('click', $.proxy(this.onCloseClick, this));
          },

          /**
           * Removes the layout contents from DOM.
           * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/layout.templateBased.Base.xml#clear
           * @function
           * @name clear
           */
          clear: function () {
            this._$element.find('.close')
              .off('click');

            this.constructor.superclass.clear.call(this);
          },

          /**
           * The method will be invoked by the API's template system when resizing the nested
           * layout.
           * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/IBalloonLayout.xml#event-userclose
           * @function
           * @name onSublayoutSizeChange
           */
          onSublayoutSizeChange: function () {
            MyBalloonLayout.superclass.onSublayoutSizeChange.apply(this, arguments);

            if (!this._isElement(this._$element)) {
              return;
            }

            this.applyElementOffset();

            this.events.fire('shapechange');
          },

          /**
           * Moving the balloon so the "tail" points at the anchor point.
           * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/IBalloonLayout.xml#event-userclose
           * @function
           * @name applyElementOffset
           */
          applyElementOffset: function () {
            this._$element.css({
              left: -(this._$element[0].offsetWidth / 2),
              top: -(this._$element[0].offsetHeight) - 20
            });
          },

          /**
           * Closes the balloon when the "x" is clicked, throwing the "userclose" event on the
           * layout.
           * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/IBalloonLayout.xml#event-userclose
           * @function
           * @name onCloseClick
           */
          onCloseClick: function (e) {
            e.preventDefault();

            this.events.fire('userclose');
          },

          /**
           * Used for autopositioning (balloonAutoPan).
           * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/ILayout.xml#getClientBounds
           * @function
           * @name getClientBounds
           * @returns  {Number[][]} The coordinates of the top left and bottom right corners of the template relative to the anchor point.
           */
          getShape: function () {
            if (!this._isElement(this._$element)) {
              return MyBalloonLayout.superclass.getShape.call(this);
            }

            var position = this._$element.position();

            return new ymaps.shape.Rectangle(new ymaps.geometry.pixel.Rectangle([
              [position.left, position.top], [
                position.left + this._$element[0].offsetWidth,
                position.top + this._$element[0].offsetHeight
              ]
            ]));
          },

          /**
           * Checking the availability of the item (in IE and Opera it might not be there
           * yet).
           * @function
           * @private
           * @name _isElement
           * @param  {jQuery} [element] Element.
           * @returns  {Boolean} Availability flag.
           */
          _isElement: function (element) {
            return element && element[0]
          }
        }
      );


    myMap.behaviors.disable('scrollZoom');

    clusterer.events
      // Можно слушать сразу несколько событий, указывая их имена в массиве.
      .add(['mouseenter', 'mouseleave'], function (e) {
        var target = e.get('target'),
          type = e.get('type');
        if (typeof target.getGeoObjects != 'undefined') {
          // Событие произошло на кластере.
          if (type == 'mouseenter') {
            target.options.set('clusterIcons', [{
              href: baseUrl + 'images/store-pin-cluster-active.png',
              size: [27, 38],
              offset: [-14, -38]
            }]);
          } else {
            target.options.set('clusterIcons', [{
              href: baseUrl + 'images/store-pin-cluster.png',
              size: [27, 38],
              offset: [-14, -38]
            }]);
          }
        } else {
          // Событие произошло на геообъекте.
          if (type == 'mouseenter') {
            target.options.set('iconImageHref', baseUrl + 'images/store-pin-active.png');
          } else {
            target.options.set('iconImageHref', baseUrl + 'images/store-pin.png');
          }
        }
      });

    myMap.controls.add("zoomControl", {
      float: "none",
      position: {
        bottom: 50,
        left: 20
      }
    });

    var edisonPlacemark = new ymaps.Placemark([55.771902, 37.578022], {}, {
      iconLayout: 'default#image',
      iconImageHref: baseUrl + 'images/location-edison.png',
      iconImageSize: [36, 54],
      iconImageOffset: [-18, -54],
      hideIconOnBalloonOpen: false,
      zIndex: 9999999
    });

    myMap.geoObjects.add(edisonPlacemark);


    // URL выбранного списка при загрузке страницы
    var dataLink = baseUrl + initialUrl;

    $.getJSON(dataLink, function (data) {

      objectsMap(data.objects, myMap, clusterer);

    });

    // Фильтр

    $(".objects-filter form").change(function () {

      var dataLink = "load/objects-2.json";

      $.getJSON(dataLink, function (data) {

        objectsMap(data.objects, myMap, clusterer);

      });

    });


    $("body").on("click", ".object-tmb", function (e) {

      if ($(e.target).hasClass("object-tmb-address") || $(e.target).parents().hasClass("object-tmb-address")) {

        var objectId = $(this).closest(".object-tmb").data("id");


        if ($("#mobile-indicator").css("display") == "block") {

          $(".objects-map-wrapper").fadeIn(200, function () {
            $("body").addClass("map-open");
            //myMap.options.set("panelMaxMapArea", Infinity);
            myMap.container.fitToViewport();
            myMap.setBounds(clusterer.getBounds(), {
              checkZoomRange: true
            }).then(function () {
              openObject(objectId, myMap, clusterer);
            }, this);

          });

        } else {

          //myMap.options.set("panelMaxMapArea", 0);
          openObject(objectId, myMap, clusterer);

        }

        return false;

      }

    });


    $(".objects-map-link").click(function () {

      $(".objects-map-wrapper").fadeIn(200, function () {
        $("body").addClass("map-open");
        myMap.container.fitToViewport();
        myMap.setBounds(clusterer.getBounds(), {
          checkZoomRange: true,
          zoomMargin: mapMargin
        });
      });

    });

    $(".objects-map-wrapper .close").click(function () {

      $(".objects-map-wrapper").fadeOut(200, function () {
        $("body").removeClass("map-open");
      });

    });

    $(".objects-map-wrapper").click(function (e) {

      if (!$(e.target).hasClass("objects-map") && !$(e.target).parents().hasClass("objects-map")) {

        $(".objects-map-wrapper").fadeOut(200, function () {
          $("body").removeClass("map-open");
        });

      }

    });

    $(window).resize(function () {

      if ($("#mobile-indicator").css("display") == "block") {
        balMaxWidth = 240;
      } else {
        balMaxWidth = 600;
      }

      myMap.options.set("balloonMaxWidth", balMaxWidth);
      clusterer.options.set("clusterBalloonMaxWidth", balMaxWidth);

    });


  })
  ;


}


function objectsMap(elements, map, clusterer) {

  var geoObjects = [];

  clusterer.removeAll();

  $.each(elements, function (key, val) {

    geoObjects[key] = new ymaps.Placemark(val.geometry.coordinates, {
      id: val.properties.id,
      type: val.properties.type,
      clusterCaption: val.properties.name,
      balloonContentHeader: val.properties.name,
      balloonContentBody: '\
        <!--div class="point-descr-wrapper">\
          <div class="point-descr-cont">\
            <div class="point-address">\
              ' + val.properties.address + '\
            </div>\
            <div class="point-area">\
              ' + val.properties.area + ' м&sup2;\
            </div>\
            <div class="point-link">\
              <a href="' + val.properties.url + '">Подробнее</a>\
            </div>\
          </div>\
        </div-->\
      '
    }, getPointOptions(val.properties.iconType));

  });

  clusterer.add(geoObjects);

  map.geoObjects.add(clusterer);

  map.setBounds(clusterer.getBounds(), {
    checkZoomRange: true,
    zoomMargin: mapMargin
  });

}

function getHashVars() {

  var hashString = window.location.hash;

  hashString = hashString.replace("#", "");

  var hashArray = hashString.split("&");

  var hashVars = new Array();

  for (var i in hashArray) {
    hashVar = hashArray[i].split("=");

    hashVars[hashVar[0]] = hashVar[1];

  }

  return hashVars;

}

function openObject(id, map, clusterer) {

  curObjectArr = $.grep(clusterer.getGeoObjects(), function (element, index) {
    return element.properties.get("id") == id
  });

  curObject = curObjectArr[0];

  var objectState = clusterer.getObjectState(curObject);

  if (objectState.isClustered) {
    objectState.cluster.state.set('activeObject', curObject);
    clusterer.balloon.open(objectState.cluster);

  } else {
    curObject.balloon.open();

  }


  if ($("#mobile-indicator").css("display") != "block") {

    $("body, html").animate({
      scrollTop: $(".objects-map").offset().top - $("header").height()
    }, 1000);

  }

}