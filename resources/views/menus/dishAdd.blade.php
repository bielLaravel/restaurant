<div id="tableDish" class="col-md-12">
    <table class="table">
    <thead>
        <tr>
        <th></th>
        <th>#</th>
        <th class="th-lg">id</th>
        <th class="th-lg">name</th>
        <th class="th-lg">categorie</th>
        <th class="th-lg">active</th>
        <th class="th-lg">Delete / Edit</th>
        </tr>
    </thead>
    <tbody>
    @foreach($dishes as $dish)
        <tr>
        <th scope="row"><input type="checkbox"></th>
        <th scope="row">{{$dish->id}}</th>
        <td>{{$dish->dish_name}}</td>
        <td>{{$dish->categorie}}</td>
        <td>{{$dish->preu}}</td>
        <td>{{$dish->active}}</td>
        <td><span id="" class="status  border  mt-1" style="display:inline-block; width: 16px; height:16px;border: 2px solid black; border-radius:100%;"></span> </td>
        <td><a id="{{$dish->id}}" class="deleteDishes btn btn-danger btn-sm" href="#">X</a>
        <a id="updateDish" value="putes" class="ml-1 btn btn-warning btn-sm" data-toggle="modal" 
                 href="#" data-target="#modalUpdateBook"  href="#" 
                data-name="{{$dish->dish_name}}"  data-id="{{$dish->id}}" data-categorie="{{$dish->categorie}}"
               data-preu="{{$dish->preu}}" data-active="{{$dish->active}}"> Edit</a></td>

        <td></td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>



<!--MODAL TO CREATE NEW DISH -->
<div class="modal fade" id="modalCreateDish" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create dish</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
        </div>
        <input type="text" id="dishName" value="" class="form-control" name="name" placeholder="Dish Name" aria-label="name" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
        </div>
        <input type="number" id="dishPrice" class="form-control" name="email" placeholder="Price" aria-label="email" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
        </div>
        <input type="text" name="dishDescription" id="dishDescription" class="form-control" placeholder="description" aria-label="hour" aria-describedby="basic-addon1">
      </div>
      <select id="dishState" name="state" class="custom-select custom-select-md mb-3">
        <option value="1">Active</option>
        <option value="2">Non active</option>
      </select>

      <select id="dishCategorie" name="state" class="custom-select custom-select-md mb-3">
        @foreach($categories as $categori)
        <option value="{{$categori->dish_categorie}}">{{$categori->dish_categorie}}</option>
        @endforeach
      </select>

      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a  href="#"><button id="createDish" type="submit" class="btn btn-primary">Create dish</button></a>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="modalUpdateBook" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create dish</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
        </div>
        <input type="text" id="dishName" value="" class="form-control" name="name" placeholder="Dish Name" aria-label="name" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
        </div>
        <input type="number" id="dishPrice" class="form-control" name="email" placeholder="Price" aria-label="email" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
        </div>
        <input type="text" name="dishDescription" id="dishDescription" class="form-control" placeholder="description" aria-label="hour" aria-describedby="basic-addon1">
      </div>
      <select id="dishState" name="state" class="custom-select custom-select-md mb-3">
        <option value="1">Active</option>
        <option value="2">Non active</option>
      </select>

      <select id="dishCategorie" name="state" class="custom-select custom-select-md mb-3">
        @foreach($categories as $categori)
        <option value="{{$categori->id}}">{{$categori->dish_categorie}}</option>
        @endforeach
      </select>

      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a  href="#"><button id="createDish" type="submit" class="btn btn-primary">Create dish</button></a>
      </div>
      </form>
    </div>
  </div>
</div>
