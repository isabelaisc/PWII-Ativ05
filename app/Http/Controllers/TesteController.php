<?php

namespace App\Http\Controllers;

use Iluminate\Http\Request;

class TesteController extends Controller
{
    public function teste() {
        var_dump($_GET);
        return view('site.teste', ['titulo' => 'Teste (teste)']);
    }

}