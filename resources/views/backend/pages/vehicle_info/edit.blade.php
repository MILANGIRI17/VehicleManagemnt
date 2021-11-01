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
                                <h2>Edit Vehicle Info</h2>
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
                                    <form action="{{route('edit-vehicle-info-action')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="criteria" value="{{$vehicleInfo->id}}">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="type">Type</label>
                                                <select name="type_id" id="type_id" class="form-control">
                                                    <option value="{{$vehicleInfo->type_id}}">{{$vehicleInfo->VehicleTypeData->vehicle_type}}</option>
                                                    @foreach ($vehicleTypeData as $vehicleType)
                                                        <option value="{{$vehicleType->id}}">{{$vehicleType->vehicle_type}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="vehicle_no">Vehicle Number <a style="color:red">{{$errors->first('vehicle_no')}}</a></label>
                                                <input type="text" name="vehicle_no" id="vehicle_no" class="form-control" value="{{$vehicleInfo->vehicle_no}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="model">Model <a style="color:red">{{$errors->first('model')}}</a></label>
                                                <input type="text" name="model" id="model" class="form-control" value="{{$vehicleInfo->model}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="manufacture">Manufacture <a style="color:red">{{$errors->first('manufacture')}}</a></label>
                                                <input type="text" name="manufacture" id="manufacture" class="form-control" value="{{$vehicleInfo->manufacture_date}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="seat_capacity">Seat Capacity <a style="color:red">{{$errors->first('seat_capacity')}}</a></label>
                                                <input type="text" name="seat_capacity" id="seat_capacity" class="form-control" value="{{$vehicleInfo->seat_capacity}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="color">Color <a style="color:red">{{$errors->first('color')}}</a></label>
                                                <input type="text" name="color" id="color" class="form-control" value="{{$vehicleInfo->color}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="vehicle_option">Option</label>
                                                <select name="vehicle_option" id="vehicle_option" class="form-control">
                                                    <option value="Semi" {{$vehicleInfo->vehicle_option== 'Semi' ? 'selected' : ''}}>Semi</option>
                                                    <option value="Full" {{$vehicleInfo->vehicle_option== 'Full' ? 'selected' : ''}}>Full</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wheeler_option">Wheeler Type</label>
                                                <select name="wheeler_option" id="wheeler_option" class="form-control">
                                                    <option value="2WHD" {{$vehicleInfo->wheeler_option == '2WHD' ? 'selected' : ''}}>2WHD</option>
                                                    <option value="4WHD" {{$vehicleInfo->wheeler_option == '4WHD' ? 'selected' : ''}}>4WHD</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <button class="btn btn-success">Update Vehicle Info</button>
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
