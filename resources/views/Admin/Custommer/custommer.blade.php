@extends('Admin.master')

@section('title' , 'customer-table')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@endsection

@section('body')
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="{{route('dashboard')}}">Home</a>
                </li>
                <li class="active">Customers</li>
            </ul><!-- /.breadcrumb -->

            <div class="nav-search" id="nav-search">
                <form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="searchInput" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
                </form>
            </div><!-- /.nav-search -->
        </div>
    </div>


    <section class="py-3" style="margin-top:30px" >


        <div class="container">
            <div class="row">


                <div class="">
                    <div class="col-xs-12 ">


                        <div class="header smaller lighter blue">
                            <div class="col-xl-5">
                                <p>
                                <h3>All Customer Details</h3>
                                <div class="input-group input-group-sm col-md-4 align-left"
                                     style="border: 0px ; border-bottom: floralwhite " !importan>
                                    <span class="input-group-addon"><i
                                            class="ace-icon glyphicon glyphicon-user"></i></span>
                                    <input type="text" class="form-control rounded-0 search-input" name="product_search"
                                            placeholder="Search customer" autocomplete="off">
                                </div>
                            </div>

                            <div class="align-right"><a href="{{route('customers.create')}}" class="btn btn-success"
                                                        id="bootbox-options">Add Customer</a></div>
                            </p>
                        </div>


                        <div class="clearfix">
                            <div class="pull-right tableTools-container"></div>
                        </div>
                        <div class="table-header">
                            Results for "Latest Customer list"
                        </div>
                        <table id="dynamic-table myTable searchInput" class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th class="center">
                                    <label class="pos-rel">
                                        <input type="checkbox" class="ace"/>
                                        <span class="lbl"></span>
                                    </label>
                                </th>
                                <th class="detail-col">Details</th>
                                <th>Name</th>
                                <th>Customer ID</th>
                                <th class="hidden-480">Customer City</th>

                                <th>
                                    <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                    Phone Number
                                </th>
                                <th class="hidden-480">Status</th>


                            </tr>
                            </thead>

                            <tbody>
                            @foreach($customers as $customer)
                                <tr>
                                    <td class="center">
                                        <label class="pos-rel">
                                            <input type="checkbox" class="ace"/>
                                            <span class="lbl"></span>
                                        </label>
                                    </td>

                                    <td class="center">
                                        <div class="action-buttons">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#{{$loop->iteration}}">
                                                <i class="ace-icon fa fa-angle-double-down"></i>
                                            </button>
                                            <span class="sr-only">Details</span>
                                            </a>
                                        </div>
                                    </td>

                                    <td>
                                        <a href="#">{{$customer->xshort}}</a>
                                    </td>
                                    <td>{{$customer->xcus}}</td>
                                    <td class="hidden-480">{{$customer->xcity}}</td>
                                    <td>{{$customer->xphone}}</td>
                                    <td>
                                        <div class="hidden-sm hidden-xs btn-group">
                                            <button class="btn btn-xs btn-success">
                                                <i class="ace-icon fa fa-check bigger-120"></i>
                                            </button>

                                            <button class="btn btn-xs btn-info">
                                                <i class="ace-icon fa fa-pencil bigger-120"></i>
                                            </button>

                                            <button class="btn btn-xs btn-danger">
                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                            </button>

                                            <button class="btn btn-xs btn-warning">
                                                <i class="ace-icon fa fa-flag bigger-120"></i>
                                            </button>
                                        </div>

                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-minier btn-primary dropdown-toggle"
                                                        data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a href="#" class="tooltip-info" data-rel="tooltip"
                                                           title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-success" data-rel="tooltip"
                                                           title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-error" data-rel="tooltip"
                                                           title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div><!-- /.span -->
                </div><!-- /.row -->


            </div>
        </div>

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
    </section>

    {{--    <script>--}}
    {{--        $(document).ready(function() {--}}
    {{--            // Capture the click event of the button that opens the modal--}}
    {{--            $('.btn-primary[data-toggle="modal"]').click(function() {--}}
    {{--                // Get the customer ID from the data attribute--}}
    {{--                var customerId = $(this).data('customer-id');--}}

    {{--                // Update the modal title with the customer ID--}}
    {{--                $('#' + customerId + ' .modal-title').text('Modal title for Customer ID ' + customerId);--}}

    {{--                // You can perform other actions based on the customer ID here, like making an AJAX call to fetch specific customer details and update the modal content dynamically--}}

    {{--                // Show the modal--}}
    {{--                $('#' + customerId).modal('show');--}}
    {{--            });--}}
    {{--        });--}}
    {{--    </script>--}}

@endsection
@section('js')

    <script type="text/javascript">

        function toggleDetails(event, customerId) {
            event.preventDefault();
            var detailRow = document.getElementById('detail-row-' + customerId);
            if (detailRow.style.display === 'none') {
                detailRow.style.display = 'table-row';
            } else {
                detailRow.style.display = 'none';
            }
        }


        const searchInput = document.getElementById('searchInput');
        const table = document.getElementById('myTable');
        const tableRows = table.getElementsByTagName('tr');

        searchInput.addEventListener('keyup', function () {
            const filter = searchInput.value.toLowerCase();

            for (let i = 1; i < tableRows.length; i++) {
                const row = tableRows[i];
                const rowData = row.getElementsByTagName('td');
                let found = false;

                for (let j = 0; j < rowData.length; j++) {
                    const cell = rowData[j];

                    if (cell.innerHTML.toLowerCase().indexOf(filter) > -1) {
                        found = true;
                        break;
                    }
                }

                row.style.display = found ? '' : 'none';
            }
        });


        $("#bootbox-options").on(ace.click_event, function () {
            bootbox.dialog({
                message: "<span class='bigger-110'></span>",
                buttons:
                    {
                        "success":
                            {
                                "label": "<i class='ace-icon fa fa-check'></i> Success!",
                                "className": "btn-sm btn-success",
                                "callback": function () {
                                    //Example.show("great success");
                                }
                            },
                        "danger":
                            {
                                "label": "Danger!",
                                "className": "btn-sm btn-danger",
                                "callback": function () {
                                    //Example.show("uh oh, look out!");
                                }
                            },
                        "click":
                            {
                                "label": "Click ME!",
                                "className": "btn-sm btn-primary",
                                "callback": function () {
                                    //Example.show("Primary button");
                                }
                            },
                        "button":
                            {
                                "label": "Just a button...",
                                "className": "btn-sm"
                            }
                    }
            });
        });

    </script>

@endsection
