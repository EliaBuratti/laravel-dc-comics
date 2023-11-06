<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class trahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::onlyTrashed()->get();
        return view('admin.comic.trash', compact('comics'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $comic = Comic::withTrashed()->find($id);
        //dd($comic);
        return view('admin.comic.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Comic::withTrashed()->find($id);
        $data->restore();

        return to_route('admin')->with('message', 'Restored successfully');
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
    public function destroy($comic)
    {
        $data = Comic::withTrashed()->find($comic);
        //dd($data);
        $data->forceDelete();

        return redirect()->back();
    }
}
