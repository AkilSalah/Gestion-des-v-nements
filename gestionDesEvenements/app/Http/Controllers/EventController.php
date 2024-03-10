<?php

namespace App\Http\Controllers;

use App\Http\Requests\eventRequest;
use App\Models\Categorie;
use App\Models\Event;
use App\Models\Organisateur;
use App\Rules\AfterCurrentDate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
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
 
         $categories = Cache::remember('categories', now()->addHours(24), function () {
             return Categorie::all();
         });
 
         $events = Cache::remember('events' . $idOrganisateur->id, now()->addHours(24), function () use ($idOrganisateur) {
             return Event::where('organisateurId', $idOrganisateur->id)->get();
         });
 
         return view('Organisateur.evenements', compact('categories', 'events'));
     }
 
     public function store(Request $request)
     {
         $id = Auth::user()->id;
         $idOrganisateur = Organisateur::where('idUser', $id)->first();
         
         $validatedData = $request->validate([
             'categorie' => 'required',
             'image' => 'required',
             'title' => 'required',
             'description' => 'required',
             'date' => ['required', new AfterCurrentDate],
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
 
         Cache::forget('events' . $idOrganisateur->id);
 
         return redirect()->back();
     }
 
     public function update(eventRequest $request, Event $event)
{
    $validateRequest = $request->validated();

    if ($request->hasFile('image_edit')) {
        if ($event->image && Storage::exists($event->image)) {
            Storage::delete($event->image);
        }

        $imagePath = $request->file('image_edit')->store('public/images/events');
        $relativeImagePath = str_replace('public/', 'storage/', $imagePath);

        $event->update([
            'image' => $relativeImagePath,
        ]);
    }

    elseif ($event->image) {
        
    }

    $event->update([
        'title' => $validateRequest["title_edit"],
        'categoryId' => $validateRequest["categorie_edit"],
        'description' => $validateRequest["description_edit"],
        'lieu' => $validateRequest["lieu_edit"],
        'nbPlaces' => $validateRequest["nbPlaces_edit"],
        'date' => $validateRequest["date_edit"],
        'acceptation' => $validateRequest['acceptation'],
    ]);

    $idOrganisateur = $event->organisateurId;
    Cache::forget('events' . $idOrganisateur);

    return redirect()->back()->with('success', 'Événement mis à jour avec succès.');
}

 
     public function destroy(Event $event)
     {
         $event->delete();
         $idOrganisateur = $event->organisateurId;
         Cache::forget('events' . $idOrganisateur);
 
         return redirect()->back();
     }
}
