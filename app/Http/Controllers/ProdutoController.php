<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    //
    public function index()
    {
        $produtos = Produto::orderBy('nome')->get();
        return view('produtos.index', compact('produtos'));
    }
    public function store(Request $request)
    {
        $dados = $request->validate([
            'nome' => 'required|min:3',
            'preco' => 'required|numeric|min:3',
            'estoque' => 'required|interger|min:0'
        ]);

        Produto::create($dados);

        return redirect('/produtos');

    }
}
