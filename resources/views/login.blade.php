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
            #jumbotron{
                background-color: green;
                color: white;
                opacity: 0.5;
                filter: alpha(opacity=50);
            }
            #login{
                color: white;
                text-align: center;
            }
            a{
                color: white;
            }
            body{
                background-image: url(images/bg_1.jpg);
                width: : 100%;
            }
        </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <br><br>
            <div align="center" class="jumbotron col-xs-12 col-lg-5 col-lg-offset-3" id="jumbotron">
                <h1 id="login">Veggie Store</h1><br>
                <form action="{{ url ('log') }}" method="post">
                    {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="mail">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <button type="submit" class="btn btn-success">Submit
   </button>
   <div class="text-center">create an account?<span><a href="{{ url('register') }}">Sign Up </a></span></div>
</form>
                
            </div>
        </div>
    </div>

</body>
</html>