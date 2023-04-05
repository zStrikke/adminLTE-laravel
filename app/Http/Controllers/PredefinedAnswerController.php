<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePredefinedAnswerRequest;
use App\Http\Requests\UpdatePredefinedAnswerRequest;
use App\Models\PredefinedAnswer;

class PredefinedAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePredefinedAnswerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePredefinedAnswerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PredefinedAnswer  $predefinedAnswer
     * @return \Illuminate\Http\Response
     */
    public function show(PredefinedAnswer $predefinedAnswer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PredefinedAnswer  $predefinedAnswer
     * @return \Illuminate\Http\Response
     */
    public function edit(PredefinedAnswer $predefinedAnswer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePredefinedAnswerRequest  $request
     * @param  \App\Models\PredefinedAnswer  $predefinedAnswer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePredefinedAnswerRequest $request, PredefinedAnswer $predefinedAnswer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PredefinedAnswer  $predefinedAnswer
     * @return \Illuminate\Http\Response
     */
    public function destroy(PredefinedAnswer $predefinedAnswer)
    {
        //
    }
}
