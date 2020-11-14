@extends('layouts.app')

@section('content')

<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->
<div class="jumbotron">
<div class="container">
    <div class="row">
    
        <div class="col-sm-2 col-md-2">
        
        
            <img src="uploads/user/{{$user->image }}" alt="image" class="img-rounded img-responsive" />
        </div>     
        <div class="col-sm-4 col-md-4">
       
            <ul>
            <li>Name Surname: {{$user->name}} {{$user->lastname}}
            </li>
            <li>Department: {{$user->department}}</li>
            <li>Age: {{$user->age}}</li>
            <li>Description: {{$user->description}}</li>
            </ul>

        </div>
       
    </div>
</div>
<div align ="center">
<a href="{{'/user/' .$user->id. '/edit'}}"  class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit your user</a>
   </div>  
  
 
   </div>               
@endsection