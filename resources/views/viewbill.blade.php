@extends('admin')
@section('content')

<div class="container">  
<div class="jumbotron">
<div id="bill">         
  <table class="table table-striped">
  	<h1 style="text-align: center;">Veggie Store</h1>

    @foreach($details as $datas)
    <?php $userid = $datas->fk_login_id ?>
    <label>CUSTOMER NAME: {{$datas->f_name}}</label><br>
    <label>PLACE: {{$datas->place}}</label><br>
    <label>CONTACT NUMBER: {{$datas->contact_number}}</label><br>
    <label>ADDRESS: {{$datas->address}}</label><br>

    <label>DATE:{{ date('Y-m-d') }} @endphp</label>
     @endforeach
    <thead style="background-color: black;color: white;">
      <tr>
        <th>ITEM NUMBER</th>
        <th>ITEM</th>
        <th>PRICE</th>
        <th>QUANTITY</th>
        <th>TOTAL</th>
      </tr>
    </thead>
    <tbody>
      @php
        $i = 1;
        $totalamount = 0;  
      @endphp
      @foreach($cart_data as $view)
      <tr>
      	<td>
      	{{ $i++}}
        </td>
      	<td>{{$view->item_name}}</td>
      	<td>{{$view->price}}</td>
      	<td>{{$view->quantity}}</td>
        <td><?php $totalamount= $totalamount + ($view->quantity * $view->price) ?>{{$view->quantity * $view->price}}</td>
      </tr>
      @endforeach
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><b>Grant Total={{$totalamount}} <b></td>
      </tr>
    </tbody>
  </table>
  </div>

 <a href="{{ url('confirm/'.$userid)}}"><button type="button" class="btn btn-info">Chekout</button></a>
  </div>
</div>
@endsection