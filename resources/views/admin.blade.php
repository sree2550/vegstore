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
        	#Admin{
        		color: white;
        		background-color: black;
        		
        	}
        	#div1{
        		background-color: black;
        		color: white;
        	}
        	#qw{
        		background-color: white;
        	}
            .btn{
                background-color:   orange;
                color: white;
            }
        	
        </style>
</head>
<body id="qw" background="white">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12" id="Admin">
				<h1>Admin Panel</h1>
			</div>
		</div>
	</div>
	<br>
	<div class="col-lg-12">
		<div class="col-xs-12 col-lg-2" id="div1"><br>
			<button class="btn  btn-block btn xs"><a href="{{ url('additem') }}">Product Management</a></button><br><br>
			<button class="btn  btn-block btn xs"><a href="{{ url('order_mngmt') }}">Order Management</a></button><br><br>
            <button class="btn  btn-block btn xs"><a href="{{ url('adplace') }}">Add place </a></button><br><br>
			<button class="btn  btn-block btn xs"><a href="{{ url('changepwd') }}">Change Password</a></button><br><br>
			<button class="btn  btn-block btn xs"><a href="{{ url('view') }}">View </a></button><br>
			
			
		</div>
        <div class="container-fluid">
    
		<div class="col-lg-8">
        @yield('content')



			
        </div>
        </div>
	</div>


</body>
</html>