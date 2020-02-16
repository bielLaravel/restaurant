@extends('layouts.adminLayout')
@include('menus.modalCreateDish')


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
<div class="row col-md-12 m-2">
    <a href="" class=" m-2  btn btn-success" data-toggle="modal" data-target="#modalCreateDish">Create new Dish</a>
    <a href="#" id="deleteAll" class="m-2 btn btn-danger ">Delete selected</a>
   
</div>

@include('menus.dishAdd',['dishes'=>$dishes])



@endsection



<!-- -->

