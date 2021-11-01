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
                                <h2>Edit Vendor Details</h2>
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
                                    <form action="{{route('edit-vendor-info-action')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="criteria" value="{{$vendorInfo->id}}">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">
                                                    Name <a style="color: red;">{{$errors->first('name')}}</a>
                                                </label>
                                                <input type="text" name="name" id="phone" value="{{$vendorInfo->name}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone">
                                                    Phone <a style="color: red;">{{$errors->first('phone')}}</a>
                                                </label>
                                                <input type="text" name="phone" id="phone" value="{{$vendorInfo->phone}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">
                                                    Email <a style="color: red;">{{$errors->first('email')}}</a>
                                                </label>
                                                <input type="text" name="email" id="email" value="{{$vendorInfo->email}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="bank_info">
                                                    Bank Information <a style="color: red;">{{$errors->first('bank_info')}}</a>
                                                </label>
                                                <input type="text" name="bank_info" id="bank_info" value="{{$vendorInfo->bank_info}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <button class="btn btn-success">Update Vendor Info</button>
                                            </div>
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
