@extends('admin')
@section('content')
<div class="col-lg-4">
<h1><b>Add Items</b></h1>
<form action="{{ url ('additemtbl') }}" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="row">
    <div class="form-group">
      <label for="email" class="control-label">Item Name</label>
      <input type="text" class="form-control" name="itemname">
    </div>
    <div class="form-group">
      <label for="pwd" class="control-label">Category</label>
      <input type="text" class="form-control" name="category">
    </div>
     <div class="form-group">
      <label for="pwd" class="control-label">Number of Items In Stock(in kg)</label>
      <input type="text" class="form-control" name="stock">
    </div>
    <div class="form-group">
    <label for="exampleFormControlFile1">Image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
  </div>
    <div class="col">
    <label for="pwd">Price per 100 gram</label>
    <input type="text" class="form-control" name="price">
    </div><br>
     <div>
  <button type="submit" class="btn btn-success">Submit</button>
  </div>
  </div>
</form>
</div>
<!-- <form>
  <div class="row col-xs-12 col-lg-6"  >
    <label for="email" class="control-label">Item Name</label>
    <input type="text" class="form-control" id="email" name="item">
  </div>
  <div class="form-group col-xs-12 col-lg-6">
    <label for="pwd" class="control-label">Category</label>
    <input type="text" class="form-control" id="pwd" name="category">
  </div>
  <div class="form-group col-xs-12 col-lg-6">
    <label for="pwd" class="control-label">Number of Items In Stock</label>
    <input type="text" class="form-control" id="pwd" name="">
  </div>
  <div class="form-group col-xs-12 col-lg-6">
    <label for="cc-number" class="control-label mb-1">Image</label>
    <input id="cc-number" name="image" type="file" class="form-control cc-number identified visa" value="" data-val="true"
    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
    autocomplete="cc-number">
    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
  </div>
  <div class="form-group col-xs-12 col-lg-6">
    <label for="pwd">Price per 100 gram</label>
    <input type="text" class="form-control" id="pwd">
  </div>
  <div>
  <button type="submit" class="btn btn-success">Submit</button>
  </div>
</form> -->


@endsection