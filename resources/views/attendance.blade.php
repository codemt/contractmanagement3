@extends('layouts.master')

@section('page-content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Attendance</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-4">
                        <div class="form-group">
                            <label for="labor">Select Labor</label>
                        <select id="labor" class="form-control select2">

                            @foreach($labors as $key => $labors)

                                <option value="{{$labors->id}}">{{$labors->first_name}} {{$labors->last_name}}</option>
                                
                            @endforeach

                        </select>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <h2 class="mt-30">Attendance: <span class="text-warning"><span id="present"></span> / <span id="total"></span></span> </h2>
                    </div>
                    <div class="col-xs-3">
                         <input type="text" id="getmonth" name="date" class="form-control month-picker" placeholder="Select Date & Month">
                    </div>
                    <div class="col-xs-1">
                        <button class="btn btn-primary" id="getattendance">
                            <i class="fa fa-check-square"></i> Get
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="box box-primary">
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Present</th>
                                <th>Absent</th>
                                <th>Site Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="add_date_one">
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="box box-primary">
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Present</th>
                                <th>Absent</th>
                                <th>Site</th>
                            </tr>
                        </thead>
                        <tbody class="add_date_two">
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('page-script')
<script>

 var month,year,labor_id;


function daysInMonth (month, year) {
    return new Date(year, month, 0).getDate();
}

$(document).delegate(".save_attendance", "click", function() {
    var attendance = $(this).parent().parent().find("input:radio:checked").val();
    var date = $(this).parent().parent().find(".date_string").text();
    var site_name = $(this).parent().parent().find(".site_name").val();   

    if(attendance == undefined)
    {
	    alert("Please enter proper Attendance remark");

	    return;   	
    }

    if(site_name == '')
    {
	    alert("Please enter proper Site Name");

	    return;   	
    }
	
		$.ajax({
	  url: "{{ route('set_attendance') }}",
	  method: "GET",
	  data:{
		  'labor_id' : labor_id,
  		  'date' : date,
  		  'month' : month,
  		  'year' : year,
  		  'site_name' : site_name,
  		  'attendance_status' : attendance
		},
	  cache: false,
	  success: function(html)
	  {

        if(attendance == "Present")
        {
	  	 	 $("#present").text(parseInt($("#present").text(), 10)+1);
        }
        else
        {
    	  	 $("#present").text(parseInt($("#present").text(), 10)-1);	
        }

	  }

	});

}); 

$(document).on("click","#getattendance", function(){

    $(".add_date_one").html("");
    $(".add_date_two").html("");
    var date_string = $("#getmonth").val();
    var date_no = daysInMonth(date_string.substring(0, date_string.indexOf("-")), date_string.substring(date_string.indexOf("-")+1));

    month = date_string.substring(0, date_string.indexOf("-"));
    year = date_string.substring(date_string.indexOf("-")+1);
    labor_id = $("#labor").val();

     for(var i=0;i<date_no;i++)
     {

        if(i<parseInt((date_no/2), 10))
        {
          $(".add_date_one").append(`
                <tr>
                    <td class="date_string">`+(i+1)+`</td>
                    <td>
                        <div class="cntr">
                            <input class="hidden cbx1" 
                            type="radio" name="s`+i+`" id="sid`+i+`" value="Present" />
                            <label class="cbx" for="sid`+i+`"></label>
                        </div>
                    </td>
                    <td>
                        <div class="cntr">
                            <input class="hidden cbx1" 
                            type="radio" name="s`+i+`" id="sid1`+i+`" value="Absent" />
                            <label class="cbx" for="sid1`+i+`"></label>
                        </div>
                    </td>
                    <td>
                        <input type="text" name="" class="form-control site_name" id="site`+i+`" placeholder="Site Name">
                    </td>
                    <td>
                        <button class="btn btn-primary save_attendance">
                            <i class="fa fa-check-square"></i> Save
                        </button>
                    </td>
                </tr>
            `)
        }
        else
        {
           $(".add_date_two").append(`
                <tr>
                    <td class="date_string">`+(i+1)+`</td>
                    <td>
                        <div class="cntr">
                            <input class="hidden cbx1"
                            type="radio" name="s`+i+`" id="sid2`+i+`" value="Present" />
                            <label class="cbx" for="sid2`+i+`"></label>
                        </div>
                    </td>
                    <td>
                        <div class="cntr">
                            <input class="hidden cbx1"
                            type="radio" name="s`+i+`" value="Absent" id="sid3`+i+`" />
                            <label class="cbx" for="sid3`+i+`"></label>
                        </div>
                    </td>
                    <td>
                        <input type="text" name="" class="form-control site_name" id="site`+i+`" placeholder="Site Name">
                    </td>
                    <td>
                        <button class="btn btn-primary save_attendance">
                            <i class="fa fa-check-square"></i> Save
                        </button>
                    </td>
                </tr>
            `)   
        }


     }

     var count = 0;

     $.ajax({
	  url: "{{ route('get_attendance') }}",
	  method: "GET",
	  data:{
		  'labor_id' : labor_id,
  		  'month' : month,
  		  'year' : year,
		},
	  cache: false,
	  success: function(html)
	  {

	  	$.each(html.data, function (key, val) {

			$("input[name=s"+(parseInt(val['date'], 10)-1)+"][value='"+val['attendance_status']+"']").prop("checked",true);
	  		
	  		$("#site"+(parseInt(val['date'], 10)-1)).val(val['site_name']);

			if(val['attendance_status'] == "Present")
			{
		  		count++;
			}

	  	});

     $("#present").text(count);
     $("#total").text(date_no);

	  }

	});



});



</script>
@endpush