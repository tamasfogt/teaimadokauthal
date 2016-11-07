<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderedProduct extends Model
{
    protected $fillable = [
        'name','price','quantity','gramm'
    ];
    
    public function order()
    {
        return $this->belongsTo('App\Order');
    }
}
