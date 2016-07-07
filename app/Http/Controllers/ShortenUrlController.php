<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Bitly;



class ShortenUrlController extends Controller
{
    public function index()
    {
//        $bitly = app()->make('Bitly');

        //our link wich we need to short
        $link = 'http://refactoring.com/catalog/';
        $shortenLink = Bitly::shorten($link);
        return 'Long url: ' . $shortenLink['data']['long_url'] . PHP_EOL . 'Short url: ' . $shortenLink['data']['url'];

    }
}
