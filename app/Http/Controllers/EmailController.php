<?php

namespace App\Http\Controllers;

use App\Repositories\EmailRepository as Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{

    public function store()
    {
        $this->validate(request(), ['email' => 'required|email']);

        $email = Email::store(request()->only('email'));

        return redirect()->route('home')->with('success', true);
    }

}
