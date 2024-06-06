<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // İletişim formu verilerini işleyin
        $message = new Message();
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->subject = $request->input('subject');
        $message->message = $request->input('message');
        $message->save();

        // İletişim formu gönderildikten sonra yönlendirme yapın
        return redirect()->back()->with('success', 'Mesajınız başarıyla gönderildi!');
    }
}
