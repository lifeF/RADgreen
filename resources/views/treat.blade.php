@extends('layouts.app')


@section('content')

<!-- new  -->
<div class="container">
        <div class="col-xs-12" style="height:20px;"></div>
        <div class="row">
            <div class= "col-lg-6 text-left">
                <a href='{{$section->id}}/create_Plant' class="btn btn-success btn-md">Add New Plant</a>
            </div>
            <div class= "col-lg-6 text-right">
                 <a href="/home/" class="btn btn-primary btn-md">Back</a>
            </div>
        </div>
        
        <div class="col-xs-12" style="height:20px;"></div>
        <div class="row">
          @foreach( $plants as $plant)
            <!-- plant card -->

            <div class="col-lg-6">
                <div class="card" style="width: 100%; margin-bottom:20px">
                    <div class="card-header">
                        <div class="row" style="margin-bottom:0;margin-top:3px;font-family: Aller Light;font-size: 15px">
                            <div class="col-lg-6">
                                ID : {{$plant->id}}
                            </div>
                            <div class="col-lg-6 text-right">
                                SID : {{$section->id}}
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="{{asset('Assets/Plant.png')}}" width="105%" height="auto" alt="">
                            </div>

                            <div class="col-sm-3">
                                <div class="card" style="width: 100%;height: 100%;">
                                    <p class="text-center" style="margin-bottom:0;margin-top:3px;font-family: Aller Light;font-size: 8px">Water level</p>
                                    <hr style="margin:2px">
                                    <div style="height: 100%">

                                    </div>
                                </div>
                               
                            </div>
                            <div class="col-sm-3">
                                <div class="card" style="width: 100%;height: 100%;">
                                    <p class="text-center" style="margin-bottom:0;margin-top:3px;font-family: Aller Light;font-size: 8px">Feritilizer level</p>
                                    <hr style="margin:2px">
                                    <div style="height: 100%">
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-3">
                                <div class="card" style="width: 100%;height: 100%;">
                                    <p class="text-center" style="margin-bottom:0;margin-top:3px;font-family: Aller Light;font-size: 8px">Temp level</p>
                                    <hr style="margin:2px">
                                    <div style="height: 100%">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                        <hr>
                        <div class="row">
                            <div class="col-lg-9">
                                <p style="margin-bottom:0;margin-top:3px;font-family: Aller Light;font-size: 12px">
                                    Click "More" to get more information about plant
                                </p>
                            </div>
                            <div class="col-lg-3 text-right">
                                <a href='{{$section->id}}/plant/{{$plant->id}}' class="btn btn-success">Treat</a>
                            </div>

                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- plant card end  -->
            @endforeach
        </div>

        
     
  </div>
</div>
<!-- end new  -->

<!-- @if(Session::has('message'))
<h5 class="alert {{ Session::get('alert-class', 'alert-info') }}"><center>{{ Session::get('message') }}</center></h5>
@endif


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
                <a href='{{$section->id}}/create_Plant' class="btn btn-primary btn-md">Add New Plant</a>
                    <br> <br>
                    
                       <div class="card-deck">
                               @foreach( $plants as $plant)
                
                                 
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
</div> -->

@endsection




