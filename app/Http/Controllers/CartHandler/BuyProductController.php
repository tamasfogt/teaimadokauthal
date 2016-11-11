<?php namespace App\Http\Controllers\CartHandler;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Validator;
use App\OrderedProduct;

use App\Order;
use App\Shipment;
use App\Accounting;
use Auth;

use App\Mail\ProductOrdered;
use Illuminate\Support\Facades\Mail;


class BuyProductController extends Controller {
	

    
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
                
                
                Mail::to($order->user())->send(new OrderShipped($order));
                Mail::to('fogttamas1@gmail.com')->send(new OrderShipped($order));
                return response('success',200);
            }
            return response('Unauthorized',401);
            
    }   

}