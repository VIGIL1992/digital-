$(function() {
    // global
    var interval;
    var initialized = false;
    // marquee logic
    function marq() {
      // object references
      $ctr = $('.marquee-container');
  
      // duplicate images to make transition appear more seamless
      //$ctr.children('ul.show').remove();
      var scrollerContent = $ctr.children('ul');
      if (!initialized) {
        scrollerContent.children().clone().appendTo(scrollerContent);
        initialized = true;
      }
      /*var $clone = scrollerContent.clone(true);
      $clone.children().clone().appendTo($clone);
      $clone.removeClass('ref').addClass('show');
      $clone.appendTo($ctr);*/
  
      // determine the width and loop breakpoint
      var curX = 0;
      scrollerContent.children().each(function() {
        var $this = $(this);
        $this.css('left', curX);
        curX += $this.outerWidth(true);
      });
      var fullW = curX / 2;
      var viewportW = $ctr.width();
  
      // Scrolling speed management
      var controller = {
        curSpeed: 0,
        fullSpeed: 2
      };
      var $controller = $(controller);
      var tweenToNewSpeed = function(newSpeed, duration) {
        if (duration === undefined)
          duration = 600;
        $controller.stop(true).animate({
          curSpeed: newSpeed
        }, duration);
      };
  
      // Pause on hover
      /*$ctr.hover(function() {
        tweenToNewSpeed(0);
      }, function() {
        tweenToNewSpeed(controller.fullSpeed);
      });*/
  
      // Scrolling management; start the automatic scrolling
      var doScroll = function() {
        var curX = $ctr.scrollLeft();
        var newX = curX + controller.curSpeed;
        if (newX > fullW * 2 - viewportW)
          newX -= fullW;
        $ctr.scrollLeft(newX);
      };
      interval = setInterval(doScroll, 20);
      tweenToNewSpeed(controller.fullSpeed);
    }
  
    if ($('.marquee-wrapper').length) {
      // init marquee
      marq();
      // resize handler
      $(window).resize(function() {
        clearInterval(interval);
        // re-init the marquee
        marq();
      });
    }
  });