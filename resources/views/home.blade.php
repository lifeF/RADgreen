@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
                <a href='home/create' class="btn btn-primary btn-md">Add New Green House</a>
                    <br> <br>
                    
                       <div class="card-deck">
                               @foreach( $greenhouses as $greenhouse)
                
                                 <!-- start of weather widget -->
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                      <div class="x_panel">
                                        <div class="x_title">
                                          <h2>Green House <small>{{$greenhouse->id}}</small></h2>
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
                                                    <h1 class="card-title">{{$greenhouse->name}}</h1>
                                                    <h2 class="card-text">{{$greenhouse->address}}</h2>
                                                    <a href='home/{{$greenhouse->id}}/visit' class="btn btn-primary btn-md">Visit</a>
                                                 

                                        </div>

                                      </div>

                                    </div>
                                    <!-- end of weather widget -->                           
                                @endforeach    

                        </div>
        </div>

    </div>

     <div class="row">
           <center> {{$greenhouses->links()}}</center>
     </div>
</div>

@endsection

