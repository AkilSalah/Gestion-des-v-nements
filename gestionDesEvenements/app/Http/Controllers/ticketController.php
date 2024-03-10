<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ticketController extends Controller
{
    public function index(){
     $user = Auth::user()->id;
     $clientId = Client::where('idUser', $user)->first(); 
     $reservationTicket = Reservation::with('client.user', 'event.organisateur.user')
     ->where('clinetId', $clientId->id)
     ->where('status', 1)
     ->orderByDesc('id')
     ->get();
 


    return view('Client.ticket',compact('reservationTicket'));
    }
}
