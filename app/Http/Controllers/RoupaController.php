<?php

namespace App\Http\Controllers;

use App\Models\Roupa;
use Illuminate\Http\Request;
use Illuminate\Http\Response; // Importe a classe Response

class RoupaController extends Controller
{
    /*
      Lista todas as roupas.

     */
    public function index()
    {
        $roupas = Roupa::all();
        return response()->json($roupas, Response::HTTP_OK);
    }

    /**
     * Armazena uma nova roupa.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'tamanho' => 'required|string|max:10',
             'cor' => 'nullable|string|max:50', // adicione esta linha
            'preco' => 'required|numeric|min:0',
        ]);

        $roupa = Roupa::create($request->all());

        return response()->json($roupa, Response::HTTP_CREATED);
    }
}