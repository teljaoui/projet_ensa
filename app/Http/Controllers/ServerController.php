<?php

namespace App\Http\Controllers;

use App\Models\Prof;
use Illuminate\Http\Request;

class ServerController extends Controller
{
    public function addprofpost(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string',
                'email' => 'required|string|email|unique:profs,email',
                'phone_number' => 'required|string',
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
            $body = "Bonjour,\n\nVoici vos informations de connexion :\n\nEmail : $email\nMot de passe : $password\n\nVeuillez vous connecter à votre compte en utilisant le lien suivant .\n\n http://example.com/login \n\nCordialement.";

            $subject = str_replace('+', ' ', urlencode($subject));
            $body = str_replace('+', ' ', urlencode($body));

            $mailto = "mailto:$email?subject=$subject&body=$body";

            return redirect()->route('profadd')->with('success', 'Professeur ajouté avec succès.')
                ->with('mailto', $mailto);

        } catch (\Exception $e) {
            return back()->with('error', 'Une erreur est survenue lors de l\'ajout du Professeur' . $e);
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
                    'phone_number' => 'required|string',
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
                $body = "Bonjour,\n\nVoici vos informations de connexion :\n\nEmail : $email\nMot de passe : $password\n\nVeuillez vous connecter à votre compte en utilisant le lien suivant .\n\n http://example.com/login \n\nCordialement.";

                $subject = str_replace('+', ' ', urlencode($subject));
                $body = str_replace('+', ' ', urlencode($body));

                $mailto = "mailto:$email?subject=$subject&body=$body";

                return redirect()->route('profup', ['id' => $request->id])->with('success', 'Professeur Modifié avec succès.')
                    ->with('mailto', $mailto);
            } else {
                return back()->with('error', 'Professeur non trouvé');
            }
        } catch (\Exception $e) {
            return back()->with('error', 'Une erreur est survenue lors de la modification du Professeur' . $e);
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

        } catch (\Exception $e) {
            return back()->with('error', 'Une erreur est survenue lors de la suppréssion du Professeur' . $e);
        }
    }


}
