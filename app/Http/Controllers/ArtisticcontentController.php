<?php

namespace App\Http\Controllers;

use App\Models\Artisticcontent;
use Illuminate\Http\Request;

class ArtisticcontentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artisticcontents = Artisticcontent::all();
        return view('index',compact('artisticcontents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artisticcontents = Artisticcontent::all();
        return view('create',compact('artisticcontents'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $artisticcontents = Artisticcontent::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return redirect()->route('artisticcontent.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Artisticcontent $artisticcontent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artisticcontent $artisticcontent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artisticcontent $artisticcontent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artisticcontent $artisticcontent)
    {
        //
    }
}
