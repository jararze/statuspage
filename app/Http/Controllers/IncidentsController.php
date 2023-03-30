<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Incident;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class IncidentsController extends Controller
{
    public function form(): View
    {
        return view('incidents.formIncident');
    }

    public function store(Request $request): View
    {
//        dd(Auth::id());
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required'],
        ]);

        $incident = Incident::create([
            'title' => $request->title,
            'user_id' => Auth::id(),
            'description' => $request->description,
            'incident_reported_at' => Carbon::now(),
            'incident_closed_at' => Carbon::now(),
            'severity' => $request->impact,
            'war_room_opened_at' => Carbon::now(),
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
    public function single($id): view
    {
        $incident           = Incident::find($id);
        $incidentReportedAt = $incident->incident_reported_at;
        $timeSince          = Carbon::parse($incidentReportedAt)->diffForHumans();
        $timeSince2         = Carbon::parse($incidentReportedAt)->diffForHumans(['parts' => 4]);
        $timer              = Carbon::parse($incidentReportedAt);
        $userName           = auth()->user()->name;

//        var_dump($timer)
//        echo($timeSince);
        return view('incidents.singleIncident', compact('incident', 'timeSince', 'timer', 'userName', 'timeSince2'));

    }
    public function updateStatus(Request $request)
    {
//        dd($request);
        $incident = Incident::find($request->idIncident);
        if(is_null($incident)){
            return abort(404);
        }else{
            try {
                Incident::where('id',$request->idIncident)
                    ->update(['status' => $request->updateStatus]);
                $msg = "Data updated";
            } catch (\Illuminate\Database\QueryException $e) {
                $msg = "Something happened, please try again";
            } catch (\Exception $e) {
                $msg = "Something happened, please try again";
            }
        }
        return response()->json(['msg'=>$msg]);
    }
}
