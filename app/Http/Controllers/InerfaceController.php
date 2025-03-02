<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Salle;
use App\Models\Tim;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InerfaceController extends Controller
{
    public function home()
    {
        return view('interface.home');
    }
    public function salles()
    {
        $salles = Salle::all();
        return view("interface.salles", compact('salles'));
    }
    public function salle($id)
    {
        $salle = Salle::find($id);
        $tims = Tim::all();
        $dateBooking = session('date_booking');
        $bookedTimes = Booking::where('id_salle', $id)
            ->where('date_booking', '=', $dateBooking)
            ->select('time_start', 'time_fin')
            ->get();

        $bookedTimeSlots = [];
        foreach ($bookedTimes as $booking) {
            $bookedTimeSlots[] = [
                'start' => $booking->time_start,
                'end' => $booking->time_fin,
            ];
        }

        return view("interface.salle", compact('salle', 'tims', 'bookedTimeSlots'));
    }


    public function select_date(Request $request)
    {
        try {
            $date_select = Carbon::parse($request->date_booking);

            if ($date_select->lt(Carbon::today())) {
                return back()->with('error', "La date saisie est dans le passé. Veuillez sélectionner une date valide.");
            }

            $request->session()->put('date_select', $date_select->toDateString());

            return redirect()->route('salles_interface')->with('success', "Date sélectionnée avec succès !");

        } catch (\Exception $e) {
            return back()->with('error', "Une erreur est survenue : " . $e->getMessage());
        }
    }

    public function delete_booking($id)
    {
        try {
            $booking = Booking::find($id);
            if ($booking) {
                $booking->delete();
                return redirect(route('admin'))->with('success', 'la réservation supprimé avec succès');
            } else {
                return back()->with('error', "La réservation n'existe pas.");
            }
        } catch (\Exception $e) {
            return back()->with('error', "Une erreur est survenue : " . $e->getMessage());
        }
    }

}
