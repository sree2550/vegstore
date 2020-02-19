<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
        <style type="text/css">
        	#reg{
        		color: white;
        		background-color: green;
        		font-size: 15px;
        		text-align: center;
        	}
          #btn{
            align-self:auto;
          }
        </style>
</head>
<body>
	<div class="container">
		<br><br>
		<div class="row" id="reg">
			<div class="row">
			<h1>Register Here</h1>
			</div>
			<br>
			<form action="{{ url ('reg') }}" method="post">
        {{ csrf_field() }}
	<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">First Name</label>
      <input type="text" class="form-control" id="inputEmail4" name="fname">
      {{ $errors->first('fname') }}
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Last Name</label>
      <input type="text" class="form-control" id="inputPassword4" name="lname">
      {{ $errors->first('lname') }}
    </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" name="userid">
      {{ $errors->first('userid') }}
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" name="pwd">
      {{ $errors->first('pwd') }}
    </div>
  </div>
  <div class="form-group col-md-12">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="addres">
    {{ $errors->first('addres') }}
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputState">Place</label>
      <select id="inputState" class="form-control" name="pname">
        <option selected>Choose...</option>
     @foreach($place_data as $data)
      <option value="{{ $data->name }}">{{ $data->name }}
        </option>
        @endforeach
        
      </select>
      {{ $errors->first('places') }}
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip" name="zipcode">
      {{ $errors->first('zipcode') }}
    </div>
    <div class="form-group col-md-2">
      <label for="inputnum">Contact Number</label>
      <input type="text" class="form-control" id="inputZip" name="contact">
      {{ $errors->first('contact') }}
    </div>
  </div><br>
  <div id="btn">
  <button type="submit" class="btn btn-success">Sign in</button><br></div>
</form>
		</div>
	</div>

</body>
</html>