@extends('layouts.empapp')
@section('body'
    <div class="col-md-6 m-auto">
        <form action="/user" method="post">
        {{csrf_field()}}
        
            <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>

            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputName">
            
            </div>
            <div class="form-group">
                <label for="exampleInputSurname">Surname</label>
                <input type="text" name="surname" class="form-control" id="exampleInputSurname">
            </div>
            <div class="form-group">
                <label for="exampleInputAge">Age</label>
                <input type="text" name="age" class="form-control" id="exampleInputAge">
            </div>
            
            <div class="form-group">
                <label for="exampleInputDepartment">Department</label>
                <input type="text" name="department" class="form-control" id="exampleInputDepartment">
            </div>
            <div class="form-group">
                <label for="exampleInputDescription">Description</label>
                <input type="text" name="description" class="form-control" id="exampleInputDescription">
            </div>
            
            
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{'/user/create'}}">
            <button type="button" class="btn btn-danger">Back</button>
            </a>

            </form>
            @include('employee.partials.errors')


    </div>
