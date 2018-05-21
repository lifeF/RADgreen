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
      <label for="inputWaterLevel">Plant Type</label>
      <input class="form-control" id="type" name="type" placeholder="Enter Plant Type" type="text">
    </div>

     <div class="form-group">
      <label for="inputWaterLevel">Security Code</label>
      <input class="form-control" id="sec_key" name="sec_key" placeholder="Enter Security Code" type="text">
    </div>

    <button type="submit" class="btn btn-success">Create New Plant</button>
  </fieldset>
</form>

</div>

@endsection