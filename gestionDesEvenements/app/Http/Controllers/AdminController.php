<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Client;
use App\Models\Event;
use App\Models\Organisateur;
use App\Models\User ;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $clients = Client::count();
        $organisateur = Organisateur::count();
        $categories = Categorie::count();
        $events = Event::count();
        return view('Admin.dashboard', compact('clients', 'organisateur', 'categories', 'events'));
    }

    public function usersIndex(){
    $utilisateurs = User::where('role', 'client')
    ->orWhere('role', 'organisateur')
    ->get();
    return view('Admin.utilisateurAdmin', compact('utilisateurs'));
    }
    public function eventIndex(){
        $events = Event::where('status', 0)
        ->get();
        return view('Admin.events', compact('events'));
        }

    public function blockAccess(Request $request, $userId)
    {
        $user = User::findOrFail($userId);
        $request->validate([
            'status' => 'required',
        ]);
        $user->update([
            'status' => $request->status,
        ]);

        return redirect()->back();
    }

    public function publication (Request $request , $eventId){
        
        $event = Event::findOrFail($eventId);
        $event->update([
            'status' => $request->status,
        ]);

        return redirect()->back();
        
    }


   
        

    
}
