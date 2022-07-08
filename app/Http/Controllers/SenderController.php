<?php

namespace App\Http\Controllers;

use App\Models\Sender;
use Illuminate\Http\Request;

class SenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = ' Techno | Sender';

        return view('dashboard.sender.index', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = ' Techno | Sender ';

        return view('dashboard.sender.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sender  $sender
     * @return \Illuminate\Http\Response
     */
    public function show(sender $sender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sender  $sender
     * @return \Illuminate\Http\Response
     */
    public function edit(sender $sender)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sender  $sender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sender $sender)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sender  $sender
     * @return \Illuminate\Http\Response
     */
    public function destroy(sender $sender)
    {
        //
    }
}
