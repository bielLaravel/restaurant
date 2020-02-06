@extends('layouts.adminLayout')
@include('modals.createNewBook')

@section('content')
<style>
#searchForm{
  margin-left: 309px !important;
}
</style>
<div class="table-responsive">
@if (session('message'))
<div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
  <strong>{{ session('message') }}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span id="closeAlert" aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if (session('errorMessage'))
<div class="alert alert-danger  alert-dismissible fade show" role="alert">
  <strong>{{ session('errorMessage') }}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
</div>
<div class="row m-3">
    <a href="" class=" m-2  btn btn-success" data-toggle="modal" data-target="#createBook">Create new Book</a>
    <a href="" class="m-2 btn btn-danger ">Delete selected</a>
    <form id="searchForm" class="m-2 form-inline float-right">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class=" btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</div>
<table class="table">
  <thead>
    <tr>
      <th></th>
      <th>#</th>
      <th class="th-lg">Name</th>
      <th class="th-lg">Persons</th>
      <th class="th-lg">Email</th>
      <th class="th-lg">status</th>


      <th class="th-lg">Date</th>
      
      <th class="th-lg">State</th>
      <th class="th-lg">Delete / Edit</th>
    </tr>
  </thead>
  <tbody>
  @foreach($books as $book)
    <tr>
      <th scope="row"><input type="checkbox"></th>
      <th scope="row">{{$book->id}}</th>
      <td>{{$book->name}}</td>
      <td>{{$book->persons}}</td>
      <td>{{$book->email}}</td>
      <td>{{$book->status}}</td>

      <td>{{$book->date}} / {{$book->hour}}</td>
      <td><span id="{{$book->status}}" class="status  border  mt-1" style="display:inline-block; width: 16px; height:16px;border: 2px solid black; border-radius:100%;"></span> </td>
      <td><a class="btn btn-danger btn-sm" href="/backendXoriguer/public/deleteBook/{{$book->id}}">X</a>
      <a id="btnUpdateBook" value="putes" class="ml-1 btn btn-warning btn-sm" data-toggle="modal" data-target="#updateBook"  href="/backendXoriguer/public//{{$book->id}}" data-persons="{{$book->persons}}"  data-name="{{$book->name}}" data-hour="{{$book->hour}}" data-email="{{$book->email}}" data-date="{{$book->date}}" data-id="{{$book->id}}"> Edit</a></td>
      <td></td>

    </tr>
    @endforeach
  </tbody>
</table>



@endsection



<!-- -->


<div class="modal fade" id="createBook" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create book</h5>
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
        <input type="text" id="modalName" value="asdfasdf" class="form-control" name="name" placeholder="Full name" aria-label="name" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">@</span>
        </div>
        <input type="email" id="modalEmail" class="form-control" name="email" placeholder="Email" aria-label="email" aria-describedby="basic-addon1">
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