<?php

namespace App\Http\Controllers;

use App\Labor;
use App\Attendance;
use App\Wages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaborController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $labors = Labor::all();
        return view('labor.index',compact('labors'));
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
        $labor = new Labor();
        $labor->first_name = $request->first_name;
        $labor->middle_name = $request->middle_name;
        $labor->last_name = $request->last_name;
        $labor->contact_no = $request->contact_no;
        $labor->alternate_contact_no = $request->alt_contact_no;
        $labor->email = $request->email;
        $labor->joining_date = $request->joining_date;
        $labor->designation = $request->Designation;
        $labor->address = $request->address;
        $labor->account_no = $request->account_no ;
        $labor->ifsc_code = $request->ifsc_code;
        $labor->pan_no = $request->pan_no;
        $labor->save();

        return redirect('All_Labor');

    }

    public function set_attendance(Request $request)
    {
        Attendance::updateOrCreate(

            [
              'labor_id' => $request->input('labor_id'),
              'date' => $request->input('date'),
              'month' => $request->input('month'),
              'year' => $request->input('year')
            ]
            ,[
             'site_name' => $request->input('site_name'),
             'attendance_status' => $request->input('attendance_status')]
        );

        return ['data' => true];

    }

    public function get_attendance(Request $request)
    {

       $attendance = DB::table('attendance')
        ->select('attendance.*')
        ->where([
        ['attendance.labor_id', '=', $request->input('labor_id')],
        ['attendance.month', '=', $request->input('month')],
        ['attendance.year', '=', $request->input('year')]
        ])
        ->get();

      return ['data' => $attendance];

    }

    public function gotoattendance()
    {
        $labors = Labor::all();
        return view('attendance',compact('labors'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Labor  $labor
     * @return \Illuminate\Http\Response
     */
    public function show(Labor $labor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Labor  $labor
     * @return \Illuminate\Http\Response
     */
    public function edit(Labor $labor, $id)
    {
        $labor = Labor::find($id);
        // dd($labor);
        return view('labor.edit',compact('labor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Labor  $labor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Labor $labor,$id)
    {
        // dd($request->all());
        $labor = Labor::find($id);
         $labor->first_name = $request->first_name;
        $labor->middle_name = $request->middle_name;
        $labor->last_name = $request->last_name;
        $labor->contact_no = $request->contact_no;
        $labor->alternate_contact_no = $request->alt_contact_no;
        $labor->email = $request->email;
        $labor->joining_date = $request->joining_date;
        if($request->designation != "")
        {
            $labor->designation = $request->designation;
        }
        $labor->address = $request->address;
        $labor->account_no = $request->account_no ;
        $labor->ifsc_code = $request->ifsc_code;
        $labor->pan_no = $request->pan_no;
        $labor->update();

        return redirect('All_Labor');

    }

    public function wages_report(Request $request)
    {

       $paydate_raw = DB::raw("STR_TO_DATE(`date`, '%d/%m/%Y')");

       $wages = Wages::orderBy($paydate_raw, 'DESC')
                       ->get();


       $labors = Labor::all();

       return view('report.wages',compact('wages','labors'));

    }

        public function filter_wages(Request $request)
    {

        $start_raw = DB::raw("STR_TO_DATE(?, '%d/%m/%Y')");
        $end_raw = DB::raw("STR_TO_DATE(?, '%d/%m/%Y')");

        $paydate_raw = DB::raw("STR_TO_DATE(`date`, '%d/%m/%Y')");

        if($request->labor_id != '0')
        {
            $wages = Wages::where([
                                  [$paydate_raw, '>=', $start_raw],
                                  [$paydate_raw, '<=', $end_raw],
                                  ['labor_id', '=', '?']
                              ])
                              ->orderBy($paydate_raw, 'ASC')
                              ->setBindings([$request->from_date, $request->to_date,$request->labor_id])
                              ->get();
        }
        else
        {
            $wages = Wages::where([
                              [$paydate_raw, '>=', $start_raw],
                              [$paydate_raw, '<=', $end_raw],
                            ])
                              ->orderBy($paydate_raw, 'ASC')
                              ->setBindings([$request->from_date, $request->to_date])
                              ->get();
        }

        $labors = Labor::all();
        $fromdate = $request->from_date;
        $to_date = $request->to_date;
        $labor_id = $request->labor_id;
        return view('report.wages',compact('wages','labors','fromdate','to_date','labor_id'));

    }

        public function attendance_report(Request $request)
    {

       $paydate_raw = DB::raw("STR_TO_DATE(CONCAT(`date`, '/', `month`,'/', `year`), '%d/%m/%Y')");

       $attendances = Attendance::with('labor')->orderBy($paydate_raw, 'DESC')
                             ->get();

       $labors = Labor::all();

       return view('report.attendance',compact('attendances','labors'));

    }

        public function filter_attendance(Request $request)
    {

        $start_raw = DB::raw("STR_TO_DATE(?, '%d/%m/%Y')");
        $end_raw = DB::raw("STR_TO_DATE(?, '%d/%m/%Y')");

        $paydate_raw = DB::raw("STR_TO_DATE(CONCAT(`date`, '/', `month`,'/', `year`), '%d/%m/%Y')");

        if($request->labor_id != '0')
        {
            $attendances = Attendance::where([
                                  [$paydate_raw, '>=', $start_raw],
                                  [$paydate_raw, '<=', $end_raw],
                                  ['labor_id', '=', '?']
                              ])
                              ->orderBy($paydate_raw, 'ASC')
                              ->setBindings([$request->from_date, $request->to_date,$request->labor_id])
                              ->get();
        }
        else
        {
            $attendances = Attendance::where([
                              [$paydate_raw, '>=', $start_raw],
                              [$paydate_raw, '<=', $end_raw],
                            ])
                              ->orderBy($paydate_raw, 'ASC')
                              ->setBindings([$request->from_date, $request->to_date])
                              ->get();
        }

        $labors = Labor::all();
        $fromdate = $request->from_date;
        $to_date = $request->to_date;
        $labor_id = $request->labor_id;
        return view('report.attendance',compact('attendances','labors','fromdate','to_date','labor_id'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Labor  $labor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Labor $labor,$id)
    {
        $labor = Labor::find($id);
        $demo=DB::table('attendance')->where('labor_id',$id)->delete();
        $demo=DB::table('wages')->where('labor_id',$id)->delete();
        $labor->delete();
        return redirect()->back();
    }
}
