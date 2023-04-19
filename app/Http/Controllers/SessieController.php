<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gebruikers;
use App\Models\sessies;

class SessieController extends Controller
{
    public function laadSessies()
    {
        $sessies = sessies::all();
        return response()->json($sessies);
    }

    public function maakSessie(Request $request)
    {
        $sessie = new sessies();
        $sessie->sessienaam = $request->input('naam');
        $sessie->trainer = $request->input('trainer');
        $sessie->limiet_deelnemers = $request->input('max_deelnemers');
        $sessie->starting = $request->input('starting');
        $sessie->save();

        return response()->json($sessie);
    }

    public function joinSessie(Request $request)
    {
        $sessie = sessies::find($request->input('naam'));
        $gebruiker = gebruikers::find($request->input('gebruikersid'));

        // add 1 to the amount of numbers in gebruikers_deelnemend and locally safe so he can't join twice
        $sessie->gebruikers_deelnemend = $sessie->gebruikers_deelnemend + 1;
        $sessie->save();

        return response()->json($sessie);
    }

}
