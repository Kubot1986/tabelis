<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){

        return view('workers.index', ['workers' => Worker::all()]);
    }
    public function welcome(){

        return view('workers.welcome', ['workers' => Worker::all()]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('workers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {

        $worker = new Worker();
        $worker->full_name = $request->full_name;
        $worker->role = $request->role;
        $worker->save();

        return redirect()->intended('/workers');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        return view('workers.show', [
            'worker' => Worker::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('workers.edit', [
            'worker' => Worker::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $worker = Worker::findOrFail($id);
        $worker->full_name = $request->full_name;
        $worker->role = $request->role;
        $worker->save();

        return redirect()->intended('/workers/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): RedirectResponse
    {

        $worker = Worker::findOrFail($id);




        Worker::destroy($worker->id);

        return redirect()->intended('/workers');
    }
}
