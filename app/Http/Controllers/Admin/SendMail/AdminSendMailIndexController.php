<?php

namespace App\Http\Controllers\Admin\SendMail;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\ContactFormNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class AdminSendMailIndexController extends Controller
{
    public function create()
    {
        return view('admin.pages.sendmail.index');
    }

    public function store(Request $request)
    {
        // Formdan gelen verileri al
        $data = [
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message')
        ];

        // Kullanıcıyı oluştur (örneğin, varsayılan kullanıcıyı alabilirsiniz)
        //$user = User::first(); // Örneğin, ilk kullanıcıyı alabilirsiniz veya kendi kullanıcı modelinize göre ayarlayabilirsiniz
        // Kullanıcıya notification gönder
        //$user->notify(new ContactFormNotification($data));

        // Bildirim gönderme işlemi
        Notification::route('mail', $data['email'])
            ->notify(new ContactFormNotification($data));

        return redirect('/admin')->with('status', 'Message sent successfully!');
    }
}
