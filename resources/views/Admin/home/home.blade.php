@extends('Admin.master')

@section('title','admin-dashboard')
@section('css')
    @parent
    <style>
        th.dash-head {
            background-color: #ECF0F1;
            color: #000;
            padding: 1px;
            font-family: -webkit-pictograph;
        }
    </style>

    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="{{asset('/')}}assets/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset('/')}}assets/css/fonts.googleapis.com.css"/>
    <link rel="stylesheet" href="{{asset('/')}}assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style"/>
    <link rel="stylesheet" href="{{asset('/')}}assets/css/ace-skins.min.css"/>
    <link rel="stylesheet" href="{{asset('/')}}assets/css/ace-rtl.min.css"/>
    <script src="{{asset('/')}}assets/js/ace-extra.min.js"></script>
@endsection

@section('body')
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="{{route('dashboard')}}">Home</a>
                </li>
                <li class="active">Dashboard</li>
            </ul><!-- /.breadcrumb -->


            <div class="nav-search" id="nav-search">
                <form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input"
                                           id="searchInput" autocomplete="off"/>
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
                </form>
            </div>
            <!-- /.nav-search -->
        </div>

    </div>



    <div class="col-md-6 col-lg-3" style=" background: linear-gradient(to bottom, #ccccff 0%, #99ffcc 100%); margin-top: 30px; margin-left: 50px ;border-radius: 5px ; ">
        <div class="widget-small primary coloured-icon">
            <i class="icon fa fa-shopping-cart fa-2x"></i>
            <div class="info" style="padding-top: 5px !important; padding-left: 5px !important;">
                <h4 style="margin-top: 0 !important; padding-top: 0!important;">TODAY Sale </h4>
                <p style="padding-top: 0 !important; font-size: 13px !important;">
                    <b>Sale:{{ \App\Models\SaleOrder::whereDate('xdatecuspo', \Carbon\Carbon::today())->sum('xtotamt') }}
                        TK</b></p>
                <p style="padding-top: 0 !important; margin-top: -5px !important; font-size: 13px !important;"><b>Purchase:0
                        TK</b></p>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-3" style="background: linear-gradient(to bottom, #ffffcc 0%, #ccccff 100%); margin-top: 30px; margin-left: 50px ;border-radius: 5px ; ">
        <div class="widget-small primary coloured-icon">
            <i class="ace-icon fa fa-undo bigger-230"></i>
            <div class="info" style="padding-top: 5px !important; padding-left: 5px !important;">
                <h4 style="margin-top: 0 !important; padding-top: 0!important;">TODAY Return </h4>
                <p style="padding-top: 0 !important; font-size: 13px !important;">
                    <b>Return:{{ \App\Models\ProductReturnDetails::whereDate('zutime', \Carbon\Carbon::today())->sum('xlineamt') }}
                        TK</b></p>
                <p style="padding-top: 0 !important; margin-top: -5px !important; font-size: 13px !important;"><b>Purchase:0
                        TK</b></p>
            </div>
        </div>
    </div>
{{--    @php--}}

{{--        $today = now()->format('Y-m-d');--}}
{{--        $firstDayOfMonth = now()->firstOfMonth()->format('Y-m-d');--}}
{{--        $sales = \App\Models\SaleOrder::where('xdatecuspo', '>=', $firstDayOfMonth)->get();--}}
{{--        $today = now()->format('Y-m-d');--}}
{{--        $firstDayOfMonth = now()->firstOfMonth()->format('Y-m-d');--}}
{{--        $totalSaleAmount = \App\Models\SaleOrder::where('xdatecuspo', '>=', $firstDayOfMonth)->sum('xtotamt');--}}


{{--    @endphp--}}

{{--    <div class="col-md-6 col-lg-3" style="background-color: palevioletred; margin-top: 30px; margin-left: 50px ;border-radius: 5px ;  ">--}}
{{--        <div class="widget-small primary coloured-icon">--}}
{{--            <i class="icon fa fa-shopping-cart fa-2x"></i>--}}
{{--            <div class="info" style="padding-top: 5px !important; padding-left: 5px !important;">--}}
{{--                <h4 style="margin-top: 0 !important; padding-top: 0!important;">MONTH</h4>--}}
{{--                <p style="padding-top: 0 !important; font-size: 13px !important;">--}}
{{--                    <b>Sale:{{ $totalSaleAmount}} TK</b>--}}
{{--                </p>--}}
{{--                <p style="padding-top: 0 !important; margin-top: -5px !important; font-size: 13px !important;"><b>Purchase:--}}
{{--                        0 TK</b></p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


{{-- @php--}}
{{--     $today = now()->format('Y-m-d');--}}
{{--    $firstDayOfYear = now()->firstOfYear()->format('Y-m-d');--}}


{{--    $salesYearly = \App\Models\SaleOrder::where('xdatecuspo', '>=', $firstDayOfYear)->get();--}}

{{--    $totalSaleAmountYearly = \App\Models\SaleOrder::where('xdatecuspo', '>=', $firstDayOfYear)->sum('xtotamt');--}}

{{-- @endphp--}}

{{--    <div class="col-md-6 col-lg-3" style="background-color: #EB5406; margin-top: 30px; margin-left: 50px ; border-radius: 5px ; box-shadow: grey  ">--}}
{{--        <div class="widget-small primary coloured-icon">--}}
{{--            <i class="icon fa fa-shopping-cart fa-2x"></i>--}}
{{--            <div class="info" style="padding-top: 5px !important; padding-left: 5px !important;">--}}
{{--                <h4 style="margin-top: 0 !important; padding-top: 0!important;">YEAR</h4>--}}
{{--                <p style="padding-top: 0 !important; font-size: 13px !important;">--}}
{{--                    <b>Sale:{{ $totalSaleAmountYearly}} TK</b>--}}
{{--                </p>--}}
{{--                <p style="padding-top: 0 !important; margin-top: -5px !important; font-size: 13px !important;"><b>Purchase:--}}
{{--                        0 TK</b></p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}



@endsection
