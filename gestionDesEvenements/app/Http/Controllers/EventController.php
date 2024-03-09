<?php

namespace App\Http\Controllers;

use App\Http\Requests\eventRequest;
use App\Models\Categorie;
use App\Models\Event;
use App\Models\Organisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Prompts\Concerns\Events;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organisateur = Auth::user()->id;
        $idOrganisateur = Organisateur::where('idUser', $organisateur)->first();
        $categories = Categorie::all();
        $events = Event::where('organisateurId', $idOrganisateur->id)->get();
        return view('Organisateur.evenements', compact('categories', 'events'));
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
        $id = Auth::user()->id;
        $idOrganisateur = Organisateur::where('idUser', $id)->first();
        
        $validatedData = $request->validate([
            'categorie' => 'required',
            'image' => 'required',
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'lieu' => 'required',
            'nbPlaces' => 'required',
            'acceptation' => 'required',
        ]);

      

        $imagePath = $request->file('image')->store('public/images/events');
    
        $relativeImagePath = str_replace('public/', 'storage/', $imagePath);


        Event::create([
            'organisateurId' => $idOrganisateur->id,
            'categoryId' => $validatedData['categorie'],
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'date' => $validatedData['date'],
            'lieu' => $validatedData['lieu'],
            'nbPlaces' => $validatedData['nbPlaces'],
            'image' => $relativeImagePath,
            'acceptation' => $validatedData['acceptation'],
        ]);
        return redirect()->back();
    }


    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(eventRequest $request, Event $event)
    {

        $validateRequest = $request->validated();
        if ($request->hasFile('image_edit')) {
            $imagePath = $request->file('image_edit')->store('public/images/events');
            $relativeImagePath = str_replace('public/', 'storage/', $imagePath);
            $request['image_edit'] = $relativeImagePath;
        }
        $event->update([
            'title'=>$validateRequest["title_edit"],
            'categoryId' => $validateRequest["categorie_edit" ],
            'description'=>$validateRequest["description_edit"],
            'lieu'=>$validateRequest["lieu_edit"],
            'nbPlaces' => $validateRequest["nbPlaces_edit"],
            'date' => $validateRequest["date_edit"],

        ]);

        return redirect()->back();
    }





    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->back();
    }
}
