@extends('layouts.app')

@section('content')

<div class= "container">
  <div class="col-xs-12" style="height:20px;"></div>
    <div class="row">
      <div class="col-lg-4">
             <form class="form-horizontakl" action="visit" method="post">
                {{csrf_field()}}
                    <fieldset>
                        <input name="greenhouse_id" type="hidden" value="{{$greenhouse->id}}">
                        <button type="submit" class="btn btn-success">Create New Section</button>
                    </fieldset>
            </form>
      </div>
      <div class="col-lg-4 text-center">
           
      </div>
      <div class="col-lg-4 text-right"> 
         <a href="/home" class="btn btn-primary btn-md">Back</a>
      </div>
    </div>
   
  <div class="col-xs-12" style="height:20px;"></div>
  <div class="row">

    @foreach( $sections as $section)
      <div class="col-lg-4">
        <div class="card" style="width: 100%; margin-bottom : 10px;">
          <div class="card-header">
            ID {{$section->id}}
          </div>
          
          <div class="card-body">
            <p><i class="fab fa-pagelines"> </i>Plants:</p>
            
            
            <hr>	
            <a href='visit/{{$section->id}}' style="padding:3px;"class="btn btn-success">Visit</a>
          </div>
        </div>
		  </div>
    @endforeach 

  </div>
  <div class="row">
      <div class ="col-lg-12">
           <center> {{$sections->links()}}</center>
      </div>
  </div> 
</div>

<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

                <form class="form-horizontakl" action="visit" method="post">
                  {{csrf_field()}}
                      <fieldset>
                          <input name="greenhouse_id" type="hidden" value="{{$greenhouse->id}}">
                          <button type="submit" class="btn btn-success">Create New Section</button>
                      </fieldset>
                </form>

                      <br>
                       <div class="card-deck">
                               @foreach( $sections as $section)
                
                                 
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                      <div class="x_panel">
                                        <div class="x_title">
                                          <h2>Section <small>{{$section->id}}</small></h2>
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
                                          
                                                       
                                                   
                                                   
                                                 

                                        </div>

                                      </div>

                                    </div>
                                                           
                                @endforeach    

                        </div>
                        
              </div>
             <div class="row">
                 <a href="/home" class="btn btn-primary btn-md">Back</a>
             </div>

   </div> -->

     <!-- <div class="row">
           <center> {{$sections->links()}}</center>
     </div> -->
<!-- </div> -->
@endsection