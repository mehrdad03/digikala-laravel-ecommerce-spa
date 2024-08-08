$(document).ready(function () {
  // get the all menu list in the mega menu
  const menuLists = $(".mega-menu .menu-list ul li");
  let oldElement;

  // menu in menu list eventListener
  menuLists.each(function () {
    $(this).on("mouseover", function (e) {
      // this element => ( menu list item )
      const thisElement = $(e.target);
      // get the [data-target] attribute in menu list
      const attrName = thisElement.attr("data-target");
      // get the all categorys
      const categorys = $(".category");
      // iterating the categorys list and removed the active class from all category in categorys
      categorys.removeClass("active");
      // iterating the categorys and checking the classList for displayed the this category
      categorys.each(function () {
        $(this).toggleClass("active", $(this).hasClass(attrName));
      });
      // this menu list added the active class
      thisElement.addClass("active");
      // if oldElement is exist so removing the active class
      if (oldElement) oldElement.removeClass("active");
      oldElement = thisElement;
    });
  });

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
      $("#mSearchBox").addClass("active");
    }
  });

  // Hide #mSearchBox when its button is clicked
  $("#mSearchBox button").on("click", function () {
    $("#mSearchBox").removeClass("active");
  });

  // Adjust readonly attribute on window resize
  $(window).on("resize", function () {
    toggleReadonly();
  });

  // header search slider
  var swiper = new Swiper(".myHeaderSearchSwiper", {
    slidesPerView: 5,
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  $("#searchInput").focus();

  // Show or hide the clear button and #clean div based on input value
  $("#searchInput").on("input", function () {
    if ($(this).val().length > 0) {
      $("#clearBtn").show();
      $("#clean").hide();
    } else {
      $("#clearBtn").hide();
      $("#clean").show();
    }
  });

  // Clear the input when the clear button is clicked and show #clean div
  $("#clearBtn").on("click", function () {
    $("#searchInput").val("").focus();
    $(this).hide();
    $("#clean").show();
  });

  // Story section
  var swiper2 = new Swiper(".myStorySwiper", {
    slidesPerView: 12,
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      // Responsive breakpoints
      320: {
        slidesPerView: 4,
        spaceBetween: 10,
      },
      375: {
        slidesPerView: 5,
        spaceBetween: 10,
      },
      425: {
        slidesPerView: 6,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 7,
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 12,
        spaceBetween: 20,
      },
    },
  });

  // product slider
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 5,
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
        spaceBetween: 10,
      },
    },
  });

  // Brands slider
  var swiper = new Swiper(".myBrandSwiper", {
    slidesPerView: 5,
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
        spaceBetween: 10,
      },
    },
  });

  // Initial countdown time (24 hours)
  let totalSeconds = 24 * 3600;

  function updateCountdown() {
    let hours = Math.floor(totalSeconds / 3600);
    let minutes = Math.floor((totalSeconds % 3600) / 60);
    let seconds = totalSeconds % 60;

    $("#hours").text(String(hours).padStart(2, "0"));
    $("#minutes").text(String(minutes).padStart(2, "0"));
    $("#seconds").text(String(seconds).padStart(2, "0"));

    if (totalSeconds > 0) {
      totalSeconds--;
    } else {
      clearInterval(countdownInterval);
    }
  }

  let countdownInterval = setInterval(updateCountdown, 1000);
  updateCountdown(); // Initial call to set the timer immediately
});
