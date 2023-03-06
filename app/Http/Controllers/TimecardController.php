<?php

namespace App\Http\Controllers;

use App\Models\Timecard;
use App\Models\Site;
use App\Models\Worker;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TimecardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('timecards.index', ['timecards' => Timecard::all(),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('timecards.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {

        $timecard = new Timecard();
        if(Worker::where('id',$request->worker_id)->exists() && Site::where('id',$request->site_id)->exists() && Timecard::where('date',$request->date)->exists()){
            return abort("404");
        }
        if (Worker::where('id',$request->worker_id)->exists()){
            $timecard->worker_id = $request->worker_id;
        } else{  return abort("404");

        }

        if (Site::where('id',$request->site_id)->exists()){
            $timecard->site_id = $request->site_id;
        } else {  return abort("404");

        }
        $timecard->date = $request->date;
        $timecard->hours_worked = $request->hours_worked;
        $timecard->save();

        return redirect()->intended('/timecards');
    }

    /**
     * Display the specified resource.
     */
          public function show(string $id)
    {

        return view('timecards.show', [
            'timecard' => Timecard::findOrFail($id)
        ]);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('timecards.edit', [
            'timecard' => Timecard::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $timecard = Timecard::findOrFail($id);
        $timecard->worker_id = $request->worker_id;
        $timecard->site_id = $request->site_id;
        $timecard->date = $request->date;
        $timecard->hours_worked = $request->hours_worked;

        $timecard->save();

        return redirect()->intended('/timecards/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {

        $timecard = Timecard::findOrFail($id);

        Timecard::destroy($timecard->id);

        return redirect()->intended('/timecards');
    }
}
