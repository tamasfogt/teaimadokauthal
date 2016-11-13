<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Validator;
use App\OrderShipped;

use App\Order;
use App\Shipment;
use App\Accounting;
use Auth;

use App\Mail\OrderShippedMail;
use App\Mail\SuccessfullyRegisteredMail;
use Illuminate\Mail\Mailer  as Mail;


class OrderHandlerController extends Controller {
	
    function setOrderShipped(Request $request){
        $this->validate($request, [
            'id' => 'required',
        ]);

        $order = Order::findOrFail($request->id);
        $order->status_id = 2;
        $order->save();
        \Mail::to($order->user->email)->send(new OrderShippedMail($order));
        \Mail::to($order->user->email)->send(new SuccessfullyRegisteredMail());
    }
}