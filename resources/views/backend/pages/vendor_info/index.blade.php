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
                                <a href="{{route('add-vendor-info')}}" class="btn-sm btn-light">Add <i class="fa fa-plus"></i></a><br>
                                <h2>Show Vendor Details</h2>
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
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-striped" id="table_id">
                                            <thead>
                                                <th>S.N</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Bank Information</th>
                                                <th>Action</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($vendorInfos as $key=>$vendorInfo)
                                                <tr>
                                                    <td>{{++$key}}</td>
                                                    <td>{{$vendorInfo->name}}</td>
                                                    <td>{{$vendorInfo->phone}}</td>
                                                    <td>{{$vendorInfo->email}}</td>
                                                    <td>{{$vendorInfo->bank_info}}</td>
                                                    <td>
                                                        <a href="{{route('edit-vendor-info').'/'.$vendorInfo->id}}" class="btn-sm btn-success"><i class="fa fa-edit"></i></a>
                                                        <a href="{{route('delete-vendor-info').'/'.$vendorInfo->id}}" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
        </div>
        <!-- /page content -->


@endsection
