@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-xs-12" style="height:20px;"></div>
     
        <div class="row">
            <div class= "col-lg-6 text-left">
                
            </div>
            <div class= "col-lg-6 text-right">
                 <a href="javascript:history.back()" class="btn btn-primary ">Back</a>
            </div>
        </div>
      <div class="col-xs-12" style="height:20px;"></div>  
      <div class="row">

        <div class="col-lg-12">
                <div class="card" style="width: 100%; margin-bottom:20px">
                    <div class="card-header">
                        <div class="row" style="margin-bottom:0;margin-top:3px;font-family: Aller Light;font-size: 15px">
                            <div class="col-lg-6">
                                
                            </div>
                            <div class="col-lg-6 text-right">
                                
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            
                           

                                <div class="col-sm-4">
                                  <div class="card" style="width: 100%;">
                                      <p class="text-center" style="margin-bottom:0;margin-top:3px;font-family: Aller Light;font-size: 12px">Water level</p>
                                      <hr style="margin:2px">
                                      <div style="height: 100%">
                                          {!! $chart1->render()!!}
                                      </div>
                                  </div>
                                </div>
                                
                                <div class="col-sm-4">
                                    <div class="card" style="width: 100%;height;">
                                        <p class="text-center" style="margin-bottom:0;margin-top:3px;font-family: Aller Light;font-size: 12px">Feritilizer level</p>
                                        <hr style="margin:2px">
                                        <div style="height: 100%">
                                        {!! $chart2->render()!!}
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-4">
                                    <div class="card" style="width: 100%;">
                                        <p class="text-center" style="margin-bottom:0;margin-top:3px;font-family: Aller Light;font-size: 12px">Temp level</p>
                                        <hr style="margin:2px">
                                        <div style="height: 100%">
                                        {!! $chart3->render()!!}
                                        </div>
                                    </div>
                                </div>

                            
                            
                        </div>
                        
                        <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                        <hr>
                        <div class="row">
                          

                        </div>
                        
                    </div>
                </div>
            </div>

      </div>
</div>

@endsection