@extends('admin')
@section('content')

<h1><b>Add Items</b></h1>
<form action="{{ url ('editdetails') }}" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
  <input type="hidden" name="id" value="{{ $edit->item_id}}">
  <input type="hidden" name="_token" value="{{csrf_token() }}">
  <div class="row">
    <div class="form-group">
      <label for="email" class="control-label">Item Name</label>
      <input type="text" class="form-control" name="itemname" value="{{$edit->item_name}}">
    </div>
    <div class="form-group">
      <label for="pwd" class="control-label">Category</label>
      <input type="text" class="form-control" name="category" value="{{$edit->category}}">
    </div>
     <div class="form-group">
      <label for="pwd" class="control-label">Number of Items In Stock</label>
      <input type="text" class="form-control" name="stock" value="{{$edit->no_of_stock}}">
    </div>
    <div class="form-group">
    <label for="exampleFormControlFile1">Image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" value="{{$edit->image}}">
  </div>
    <div class="col">
    <label for="pwd">Price per 100 gram</label>
    <input type="text" class="form-control" name="price" value="{{$edit->price}}">
    </div><br>
     <div>
  <button type="submit" class="btn btn-success">Submit</button>
  </div>
  </div>
</form>
@endsection