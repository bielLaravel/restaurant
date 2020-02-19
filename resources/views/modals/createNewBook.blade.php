<div class="modal fade" id="modalUpdateBook" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update book</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form >
        <input type="hidden" value="" id="id" class="form-control" name="name" placeholder="Full name" aria-label="name" aria-describedby="basic-addon1">

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
        </div>
        <input type="text" value="" id="modalName" class="form-control" name="name" placeholder="Full name" aria-label="name" aria-describedby="basic-addon1">
      </div>
      <small id="helpUpdateName" class="text-danger">
            Enter a valid name
      </small>

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">@</span>
        </div>
        <input   value="" type="email" id="modalEmail" class="form-control" name="email" placeholder="Email" aria-label="email" aria-describedby="basic-addon1">
      </div>
      <small id="helpUpdateEmail" class="text-danger">
            Enter a valid email
      </small>

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
        </div>
        <input type="time" name="hour" id="modalHour" class="form-control" placeholder="hour" aria-label="hour" aria-describedby="basic-addon1">
      </div>
      <small id="helpUpdateHour" class="text-danger">
            Enter a valid hour
      </small>

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
        </div>
        <input type="tel" name="phone" id="modalPhone" class="form-control" placeholder="Enter the phone" aria-label="hour" aria-describedby="basic-addon1">
      </div>
      <small id="helpUpdatePhone" class="text-danger">
           The phone must be 9 digits
      </small>

   

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
        </div>
        <input type="date" name="date" id="modalDate" class="form-control" placeholder="date" aria-label="date" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1"><i class="fa fa-users" aria-hidden="true"></i></span>
        </div>
        <input type="text" name="persons" id="modalPersons" class="form-control" placeholder="Persons" aria-label="persons" aria-describedby="basic-addon1">
      </div>
      <small id="helpUpdatePersons" class="text-danger">
           Not a valid number
      </small>
   
      <select name="state" class="custom-select custom-select-md mb-3">
        <option value="1">To validate</option>
        <option value="2">Validate</option>
        <option value="3">Cancel</option>
      </select>

       <select id="modalmealType" name="state" class="custom-select custom-select-md mb-3">
        @foreach($categories as $categori)
        <option value="{{$categori->categori_name}}">{{$categori->categori_name}}</option>
        @endforeach
      </select>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a  href=""><button id="saveBook" type="submit" class="btn btn-primary">Save changes</button></a>
      </div>
      </form>
    </div>
  </div>
</div>