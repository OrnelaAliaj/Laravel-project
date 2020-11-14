@extends('layouts.empapp')

@section('body')

<form action="/user/{{$item->id}}" method ="POST" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PUT')}}
<!-- <input type="hidden" name="_method" value="PUT"> -->
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" value="{{$item->name}}" class="form-control" id="exampleInputName1" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Surname</label>
    <input type="text" name="lastname" value="{{$item->lastname}}" class="form-control" id="exampleInputLastname1" placeholder="Surname">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Age</label>
    <input type="text" name="age" value="{{$item->age}}" class="form-control" id="exampleInputAge1" placeholder="Age">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Department</label>
    <input type="text" name="department" value="{{$item->department}}" class="form-control" id="exampleInputPDepartment1" placeholder="Department">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="text" name="description" value="{{$item->description}}" class="form-control" id="exampleInputDescription1" placeholder="Description">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" name="image" id="exampleInputFile">
   
  </div>
  <!-- <form method="post" action="/user"> -->
  <button  method="post" type="submit" class="btn btn-success">Submit</button>
  
  

  <a href="/user">
  <button type="button" class="btn btn-danger">Back</button>
    </a>
    <br>
    @include('employee.partials.errors')
    </form>


        
    

@endsection