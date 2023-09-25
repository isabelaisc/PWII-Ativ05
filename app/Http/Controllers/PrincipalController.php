<?php

namespace App\Http\Controllers;

use Iluminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal() {
        var_dump($_GET);
        return view('site.principal', ['titulo' => 'Principal (teste)']);
    }
}