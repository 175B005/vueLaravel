<?php

namespace App\Http\Controllers;

use App\Twiite;
use Illuminate\Http\Request;
use App\Twiite;

class TwiiteController extends Controller
{
    protected $twiite
    public function __construct(Twiite $twiite){

	$this->middleware('auth');
	$this->twiite = $twiite;
    }

    public function index(Request $request)
    {
        $userId = Auth::id();
	$inputs = $request->all();
	
	$twiiteList = $this->twiite->filterEqual('user_id',$userId)
			   ->orderby('created_at','desc')
   			   ->get();
	
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Twiite  $twiite
     * @return \Illuminate\Http\Response
     */
    public function show(Twiite $twiite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Twiite  $twiite
     * @return \Illuminate\Http\Response
     */
    public function edit(Twiite $twiite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Twiite  $twiite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Twiite $twiite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Twiite  $twiite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Twiite $twiite)
    {
        //
    }
}
