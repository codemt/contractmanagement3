<?php

namespace App\Http\Controllers;

use App\Labor;
use App\AccountPayment;
use Illuminate\Http\Request;

class AccountPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $labor = Labor::all();
        return view('pay_account',compact('labor','id'));
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
     * @param  \App\AccountPayment  $accountPayment
     * @return \Illuminate\Http\Response
     */
    public function show(AccountPayment $accountPayment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AccountPayment  $accountPayment
     * @return \Illuminate\Http\Response
     */
    public function edit(AccountPayment $accountPayment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AccountPayment  $accountPayment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AccountPayment $accountPayment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AccountPayment  $accountPayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(AccountPayment $accountPayment)
    {
        //
    }
}
