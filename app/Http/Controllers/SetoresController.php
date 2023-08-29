<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setor;

class SetoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $setores = Setor::all();
        return view('igreja.setor.listaSetores', ['setores'=> $setores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
       Setor::create($request->all());
        return redirect()->route('igreja.setores');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
       $setores = Setor::where('id', $id)->first();
      return view('igreja.setor.edit', ['setores'=> $setores]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
       $data = [
         'nome_setor' => $request->nome_setor,
       ];
        Setor::where('id' , $id)->update($data);
        return redirect()->route('igreja.setores');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Setor::where('id', $id)->delete();
        return redirect()->route('igreja.setores');
    }
}
