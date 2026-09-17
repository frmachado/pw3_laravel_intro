<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Exibe a lista de eventos.
     */
    public function index(Request $request)
    {
        // Captura o parâmetro "busca" enviado pela URL
        $busca = $request->get('busca');

        // Inicia a consulta
        $query = Evento::query();

        // Se houver busca, filtra pelo título
        if ($busca) {
            $query->where('titulo', 'like', '%' . $busca . '%');
        }

        // Ordena alfabeticamente pelo título
        $eventos = $query->orderBy('titulo', 'asc')->get();

        // Retorna a view enviando eventos e busca
        return view('eventos.index', compact('eventos', 'busca'));
    }

    /**
     * Exibe o formulário de cadastro.
     */
    public function create()
    {
        return view('eventos.create');
    }

    /**
     * Salva um novo evento.
     */
    public function store(Request $request)
    {
        // Validação dos dados
        $dadosValidados = $request->validate([
            'titulo' => 'required|string|min:3',
            'local' => 'required|string|min:2',
            'vagas' => 'required|integer|min:1',
            'preco_inscricao' => 'required|numeric|min:0',
        ]);

        // Cria o evento no banco de dados
        Evento::create($dadosValidados);

        // Volta para /eventos com mensagem de sucesso
        return redirect()
            ->route('eventos.index')
            ->with('success', 'Evento cadastrado com sucesso!');
    }
}