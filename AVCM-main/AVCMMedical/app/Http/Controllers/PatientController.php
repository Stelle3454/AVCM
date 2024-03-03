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
    public function store(Request $request)
    {
        Patient::create($request->all());
        return response()->json('Data deleted successfully', 201);


    }
    public function destroy(Patient $patient)
    {
        $patient->delete();
    }
}
