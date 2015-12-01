//bank login//

$bankButton = $('#bank-login');
$loginBox = $('#login-box');
$cancel = $('#cancel');

$bankButton.on('click', function(){
	$loginBox.stop().slideToggle(100);
});

$cancel.on('click', function(){
	$loginBox.stop().slideUp(100);
});

