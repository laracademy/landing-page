<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getCount()
    {
        return 'There are '. Email::count() .' users signed up';
    }

    public function download()
    {
        $emails = Email::pluck('email')->implode("\n");

        return response()->make($emails, 200)
            ->header('Content-Disposition', 'attachment; filename="export.csv"')
            ->header('Cache-control', 'private')
            ->header('Content-Type', 'application/force-download');
    }
}
