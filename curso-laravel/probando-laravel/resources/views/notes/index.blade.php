<h1>Aplicación de notas</h1>

<h3>Listado de notas:</h3>

<ul>
@foreach($notes as $note)
	<li>
		<ul>
			<li>{{$note->title}}</li>
			<li><a href="{{url('/notas/note/'.$note->id)}}">Ver</a></li>
		</ul>
@endforeach
</ul>