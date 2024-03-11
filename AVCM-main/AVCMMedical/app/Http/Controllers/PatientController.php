<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        return response()->json(Patient::all()->toArray());
    }

    public function show(Patient $patient)
    {
        return response()->json($patient->toArray());
    }

    public function store(Request $request)
    {
        $patient = Patient::create($request->all());
        return response()->json($patient->toArray(), 201);
    }

    public function update(Request $request, Patient $patient)
    {
        $patient->update($request->all());
        return response()->json($patient->toArray(), 200);
    }

    public function destroy(Patient $patient)
    {
        $patient->delete();
        return response()->json('Data deleted successfully', 200);
    }
}
