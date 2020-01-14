$('#body .xl').parent('p').addClass('xlarge');
$('#body .large').parent('p').addClass('llarge');


$('#toggleAdmin').on('click', function () {
	$('#adminTools').toggle();
});