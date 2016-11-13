<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
    protected $fillable = [
        'status','fullprice','paymenttype','message'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function shipment()
    {
        return $this->hasOne('App\Shipment');
    }
    
    public function accounting()
    {
        return $this->hasOne('App\Accounting');
    }
    public function orderedProducts()
    {
        return $this->hasMany('App\OrderedProduct');
    }   
    public function status()
    {
        return $this->hasOne('App\OrderStatus');
    }    
}
