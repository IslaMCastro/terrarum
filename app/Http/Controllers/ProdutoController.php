<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Http\Requests\StoreProdutoRequest;
use App\Http\Requests\UpdateProdutoRequest;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produto = produto::all();
        $total = $produto->count();
        return view("produto.index", compact(["produto", "total"]));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("produto.create");
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProdutoRequest $request)
    {
        $data = $request->all();
        $produto = produto::create($data);
        return redirect()->route('produto.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto)
    {
        return view("produto.show", compact(["produto"]));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
        return view("produto.edit");
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProdutoRequest $request, Produto $produto)
    {
        $data = $request->all();
        $produto->update($data);
        return redirect()->route('produto.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        if (isset($produto)) {
            $produto->delete();
        }
        return redirect()->route('produto.index');
        //
    }
}
