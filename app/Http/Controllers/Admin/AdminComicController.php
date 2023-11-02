<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\throwException;

class AdminComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $comics = Comic::all();
        return view('admin.comic.admin', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('admin.comic.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->has('thumb')) {
            $img_path = Storage::put('comic_images', $request->thumb);
            $data['thumb'] = $img_path;
        } //non sarebbe necessario in quanto ho messo obbligatorio il campo

        $new_comic = Comic::create($data);

        return to_route('admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        //dd($comic);
        return view('admin.comic.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('admin.comic.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        if ($request->has('thumb') && $comic->thumb) {
            Storage::delete($comic->thumb);

            $img_path = Storage::put('comic_images', $request->thumb);
            $data['thumb'] = $img_path;
        }
        //dd($data);
        $comic->update($data);
        return to_route('admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
