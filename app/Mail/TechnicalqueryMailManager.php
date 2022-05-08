<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TechnicalqueryMailManager extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $array;

    public function __construct($array)
    {
        $this->array = $array;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if($this->array['path']!='')
        {
        return $this->view($this->array['view'])
                    ->from($this->array['from'], env('MAIL_FROM_NAME'))
                    ->subject($this->array['subject'])
                    ->with([
                         'details' => $this->array['details']
                     ])
                  ->attach($this->array['path'],
                    [
                        'as'=>$this->array['as'],
                        'mime'=>$this->array['mime'],
                    ])  
                ;
        }
        else
        {
 return $this->view($this->array['view'])
                    ->from($this->array['from'], env('MAIL_FROM_NAME'))
                    ->subject($this->array['subject'])
                    ->with([
                         'details' => $this->array['details']
                     ]);
        }
    }
}
