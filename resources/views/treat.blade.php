@extends('layouts.app')

@section('content')
@if(Session::has('message'))
<h5 class="alert {{ Session::get('alert-class', 'alert-info') }}"><center>{{ Session::get('message') }}</center></h5>
@endif


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
                <a href='{{$section->id}}/create_Plant' class="btn btn-primary btn-md">Add New Plant</a>
                    <br> <br>
                    
                       <div class="card-deck">
                               @foreach( $plants as $plant)
                
                                 <!-- start of weather widget -->
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                      <div class="x_panel">
                                        <div class="x_title">
                                          <h2>Plant <small>{{$plant->id}}</small></h2>
                                          <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li>
                                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                              
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                          </ul>
                                          <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                          
                                                       <img src=https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2WBZcOMmq2g9Isf3fQcJwmRwtSwd4P-33Trn2RshkyDdCYpND width="180px" class="img-fluid" alt="">
                                                    <h1 class="card-title">{{$plant->name}}</h1>
                                                    <h2 class="card-text">{{$plant->section_id}}</h2>
                                                    <a href='#' class="btn btn-primary btn-md">Add</a>
                                                 

                                        </div>

                                      </div>

                                    </div>
                                    <!-- end of weather widget -->                           
                                @endforeach    

                        </div>
        </div>
      <div class="row">
        <a href='/home/{{$id1}}/visit' class="btn btn-primary btn-md">Back</a>
     </div>

    </div>


     <div class="row">
           <center> {{$plants->links()}}</center>
     </div>
</div>

@endsection

