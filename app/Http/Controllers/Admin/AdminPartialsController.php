<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;



class AdminPartialsController extends Controller
{

    public function settings()
    {
        return view('admin.partials.settings');
    }

    public function blankPage()
    {
        return view('admin.partials.blank-page');
    }

    public function invoice()
    {
        return view('admin.partials.invoice');
    }

    public function signin()
    {
        return view('admin.partials.signin');
    }

    public function signup()
    {
        return view('admin.partials.signup');
    }

    public function alerts()
    {
        return view('admin.partials.alerts');
    }

    public function buttons()
    {
        return view('admin.partials.buttons');
    }

    public function cards()
    {
        return view('admin.partials.cards');
    }

    public function typography()
    {
        return view('admin.partials.typography');
    }

    public function icons()
    {
        return view('admin.partials.icons');
    }

    public function mdiIcons()
    {
        return view('admin.partials.mdi-icons');
    }

    public function formElements()
    {
        return view('admin.partials.form-elements');
    }

    public function tables()
    {
        return view('admin.partials.tables');
    }

    public function notification()
    {
        return view('admin.partials.notification');
    }
}

