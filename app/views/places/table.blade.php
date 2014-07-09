@extends('layouts.default')

@section('body')
	<table class="table">
		<col span="4">
		<col span="1" class="last">
		<thead>
			<th>Nazwa</th>
			<th>Adres</th>
			<th>Info</th>
			<th>Link</th>
			<th></th>
		</thead>
		<tbody>
			@if ($places)
				@foreach($places as $place)
					<tr id="place-{{ $place->id }}" {{ ($place->visited)?"class='success'":"" }}>
						<td class="table-cell" id="place-name-{{ $place->id }}"> {{ $place->name }} </td>
						<td class="table-cell" id="place-address-{{ $place->id }}"> {{ $place->address }} </td>
						<td class="table-cell" id="place-info-{{ $place->id }}"> {{ str_replace("\n","<br />",$place->info) }} </td>
						<td class="table-cell" id="place-link-{{ $place->id }}"> {{ link_to($place->link, $place->link) }}</td> 
						<td class="table-cell" id="place-actions">
							<a id="toogle-edit-modal" href="#modalEdit" data-toggle="modal" data-id="{{ $place->id }}"><span class='glyphicon glyphicon-pencil'></span></a>
							<a id="toogle-delete-modal" href="#modalDelete" data-toggle="modal" data-id="{{ $place->id }}"><span class='glyphicon glyphicon-remove'></span></a>
						</td>
					</tr>
				@endforeach 
			@endif
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

