@extends('backend.master.master')
@section('content')

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Edit Expenses Info</h2>
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
                                    <form action="{{route('edit-expenses-info-action')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="criteria" value="{{$expensesInfo->id}}">
                                        <div class="col-md-6 form-group">
                                            <label for="fuel_cost">Fuel Cost
                                                <a style="color: red;">{{$errors->first('fuel_cost')}}</a>
                                            </label>
                                            <input type="text" name="fuel_cost" id="fuel_cost" value="{{$expensesInfo->fuel_cost}}" class="form-control">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="driver_allowance">Driver Allowance
                                                <a style="color: red;">{{$errors->first('driver_allowance')}}</a>
                                            </label>
                                            <input type="text" name="driver_allowance" id="driver_allowance" value="{{$expensesInfo->driver_allowance}}" class="form-control">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="permits_fees">Permits Fees
                                                <a style="color: red;">{{$errors->first('permits_fees')}}</a>
                                            </label>
                                            <input type="text" name="permits_fees" id="permits_fees" value="{{$expensesInfo->permits_fees}}" class="form-control">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="commission">Commission
                                                <a style="color: red;">{{$errors->first('commission')}}</a>
                                            </label>
                                            <input type="text" name="commission" id="commission" value="{{$expensesInfo->commission}}" class="form-control">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <button class="btn btn-success">Update Expenses Info</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->


@endsection
