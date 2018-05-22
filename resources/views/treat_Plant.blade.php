@extends('layouts.app')

@section('content')

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
<div class="panel panel-primary">
  <div class="panel-body">


    <div class="col-md-4">
      {!! $chart1->render()!!}
    </div>

    <div class="col-md-4">
      {!! $chart2->render()!!}
    </div>

    <div class="col-md-4">
      {!! $chart3->render()!!}
    </div>

  </div>
</div>
</div>


@endsection