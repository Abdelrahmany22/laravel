<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Cart;

class HomeController extends Controller
{
    public function index(){
         $categories = Category::all(); 
         $allproducts = Product::all(); 
         $vegiproducts = Product::where('category_id','1')->get(); 
         $fproducts = Product::where('category_id','2')->get(); 
         $bproducts = Product::where('category_id','3')->get(); 
         $jproducts = Product::where('category_id','4')->get(); 
         $tproducts = Product::where('category_id','5')->get(); 

        // return ($vegiproducts);
        return view('frontend.home',compact(['categories','allproducts','vegiproducts','fproducts','bproducts','jproducts','tproducts',]));
    }
    public function addToCart($productId){

        $userId = '1';
        $cart= new Cart();
        $cartdata=Cart::all();
        $flag=0;
         foreach ($cartdata as $data ) {
            if ($data->product_id == $productId) {
                // $data->quantity+=1; 
                $flag=1;
            }
        }
        if ($flag !=0) {
            # code...
            Cart::where('product_id',$productId)->update(['quantity'=>$data->quantity+1]);
        }else {
            $cart->user_id=$userId;
            $cart->product_id =$productId;
            $cart->save();
        }
       return redirect()->back();
    }

    public function deleteFromCart($productId){
        Cart::where('id',$productId)->delete();
       return redirect()->back();

    }
     public function viewCart(){
        $cartproducts = Cart::all(); 

        return view('frontend.cart',compact(['cartproducts']));
     }

}
