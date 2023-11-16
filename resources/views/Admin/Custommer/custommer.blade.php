




<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Tables - Customers</title>
    <meta name="description" content="Static &amp; Dynamic Tables" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('/')}}assets/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{asset('/')}}assets/css/fonts.googleapis.com.css" />
    <link rel="stylesheet" href="{{asset('/')}}assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
    <link rel="stylesheet" href="{{asset('/')}}assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="{{asset('/')}}assets/css/ace-rtl.min.css" />
    <script src="{{asset('/')}}assets/js/ace-extra.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="no-skin">

<!-- nave -->
<div id="navbar" class="navbar navbar-default          ace-save-state">
    <div class="navbar-container ace-save-state" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>
        </button>

        <div class="navbar-header pull-left">
            <a href="{{route('dashboard')}}" class="navbar-brand">
                <small>
                    <i class="fa fa-leaf"></i>
                    FIX IT
                </small>
            </a>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">


                <li class="light-blue dropdown-modal">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        {{--                        <img class="nav-user-photo" src="assets/images/avatars/user.jpg" alt="Jason's Photo" />--}}
                        <span class="user-info">
									<small>Welcome,</small>
									{{auth()->user()->name}}
								</span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-cog"></i>
                                Settings
                            </a>
                        </li>

                        <li>
                            <a href="profile.html">
                                <i class="ace-icon fa fa-user"></i>
                                Profile
                            </a>
                        </li>

                        <li class="divider"></li>


                        <li>
                            <a class=" " onclick="event.preventDefault(); document.getElementById('logoutForm').submit()" href="#"><i class="icon-key"></i><i class="ace-icon fa fa-power-off"> Logout</i></a>
                            <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                                @csrf
                            </form>
                        </li>



                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.navbar-container -->
</div>
<!-- nave end -->
<div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
        try{ace.settings.loadState('main-container')}catch(e){}
    </script>


    <!-- side ber -->
    <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
        <script type="text/javascript">
            try{ace.settings.loadState('sidebar')}catch(e){}
        </script>

        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
            {{--    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">--}}
            {{--        <button class="btn btn-success">--}}
            {{--            <i class="ace-icon fa fa-signal"></i>--}}
            {{--        </button>--}}

            {{--        <button class="btn btn-info">--}}
            {{--            <i class="ace-icon fa fa-pencil"></i>--}}
            {{--        </button>--}}

            {{--        <button class="btn btn-warning">--}}
            {{--            <i class="ace-icon fa fa-users"></i>--}}
            {{--        </button>--}}

            {{--        <button class="btn btn-danger">--}}
            {{--            <i class="ace-icon fa fa-cogs"></i>--}}
            {{--        </button>--}}
            {{--    </div>--}}

            <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                <span class="btn btn-success"></span>

                <span class="btn btn-info"></span>

                <span class="btn btn-warning"></span>

                <span class="btn btn-danger"></span>
            </div>
        </div><!-- /.sidebar-shortcuts -->

        <ul class="nav nav-list">
            <li class="active">
                <a href="{{route('dashboard')}}">
                    <i class="menu-icon fa fa-tachometer"></i>
                    <span class="menu-text"> Dashboard </span>
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-desktop"></i>
                    <span class="menu-text">
								Product &amp; Sales
							</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    {{--            <li class="">--}}
                    {{--                <a href="{{route('products.index')}}">--}}
                    {{--                    <i class="menu-icon fa fa-caret-right"></i>--}}
                    {{--                    Products--}}
                    {{--                </a>--}}

                    {{--                <b class="arrow"></b>--}}
                    {{--            </li>--}}

                    <li class="">
                        <a href="{{route('customers.index')}}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Customer
                        </a>

                        <b class="arrow"></b>
                    </li>



                    <li class="">
                        <a href="{{route('sales.index')}}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Sales
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="{{route('sale-details.index')}}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Sale Details
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                <a href="{{route('barcode')}}">
                    <i class="menu-icon fa fa-caret-right"></i>
                   Product BarCode
                </a>

                <b class="arrow"></b>
            </li>


                </ul>
            </li>
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="ace-icon fa fa-refresh bigger-160" style="margin-left: 2px"></i>
                    <span class="menu-text" style="margin-left: 10px">
								Product &amp; Return
							</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    {{--            <li class="">--}}
                    {{--                <a href="{{route('products.index')}}">--}}
                    {{--                    <i class="menu-icon fa fa-caret-right"></i>--}}
                    {{--                    Products--}}
                    {{--                </a>--}}

                    {{--                <b class="arrow"></b>--}}
                    {{--            </li>--}}


                    <li class="">
                        <a href="{{route('return.create')}}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Sales Return
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="{{route('return-details.index')}}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Return Details
                        </a>

                        <b class="arrow"></b>
                    </li>


                </ul>
            </li>
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="ace-icon fa fa-user bigger-160" style="margin-left: 2px"></i>
                    <span class="menu-text" style="margin-left: 10px">
								Users
							</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="{{route('users.index')}}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            User Create
                        </a>

                        <b class="arrow"></b>
                    </li>




                </ul>
            </li>


        </ul><!-- /.nav-list -->

        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
    </div>
    <!-- side ber end -->


    <div class="main-content">
        <div class="main-content-inner">


            <div class="page-content">
                <div class="ace-settings-container" id="ace-settings-container">
                    <div class="align-right" style="margin-right: 20px"><a href="{{route('customers.create')}}" class="btn btn-success"
                                                id="bootbox-options">Add Customer</a></div>


                </div><!-- /.ace-settings-container -->

                <div class="page-header">

                    <h1>
                        Customer
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            &amp; Customer Details
                        </small>
                    </h1>
                </div><!-- /.page-header -->
                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->



                        <div class="row">
                            <div class="col-xs-12">


                                <div class="clearfix">
                                    <div class="pull-right tableTools-container"></div>
                                </div>
                                <div class="table-header">
                                    Results for "Latest Customer"
                                </div>

                                <!-- div.table-responsive -->

                                <!-- div.dataTables_borderWrap -->
                                <div>
                                    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th class="center">
                                                <label class="pos-rel">
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"></span>
                                                </label>
                                            </th>


                                            <th class="hidden-480">Name</th>

                                            <th>
                                                <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                                Customer ID
                                            </th>
                                            <th class="hidden-480">Customer City</th>
                                            <th>Phone Number</th>
                                            <th>Details	</th>
                                            <th></th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($customers as $customer)
                                            <tr>
                                                <td class="center">
                                                    <label class="pos-rel">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl"></span>
                                                    </label>
                                                </td>



                                                <td class="hidden-480">{{$customer->xshort}}</td>
                                                <td>{{$customer->xcus}}</td>



                                                <td class="hidden-480">
                                                    <span class="">{{$customer->xcity}}</span>
                                                </td>
                                                <td>
                                                    {{$customer->xphone}}
                                                </td>
                                                <td>
                                                    <div class="action-buttons">
                                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                                                data-target="#{{$loop->iteration}}">
                                                            <i class="ace-icon fa fa-angle-double-down"></i>
                                                        </button>
                                                        <span class="sr-only">Details</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td></td>
                                            </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>



                        <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->


    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
</div><!-- /.main-container -->

@foreach($customers as  $customer)
    <div class="modal fade " id="{{$loop->iteration}}" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Customer details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="space visible-xs"></div>

                            <div class="profile-user-info profile-user-info-striped">
                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Name</div>

                                    <div class="profile-info-value">
                                        <span>{{$customer->xshort}}</span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Company name</div>

                                    <div class="profile-info-value">

                                        <span>{{$customer->xorg}}</span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Company Type</div>

                                    <div class="profile-info-value">
                                        <span>{{$customer->xgcus}}</span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name"> POST COde</div>

                                    <div class="profile-info-value">
                                        <span>{{$customer->xzip}}</span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name">Address</div>

                                    <div class="profile-info-value">
                                        <i class="fa fa-map-marker light-orange bigger-110"></i>
                                        <span>{{$customer->xadd1}}</span>
                                        <hr>
                                        <span>{{$customer->xadd1}}</span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Country</div>

                                    <div class="profile-info-value">
                                        <span>{{$customer->xcountry}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
<!-- basic scripts -->

<!--[if !IE]> -->
<script src="{{asset('/')}}assets/js/jquery-2.1.4.min.js"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="{{asset('/')}}assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='{{asset('/')}}assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="{{asset('/')}}assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->
<script src="{{asset('/')}}assets/js/jquery.dataTables.min.js"></script>
<script src="{{asset('/')}}assets/js/jquery.dataTables.bootstrap.min.js"></script>
<script src="{{asset('/')}}assets/js/dataTables.buttons.min.js"></script>
<script src="{{asset('/')}}assets/js/buttons.flash.min.js"></script>
<script src="{{asset('/')}}assets/js/buttons.html5.min.js"></script>
<script src="{{asset('/')}}assets/js/buttons.print.min.js"></script>
<script src="{{asset('/')}}assets/js/buttons.colVis.min.js"></script>
<script src="{{asset('/')}}assets/js/dataTables.select.min.js"></script>

<!-- ace scripts -->
<script src="{{asset('/')}}assets/js/ace-elements.min.js"></script>
<script src="{{asset('/')}}assets/js/ace.min.js"></script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
    jQuery(function($) {
        //initiate dataTables plugin
        var myTable =
            $('#dynamic-table')
                //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                .DataTable( {
                    bAutoWidth: false,
                    "aoColumns": [
                        { "bSortable": false },
                        null, null,null, null, null,
                        { "bSortable": false }
                    ],
                    "aaSorting": [],



                    select: {
                        style: 'multi'
                    }
                } );



        $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';

        new $.fn.dataTable.Buttons( myTable, {
            buttons: [
                {
                    "extend": "colvis",
                    "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
                    "className": "btn btn-white btn-primary btn-bold",
                    columns: ':not(:first):not(:last)'
                },
                {
                    "extend": "copy",
                    "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
                    "className": "btn btn-white btn-primary btn-bold"
                },
                {
                    "extend": "csv",
                    "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
                    "className": "btn btn-white btn-primary btn-bold"
                },
                {
                    "extend": "excel",
                    "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
                    "className": "btn btn-white btn-primary btn-bold"
                },
                {
                    "extend": "pdf",
                    "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
                    "className": "btn btn-white btn-primary btn-bold"
                },
                {
                    "extend": "print",
                    "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
                    "className": "btn btn-white btn-primary btn-bold",
                    autoPrint: false,
                    message: 'This print was produced using the Print button for DataTables'
                }
            ]
        } );
        myTable.buttons().container().appendTo( $('.tableTools-container') );

        //style the message box
        var defaultCopyAction = myTable.button(1).action();
        myTable.button(1).action(function (e, dt, button, config) {
            defaultCopyAction(e, dt, button, config);
            $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
        });


        var defaultColvisAction = myTable.button(0).action();
        myTable.button(0).action(function (e, dt, button, config) {

            defaultColvisAction(e, dt, button, config);


            if($('.dt-button-collection > .dropdown-menu').length == 0) {
                $('.dt-button-collection')
                    .wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
                    .find('a').attr('href', '#').wrap("<li />")
            }
            $('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
        });

        ////

        setTimeout(function() {
            $($('.tableTools-container')).find('a.dt-button').each(function() {
                var div = $(this).find(' > div').first();
                if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
                else $(this).tooltip({container: 'body', title: $(this).text()});
            });
        }, 500);





        myTable.on( 'select', function ( e, dt, type, index ) {
            if ( type === 'row' ) {
                $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
            }
        } );
        myTable.on( 'deselect', function ( e, dt, type, index ) {
            if ( type === 'row' ) {
                $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
            }
        } );




        /////////////////////////////////
        //table checkboxes
        $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

        //select/deselect all rows according to table header checkbox
        $('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
            var th_checked = this.checked;//checkbox inside "TH" table header

            $('#dynamic-table').find('tbody > tr').each(function(){
                var row = this;
                if(th_checked) myTable.row(row).select();
                else  myTable.row(row).deselect();
            });
        });

        //select/deselect a row when the checkbox is checked/unchecked
        $('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
            var row = $(this).closest('tr').get(0);
            if(this.checked) myTable.row(row).deselect();
            else myTable.row(row).select();
        });



        $(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
            e.stopImmediatePropagation();
            e.stopPropagation();
            e.preventDefault();
        });


        var active_class = 'active';
        $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
            var th_checked = this.checked;//checkbox inside "TH" table header

            $(this).closest('table').find('tbody > tr').each(function(){
                var row = this;
                if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
            });
        });

        //select/deselect a row when the checkbox is checked/unchecked
        $('#simple-table').on('click', 'td input[type=checkbox]' , function(){
            var $row = $(this).closest('tr');
            if($row.is('.detail-row ')) return;
            if(this.checked) $row.addClass(active_class);
            else $row.removeClass(active_class);
        });



        $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});

        //tooltip placement on right or left
        function tooltip_placement(context, source) {
            var $source = $(source);
            var $parent = $source.closest('table')
            var off1 = $parent.offset();
            var w1 = $parent.width();

            var off2 = $source.offset();
            //var w2 = $source.width();

            if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
            return 'left';
        }




        /***************/
        $('.show-details-btn').on('click', function(e) {
            e.preventDefault();
            $(this).closest('tr').next().toggleClass('open');
            $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
        });



    })
</script>
</body>
</html>


