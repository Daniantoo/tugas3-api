<?php

// app/Http/Controllers/MatkulController.php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Matkul;

class MatkulController extends Controller
{
    public function index()
    {
        $matkuls = Matkul::all();
        return response()->json(['data' => $matkuls], 200);
    }

    public function store(Request $request)
    {
        $matkul = Matkul::create($request->all());
        return response()->json(['message' => 'Matkul created', 'data' => $matkul], 201);
    }

    public function show($id)
    {
        $matkul = Matkul::find($id);
        if (!$matkul) {
            return response()->json(['message' => 'Matkul not found'], 404);
        }
        return response()->json(['data' => $matkul], 200);
    }

    public function update(Request $request, $id)
    {
        $matkul = Matkul::find($id);
        if (!$matkul) {
            return response()->json(['message' => 'Matkul not found'], 404);
        }
        $matkul->update($request->all());
        return response()->json(['message' => 'Matkul updated', 'data' => $matkul], 200);
    }

    public function destroy($id)
    {
        $matkul = Matkul::find($id);
        if (!$matkul) {
            return response()->json(['message' => 'Matkul not found'], 404);
        }
        $matkul->delete();
        return response()->json(['message' => 'Matkul deleted'], 200);
    }
}
