<div class="modal fade" id="updateBook" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update book</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="idToSubmit" action="/backendXoriguer/public/updateBooks/" method="get">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
        </div>
        <input type="text" value="" id="modalName" class="form-control" name="name" placeholder="Full name" aria-label="name" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">@</span>
        </div>
        <input   value="" type="email" id="modalEmail" class="form-control" name="email" placeholder="Email" aria-label="email" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
        </div>
        <input type="text" name="hour" id="modalHour" class="form-control" placeholder="hour" aria-label="hour" aria-describedby="basic-addon1">
      </div>

   
      <select name="state" class="custom-select custom-select-md mb-3">
        <option value="1">To validate</option>
        <option value="2">Validate</option>
        <option value="3">Cancel</option>
      </select>

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
        </div>
        <input type="text" name="date" id="modalDate" class="form-control" placeholder="date" aria-label="date" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1"><i class="fa fa-users" aria-hidden="true"></i></span>
        </div>
        <input type="text" name="persons" id="modalPersons" class="form-control" placeholder="Persons" aria-label="persons" aria-describedby="basic-addon1">
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a  href=""><button type="submit" class="btn btn-primary">Save changes</button></a>
      </div>
      </form>
    </div>
  </div>
</div>