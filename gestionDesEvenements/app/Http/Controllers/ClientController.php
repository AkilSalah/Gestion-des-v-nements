<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Client;
use App\Models\Event;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {   $categories = Categorie::all();     
        $clientEvents = Event::where('status', 1)->get();
        
        return view('Client.home' ,compact('clientEvents','categories'));
    }
}
