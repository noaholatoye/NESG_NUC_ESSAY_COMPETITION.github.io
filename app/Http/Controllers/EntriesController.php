<?php

namespace App\Http\Controllers;

use App\entries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\user;

class EntriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $current_user = Auth::user();
        $has_user_submitted = entries::where('user_id','=',Auth::id())->count();
        return view('submit', compact('current_user','has_user_submitted'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $has_user_submitted = entries::where('user_id','=',Auth::id())->count();

        if ($has_user_submitted == 0) {
            $add_entry = new entries;
            $add_entry->user_id = Auth::id();
            $add_entry->user_profile = $request->user_profile;
            $add_entry->essay_summary = $request->essay_summary;
            $add_entry->essay = $request->essay;
            $add_entry->save();

            return view('success')->withSuccess("Entry Successful");
        }else {
            ?>
                <script>
                    window.alert('You have already submitted an entry. Multiple entries are not allowed.');
                </script>
            <?php
            return redirect()->route('pages.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\entries  $entries
     * @return \Illuminate\Http\Response
     */
    public function show(entries $entries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\entries  $entries
     * @return \Illuminate\Http\Response
     */
    public function edit(entries $entries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\entries  $entries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, entries $entries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\entries  $entries
     * @return \Illuminate\Http\Response
     */
    public function destroy(entries $entries)
    {
        //
    }
}
