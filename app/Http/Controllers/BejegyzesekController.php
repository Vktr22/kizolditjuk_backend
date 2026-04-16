<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorebejegyzesekRequest;
use App\Http\Requests\UpdatebejegyzesekRequest;
use App\Models\bejegyzesek;

class BejegyzesekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StorebejegyzesekRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(bejegyzesek $bejegyzesek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bejegyzesek $bejegyzesek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatebejegyzesekRequest $request, bejegyzesek $bejegyzesek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bejegyzesek $bejegyzesek)
    {
        //
    }
}
