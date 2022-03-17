<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListExController extends Controller
{

    public function exer1Form()     // metodo 'exer1Form
    {
        return view('exer1');
    }

    public function exer1Resultado(Request $request)
    {
        $valor_produto = $request ['valor_produto'];
        $valor_pago = $request ['valor_pago'];
        if ($valor_pago == $valor_produto)
            $resultado = "Não ha troco...";
        else if ($valor_pago < $valor_produto)
            $resutado = "Saldo insuficiente...";
        else
            $resultado = "Valor do troco: ".($valor_pago - $valor_produto);

        return view('exer1', compact('resultado'));

    }
}
