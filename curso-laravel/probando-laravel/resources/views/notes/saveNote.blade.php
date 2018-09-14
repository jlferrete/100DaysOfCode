<h1>

@if(!isset($note))
	Crear una nota
@else
	Actualizar la nota
@endif


</h1>


<form action="{{ !isset($note) ? url('/notas/note') : url('/notas/update-note/'.$note->id) }}" method="post">

	<input type="text" name="title" placeholder="Título de la nota" value="{{isset($note) ? $note->title : '' }}"><br/>
	<textarea name="description" placeholder="Descripcion de la nota">{{isset($note) ? $note->description : '' }}</textarea><br/>
	<input type="submit" value="Guardar" />

</form>	

<a href="{{ url('/notas') }}">Volver al listado</a>