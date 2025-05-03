<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;

class EmailController extends Controller {
    public function send() {
        Mail::to('test@example.com')->send(new TestEmail());
        return 'Email sent!';
    }
}