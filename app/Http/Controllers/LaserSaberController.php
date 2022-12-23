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
        //dd($request->all());
        $new_saber = new LaserSaber();
        $new_saber->name = $request['name'];
        $new_saber->description = $request['description'];
        $new_saber->image = $request['image'];
        $new_saber->price = $request['price'];
        $new_saber->save();

        return to_route('sabers.index');
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
    public function edit(LaserSaber $saber)
    {

        return view('admin.sabers.edit', compact('saber'));
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
        $data = [
            'name' => $request['name'],
            'description' => $request['description'],
            'image' => $request['image'],
            'price' => $request['price'],
        ];

        $laserSaber->update($data);
        return to_route('sabers.index');
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
