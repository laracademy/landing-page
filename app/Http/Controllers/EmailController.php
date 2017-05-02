<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\EmailRepository as Email;

class EmailController extends Controller
{

    public function store()
    {
        // controller validation
        $this->validate(request(), ['email' => 'required|email']);

        // Store email address
        $email = Email::store(request()->only('email'));

        return redirect()->route('home')->with('success', true);

    }

}
