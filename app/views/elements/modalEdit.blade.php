
<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        	<span class="glyphicon glyphicon-remove"></span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Edycja miejsca</h4>
      </div>
      <div class="modal-body">
        {{ Form::open(array('route' => array('places.update', $place->id), 'method' => 'put', 'id' => 'edit-form')) }}
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
              {{ Form::label('visited', 'Odwiedzone') }}
              {{ Form::hidden('visited', 0) }}
              {{ Form::checkbox('visited', 1) }}
            </div>
      </div>
      <div class="modal-footer">
            <div class="form-group">
              <button type="button" class="btn btn-default" data-dismiss="modal">Anuluj</button>
              {{ Form::submit('Zapisz zmiany', ['class' => 'btn btn-primary', 'id' => 'edit-place']) }}
            </div>
          {{ Form::close() }}
      </div>
    </div>
  </div>
</div>
