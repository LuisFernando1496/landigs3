<?php

namespace App\Http\Controllers;

use App\Mail\contactNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //



    public function sendContactEmail(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        $details = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
            'phone_number' => $request->input('phone_number'),
        ];

        Mail::to('avisosycontratos@seguridadprivadas3.com')->send(new contactNotification($details));

        return redirect()->route('agradecimiento');
    }
}
