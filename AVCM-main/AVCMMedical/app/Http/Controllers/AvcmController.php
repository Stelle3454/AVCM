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
        return response()->json(Avcm::all()->toArray());
        

    }
    public function store(Request $request)
    {
        Avcm::create($request->all());
        return response()->json('Data added successfully', 201);


    }
    public function destroy(Avcm $avcm)
    {
        $avcm->delete();
    }
}

