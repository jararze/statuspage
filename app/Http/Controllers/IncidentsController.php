<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class IncidentsController extends Controller
{
    public function store(Request $request){
        dd($request);
    }

    public function form(){
        return view('formIncident');
    }
}
