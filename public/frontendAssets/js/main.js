// client slick
$('.partner_wrap').slick({
    dots: false,
    arrows: true,
    nextArrow: '<span class="slick_right"><i class="fa-solid fa-chevron-right"></i></span>',
    prevArrow: '<span class="slick_left"><i class="fa-solid fa-chevron-left"></i></span>',
    infinite: true,
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 3
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 2
        }
      },
  
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
  
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

$( function() {
	$('.counter').countUp();
});

// event slick
$('.event').slick({
  dots: false,
  arrows: true,
  nextArrow: '<span class="slick_right"><i class="fa-solid fa-chevron-right"></i></span>',
  prevArrow: '<span class="slick_left"><i class="fa-solid fa-chevron-left"></i></span>',
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 3
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 2
      }
    },

    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },

    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

//testimonial slick
$('.testimonial ').slick({
  dots: false,
  arrows: true,
  nextArrow: '<span class="slick_right"><i class="fa-solid fa-chevron-right"></i></span>',
  prevArrow: '<span class="slick_left"><i class="fa-solid fa-chevron-left"></i></span>',
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 2000
});

//testimonial 
$('.testimonial2').slick({
  dots: false,
  arrows: true,
  nextArrow: '<span class="slick_right"><i class="bx bxs-right-arrow"></i></span>',
  prevArrow: '<span class="slick_left"><i class="bx bxs-left-arrow"></i></span>',
  infinite: true,
  autoplay: true,
  autoplaySpeed: 5000,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },

    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },

    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

document.getElementById("year").innerHTML = new Date().getFullYear();
