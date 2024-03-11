<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Client;
use App\Models\Event;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(Request $request)
{
    $categories = Categorie::all();
    $clientEvents = Event::with('organisateur.user')->where('status', 1)
                         ->where('date', '>', now());

    $search = $request->input('search');
    $categoryFilter = $request->input('Categorie');

    if ($search) {
        $clientEvents->where('title', 'like', '%' . $search . '%');
    }

    if ($categoryFilter && $categoryFilter !== 'Tout') {
        $clientEvents->where('categoryId', $categoryFilter);
    }

    $clientEvents = $clientEvents->paginate(3);

    return view('Client.home', compact('clientEvents', 'categories'));
}


    public function singleEvent($idEvent){
        $evento = Event::with('organisateur','organisateur.user')->where('id',$idEvent)
        ->first();
        if($evento->status == 1){
        return view('Client.singleEvent', compact('evento'));
        }else{
            return  abort('404');
        }
    }
    
    


    

}
