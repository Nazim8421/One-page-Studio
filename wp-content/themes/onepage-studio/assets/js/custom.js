/*Work Section Slider
-------------------------*/
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    freeMode: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
     breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
    }

});

/*Team Section Slider
-------------------------*/
var swiper = new Swiper(".mySwiperteam", {
    slidesPerView: 1,
    spaceBetween: 30,
    freeMode: true,
    /*autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },*/
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
     breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
    }

});

/*Counter Section
-------------------------*/
$(document).ready(function() {
    var counted = 0;
    $(window).scroll(function() {

      var oTop = $('#spin-data').offset().top - window.innerHeight;

      if (counted == 0 && $(window).scrollTop() > oTop) {
        $('.counter').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
        counted = 1;
      }

    });
    var val_Counter = $('.counter').text();
    $('.counter').number( val_Counter, 2 );
});




/*Testimonial Section
-------------------------*/
var testimonial = document.getElementById("testimonial"),
testimonialDots = Array.prototype.slice.call(document.getElementById("testimonial-dots").children),
testimonialContent = Array.prototype.slice.call(document.getElementById("testimonial-content").children),
testimonialleftArrow = document.getElementById("left-arrow"),
testimonialRightArrow = document.getElementById("right-arrow"),
testimonialSpeed = 4500,
currentSlide = 0,
currentActive = 0,
testimonialTimer;
// coding with nick
window.onload = function () {

    // testimonial Script
    function playSlide(slide) {
        for (var k = 0; k < testimonialDots.length; k++) {
            testimonialContent[k].classList.remove("active");
            testimonialContent[k].classList.remove("inactive");
            testimonialDots[k].classList.remove("active");

        }

        if(currentSlide == 5){
            testimonialContent[0].classList.remove("inactive");
            testimonialContent[0].classList.add("active");
            testimonialDots[0].classList.add("active");

        }
        if (slide < 0) {
            slide = currentSlide = testimonialContent.length - 1;
        }


        if (slide > testimonialContent.length - 1) {
            slide = currentSlide = 0;
        }
        /*if (currentActive != currentSlide) {
            testimonialContent[currentActive].classList.add("inactive");
        }*/
        testimonialContent[slide].classList.add("active");
        testimonialDots[slide].classList.add("active");

        currentActive = currentSlide;

        clearTimeout(testimonialTimer);
        testimonialTimer = setTimeout(function () {
            playSlide(currentSlide += 1);
        }, testimonialSpeed)
    }
// coding with nick
    /*testimonialleftArrow.addEventListener("click", function () {
        playSlide(currentSlide -= 1);
    })
    testimonialRightArrow.addEventListener("click", function () {
        playSlide(currentSlide += 1);
    });*/

    for (var l = 0; l < testimonialDots.length; l++) {
        testimonialDots[l].addEventListener("click", function () {
            playSlide(currentSlide = testimonialDots.indexOf(this));
        })
    }
    playSlide(currentSlide);

}

/*Sticky Header Section
-------------------------*/
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
     //>=, not <=
    if (scroll >= 100) {
        //clearHeader, not clearheader - caps H
        $("header").addClass("darkHeader");
    }else{
      $("header").removeClass("darkHeader");
    }
}); //missing );

    