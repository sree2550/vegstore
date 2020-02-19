@extends('admin')
@section('content')
<div class="col-xs-4">
	<h1><b>Add Place</b></h1>
	<form action="{{ url ('addplace') }}" method="post">
		{{ csrf_field() }}
  <div class="form-group">
    <label for="email">Name of Place</label>
    <input type="text" class="form-control" id="email" name="place_name">
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>


@endsection