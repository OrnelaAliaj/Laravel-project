@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Employee List</div>
                

                <div class="panel-body">
                                        <br>
                            @include('digital.partials.message')
                        <div class="col-lg-12 ">
                            
                          <div>  Filter:
                            <a href="?position=Local marketing">Local marketing</a>|
                            <a href="?position=Consultant">Resources&insights</a>|
                            <a href="?position=Web manager">Web manager</a>|
                            <a href="/digital">Reset</a>
                            </div>
                            <div>
                          Sort:
                            <a href="?sort=asc&'position'->request('position')">Ascending</a>|
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
                          @foreach($digitals as $digital)
                            <tr>
                              

                              <th scope="row">{{$loop->index+1}}</th>
                              <td>{{ucfirst($digital->name)}}</td>
                              <td>{{ucfirst($digital->surname)}}</td>
                              <td>{{$digital->age}}</td>
                              <td>{{$digital->position}}</td>
                              

                              <td scope="col"><a href="{{'/digital/' .$digital->id. '/edit'}}">
                              <button type="button" class="btn btn-success">Edit</button></a></td>

                              <td scope="col">
                              <form action="{{'/digital/'.$digital->id}}" method="post">
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
                              <td scope="col"><a href="{{ url('digital/create') }}" class="btn btn-primary" role="button">Create</a></td>
                              <td scope="col"><a href="{{ url('admin') }}" class="btn btn-primary" role="button">Back</a></td>
                            </tr>
                          </thead>
                          
                        </table>
                        {!! $digitals->render() !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>






@endsection