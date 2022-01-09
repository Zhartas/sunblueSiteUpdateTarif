function start() {
	
	$('#navigate').css({
		'display': 'none'
	});

	$('#navigate').css({
		'display': 'block'
	});

	var largeur = $(window).width();

	$('.photonav .photo').css('width', largeur);


	//PhotoNav.init('navigate', largeur, 5000, false);

}




