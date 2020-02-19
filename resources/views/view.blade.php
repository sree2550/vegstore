@extends('admin')
@section('content')
<form action="{{ url('update') }}" method="post">
	{{ csrf_field() }}
<div class="container">            
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Item Name</th>
        <th>Category</th>
        <th>No of stock in kg</th>
        <th>Image</th>
        <th>Price</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($view as $show)
      <tr>
        <td>{{$show->item_name}}</td>
        <td>{{$show->category}}</td>
        <td>{{$show->no_of_stock}}</td>
        <td><img src="{{asset('images/'.$show->image)}}" width="100px" height="100px"></td>
        <td>{{$show->price}}</td>
        <td><a href="{{URL::to('editdata/'.$show->item_id)}}" class="btn btn-info" role="button"> edit </a></td>
        <td><a href="{{URL::to('delete_data/'.$show->item_id)}}" class="btn btn-info" role="button"> Delete</a></td>
      </tr>
     @endforeach
    </tbody>
  </table>
</div>
</form>
@endsection