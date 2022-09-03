<?php

namespace App\Http\Controllers;

use App\Models\Academics;
use App\Http\Requests\StoreAcademicsRequest;
use App\Http\Requests\UpdateAcademicsRequest;

class AcademicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('academics.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('academics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAcademicsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAcademicsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Academics  $academics
     * @return \Illuminate\Http\Response
     */
    public function show(Academics $academics)
    {
        return view('academics.show', compact('academics'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Academics  $academics
     * @return \Illuminate\Http\Response
     */
    public function edit(Academics $academics)
    {
        return view('academics.edit', compact('academics'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAcademicsRequest  $request
     * @param  \App\Models\Academics  $academics
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAcademicsRequest $request, Academics $academics)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Academics  $academics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Academics $academics)
    {
        // $academics->delete();
    }
}
