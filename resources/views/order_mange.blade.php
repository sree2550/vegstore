@extends('admin')
@section('content')
<div class="container">

<table class="table table-striped">
    <thead style="background-color: black; color: white;">
      <tr>
        <th>Customer</th>
        <th>View Bill</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      	<?php
            $i = 1; 
        ?>
        @foreach($order as $show)
    	<th><a href="#">View Customer</a></th>
    	<th><a href="{{ url('view_bill/'.$show->fk_user_id) }}">View Bill</a></th>
      </tr>
      @endforeach
    </tbody>
    </div>


@endsection