<?php namespace App\Http\Controllers\CartHandler;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Validator;
use \Authorizer;
use Mail;

class BuyProductController extends Controller {
	
    public function buyProduct(Request $request){
      
        Mail::send('emails.buy', ['products' =>  $request->input('products')], function ($message)
         {
            $message->from('info@teaimadok.hu', 'Teaimádók');
            $message->to('fogttamas1@gmail.com')->subject('[TeaImadok] Vásárlás');;
        });

       return response('success',200);       
    }

}