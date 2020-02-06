@extends('layouts.adminLayout')
@include('modals.createNewMenu')

@section('content')
<style>
#searchForm{
  margin-left: 435px !important;
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
    <a href="" class=" m-2  btn btn-success" data-toggle="modal" data-target="#createMenu">Create new menu</a>
    <a href="" class="m-2 btn btn-danger ">Delete selected</a>
    <a href="" id="searchForm"class="m-2  btn border-danger text-danger ">PDF</a>
    <a href="" class="m-2  btn border-info text-info">IMPRESORA</a>


</div>
<table class="table">
  <thead>
    <tr>
      <th></th>
      <th>#</th>
      <th class="th-lg">menu name</th>
      <th class="th-lg">total Dishes</th>
      <th class="th-lg">status</th>
      <th class="th-lg">Delete / Edit</th>
    </tr>
  </thead>
  <tbody>
  
  </tbody>
</table>



@endsection