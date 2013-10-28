// Generated by CoffeeScript 1.6.3
(function() {
  var $root;

  $.stellar.positionProperty.apple = {
    setTop: function($el, newTop, originalTop) {
      var _ref;
      $el.css({
        'top': newTop,
        'left': (_ref = $el.hasClass('hand')) != null ? _ref : originalTop - {
          newTop: 0
        }
      });
      return {
        setLeft: function($el, newLeft, originalLeft) {
          return $el.css('left', newLeft);
        }
      };
    }
  };

  $('body').niceScroll({
    cursorborder: "0",
    cursorcolor: "#fff",
    zindex: 1,
    horizrailenabled: false,
    cursorwidth: 15,
    borderradius: 0,
    cursortrail: '#ccc',
    zindex: 999999
  });

  $('.branding').find('.slide').list_ticker();

  $("#navigation").sticky({
    topSpacing: 0
  });

  $root = $('html, body');

  $('#navigation').find('a').on('click', function(e) {
    var href;
    href = $.attr(this, 'href');
    $root.animate({
      scrollTop: $(href).offset().top - 80
    }, 500, function() {
      return window.location.hash = href;
    });
    return false;
  });

  $('#mobile-nav').on('click', function(e) {
    return $(this).find('ul').toggleClass('show-nav');
  });

  $('.scrolldown').on('click', function() {
    var next, that;
    that = $(this);
    if (next === void 0) {
      next = $('.parallax').next();
    } else {
      next = next.next();
    }
    return $('html, body').animate({
      scrollTop: next.offsetHeight
    });
  });

  $.stellar({
    horizontalScrolling: false,
    horizontalOffset: 0,
    hideDistantElements: false
  });

}).call(this);