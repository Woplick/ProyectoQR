<?php

namespace App\Http\Controllers;

use App\Wholeseller;
use Illuminate\Http\Request;

class WholesellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("wholeseller.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wholeseller  $wholeseller
     * @return \Illuminate\Http\Response
     */
    public function show(Wholeseller $wholeseller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wholeseller  $wholeseller
     * @return \Illuminate\Http\Response
     */
    public function edit(Wholeseller $wholeseller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wholeseller  $wholeseller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wholeseller $wholeseller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wholeseller  $wholeseller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wholeseller $wholeseller)
    {
        //
    }
}
