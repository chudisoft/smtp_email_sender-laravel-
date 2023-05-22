<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    /**
    * Handle an authentication attempt.
    *
    * @param  \Illuminate\Http\Request $request
    *
    * @return Response
    */
    public function send_mail(Request $request)
    {
        $request->validate([
            'subject' => 'required|max:150|min:2',
            'to' => 'required|email|max:100|min:10',
            'message' => 'required|max:3500|min:55',
        ]);

        
        $testMailData = [
            'title' => request('subject'),
            'body' => request('message')
        ];

        Mail::to(request('to'))->send(new DemoMail($testMailData));

        return response()->json([
            "success" => true,
            "message" => "Success! Email has been sent successfully."
        ]);
    }
}

class DemoMail extends Mailable
{
    use Queueable, SerializesModels;
  
    public $mailData;
  
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }
  
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject(request('subject'))
                    ->view('emails.demoMail');
    }
}
