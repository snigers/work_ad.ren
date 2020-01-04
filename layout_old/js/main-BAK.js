var is_mobile = false; //initiate as false
// device detection
if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
  || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cocdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) {
  is_mobile = true;
}

var isIE9OrBelow = function() {
  return /MSIE\s/.test(navigator.userAgent) && parseFloat(navigator.appVersion.split("MSIE")[1]) < 10;
}

var numFormat = wNumb({
  thousand: ' '
});

$(window).on("scroll touchmove", function () {

  var scrollPos = $(window).scrollTop();

  $("a[name]").each(function() {
    if (scrollPos >= $(this).offset().top - 170) {
      $(".page-menu a").removeClass("active")
      $(".page-menu a[href='#"+$(this).attr("name")+"']").addClass("active");
    }
  });

  if (scrollPos > 50) {

    if (!$("header").hasClass("header-fixed")) {

      $("header").addClass("header-fixed");
    }


  } else {

    if ($("header").hasClass("header-fixed")) {

      $("header").removeClass("header-fixed");

    }

  }

  if (scrollPos > 300) {
    $(".up-link").fadeIn(150);
  } else {
    $(".up-link").fadeOut(150);
  }

});

$(window).resize(function () {

  makeUp();

  slickResponsive();

  $(".slick-slider").slick("setPosition");

});

$(window).on("load", function () {

  makeUp();

});

var baseUrl = ""

$(document).ready(function () {

  // New **************************************************************************************************

  // Poll

  quiz();

  // Poll END

  // Range input



  // Range input END

  // Top slider

  $(".main-slider").on("init", function () {

    $(".main-slider-nav-item").removeClass("active");

    $(".main-slider-nav-item").filter(function() {

      return $(this).closest(".nav-col").prevAll().length == $(".main-slider .slick-slide.slick-active").data("slick-index");

    }).addClass("active");

    $(".main-slider").on("beforeChange", function(event, slick, currentSlide, nextSlide){

      $(".main-slider-nav-item").removeClass("active");

      $(".main-slider-nav-item").filter(function() {

        return $(this).closest(".nav-col").prevAll().length == nextSlide;

      }).addClass("active");

    });

    $(".main-slider-nav-item").click(function () {

      $(".main-slider").slick("slickGoTo", $(this).closest(".nav-col").prevAll().length);

    });

  });

  $(".main-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    speed: 500,
    infinite: true,
    arrows: true,
    swipe: false,
    rows: 0
  });

  // Top slider END

  // Clients slider

  $(".clients-slider").slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    speed: 1000,
    infinite: false,
    arrows: false,
    swipe: true,
    rows: 0
  });

  // Clients slider END

  // Partners slider

  $(".partners-slider").slick({
    slidesToShow: 6,
    slidesToScroll: 6,
    speed: 1000,
    infinite: false,
    arrows: false,
    swipe: true,
    rows: 0
  });

  // Partners slider END

  // Cart address

  if ($(".cart-over-wrapper").length) {

    ymaps.ready().then(function () {
      return ymaps.modules.require('form-search');
    })
      .spread(function (FormSearch) {
        new FormSearch;
      })
      .fail(console.error, console);

  }

  // Cart address END

  // Cart

  $(".cart-content").mCustomScrollbar();

  // Cart END

  // Count buttons

  $("body").on("click", ".btn-count-plus, .btn-count-minus", function () {

    var countField = $(this).closest(".form-count-wrapper").find(".form-field input");

    if ($(this).hasClass("btn-count-plus")) {

      if (!countField.data("values")) {

        if (!countField.data("max") || (countField.data("max") && countField.val() < countField.data("max"))) {

          countField.val(parseInt(countField.val()) + 1).trigger("change");

        }

      } else {

        var valuesArr = countField.data("values");

        var curIndex = valuesArr.indexOf(parseInt(countField.val()));

        var prevVal = valuesArr[curIndex==0?0:curIndex-1];
        var nextVal = valuesArr[curIndex==valuesArr.length-1?valuesArr.length-1:curIndex+1];

        countField.val(nextVal).trigger("change");

      }


    }

    if ($(this).hasClass("btn-count-minus")) {

      if (!countField.data("values")) {

        if (!countField.data("min") || (countField.data("min") && countField.val() > countField.data("min"))) {

          countField.val(parseInt(countField.val()) - 1).trigger("change");

        }

      } else {

        var valuesArr = countField.data("values");

        var curIndex = valuesArr.indexOf(parseInt(countField.val()));

        var prevVal = valuesArr[curIndex==0?0:curIndex-1];
        var nextVal = valuesArr[curIndex==valuesArr.length-1?valuesArr.length-1:curIndex+1];

        countField.val(prevVal).trigger("change");

      }

    }

    if ($(this).closest(".form-count-wrapper").find(".form-field .input-val").length) {

      $(this).closest(".form-count-wrapper").find(".form-field .input-val").html(countField.val())

    }

  });

  // Count buttons END

  $("select").on("changed.bs.select", function() {

    $(this).trigger("change");

  });

  // Catalog item

  $("body").on("change input blur", ".catalog-item-controls input, .catalog-item-controls select", function () {

    shopPrice();

  });

  if ($(".catalog-item-controls").length) {

    shopPrice();

  }

  // Catalog item END

  // Program item

  $("body").on("change input blur", ".programs-item-controls input, .programs-item-controls select", function () {

    programPrice();

  });

  if ($(".programs-item-controls").length) {

    programPrice();

  }

  // Program item END

  // Cart price

  $("body").on("change input blur", ".cart-over-wrapper input, .cart-over-wrapper select", function () {

    cartPrice();

  });

  if ($(".cart-over-wrapper").length) {

    cartPrice();

  }

  // Cart price END

  // Photo slider

  $(".photo-slider, .catalog-item-slider, .programs-item-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    speed: 350,
    infinite: true,
    rows: 0,
    adaptiveHeight: true
  });

  // Photo slider END



  // Show more

  $("body").on("click", ".show-more", function () {

    var btn = $(this);

    btn.addClass("loading");

    $.ajax({
      url: btn.attr("href"),
      dataType: "html"
    }).done(function (data) {

      btn.before($(data));

      btn.remove();

    });

    return false;

  });

  // Show more END

  $(".modal").on("shown.bs.modal", function () {

    modalMakeup();

  });

  // Faq

  $(".faq-item-ttl, .faq-item .btn-collapse").click(function () {

    var faqItem = $(this).closest(".faq-item");

    faqItem.children(".faq-item-content").slideToggle(500,function () {

      if (faqItem.hasClass("active")) {

        faqItem.find(".faq-item").removeClass("active");

        faqItem.find(".faq-item-content .faq-item-content").slideUp(500);

      }

      faqItem.toggleClass("active");

    });

  });

  // Faq END

  slickResponsive();

  $(".up-link, .header-logo").click(function () {

    $("html, body").animate({
      scrollTop: 0
    },1000);

  });

  var scrollPos = $(window).scrollTop();

  if (scrollPos > 50) {

    if (!$("header").hasClass("header-fixed")) {

      $("header").addClass("header-fixed");
    }


  } else {

    if ($("header").hasClass("header-fixed")) {

      $("header").removeClass("header-fixed");

    }

  }

  // Main menu

  $(".navbar-trigger").click(function () {

    $(this).toggleClass("active");

    $(".navbar-wrapper").fadeToggle(150);
    $("body").toggleClass("menu-open");

  });

  $(".navbar-wrapper .close, .navbar-wrapper a").click(function () {

    $(".navbar-wrapper").fadeOut(150);
    $("body").removeClass("menu-open");
    $(".navbar-trigger").removeClass("active");

  });

  $(".navbar-wrapper").click(function (e) {

    if (!$(e.target).hasClass("navbar-nav") && !$(e.target).parents().hasClass("navbar-nav")) {

      $(".navbar-wrapper").fadeOut(150);
      $("body").removeClass("menu-open");
      $(".navbar-trigger").removeClass("active");

    }


  });

  // Expandable

  $("body").on("click", ".expandable-trigger", function () {

    var exTrigger = $(this);

    if (!exTrigger.hasClass("active")) {

      exTrigger.closest(".expandable-wrapper").find(".expandable-content").slideDown(500, function () {
        exTrigger.addClass("active");
        exTrigger.closest(".expandable-wrapper").addClass("open");
      });

    } else {

      exTrigger.closest(".expandable-wrapper").find(".expandable-content").slideUp(500, function () {
        exTrigger.removeClass("active");
        exTrigger.closest(".expandable-wrapper").removeClass("open");
      });

    }

  });

  $(".input-time").each(function () {

    var datepickerObj = $(this);

    datepickerObj.datetimepicker({
      format: 'LT',
      locale: 'ru-RU',
      allowInputToggle: true
    });

  });

  $(".input-date").each(function () {

    var datepickerObj = $(this);

    datepickerObj.datetimepicker({
      format: 'DD.MM.YYYY',
      locale: 'ru-RU',
      allowInputToggle: true
    });

  });


  $("input[type=file]").each(function () {

    if ($(this).data("label")) {
      var inputLabel = $(this).data("label");
    } else {
      var inputLabel = "Выбрать файл";
    }

    $(this).fileinput({
      showUpload: false,
      showPreview: false,
      showCancel: false,
      browseLabel: inputLabel,
      msgPlaceholder: "",
      dropZoneEnabled: false,
      maxFileCount: 1,
      mainClass: "input-group-lg"
    });

  });

  // Numeric input




  // Fancybox

  $("a.fancybox").fancybox();

  $(".fancybox-video").fancybox({
    helpers : {
      media : {}
    },
    type: "iframe"
  });

  // Forms

  $("body").on("mouseup", "li.dropdown-header", function () {
    $(this).toggleClass("active");
    $(this).nextAll("li[data-optgroup='" + $(this).data("optgroup") + "']").fadeToggle(150);
    return false;
  });

  $("select").not(".picker__select--month, .picker__select--year, .rates-nav-select").each(function () {
    if ($(this).attr("multiple")) {
      $(this).selectpicker({
        selectAllText: "Выбрать всё",
        deselectAllText: "Снять выбор",
        selectedTextFormat: "count",
        countSelectedText: function(count) {
          return count + " " + declOfNum(count, ['элемент', 'элемента', 'элементов']);
        }
      });
    } else {
      $(this).selectpicker({
        selectAllText: "Выбрать всё",
        deselectAllText: "Снять выбор"
      });
    }
  });

  $("select[multiple]").not(".simple-multi").on("shown.bs.select",function () {
    if (!$(this).prev(".dropdown-menu").find(".dropdown-footer").length) {
      dropdownFooter = '\
      <div class="dropdown-footer">\
      <div class="btn btn-1 btn-ico btn-save">Выбрать</div>\
      <div class="btn btn-cancel">Очистить</div>\
      </div>\
      ';
      $(this).prev(".dropdown-menu").find("ul").append(dropdownFooter);
    }
  });



  $("body").on("click",".bootstrap-select .btn-save", function () {
    $(this).closest("div.dropdown-menu").next("select").selectpicker("toggle");
    return false;
  });

  $("body").on("click",".bootstrap-select .btn-cancel", function () {
    $(this).closest("div.dropdown-menu").next("select").selectpicker('deselectAll');
    return false;
  });

  if ($("input:text").length) {
    $("input:text").each(function() {
      if ($(this).val()) {
        $(this).prev(".placeholder").addClass("active");
      }
    });
  }

  if ($("textarea").length) {
    $("textarea").each(function() {
      if ($(this).val()) {
        $(this).prev(".placeholder").addClass("active");
      }
    });
  }

  $("body").on("focus","input, textarea",function() {
    var el = $(this);

    if (el.parent().find(".placeholder").length) {
      var placeholder = el.parent().find(".placeholder");

      placeholder.addClass("active");

    }

  });

  $("body").on("blur","input, textarea",function() {
    var el = $(this);

    if (el.parent().find(".placeholder").length) {
      var placeholder = el.parent().find(".placeholder");

      if (!el.val() || (el.hasClass("input-phone") && ! /^(?=.*[0-9])[- +()0-9]+$/.test(el.val()))) {
        placeholder.removeClass("active");
      }

    }

  });

  $("body").on("click",".placeholder",function(e) {
    if ($(this).parent().find("input").length) {
      $(this).parent().find("input").trigger("focus");
    }
    if ($(this).parent().find("textarea").length) {
      $(this).parent().find("textarea").trigger("focus");
    }
  });

  $("body").on("focus","input[type=text], input[type=email], input[type=password], textarea", function () {
    $(this).closest(".form-item").addClass("focus");
  });

  $("body").on("blur","input[type=text], input[type=email], input[type=password], textarea", function () {
    $(this).closest(".form-item").removeClass("focus")
  });

  validateForms();

  // Popup anchors

  var hashArr = getHashVars();

  if (hashArr["serviceId"]) {

    $(".service-menu-link[data-service-id='" + hashArr["serviceId"] + "']").click();

  }

  if (hashArr["projectId"]) {

    $(".projects-list .project-tmb[data-project-id='" + hashArr["projectId"] + "']").click();

  }

  // Popup anchors END

});

function validateForms() {

  console.log('validafasd')

  // Range sliders

  $("input[type='range']").rangeslider();

  // Range sliders END

  $("input.numeric").each(function() {

    var str = $(this).val();
    str = str.replace(/\D+/g, '');
    $(this).val(str.replace(/\d(?=(?:\d{3})+(?!\d))/g, '$& '));

  });

  $("input.numeric").each(function () {
    
    fakeVal($(this));

  });

  $(document).on("input keyup paste change", ".numeric", function() {
    var str = $(this).val();
    str = str.replace(/\D+/g, '');
    $(this).val(str.replace(/\d(?=(?:\d{3})+(?!\d))/g, '$& '));

    fakeVal($(this));

  });

  $(document).on("blur", ".numeric", function() {

    if ($(this).data("max") && $(this).val().replace(/ /g,'') > $(this).data("max")) {
      $(this).val(numFormat.to(parseInt($(this).data("max"))));
    }

    if ($(this).data("min") && $(this).val().replace(/ /g,'') < $(this).data("min")) {
      $(this).val(numFormat.to(parseInt($(this).data("min"))));
    }

    $(this).trigger("change");

  });

  $('.textarea-autogrow').autogrow();

  $("input.input-phone").mask("+7 (999) 999-99-99");

  jQuery.validator.addClassRules('phone-email-group', {
    require_from_group: [1, ".phone-email-group"]
  });

  $("select").on("change", function () {
    if (!$(this).closest(".picker").length && !$(this).hasClass("faq-select")) {
      $(this).valid();
    }
  });

  $("body").on("click", ".form-item", function (e) {
    if ($(this).find(".bootstrap-select").length && !$(e.target).hasClass("bootstrap-select") && !$(e.target).parents().hasClass("bootstrap-select")) {
      $(e.target).closest(".form-item").find("select").selectpicker('toggle');
    }
  });

  $("form").each(function() {

    form = $(this);

    $(this).validate({
      ignoreTitle: true,
      focusInvalid: true,
      sendForm : false,
      errorPlacement: function(error, element) {

        if (element[0].tagName == "SELECT") {
          element.closest(".form-item").addClass("error");
          element.closest(".bootstrap-select").addClass("error");
          if (element.closest(".form-item").length) {
            error.insertAfter(element.closest(".form-item"));
          } else {
            error.insertAfter(element.closest(".bootstrap-select"));
          }
        } else {
          if (element.attr("type") == "checkbox") {
            element.siblings("label").addClass("checkbox-label-error")
          } else {
            error.insertAfter(element);
            element.closest(".form-group").addClass("error");
          }
        }

      },
      unhighlight: function(element, errorClass, validClass) {
        $(element).removeClass(errorClass);
        $(element).closest(".form-item").removeClass("error").addClass("valid");
        $(element).closest(".form-group").removeClass("error");

        if ($(element)[0].tagName == "SELECT") {
          $(element).closest(".form-item").removeClass("error");
          $(element).closest(".bootstrap-select").removeClass("error");
          if ($(element).closest(".form-item").length) {
            error.insertAfter(element.closest(".form-item"));
            $(element).closest(".form-item").next("label.error").remove();
          } else {
            $(element).closest(".btn-group").next("label.error").remove();
          }
        } else {
          $(element).next(".error").remove();
          if ($(element).attr("type") == "checkbox") {
            $(element).siblings("label").removeClass("checkbox-label-error")
          }
        }
      },
      invalidHandler: function(form, validatorcalc) {
        var errors = validatorcalc.numberOfInvalids();
        if (errors && validatorcalc.errorList[0].element.tagName == "INPUT") {
          validatorcalc.errorList[0].element.focus();
        }
      }
    });

    if ($(this).find("input.password").length && $(this).find("input.password-repeat").length) {
      $(this).find("input.password-repeat").rules('add', {
        equalTo: "#"+form.find("input.password").attr("id")
      });
    }

  });

}

function declOfNum(number, titles) {
  cases = [2, 0, 1, 1, 1, 2];
  return titles[ (number%100>4 && number%100<20)? 2 : cases[(number%10<5)?number%10:5] ];
}

function formSuccess(form) {

  form.find(".form-group input, .form-group textarea").val("");
  form.find(".placeholder").removeClass("active");
  $("#successModal").modal("show");
  form.closest(".modal").modal("hide");

}

function slickResponsive() {

  if ($("#mobile-indicator").css("display") == "block") {



  } else {



  }

}

function getScrollBarWidth () {
  var inner = document.createElement('p');
  inner.style.width = "100%";
  inner.style.height = "200px";

  var outer = document.createElement('div');
  outer.style.position = "absolute";
  outer.style.top = "0px";
  outer.style.left = "0px";
  outer.style.visibility = "hidden";
  outer.style.width = "200px";
  outer.style.height = "150px";
  outer.style.overflow = "hidden";
  outer.appendChild (inner);

  document.body.appendChild (outer);
  var w1 = inner.offsetWidth;
  outer.style.overflow = 'scroll';
  var w2 = inner.offsetWidth;
  if (w1 == w2) w2 = outer.clientWidth;

  document.body.removeChild (outer);

  return (w1 - w2);
};

function modalMakeup() {

  if ($(".modal").length && $(".modal").hasClass("show")) {

    if ($(".modal.show .modal-dialog").outerHeight() > $(".modal.show").height()) {

      $(".modal.show .close").css({
        marginRight: getScrollBarWidth()
      });

    } else {

      $(".modal.show .close").css({
        marginRight: 0
      });

    }

  }

}

(function($) {
  $.fn.autogrow = function() {
    return this.each(function() {
      var textarea = this;
      $.fn.autogrow.resize(textarea);
      $(textarea).focus(function() {
        textarea.interval = setInterval(function() {
          $.fn.autogrow.resize(textarea);
        }, 500);
      }).blur(function() {
        clearInterval(textarea.interval);
      });
    });
  };
  $.fn.autogrow.resize = function(textarea) {
    var lineHeight = parseInt($(textarea).css('line-height'), 10);
    var lines = textarea.value.split('\n');
    var columns = textarea.cols;
    var lineCount = 0;
    $.each(lines, function() {
      lineCount += Math.ceil(this.length / columns) || 1;
    });
    var height = lineHeight * (lineCount) + 13;
    $(textarea).css('height', height);
  };
})(jQuery);

function makeUp() {



}

function getHashVars() {

  var hashString = window.location.hash;

  hashString = hashString.replace("#","");

  var hashArray = hashString.split("&");

  var hashVars = new Array();

  for (var i in hashArray) {
    hashVar = hashArray[i].split("=");

    hashVars[hashVar[0]] = hashVar[1];

  }

  return hashVars;

}

function shopPrice() {

  var newPrice = $("select.shop-weight-field option:selected").data("price") * $(".shop-count-field").val();
  var oldPrice = $("select.shop-weight-field option:selected").data("old-price") * $(".shop-count-field").val();

  $("#priceItemOld .val").html(oldPrice);
  $("#priceItemNew .val").html(newPrice);

}

function programPrice() {

  var newPrice = $(".program-days-field").data("price") * $(".program-days-field").val() * $(".program-persons-field").val();
  var oldPrice = $(".program-days-field").data("old-price") * $(".program-days-field").val() * $(".program-persons-field").val();

  $("#priceProgramSingleOld .val").html($(".program-days-field").data("price"));
  $("#priceProgramSingleNew .val").html($(".program-days-field").data("old-price"));

  if ($(".program-bag-field").is(":checked")) {

    oldPrice += 1000;
    newPrice += 1000;

  }

  $("#priceProgramTotalOld .val").html(oldPrice);
  $("#priceProgramTotalNew .val").html(newPrice);

}

function cartPrice() {

  var itemsTotalPrice = 0;

  $(".cart-tmb").each(function () {

    if ($(this).hasClass("cart-tmb-shop")) {

      var weightField = $(this).find(".cart-weight-field");
      var countField = $(this).find(".cart-count-field");

      var priceCont = $(this).find(".cart-tmb-price-new .val");
      var priceOldCont = $(this).find(".cart-tmb-price-old .val");

      var valuesArr = weightField.data("values");
      var pricesArr = weightField.data("prices");
      var pricesOldArr = weightField.data("old-prices");

      var curIndex = valuesArr.indexOf(parseInt(weightField.val()));


      var itemPrice = pricesArr[curIndex];
      var itemOldPrice = pricesOldArr[curIndex];

      var newPrice = itemPrice * countField.val();
      var oldPrice = itemOldPrice * countField.val();

      priceCont.html(newPrice);
      priceOldCont.html(oldPrice);

      itemsTotalPrice += newPrice;

    } else if ($(this).hasClass("cart-tmb-program")) {

      var daysField = $(this).find(".cart-days-field");
      var personsField = $(this).find(".cart-persons-field");

      var priceCont = $(this).find(".cart-tmb-price-new .val");
      var priceOldCont = $(this).find(".cart-tmb-price-old .val");

      var newPrice = daysField.data("price") * daysField.val() * personsField.val();
      var oldPrice = daysField.data("old-price") * daysField.val() * personsField.val();

      priceCont.html(newPrice);
      priceOldCont.html(oldPrice);

      itemsTotalPrice += newPrice;

    }

    var maxDays = 0;

    $(".cart-tmb-program").each(function () {

      if (maxDays < $(this).find(".cart-days-field").val()) {

        maxDays = $(this).find(".cart-days-field").val();

      }

      $("#maxDays").html(maxDays);


    });

    var shippingPrice = $("#mkadDistance").html() * 20 * maxDays;

    $("#cartShippingPrice").html(shippingPrice);

    $("#cartItemsTotalPrice").html(itemsTotalPrice);

    $("#cartTotalPrice").html(itemsTotalPrice + shippingPrice);
    $("#cartTotalPriceDiscounted").html(itemsTotalPrice + shippingPrice);

  });

}

jQuery.extend(jQuery.validator.messages, {
  required: "Не заполнено поле",
  remote: "Please fix this field.",
  email: "Введите правильный e-mail.",
  url: "Please enter a valid URL.",
  date: "Please enter a valid date.",
  dateISO: "Please enter a valid date (ISO).",
  number: "Please enter a valid number.",
  digits: "Please enter only digits.",
  creditcard: "Please enter a valid credit card number.",
  equalTo: "Пароли не совпадают.",

  accept: "Please enter a value with a valid extension.",
  maxlength: jQuery.validator.format("Please enter no more than {0} characters."),
  minlength: jQuery.validator.format("Please enter at least {0} characters."),
  rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
  range: jQuery.validator.format("Please enter a value between {0} and {1}."),
  max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
  min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
});

function  fakeVal(field) {

  if (field.data("units")) {

    var titlesArr = field.data("units");

    if (titlesArr.length > 1) {

      var unitsStr = declOfNum(parseInt(field.val().replace(/ /g,'')), titlesArr);

    } else {

      var unitsStr = field.data("units");

    }


    if (!field.closest(".range-wrapper").find(".val-fake").length) {

      field.after('<div class="val-fake"><div class="val-fake-val">' + field.val() + '</div><div class="val-fake-units">' + unitsStr + '</div></div>');

    } else {

      field.closest(".range-wrapper").find(".val-fake-val").html(field.val());
      field.closest(".range-wrapper").find(".val-fake-units").html(unitsStr);

    }

  }


}

function quiz() {

  setActiveSteps();

  var pollFormSteps = $(".poll-form-step");

  var btnBack = $(".poll-form-nav .btn-back");
  var btnFwd = $(".poll-form-nav .btn-forward");
  var btnSubmit = $(".poll-form [type=submit]");

  pollFormSteps.hide();

  pollFormSteps.first().addClass("current").show();

  btnFwd.click(function () {

    $(".poll-form-step.current input, .poll-form-step.current textarea").valid();

    if ($(".poll-form-step.current").nextAll(".active").length == 1) {

      btnFwd.hide();
      btnSubmit.show();

    }

    if ($(".poll-form-step.current").nextAll(".active").length && !$(".poll-form-step.current .error").length) {

      var curStep = $(".poll-form-step.current");

      curStep.removeClass("current").hide();

      curStep.nextAll(".active").first().fadeIn(500).addClass("current");

      //quizDots();

    }


  });

  btnBack.click(function () {

    if ($(".poll-form-step.current").prevAll(".active").length) {

      var curStep = $(".poll-form-step.current");

      curStep.removeClass("current").hide();

      curStep.prevAll(".active").first().fadeIn(500).addClass("current");

      btnFwd.show();
      btnSubmit.hide();

      //quizDots();

    }


  });

  $(".poll-form input[type=checkbox], .poll-form input[type=radio]").change(function () {

    setActiveSteps();

    if ($(this).closest(".form-radio").next(".form-group-other").length) {

      if ($(this).is(":checked")) {
        $(this).closest(".form-radio").next(".form-group-other").fadeIn(250);
      } else {
        $(this).closest(".form-radio").next(".form-group-other").fadeOut(250);
      }

    }

  });

  $("#pollForm").submit(function() {
    if ($(this).valid()) {
      var form = $(this);

      var quizResult = '';

      $(".poll-form-step.active").not(".last").each(function () {

        var stepTitle = "<h4>" + $(this).find(".h3").html() + "</h4>";

        console.log(stepTitle);

        var stepValue = '';

        $(this).find("input[type=checkbox], input[type=radio]").each(function () {

          if ($(this).is(":checked")) {

            stepValue += '<div>' + $(this).next("label").html() + '</div>';

          }


        });

        $(this).find("input, textarea").not(".poll_name").not(".poll_phone").not("[type=hidden]").each(function () {

          if ($(this).val() && $(this).closest(".form-group").css("display") == "block") {

            if ($(this).closest(".form-group").hasClass("form-group-other")) {

              var fieldLabel = $(this).closest(".form-group").find("label").html() + " ";

            } else {

              var fieldLabel = "";

            }

            stepValue += '<div><strong>' + fieldLabel + '</strong>' + $(this).val() + '</div>';

          }


        });

        quizResult += stepTitle + stepValue;

      });

      //console.log(quizResult);

      $.ajax({
        type: "POST",
        url: baseUrl + "quiz.php",
        data: {
          subject: "pokadolgi77.ru - результат квиза",
          name: $(".active .poll_name").val(),
          phone: $(".active .poll_phone").val(),
          quizresult: quizResult
        }
      }).done(function() {

        formSuccess(form);

      });
      return false;
    }
  });

}

function setActiveSteps() {

  $(".poll-form-step").each(function () {


    var quizStep = $(this);

    if (!quizStep.data("parent") || $("#" + quizStep.data("parent")).is(":checked")) {

      quizStep.addClass("active");

    } else {

      quizStep.removeClass("active");

    }

  });

}