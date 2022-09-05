<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index() {
        return <<<EOF
        <html>
        <head>
        <title>Hello</title>
        </head>
        <body>
            <h1>こんにちわ</h1>
            <p>こんにチワワ</p>
        </body>
        </html>
        EOF;
    }

    public function jndex() {
        return <<<EOF
        <html>
        <head>
        <title>Hello</title>
        </head>
        <body>
            <h1>こんにちは</h1>
            <p>こんにちハシビロコウ</p>
        </body>
        </html>
        EOF;
    }
}
