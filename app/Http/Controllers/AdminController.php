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
        $emails = Email::pluck('email');
        $csv = '';

        foreach($emails as $email) {
            $csv .= (strlen($csv) > 0 ? "\n" : ''). $email;
        }

        return response()->make($csv, 200)
            ->header('Content-Disposition', 'attachment; filename="export.csv"')
            ->header('Cache-control', 'private')
            ->header('Content-type', 'application/force-download')
            ->header('Content-transfer-encoding', 'binary');
    }

}
