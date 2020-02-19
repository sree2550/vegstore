@extends('template')
@section('content')
<div class="container">
    	<div style="background-image: url('images/bg_1.jpg');">
            </div>
    		<table id="tbl" class="table table-striped">
    			<thead style="background-color: green; color: white;height: 30px;">
           <tr>
               <td><b>ITEM NO<b></td>
               <td><b>IMAGE<b></td>
               <td><b>NAME<b></td>
               <td><b>QUANTITY<b></td>
               <td><b>PRICE</td>
               <td><b>TOTAL<b></td>
               <td><b>REMOVE<b></td>
           </tr>         
                </thead>
                <tbody>
                    
           
            	<?php
            	$i = 1;
               $totalamount = 0;
            	?>
             @foreach($cart_data as $data)
                <tr><!-- <td> {{ $loop->count }}</td> -->
                <td>
                	{{ $i++}}
                </td>
                <td><img class="thumbnail" src="{{asset('images/'.$data->image)}}" width="100px" height="80px"></td>
                <td>{{$data->item_name}}</td>
                <td><button style="background-color: white;font-size: 20px;color: green"><a href="{{URL::to('minus/'.$data->id)}}">-</a></button>&nbsp;{{$data->quantity}}&nbsp;<button style="background-color: white;font-size: 20px;color: red"><a href="{{URL::to('plus/'.$data->id)}}">+</a></button></td>
                <td>{{$data->price}}</td>
                <td><?php $totalamount= $totalamount + ($data->quantity * $data->price) ?>{{$data->quantity * $data->price}}</td>
                <td><button style="background-color: white;border-style: none;font-size: 20px;color: red"><a href="{{URL::to('re-move/'.$data->id)}}">X</a></button></td>
                @endforeach
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td><b>Grant Total={{$totalamount}} <b></td>
              <td></td>
            </tr>
            
                </tbody>
    		</table>

        <p style="text-align: center;"><button class="btn btn-success" style="border-radius: 15px; border-style: none; color: white;"><a href="{{ url('checkout') }}">Proceed to Checkout</a></button></p>
        <!-- <div class="col-md-6" style="text-align: center;">
        <button class="btn btn-success"><a href=""> UPDATE </a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <span>Grant total=</span>
        </div> -->

    	
    </div>

@endsection