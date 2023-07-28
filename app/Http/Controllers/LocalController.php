<?php

namespace App\Http\Controllers;

use App\Models\Local;
use App\Http\Requests\StoreLocalRequest;
use App\Http\Requests\UpdateLocalRequest;
use App\Models\cadastro;
use App\Models\Pessoa;

class LocalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $local = Local::all();
        $total = $local->count();
        return view("local.index", compact(["local", "total"]));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cadastro = cadastro::all();
        return view("cadastro.create", compact(["cadastro"]));
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLocalRequest $request)
    {
        $data = $request->all();
        $local = Local::create($data);
        return redirect()->route('local.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Local $local)
    {
        return view("local.show", compact(["local"]));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Local $local)
    {
        $pessoa = Pessoa::all();
        return view("local.edit", compact(["local","pessoa"]));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLocalRequest $request, Local $local)
    {
        $data = $request->all();
        $local->update($data);
        return redirect()->route('local.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Local $local)
    {
        if (isset($local)) {
            $local->delete();
        }
        return redirect()->route('local.index');
        //
    }
}
