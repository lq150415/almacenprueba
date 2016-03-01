$(document).ready(main);
var contador = 1;
var contadores = 1; 
var ver = 0; 
function main () {
	$('.menu_bar').click(function(){
		if (contador == 1) {
			$('nav.vert').animate({
				left: '0'
			});
			$('nav.lateral').animate({
				left: '-100%'
			});
			contador = 0;

		} else {
			contador = 1;
			contadores=1;
			$('nav.vert').animate({
				left: '-100%'
			});
			
		}
	});

	$('.menu_bar2').click(function(){
		if (contadores == 1) {
			$('nav.lateral').animate({
				left: '0'
							});
			contadores = 0;
		} else {
			contadores = 1;

			$('nav.lateral').animate({
				left: '-100%'
			});
		
		}
	
 if ((screen.width>=950) && ($contadores==1)) {
				$('nav.lateral').animate({
				left: '100%'
			});
		}
});
	// Mostramos y ocultamos submenus

	
}