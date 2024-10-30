$(document).ready(function () {
  // Bootstrap Tooltip
  $('[data-bs-toggle="tooltip"]').tooltip({
    placement: "bottom",
    trigger: "hover",
    delay: { show: 100, hide: 200 },
  });

  // Text Slider
  var $current = $(".slider p.active");
  var $next = $current.next();
  setInterval(function () {
    $current.removeClass("active").addClass("next");
    if ($next.length === 0) {
      $next = $(".slider p").first();
    }
    $next.removeClass("next").addClass("active");
    $current = $next;
    $next = $current.next();
  }, 2000); // Change text every 2 seconds

  // Modal
  const myModal = document.getElementById("myModal");
  const myInput = document.getElementById("myInput");

  myModal.addEventListener("shown.bs.modal", () => {
    myInput.focus();
  });

  // Color Picker
  $(".color-circle").click(function () {
    $(".color-circle").removeClass("selected");
    $(this).addClass("selected");

    var color = $(this).data("color");

    // Change the text color and update the text of the p tag
    $("#colorText")
      .css("color", color)
      .text("رنگ: " + color);
  });

  // Product Details
  $(".nav-item").click(function (e) {
    e.preventDefault();
    $(".nav-item").removeClass("active");
    $(this).addClass("active");

    $(".content-div").removeClass("active");
    $($(this).data("target")).addClass("active");
  });

  // Show more / less
  $(".toggle-btn").click(function () {
    var moreContent = $(this).siblings(".more-content");
    var isVisible = moreContent.is(":visible");
    moreContent.slideToggle();
    $(this).html(
      isVisible
        ? 'بیشتر <svg width="15" height="15" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" /></svg>'
        : 'بستن <svg width="15" height="15" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" /></svg>'
    );
  });

  // sorting section
  $("#colorList li").click(function () {
    $("#colorList li").removeClass("text-danger");
    $(this).addClass("text-danger");
  });

  // product gallery
  var swiper = new Swiper(".myGallerySwiper", {
    pagination: {
      el: ".swiper-pagination",
    },
  });

  // product feature
  var swiper = new Swiper(".myProductFeatureSwiper", {
    slidesPerView: 3,
    spaceBetween: 10,
    breakpoints: {
      // Responsive breakpoints
      320: {
        slidesPerView: 3,
        spaceBetween: 5,
      },
      375: {
        slidesPerView: 4,
        spaceBetween: 10,
      },
      425: {
        slidesPerView: 5,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 5,
        spaceBetween: 10,
      },
      1024: {
        slidesPerView: 20,
        spaceBetween: 10,
      },
    },
  });
  var swiper = new Swiper(".myQuestionSwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
  });

/*  // Add positive points
  $("#addButtonPositive").click(function () {
    let inputText = $("#inputTextPositive").val();

    if (inputText !== "") {
      let listItem = `
            <li class="list-group-item border-0 d-flex justify-content-between align-items-center my-2">
            <div class="d-flex align-items-center gap-2">
                <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-success">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                ${inputText}
                </div>
                <button class="deleteButton border-0 bg-transparent">
                    <svg width="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-secondary">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                    </svg>
                </button>
            </li>
        `;
      $("#positiveList").append(listItem);
      $("#inputTextPositive").val(""); // Clear the input after adding
    }
  });

  // Add negative points
  $("#addButtonNegative").click(function () {
    let inputText = $("#inputTextNegative").val();

    if (inputText !== "") {
      let listItem = `
            <li class="list-group-item border-0 d-flex justify-content-between align-items-center my-2">
                <div class="d-flex align-items-center gap-2">
                  <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-danger">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                  </svg>
                  ${inputText}
                </div>
                <button class="deleteButton border-0 bg-transparent">
                    <svg width="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-secondary">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                    </svg>
                </button>
            </li>
        `;
      $("#negativeList").append(listItem);
      $("#inputTextNegative").val(""); // Clear the input after adding
    }
  });*/

  // Event delegation for dynamically created delete buttons
  $(document).on("click", ".deleteButton", function () {
    $(this).closest("li").remove();
  });



  // Quesiton Modal
  const maxAlphabets = 100;
  const minAlphabets = 10;

  $('#textArea').on('input', function() {
      const text = $(this).val();
      const alphabets = text.replace(/[^a-zA-Z]/g, ''); // Filter only alphabetic characters
      const alphabetCount = alphabets.length;

      // Update character count display
      $('#charCount').text(`${alphabetCount} / ${maxAlphabets}`);

      // Enable or disable button
      if (alphabetCount >= minAlphabets && alphabetCount <= maxAlphabets) {
          $('#submitButton').prop('disabled', false);
      } else {
          $('#submitButton').prop('disabled', true);
      }
  });
});
