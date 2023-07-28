<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use App\Http\Requests\StorePessoaRequest;
use App\Http\Requests\UpdatePessoaRequest;
use App\Models\cadastro;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pessoa = Pessoa::all();
        $total = $pessoa->count();
        return view("pessoa.index", compact(["pessoa", "total"]));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view("pessoa.create");
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePessoaRequest $request)
    {
        $data = $request->all();
        $pessoa = Pessoa::create($data);
        return redirect()->route('pessoa.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pessoa $pessoa)
    {
        return view("pessoa.show", compact(["pessoa"]));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pessoa $pessoa)
    {
       
        return view("pessoa.edit");//
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePessoaRequest $request, Pessoa $pessoa)
    {
        $data = $request->all();
        $pessoa->update($data);
        return redirect()->route('pessoa.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pessoa $pessoa)
    {
        if (isset($pessoa)) {
            $pessoa->delete();
        }
        return redirect()->route('pessoa.index');
        //
    }
}
