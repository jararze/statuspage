<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Incident;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Carbon\Carbon;

class IncidentsController extends Controller
{
    public function form(): View
    {
        return view('incidents.formIncident');
    }

    public function store(Request $request): View
    {
//        dd($request);
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required'],
        ]);

        $incident = Incident::create([
            'title' => $request->title,
            'description' => $request->description,
            'incident_reported_at' => Carbon::now(),
        ]);

        return view('incidents.formIncident')->withSuccess('You have successfully created a new incident!');
    }
    public function list(): view
    {
//        $incidents = Incident::where('status', '0');
        $countIncidentsOpened  = Incident::where('status', '0')->count();
        $countIncidentsAllTime = Incident::all()->count();
        $incidents             = Incident::all()->sortByDesc("id");
//        dd($incidents);
//        foreach ($incidents as $incident) {
//            dd($incident);
//        }
        return view('incidents.listIncidents', compact('incidents','countIncidentsOpened','countIncidentsAllTime'));
//        return view('incidents.listIncidents');

    }
    public function single(): view
    {
//        $incidents = Incident::where('status', '0');
//        $incidents = Incident::all()->sortByDesc("id");
//        dd($incidents);
//        foreach ($incidents as $incident) {
//            dd($incident);
//        }
//        return view('incidents.listIncidents', compact('incidents'));
        return view('incidents.singleIncident');

    }
}
