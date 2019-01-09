@extends('layouts.master')

@section('page-content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <div class="row">
                    <div class="col-sm-9">
                        <h3 class="box-title">Category</h3>
                    </div>
                    <div class="col-sm-3">
                        <button type="button" data-toggle="modal" data-target="#newCategory" class="btn btn-primary btn-block">
                            <i class="fa fa-plus-square"></i> Add New Category
                        </button>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="month">Select Category</label>
                            <select class="form-control" id="month">
                                <option value="" selected disabled>-- - --</option>
                                <option>December</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="employee">Select Employee</label>
                            <select id="select2" class="form-control"  id="employee">
                                <option value="" selected disabled>-- - --</option>
                                <option value="">John Doe</option>
                                <option value="">Jane Doe</option>
                            </select>
                        </div>
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
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Present</th>
                            <th>Absent</th>
                            <th>Site Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <div class="cntr">
                                    <input class="hidden cbx1" id="s"
                                    type="radio" name="s" value="Present" />
                                    <label class="cbx" for="s"></label>
                                </div>
                            </td>
                            <td>
                                <div class="cntr">
                                    <input class="hidden cbx1" id="s1"
                                    type="radio" name="s" value="Present" checked="" />
                                    <label class="cbx" for="s1"></label>
                                </div>
                            </td>
                            <td>
                                <input type="text" name="" class="form-control" placeholder="Site Name">
                            </td>
                            <td>
                                <button class="btn btn-primary">
                                    <i class="fa fa-check-square"></i> Save
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Present</th>
                            <th>Absent</th>
                            <th>Site</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="newCategory" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-black">New Category</h4>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="categoryName">Category Name:</label>
                        <input type="text" class="form-control" id="categoryName" placeholder="Enter Category Name">
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

@endsection

