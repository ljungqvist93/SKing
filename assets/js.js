$('#body .xl').parent('p').addClass('xlarge');
$('#body .large').parent('p').addClass('llarge');


$('#toggleAdmin').on('click', function () {
	$('#adminTools').toggle();
});


$('.fa-bars').click(function () {
	$('#mobileMenu').slideToggle('fast');
});

$('#imageToggler').click(function () {
	$('#imageIframe').slideToggle('fast');
});

$('iframe[src*="youtube"]').wrap("<div class='yt'></div>");

$(document).ready(function(){
    $('#caruselle').slick({
        prevArrow: false,
        nextArrow: false,
        dots: true,
        autoplay:true,
        autoplaySpeed:3000,
        mobileFirst: true
    });
});