<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class AdminComicController extends Controller
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
    public function create(Request $request)
    {


        $new_comic = new Comic();

        $new_comic->title = $request['title'];
        $new_comic->description = $request['description'];
        $new_comic->thumb = $request['thumb'];
        $new_comic->price = $request['price'];
        $new_comic->sale_date = $request['sale_date'];
        $new_comic->type = $request['type'];
        $new_comic->artists =  $request['artists'];
        $new_comic->writers =  $request['writers'];
        //save instruction
        $new_comic->save();

        return view('admin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
