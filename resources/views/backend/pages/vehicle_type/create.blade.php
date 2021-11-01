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
                                <h2>Add Vehicle Type</h2>
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
                                <div class="col-md-12">
                                    <form action="{{route('add-vehicle-type')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="title">Vehicle Type:
                                                <a style="color: red;">{{$errors->first('vehicle_type')}}</a>
                                            </label>
                                            <input type="text" name="vehicle_type" id="vehicle_type" value="{{old('vehicle_type')}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="pitch_road_cost_per_km">Pitch Road Per KM Cost:
                                                <a style="color: red;">{{$errors->first('pitch_road_cost_per_km')}}</a>
                                            </label>
                                            <input type="text" name="pitch_road_cost_per_km" id="pitch_road_cost_per_km" value="{{old('pitch_road_cost_per_km')}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="graveled_road_cost_per_km">Graveled Road Per KM Cost:
                                                <a style="color: red;">{{$errors->first('graveled_road_cost_per_km')}}</a>
                                            </label>
                                            <input type="text" name="graveled_road_cost_per_km" id="graveled_road_cost_per_km" value="{{old('graveled_road_cost_per_km')}}" class="form-control">
                                        </div>                          
                                        <div class="form-group">
                                            <button class="btn btn-success">Add Vehicle Type</button>
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
