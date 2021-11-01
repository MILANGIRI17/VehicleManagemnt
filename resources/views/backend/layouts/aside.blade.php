@section('aside')
<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="" class="site_title"><i class="fa fa-dashboard"></i> <span>Vehicle Booking</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{url('uploads/users/'.Auth::user()->image)}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{Auth::user()->username}}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li>
                        <a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="{{route('user')}}"><i class="fa fa-user"></i>User</span></a>
                    </li>
                    <li>
                        <a href="{{route('fetch-vehicle-type')}}"><i class="fa fa-user"></i>Calculate</span></a>
                    </li>
                    <li>
                        <a><i class="fa fa-car"></i>Vehicle Type<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('vehicle_type')}}">Show Vehicle Types</a></li>
                            <li><a href="{{route('add-vehicle-type')}}">Add Vehicle Types</a></li>
                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-info"></i>Vehicle Info<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('vehicle_info')}}">Show Vehicle Info</a></li>
                            <li><a href="{{route('add-vehicle-info')}}">Add Vehicle Info</a></li>
                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-user"></i>Driver Info<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('driver_info')}}">Show Driver Info</a></li>
                            <li><a href="{{route('add-driver-info')}}">Add Driver Info</a></li>
                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-industry"></i>Vendor Info<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('vendor_info')}}">Show Vendor Info</a></li>
                            <li><a href="{{route('add-vendor-info')}}">Add Vendor Info</a></li>
                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-rupee"></i>Expenses Info<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('expenses_info')}}">Show Expenses Info</a></li>
                            <li><a href="{{route('add-expenses-info')}}">Add Expenses Info</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>
@endsection
