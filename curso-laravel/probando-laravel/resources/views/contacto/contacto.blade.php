@include('contacto.cabecera', array('nombre' => $nombre))

{{-- Mi comentario de html --}}
<?php // Esto es lo mismo que la linea anterior ?>

<h2>Bienvenido {{$nombre}}. {{-- isset($edad) && !is_null($edad) ? $edad : 'No existe la edad' --}}.</h2>

<h3>{!!$nombre!!} <?php echo $edad?> <?=$edad?></h3>

{{-- IF en Blade --}}

@if(is_null($edad))
	No existe la edad<br/>
@else
	Si existe la edad: {{$edad}}<br/>
@endif


{{-- FOR en Blade --}}

<?php $numero = 4; ?>

<p><strong>Tabla del {{$numero}}</strong></p>
@for($i=1; $i<=10; $i++)
	{{$i.' x '.$numero.' = '.($i*$numero)}}<br/>
@endfor


{{-- WHILE en Blade --}}

<?php $j=1; ?>
@while($j<=7)
	{{'Hola Mundo '.$j}}
	 <?php $j++ ?>
@endwhile

{{-- FOREACH en Blade --}}

<h4>Listado de frutas</h4>
@foreach($frutas as $fruta)
	<p>{{$fruta}}</p>
@endforeach