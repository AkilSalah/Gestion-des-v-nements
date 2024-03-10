<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $categories = Cache::remember('categories', now()->addHours(24), function () {
            return Categorie::all();
        });
    
        return view('Admin.categories', compact('categories'));
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
        $request->validate([
            'categorieName' => 'required',
        ]);
        Categorie::create([
            'categorieName' => $request->categorieName,
        ]);
        Cache::forget('categories');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorie $categorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorie $categorie)
    {
        $validatedData = $request->validate([
            'categorieName' => 'required',
        ]);
       
        $categorie->update($validatedData);
        
        Cache::forget('categories');

    
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();
        Cache::forget('categories');

        return redirect()->back();
    }
}
