<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function welcome()
    {
       return view('welcome');
    }

    public function apropos()
    {
       return view('apropos');
    }

    public function propriete()
    {
       return view('propriete');
    }

    public function blog()
    {
       return view('blog');
    }

    public function contact()
    {
       return view('contact');
    }

    public function agentgrid()
    {
       return view('agentgrid');
    }

    public function agentsingle()
    {
       return view('agentgrid');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
