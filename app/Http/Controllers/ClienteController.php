<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clientes',
            'telefone' => 'required|string|max:255',
        ]);

        Cliente::create($request->all());

        return redirect()->route('clientes.index');
    }

    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clientes,email,' . $cliente->id,
            'telefone' => 'required|string|max:255',
        ]);

        $cliente->update($request->all());

        return redirect()->route('clientes.index');
    }

    public function show($id)
    {
        // Busca o cliente pelo ID ou retorna erro 404 se não encontrado
        $cliente = Cliente::findOrFail($id);

//        // Converte a data de nascimento para o formato desejado
//        $cliente->data_nascimento = Carbon::parse($cliente->data_nascimento)->format('d/m/Y');

        // Retorna a view 'clientes.show' com o cliente encontrado
        return view('clientes.show', compact('cliente'));
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return redirect()->route('clientes.index');
    }
}
