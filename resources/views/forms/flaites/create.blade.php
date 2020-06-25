<form action="{{ route($ruta) }}" method="{{ $metodo }}">
	@include(obtenerCsrf($metodo))

	<x-select label="provincia" nombre="provincia_id" :coleccion="$coleccion" kColeccion="provincias" nuevo="si"/>
	<x-select label="comuna" nombre="comuna_id" :coleccion="$coleccion" kColeccion="comunas" nuevo="si"/>
	<x-select label="cerro" nombre="cerro_id" :coleccion="$coleccion" kColeccion="cerros" nuevo="si"/>

	<button type="submit">Agregar</button>
</form>