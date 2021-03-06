$(document).ready(function(){
    //$('.banner').css('height', $(window).height() - 40);
  labeljump();
	$(".topBar").eocjsNewsticker({
	    speed: 25,
	    timeout: 0.5
	});
	$('.mob_menu').click(function(){
		$(this).parent().addClass('active');
	});
	$('nav ul .close').click(function(){
		$(this).parents().removeClass('active');
	});
  $('.fade').slick({
    dots: false,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    arrows: false,
    autoplay: true,
    pauseOnHover:false
  });
  $('.responsive').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      }
    ]
  });

  function isScrolledIntoView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
  }

  $(window).scroll(function () {
      $('.find_prtnr').each(function () {
          if (isScrolledIntoView(this) === true) {
              $(this).addClass('visible');
          }
      });

  });
});
// $(window).resize(function(){
//     $('.banner').css('height', $(window).height() - 40);
// });


/*INPUT LABEL JUMP*/
function labeljump(){
    $(".label_jump").on('keyup change', function(){
        var bus = $(this).val();
        if (bus.length > 0) {
            $(this).siblings("label").addClass("label-valid");
        } else {
            $(this).siblings("label").removeClass("label-valid");
        }
    });
}


var modal = document.getElementById('myModal');

$(".model_box_child").each(function(){
     $(this).hide();
});

$('.open_model').on( "click", function(e) {
    e.preventDefault();
    var id = $(this).attr('data-target'); 
    $("div.model_box_child").each(function(){
        $(this).hide();
        if($(this).attr('id') == id) {
            $(this).show();
            $('#myModal').show();
            $('body').addClass('hidden');
        }
    });
});

$('.open_modelb').on( "click", function(e) {
    e.preventDefault();
    var id = $(this).attr('data-target'); 
    $("div.model_box_child").each(function(){
        $(this).hide();
        if($(this).attr('id') == id) {
            $(this).show();
            $('#myModal').show();
            $('body').addClass('hidden');
            $(this).parents('.model_box').addClass('bottom_view');
        }
    });
});

$('.open_modelf').on( "click", function(e) {
    e.preventDefault();
    var id = $(this).attr('data-target');
    $("div.model_box_child").each(function(){
        $(this).hide();
        if($(this).attr('id') == id) {
            $(this).show();
            $('#myModal').show();
            $('body').addClass('hidden');
            $(this).parents('.model_box').addClass('full_view');
        }
    });
});

$('span.close_model, #myModal').on('click', function(){
  $('#myModal').hide().children('.model_box').removeClass('bottom_view full_view');
  $('#myModal .model_box_child').hide();
  $('body').removeAttr('class');
});

$('.close_model, #myModal').on('click', function(){
  $('#myModal').hide().children('.model_box').removeClass('bottom_view full_view');
  $('#myModal .model_box_child').hide();
  $('body').removeAttr('class');
});

$('.model_box').on('click', function(e){
  e.stopPropagation();
});



// top header news

(function($, window, document, undefined) {
  $.fn.eocjsNewsticker = function(options) {

    // _____ Options _____

    let defaults = {
      speed:    20,
      timeout:  1,
      divider:  ' ',
      type:     'static',   // static or ajax
      source:   '',         // ajax source (url)
      dataType: 'json',     // data type of the expected file (json or jsonp)
      callback: 'callback', // used for jsonp
      interval: 120         // polling interval of the ajax source (seconds)
    };
    let settings = $.extend({}, defaults, options);

    // _______ Inner Variables _______

    let self = this;
    let content = self.html();
    let container = {};
    let one = {};
    let two = {};
    let both = {};
    let oneNeedsUpdate = false;
    let twoNeedsUpdate = false;
    let windowWidth = $(window).width();

    // _______ Init _______

    function init() {
      create();
      start();
    }

    // _______ Create _______

    function create() {

      self.addClass('eocjs-newsticker').html('<div class="eocjs-newsticker-container"><div class="eocjs-newsticker-one"></div><div class="eocjs-newsticker-two"></div></div>');

      container = self.find('.eocjs-newsticker-container');
      one = self.find('.eocjs-newsticker-one');
      two = self.find('.eocjs-newsticker-two');
      both = self.find('.eocjs-newsticker-one, .eocjs-newsticker-two');

    }

    // _______ Start _______

    function start() {

      if (settings.type === 'static') {

        content = content + ' ' + settings.divider;
        run(content, (settings.timeout * 1000));

      } else if (settings.type === 'ajax') {

        container.prepend('<div class="eocjs-newsticker-loader"></div>');
        $.when(ajax(settings.source, settings.dataType, settings.callback)).done(function() {

          container.find('.eocjs-newsticker-loader').fadeOut(300, function() {
            run(content, 0);
            $(this).remove();
          });

          setInterval(function() {
            $.when(ajax(settings.source, settings.dataType, settings.callback)).done(function() {
              oneNeedsUpdate = true;
              twoNeedsUpdate = true;
            });
          }, settings.interval * 1000);

        });

      }

    }

    // _______ Ajax _______

    function ajax(source, dataType, callback) {

      return $.ajax({
        url: source,
        dataType: dataType,
        jsonpCallback: callback,
        success: function(data, textStatus, jqXHR) {
          content = '';
          if ($.isPlainObject(data) && !$.isEmptyObject(data)) {
            for (let property in data) {
              if (data.hasOwnProperty(property)) {
                if (content === '') {
                  content = data[property] + ' ' + settings.divider;
                } else {
                  content = content + ' ' + data[property] + ' ' + settings.divider;
                }
              }
            }
          } else {
            content = 'Error: No data found. Check your remote source!';
          }
        }
      });

    }

    // _______ Run _______

    function run(content, timeout) {

      update(both, content);
      two.css({'left': one.width()});

      setTimeout(function() {

        let width = one.width();
        let speed = settings.speed * width;

        animateSlide(one, 0, -width, speed);
        animateSlide(two, width, 0, speed);

      }, timeout);

    }

    // _______ Update _______

    function update(slide, content) {

      slide.html(content);
      while (container.width() > slide.width()) {
        slide.append(' ' + content);
      }
      slide.append('&nbsp;');

    }

    // _______ Animation _______

    function animateSlide(slide, start, destination, speed) {

      slide.animate(
        {left: destination},
        speed,
        'linear',
        function() {

          let width;

          if (start === 0) {

            if (slide === one && oneNeedsUpdate) {
              update(one, content);
              oneNeedsUpdate = false;
            } else if (slide === two && twoNeedsUpdate) {
              update(two, content);
              twoNeedsUpdate = false;
            }

            slide === one ? width = two.width() : width = one.width();
            speed = settings.speed * width;
            slide.css({'left': width});
            animateSlide(slide, width, 0, speed);

          } else {

            slide === one ? width = one.width() : width = two.width();
            speed = settings.speed * width;
            animateSlide(slide, 0, -width, speed);

          }

        }
      );

    }

    // _______ Resize _______

    $(window).on('resize', function() {
      if ($(window).width() != windowWidth) {

        if ($(window).width() > windowWidth) {
          if (one.position().left > 0) {
            update(one, content);
            twoNeedsUpdate = true;
          } else if (two.position().left > 0) {
            update(two, content);
            oneNeedsUpdate = true;
          }
        } else {
          oneNeedsUpdate = true;
          twoNeedsUpdate = true;
        }

        windowWidth = $(window).width();

      }
    });

    // _______ Init _______

    init();

    return this;

  };
})(jQuery, window, document);
