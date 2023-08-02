<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\membro;
use App\Models\Setor;
use Illuminate\Http\JsonResponse;

class igrejaController extends Controller
{
    //
    public function index()
    {
        $membro = membro::all();
        $setores = Setor::all();
        return view('igreja.index', ['setores'=> $setores, 'membo' =>  $membro]);
    }
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
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|max:14', // Assuming CPF has a length of 14 characters
            'cargo' => 'required|in:Presbitero,Cooperador',
            'dizimista' => 'required|in:Sim,Não',
            'id_setor' => 'required|exists:setores,id', // Assuming 'setores' is the table name for your setors
        ]);

        try {
            Membro::create($validatedData);
            return response()->json(['message' => 'Member created successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while creating the member'], 500);
        }
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
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}
