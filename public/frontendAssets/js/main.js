// client slick
$('.client_slick2').slick({
    infinite: true,        // Loop infinitely
    speed: 6000,           // Speed of the animation (adjust as needed)
    slidesToShow: 6,       // Number of items to show at once
    slidesToScroll: 1,     // Number of items to scroll at a time
    autoplay: false,        // Auto-play enabled
    autoplaySpeed: 0,      // Set to 0 for continuous scrolling
    cssEase: 'linear',     // Use linear easing for smooth scrolling
    dots: false,
    arrows: true,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 5
        }
      },
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 4
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 400,
        settings: {
          slidesToShow: 2
        }
      }
    ]
  });

  //testimonial 
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