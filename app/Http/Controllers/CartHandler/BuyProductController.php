<?php namespace App\Http\Controllers\CartHandler;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Validator;
use Mail;
use App\OrderedProduct;
use App\Order;
use App\Shipment;
use App\Accounting;
use Auth;
class BuyProductController extends Controller {
	
    public function buyProduct(Request $request){
      
        Mail::send('emails.buy', ['products' =>  $request->input('products')], function ($message)
         {
            $message->from('info@teaimadok.hu', 'Teaimádók');
            $message->to('fogttamas1@gmail.com')->subject('[TeaImadok] Vásárlásra kattintott');;
        });

       return response('success',200);       
    }
    
    public function setOrderDetails(Request $request){
    
            if(Auth::check()){
                $order = new Order;
                $order->user_id =  Auth::user()->id;
                $order->status =  'Pending';
                $order->paymenttype =  $request->paymentType;
                $order->message = $request->message;
                $order->fullprice = $request->fullPrice;
                $order->save();  
                $order->shipment()->save(new Shipment($request->shipmentDetails));
                $order->accounting()->save(new Accounting($request->accountingDetails));
                foreach ($request->products as $currentproduct) {
                    $order->orderedProducts()->save(new OrderedProduct($currentproduct));
                }
                return response('success',200);
            }
            return response('Unauthorized',401);
            
    }   

}