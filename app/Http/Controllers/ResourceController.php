<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Category;



class ResourceController extends Controller
{
    public function index(Request $request)
    { 
    return Inertia::render('Resources', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('reguster'),
        'resources' => Resource::with('category')->get(),
        ]);
    }

    public function store(Request $request)
    {
            Resource::create([
            'title' => $request->title,
            'link' => $request->link,
            'description' => $request->description,
            'category_id' => Category::first()->id,
            'creator_id' => $request->user()->id,
        ]);
        
        return Inertia::location('/');

    }
}
