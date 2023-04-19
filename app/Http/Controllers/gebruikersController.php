<?php

namespace App\Http\Controllers;

use App\Http\Requests\gebruikersRequest;
use App\Http\Resources\gebruikersResource;
use App\Models\gebruikers;

class gebruikersController extends Controller
{
    public function index()
    {
        return gebruikersResource::collection(gebruikers::all());
    }

    public function store(gebruikersRequest $request)
    {
        return new gebruikersResource(gebruikers::create($request->validated()));
    }

    public function show(gebruikers $gebruikers)
    {
        return new gebruikersResource($gebruikers);
    }

    public function update(gebruikersRequest $request, gebruikers $gebruikers)
    {
        $gebruikers->update($request->validated());

        return new gebruikersResource($gebruikers);
    }

    public function destroy(gebruikers $gebruikers)
    {
        $gebruikers->delete();

        return response()->json();
    }
}
