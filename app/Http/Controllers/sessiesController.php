<?php

namespace App\Http\Controllers;

use App\Http\Requests\sessiesRequest;
use App\Http\Resources\sessiesResource;
use App\Models\sessies;

class sessiesController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', sessies::class);

        return sessiesResource::collection(sessies::all());
    }

    public function store(sessiesRequest $request)
    {
        $this->authorize('create', sessies::class);

        return new sessiesResource(sessies::create($request->validated()));
    }

    public function show(sessies $sessies)
    {
        $this->authorize('view', $sessies);

        return new sessiesResource($sessies);
    }

    public function update(sessiesRequest $request, sessies $sessies)
    {
        $this->authorize('update', $sessies);

        $sessies->update($request->validated());

        return new sessiesResource($sessies);
    }

    public function destroy(sessies $sessies)
    {
        $this->authorize('delete', $sessies);

        $sessies->delete();

        return response()->json();
    }
}
