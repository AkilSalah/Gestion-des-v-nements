<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Event;
use App\Models\Organisateur;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
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
    $userId = Auth::user()->id;
    $client = Client::where('idUser', $userId)->first();
    $eventId = $request->input('eventId');
    $thisEvent = Event::find($eventId);

    $existingReservation = Reservation::where('clinetId', $client->id)
        ->where('eventId', $eventId)
        ->first();

    if ($client && !$existingReservation && $thisEvent && $thisEvent->nbPlaces > 0) {
        if ($thisEvent->acceptation === "Automatique") {
            $reservation = Reservation::create([
                'clinetId' => $client->id,
                'eventId' => $eventId,
                'status' => 1,
            ]);

            $thisEvent->nbPlaces -= 1;
            $thisEvent->save();

            return redirect()->back()->with('success', 'Votre réservation a été effectuée avec succès!');
        } elseif ($thisEvent->acceptation === "Manuelle") {
            $reservation = Reservation::create([
                'clinetId' => $client->id,
                'eventId' => $eventId,
                'status' => 0,
            ]);

            $thisEvent->nbPlaces -= 1;
            $thisEvent->save();
            return redirect()->back()->with('success', 'Votre réservation a été effectuée veuillez attendez la confirmation d\'organisateur ');

        }
    }
    return redirect()->back()->with('error', 'Impossible de créer la réservation. Vérifiez les disponibilités.');
}

    

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
