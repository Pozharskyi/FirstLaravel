<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PhoneController extends Controller
{
    public function info()
    {
        $phone = app()->make('Phone');
        return 'Phone info: '.$phone;
    }
}
