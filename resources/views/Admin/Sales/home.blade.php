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

        .loader-container {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
        }

        .loader-image {
        }

        .line {
            height: 3px;
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

        .box-shadu {
            margin-top: 5px;
        }

        .main-pos-body {
            /*height: calc( 100vh - 194px );*/
            /*background: white;*/
        }

        .pos-footer {

        }

        .header-navbar {

        }

        .header-filter {

        }

        .total-amount-header {

        }

        body {
            overflow-y: hidden;
            overflow-x: hidden;
        }

        .pos-cart-side {
            overflow-y: auto;
            overflow-x: hidden;
            height: calc(100vh - 220px);
        }

        .pos-product-side {
            overflow-y: auto;
            overflow-x: hidden;
            height: calc(100vh - 220px);
        }
    </style>
</head>
<body>

{{--@include('Admin.includes.nav')--}}

<div id="navbar" class="header-navbar navbar navbar-default          ace-save-state">
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

        <div class="navbar-header pull-left" style="margin-left: 50px; margin-top: 10px">

            <a href="{{route('sale-details.index')}}" title="Sale Details">

                <i class="ace-icon fa fa-tasks bigger-150"></i>

            </a>
        </div>
        <div class="navbar-header pull-left" style="margin-left: 20px; margin-top: 10px; ">

            <a href="{{route('return.create')}}" title="Sale Return">
                <i class="ace-icon fa fa-refresh bigger-150"></i>

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
                            <a class=" "
                               onclick="event.preventDefault(); document.getElementById('logoutForm').submit()"
                               href="#"><i class="icon-key"></i><i class="ace-icon fa fa-power-off"> Logout</i></a>
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

@include('Admin.Sales.include.alart')

@php
    $roles = \App\Models\User::find(auth()->user()->id);
@endphp

@if($roles->sale_option == 1 )

<form action="{{route('sale-store.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <section class="page-content header-filter" style="padding: 5px 20px 1px;!important;">
        <div class="">
            <div class="row clear1" style="height: 34px">
                <div class="col-md-6 m-2 ">
                    <div class="col-md-5">
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon"><i class="ace-icon fa fa-edit"></i></span>
                            <select class="form-control select2 rounded-0 select2-hidden-accessible" tabindex="-1"
                                    aria-hidden="true" name="customer" id="category-select">
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

                            <span class="input-group-addon"><i class=" ace-icon fa fa-user"></i></span>
                            <select class="form-control rounded-0" name="xsp" required>
                                <option value="" disabled selected>Select serviced By</option>
                                @foreach($users as $user)
                                    <option value="{{$user->xname}}">{{$user->xname}}</option>
                                @endforeach
                            </select>
                            {{--                            <span class="input-group-addon"><i class="menu-icon fa fa-calendar"></i></span>--}}
                            <input type="hidden" name="xdate" id="current_date" value="{{date('Y-m-d')}}"
                                   class="form-control " placeholder="" readonly/>
                        </div>
                    </div>
                    <div class="col-md-3 m-2">
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon"><i class=" ace-icon glyphicon glyphicon-print"></i></span>
                            <select class="form-control rounded-0" name="invoice">
                                <option value="pos-print" selected="">POS Invoice</option>
                                <option value="normal-print">Normal Invoice</option>
                            </select>

                            {{--                            <span class="input-group-addon"><i class=" ace-icon fa fa-user"></i></span>--}}
                            {{--                            <select class="form-control rounded-0" name="xsp" required>--}}
                            {{--                                <option value="" disabled selected>Select</option>--}}
                            {{--                                @foreach($users as $user)--}}
                            {{--                                    <option value="{{$user->xname}}">{{$user->xname}}</option>--}}
                            {{--                                @endforeach--}}
                            {{--                            </select>--}}


                        </div>
                    </div>
                </div>
                <div class="col-md-6  margin-top-1">
                    <div class="col-md-6 m-2 ">
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon">
                               CO--{{$lastInput}}</span>
                            <input type="hidden" class="" name="coNumber" id="" value="{{$lastInput}}">
                            <span class="input-group-addon"><i class="ace-icon glyphicon glyphicon-play"></i></span>

                            <div class=" input-group input-group-sm">

                                @php

                                    $xordernum = 'CO--' . ($lastInput+1);


                                @endphp
                                <span class="input-group-addon">
                               {{$xordernum}}</span>
                                <input type="hidden" class="" name="xordernum" id="" value="{{$xordernum}}">
                                <span class="input-group-addon"></span>
                                {{--                                 xordernum: <span id="ordernum"></span>--}}
                            </div>
                            <span class="select2 select2-container select2-container--bootstrap-5" dir="ltr"
                                  data-select2-id="select2-data-10-68ob" style="width: 159.484px;">
                                <span class="selection">
                                    <span class="select2-selection select2-selection--single"
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
                                <option value="Fixit Gulshan" selected="" data-select2-id="select2-data-11-aomr">Fixit
                                    Gulshan
                                </option>

                                {{--                                @if(is_array($zidCode) || is_object($zidCode))--}}
                                {{--                                    @foreach($zidCode as $item)--}}
                                {{--                                        <option value="{{ $item->xwh }}" class="category"--}}
                                {{--                                                onclick="branchName(this)">--}}
                                {{--                                            {{ $item->xwh}}--}}
                                {{--                                        </option>--}}
                                {{--                                    @endforeach--}}
                                {{--                                @endif--}}
                            </select>

                            <span class="input-group-addon"><i class="ace-icon glyphicon glyphicon-th"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="total-amount-header">
        <div class="row">
            <div class="col-md-12 bg-success ">
                <div class="col-md-6">

                    <input type="hidden" name="subtotal" id="all_total" class="all_sub_total" value="0">

                    <div style="  position: static; float: left; color: red">Total: BDT <span
                            class="total-price">0</span></div>

                    <div style="  position: static; float: right;color: red">

                        (With 5% vat*) All included Amount :BDT <span id="totalAmount">0</span>

                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </div>


    <section class="main-pos-body">
        <div class="row">
            <div class="col-md-12  page-content" >
                <div class=" m-1">
                    <div class="ui ui-widget ui-widget-content">
                        <div class="row">

                            <div class="col-md-6 ml-3 box mb-2 pos-cart-side">
                                <div class="table-responsive mt-1 p-0">
                                    <div class="search-any-product d-flex">
                                        <div class="input-group input-group-sm"
                                             style="border: 0px ; border-bottom: floralwhite " !importan>
                                            <span class="input-group-addon"><i
                                                    class="ace-icon fa fa-barcode"></i></span>
                                            <input type="text" class="form-control rounded-0 search-input" name="search"
                                                   value=""
                                                   id="searchInput" placeholder="Scan Your Barcode or SKU"
                                                   autocomplete="off">
                                        </div>
                                        <div class="dropdown-content live-load-content">
                                        </div>
                                    </div>
                                    <table class="table table-hover item-table card card-table"
                                           id="myTable">
                                        <thead style="background-color: aliceblue; border-bottom: 2px solid;">
                                        <tr>
                                            <th width="25%">Item</th>
                                            <th width="15%">SKU</th>
                                            <th width="15%">Unit</th>
                                            <th width="12%" class="text-end">U.Price</th>
                                            <th width="18%" class="text-center">Quantity</th>
                                            <th width="13%" class="text-center">Total</th>
                                            <th width="2%" class="text-center">delete
                                            {{--                                                <svg class="svg-inline--fa fa-times fa-w-11" aria-hidden="true"--}}
                                            {{--                                                     focusable="false" data-prefix="fas" data-icon="times" role="img"--}}
                                            {{--                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"--}}
                                            {{--                                                     data-fa-i2svg="">--}}
                                            {{--                                                    <path fill="currentColor"--}}
                                            {{--                                                          d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path>--}}
                                            {{--                                                </svg>--}}
                                            <!-- <i class="fas fa-times"></i> Font Awesome fontawesome.com -->
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody id="t-body" class="cart-items">

                                        <tr id="emptycart">
                                            <input type="hidden" name="zid[]">
                                            <td colspan="5" class="text-center p-5">
                                                <img src="{{asset('/')}}img/images.png" height="200" alt="emptycart">
                                            </td>
                                        </tr>
                                        </tbody>

                                    </table>

                                    {{--                                    <div style="  position: static;" class="total-price">Total: BDT 0</div>--}}
                                    {{--                                    <div style="  position: static;"   id="totalAmount">--}}


                                    {{--                                        All included Amount :BDT 0--}}

                                    {{--                                    </div>--}}

                                </div>

                            </div>


                            <div class="col-md-6 ml-3 box mb-2 pos-product-side" style="background-color: #F6F0F7 ">

                                @foreach($products as $key => $product)
                                    <a href="javascript:void(0)" class="card-info">

                                        <span id="searchResults"></span>
                                        <div id="product-list"></div>

                                    </a>


                                @endforeach


                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="footer-inner pos-footer">
        <div class=" text-right" style="text-decoration: none; background-color: #D6E8DB">
            <div class="row mt-2">
                <div class="col-md-2 ">
                    <ul class="right-0 list-unstyled">
                        <li>

                            Subtotal:BDT <span class="total-price">0</span>

                        </li>
                        <input type="hidden" name="xtotamt" class="total_amount_input">
                        <li>
                            Vat: <input type="number" id="vatRate" name="xdttax"
                                        style="width: 50px; height: 25px" placeholder="%" value="5"
                                        step="any">
                        </li>
                        <li class="discounted-price">
                            Discount:<input type="number" name="xdtdisc" id="extraDiscount"
                                            style="width: 50px; height: 25px" placeholder="%" step="any">

                        </li>

                    </ul>
                </div>
                <div class="col-md-2 ">
                    <ul class="list-unstyled">
                        <li><span style="float: left">Discount:</span><input type="number" name="xdiscamt"
                                                                             id="shippingCost"
                                                                             style="width: 110px; height: 25px "
                                                                             step="any">
                        </li>
                        {{--                                    <li>Shipping:<input type="number" name="shipping" id="shippingCost"--}}
                        {{--                                                        style="width: 77px; height: 25px ">--}}
                        {{--                                    </li>--}}
                        <li><span style="float: left">Method:</span>
                            <select name="xsltype" id="xsltype" style="height: 25px ; width: 110px;"
                                    onchange="showFields()" required>
                                <option value="">select</option>
                                <option value="Cash Sale" selected>cash_</option>
                                <option value="Card Sale">Card & Both</option>


                            </select>
                        </li>
                        <li><span style="float: left">Bank:</span>
                            <select name="xsalescat" id="xsalescat" style="height: 25px; width: 110px;">
                                <option value="">select</option>
                                <option value="CBL">CBL</option>
                                <option value="DBBL">DBBL</option>
                                <option value="MTBL">MTBL</option>
                                <option value="PBL">PBL</option>
                                <option value="UCB">UCB</option>
                            </select>
                            {{--                                        <input type="hidden" class="xsalescat" id="xsalescat" value="{{'xsalescat'}}">--}}
                        </li>
                    </ul>
                    {{--                                <i class="ace-icon fa "></i>--}}
                    {{--                                <i class="ace-icon fa "></i>--}}
                    {{--                                <i class="ace-icon fa fa-briefcase"></i>--}}
                    {{--                                <i class="ace-icon fa fa-credit-card"></i>--}}
                    {{--                                <i class="ace-icon fa fa-truck-fast"> </i>--}}
                    {{--                                <i class="ace-icon fa fa-folder"></i>--}}
                    {{--                                <i class="ace-icon fa fa-bell-o"></i>--}}
                    {{--                                <i class="ace-icon fa fa-gift">  </i>--}}
                    {{--                                <i class="ace-icon glyphicon glyphicon-tags"></i>--}}
                </div>
                <div class="col-md-2 ">
                    <ul class="list-unstyled" id="methodProperties">
                        <li><span style="float: left">Cash Amount:</span><input type="number" name="xmember"
                                                                                id="cashAmount"
                                                                                style="width: 80px; height: 25px "
                                                                                step="any">
                        </li>

                        <li><span style="float: left">Card Amount:</span><input type="number" name="xdtcomm"
                                                                                id="cardAmount"
                                                                                style="width: 80px; height: 25px "
                                                                                step="any">
                            <input type="hidden" class="xsalescat" id="xsalescat" value="{{'xsalescat'}}">

                        </li>

                        <li><span style="float: left">Last Number :</span>
                            <input type="number"
                                   name="xdocnum"
                                   id="xdocnum"
                                   style="width: 80px; height: 25px ; float: right ">


                        </li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="text-decoration-none list-unstyled">
                        {{--                                    <li id="totalAmount">Total:0</li>--}}

                        <li id="result">Pay:0</li>
                        <input type="hidden" name="xteam" class="pay_amount_input" required id="result">

                        <li id="dueResult">Due: <span class="due_amount">0</span></li>
                        <input type="hidden" name="due" class="due_amount" id="dueResult">

                        <li id="changeResult">Change: <span class="change_amount">0</span></li>
                        <input type="hidden" name="change" class="change_amount" id="changeResult">


                    </ul>
                </div>
                <div class="col-md-3 mt-2 right">
                    <div class="row ">
                        <div class="col-md-8 " >
                            @php
                                $currentDate = now()->year;
                            @endphp
                            @if ($currentDate !== 2024 )
                            <button type="submit" class=" btn-info rounded-0 mb-2" id="paymentButton"
                                    style="width: 100%">
                                SALE
                            </button>
                            @else
                                <button type="button"  class=" btn-info rounded-0 mb-2" id="paymentButton"
                                        style="width: 100%">
                                    SALE
                                </button>
                            @endif
                            {{--                                        <button id="paymentButton" onclick="handlePayment()" disabled>Pay Now</button>--}}

                            <div class="loader-container" id="loaderContainer" style="display: none;">
                                <img src="{{asset('/')}}img/ss.gif" style="height: 200px ; width: 200px"
                                     alt="Loading..." class="loader-image">
                            </div>
                        </div>
{{--                        <div class="col-md-6">--}}
{{--                            <button type="button" class=" btn-primary rounded-0 mb-2" id="button2"--}}
{{--                                    style="width: 100%">PAYMENT--}}
{{--                            </button>--}}

{{--                        </div>--}}
{{--                        <div class="col-md-6">--}}
{{--                            <button type="button" class="btn-warning   rounded-0 mb-2 mt-3 " id="button3"--}}
{{--                                    style="width: 100%"--}}
{{--                                    !importan>TRNSACT--}}
{{--                            </button>--}}

{{--                        </div>--}}
{{--                        <div class="col-md-6">--}}

{{--                            <button type="button" class=" btn-danger  rounded-0 my-2 mt-3 " id="button4"--}}
{{--                                    style="width: 100%"--}}
{{--                                    !importan>SAVE--}}
{{--                            </button>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>
@else
    @include('errors.404')
@endif
@include('Admin.includes.js')


{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}


<script>






    document.getElementById("cashAmount").addEventListener("input", function(event) {
        let inputValue = event.target.value;
        if (inputValue.includes('-')) {
            event.target.value = inputValue.replace('-', ''); // Remove minus sign
        }
    });
    document.getElementById("cardAmount").addEventListener("input", function(event) {
        let inputValue = event.target.value;
        if (inputValue.includes('-')) {
            event.target.value = inputValue.replace('-', ''); // Remove minus sign
        }
    });


    $(document).ready(function () {
        $('#paymentButton').prop('disabled', $('.due_amount').text() > 0);

        $('.due_amount').on('DOMSubtreeModified', function () {
            if (parseInt($('.due_amount').text()) > 0) {
                $('#paymentButton').prop('disabled', true);
            } else {
                $('#paymentButton').prop('disabled', false);
            }
        });
    });


    //    $(document).ready(function () {
//        $('#paymentButton').on('click', function () {
//            $('#loaderContainer').show();
//
//        });
//    });
$(document).ready(function () {
    $('#paymentButton').on('click', function () {
        $('#loaderContainer').show();


        setTimeout(function () {

            $('#loaderContainer').hide();
        }, 2000);
    });
});



    function addItem() {
        var productDiv = document.createElement("div");
        productDiv.textContent = "New Product";
        document.getElementById("product-list").appendChild(productDiv);
    }


    // $(document).ready(function () {


    // with all
    //--------------------------------------------------//
    //------shippingCost vatRate extraDiscount----------//
    //--------------------------------------------------//
    $('#vatRate, #shippingCost, #extraDiscount').on('keyup', calculateTotal);

    function calculateTotal() {
        let subtotal = 0;
        // var subtotal = Number($('.all_sub_total').val());
        var vatRate = parseFloat($('#vatRate').val() || 5);
        var shippingCost = parseFloat($('#shippingCost').val() || 0);
        var extraDiscount = parseFloat($('#extraDiscount').val() || 0);


        $('.cart-row').each(function(i, val){
            let unitPrice = $(val).closest('tr').find('.unit_price-input').val();

            let unitQty = $(val).closest('tr').find('.quantity-input').val();

            subtotal += unitQty*unitPrice;

            // $('.total-price').text(unitQty*unitPrice)
            // $('.totalAmount').text(0)
        })

        var vatAmount = subtotal * (vatRate / 100);
        var shippingAmount = shippingCost;
        var discountAmount = subtotal * (extraDiscount / 100);

        var totalAmount = subtotal + vatAmount - shippingAmount - discountAmount;

        $('#vatAmount').text('VAT Amount: ' + vatAmount.toFixed(2));
        $('#shippingAmount').text('Shipping Amount: ' + shippingAmount.toFixed(2));
        $('#discountAmount').text('Discount Amount: ' + discountAmount.toFixed(2));
        $('#totalAmount').text(totalAmount.toFixed(2));

        $('.total_amount_input').val(totalAmount);
        $('.total-price').text(subtotal)

        calculateSum()
    }

    //----------------------------------------------------//
    //-------shippingCost vatRate extraDiscount end-------//
    //----------------------------------------------------//


    //amount sum
    //----------------------------------------------------//
    //-------Function to calculate the sum----------------//
    //----------------------------------------------------//

    function calculateSum() {

        var cardAmount = parseFloat($('#cardAmount').val() || 0);
        var cashAmount = parseFloat($('#cashAmount').val() || 0);

        var sum = cardAmount + cashAmount;
        $("#result").text("Pay: " + sum);
        $(".pay_amount_input").val(sum);


        calculatePayAmount()
    }

    // Event listener for input field changes
    $("#cardAmount, #cashAmount").on("input", calculateSum);

    function calculatePayAmount() {
        let totalAmount = Number($('.total_amount_input').val());
        let payAmount = Number($('.pay_amount_input').val());

        if (totalAmount > payAmount) {
            $('.due_amount').text((totalAmount - payAmount).toFixed(2));
            $('.change_amount').text(0.00);
            $("due_amount").val((totalAmount - payAmount).toFixed(2));
        } else if (totalAmount < payAmount) {
            $('.change_amount').text((payAmount - totalAmount).toFixed(2));
            $('.due_amount').text(0.00);
            $('change_amount').val((payAmount - totalAmount).toFixed(2));

        } else {
            $('.change_amount').text(0.00);
            $('.due_amount').text(0.00);
        }

    }

    //--------------------------------------------------//
    //-------Function to calculate the sum end----------//
    //--------------------------------------------------//
    //pay change due end


    //------------------------------------------------//
    //------Function button action section------------//
    //------------------------------------------------//
    // button config
    $('#btn').click(function () {
        // Perform action for Button 1

        var vatRate = $('#vatRate').val();
        alert('VAT Rate: ' + vatRate);
    });

    $('#button2').click(function () {
        // Perform action for Button 2
        Swal.fire('Payment Section already show in this page  ')
    });

    $('#button3').click(function () {

    });

    $('#button4').click(function () {
        // Perform action for Button 4
        Swal.fire({
            title: 'Use the sale option !',
            showDenyButton: true,
            // showCancelButton: true,
            // confirmButtonText: 'Save',
            denyButtonText: `Don't save`,
        })
    });

    $("#searchInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#productTable tbody tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });


    //----------------------------------------------------//
    //------Function button action section end------------//
    //----------------------------------------------------//
    // button config end


    //--------------------------------------------------------//
    //------This branch section This section all branch-------//
    //--------show dropdown system now this system hide-------//
    //--------------------------------------------------------//
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

    //-----------------------------------------------------------//
    //------This branch section end, ajax route controller-------//
    //--------------option  check this and show------------------//
    //-----------------------------------------------------------//
    // This branch section end


    // this main option This working
    // in cart system all work it
    //---------------------------------------------------------------//
    //------This Card section , this section work product------------//
    //-----------seal product code product quantity------------------//
    //----------------controll price controll------------------------//
    //---------------------------------------------------------------//
    var cartItems = [];
    var total = 0;

    function calculateCartPrice(obj) {
        var productId = $(obj).data("product-id");
        var key = productId.toString();
        var selector = "#product-item-" + key;
        var productItem = $(selector);
        var zid = productItem.find(".zid").text().trim();
        var xstdcost = productItem.find(".xstdcost").text().trim();
        var xitem = productItem.find(".xitem").text().trim();
        var item = productItem.find(".name-product").text().trim();
        var sku = productItem.find(".xitem").text().trim();
        var unit = productItem.find(".unit").text().trim();
        var price = parseInt(productItem.find(".price-product").text().trim());
        var qty = parseInt(productItem.find(".qty").text().trim());
        var quantity = parseInt(productItem.find(".quantity").text().trim());
        var itemTotal = price * quantity;
        total += itemTotal;
        var cartItem = {
            zid: zid,
            xstdcost: xstdcost,
            item: item,
            xitem: xitem,
            sku: xitem,
            unit: unit,
            price: price,
            quantity: quantity,
            total: itemTotal,
            qty: qty
        };
        if (cartItems[key]) {
            cartQTy = cartItems[key].quantity;
            if (qty === 1) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Stock not available!',

                })
                return false;
            } else if (cartQTy === 0) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Stock not available!',

                })
                return false;
            } else if (qty <= cartQTy) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Stock not available!',

                })
                return false;
            } else {
                cartItems[key].quantity += quantity;
                cartItems[key].total += itemTotal;
            }
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
                                <input type="hidden" name="sku[]" value="${currentItem.xitem}">
                                <input type="hidden" name="xunitsel[]" value="${currentItem.unit}">
                                <input type="hidden" name="xrate[]" value="${currentItem.price}">
                                <input type="hidden" name="xlineamt[]" value="${currentItem.total}">
                                <input type="hidden" name="qty[]" value="${currentItem.qty}">
                                <td>${currentItem.item}</td>
                                <td>${currentItem.xitem}</td>
                                <td>${currentItem.unit}</td>
                                <td>
                                    <input type="hidden" value="${currentItem.price}" class="unit_price-input"/>
                                    ${currentItem.price}
                                </td>
                                <td class="quantity">
                                <input type="text" name="xqtyord[]" value="${currentItem.quantity}" class="quantity-input" onKeyup="updateItemQuantity(this)"/>
                                </td>
                                <td class="show-total-price">${currentItem.total}</td>

                                 <td>
                                     <button class="delete-btn">Delete</button>
                                </td>
                            </tr>
                        `);
            }
        }

        $(".total-price").empty();
        // $(".total-price").text(total);
        // countRows()
        $(".all_sub_total").val(total);

        var date = $('#current_date').val();

        calculateTotal();

    };

    //----Row delete  section------//
    $(document).ready(function () {
        $(".cart-items").on("click", ".delete-btn", function (event) {
            var row = $(this).closest('.cart-row');
            var key = row.attr("id").replace("cart-item-", "");
            var currentItemTotal = parseFloat(row.find('.show-total-price').text());
            total -= currentItemTotal;
            $(".total-price").text(total);
            $(".all_sub_total").val(total);
            if (cartItems[key]) {
                delete cartItems[key];
            }
            row.remove();
            calculateTotal();
            countRows();
            event.stopPropagation();
        });
    });


    // $(document).on("click", ".cart-row", function () {
    //     var rowId = $(this).attr("id");
    //     var key = rowId.replace("cart-item-", "");
    //
    //     if (cartItems.hasOwnProperty(key)) {
    //         var currentItem = cartItems[key];
    //         total -= currentItem.total;
    //         delete cartItems[key];
    //     }
    //
    //     $(this).remove();
    //
    //     $(".total-price").text(total);
    //     $('.show-total-price').text(total);
    //     $('.all_sub_total').val(total);
    //
    //     calculateTotal();
    //
    //     event.stopPropagation();
    //
    // })


    $(document).on("click", ".quantity-input", function (event) {      //----input section not clickble------//
        event.stopPropagation();

    });


    //----Calculate input quantity section------//
    function updateItemQuantity(obj) {

        let quantity = $(obj).val();
        let price = $(obj).closest('tr').find('.unit_price-input').val();
        let totalPrice = parseInt(price) * parseInt(quantity != '' ? quantity : 0);

        $(obj).closest('tr').find('.show-total-price').text(totalPrice);

        let initialSubtotal = 0;

        $(".show-total-price").each(function (price) {
            let productPrice = $(this).text();
            initialSubtotal += Number(productPrice);
        });


        $('.all_sub_total').val(initialSubtotal);
        $('.total-price').text(initialSubtotal);

        calculateTotal();
    }

    //------------------------------------------------//
    //------Cart  section end-------------------------//
    //------------------------------------------------//
    //----card section end This cart section end------//
    //--------in cart system all work it--------------//


    //-----------------------------------------------------------//
    //------This Section is product show when user search--------//
    //----------branch wise select then show this group----------//
    //-------------product , ajax route controller---------------//
    //--------------option  check this and show------------------//
    //-----------------------------------------------------------//
    // This product show section
    $('#category_select').change(function () {
        var category_id = $(this).val();
        var branch_id = $('#branch_select').val();


        $.ajax({
            url: '/fetchProducts-details/' + category_id + '/' + branch_id,
            type: 'get',
            success: (result) => {

                $('#product-list').empty();
                result.$product.forEach(function (product, key) {
                    var productHtml = `
                     <div >
                        <div class="col-xs-2 col-sm-2 col-md-4 overflow box-shadu" style="color: #1f2937">
                            <div class="search-thumbnail">
                                <div class="pl-3 thumbnail search-thumbnail">
                                    <div class="card gradient-1 product-item" onclick="calculateCartPrice(this)" style="background-color:#D2D881" id="product-item-${product.xitem}" data-product-id="${product.xitem}">
                                    <h5 class="card-header " style="padding: 5px; margin-top:0px" id="heading"data-milliseconds="">${product.xdesc.substring(0, 17)}..</h5>
                                    <h5 class="card-header name-product" style="padding: 5px; margin-top:0px ;display:none" id="heading"data-milliseconds="">${product.xdesc}</h5>
                                        <span><div class="sku" style="display:none">${product.xcitem}</div></span>
                                        <span><div class="xitem" style="display:none">${product.xitem}</div></span>
                                        <span><div class="unit" style="display:none">${product.xunitiss}</div></span>
                                        <span><div class="zid" style="display:none">${product.zid}</div></span>
                                        <span><div class="xstdcost" style="display:none">${product.xstdcost}</div></span>
                                        <div class="card-body p-2">
                                            <div class="d-inline-block">
                                                <h2 class= style="padding: 5px">${product.xstdprice}</h2>
                                                <p><span class="pull-right label label-grey quantity" >1</span></p>
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

    window.addEventListener('keypress', function (e) {
        if (e.key === 'Enter') {
            e.preventDefault();
            console.log('Prevent Default on Enter')
        }
    });

    $(document).ready(function(){
        $('#searchInput').focus();
    })

    //------------------------------------------------//
    //-----This section product search section--------//
    //-------use ajax or apend this html code---------//
    //------------------------------------------------//
    // search optinon
    $('#searchInput').keyup(function (e) {
        var searchInput = $(this).val();

        $.ajax({
            url: "{{ route('productsSearch') }}",
            type: "GET",
            data: {search: searchInput},
            dataType: "json",
            success: function (response) {
                if(response?.length === 1 && e.keyCode === 13){
                    displaySearchResults(response);
                    $('.product-item').trigger('click')

                    $('#searchInput').val('')
                    return ;
                }
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
            <div class="col-sm-4  box-shadu" >
                <div class="search-thumbnail">
                    <div>
                        <div class="card gradient-1 product-item" onclick="calculateCartPrice(this)" style="background-color: #d3eaf1; border: none; border-radius: 10px;" id="product-item-${product.xitem}" data-product-id="${product.xitem}">
                           <h5 class="card-header " style="padding: 5px; margin-top: 0px; background-color: #1f2937; color: #fff; border-radius: 10px 10px 0 0;" id="heading"data-milliseconds="">${product.xdesc.substring(0, 17)}..</h5>
                                    <h5 class="card-header name-product" style="padding: 5px; margin-top:0px ;display:none" id="heading"data-milliseconds="">${product.xdesc}</h5>
                            <span><div class="sku" style="display:none">${product.xcitem}</div></span>
                            <span><h6 class="pull-right xitem"  >${product.xitem}</h6></span>
                            <span><div class="unit" style="display:none">${product.xunitiss}</div></span>
                            <span><div class="zid" style="display:none">${product.zid}</div></span>
                            <span><div class="xstdcost" style="display:none">${product.xstdcost}</div></span>
                            <div class="card-body p-2">
                                <div class="d-inline-block">
                                    <h2 class="text-white price-product" style="padding: 5px; color: #1f2937;">${product.xstdprice}</h2>
                                    <p><span class="pull-right label label-grey quantity"style="display:none">1</span></p>
                                    <p><span class="pull-right label label-grey qty" >${product.quantity_total}</span></p>
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

    // });


    //------------------------------------------------//
    //-----This section product search section End----//
    //------------------------------------------------//
    // search optinon end

    //---------------------------------------------------//
    //-----Table search section this section-------------//
    //--------search and show table data-----------------//
    //---------------------------------------------------//
    $(document).ready(function () {
        var productItemsContainer = $(".product-items");

        $("#search-input").on("keyup", function () {
            var searchTerm = $(this).val().toLowerCase();

            var filteredItems = productItemsContainer.find(".product-item").filter(function () {
                var itemText = $(this).text().toLowerCase();
                return itemText.indexOf(searchTerm) !== -1;
            });

            productItemsContainer.find(".product-item").hide();
            filteredItems.show();
        });


    });


    //-----------------------------------------------------//
    //-------This is seal controller when pay cash---------//
    //---------then cash pay requerd this like all---------//
    //-----------------------------------------------------//
    function showFields() {
        var selectElement = document.getElementById("xsltype");
        var cashAmountInput = document.getElementById("cashAmount");
        var cardAmountInput = document.getElementById("cardAmount");
        // var xsalescatInput = document.getElementById("xsalescat");
        var docNumInput = document.getElementById("xdocnum");
        var xsalescatInput = document.getElementById("xsalescat");
        // var xsalescatInput  = $('#xsalescat').val();

        if (selectElement.value === "Cash Sale") {


            cashAmountInput.required = true;
            cardAmountInput.required = false;
            docNumInput.readOnly = true;
            // xsalescatInput.readOnly = true;
            cardAmountInput.readOnly = true;
            xsalescatInput.required = false;
            cardAmountInput.style.visibility = "block";
            docNumInput.style.display = "block";
        } else if (selectElement.value === "Card Sale") {


            cashAmountInput.required = false;
            cardAmountInput.required = true;
            cardAmountInput.readOnly = false;
            // xsalescatInput.readOnly = false;
            docNumInput.readOnly = false;
            docNumInput.required = true;
            xsalescatInput.required = true;
        }

    }

    showFields();


</script>


</body>
</html>

