<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Order;
class OrderShippedMail extends Mailable
{
    use Queueable, SerializesModels;

    private $order;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
          $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.orders.shipped')
            ->subject("[TeaImádók] Csomag feladva");
    }
}
