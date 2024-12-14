$(document).ready(function () {
    //Change selected option for addresses
    $(".shipping-address__item").click(function () {
        $(".shipping-address__item").removeClass("active");
        $(this).addClass("active");
    });
    //Change selected option for shipping type
    $(".shipping-type__item").click(function () {
        $(".shipping-type__item").removeClass("active");
        $(this).addClass("active");
    });

    //Add address modal box
    $(".openModalBtn").click(function () {
        $("#addressModal").fadeIn(100); // نمایش مدال
    });

    $(".close-btn").click(function () {
        $("#addressModal").fadeOut(100);
    });

    $(window).click(function (event) {
        if ($(event.target).is("#addressModal")) {
            $("#addressModal").fadeOut(100);
        }
    });


});

document.addEventListener('close-modal', () => {
    const modal = document.getElementById('addressModal');
    if (modal) {
        modal.style.display = 'none'; // پنهان کردن مدال
    }
});



