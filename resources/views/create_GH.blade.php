@extends('layouts.app')

@section('content')

<div class="col-lg-4 col-lg-offset-4">
	<a href="/home" class="btn btn-primary btn-md">Back</a>
	<h1>Create New Green House</h1>
<form class="form-horizontakl" action="/home" method="post">
	{{csrf_field()}}
  <fieldset>
      <div class="form-group">
      <label for="inputName">Green House Name</label>
      <input class="form-control" id="name" name="name"  placeholder="Enter Green House Name" type="text">
    </div>

     <div class="form-group">
      <label for="inputAddress">Green House Address</label>
      <input class="form-control" id="address" name="address" placeholder="Enter Green House Address" type="text">
    </div>

    <div class="form-group">
      <label for="getNumberOfSections">Number Of Sections</label>
      <input class="form-control" id="sections" name="sections" placeholder="Enter Number Of Sections" type="text">
    </div>

    <div class="form-group">
      <label for="getNumberOfPlants">Number Of Plants In A Section</label>
      <select class="form-control" name ="plants" id="plants">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>        
      </select>
    </div>

    <button type="submit" class="btn btn-success">Create New Green House</button>
  </fieldset>
</form>

</div>

@endsection