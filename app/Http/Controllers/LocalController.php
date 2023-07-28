<?php

namespace App\Http\Controllers;

use App\Models\Local;
use App\Http\Requests\StoreLocalRequest;
use App\Http\Requests\UpdateLocalRequest;


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
        return view("local.create");
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLocalRequest $request)
    {
        $data = $request->all(); //valida os dados de acordo com a data
        $local = Local::create($data); // 
        return redirect()->route('local.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Local $local)
    {
        return view("local.show", compact(["local"])); // retorna o request 'original' acreditando que os dados foram enviados corretamente.
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Local $local)
    {
        return view("local.edit"); // alem de mostrar as informações é possivel editar
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
            $local->delete(); // sempre validar antes de destruir
        }
        return redirect()->route('local.index');
        //
    }
}
