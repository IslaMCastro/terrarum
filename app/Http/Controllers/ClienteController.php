<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use App\Models\Pessoa;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cliente = Cliente::all();
        $total = $cliente->count();
        return view("cliente.index", compact(["cliente", "total"]));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pessoa = Pessoa::all();
        return view("pessoa.create", compact(["pessoa"]));
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClienteRequest $request)
    {
        $data = $request->all();
        $cliente = Cliente::create($data);
        return redirect()->route('cliente.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        return view("cliente.show", compact(["cliente"]));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        $pessoa = Pessoa::all();
        return view("cliente.edit", compact(["cliente","pessoa"]));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClienteRequest $request, Cliente $cliente)
    {
        $data = $request->all();
        $cliente->update($data);
        return redirect()->route('cliente.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        if (isset($cliente)) {
            $cliente->delete();
        }
        return redirect()->route('cliente.index');
        //
    }
}
