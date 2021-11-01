@extends('backend.master.master')
@section('content')
        <div class="right_col" role="main">
            <div class="">
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <a href="{{route('add-expenses-info')}}" class="btn-sm btn-light">Add <i class="fa fa-plus"></i></a><br>
                                <h2>Show Expenses Information</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="col-md-12">
                                    @include('backend.layouts.message')
                                    <table class="table table-striped" id="table_id">
                                        <thead>
                                            <th>S.N</th>
                                            <th>Fuel Cost</th>
                                            <th>Driver Allowance</th>
                                            <th>Permits Fees</th>
                                            <th>Commission</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($expensesInfos as $key=>$expensesInfo)
                                                <tr>
                                                    <td>{{++$key}}</td>
                                                    <td>{{$expensesInfo->fuel_cost}}</td>
                                                    <td>{{$expensesInfo->driver_allowance}}</td>
                                                    <td>{{$expensesInfo->permits_fees}}</td>
                                                    <td>{{$expensesInfo->commission}}</td>
                                                    <td>
                                                        <a href="{{route('edit-expenses-info').'/'.$expensesInfo->id}}" class="btn-sm btn-success"><i class="fa fa-edit"></i></a>
                                                        <a href="{{route('delete-expenses-info').'/'.$expensesInfo->id}}" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
