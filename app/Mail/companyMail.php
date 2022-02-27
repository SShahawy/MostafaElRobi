<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class companyMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($filename = NULL,$data)
    {
        $this->filename = $filename;
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('john@webslesson.info')->subject('حجز استشاره')->view('pages.email.companyApplication')->attach($this->filename)->with('data', $this->data);
        redirect()->route('index')->with('success', 'Thanks for contacting us!');
    }
}
