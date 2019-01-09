@extends('layouts.master')

@section('page-content')

<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">List of Labors</h3>
                <a href="{{ route('add_labor') }}" class="btn btn-primary btn-flat btn-sm pull-right" title="Add Labor">
                    <i class="fa fa-user-plus"></i> Add New Labor
                </a>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-stripeddisplay nowrap dataTable" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Labor</th>
                            <th>Designation</th>
                            <th>Contact No.</th>
                            <th>Joining Date</th>
                            <th>Account Number</th>
                            <th>IFSC Code</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1; ?>
                        @foreach($labors as $labor)
                        <tr>
                            <td>{{$count++}}</td>
                            <td>{{$labor->first_name}} {{$labor->middle_name}} {{$labor->last_name}}</td>
                            <td>{{$labor->designation}}</td>
                            <td>{{$labor->contact_no}}</td>
                            <td>{{date('d  M,Y',strtotime($labor->joining_date))}}</td>
                            <td>{{$labor->account_no ?? 'NA'}}</td>
                            <td>{{$labor->ifsc_code ?? 'NA'}}</td>
                            <td>
                                <a href="editLabor/{{$labor->id}}" class="btn btn-primary btn-flat btn-xs" title="Edit">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="deleteLabor/{{$labor->id}}" class="btn btn-danger btn-flat btn-xs" title="Edit">
                                    <i class="fa fa-trash"></i>
                                </a>

                            
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

