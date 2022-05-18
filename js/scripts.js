$(function () {
	// Aqui vai todo o codigo em javascript.
	$('nav.mobile').click(function(){
		//alert('funcionando')
		
		var listaMenu = $('nav.mobile ul');
		//Abrir menu atraves do fadein
		/*
		if(listaMenu.is(':hidden') == true)			
		listaMenu.fadeIn();
			else 
				listaMenu.fadeOut();
			*/

			

			//Abrir ou fechar sem efeitos
			/*
			if(listaMenu.is(':hidden') == true)			
				//listaMenu.show();
				listaMenu.css('display','block');
			else 
				//listaMenu.hidden();
				listaMenu.css('display','none');
				*/

				//fa fa-times
				if(listaMenu.is(':hidden') == true)	{		
					//fa fa-times
					//fa fa-bars
				var icone =	$('.botao-menu-mobile').find('i');
					icone.removeClass('fa-bars');
					icone.addClass('fa-times');
					listaMenu.slideToggle();
				}
				else {
				var icone =	$('.botao-menu-mobile').find('i');
					icone.removeClass('fa-times');
					icone.addClass('fa-bars');
					listaMenu.slideToggle();					
						
					}
				//listaMenu.hidden();
				

	})
})