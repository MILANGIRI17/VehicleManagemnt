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
                                <h2>Add Driver Information</h2>
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
                                        <form action="{{route('add-driver-info')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="driver_name">Driver Name 
                                                        <a style="color: red">{{$errors->first('driver_name')}}</a>
                                                    </label>
                                                    <input type="text" name="driver_name" id="driver_name" value="{{old('driver_name')}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phone">Phone 
                                                        <a style="color: red">{{$errors->first('phone')}}</a>
                                                    </label>
                                                    <input type="text" name="phone" id="phone" value="{{old('phone')}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Email 
                                                        <a style="color: red">{{$errors->first('email')}}</a>
                                                    </label>
                                                    <input type="text" name="email" id="email" value="{{old('email')}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="facebook">Facebook 
                                                        <a style="color: red">{{$errors->first('facebook')}}</a>
                                                    </label>
                                                    <input type="text" name="facebook" id="facebook" value="{{old('facebook')}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="whatsapp">Whatsapp 
                                                        <a style="color: red">{{$errors->first('whatsapp')}}</a>
                                                    </label>
                                                    <input type="text" name="whatsapp" id="whatsapp" value="{{old('whatsapp')}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="citizenship_no">CitizenShip Number 
                                                        <a style="color: red">{{$errors->first('citizenship_no')}}</a>
                                                    </label>
                                                    <input type="text" name="citizenship_no" id="citizenship_no" value="{{old('citizenship_no')}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="license_number">License Number 
                                                        <a style="color: red">{{$errors->first('license_number')}}</a>
                                                    </label>
                                                    <input type="text" name="license_number" id="license_number" value="{{old('license_number')}}"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="image">Image 
                                                        <a style="color: red">{{$errors->first('image')}}</a>
                                                    </label>
                                                    <br><input type="file" name="image" id="image" class="btn">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <button class="btn btn-success">Add Driver Info</button>
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
        </div>
        <!-- /page content -->


@endsection
