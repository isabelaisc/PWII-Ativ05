<?php

namespace App\Http\Controllers;

use Iluminate\Http\Request;

class FornecedorController extends Controller
{
    public function fornecedor() {
        var_dump($_GET);
        return view('site.fornecedor', ['titulo' => 'Fornecedor (teste)']);
    }

}