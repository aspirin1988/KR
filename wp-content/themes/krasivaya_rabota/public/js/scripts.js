/* НАЧАЛО Image LightBox */
//проверяем, есть ли элементы с data-imagelightbox на странцие, и только тогда запускаем код
var isItLightbox = $('[data-imagelightbox]');
if (isItLightbox.length > 0) {
  // activity indicator
  var activityIndicatorOn = function () {
      $('<div id="imagelightbox-loading"><div></div></div>').appendTo('body');
    },
    activityIndicatorOff = function () {
      $('#imagelightbox-loading').remove();
    },

  // overlay
    overlayOn = function () {
      $('<div id="imagelightbox-overlay"></div>').appendTo('body');
    },
    overlayOff = function () {
      $('#imagelightbox-overlay').remove();
    },

  // close button
    closeButtonOn = function (instance) {
      $('<button type="button" id="imagelightbox-close" title="Close"></button>').appendTo('body').on('click touchend', function () {
        $(this).remove();
        instance.quitImageLightbox();
        return false;
      });
    },
    closeButtonOff = function () {
      $('#imagelightbox-close').remove();
    },

  // navigation
    navigationOn = function (instance, selector) {
      var images = $(selector);
      if (images.length) {
        var nav = $('<div id="imagelightbox-nav"></div>');
        for (var i = 0; i < images.length; i++)
          nav.append('<button type="button"></button>');

        nav.appendTo('body');
        nav.on('click touchend', function () {
          return false;
        });

        var navItems = nav.find('button');
        navItems.on('click touchend', function () {
          var $this = $(this);
          if (images.eq($this.index()).attr('href') != $('#imagelightbox').attr('src'))
            instance.switchImageLightbox($this.index());

          navItems.removeClass('active');
          navItems.eq($this.index()).addClass('active');

          return false;
        })
          .on('touchend', function () {
            return false;
          });
      }
    },
    navigationUpdate = function (selector) {
      var items = $('#imagelightbox-nav button');
      items.removeClass('active');
      items.eq($(selector).filter('[href="' + $('#imagelightbox').attr('src') + '"]').index(selector)).addClass('active');
    },
    navigationOff = function () {
      $('#imagelightbox-nav').remove();
    },

  // arrows
    arrowsOn = function (instance, selector) {
      var $arrows = $('<button type="button" class="imagelightbox-arrow imagelightbox-arrow-left"></button><button type="button" class="imagelightbox-arrow imagelightbox-arrow-right"></button>');

      $arrows.appendTo('body');

      $arrows.on('click touchend', function (e) {
        e.preventDefault();

        var $this = $(this),
          $target = $(selector + '[href="' + $('#imagelightbox').attr('src') + '"]'),
          index = $target.index(selector);

        if ($this.hasClass('imagelightbox-arrow-left')) {
          index = index - 1;
          if (!$(selector).eq(index).length)
            index = $(selector).length;
        }
        else {
          index = index + 1;
          if (!$(selector).eq(index).length)
            index = 0;
        }

        instance.switchImageLightbox(index);
        return false;
      });
    },
    arrowsOff = function () {
      $('.imagelightbox-arrow').remove();
    };

  // по нажатию на data-imagelightbox="f" открывается lighbBox:
  var selectorF = 'a[data-imagelightbox="f"]';
  var instanceF = $(selectorF).imageLightbox(
    {
      onStart: function () {
        overlayOn();
        closeButtonOn(instanceF);
        arrowsOn(instanceF, selectorF);
      },
      onEnd: function () {
        overlayOff();
        closeButtonOff();
        arrowsOff();
        activityIndicatorOff();
      },
      onLoadStart: function () {
        activityIndicatorOn();
      },
      onLoadEnd: function () {
        activityIndicatorOff();
        $('.imagelightbox-arrow').css('display', 'block');
      }
    });
}
/* КОНЕЦ Image LightBox */

$(function () {
  $('#datetimepicker').datetimepicker({
    stepping: 30,
    locale: 'ru'
  });
});