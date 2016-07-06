<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Jelovac\Bitly4laravel\Facades\Bitly4laravel;
use Vinelab\UrlShortener\Drivers\Bitly;


class ShortenUrlController extends Controller
{
    public function index()
    {
//        $shorten = app()->make('Bitly');
        $bitly = app()->make('Bitly');
        $link = 'http://refactoring.com/catalog/';
        return  $bitly->shorten($link);
//        'Normal link: ' . $link . PHP_EOL . 'Shorted link: ' .$bitly->shorten($link);
    }
}
