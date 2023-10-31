<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class UserComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('welcome', compact('comics'));
    }
}
