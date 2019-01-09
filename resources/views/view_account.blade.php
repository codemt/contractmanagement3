@extends('layouts.master')

@section('page-content')

<div class="row">
    <div class="col-sm-12">
        <div class="box box-primary">
            <div class="box-header with-border">
            
                 <div class="row">
                    <div class="col-sm-9">
                        <h3 class="box-title">Expenses List</h3>
                    </div>
                    <div class="col-sm-3">
                        <a href="{{'/pay_account'."/".$id}}">
                        <button type="button"  class="btn btn-primary btn-block">
                            <i class="fa fa-plus-square"></i> Add New Expense
                        </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-striped display nowrap dataTable" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>  
                            <th>Amount</th>
                            <th>Date</th>  
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1; ?>
                        @foreach($expences as $expence)
                        <tr>
                            <td>{{$count++}}</td>
                            <td>{{$expence->expence}}</td>
                            <td>{{$expence->amount}}</td>
                            <td>{{$expence->date}}</td>
                        </tr>

<div class="modal fade" id="{{$expence->id}}" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-black">Pay</h4>
            </div>
            <form action="/Payamount/{{$expence->id}}" method="post">
                {{csrf_field()}}
                <div class="modal-body">
                    <h2 class="ma-0">Name: {{$expence->expence}}</h2>
                    <hr/>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="amount">Enter Amount:</label>
                                <input type="number" min="0" name="amount" class="form-control" id="amount" placeholder="Enter Amount">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="text" id="date" name="date" class="form-control date" placeholder="Enter Email">
                            </div>
                        </div>                        
                    </div>
                    <div class="form-group">
                        <label for="remark">Remark:</label>
                        <textarea for="remark" class="form-control" name="remark" placeholder="Enter Remark"></textarea>
                    </div>                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-paper-plane"></i> Submit
                    </button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"> 
                        <i class="fa fa-times"></i> Close
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection

