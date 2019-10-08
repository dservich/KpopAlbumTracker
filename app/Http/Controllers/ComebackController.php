<?php

namespace App\Http\Controllers;

use App\Comeback;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ComebackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd(Comeback::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comebacks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comeback = Comeback::create([
            'artist_id' => $request->artist,
            'type' => $request->type,
            'is_debut' => $request->debut ?? false,
            'announcement_date' => $request->input('announcement-date'),
            'release_date' => $request->input('release-date'),
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comeback  $comeback
     * @return \Illuminate\Http\Response
     */
    public function show(Comeback $comeback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comeback  $comeback
     * @return \Illuminate\Http\Response
     */
    public function edit(Comeback $comeback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comeback  $comeback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comeback $comeback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comeback  $comeback
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comeback $comeback)
    {
        //
    }

    public function getComebacks(Request $request)
    {
        $comebacks = Comeback::all();

        return response()->json($comebacks);
    }
}
