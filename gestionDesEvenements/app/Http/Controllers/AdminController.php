<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Client;
use App\Models\Event;
use App\Models\Organisateur;
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
        return view('Admin.utilisateurAdmin');
    }

   
        

    
}
