<div>
    <form action="{{ $ruta }}" method="post">
    	@include(obtenerCsrf($metodo))
		<button type="submit">Agregar</button>
    </form>
</div>