@extends('layouts.master')

@section('page-content')
<div class="row">
    <div class="col-xs-12">
        <form role="form" action="addLabor" method="post">
            {{csrf_field()}}
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Labor</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="fname">Enter First Name</label>
                                <input type="text" id="fname" name="first_name"  class="form-control" placeholder="Enter First Name">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="mname">Enter Middle Name</label>
                                <input type="text" id="mname" name="middle_name" class="form-control" placeholder="Enter Middle Name">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="lname">Enter Last Name</label>
                                <input type="text" id="lname" name="last_name"  class="form-control" placeholder="Enter Last Name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="phone">Enter Contact No.</label>
                                <input type="tel" id="phone" name="contact_no" class="form-control" id="email" placeholder="Enter Contact No.">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="alt_phone">Alterante Contact No.</label>
                                <input type="tel" id="alt_phone" name="alt_contact_no" class="form-control" placeholder="Enter Alterante Contact No.">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="email">Enter Email</label>
                                <input type="email" id="email" class="form-control" name="email" placeholder="Enter Email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="date">Enter Joining Date</label>
                                <input type="text" id="date" class="form-control date" name="joining_date" placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label for="Designation">Enter Designation</label>
                                <input type="text" name="Designation" id="Designation" class="form-control" placeholder="Enter Designation">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="Address">Enter Address</label>
                                <textarea id="Address" class="form-control" name="address" rows="5" placeholder="Enter Address"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="box box-primary collapsed-box">
                <div class="box-header with-border">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse">
                        <div class="box-tools">
                            <i class="fa fa-plus text-warning"></i>
                            <h3 class="box-title text-black">Enter Bank Details</h3>
                        </div>
                    </button>
                </div>            
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="account">Enter Account Number</label>
                                <input type="text" name="account_no" id="account" class="form-control" placeholder="Enter Account Number">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="ifsc">Enter IFSC Code</label>
                                <input type="text" id="ifsc" name="ifsc_code" class="form-control" placeholder="Enter IFSC Code">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="pan">Enter PAN Number</label>
                                <input type="text" id="pan" name="pan_no" class="form-control" placeholder="Enter PAN Number">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-paper-plane"></i> Submit Details
                </button>
            </div>  

        </form>
    </div>
</div>
@endsection

