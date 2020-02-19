@extends('admin')
@section('content')
<br><br>
<form method="POST" action="{{ url('/change_pwd') }}">
                    {{ csrf_field() }}
                   
                    <div class="form-group">
                    <div class="form-group row">
    <label for="inputpwd1" class="col-sm-2 col-form-label">Current Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" name="pwd1" id="pwd1">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputpwd2" class="col-sm-2 col-form-label">New Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" name="pwd2" id="pwd2">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputpwd2" class="col-sm-2 col-form-label">Confirm Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" name="confirmpwd" id="pwd3">
    </div>
  </div>
  <div class="form-group">
   <input type="submit" value="OK" class="btn btn-success">
   <input type="submit" value="cancel" class="btn btn-success">
  </div>
</form>
@endsection