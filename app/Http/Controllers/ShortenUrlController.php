<?php

namespace App\Http\Controllers;

use App\Http\Requests;


class ShortenUrlController extends Controller
{
    public function index()
    {
        $shorten = app()->make('Bitly');
        $link = 'http://www.bboyworld.com/';
        return 'Normal link: ' . $link . PHP_EOL . 'Shorted link: ' . $shorten->url($link);

    }
}
