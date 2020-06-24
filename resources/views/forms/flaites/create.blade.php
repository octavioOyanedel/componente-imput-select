<form action="{{ route($ruta) }}" method="{{ $metodo }}">
	@include(obtenerCsrf($metodo))

	<x-select label="provincia" nombre="provincia_id" :coleccion="$coleccion" kColeccion="provincias" nuevo="si"/>

	<x-select label="provincia" nombre="otro_id" :coleccion="$coleccion" kColeccion="provincias" nuevo="si"/>
	<button type="submit">Agregar</button>
</form>