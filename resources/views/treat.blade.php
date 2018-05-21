@extends('layouts.app')

<style>
.label {
    color:  #2196F3;

    padding: 4px;
    font-family: Arial;
}
.success {background-color: #4CAF50;} /* Green */
.info {background-color: #2196F3;} /* Blue */
.warning {background-color: #ff9800;} /* Orange */
.danger {background-color: #f44336;} /* Red */ 
.other {background-color: #e7e7e7; color: black;} /* Gray */ 

/*.contN {
      height: 200px;
      width: 160px;
}
*/
</style>

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
                                          <center><h1><span class="label success">Plant: {{$plant->name}}</span><span class="label ino">{{$plant->id}}</span></h1></center>
           
                                          <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                        

                                                       <img src=https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2WBZcOMmq2g9Isf3fQcJwmRwtSwd4P-33Trn2RshkyDdCYpND width="180px" class="img-fluid" alt="">
                                                      

                                                           
                                                     
                                                   
                                              
                                                    <a href='{{$section->id}}/plant/{{$plant->id}}' class="btn btn-primary btn-md">Treat</a>
                                                 

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




