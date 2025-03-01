<?php

namespace App\Http\Controllers;

use App\Models\Prof;
use App\Models\Salle;
use App\Models\Tim;
use Illuminate\Http\Request;


class ServerController extends Controller
{
    public function addprofpost(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string',
                'email' => 'required|string|email|unique:profs,email',
                'phone_number' => 'required|string|digits:10',
                'password' => 'required|string',
            ]);

            $password = $validated['password'];

            $prof = Prof::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone_number' => $validated['phone_number'],
                'password' => bcrypt($password)
            ]);

            $email = $prof->email;
            $subject = 'Vos informations de connexion à l\'application de réservation de salles.';
            $body = "Bonjour,\n\nVoici vos informations de connexion :\n\nEmail :mail\nMot de passe : $password\n\nVeuillez vous connecter à votre compte en utilisant le lien suivant .\n\n http://example.com/login \n\nCordialement.";

            $subject = str_replace('+', ' ', urlencode($subject));
            $body = str_replace('+', ' ', urlencode($body));

            $mailto = "mailto:$email?subject=$subject&body=$body";

            return redirect()->route('profadd')->with('success', 'Professeur ajouté avec succès.')
                ->with('mailto', $mailto);

        } catch (\Exception) {
            return back()->with('error', 'Une erreur est survenue lors de l\'ajout du Professeur');
        }
    }


    public function upprofpost(Request $request)
    {
        try {
            $prof = Prof::find($request->id);

            if ($prof) {
                $validated = $request->validate([
                    'name' => 'required|string',
                    'email' => 'required|string|email|unique:profs,email,' . $prof->id,
                    'phone_number' => 'required|string|digits:10',
                    'password' => 'required|string',
                ]);

                $password = $validated['password'];

                $prof->update([
                    'name' => $validated['name'],
                    'email' => $validated['email'],
                    'phone_number' => $validated['phone_number'],
                    'password' => bcrypt($password)
                ]);

                $email = $prof->email;
                $subject = 'Vos informations de connexion à l\'application de réservation de salles.';
                $body = "Bonjour,\n\nVoici vos informations de connexion :\n\nEmail :mail\nMot de passe : $password\n\nVeuillez vous connecter à votre compte en utilisant le lien suivant .\n\n http://example.com/login \n\nCordialement.";

                $subject = str_replace('+', ' ', urlencode($subject));
                $body = str_replace('+', ' ', urlencode($body));

                $mailto = "mailto:$email?subject=$subject&body=$body";

                return redirect()->route('profup', ['id' => $request->id])->with('success', 'Professeur Modifié avec succès.')
                    ->with('mailto', $mailto);
            } else {
                return back()->with('error', 'Professeur non trouvé');
            }
        } catch (\Exception) {
            return back()->with('error', 'Une erreur est survenue lors de la modification du Professeur');
        }
    }


    public function deleteprof($id)
    {
        try {
            $prof = Prof::find($id);
            if ($prof) {
                $prof->delete();
                return back()->with('success', 'Professeur Supprimé avec succès');
            } else {
                return back()->with('error', 'Professeur non trouvé');
            }
        } catch (\Exception) {
            return back()->with('error', 'Une erreur est survenue lors de la suppréssion du Professeur');
        }
    }

    public function addsallepost(Request $request)
    {
        try {
            $validatedata = $request->validate([
                'name' => 'required|string',
                'ability' => 'required|integer'
            ]);

            Salle::create([
                'name' => $validatedata['name'],
                'ability' => $validatedata['ability']
            ]);
            return back()->with('success', 'la salle est ajouter avec succès');
        } catch (\Exception) {
            return back()->with('error', 'Une erreur est survenue lors l\' ajoute du salle');
        }
    }

    public function upsallepost(Request $request)
    {
        try {
            $salle = Salle::find($request->id);
            if (!$salle) {
                return back()->with('error', 'Salle non trouvée.');
            }
            $validated = $request->validate([
                'name' => 'required|string',
                'ability' => 'required|integer'
            ]);
            $salle->update([
                'name' => $validated['name'],
                'ability' => $validated['ability']
            ]);
            return redirect(route("salles"))->with('success', 'La salle a été modifiée avec succès.');

        } catch (\Exception) {
            return back()->with('error', 'Une erreur est survenue lors la modification du salle');
        }
    }
    public function deletesalle($id)
    {
        try {
            $salle = Salle::find($id);

            if ($salle) {
                $salle->delete();
                return redirect()->route("salles")->with('success', 'la salle est supprimé avec succès');
            } else {
                return back()->with('error', 'la selle non trouvé');

            }

        } catch (\Exception) {
            return back()->with('error', 'Une erreur est survenue lors la suppréssion du salle');
        }
    }

    public function addtimepost(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'time' => 'required|date_format:H:i'
            ]);
            $time = date('H:i', strtotime($validatedData['time']));

            Tim::create([
                'time' => $time
            ]);
            return redirect(route("horaires"))->with("success", "Horaire ajouter avec succès");
        } catch (\Exception) {
            return back()->with('error', 'Une erreur est survenue lors l\' ajoute du Horaire');
        }
    }
    public function deletetime($id)
    {
        try {
            $time = Tim::find($id);

            if ($time) {
                $time->delete();
                return redirect()->route("horaires")->with('success', 'Horaire est supprimé avec succès');
            } else {
                return back()->with('error', ' du Horaire non trouvé');

            }
        } catch (\Exception) {
            return back()->with('error', 'Une erreur est survenue lors la suppréssion  du Horaire');
        }
    }

}
