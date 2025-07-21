<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MedController extends Controller
{
    public function create()
    {
        return view('med.create');
    }

    public function ler(Request $request)
    {
        dd($request->all());
    }
}
