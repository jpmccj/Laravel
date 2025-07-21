<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaciController extends Controller
{
    public function create()
    {
        return view('paci.create');
    }
    public function ler(Request $request)
    {
        dd($request->all());
    }
}
