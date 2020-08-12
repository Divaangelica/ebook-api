<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me()
    {
        return
        [
            "NIS" => 3103118049,
            "Name" => "Diva Angelica",
            "Gender" => "Perempuan",
            "Phone" => 6282221877311,
            "Class" => "XII RPL 2",
        ];
    }
}
