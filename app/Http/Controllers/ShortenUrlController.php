<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Jelovac\Bitly4laravel\Facades\Bitly4laravel;
use Vinelab\UrlShortener\Drivers\Bitly;


class ShortenUrlController extends Controller
{
    public function index()
    {

        $bitly = app()->make('Bitly');

        //our link wich we need to short
        $link = 'http://refactoring.com/catalog/';
        return $bitly->shorten($link);

    }
}
