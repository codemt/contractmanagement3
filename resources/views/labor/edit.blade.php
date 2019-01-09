@extends('layouts.master')

@section('page-content')
<div class="row">
    <div class="col-xs-12">
        <form role="form" action="/updateLabor/{{$labor->id}}" method="post">
            {{csrf_field()}}
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Labor</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="fname">Update First Name</label>
                                <input type="text" id="fname" value="{{$labor->first_name}}" name="first_name"  class="form-control" placeholder="Update First Name">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="mname">Update Middle Name</label>
                                <input type="text" id="mname" name="middle_name" value="{{$labor->middle_name}}" class="form-control" placeholder="Update Middle Name">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="lname">Update Last Name</label>
                                <input type="text" id="lname" name="last_name" value="{{$labor->last_name}}" class="form-control" placeholder="Update Last Name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="phone">Update Contact No.</label>
                                <input type="tel" id="phone" name="contact_no" value="{{$labor->contact_no}}" class="form-control" id="email" placeholder="Update Contact No.">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="alt_phone">Alterante Contact No.</label>
                                <input type="tel" value="{{$labor->alternate_contact_no}}" id="alt_phone" name="alt_contact_no" class="form-control" placeholder="Update Alterante Contact No.">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="email">Update Email</label>
                                <input type="email" value="{{$labor->email}}" name="email" id="email" class="form-control" placeholder="Update Email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="date">Update Joining Date</label>
                                <input type="text" value="{{$labor->joining_date}}" id="date" name="joining_date" class="form-control date" placeholder="Update Email">
                            </div>
                            <div class="form-group">
                                <label for="Designation">Update Designation</label>
                                <input type="text" value="{{$labor->designation}}" id="Designation" name="designation" class="form-control" placeholder="Update Designation">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="Address">Update Address</label>
                                <textarea id="Address"  class="form-control" name="address" rows="5" placeholder="Update Address">{{$labor->address}}</textarea>
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
                            <h3 class="box-title text-black">Update Bank Details</h3>
                        </div>
                    </button>
                </div>            
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="account">Update Account Number</label>
                                <input type="text" value="{{$labor->account_no}}" id="account" class="form-control" name="account_no" placeholder="Update Account Number">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="ifsc">Update IFSC Code</label>
                                <input type="text" value="{{$labor->ifsc_code}}" name="ifsc_code" id="ifsc" class="form-control" placeholder="Update IFSC Code">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="pan">Update PAN Number</label>
                                <input type="text" value="{{$labor->pan_no}}" id="pan" name="pan_no" class="form-control" placeholder="Update PAN Number">
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

