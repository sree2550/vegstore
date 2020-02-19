<?php

namespace App\Http\Controllers;
use DB;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\placetb;
use App\logintb;
use App\registertb;
use App\producttb;
use App\carttb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\storage;
use Illuminate\Support\Facades\Session;
class vegcontroller extends Controller
{
    public function login_show()
    {
        return view('login');
    }
    public function register_show()
    {
        return view('register');
    }
     public function addtable()
    {
        return view('add');
    }
    public function change_pwd()
    {
        return view('changepwd');
    }
    
    public function place_show()
    {
        return view('addplace');
    }
     public function add_places(Request $request)
    {
        $place = new placetb();
        $place-> name = $request->input('place_name');
        $place->save();
        return view('/addplace');
    }
public function place_list(Request $request){
        $place_data = placetb::all();
    return view('/register')->with('place_data',$place_data);
}

public function register(Request $request)
    {
        $login = new logintb();
        $login-> user_name = $request->input('userid');
        $login-> password = $request->input('pwd');
        $login-> role = 'user';
        $login->save();

        $reg = new registertb();
        $reg-> f_name = $request->input('fname');
        $reg-> l_name = $request->input('lname');
        $reg-> fk_login_id = $login-> id;
        $reg-> address = $request->input('addres');
        $reg-> place = $request->input('pname');
        $reg-> zip = $request->input('zipcode');
        $reg-> contact_number = $request->input('contact');
        $reg->save();
        return view('/register');
    }


public function login_fun(Request $request) {
 
        $uname = $request->input('mail');
        $pwd = $request->input('password');
       
        $con = DB::table('login')->where('user_name', $uname)->first();

        if (is_null($con)) {
            return view('/register');
        } else {
            if ($con -> password == $pwd) {
                $request->session()->put('userId', $con -> id);
                if ($con -> role == 'admin') {
                    return view('/admin');
                } else {
                    return view('/ui');
                }
            } else {
                return view('login');
            }
        }
       
    }

    public function change_password(Request $request){
        $id = $request->session()->get('userId');
        $user = logintb::find($id);                
        $user-> password = $request->input('confirmpwd');
        $user->save();               
        return view('/changepwd');
        }
    public function add_item(Request $request){
        $item = new producttb();
        $item-> item_name = $request->input('itemname');
        $item-> category = $request->input('category');
        // $item-> item_name = $request->input('itemname');
        $item-> no_of_stock = $request->input('stock');
    if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = time().'.'.$file->getClientOriginalExtension();
            $destinationpath = public_path('/images');
            $file->move($destinationpath, $extension);
            $item->image = $extension; 
        }
        else{
            $item->image ='';
        }
            $item-> price = $request->input('price');
            $item->save();
        return view('/add');
    }
    
    
    public function view_data(Request $request){
        $view = producttb::all();
        return view('/view')->with('view',$view);
    } 

    public function data_show($id){
        $edit = producttb::find($id);
        return view('/editdata')->with('edit',$edit);       
}
public function update_datas(Request $request){
        $id= $request->input('id');
        $edit = producttb::find($id);
        $edit-> item_name= $request->input('itemname');
        $edit-> category= $request->input('category');
        $edit-> no_of_stock= $request->input('stock');
        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = time().'.'.$file->getClientOriginalExtension();
            $destinationpath = public_path('/images');
            $file->move($destinationpath, $extension);
            $edit->image=$extension; 
            
        }
        else{
            $edit->image='';
        }
        $edit-> price = $request->input('price');
        $edit->save();
        return redirect('/view')->with('edit',$edit);
    }

    public function delete_fn($id){
        $item = producttb::find($id);
        $item->delete();
        return Redirect()->back();
    }

    public function product_list(){
        // echo "hii";
        // exit;
        //echo $id;
         $user = session()->get('userId');

                        //echo $user;
          //get count

        $cartcount=DB::table('cart')->groupBy('fk_user_id')
        ->where('fk_user_id',$user)
        ->where('status','cart')
        ->count();
        //close get count
        $product_data = producttb::all();
        //var_dump($product_data);
        //exit;
    return view('/all_veg')->with('product_data',$product_data)->with('catrcount', $cartcount);
}


  public function addedcart(Request $request, $id){


                        //echo $id;
        $user = session()->get('userId');
                        //echo $user;
        //check product allredy registered
         $alt=DB::table('cart')->groupBy('fk_user_id')
        ->where('fk_user_id',$user)
        ->where('fk_product_id',$id)
        ->where('fk_product_id',$id)
        ->where('status','cart')
        ->count();
         //close allredy registered


         $con=DB::table('product')
        ->where('item_id',$id)
        ->first();


        //get count
        $cartcount=DB::table('cart')->groupBy('fk_user_id')
        ->where('fk_user_id',$user)
        ->where('status','cart')
        ->count();
        //close get count

        if($alt==0){
             DB::table('cart')->insert(
             ['fk_product_id' => $id, 'fk_user_id' => $user, 'quantity' => 1,'status' => 'cart']
                );
        $product_data = producttb::all();
        return redirect('show_all');
        //return view('/all_veg')->with('catrcount',$cartcount)->with('product_data',$product_data);
        }
        else{
             return redirect('show_all');
           // echo '<script language="javascript">';
           //  echo 'alert("Item Already Addedd")';
           //  echo 'window.location=".'return redirect("show_all")'."';
           //  // echo 'window.location = '{ url('added_cart/') }'';
           //   //echo 'window.location.href="show_all"';
           //  // echo "<script>window.location = '{{ url("added_cart/"}}'</script>";
           //  echo '</script>';  
    //        echo ("<script LANGUAGE='JavaScript'>
    // window.alert('Succesfully Updated');
    // window.location='{{ url("added_cart/"}}';
    // </script>");  

           // return redirect('added_cart');
                }
       
        //print_r($cartcount);
    
      
  }
  public function cartshow(){
        // echo "hii";
        // exit;
// $cart_data = carttb::all();
        //var_dump($product_data);
        //exit;

        $cart_data = DB::table('cart')
            ->join('product', 'product.item_id', '=', 'cart.fk_product_id')
            ->select('product.item_name','product.price','product.image','product.price','cart.quantity','cart.id')
            ->where('cart.status','cart')
            ->get();
// var_dump($cart);
// exit;
    return view('/carts')->with('cart_data',$cart_data);
}
 
   public function remove_fn($id){

        $item = carttb::find($id);
        $item->delete();
        return Redirect()->back();
    }
    public function plus_qty(Request $request,$id){

        // $product_data = producttb::all();
         $user = session()->get('userId');
        $plus = DB::table('cart')->select('quantity')
        ->where('id',$id)
        ->first();
        //print_r($plus);
           $qty =  $plus -> quantity;
           $qty++;
        // $qty = $plus;
         DB::table('cart')
             ->where('id', $id)
             ->where('fk_user_id', $user)
             ->update(['quantity' => $qty]);


            return redirect('cart_show');

    }
    public function minus_qty(Request $request,$id){
      $user = session()->get('userId');

      $minus = DB::table('cart')->select('quantity')
      ->where('id',$id)
      ->first();
           $qty =  $minus -> quantity;
           $qty--;
        // $qty = $plus;
        DB::table('cart')
            ->where('id', $id)
            ->where('fk_user_id', $user)
            ->update(['quantity' => $qty]);


            return redirect('cart_show');


}
      public function checkout()
      {
            $user = session()->get('userId');
      //        echo $user;
      // exit;
        DB::table('cart')
            ->where('fk_user_id', $user)
            ->where('status', 'cart')
            ->update(['status' => 'checkout']);


            return redirect('cart_show');
            echo '<script language="javascript">';
            echo 'alert("Item Already Addedd")';
            echo '</script>';
       }
//order managment button click function
        public function order_confirm()
      {
            $user = session()->get('userId');

            $order = DB::table('cart')
            ->select('fk_user_id')
            ->distinct()
            ->where('status','checkout')
            ->get();

            return view('order_mange')->with('order',$order);

}
public function bill_show($id)

      {



            $bill = DB::table('cart')
            ->select('fk_user_id')
            ->distinct()
            ->where('status','checkout')
            ->where('fk_user_id','$id')
            ->get();

            $cart_data = DB::table('cart')
            ->join('product', 'product.item_id', '=', 'cart.fk_product_id')
            ->select('product.item_name','product.price','product.image','product.price','cart.quantity','cart.id','cart.fk_user_id')
            ->where('cart.status','checkout')
            ->where('cart.fk_user_id',$id)
            ->get();

            $details = DB::table('register')
            ->where('fk_login_id', $id)
            ->get();
            // var_dump($details);
            // exit;
            // echo $details;
           // var_dump($cart_data);
           // exit;
            return view('viewbill')->with('cart_data',$cart_data)->with('bill',$bill)->with('details',$details);
}
public function confirm_order($id)
      {
            

            // $user = session()->get('userId');
      //        echo $user;
      // exit;
///////////////////////////////////////////////////////////////
        // DB::table('cart')
          
        //     ->where('fk_user_id', $id)
        //     ->where('status','checkout')
        //     ->update(['status' => 'orderconfirmed']);

        //     return Redirect()->back();
            ///////////////////////////////////////////////////////////////
             // return redirect('view_bill/{id}');
            // echo '<script language="javascript">';
            // echo 'alert("Order Confirmed")';
            // echo '</script>';
         $stock = carttb::select('fk_product_id','quantity')
            ->select('fk_product_id','quantity')
            ->where('status','=','checkout')
            ->where('fk_user_id','=',$id)
            ->get();
           
            //print_r($stock);
            foreach ($stock as  $value) {

                 $pid = $value['fk_product_id'];
                 $qty=$value['quantity'];

                    $getdata = producttb::select('no_of_stock')
                    ->where('item_id','=',$pid)
                    ->get();

                    foreach ($getdata as  $dvalue) {
                    $totalqty = $dvalue['no_of_stock'] - $value['quantity'];
            
            $qtyupdate = DB::table('product')->where('item_id',$pid)
                    ->update(['no_of_stock' -> $totalqty]);

            // $item = DB::table('product')->where('no_of_stock',0)->update(['' => 'out_of_stock']);
        }
    }
//             // exit;

//             // $stock = DB::table('product')->select('no_of_stock')->get();
//        }

}
}

// // }
// }
      //        echo $user;
      //        exit;
//             $cart_data = DB::table('cart')
//             ->join('product', 'product.item_id', '=', 'cart.fk_product_id')
//             ->select('product.item_name','product.price','product.image','product.price','cart.quantity','cart.id')
//             ->where('cart.status','cart')
//             ->get();
// // var_dump($cart);
// // exit;
//     return view('/carts')->with('cart_data',$cart_data);

            
       
            // return view('order_mange');

       


//      

//   public function product_list(Request $request, $id)){
//         // echo "hii";
//         // exit;
//         $cart_data = carttb::find($id);
//         //var_dump($product_data);
//         //exit;
//     return view('/carts')->with('cart_data',$cart_data);
// }


        
     


 //    



