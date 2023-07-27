<?php

namespace App\Http\Controllers;

use App\Models\cadastro;
use App\Http\Requests\StorecadastroRequest;
use App\Http\Requests\UpdatecadastroRequest;

class CadastroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cadastro = cadastro::all();
        // $tipos_bicho = cadastro::Paginate(50);
        $total = $cadastro->count();
        return view("cadastro.index", compact(["cadastro", "total"]));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("cadastro.create");
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecadastroRequest $request)
    {
        $data = $request->all();
        $cadastro = cadastro::create($data);       
        return redirect()->route('cadastro.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(cadastro $cadastro)
    {
        return view("cadastro.edit", compact(["cadastro"]));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cadastro $cadastro)
    {
        return view("cadastro.edit", compact(["cadastro"]));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecadastroRequest $request, cadastro $cadastro)
    {
        $data = $request->all();
        $cadastro->update($data);
        return redirect()->route('cadastro.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cadastro $cadastro)
    {
        if (isset($cadastro)) {
            $cadastro->delete();            
        } 
        return redirect()->route('cadastro.index');
        //
    }
}
