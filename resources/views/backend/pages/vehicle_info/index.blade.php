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
                                <a href="{{route('add-vehicle-info')}}" class="btn-sm btn-light">Add <i class="fa fa-plus"></i></a><br>
                                <h2>Show Vehicle Information</h2>
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
                                                <th>Vehicle Number</th>
                                                <th>Type</th>
                                                <th>Model</th>
                                                <th>Manufacture</th>
                                                <th>Seat Capacity</th>
                                                <th>Color</th>
                                                <th>Option</th>
                                                <th>Wheeler Type</th>
                                                <th>Action</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($vehicleInfos as $key=> $vehicleInfo)
                                                <tr>
                                                    <td>{{++$key}}</td>
                                                    <td>{{$vehicleInfo->vehicle_no}}</td>
                                                    <td>{{$vehicleInfo->VehicleTypeData->vehicle_type}}</td>
                                                    <td>{{$vehicleInfo->model}}</td>
                                                    <td>{{$vehicleInfo->manufacture_date}}</td>
                                                    <td>{{$vehicleInfo->seat_capacity}}</td>
                                                    <td>{{$vehicleInfo->color}}</td>
                                                    <td>{{$vehicleInfo->vehicle_option}}</td>
                                                    <td>{{$vehicleInfo->wheeler_option}}</td>
                                                    <td style="width:10%">
                                                        <a href="{{route('edit-vehicle-info').'/'.$vehicleInfo->id}}" class="btn-sm btn-success"><i class="fa fa-edit"></i></a>
                                                        <a href="{{route('delete-vehicle-info').'/'.$vehicleInfo->id}}" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
@endsection
