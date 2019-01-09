<?php

namespace App\Http\Controllers;

use App\Wages;
use App\Labor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $labor = Labor::all();
        return view('wages',compact('labor'));
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
        // dd($request->all());
        $wages = new Wages();
        $wages->labor_id = $request->labor;
        $wages->date = $request->date;
        $wages->amount = $request->amount;
        $wages->payment_mode = $request->payment_mode;
        $wages->site_name = $request->site_name;
        $wages->person_given = $request->person_given;
        $wages->remark = $request->remark;
        $wages->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wages  $wages
     * @return \Illuminate\Http\Response
     */
    public function show(Wages $wages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wages  $wages
     * @return \Illuminate\Http\Response
     */
    public function edit(Wages $wages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wages  $wages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wages $wages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wages  $wages
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wages $wages)
    {
        //
    }
}
