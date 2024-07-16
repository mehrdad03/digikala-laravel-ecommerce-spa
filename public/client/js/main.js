$(document).ready(function () {
  // Function to toggle readonly attribute based on screen width
  function toggleReadonly() {
    if ($(window).width() <= 1024) {
      $(".searchInput input").attr("readonly", true);
    } else {
      $(".searchInput input").removeAttr("readonly");
    }
  }

  // Initial call to set readonly attribute on page load
  toggleReadonly();

  // Toggle #mSearchBox visibility on click
  $(".searchInput").on("click", function () {
    if ($(window).width() <= 1024) {
      $("#mSearchBox").addClass("active")
    }
  });

  // Hide #mSearchBox when its button is clicked
  $("#mSearchBox button").on("click", function () {
    $("#mSearchBox").removeClass("active")
  });

  // Adjust readonly attribute on window resize
  $(window).on("resize", function () {
    toggleReadonly();
  });

  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 10,

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      // Responsive breakpoints
      320: {
          slidesPerView: 1,
          spaceBetween: 10,
      },
      480: {
          slidesPerView: 2,
          spaceBetween: 20,
      },
      768: {
          slidesPerView: 3,
          spaceBetween: 30,
      },
      1024: {
          slidesPerView: 4,
          spaceBetween: 20,
      },
  },
  });
});
