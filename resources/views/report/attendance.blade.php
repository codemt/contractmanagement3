@extends('layouts.master')

@section('page-content')

<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Attendance Report</h3>
                <a class="btn btn-primary btn-flat btn-sm pull-right excel" title="Add Labor">
                    <i class="fa fa-file-excel-o"></i> Export To Excel
                </a>
            </div>
            <div class="box-body">
                <div class="row">
                    <form class="form-horizontal" role="form" action="{{ route('filter_attendance') }}" method="get">
                     {{ csrf_field() }}
        
                    <div class="col-sm-3 col-xs-12">
                        <div class="form-group">
                            <label for="labor">Select Labor:</label>
                            <select class="form-control select2"  name="labor_id">
                                <option value="0">All Labors</option>
                                @foreach($labors as $key => $labors)

                          @if (isset($labor_id))

                                @if ($labor_id == $labors->id)
                                      <option selected="selected" value="{{$labors->id}}">{{$labors->first_name}} {{$labors->last_name}}</option>
                                @else
                                     <option value="{{$labors->id}}">{{$labors->first_name}} {{$labors->last_name}}</option>
                                @endif

                          @else

                                <option value="{{$labors->id}}">{{$labors->first_name}} {{$labors->last_name}}</option>
                       
                          @endif
                                
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="form-group">
                            <label for="sdate">From:</label>
                            <input type="text" name="from_date" class="form-control date" placeholder="Select Date & Month" value="<?php echo isset($fromdate)?$fromdate:"";  ?>">
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="form-group">
                            <label for="sdate">To:</label>
                            <input type="text" name="to_date" class="form-control date" placeholder="Select Date & Month" value="<?php echo isset($to_date)?$to_date:"";  ?>">
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <button class="btn btn-primary btn-block mt-30">
                            <i class="fa fa-filter"></i> Filter
                        </button>
                    </div>
                </form>
                </div>
            </div>
            <div class="box-footer">
                <table class="table table-bordered table-stripeddisplay nowrap table2excel" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Labor</th>
                            <th>Designation</th>
                            <th>Date</th>
                            <th>Site Name</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($attendances as $key => $attendance)

                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $attendance->labor->first_name ?? '' }} {{ $attendance->labor->last_name ?? ''}}</td>
                            <td>{{ $attendance->labor->designation ?? ''}}</td>
                            <td>{{ $attendance->date }} / {{ $attendance->month }} / {{ $attendance->year }}</td>
                            <td>{{ $attendance->site_name }}</td>
                            <td>{{ $attendance->attendance_status }}</td>
                        </tr>
                                
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
@push('page-script')
<script>
    $('.excel').on('click', function () {


          $(".table2excel").table2excel({


            name: "Worksheet Name",

            filename: "Attendance Report" //do not include extension

          });


    });

</script>
@endpush
