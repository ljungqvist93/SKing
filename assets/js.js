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