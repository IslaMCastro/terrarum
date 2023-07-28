<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use App\Http\Requests\StoreFuncionarioRequest;
use App\Http\Requests\UpdateFuncionarioRequest;
use App\Models\Pessoa;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $funcionario = Funcionario::all();
        $total = $funcionario->count();
        return view("funcionario.index", compact(["funcionario", "total"]));
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
    public function store(StoreFuncionarioRequest $request)
    {
        $data = $request->all();
        $funcionario = Funcionario::create($data);
        return redirect()->route('funcionario.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Funcionario $funcionario)
    {
        return view("funcionario.show", compact(["funcionario"]));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Funcionario $funcionario)
    {
        $pessoa = Pessoa::all();
        return view("funcionario.edit", compact(["funcionario","pessoa"]));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFuncionarioRequest $request, Funcionario $funcionario)
    {
        $data = $request->all();
        $funcionario->update($data);
        return redirect()->route('funcionario.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Funcionario $funcionario)
    {
        if (isset($funcionario)) {
            $funcionario->delete();
        }
        return redirect()->route('funcionario.index');
        //
    }
}
