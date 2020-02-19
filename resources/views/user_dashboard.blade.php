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
                color: orange;
                background-color: white;
                text-align: center;
                
            }
            #div1{
                background-color: black;
                color: white;
            }
            #qw{
                background-color: #f3f2f7;
            }
            .btn{
                background-color:   orange;
                color: white;
            }
            
        </style>
</head>
<body id="qw">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" id="Admin">
                <h1><b>Veggie Store</b></h1>
            </div>
        </div>
    </div>
     <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="{{ url('products') }}">All vegetables</a></li>
          <li><a href="#"> vegetables</a></li>
          <li><a href="#">fruit</a></li>
          <li><a href="#">cart</a></li>
          <li><a href="#">Contact Us</a></li>
          <!-- <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>shopping cart</a></li>  -->
        </ul>

    </nav>
    <br>
        <div class="container">
        <div class="row">

        <h1 style="background-image: url(images/bg_1.jpg);">we serve fresh vegetables and fruits</h1>
        
           hii 
        </div>
        </div>


</body>
</html>