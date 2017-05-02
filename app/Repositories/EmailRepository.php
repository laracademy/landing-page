<?php

namespace App\Repositories;

use App\Models\Email;

class EmailRepository
{

    public static function store($request)
    {
        // automatically search for the email address
        // if found, just return email
        // if not found, save into database

        return Email::firstOrCreate([
            'email' => $request['email'],
        ]);
    }

}