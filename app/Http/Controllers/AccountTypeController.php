<?php

namespace App\Http\Controllers;

use App\AccountType;
use App\AccountSubType;
use Illuminate\Http\Request;

class AccountTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = AccountType::all();
        return view('account',compact('accounts'));
    }

    public function account_sub_type($id)
    {
        $accounts = AccountSubType::where('account_type_id',$id)->get();
      
        return view('account_subtype',compact('accounts','id'));
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
        $account = new AccountType();
        $account->name = $request->name;
        $account->save();

        return redirect()->back();
    }

    public function storesubtype(Request $request)
    {
        // dd($request->all());
        $account = new AccountSubType();
        $account->name = $request->name;
        $account->account_type_id = $request->account_type_id;
        $account->save();

        return redirect()->back();
    }

    public function editsubtype(Request $request)
    {

        $account = AccountSubType::find($request->account_sub_type_id);
        $account->name = $request->name;
        $account->update();

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AccountType  $accountType
     * @return \Illuminate\Http\Response
     */
    public function show(AccountType $accountType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AccountType  $accountType
     * @return \Illuminate\Http\Response
     */
    public function edit(AccountType $accountType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AccountType  $accountType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AccountType $accountType,$id)
    {
         $account = AccountType::find($id);
        $account->name = $request->name;
        $account->update();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AccountType  $accountType
     * @return \Illuminate\Http\Response
     */
    public function destroy(AccountType $accountType,$id)
    {
        $account = AccountType::find($id);
        $account->delete();
        return redirect()->back();
    }

    public function destroysub($id)
    {
        $account = AccountSubType::find($id);
        $account->delete();
        return redirect()->back();
    }
}
