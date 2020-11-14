@extends('layouts.app') <!-- extends the app file under layouts folder in views -->


@section('content') <!-- edits the content part in the upmentioned folder-->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Departments</div> 

                <div class="panel-body">
                <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-center" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
         Marketing
        </button>
      </h2>
    </div>
  <!-- button that when clicked launches a short list-->
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
       <ul> <li><a class="px=7" href="{{ url('/employee') }}"> Research & Analysis</a> <!--when clicked redirects user to employee url
                                                                                          and performs functions defined in employee controller-->

       </li>
       <li><a href="{{ url('/digital') }}"> Digital Marketing</a></li>
       <li><a href="{{ url('/content') }}"> Content Marketing</a></li>
       </ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Sales
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      <ul> <li><a href="{{ url('/managing') }}"> Managing</a>
    </li>
    <li><a href="{{ url('/logistics') }}"> Logistics</a></li>
    
    </ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Human Resources
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
            <ul> <li><a href="{{ url('/training') }}"> Training</a>
      </li>
      <li><a href="{{ url('/recruitment') }}"> Recruitment</a></li>
      <li><a href="{{ url('/organization') }}"> Organization</a></li>
      </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
            <div class="card-header" id="headingFour">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
        IT department        </button>
              </h2>
            </div>
          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-body">
            <ul> <li><a href="{{ url('/operations') }}"> Operations</a>
      </li>
      <li><a href="{{ url('/project') }}"> Project</a></li>

      </ul>
      </div>
    </div>
  </div>
</div>

</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection