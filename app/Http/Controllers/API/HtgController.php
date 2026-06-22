<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\HtgModel;
use Illuminate\Http\Request;

class HtgController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $htg = HtgModel::all();

        return response()->json(compact($htg));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Store the data

        return response()->json(['message' => 'Stored successfully.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $htg = HtgModel::find($id, 'id');

        return response()->json(compact($htg));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
