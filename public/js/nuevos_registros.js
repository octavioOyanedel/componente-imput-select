$(document).ready(function() {
	var control = 0;

	$('.enlace-nuevo').click(function(e){
		var nombre = "provincia_id";
		e.preventDefault();
		var hijos = $(this).parent( "div" ).children();
		// 0: label
		// 1: a.enlace-nuevo
		// 2: div.nuevo-select
		// 3: contenedor-nuevo-input
		if(control === 0){
			hijos.eq(2).hide();
			resetSelect(hijos.eq(2).children().eq(0));
			hijos.eq(3).append('<input class="nuevo-input form-control form-control-sm" type="text" name="'+nombre+'" placeholder="Nueva '+nombre+'" />');			
			control = 1;
		}else{
			hijos.eq(3).children().eq(0).remove();
			hijos.eq(2).show();
			control = 0;
		}

	});

	function resetSelect(elemento){
		elemento.prop("selectedIndex", 0).attr('selected','true');
	}

});