<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

class HelloController extends Controller
{
    public function index() {
        $slice = Str::between('[1] bla bla [2]', '[', ']');
        print_r($slice);
    }
}
