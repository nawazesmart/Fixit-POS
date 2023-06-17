@extends('Admin.master')

@section('title','admin-dashboard')
@section('css')

    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('/')}}assets/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{asset('/')}}assets/css/fonts.googleapis.com.css" />
    <link rel="stylesheet" href="{{asset('/')}}assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
    <link rel="stylesheet" href="{{asset('/')}}assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="{{asset('/')}}assets/css/ace-rtl.min.css" />
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
									<input type="text" placeholder="Search ..." class="nav-search-input" id="searchInput" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
                    </form>
                </div>
           <!-- /.nav-search -->
        </div>

        <div class="page-content" >
            <div class="ace-settings-container" id="ace-settings-container">
                <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                    <i class="ace-icon fa fa-cog bigger-130"></i>
                </div>

                <div class="ace-settings-box clearfix" id="ace-settings-box">
                    <div class="pull-left width-50">
                        <div class="ace-settings-item">
                            <div class="pull-left">
                                <select id="skin-colorpicker" class="hide">
                                    <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                                    <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                    <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                    <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                </select>
                            </div>
                            <span>&nbsp; Choose Skin</span>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
                            <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
                            <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
                            <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
                            <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
                            <label class="lbl" for="ace-settings-add-container">
                                Inside
                                <b>.container</b>
                            </label>
                        </div>
                    </div><!-- /.pull-left -->

                    <div class="pull-left width-50">
                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
                            <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
                            <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
                            <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                        </div>
                    </div><!-- /.pull-left -->
                </div><!-- /.ace-settings-box -->
            </div><!-- /.ace-settings-container -->

            <div class="page-header">
                <h1>
                    Dashboard
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        overview &amp; stats
                    </small>
                </h1>
            </div><!-- /.page-header -->

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->


                    <div class="row">
                        <div class="space-6"></div>

                        <div class="col-sm-12 infobox-container">
                            <div class="infobox infobox-green">
                                <div class="infobox-icon">
                                    <i class="ace-icon fa fa-comments"></i>
                                </div>

                                <div class="infobox-data">
                                    <span class="infobox-data-number">32</span>
                                    <div class="infobox-content">comments + 2 reviews</div>
                                </div>

                                <div class="stat stat-success">8%</div>
                            </div>

                            <div class="infobox infobox-blue">
                                <div class="infobox-icon">
                                    <i class="ace-icon fa fa-twitter"></i>
                                </div>

                                <div class="infobox-data">
                                    <span class="infobox-data-number">11</span>
                                    <div class="infobox-content">new followers</div>
                                </div>

                                <div class="badge badge-success">
                                    +32%
                                    <i class="ace-icon fa fa-arrow-up"></i>
                                </div>
                            </div>

                            <div class="infobox infobox-pink">
                                <div class="infobox-icon">
                                    <i class="ace-icon fa fa-shopping-cart"></i>
                                </div>

                                <div class="infobox-data">
                                    <span class="infobox-data-number">8</span>
                                    <div class="infobox-content">new orders</div>
                                </div>
                                <div class="stat stat-important">4%</div>
                            </div>

                            <div class="infobox infobox-red">
                                <div class="infobox-icon">
                                    <i class="ace-icon fa fa-flask"></i>
                                </div>

                                <div class="infobox-data">
                                    <span class="infobox-data-number">7</span>
                                    <div class="infobox-content">experiments</div>
                                </div>
                            </div>

                            <div class="infobox infobox-orange2">
                                <div class="infobox-chart">
                                    <span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
                                </div>

                                <div class="infobox-data">
                                    <span class="infobox-data-number">6,251</span>
                                    <div class="infobox-content">pageviews</div>
                                </div>

                                <div class="badge badge-success">
                                    7.2%
                                    <i class="ace-icon fa fa-arrow-up"></i>
                                </div>
                            </div>

                            <div class="infobox infobox-blue2">
                                <div class="infobox-progress">
                                    <div class="easy-pie-chart percentage" data-percent="42" data-size="46">
                                        <span class="percent">42</span>%
                                    </div>
                                </div>

                                <div class="infobox-data">
                                    <span class="infobox-text">traffic used</span>

                                    <div class="infobox-content">
                                        <span class="bigger-110">~</span>
                                        58GB remaining
                                    </div>
                                </div>
                            </div>




                        </div>




                    </div><!-- /.row -->






                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
@endsection
