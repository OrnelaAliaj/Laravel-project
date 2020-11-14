@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">@yield('Create employee data') Create employee data </div>

                <div class="panel-body">
                                <br>
                <div class="col-lg-12">




                    <div class="col-md-10 m-auto">
                        <form action="/employee/@yield('editId')" method="POST">
                        {{csrf_field()}}
                        @section('editMethod')
                        @show

                            <div class="form-group">
                                <label for="exampleInputName">Name</label>
                                <input type="text" name="name" value="@yield('editName')" class="form-control" id="exampleInputName">
                            
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName">Surname</label>
                                <input type="text" name="surname" value="@yield('editSurname')" class="form-control" id="exampleInputName">
                            
                            </div>
                            <div class="form-group">
                                <label for="exampleInputAge">Age</label>
                                <input type="text" name="age" value="@yield('editAge')" class="form-control" id="exampleInputAge">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputDepartment">Position</label>
                                <input type="text" name="position" value="@yield('editPosition')" class="form-control" id="exampleInputDepartment">
                            </div>
                            
                            <button  type="submit" class="btn btn-primary">Submit</button>
                            <a href="/employee">
                            <button type="button" class="btn btn-danger">Back</button>
                            </a>

                            </form>
                    @include('employee.partials.errors')

                    </div>
                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



@endsection