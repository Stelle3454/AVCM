<?php

namespace App\Http\Controllers;
use App\Models\Avcm;
use Illuminate\Http\Request;
use lluminate\Http\Response;
use Illuminate\Http\RedirectResponse;


class AvcmController extends Controller
{
    public function index()
    {
        return Avcm::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'firstName' => 'required',
            'middleName' => 'nullable',
            'lastName' => 'required',
        ]);

        $doctor = Avcm::create($data);

        return response()->json($doctor, 201);
    }

    public function update(Request $request, Avcm $doctor)
    {
        $data = $request->validate([
            'firstName' => 'required',
            'middleName' => 'nullable',
            'lastName' => 'required',
        ]);

        $doctor->update($data);

        return response()->json($doctor, 200);
    }

    public function destroy(Avcm $avcm)
    {
        $avcm->delete();

        return response()->json(null, 204);
    }    
}

