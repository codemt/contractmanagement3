<?php

namespace App\Http\Controllers;

use App\Expence;
use Illuminate\Http\Request;

class ExpenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $expences = Expence::where("sub_type_id",$id)
                    ->get();
        return view('view_account',compact('expences','id'));
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

        $expence = new Expence();
        $expence->expence = $request->expance;
        $expence->amount = $request->amount;
        $expence->date = $request->date;
        $expence->sub_type_id = $request->subcategory_id;
        $expence->remark = $request->remark;
        $expence->save();
  
        $id = $request->subcategory_id;
        $expences = Expence::where("sub_type_id",$request->subcategory_id)
            ->get();
        return view('view_account',compact('expences','id'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Expence  $expence
     * @return \Illuminate\Http\Response
     */
    public function show(Expence $expence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Expence  $expence
     * @return \Illuminate\Http\Response
     */
    public function edit(Expence $expence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expence  $expence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expence $expence,$id)
    {
        // dd($request->all());

        $expence = Expence::find($id);
        if($expence->amount  >  $request->amount){
            // dd($request->all());
        $expence->pending_amount = intval($expence->amount) - intval($request->amount);
        $expence->update();
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expence  $expence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expence $expence)
    {
        //
    }
}
