<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Event;
use App\Models\Organisateur;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrganisateurController extends Controller
{
   
    public function index()
    {
        $organisateur = auth::user()->id;
        $organisateurId = Organisateur::where('idUser', $organisateur)->first();
        $mesEvenements = Event::withCount('reservations')
        ->where('organisateurId', $organisateurId->id)
        ->get();
        return view('Organisateur.dashboard',compact('mesEvenements'));
    }

    public function acceptation(Request $request)
    {
     $organisateur = Auth::user()->id;
     $idOrganisateur = Organisateur::where('idUser', $organisateur)->first(); 
    $event = Reservation::with('client.user','event.organisateur')
    ->where('status', 0)->get();
    return view('Organisateur.acceptation', compact('event'));
    }

    public function acceptReservation(Request $request ,$eventReservation ){
        $reservation = Reservation::findOrFail($eventReservation);
        $reservation->update([
            'status' => $request->status,
        ]);
        return redirect()->back();
    }
    public function deleteReservation( $eventReservation ){
        $reservation = Reservation::findOrFail($eventReservation);
        $reservation->delete();
        return redirect()->back();
    }








}
