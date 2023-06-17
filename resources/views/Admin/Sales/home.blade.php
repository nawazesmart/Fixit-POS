<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('Admin.includes.css')


    <style>

        .box {
            height: 500px;
        }

        .line {
            height: 5px;
            width: 100%;
            color: red;
        }

        .mt-2 {
            margin-top: 2px;
        }

        .mt-3 {
            margin-top: 3px;
        }

        .mt-4 {
            margin-top: 4px;


        }

    </style>
</head>
<body>
@include('Admin.includes.nav')

@if ($errors->any())
    <div class="">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 1500
            });
        });
    </script>
@endif


<form action="{{route('sale-store.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <section class="page-content" style="padding: 5px 20px 1px;!important;">
        <div class="">
            <div class="row clear1" style="height: 50px">
                <div class="col-md-6 m-2 ">
                    <div class="col-md-5">
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon"><i class="ace-icon fa fa-edit"></i></span>
                            <select class="form-control select2 rounded-0 select2-hidden-accessible" tabindex="-1"
                                    aria-hidden="true" name="customer" id="category-select">
                                <option value="" type="text" selected="" data-select2-id="select2-data-11-aomr"> Select
                                    Customer
                                </option>
                                @foreach($customer as $custom)
                                    <option value="{{ $custom->xorg }}"><a href="">{{$custom->xorg}}</a></option>
                                @endforeach

                            </select>


                            {{--                        <input type="text"  class="form-control" placeholder="Cash Customer" />--}}
                            <span class="input-group-addon"><i class="ace-icon glyphicon glyphicon-remove"></i></span>
                        </div>
                    </div>
                    <div class="col-md-4 m-2 ">
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon"><i class="menu-icon fa fa-calendar"></i></span>
                            <input type="date" name="xdate" id="current_date" value="{{date('Y-m-d')}}"
                                   class="form-control" placeholder=""/>
                        </div>
                    </div>
                    <div class="col-md-3 m-2">
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon"><i class=" ace-icon glyphicon glyphicon-print"></i></span>
                            <select class="form-control rounded-0" name="invoice">
                                <option value="pos-print" selected="">POS Invoice</option>
                                <option value="normal-print">Normal Invoice</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6  margin-top-1">
                    <div class="col-md-6 m-2 ">
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon"><i
                                    class="ace-icon glyphicon glyphicon-align-justify"></i></span>
                            <select class="form-control select2 rounded-0 select2-hidden-accessible" name="category"
                                    id="category_select" tabindex="-1" aria-hidden="true">
                                <option value="" selected="" data-select2-id="select2-data-11-aomr">All Category
                                </option>
                                {{--                                @foreach($category as  $item)--}}
                                {{--                                    <option value="{{ $item->xgitem }}" class="category"--}}
                                {{--                                            onclick="categoryProducts(this)">{{$item->xgitem}}</option>--}}


                                {{--                                @endforeach--}}

                            </select>
                            <span class="select2 select2-container select2-container--bootstrap-5" dir="ltr"
                                  data-select2-id="select2-data-10-68ob" style="width: 159.484px;"><span
                                    class="selection"><span class="select2-selection select2-selection--single"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            tabindex="0" aria-disabled="false"
                                                            aria-labelledby="select2-category_id-container"
                                                            aria-controls="select2-category_id-container"><span
                                            class="select2-selection__rendered" id="select2-category_id-container"
                                            role="textbox" aria-readonly="true" title="All Category"></span><span
                                            class="select2-selection__arrow" role="presentation"><b
                                                role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                    </div>
                    <div class="col-md-6 m-2">
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon"><i class="ace-icon glyphicon glyphicon-home"></i></span>


                            <select class="form-control select2 rounded-0 select2-hidden-accessible" name="xwh"
                                    id="branch_select" tabindex="-1" aria-hidden="true">
                                <option value="" selected="" data-select2-id="select2-data-11-aomr">Select Branch
                                </option>

                                @if(is_array($zidCode) || is_object($zidCode))
                                    @foreach($zidCode as $item)
                                        <option value="{{ $item->xwh }}" class="category"
                                                onclick="branchName(this)">
                                            {{ $item->xwh }}
                                        </option>
                                    @endforeach
                                @endif
                            </select>

                            <span class="input-group-addon"><i class="ace-icon glyphicon glyphicon-th"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="">
        <div class="row">
            <div class="col-md-12 line"></div>
        </div>
    </div>

    <section class="ml-6 col-md-12 mb-6 page-content">
        <div class="m-1">
            <div class="ui ui-widget ui-widget-content">
                <div class="row " style="width: 1507px">
                    <div class="col-sm-6 ml-3 box mb-2 overflow-scroll">
                        <div class="table-responsive mt-1 p-0">
                            <div class="search-any-product d-flex">
                                <div class="input-group input-group-sm"
                                     style="border: 0px ; border-bottom: floralwhite " !importan>
                                    <span class="input-group-addon"><i class="ace-icon fa fa-barcode"></i></span>
                                    {{--                                    <form id="searchForm" action="{{ route('productsSearch') }}" method="GET">--}}
                                    <input type="text" class="form-control rounded-0 search-input" name="search"
                                           value=""
                                           id="searchInput" placeholder="Scan Your Barcode or SKU"
                                           autocomplete="off">
                                    {{--                                    </form>--}}

                                </div>
                                <div class="dropdown-content live-load-content">
                                </div>
                            </div>
                            <table class="table table-hover item-table card card-table" id="myTable searchInput">
                                <thead style="background-color: aliceblue; border-bottom: 2px solid;">
                                <tr>
                                    <th width="25%">Item</th>
                                    <th width="15%">SKU</th>
                                    <th width="15%">Unit</th>
                                    <th width="12%" class="text-end">U.Price</th>
                                    <th width="18%" class="text-center">Quantity</th>
                                    <th width="13%" class="text-center">Total</th>
                                    <th width="2%">
                                        <svg class="svg-inline--fa fa-times fa-w-11" aria-hidden="true"
                                             focusable="false" data-prefix="fas" data-icon="times" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                  d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path>
                                        </svg><!-- <i class="fas fa-times"></i> Font Awesome fontawesome.com --></th>
                                </tr>
                                </thead>
                                <tbody id="t-body" class="cart-items">

                                <tr id="emptycart">
                                    <input type="hidden" name="zid[]">
                                    <td colspan="5" class="text-center p-5">
                                        <img src="{{asset('/')}}img/images.png" height="400" alt="emptycart">
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <div class="total-price">Total: BDT 0</div>


                        </div>
                    </div>


                    <div class="col-sm-6 ml-3 box mb-2  overflow-scroll" style=" ">


                        @foreach($products as $key => $product)
                            <a href="javascript:void(0)" class="card-info">

                                <span id="searchResults"></span>


                                <div id="product-list">


                                </div>
                            </a>

                        @endforeach
                        <div>
                            {{--                        @foreach($products->where('$product->zid') as $key => $product)--}}
                            {{--                                                    @foreach($products as $key => $product)--}}
                            {{--                                                        <a href="javascript:void(0)" class="card-info">--}}
                            {{--                                                            <div id="product-list">--}}

                            {{--                                                                <div class="col-xs-2 col-sm-2 col-md-4 overflow" style="color: #1f2937">--}}
                            {{--                                                                    <div class="search-thumbnail">--}}
                            {{--                                                                        <div class="pl-3 thumbnail search-thumbnail">--}}
                            {{--                                                                            <div class="card gradient-1 product-item" id="product-item-{{$key}}"--}}
                            {{--                                                                                 data-product-id="{{$key}}">--}}
                            {{--                                                                                <h5 class="card-header name-product"--}}
                            {{--                                                                                    style="padding: 5px; margin-top:0px"--}}
                            {{--                                                                                    id="heading"> {{$product->xdesc }}</h5>--}}
                            {{--                                                                                <h5 class="card-header name-product"--}}
                            {{--                                                                                    style="padding: 5px; margin-top:0px"--}}
                            {{--                                                                                    id="heading"> {{ Illuminate\Support\Str::limit($product->xdesc, $limit = 20, $end = '') }}</h5>--}}
                            {{--                                                                                <span><div class="sku"--}}
                            {{--                                                                                           style="display:none">{{$product->xcitem}}</div></span>--}}
                            {{--                                                                                <span><div class="unit"--}}
                            {{--                                                                                           style="display:none">{{$product->xunitiss}}</div></span>--}}
                            {{--                                                                                <span><div class="zid"--}}
                            {{--                                                                                           style="display:none">{{$product->zid}}</div></span>--}}
                            {{--                                                                                <div class="card-body p-2">--}}
                            {{--                                                                                    <div class="d-inline-block">--}}
                            {{--                                                                                        <h2 class="text-white price-product"--}}
                            {{--                                                                                            style="padding: 5px">{{$product->xstdcost}}</h2>--}}
                            {{--                                                                                        <p><span--}}
                            {{--                                                                                                class="pull-right label label-grey quantity">1</span>--}}
                            {{--                                                                                        </p>--}}
                            {{--                                                                                    </div>--}}
                            {{--                                                                                    <span class="float-right display-5 opacity-5"><i--}}
                            {{--                                                                                            class="fa fa-shopping-cart"></i></span>--}}
                            {{--                                                                                </div>--}}
                            {{--                                                                            </div>--}}
                            {{--                                                                        </div>--}}
                            {{--                                                                    </div>--}}
                            {{--                                                                </div>--}}
                            {{--                                                            </div>--}}
                            {{--                                                        </a>--}}

                            {{--                                                    @endforeach--}}
                        </div>

                        {{--                        This code are not use--}}
                        <div>
                            {{--                                                    @foreach($products as $key => $product)--}}
                            {{--                                                        <div id="product-list">--}}
                            {{--                                                                                        <div class="col-xs-2 col-sm-2 col-md-4 overflow" style="color: #1f2937">--}}
                            {{--                                                                                            <div class="search-thumbnail">--}}
                            {{--                                                                                                <div class="pl-3 thumbnail search-thumbnail">--}}
                            {{--                                                                                                    <div class="card gradient-1 product-item" id="product-item-{{$key}}"--}}
                            {{--                                                                                                         data-product-id="{{$key}}">--}}
                            {{--                                                                                                        <h5 class="card-header name-product" style="padding: 5px; margin-top:0px" id="heading"> {{$product->xdesc }}</h5>--}}
                            {{--                                                                                                        <h5 class="card-header name-product"--}}
                            {{--                                                                                                            style="padding: 5px; margin-top:0px"--}}
                            {{--                                                                                                            id="heading"> {{ Illuminate\Support\Str::limit($product->xdesc, $limit = 20, $end = '') }}</h5>--}}
                            {{--                                                                                                        <span><div class="sku"--}}
                            {{--                                                                                                                   style="display:none">{{$product->xcitem}}</div></span>--}}
                            {{--                                                                                                        <span><div class="unit"--}}
                            {{--                                                                                                                   style="display:none">{{$product->xunitiss}}</div></span>--}}
                            {{--                                                                                                        <span><div class="zid"--}}
                            {{--                                                                                                                   style="display:none">{{$product->zid}}</div></span>--}}
                            {{--                                                                                                        <div class="card-body p-2">--}}
                            {{--                                                                                                            <div class="d-inline-block">--}}
                            {{--                                                                                                                <h2 class="text-white price-product"--}}
                            {{--                                                                                                                    style="padding: 5px">{{$product->xstdcost}}</h2>--}}
                            {{--                                                                                                                <p><span class="pull-right label label-grey quantity">1</span>--}}
                            {{--                                                                                                                </p>--}}
                            {{--                                                                                                            </div>--}}
                            {{--                                                                                                            <span class="float-right display-5 opacity-5"><i--}}
                            {{--                                                                                                                    class="fa fa-shopping-cart"></i></span>--}}
                            {{--                                                                                                        </div>--}}
                            {{--                                                                                                    </div>--}}
                            {{--                                                                                                </div>--}}
                            {{--                                                                                            </div>--}}
                            {{--                                                                                        </div>--}}
                            {{--                                                        </div>--}}
                            {{--                                                    @endforeach--}}



                            {{--                        <div class="col-xs-2 col-sm-2 col-md-4 overflow add-to-cart  "--}}
                            {{--                             style="color: #1f2937 ; width: 230px; padding: 3px" !importent>--}}
                            {{--                            <div class=" search-thumbnail" style="padding:0px">--}}
                            {{--                                <div class="pl-3 thumbnail search-thumbnail">--}}
                            {{--                                    <div class="card gradient-1 " style="background-color:#d3eaf1">--}}
                            {{--                                        <h5 class="card-header" style="padding: 5px ; margin-top: 0px">Products--}}
                            {{--                                            Sold</h5>--}}
                            {{--                                        <div class="card-body p-2">--}}
                            {{--                                            <div class="d-inline-block">--}}
                            {{--                                                <h2 class="text-white" style="padding: 5px">45 </h2>--}}
                            {{--                                                <p><span class="pull-right label label-grey ">Tokyo</span></p>--}}
                            {{--                                            </div>--}}
                            {{--                                            <span class="float-right display-5 opacity-5"><i--}}
                            {{--                                                    class="fa fa-shopping-cart"></i></span>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                            {{--                        <div class="col-xs-2 col-sm-2 col-md-4 overflow add-to-cart  "--}}
                            {{--                             style="color: #1f2937 ; width: 230px; padding: 3px" !importent>--}}
                            {{--                            <div class=" search-thumbnail" style="padding:0px">--}}
                            {{--                                <div class="pl-3 thumbnail search-thumbnail">--}}
                            {{--                                    <div class="card gradient-1 " style="background-color:#d3eaf1">--}}
                            {{--                                        <h5 class="card-header" style="padding: 5px ; margin-top: 0px">Products--}}
                            {{--                                            Sold</h5>--}}
                            {{--                                        <div class="card-body p-2">--}}
                            {{--                                            <div class="d-inline-block">--}}
                            {{--                                                <h2 class="text-white" style="padding: 5px">45 BDT</h2>--}}
                            {{--                                                <p><span class="pull-right label label-grey ">Tokyo</span></p>--}}
                            {{--                                            </div>--}}
                            {{--                                            <span class="float-right display-5 opacity-5"><i--}}
                            {{--                                                    class="fa fa-shopping-cart"></i></span>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                            {{--                        <div class="col-xs-2 col-sm-2 col-md-4 overflow add-to-cart  "--}}
                            {{--                             style="color: #1f2937 ; width: 230px; padding: 3px" !importent>--}}
                            {{--                            <div class=" search-thumbnail" style="padding:0px">--}}
                            {{--                                <div class="pl-3 thumbnail search-thumbnail">--}}
                            {{--                                    <div class="card gradient-1 " style="background-color:#d3eaf1">--}}
                            {{--                                        <h5 class="card-header" style="padding: 5px ; margin-top: 0px">Products--}}
                            {{--                                            Sold</h5>--}}
                            {{--                                        <div class="card-body p-2">--}}
                            {{--                                            --}}{{--                                                <h3 class="card-title text-white" style="padding: 5px">Products Sold</h3>--}}
                            {{--                                            <div class="d-inline-block">--}}
                            {{--                                                <h2 class="text-white" style="padding: 5px">45 BDT</h2>--}}
                            {{--                                                <p><span class="pull-right label label-grey ">Tokyo</span></p>--}}
                            {{--                                                --}}{{--                                                <p class="text-white mb-0">Jan - March 2019</p>--}}
                            {{--                                            </div>--}}
                            {{--                                            <span class="float-right display-5 opacity-5"><i--}}
                            {{--                                                    class="fa fa-shopping-cart"></i></span>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                            {{--                        <div class="col-xs-2 col-sm-2 col-md-4 overflow add-to-cart  "--}}
                            {{--                             style="color: #1f2937 ; width: 230px; padding: 3px" !importent>--}}
                            {{--                            <div class=" search-thumbnail" style="padding:0px">--}}
                            {{--                                <div class="pl-3 thumbnail search-thumbnail">--}}
                            {{--                                    <div class="card gradient-1 " style="background-color:#d3eaf1">--}}
                            {{--                                        <h5 class="card-header" style="padding: 5px ; margin-top: 0px">Products--}}
                            {{--                                            Sold</h5>--}}
                            {{--                                        <div class="card-body p-2">--}}
                            {{--                                            --}}{{--                                                <h3 class="card-title text-white" style="padding: 5px">Products Sold</h3>--}}
                            {{--                                            <div class="d-inline-block">--}}
                            {{--                                                <h2 class="text-white" style="padding: 5px">45 BDT</h2>--}}
                            {{--                                                <p><span class="pull-right label label-grey ">Tokyo</span></p>--}}
                            {{--                                                --}}{{--                                                <p class="text-white mb-0">Jan - March 2019</p>--}}
                            {{--                                            </div>--}}
                            {{--                                            <span class="float-right display-5 opacity-5"><i--}}
                            {{--                                                    class="fa fa-shopping-cart"></i></span>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                            {{--                        <div class="col-xs-2 col-sm-2 col-md-4 overflow add-to-cart  "--}}
                            {{--                             style="color: #1f2937 ; width: 230px; padding: 3px" !importent>--}}
                            {{--                            <div class=" search-thumbnail" style="padding:0px">--}}
                            {{--                                <div class="pl-3 thumbnail search-thumbnail">--}}
                            {{--                                    <div class="card gradient-1 " style="background-color:#d3eaf1">--}}
                            {{--                                        <h5 class="card-header" style="padding: 5px ; margin-top: 0px">Products--}}
                            {{--                                            Sold</h5>--}}
                            {{--                                        <div class="card-body p-2">--}}
                            {{--                                            --}}{{--                                                <h3 class="card-title text-white" style="padding: 5px">Products Sold</h3>--}}
                            {{--                                            <div class="d-inline-block">--}}
                            {{--                                                <h2 class="text-white" style="padding: 5px">45 BDT</h2>--}}
                            {{--                                                <p><span class="pull-right label label-grey ">Tokyo</span></p>--}}
                            {{--                                                --}}{{--                                                <p class="text-white mb-0">Jan - March 2019</p>--}}
                            {{--                                            </div>--}}
                            {{--                                            <span class="float-right display-5 opacity-5"><i--}}
                            {{--                                                    class="fa fa-shopping-cart"></i></span>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                            {{--                                                    <div class="col-xs-2 col-sm-2 col-md-4 overflow "--}}
                            {{--                                                         style="color: #1f2937 ; width: 230px; padding: 3px" !importent>--}}
                            {{--                                                        <div class=" search-thumbnail" style="padding:0px">--}}
                            {{--                                                            <div class="pl-3 thumbnail search-thumbnail">--}}
                            {{--                                                                <div class="card gradient-1 " style="background-color:#d3eaf1">--}}
                            {{--                                                                    <h5 class="card-header" style="padding: 5px ; margin-top: 0px">Products--}}
                            {{--                                                                        Sold</h5>--}}
                            {{--                                                                    <div class="card-body p-2">--}}
                            {{--                                                                        <div class="d-inline-block">--}}
                            {{--                                                                            <h2 class="text-white" style="padding: 5px">45 BDT</h2>--}}
                            {{--                                                                            <p><span class="pull-right label label-grey ">Tokyo</span></p>--}}
                            {{--                                                                        </div>--}}
                            {{--                                                                        <span class="float-right display-5 opacity-5"><i--}}
                            {{--                                                                                class="fa fa-shopping-cart"></i></span>--}}
                            {{--                                                                    </div>--}}
                            {{--                                                                </div>--}}
                            {{--                                                            </div>--}}
                            {{--                                                        </div>--}}
                            {{--                                                    </div>--}}
                            {{--                        <div class="col-xs-2 col-sm-2 col-md-4 overflow "--}}
                            {{--                             style="color: #1f2937 ; width: 230px; padding: 3px" !importent>--}}
                            {{--                            <div class=" search-thumbnail" style="padding:0px">--}}
                            {{--                                <div class="pl-3 thumbnail search-thumbnail">--}}
                            {{--                                    <div class="card gradient-1 " style="background-color:#d3eaf1">--}}
                            {{--                                        <h5 class="card-header" style="padding: 5px ; margin-top: 0px">Products--}}
                            {{--                                            Sold</h5>--}}
                            {{--                                        <div class="card-body p-2">--}}
                            {{--                                            <div class="d-inline-block">--}}
                            {{--                                                <h2 class="text-white" style="padding: 5px">45 BDT</h2>--}}
                            {{--                                                <p><span class="pull-right label label-grey ">Tokyo</span></p>--}}
                            {{--                                            </div>--}}
                            {{--                                            <span class="float-right display-5 opacity-5"><i--}}
                            {{--                                                    class="fa fa-shopping-cart"></i></span>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                            {{--                        <div class="col-xs-2 col-sm-2 col-md-4 overflow "--}}
                            {{--                             style="color: #1f2937 ; width: 230px; padding: 3px" !importent>--}}
                            {{--                            <div class=" search-thumbnail" style="padding:0px">--}}
                            {{--                                <div class="pl-3 thumbnail search-thumbnail">--}}
                            {{--                                    <div class="card gradient-1 " style="background-color:#d3eaf1">--}}
                            {{--                                        <h5 class="card-header" style="padding: 5px ; margin-top: 0px">Products--}}
                            {{--                                            Sold</h5>--}}
                            {{--                                        <div class="card-body p-2">--}}
                            {{--                                            <div class="d-inline-block">--}}
                            {{--                                                <h2 class="text-white" style="padding: 5px">45 BDT</h2>--}}
                            {{--                                                <p><span class="pull-right label label-grey ">Tokyo</span></p>--}}
                            {{--                                            </div>--}}
                            {{--                                            <span class="float-right display-5 opacity-5"><i--}}
                            {{--                                                    class="fa fa-shopping-cart"></i></span>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                        </div>
                        {{--                        This code are not used--}}
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="footer-content footer-fixed">
        <div class="card-footer footer-inner footer">
            <div class="footer">
                <div class="footer-inner">
                    <div class="container text-right" style="text-decoration: none;">
                        <div class="row">
                            <div class="col-md-2 ">
                                <ul class="right-0 list-unstyled">
                                    <li class="total-price" id="totalAmount">


                                        Subtotal:BDT 0 <i class="ace-icon fa "></i>

                                    </li>
                                    <li>
                                        Vat: <input type="number" id="vatRate" name="vat"
                                                    style="width: 50px; height: 25px" placeholder="%"> <i
                                            class="ace-icon fa "></i></li>
                                    <li class="discounted-price">
                                        Discount:<input type="number" name="discount" id="extraDiscount"
                                                        style="width: 50px; height: 25px" placeholder="%">
                                        <i class="ace-icon glyphicon glyphicon-tags"></i>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-md-2 ">
                                <ul class="list-unstyled">
                                    <li>Shipping:<input type="number" name="shipping" id="shippingCost"
                                                        style="width: 50px; height: 25px "> <i
                                            class="ace-icon fa fa-truck-fast"></i></li>
                                    <li>Coupon:0 <i class="ace-icon fa fa-briefcase"></i></li>
                                    <li>Payable:0 <i class="ace-icon fa fa-credit-card"></i></li>
                                </ul>
                            </div>
                            <div class="col-md-2">
                                <ul class="list-unstyled">
                                    <li>Wallet:0 <i class="ace-icon fa fa-folder"></i></li>
                                    <li>Point:0 <i class="ace-icon fa fa-bell-o"></i></li>
                                    <li>Gift Card:0 <i class="ace-icon fa fa-gift"></i></li>
                                </ul>
                            </div>
                            <div class="col-md-2">
                                <ul class="text-decoration-none list-unstyled">
                                    <li>Paid:0</li>
                                    <li>Due:0</li>
                                    <li>Change:0</li>
{{--                                    <li><button id="btn" data-target="#exampleModal">Open Modal</button></li>--}}

                                        <!-- The Modal -->
                                        <div id="myModal" class="modal">

                                            <!-- Modal content -->
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <p>Some text in the Modal..</p>
                                            </div>

                                        </div>
                                </ul>
                            </div>
                            <div class="col-md-3 mt-1 right">
                                <div class="row g-2">
                                    <div class="col-md-6">
                                        <button type="submit" class=" btn-info rounded-0 mb-2" id=""
                                                style="width: 100%">
                                            SALE
                                        </button>

                                    </div>
                                    <div class="col-md-6">
                                        <button type="button" class=" btn-primary rounded-0 mb-2" id="button2"
                                                style="width: 100%">PAYMENT
                                        </button>

                                    </div>
                                    <div class="col-md-6">
                                        <button type="button" class="btn-warning   rounded-0 mb-2 mt-3 " id="button3"
                                                style="width: 100%"
                                                !importan>TRNSACT
                                        </button>

                                    </div>
                                    <div class="col-md-6">

                                        <button type="button" class=" btn-danger  rounded-0 my-2 mt-3 " id="button4"
                                                style="width: 100%"
                                                !importan>SAVE
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>

@include('Admin.includes.js')


{{--cart-ooption-right-to-right syster j qurey start--}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    vatRateInput.addEventListener("input", calculateTotal);
    shippingCostInput.addEventListener("input", calculateTotal);
    discountInput.addEventListener("input", calculateTotal);

    function calculateTotal() {
        let subtotal = $('.all_sub_total').val();
        // var subtotal = parseFloat(subtotalInput.value);
        var vatRate = parseFloat(vatRateInput.value);
        var shippingCost = parseFloat(shippingCostInput.value);
        var discount = parseFloat(discountInput.value);
        var totalAmount = $('#totalAmount');

        var vatAmount = subtotal * (vatRate / 100);
        var shippingAmount = shippingCost;
        var discountAmount = subtotal * (discount / 100);
        var totalAmount = subtotal + vatAmount + shippingAmount - discountAmount;

        vatAmountResult.textContent = "VAT Amount: " + vatAmount.toFixed(2);
        shippingAmountResult.textContent = "Shipping Amount: " + shippingAmount.toFixed(2);
        discountAmountResult.textContent = "Discount Amount: " + discountAmount.toFixed(2);
        totalAmount.text("Total: " + totalAmount.toFixed(2));
    }
</script>
<script>


    function addItem() {
        var productDiv = document.createElement("div");
        productDiv.textContent = "New Product"; // Example content, replace with your desired content
        document.getElementById("product-list").appendChild(productDiv);
    }


    $(document).ready(function () {


        // discount
        $('#extraDiscount').on('keyup', function () {
            calculateDiscount();
        });

        function calculateDiscount() {
            let subtotal = $('.all_sub_total').val();
            var extraDiscount = parseFloat($('#extraDiscount').val());
            var resultSection = $('#resultSection');

            // Calculate the discounted price
            var discountedPrice = subtotal - (extraDiscount * subtotal) / 100;

            // Validate if the discounted price is a valid number
            if (isNaN(discountedPrice) || discountedPrice < 0) {
                resultSection.text(' Please enter numbers.');
            } else {

                resultSection.text('Total: BDT ' + discountedPrice.toFixed(2));
                resultSection.append('<br><input type="hidden" name="discountprice" class="resultSection" value="' + discountedPrice.toFixed(2) + '">');

                // resultSection.text('Total: BDT : ' + discountedPrice.toFixed(2));

            }
        }

        // discount end

        // vat

        $('#vatRate').on('keyup', function () {
            calculateVAT();
        });

        function calculateVAT() {
            let subtotal = $('.resultSection').val();
            var vatRate = parseFloat($('#vatRate').val());
            var totalAmountResult = $('#allVatOrResult');


            var vatAmount = subtotal * (vatRate / 100);
            var totalAmount = subtotal + vatAmount;

            vatAmountResult.textContent = "VAT Amount: " + vatAmount.toFixed(2);
            totalAmountResult.textContent = "Total Amount: " + totalAmount.toFixed(2);
        }

        // vat end

        //shippingCost vatRate extraDiscount
        $('#vatRate, #shippingCost, #extraDiscount').on('keyup', calculateTotal);

        function calculateTotal() {
            var subtotal = parseFloat($('#all_total').val());
            var vatRate = parseFloat($('#vatRate').val());
            var shippingCost = parseFloat($('#shippingCost').val());
            var extraDiscount = parseFloat($('#extraDiscount').val());

            var vatAmount = subtotal * (vatRate / 100);
            var shippingAmount = shippingCost;
            var discountAmount = subtotal * (extraDiscount / 100);
            var totalAmount = subtotal + vatAmount + shippingAmount - discountAmount;

            $('#vatAmount').text('VAT Amount: ' + vatAmount.toFixed(2));
            $('#shippingAmount').text('Shipping Amount: ' + shippingAmount.toFixed(2));
            $('#discountAmount').text('Discount Amount: ' + discountAmount.toFixed(2));
            $('#totalAmount').text('Total Amount: ' + totalAmount.toFixed(2));
        }


        //shippingCost vatRate extraDiscount end

        // button config
        $('#btn').click(function () {
            // Perform action for Button 1

            var vatRate = $('#vatRate').val();
            alert('VAT Rate: ' + vatRate);
        });

        $('#button2').click(function () {
            // Perform action for Button 2
            alert('payment section under construction !');
        });

        $('#button3').click(function () {
            // Perform action for Button 3
            alert('TRNSACT section under construction!');
        });

        $('#button4').click(function () {
            // Perform action for Button 4
            alert('SAVE section under construction!');
        });

        $("#searchInput").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#productTable tbody tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });
        // button config end


        // This branch section

        $('#branch_select').on('change', function (e) {
            e.preventDefault();
            var id = $(this).val();
            $.ajax({
                url: '/fetchCategory/' + id,
                type: 'get',
                success: (result) => {
                    $('#category_select').empty();
                    $('#category_select').append(
                        '<option value="" selected="selected" disabled>Select Category </option>');
                    $.each(result, function (index, item) {
                        $("#category_select").append(
                            $("<option></option>").val(index).html(index));

                    });
                    $('#category_details').trigger('change');

                }
            })
        });
        // This branch section end


        // This product show section
        $('#category_select').change(function () {
            var category_id = $(this).val();
            var branch_id = $('#branch_select').val();
            console.log(category_id);
            console.log(branch_id);

            $.ajax({
                url: '/fetchProducts-details/' + category_id + '/' + branch_id,
                type: 'get',
                success: (result) => {
                    console.log(result);
                    $('#product-list').empty();
                    result.$product.forEach(function (product, key) {
                        var productHtml = `
                     <div >
                        <div class="col-xs-2 col-sm-2 col-md-4 overflow" style="color: #1f2937">
                            <div class="search-thumbnail">
                                <div class="pl-3 thumbnail search-thumbnail">
                                    <div class="card gradient-1 product-item" style="background-color:#D4FAFC" id="product-item-${product.xitem}" data-product-id="${product.xitem}">
                                    <h5 class="card-header name-product" style="padding: 5px; margin-top:0px" id="heading"data-milliseconds="">${product.xdesc.substring(1, 17)}..</h5>
                                        <span><div class="sku" style="display:none">${product.xcitem}</div></span>
                                        <span><div class="xitem" style="display:none">${product.xitem}</div></span>
                                        <span><div class="unit" style="display:none">${product.xunitiss}</div></span>
                                        <span><div class="zid" style="display:none">${product.zid}</div></span>
                                        <span><div class="xstdcost" style="display:none">${product.xstdcost}</div></span>
                                        <div class="card-body p-2">
                                            <div class="d-inline-block">
                                                <h2 class="text-white price-product" style="padding: 5px">${product.xstdprice}</h2>
                                                <p><span class="pull-right label label-grey quantity">1</span></p>
                                            </div>
                                            <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
                        $('#product-list').append(productHtml);
                    });


                }
            })
        });

        // This product show section end


        // this main option This working
        // in cart system all work it

        var cartItems = [];
        var total = 0;
        $(document).on("click", ".product-item", function () {
            var productId = $(this).data("product-id");
            var key = productId.toString();
            var selector = "#product-item-" + key;
            var productItem = $(selector);

            var zid = productItem.find(".zid").text().trim();
            var xstdcost = productItem.find(".xstdcost").text().trim();
            var xitem = productItem.find(".xitem").text().trim();

            var item = productItem.find(".name-product").text().trim();
            var sku = productItem.find(".sku").text().trim();
            var unit = productItem.find(".unit").text().trim();
            var price = parseInt(productItem.find(".price-product").text().trim());
            var quantity = parseInt(productItem.find(".quantity").text().trim());
            var itemTotal = price * quantity;
            total += itemTotal;

            var cartItem = {

                zid: zid,
                xstdcost: xstdcost,
                item: item,
                xitem: xitem,
                sku: sku,
                unit: unit,
                price: price,
                quantity: quantity,
                total: itemTotal
            };

            if (cartItems[key]) {
                cartItems[key].quantity += quantity;
                cartItems[key].total += itemTotal;
            } else {
                cartItems[key] = cartItem;
            }

            $(".cart-items").empty();
            for (var key in cartItems) {
                if (cartItems.hasOwnProperty(key)) {
                    var currentItem = cartItems[key];
                    var rowId = "cart-item-" + key;
                    $(".cart-items").append(`
                <tr id="${rowId}" class="cart-row">
                    <input type="hidden" name="zid[]" value="${currentItem.zid}">
                    <input type="hidden" name="xitem[]" value="${currentItem.xitem}">
                    <input type="hidden" name="xcost[]" value="${currentItem.xstdcost}">
                    <input type="hidden" name="xdesc[]" value="${currentItem.item}">
                    <input type="hidden" name="sku[]" value="${currentItem.sku}">
                    <input type="hidden" name="xunitsel[]" value="${currentItem.unit}">
                    <input type="hidden" name="xrate[]" value="${currentItem.price}">
                    <input type="hidden" name="quantity[]" value="${currentItem.quantity}">
                    <input type="hidden" name="total[]" value="${currentItem.total}">



                    <td>${currentItem.item}</td>
                    <td>${currentItem.sku}</td>
                    <td>${currentItem.unit}</td>
                    <td>${currentItem.price}</td>
                    <td class="quantity">${currentItem.quantity}</td>
                    <td>${currentItem.total}</td>
                </tr>
            `);
                }
            }

            $(".total-price").text("Total: BDT " + total);

            $(".total-price").append(`<br><input type="hidden" name="subtotal"id="all_total" class="all_sub_total" value="${total}">`);


            var date = $('#current_date').val();
            console.log(productId);
        });


        // $(document).on("click", ".cart-row", function () {
        //     var rowId = $(this).attr("id");
        //     var key = rowId.replace("cart-item-", "");
        //
        //     if (cartItems.hasOwnProperty(key)) {
        //         var currentItem = cartItems[key];
        //         currentItem.quantity--; // Reduce the quantity by 1
        //
        //         if (currentItem.quantity === 0) {
        //             total -= currentItem.total;
        //             delete cartItems[key];
        //             $(this).remove();
        //         } else {
        //             currentItem.total = currentItem.price * currentItem.quantity; // Update the total
        //             $(this).find(".quantity").text(currentItem.quantity); // Update the quantity in the row
        //             $(this).find(".total").text(currentItem.total); // Update the total price in the row
        //         }
        //
        //         $(this).remove();
        //         $(".total-price").text("Total: BDT " + total);
        //     }
        // })


        $(document).on("click", ".cart-row", function () {
            var rowId = $(this).attr("id");
            var key = rowId.replace("cart-item-", "");

            if (cartItems.hasOwnProperty(key)) {
                var currentItem = cartItems[key];
                total -= currentItem.total;
                delete cartItems[key];
            }

            $(this).remove();
            $(".total-price").text("Total: BDT " + total);
        })


// card section end
        // This cart section end
        // in cart system all work it


        // search optinon
        $('#searchInput').keyup(function () {
            var searchInput = $(this).val();

            $.ajax({
                url: "{{ route('productsSearch') }}",
                type: "GET",
                data: {search: searchInput},
                dataType: "json",
                success: function (response) {
                    displaySearchResults(response);
                },
                error: function (xhr, textStatus, errorThrown) {
                    console.log(errorThrown);
                }
            });
        });

        function displaySearchResults(results) {
            var searchResults = $('#searchResults');
            searchResults.empty();

            if (results.length === 0) {
                searchResults.append('<li>No results found.</li>');
            } else {
                $.each(results, function (index, product) {
                    var listItem = `
            <div class="col-xs-2 col-sm-2 col-md-4 overflow" style="color: #1f2937">
                <div class="search-thumbnail">
                    <div class="pl-3 thumbnail search-thumbnail">
                        <div class="card gradient-1 product-item" style="background-color:#D4FAFC" id="product-item-${product.xitem}" data-product-id="${product.xitem}">
                            <h5 class="card-header name-product" style="padding: 5px; margin-top:0px" id="heading" data-milliseconds="">${product.xdesc.slice(1, 17)}..</h5>
                            <span><div class="sku" style="display:none">${product.xcitem}</div></span>
                            <span><div class="xitem" style="display:none">${product.xitem}</div></span>
                            <span><div class="unit" style="display:none">${product.xunitiss}</div></span>
                            <span><div class="zid" style="display:none">${product.zid}</div></span>
                            <span><div class="xstdcost" style="display:none">${product.xstdcost}</div></span>
                            <div class="card-body p-2">
                                <div class="d-inline-block">
                                    <h2 class="text-white price-product" style="padding: 5px">${product.xstdprice}</h2>
                                    <p><span class="pull-right label label-grey quantity">1</span></p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;
                    searchResults.append(listItem);
                });
            }
        }


    });

    // search optinon end


    $(document).ready(function () {
        // Get the product items container
        var productItemsContainer = $(".product-items");

        // Search input keyup event handler
        $("#search-input").on("keyup", function () {
            var searchTerm = $(this).val().toLowerCase();

            // Filter the product items based on the search term
            var filteredItems = productItemsContainer.find(".product-item").filter(function () {
                var itemText = $(this).text().toLowerCase();
                return itemText.indexOf(searchTerm) !== -1;
            });

            // Show/hide the filtered items
            productItemsContainer.find(".product-item").hide();
            filteredItems.show();
        });
    });


</script>

{{--main rnd--}}

</body>
</html>

