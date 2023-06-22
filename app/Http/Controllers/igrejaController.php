<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\membro;
use App\Models\Setor;

class igrejaController extends Controller
{
    //
    public function index()
    {
        $setores = Setor::all();
        return view('igreja.index', ['setores'=> $setores]);
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
        membro::create($request->all());
        return redirect()->route('igreja.home');
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
