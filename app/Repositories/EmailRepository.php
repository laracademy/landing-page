<?php

namespace App\Repositories;

use App\Models\Email;

class EmailRepository
{

    public static function store($request)
    {
        // create the user or grab the users from the database
        // saves calling information
        return Email::firstOrCreate([
            'email' => $request['email'],
        ]);
    }

}