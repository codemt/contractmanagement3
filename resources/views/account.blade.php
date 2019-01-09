@extends('layouts.master')

@section('page-content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <div class="row">
                    <div class="col-sm-9">
                        <h3 class="box-title">Accounts Type</h3>
                    </div>
                    <div class="col-sm-3">
                        <button type="button" data-toggle="modal" data-target="#newCategory" class="btn btn-primary btn-block">
                            <i class="fa fa-plus-square"></i> Add New Type
                        </button>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-striped display nowrap dataTable" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1; ?>
                        @foreach($accounts as $account)
                        <tr>
                            <td>{{$count++}}</td>
                            <td>{{$account->name}}</td>
                            <td>
                                <a href="{{ route('sub_account')."/".$account->id}}" class="btn btn-success btn-flat btn-xs" title="View">
                                    <i class="fa fa-eye"></i>
                                </a>
                            <button type="button" data-toggle="modal" data-target="#{{$account->id}}" class="btn btn-primary btn-flat btn-xs">
                            <i class="fa fa-pencil"></i>
                        </button>
                        <a href="deleteAccount/{{$account->id}}">
                                <button class="btn btn-danger btn-flat btn-xs" title="Delete">
                                    <i class="fa fa-trash"></i>
                                </button></a>                                
                            </td>
                        </tr>

                        <div class="modal fade" id="{{$account->id}}" role="dialog">
    <div class="modal-dialog modal-sm">
        <form action="editAccountType/{{$account->id}}" method="post">
            {{csrf_field()}}
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-black">Update Account Category</h4>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="categoryName">Account Category Name:</label>
                        <input type="text" name="name" value="{{$account->name}}" class="form-control" id="categoryName" placeholder="Enter Category Name">
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
        </form>
    </div>
</div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="newCategory" role="dialog">
    <div class="modal-dialog modal-sm">
        <form action="addAccountType" method="post">
            {{csrf_field()}}
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-black">New Account Category</h4>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="categoryName">Account Category Name:</label>
                        <input type="text" name="name" class="form-control" id="categoryName" placeholder="Enter Category Name">
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
        </form>
    </div>
</div>

@endsection

