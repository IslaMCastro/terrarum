<?php

namespace App\Http\Controllers;

use App\Models\Parceiro;
use App\Http\Requests\StoreParceiroRequest;
use App\Http\Requests\UpdateParceiroRequest;
use App\Models\Pessoa;

class ParceiroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parceiro = Parceiro::all();
        $total = $parceiro->count();
        return view("parceiro.index", compact(["parceiro", "total"]));
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
    public function store(StoreParceiroRequest $request)
    {
        $data = $request->all();
        $parceiro = Parceiro::create($data);
        return redirect()->route('parceiro.index');
        //
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Parceiro $parceiro)
    {
        return view("parceiro.show", compact(["parceiro"]));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Parceiro $parceiro)
    {
        $pessoa = Pessoa::all();
        return view("parceiro.edit", compact(["parceiro","pessoa"]));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateParceiroRequest $request, Parceiro $parceiro)
    {
        $data = $request->all();
        $parceiro->update($data);
        return redirect()->route('parceiro.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Parceiro $parceiro)
    {
        if (isset($parceiro)) {
            $parceiro->delete();
        }
        return redirect()->route('parceiro.index');
        //
    }
}
