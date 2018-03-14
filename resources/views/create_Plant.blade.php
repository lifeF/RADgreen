@extends('layouts.app')

@section('content')

<div class="col-lg-4 col-lg-offset-4">
	<a href='{{ URL::previous() }}' class="btn btn-primary btn-md">Back</a>
	<h1>Create New Plant</h1>
<form class="form-horizontakl" action="/home/{{$id1}}/visit/{{$id2}}" method="post">
	{{csrf_field()}}
  <fieldset>
      <div class="form-group">
      <label for="inputName">Plant Name</label>
      <input class="form-control" id="name" name="name"  placeholder="Enter Plant Name" type="text">
    </div>

     <div class="form-group">
      <label for="inputWaterLevel">Water Level</label>
      <input class="form-control" id="water_level" name="water_level" placeholder="Enter Water Level" type="text">
    </div>

    <div class="form-group">
      <label for="getFertilizerLevel">Fertilizer Level</label>
      <input class="form-control" id="fertilizer_level" name="fertilizer_level" placeholder="Enter Fertilizer Level" type="text">
    </div>


    <button type="submit" class="btn btn-success">Create New Plant</button>
  </fieldset>
</form>

</div>

@endsection