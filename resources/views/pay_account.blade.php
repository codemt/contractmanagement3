@extends('layouts.master')

@section('page-content')
<div class="row">
    <div class="col-xs-12">
        <form role="form" action="/expenceAdd" method="post">
            {{csrf_field()}}
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Expences</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                                <input type="hidden" name="subcategory_id" class="form-control" placeholder="Enter Expence Name" value="{{$id}}">                        
                       <div class="col-sm-3">
                            <div class="form-group">

                                <label for="enter_amount">Enter Expence Name</label>
                                <input type="text" id="expence" name="expance" class="form-control" placeholder="Enter Expence Name">
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
                                <label for="date">Select Date & Month</label>
                                <input type="text" id="date" name="date" class="form-control date" placeholder="Select Date & Month">
                            </div>
                        </div>
                                                <div class="col-sm-3">
                            <div class="form-group">
                                <label for="enter_amount">Enter Remark</label>
                                <input type="text" min="0" id="enter_remark" name="remark" class="form-control" placeholder="Enter Remark">
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

