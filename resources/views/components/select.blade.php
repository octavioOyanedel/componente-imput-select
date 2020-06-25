<div>
	<div>	
		<label for="{{ $nombre }}">{{ ucfirst($label) }}</label> 
		<a href="" class="enlace-nuevo float-right" title="Agregar nuevo/a {{ $kColeccion }}.">
			<i class="fas fa-plus"></i>
		</a>
		<div class="@if ($nuevo === 'si'){{'nuevo-select'}}@endif">
		    <select class="browser-default custom-select custom-select-sm mb-4" name="{{ $nombre }}" id="{{ $nombre }}">
		    	<option value="" selected>...</option>
		    	@foreach ($coleccion[$kColeccion] as $e)
		    		<option value="{{ $e->id }}">{{ $e->nombre }}</option>
		    	@endforeach
		    </select>		
		</div>

		<div class="contenedor-nuevo-input"></div>
	</div>

</div>