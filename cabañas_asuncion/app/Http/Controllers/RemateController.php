<?php

namespace App\Http\Controllers;

use App\Remate;
use Illuminate\Http\Request;

class RemateController extends Controller
{

    public function index()
    {
        return view('remates.index');
    }

    public function list()
    {
        $remates = Remate::orderBy('create_at','desc')->paginate(20);
        $title = 'Lista de remates';
        return view('remates.list', compact('remates', 'title'));
    }
 
    public function create()
    {
        $title = 'Nuevo remate';
        return view('remates.create', compact('title'));
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Remate  $remate
     * @return \Illuminate\Http\Response
     */
    public function show(Remate $remate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Remate  $remate
     * @return \Illuminate\Http\Response
     */
    public function edit(Remate $remate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Remate  $remate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Remate $remate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Remate  $remate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Remate $remate)
    {
        //
    }
}
