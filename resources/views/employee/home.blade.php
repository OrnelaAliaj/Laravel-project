@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Employee List</div>
                

                <div class="panel-body">
                                        <br>
                            @include('employee.partials.message')
                        <div class="col-lg-12 ">
                            
                          <div>  Filter:
                            <a href="?position=Market research">Market Research</a>|
                            <a href="?position=Consultant">Consultant</a>|
                            <a href="?position=Financial analyst">Financial analyst</a>|
                            <a href="/employee">Reset</a>
                            </div>
                            <div>
                          Sort:
                            <a href="?sort=asc">Ascending</a>|
                            <a href="?sort=desc">Descending</a>
                        </div>

                            <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Name</th>
                              <th scope="col">Surname</th>
                              <th scope="col">Age</th>
                              <th scope="col">Position</th>
                              <th scope="col">Edit</th>
                              <th scope="col">Delete</th>
                            
                            </tr>
                          </thead>
                          <tbody>
                          @foreach($employees as $employee)
                            <tr>
                              

                              <th scope="row">{{$loop->index+1}}</th>
                              <td>{{ucfirst($employee->name)}}</td>
                              <td>{{ucfirst($employee->surname)}}</td>
                              <td>{{$employee->age}}</td>
                              <td>{{$employee->position}}</td>
                              

                              <td scope="col"><a href="{{'/employee/' .$employee->id. '/edit'}}">
                              <button type="button" class="btn btn-success">Edit</button></a></td>

                              <td scope="col">
                              <form action="{{'/employee/'.$employee->id}}" method="post">
                              {{csrf_field()}}
                              {{method_field('DELETE')}}
                              <button type="submit" class="btn btn-danger">Delete</button>
                              </form></td>
                            </tr>
                            @endforeach
                            
                          </tbody>
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col"></th>
                              <th scope="col"></th>
                              <th scope="col"></th>
                              <th scope="col"></th>
                              <td scope="col"><a href="{{ url('employee/create') }}" class="btn btn-primary" role="button">Create</a></td>
                              <td scope="col"><a href="{{ url('admin') }}" class="btn btn-primary" role="button">Back</a></td>
                            </tr>
                          </thead>
                          
                        </table>
                        {!! $employees->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection