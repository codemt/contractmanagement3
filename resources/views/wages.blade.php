@extends('layouts.master')

@section('page-content')
<div class="row">
    <div class="col-xs-12">
        <form role="form" action="/wagesAdd" method="post">
            {{csrf_field()}}
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Wages</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="employee">Select Labor</label>
                                <select class="form-control select2" name="labor" id="employee">
                                    <option value="" selected disabled>-- - --</option>
                                    @foreach($labor as $data)
                                    <option value="{{$data->id}}">{{$data->first_name}} {{$data->middle_name}} {{$data->last_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="date">Select Date & Month</label>
                                <input type="text" id="date" name="date" class="form-control date" placeholder="Select Date & Month">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="enter_amount">Enter Amount</label>
                                <input type="number" min="0" id="enter_amount" name="amount" class="form-control" placeholder="Enter Amount">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="payment_mode">Payment Mode</label>
                                <select class="form-control" name="payment_mode" id="payment_mode">
                                    <option value="" selected disabled>-- - --</option>
                                    <option value="Cash">Cash</option>
                                    <option value="Cheque">Cheque</option>
                                    <option value="Net Banking">Net Banking</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="site_name">Enter Site Name</label>
                                <input type="text" id="site_name" name="site_name" class="form-control" placeholder="Enter Site Name">
                            </div>
                            <div class="form-group">
                                <label for="person_given">Person Given</label>
                                <select class="form-control" name="person_given" id="person_given">
                                    <option value="" selected disabled>-- - --</option>
                                    <option value="Piyush">Piyush</option>
                                    <option value="Sachin">Sachin</option>
                                    <option value="Sailesh">Sailesh</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="Remark">Remark</label>
                                <textarea id="Remark" name="remark" class="form-control" rows="5" placeholder="Enter Remark"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-paper-plane"></i> Submit Details
                    </button>
                </div>
            </div>  

        </form>
    </div>
</div>
@endsection

