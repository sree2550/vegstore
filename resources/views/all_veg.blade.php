
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
    </style>
</head>
<body>
    <div class="container">
 <nav class="navbar" id="nav">
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
                <li><a style="font-size: 20px;color: red" class="fa fa-cart-plus" href="{{URL::to('cart_show')}}">   {{$catrcount}} </a></li>
                

            </ul>
        </div>
    </nav>
    </div>
    <div class="container">
   @foreach($product_data as $data)
        <div class="col-md-3">
            <div class="jumbotron" align="center">
                <img class="thumbnail" src="{{asset('images/'.$data->image)}}" width="150px" height="120px">
                <p>{{ $data->item_name }}</p>
                <p>₹{{ $data->price }} per kg</p>
                <p>{{ $data->no_of_stock }}kg Available</p>

                 <p><a class="btn btn-primary btn-sm" href="{{URL::to('added_cart/'.$data->item_id)}}" role="button">Add to Cart</a></p>
            </div>
        </div>
@endforeach
</div>
<!--  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script id="rendered-js">
$('.add').click(function () {
  if ($(this).prev().val() < 20) {
    $(this).prev().val(+$(this).prev().val() + 1);
  }
});
$('.sub').click(function () {
  if ($(this).next().val() > 1) {
    if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
  }
});
//# sourceURL=pen.js
    </script> -->
</body>
</html>