@extends('layouts.default')

@section('table')
	<table class="table">
		<thead>
			<th>Nazwa</th>
			<th>Adres</th>
			<th>Info</th>
			<th>Link</th>
			<th></th>
		</thead>
		<tbody>
			@foreach($places as $place)
			<tr @if($place->visited) class='success' @endif>
				<td> {{ $place->name }} </td>
				<td> {{ $place->address }} </td>
				<td> {{ str_replace("\n","<br />",$place->info) }} </td>
				<td> {{ $place->link }} </td>
				<td>
					<span class="glyphicon glyphicon-pencil"></span>
					<span class="glyphicon glyphicon-remove"></span>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@stop

@section('right-panel')
	<h3>Dodaj nowe miejsce</h3>
	{{ Form::open(['url' => 'places', 'class' => 'form']) }}
		<div class="form-group">
			{{ Form::label('name', 'Nazwa') }}
			{{ Form::text('name', null, ['class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::label('address', 'Adres') }}
			{{ Form::textarea('address', null, ['class' => 'form-control', 'rows' => '3']) }}
		</div> 
		<div class="form-group">
			{{ Form::label('info', 'Info') }}
			{{ Form::textarea('info', null, ['class' => 'form-control', 'rows' => '3']) }}
		</div>
		<div class="form-group">
			{{ Form::label('link', 'Link') }}
			{{ Form::textarea('link', null, ['class' => 'form-control', 'rows' => '3']) }}
		</div>
		<div class="form-group">
			{{ Form::submit('Dodaj', ['class' => 'btn btn-primary']) }}
		</div>

	{{ Form::close() }}
@stop