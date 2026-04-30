<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiControl extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        public function index()
        {
            $prodis = Prodi::width('fakultas')->get();
            return view('prodi.index', compact('prodis'))
        }
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
    public function show(Periode $periode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Periode $periode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Periode $periode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Periode $periode)
    {
        //
    }
}
