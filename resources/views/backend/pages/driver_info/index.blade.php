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
                                <a href="{{route('add-driver-info')}}" class="btn-sm btn-light">Add <i class="fa fa-plus"></i></a><br>
                                <h2>Show Driver Information</h2>
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
                                    <table class="table table-striped" id="table_id">
                                        <thead>
                                            <th>S.N</th>
                                            <th>Driver Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Facebook</th>
                                            <th>Whatsapp</th>
                                            <th>Citizenship Number</th>
                                            <th>License Number</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($driverInfos as $key=>$driverInfo)
                                                <tr>
                                                    <td>{{++$key}}</td>
                                                    <td>{{$driverInfo->driver_name}}</td>
                                                    <td>{{$driverInfo->phone}}</td>
                                                    <td>{{$driverInfo->email}}</td>
                                                    <td>{{$driverInfo->facebook}}</td>
                                                    <td>{{$driverInfo->whatsapp}}</td>
                                                    <td>{{$driverInfo->citizenship_no}}</td>
                                                    <td>{{$driverInfo->license_number}}</td>
                                                    <td>
                                                        <div class="image-content">
                                                            <a href="{{url('uploads/driver/'.$driverInfo->image)}}" target="_blank">
                                                                <img src="{{url('uploads/driver/'.$driverInfo->image)}}" width="50" height="50" alt="">
                                                            </a>
                                                        </div>
                                                    </td>
                                                        {{-- <div class="img-container">
                                                            <img src="{{url('uploads/driver/'.$driverInfo->image)}}" width="60" height="60" alt=""></td>
                                                        </div> --}}
                                                        
                                                    <td style="width:10%">
                                                        <a href="{{route('edit-driver-info').'/'.$driverInfo->id}}" class="btn-sm btn-success"><i class="fa fa-edit"></i></a>
                                                        <a href="{{route('delete-driver-info').'/'.$driverInfo->id}}" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
        <!-- /page content -->


@endsection
