<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Salle;
use App\Models\Tim;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Session;

class InerfaceController extends Controller
{
    public function home()
    {
        return view('interface.home');
    }
    public function back_date()
    {
        if (Session::has('date_select')) {
            Session::pull('date_select');
        }

        return redirect(route('home'));
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
        $date_select = session('date_select', null);

        if (!$date_select) {
            return redirect()->route('home')->with('error', "Aucune date sélectionnée. Vous serez redirigé vers la page d'accueil.");
        }

        $bookedTimes = Booking::where('id_salle', $id)
            ->where('date_booking', '=', $date_select)
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
            return back()->with('error', "Une erreur est survenue : ");
        }
    }

    public function booking_post(Request $request)
    {
        try {
            $dateBooking = session('date_select');
            if (!$dateBooking) {
                return redirect(route('home'))->with('error', "La date de réservation n'est pas définie. Veuillez sélectionner une date.");
            }

            $prof_id = session('loginIdProf');

            $request->validate([
                'tim_start' => 'required|exists:tims,id',
                'tim_end' => 'required|exists:tims,id|gt:tim_start',
            ]);

            $startTime = $request->tim_start;
            $endTime = $request->tim_end;

            $existingBooking = Booking::where('id_salle', $request->id)
                ->where('date_booking', $dateBooking)
                ->where(function ($query) use ($startTime, $endTime) {
                    $query->where(function ($q) use ($startTime, $endTime) {
                        $q->where('time_start', '<', $endTime)
                            ->where('time_fin', '>', $startTime);
                    });
                })
                ->exists();

            if ($existingBooking) {
                return back()->with('error', 'Ce créneau horaire est déjà réservé pour la date sélectionnée.');
            }

            Booking::create([
                'id_salle' => $request->id,
                'date_booking' => $dateBooking,
                'time_start' => $startTime,
                'time_fin' => $endTime,
                'id_prof' => $prof_id,
            ]);

            return redirect()->route('salle', ['id' => $request->id])->with('success', 'Réservation effectuée avec succès.');
        } catch (\Exception $e) {
            return back()->with('error', "Une erreur est survenue, veuillez choisir des horaires qui n'ont pas encore été sélectionnés");
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
            return back()->with('error', "Une erreur est survenue : ");
        }
    }

    public function prof_logout(){
        if(Session::has('loginIdProf') || Session::has('date_select')){
            Session::pull('loginIdProf') ;
            Session::pull('date_select');
        }
        return redirect(route('home'))->with("Vous avez déconnecter avec succès");
    }
}
