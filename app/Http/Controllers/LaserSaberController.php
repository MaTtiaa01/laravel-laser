<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLaserSaberRequest;
use App\Http\Requests\UpdateLaserSaberRequest;
use App\Models\LaserSaber;

class LaserSaberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sabers = LaserSaber::all();
        //dd($sabers);
        return view('admin.sabers.index', compact('sabers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sabers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLaserSaberRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLaserSaberRequest $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LaserSaber  $laserSaber
     * @return \Illuminate\Http\Response
     */
    public function show(LaserSaber $laserSaber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LaserSaber  $laserSaber
     * @return \Illuminate\Http\Response
     */
    public function edit(LaserSaber $laserSaber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLaserSaberRequest  $request
     * @param  \App\Models\LaserSaber  $laserSaber
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLaserSaberRequest $request, LaserSaber $laserSaber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LaserSaber  $laserSaber
     * @return \Illuminate\Http\Response
     */
    public function destroy(LaserSaber $laserSaber)
    {
        //
    }
}
