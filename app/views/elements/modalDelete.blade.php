
<div class="modal fade bs-example-modal-sm" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <span class="glyphicon glyphicon-remove"></span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Usunięcie miejsca</h4>
      </div>
      <div class="modal-body">
        <span id="test"></span>
        Czy na pewno chcesz usunąć wybrane miejsce?
      </div>
      <div class="modal-footer">
          <div class="form-group">
         
            {{ Form::open(array('route' => array('places.destroy', $place->id), 'method' => 'delete', 'id' => 'delete-form')) }}
              <button type="button" class="btn btn-default" data-dismiss="modal">Nie</button>
              {{ Form::submit('Tak', ['class' => 'btn btn-primary', 'id' => 'delete-place']) }}
            {{ Form::close() }}
          </div>
      </div>
    </div>
  </div>
</div>
