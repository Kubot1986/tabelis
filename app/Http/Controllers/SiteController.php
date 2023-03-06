<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        return view('sites.index', ['sites' => Site::all()]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sites.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {

        $site = new Site();
        $site->site_name = $request->site_name;
        $site->site_start_date = $request->site_start_date;
        $site->site_end_date = $request->site_end_date;
        $site->save();

        return redirect()->intended('/sites');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('sites.show', [
            'site' => Site::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('sites.edit', [
            'site' => Site::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $site = Site::findOrFail($id);
        $site->site_name = $request->site_name;
        $site->site_start_date = $request->site_start_date;
        $site->site_end_date = $request->site_end_date;
        $site->save();

        return redirect()->intended('/sites/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): RedirectResponse
    {

        $site = Site::findOrFail($id);

        Site::destroy($site->id);

        return redirect()->intended('/sites');
    }
}
