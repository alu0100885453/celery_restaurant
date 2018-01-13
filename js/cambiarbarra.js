$(window).scroll(function() {
	if($(document).scrollTop()>100){
		$('nav,a').addClass('cambiarbarra');
	}

	else{
		$('nav,a').removeClass('cambiarbarra');
	}
});