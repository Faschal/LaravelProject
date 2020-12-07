<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
class FluentController extends Controller
{
    public function index() 
    {
        echo '<h1>Fluent String</h1>';

        $slice = Str::of('Welcome to my website')->after('Welcome to');
        echo $slice.'<br>';

        $slice2 = Str::of('App\Http\Controllers\Controller')->afterlast('\\');
        echo $slice2.'<br>';
    }
}
