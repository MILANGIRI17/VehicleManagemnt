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
                                <a href="{{route('add-vehicle-type')}}" class="btn-sm btn-light">Add <i class="fa fa-plus"></i></a><br>
                                <h2>Show Vehicle Type</h2>
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
                                                <th>Type</th>
                                                <th>Status</th>
                                                <th>Per KM in Pitch</th>
                                                <th>Per KM in Graveled</th>
                                                <th>Action</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($vehicleTypes as $key=>$vehicleType)
                                                <tr>
                                                    <td>{{++$key}}</td>
                                                    <td>{{$vehicleType->vehicle_type}}</td>
                                                    <td>
                                                        <form action="{{route('update-vehicleType-status')}}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="criteria" value="{{$vehicleType->id}}">
                                                        @if($vehicleType->status==1)
                                                        <button name="active" class='btn btn-primary'><i class="fa fa-check"></i></button>
                                                        @else
                                                        <button name="inactive" class='btn btn-danger'><i class="fa fa-times"></i></button>
                                                        @endif
                                                        </form>
                                                    </td>
                                                    <td>{{$vehicleType->pitch_road_cost_per_km}}</td>
                                                    <td>{{$vehicleType->graveled_road_cost_per_km}}</td>
                                                    <td>
                                                        <a href="{{route('edit-vehicle-type').'/'.$vehicleType->id}}" class="btn btn-success"><i class="fa fa-edit"></i></i></a>
                                                        <a href="{{route('delete-vehicle-type').'/'.$vehicleType->id}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
