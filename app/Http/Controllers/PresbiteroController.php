<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\membro;
use App\Models\Setor;

class PresbiteroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $presbiteros = membro::all();
        $setores = Setor::all();
        return view('igreja.presbitero.listaPresbitero', ['presbiteros' =>  $presbiteros, 'setores' => $setores, 'request' => $request->all()]);
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
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
       
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //
        $presbiteros = membro::where('id', $id)->first();
        $setores = Setor::all();
        return view('igreja.presbitero.edit', ['presbiteros' =>  $presbiteros, 'setores' => $setores]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        //
        $data = [
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'cargo' =>  $request->cargo,
            'dizimista' => $request->dizimista,
            'id_setor' =>  $request->id_setor,
        ];

        membro::where('id', $id)->update($data);
        return redirect()->route('igreja.presbiteros');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        membro::where('id', $id)->delete();
        return redirect()->route('igreja.presbiteros');
    }
}
