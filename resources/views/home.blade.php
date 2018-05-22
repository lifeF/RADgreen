@extends('layouts.app')

@section('content')


<div class= "container">
  <div class="col-xs-12" style="height:20px;"></div>
  <a href='home/create' class="btn btn-success btn-md">Add New Green House</a>
  <div class="col-xs-12" style="height:20px;"></div>
    <div class="row">
      @foreach( $greenhouses as $greenhouse)
      <div class="col-lg-4">
        <div class="card" style="width: 100%;">
          <div class="card-header">
            ID {{$greenhouse->id}}
          </div>
          <img class="card-img-top" src="Assets/Header.jpg" alt="Card image cap">
          <div class="card-body">
            
            <h5 class="card-title">{{$greenhouse->name}}</h5>
            
            <p><i class="fab fa-pagelines"> </i>Plants: {{$greenhouse->plants}}</p>
            <p><i class="far fa-building"></i>Sections: {{$greenhouse->sections}}</p>
            <hr>
            
            <address>
            <i class="fas fa-map-marker"></i>
            <strong>Green House, Inc.</strong>
              <br> 1355 Market Street, Suite 900
              <br> San Francisco, CA 94103
              <br>
              <abbr title="Phone">P:</abbr> (123) 456-7890
            </address>
            <hr>	
            <a href='home/{{$greenhouse->id}}/visit'  class="btn btn-success">VISIT</a>
          </div>
        </div>
      </div>
       @endforeach 
    </div>
    
  
    <div class="row">
           <center> {{$greenhouses->links()}}</center>
    </div>

</div>

@endsection

