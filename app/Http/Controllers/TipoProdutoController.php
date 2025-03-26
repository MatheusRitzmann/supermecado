<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoProduto;

class TipoProdutoController extends Controller
{
    function show()

    {
        $tipo_produtos = TipoProduto::all();
        return view("showrun", ["tipoprodutos" => $tipo_produtos]);

    }
}
