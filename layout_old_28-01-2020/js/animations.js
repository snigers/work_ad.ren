var is_mobile = false;

if( $('#mobile-indicator').css('display')=='block') {
  is_mobile = true;
}

$(window).on("resize scroll", function () {

  $(".blockquote-alt-pics").each(function () {

    var picLeft = $(".blockquote-alt-pics .col-6:nth-child(1)"),
        picRight = $(".blockquote-alt-pics .col-6:nth-child(2)"),
        prlxTrigger = $(this);

    picLeft.prlx(prlxTrigger,150,-100);
    picRight.prlx(prlxTrigger,200,-150);

  });

  $(".dept-list .row > *:nth-child(3n-2)").prlx($(".dept-list"),0,150);
  $(".dept-list .row > *:nth-child(3n)").prlx($(".dept-list"),0,-150);

  $(".page-header .row > *:nth-child(1)").prlx($(".page-header"),-300,0, true);
  $(".page-header .row > *:nth-child(2)").prlx($(".page-header"),300,0, true);

});

if (!is_mobile) {

  // Scenes

  var controller = new ScrollMagic.Controller();

  $(".dept-teaser").each(function (index, element) {

    TweenMax.to($(element).find(".dept-teaser-pic"), 0, {
      x: -100,
      opacity: 0,
      ease:Power2.easeInOut
    });

    var deptPicTween = TweenMax.to($(element).find(".dept-teaser-pic"), .75, {
      x: 0,
      opacity: 1
    });

    var deptPicScene = new ScrollMagic.Scene({
      triggerElement: element,
      offset: -300
    })
      .setTween(deptPicTween)
      .addTo(controller);

    TweenMax.to($(element).find(".dept-teaser-descr"), 0, {
      x: 100,
      opacity: 0,
      ease:Power2.easeInOut
    });

    var deptDescrTween = TweenMax.to($(element).find(".dept-teaser-descr"), .75, {
      x: 0,
      opacity: 1,
      delay: .25
    });

    var deptDescrScene = new ScrollMagic.Scene({
      triggerElement: element,
      offset: -300
    })
      .setTween(deptDescrTween)
      .addTo(controller);



  });

  $(".career-item").each(function (index, element) {

    TweenMax.to($(element).find(".career-item-pic"), 0, {
      y: 100,
      opacity: 0,
      ease:Power2.easeInOut
    });

    var careerPicTween = TweenMax.to($(element).find(".career-item-pic"), .75, {
      y: 0,
      opacity: 1
    });

    var careerPicScene = new ScrollMagic.Scene({
      triggerElement: element,
      offset: -300
    })
      .setTween(careerPicTween)
      .addTo(controller);

    TweenMax.to($(element).find(".career-item-descr"), 0, {
      y: 100,
      opacity: 0,
      ease:Power2.easeInOut
    });

    var careerDescrTween = TweenMax.to($(element).find(".career-item-descr"), .75, {
      y: 0,
      opacity: 1,
      delay: .25
    });

    var careerDescrScene = new ScrollMagic.Scene({
      triggerElement: element,
      offset: -300
    })
      .setTween(careerDescrTween)
      .addTo(controller);



  });


}

(function( $ ) {
  $.fn.prlx = function(pTrigger, yStart, yFinish, fromTop) {

    if (!is_mobile) {

      var obj = $(this);

      var yPos;

      if ($(window).scrollTop() < pTrigger.offset().top - $(window).height()) {

        yPos = "start";

      } else if ($(window).scrollTop() > pTrigger.offset().top + $(window).height()) {

        yPos = "finish";

      } else {

        if (fromTop) {

          if (pTrigger.offset().top <= $(window).scrollTop()) {

            var percentOffset = (pTrigger.offset().top - $(window).scrollTop()) / ($(window).height() * 2);

          } else {

            percentOffset = 0;

          }


        } else {

          var percentOffset = (pTrigger.offset().top + $(window).height() - $(window).scrollTop()) / ($(window).height() * 2);

        }

        var yRange = yStart - yFinish,
          posInRange = yRange * percentOffset,
          yPos = posInRange + yFinish;

        obj.attr("percentOffset", percentOffset);

      }

      TweenMax.to(obj, .7, {y: yPos, ease:Linear.ease});

    }

  };
})( jQuery );

