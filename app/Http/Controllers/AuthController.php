<?php

namespace App\Http\Controllers;

use App\Models\gebruikers;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        session_start();
        $gebruikersnaam = $request->input('gebruikersnaam');
        $wachtwoord = $request->input('password');

        $gebruiker = new gebruikers();
        $gebruiker->gebruikersnaam = $gebruikersnaam;
        $gebruiker->wachtwoord = $wachtwoord;
        $gebruiker->save();


        $_SESSION['gebruikersnaam'] = $gebruikersnaam;

        return redirect()->route('mijn');


    }

    public function login(Request $request)
    {
        session_start();
        $gebruikersnaam = $request->input('gebruikersnaam');
        $wachtwoord = $request->input('password');

        $gebruiker = gebruikers::where('gebruikersnaam', $gebruikersnaam)->first();

        if ($gebruiker) {

            if ($gebruiker->wachtwoord == $wachtwoord) {
                $_SESSION['gebruikersnaam'] = $gebruikersnaam;
                return redirect()->route('mijn');
            } else {
                return response()->json([
                    'message' => 'Incorrect password'
                ], 401);
            }
        } else {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }
    }

    public function checkLogin(request $request)
    {
        if (isset($_COOKIE['gebruikersnaam'])) {
            return response()->json([
                'message' => 'User logged in',
                'username' => $_SESSION['gebruikersnaam']
            ], 201);
        } else {
            return response()->json([
                'message' => 'User not logged in'
            ], 401);
        }
    }

    public function gebruikersInfo()
    {
        session_start();
        $gebruikersnaam = $_SESSION['gebruikersnaam'];
        $abonnementsid = gebruikers::where('gebruikersnaam', $gebruikersnaam)->first()->abonnementsid;
        $caps_gebruikersnaam = strtoupper($gebruikersnaam);
        return view('omgeving', compact('gebruikersnaam', 'abonnementsid', 'caps_gebruikersnaam'));
    }

}
