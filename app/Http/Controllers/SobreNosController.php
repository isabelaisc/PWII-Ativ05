<?php

namespace App\Http\Controllers;

use Iluminate\Http\Request;

class SobreNosController extends Controller
{
    public function sobrenos() {
        var_dump($_GET);
        return view('site.sobrenos', ['titulo' => 'SobreNós (teste)']);
    }

}