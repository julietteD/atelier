// JavaScript Document



skrollr.init({
    smoothScrolling: false,
    mobileDeceleration: 0.004,
    forceHeight: true

});


$('#navigationOpenClose').on('click', function() {
    $('#navigationContent').toggleClass('closed');
    $('#navigationOpenClose').toggleClass('closed');
});

$('.contactLink').on('click', function(event) {
    event.preventDefault();
    $('#contactContent').toggleClass('closed');
});

$('.closeBtn').on('click', function() {
    $('#contactContent').toggleClass('closed');
});

$(".bubbleLink").each(function() {
    $(this)
        .css("cursor", "pointer")
        .on('click', function(event) {
            event.preventDefault();
            var location = $(this).find('a').first().attr('href');
            var target = $(this).find('a').first().attr('target');
            //console.log(location +' '+target);

            window.open(location, target);

        });
});



$('.slider').slick({
    dots: true,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    adaptiveHeight: true,
    autoplay: true,
    autoplaySpeed: 5000,
});