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
            #nav{
                height: 100px;
                font-size: 20px;

            }
            .img{
                height: 100px;
            }
     
            #header{
                font-size: 40px;
                color: white;
                padding-top: 30px;
            }
            #menu{
                color: orange;
                padding-top: 25px;
            }
            body{
                height: 100px;
            }
            .text-block {
                position: absolute;
                bottom: 500px;
                right: 350px;
                color: orange;
                padding-left: 100px;
                padding-right: 20px;
                text-align: center;
                font-size: 50px;

}
.container {
  position: relative;
}
        </style>
</head>
<body>
    <nav class="navbar navbar-inverse" id="nav">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-target="#mainNavbar" data-toggle="collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div navbar-collapse collapse id="mainNavbar">
            <a class="navbar-brand" href="index.html">Veg Market</a>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="{{URL::to('show_all')}}">All Vegetables</a></li>
                <li><a href="#">Cart</a></li>

            </ul>
        </div>
    </nav>
  <div class="container-fluid">
  <img src="images/bg_1.jpg" style="width:100%; height: 600px;" >
</div>
</body>
</html>