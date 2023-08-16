@extends('Admin.master')
@section('title','return')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/chosen.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}"/>
    <style>
        .table {
            margin-bottom: 0 !important;
        }

        body {
            counter-reset: section;
            /* Set a counter named 'section', and its initial value is 0. */
        }

        .count:before {
            counter-increment: section;
            content: counter(section);
        }

        select:invalid {
            height: 0px !important;
            opacity: 0 !important;
            position: absolute !important;
            display: flex !important;
        }

        select:invalid[multiple] {
            margin-top: 15px !important;
        }
    </style>
@endsection
@section('body')
    <section class="py-5">
        <div class="container">


            <div class="row">

                <div class="col-sm-10">
                    <div class="widget-box">
                        <div class="widget-header">
                            {{--                    <h4 class="widget-title"> @yield('page-header')</h4>--}}


                            <span class="widget-toolbar">
                    <a href="">
                        <i class="ace-icon fa fa-list-alt"></i> Project List
                    </a>
                </span>


                        </div>

                        <div class="widget-body">
                            <div class="widget-main">
                                <form class="form-horizontal" action="{{route('return.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-sm-8 mt-5">
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label align-right"
                                                           for="form-field-1"> Date: </label>

                                                    <div class="input-group input-group-sm">
                                                        <span class="input-group-addon"><i
                                                                class="menu-icon fa fa-calendar"></i></span>
                                                        <input type="date" name="xdatecom" id="current_date"
                                                               value="{{date('Y-m-d')}}"
                                                               class="form-control " placeholder="" readonly/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" style="color: red">WareHouse:<sup>*</sup> </label>
                                                <div class="col-sm-8 mt-5">
                                                    <div class="input-group input-group-sm">
                                                        <span class="input-group-addon"><i
                                                                class="ace-icon glyphicon glyphicon-home"></i></span>
                                                        <select class="form-control rounded-0" name="xwh">
                                                            <option value="Fixit Gulshan" selected="">Fixit Gulshan</option>
                                                            <option value="Damage Warehouse">Damage Warehouse</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-sm-8 mt-5">
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label align-right"
                                                           for="form-field-1">Reference: </label>

                                                    <div class="input-group input-group-sm">
                                                        <span class="input-group-addon"><i
                                                                class="ace-icon glyphicon glyphicon-user"></i></span>
                                                        <input type="text" name="xdate" id="current_date"
                                                               class="form-control " placeholder=""/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" style="color: red">Project:<sup>*</sup> </label>
                                                <div class="col-sm-8 mt-5">
                                                    <div class="input-group input-group-sm">
                                                        <span class="input-group-addon"><i
                                                                class="ace-icon fa fa-cogs"></i></span>
                                                        <select class="form-control rounded-0" name="xproj" required>
                                                            <option value="HMBR FIXIT GULSHAN" selected="">HMBR FIXIT GULSHAN</option>
                                                            <option value=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="zid[]" value="100001">


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-sm-8 mt-5">
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label align-right"
                                                           for="form-field-1"> Note: </label>

                                                    <div class="input-group input-group-sm">
                                                        <span class="input-group-addon"><i
                                                                class="ace-icon glyphicon glyphicon-plus"></i></span>
                                                        <textarea name="xrem" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-sm-6 control-label">Transaction Prefix: </label>
                                                <div class="col-sm-4 mt-5">
                                                    <div class="input-group input-group-sm">
                                                        <span class="input-group-addon"><i
                                                                class="ace-icon glyphicon glyphicon-backward"></i></span>
                                                        <input type="text" name="xtrnimf" id="current_date"
                                                               class="form-control " value="SRE-" readonly/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-sm-8 mt-5">
                                                     <div class="form-group">
                                                             <label class="col-sm-6 control-label align-right" for="form-field-1">Product code: </label>
                                                                 <div class="input-group input-group-sm">
                                                                 <span class="input-group-addon"><i class="ace-icon glyphicon glyphicon-plus"></i></span>
                                                          <input type="text" id="productSearch" class="form-control" placeholder="Search Product">
                                                      </div>
                                                 </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-sm-6 control-label">Trm Status : </label>
                                                <div class="col-sm-4 mt-5">
                                                    <div class="input-group input-group-sm">
                                                        {{--                                                <span class="input-group-addon"><i class="ace-icon glyphicon glyphicon-backward"></i></span>--}}
                                                        <input type="text" name="xstatustrn" id="current_date"
                                                               class="form-control " value="1-Open" readonly/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


{{--                                    <div class="row">--}}
{{--                                        <div class="col-sm-12 col-sm-offset-0">--}}
{{--                                            <h3 class="header smaller lighter blue">Return Selection</h3>--}}
{{--                                            <table id="myTable" class="table table-bordered order-list">--}}
{{--                                                <thead>--}}
{{--                                                <tr>--}}
{{--                                                    <td width="40px;">SL.</td>--}}
{{--                                                    <td width="45%">product code<span class="text-danger">*</span></td>--}}
{{--                                                    <td class="text-left" width="25%">Quantity</td>--}}
{{--                                                    <td class="text-right" width="15%">Market Price</td>--}}
{{--                                                    <td class="text-right" width="15%">Price</td>--}}
{{--                                                    <td class="text-right"></td>--}}
{{--                                                </tr>--}}
{{--                                                </thead>--}}
{{--                                                <tbody>--}}
{{--                                                <tr>--}}
{{--                                                    <td class="count"></td>--}}
{{--                                                    <td>--}}
{{--                                                        <div class="">--}}
{{--                                                            <input type="text" name="xdate[]" id="current_date"--}}
{{--                                                                   class="form-control " placeholder=""/>--}}


{{--                                                        </div>--}}
{{--                                                    </td>--}}
{{--                                                    <td>--}}
{{--                                                        <div class="">--}}
{{--                                                            <input type="number" name="billing_type[]"--}}
{{--                                                                   class="form-control billing_type" placeholder=""/>--}}
{{--                                                        </div>--}}

{{--                                                        <br>--}}


{{--                                                    </td>--}}
{{--                                                    <td>--}}
{{--                                                        <input required name="subscriptionfee[]" type="number"--}}
{{--                                                               class="form-control input-sm text-right calculate-billing subscriptionfee"/>--}}

{{--                                                    </td>--}}
{{--                                                    <td>--}}
{{--                                                        <input required readonly name="price[]" type="text"--}}
{{--                                                               class="form-control totalprice input-sm text-right"/>--}}

{{--                                                    </td>--}}
{{--                                                    <td class="text-center"><a class="btn btn-sm btn-danger"--}}
{{--                                                                               disabled="disabled"><i--}}
{{--                                                                class="fa fa-trash"></i></a></td>--}}
{{--                                                </tr>--}}
{{--                                                </tbody>--}}
{{--                                                <tfoot>--}}
{{--                                                <tr>--}}
{{--                                                    <td colspan="4"></td>--}}
{{--                                                    <td><input name="total_amount"--}}
{{--                                                               class="form-control grandtotal text-right" readonly></td>--}}
{{--                                                    <td>--}}
{{--                                                        <button type="button"--}}
{{--                                                                class="btn btn-minier btn-success pull-right"--}}
{{--                                                                id="addrow">--}}
{{--                                                            + Add More--}}
{{--                                                        </button>--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                                </tfoot>--}}
{{--                                            </table>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}



                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th width="20%">Product Code</th>
                                                    <th width="20%">Product Name</th>
{{--                                                    <th width="20%">Product Price</th>--}}
                                                    <th width="15%">Quantity</th>
                                                    <th width="15%">Market Price</th>
                                                    <th width="15%">Unit Cost</th>
                                                    <th width="10%"></th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="name-append">
{{--                                                            <select class="form-control select-product  select2 mr-0" style="width: 100%">--}}
{{--                                                                <option value="">Select</option>--}}
{{--                                                                @if($products)--}}
{{--                                                                    @foreach($products as $key => $product)--}}
{{--                                                                        <option value=""--}}
{{--                                                                                data-product-code="{{ $product->xitem }}">--}}
{{--                                                                            {{ $product->xitem }}--}}
{{--                                                                        </option>--}}
{{--                                                                    @endforeach--}}
{{--                                                                @endif--}}
{{--                                                            </select>--}}

{{--                                                            <input type="text" id="productSearch" class="form-control" placeholder="Search Product">--}}

                                                            <select class="form-control select-product select2 mr-0" style="width: 100%" id="name-append">
                                                                <option value="">Select</option>

                                                                @if($products)
                                                                    @foreach($products as $key => $product)

                                                                        <option value="{{ $product->xitem }}"

                                                                                data-product-code="{{ $product->xitem }}"
                                                                                data-product-name="{{$product->xdesc}}"
                                                                                data-product-price="{{$product->xstdprice}}"

                                                                        >
                                                                            {{ $product->xitem }}
                                                                        </option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="barcode-append" data-info-type="name"></div>
{{--                                                        <select class="barcode-append form-control select2 mr-0" style="width: 100%">--}}
{{--                                                            <option value="">Select</option>--}}
{{--                                                            </option>--}}
{{--                                                        </select>--}}
                                                    </td>
{{--                                                    <td>--}}
{{--                                                        <div class="barcode-append" data-info-type="name"></div>--}}


{{--                                                    </td>--}}

                                                    <td>
                                                        <input  class="quantity form-control" onkeypress="event.charCode >= 46 && event.charCode <= 57" type="text" value="">
                                                    </td>

                                                    <td>
                                                        <input  class="price form-control" onkeypress="event.charCode >= 46 && event.charCode <= 57" type="text" value="">
                                                    </td>
                                                    <td class="total-price" >
                                                        <input type="text"  class="total-price  form-control"   value="">
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-primary" onclick="insertNewItem()"><i class="fa fa-plus"></i> Add</button>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <hr>
                                    <!-- product display section -->
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>


                                                    <th width="3%">Sl.</th>

                                                    <th>Product Name</th>
                                                    <th>Product Code</th>
{{--                                                    <th></th>--}}
                                                    <th width="">Product Qty</th>
                                                    <th width="">Market Price</th>
                                                    <th width="">Subtotal</th>
                                                    <th width="">Action</th>
                                                </tr>
                                                </thead>

                                                <tbody class="product-display">

                                                </tbody>

                                                <tfoot>
                                                <tr>
                                                    <th colspan="5"><strong>Total: </strong></th>
                                                    <th class="grand-total text-center"></th>
                                                    <th></th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>












{{--                                    ///////////////////////////////////////////////--}}

                                    <div class="form-group" style="float: right; margin-top: 30px">
                                        <label for="inputError"
                                               class="col-xs-12 col-sm-3 col-md-3 control-label"></label>
                                        <div class="col-xs-12 col-sm-12 float-right">
                                            <button class="btn btn-xs btn-success" type="submit"><i
                                                    class="ace-icon glyphicon glyphicon-repeat"></i> Return
                                            </button>
{{--                                            <button class="btn btn-xs btn-gray" type="Reset"><i--}}
{{--                                                    class="fa fa-refresh"></i> Reset--}}
{{--                                            </button>--}}
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')

    <script src="{{ asset('assets/js/jquery.maskedinput.min.js') }}"></script>
    <script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/custom_js/date-picker.js') }}"></script>
    <script src="{{ asset('assets/custom_js/chosen-box.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <!--Drag and drop-->
    <script type="text/javascript">



        document.addEventListener('DOMContentLoaded', function () {
            const selectProduct = document.querySelector('.select-product');
            const productSearch = document.getElementById('productSearch');

            productSearch.addEventListener('input', function () {
                const searchValue = this.value.toLowerCase();
                let url = '/searchXitem';
                let allData = {SearchValue: searchValue};
                axios.post(url, allData).then(function (response) {
                    var productsSelect = document.getElementById('name-append');
                    var selectOptions = '<select class="form-control select-product select2 mr-0" style="width: 100%">' +
                        '    <option value="">Select</option>';

                    response.data.forEach(function(product) {
                        selectOptions += '<option value="' + product.xitem + '" ' +
                            '    data-product-code="' + product.xitem + '"' +
                            '    data-product-name="' + product.xdesc + '"' +
                            '    data-product-price="' + product.xstdprice + '"' +
                            '>' + product.xitem + '</option>';
                    });

                    selectOptions += '</select>';

                    productsSelect.innerHTML = selectOptions;
                }).catch(function (error) {
                    alert('Error...')
                })
                // Array.from(selectProduct.options).forEach(option => {
                //     console.log(searchValue);
                //     if (option.value.toLowerCase().includes(searchValue)) {
                //         option.style.display = 'block';
                //     } else {
                //         option.style.display = 'none';
                //     }
                // });
            });




            $('.select-product').on('select2:select', function (e) {
                var selectedOption = e.params.data;
                var productName = selectedOption['element']['dataset']['productName'];
                var productPrice = selectedOption['element']['dataset']['productPrice'];
                var $productInfoName = $(this).closest('tr').find('.product-info[data-info-type="name"]');
                var $productInfoPrice = $(this).closest('tr').find('.product-info[data-info-type="price"]');
                $productInfoName.text('Product Name: ' + productName);
                $productInfoPrice.text('Product Price: ' + productPrice);
            });


            $('.quantity, .price').on('input', function() {
                calculateTotalPrice($(this).closest('tr'));
            });


        });



        $('.select-product').change(function () {
            let productCost = $(this).find('option:selected').data('product-price')
            let barcodeIn = $(this).find('option:selected').data('product-name')
            console.log(productCost)

            $('.select-unit-price').val(productCost)
            let barcodeAppend = "\n" +
                "    <input class=\"select-name product-name-selected form-control\" type=\"text\" value=\"" + barcodeIn + "\">\n" +
                "";
            $('.barcode-append').html(barcodeAppend);

            $('.select-unit-barcodeIn').val(barcodeIn)
            $('.select-quantity').val(1).focus()
            // $('.select-product').select2()
        })

        function calculateTotalPrice(row) {
            var quantity = parseFloat(row.find('.quantity').val()) || 0;
            var price = parseFloat(row.find('.price').val()) || 0;

            var totalPrice = quantity * price;
            console.log(totalPrice)
            row.find('.total-price').text( totalPrice.toFixed(2));
        }


        function insertNewItem() {
            let selected_item = $('.select-product').find('option:selected');
            let selected_bercode = $('.select-barcode').find('option:selected');
            let productId = selected_item.val()
            let productName = selected_item.data('product-name')
            let productCode = selected_item.data('product-code')
            let productBarcodes = selected_bercode.data('product-price')

            console.log(productBarcodes)

            let productCost = $('.price').val()
            let producSelectCode = $('.select-unit-code').val()
            let productBarcodeSelected = $('.product-barcode-selected').val()
            let productNameSelected = $('.product-name-selected').val()

            let quantity = $('.quantity').val()

            if (productId != '' && quantity != '') {
                let tr =


                    '<tr>' +
                    '<td class="item-serial"></td>' +
                    '<td>' + productName  + '<input type="hidden" name="product_ids[]" class="product-id" value="'+productName+'"></td>' +
                    '<td>' + productCode  + '<input type="hidden" name="xitem[]" value="' + productId + '"></td>' +
                    // '<td>' +  productBarcodes + '<input type="hidden" name="xstdprice[]" value="'+productBarcodes+'"></td>' +
                    '<td><input type="text" readonly name="xqtyord[]" class="product-quantity form-control text-center" value="' + quantity + '"></td>' +
                    '<td><input type="text" readonly name="xrate[]" class="product-price form-control text-center" value="' + productCost + '"></td>' +


                    '<td><input type="text" readonly name="xlineamt[]" class="product-row-subtotal form-control text-center" value="' + (productCost * quantity) + '"></td>' +
                    '<td class="text-right">' +
                    '<button type="button" class="btn btn-sm btn-danger" onclick="removeRow(this)"><i class="fa fa-trash"></i></button>'
                '</td>' +
                '</tr>' +


                $('.product-display').append(tr)

                setItemSerial()

                // disable selected option
                $('.select-product option[value=' + productId + ']').prop("disabled", true);
                $('.quantity').val('');
                $('.select-product').val('');
                // $('.select-product').select2('focus');
                $('.select-product').select2();
            } else {
                alert('Select product and fill quantity')
            }
        }

        function setItemSerial() {
            let total = 0
            $('.item-serial').each(function (index) {
                $(this).text(index + 1)
                total += parseFloat($(this).closest('tr').find('.product-row-subtotal').val())
            })
            $('.grand-total').text(total)
        }

        function removeRow(object) {
            let productId = $(object).closest('tr').find('.product-id').val();
            $('.select-product option[value="' + productId + '"]').prop("disabled", false);
            $(object).closest('tr').remove();
            setItemSerial();
        }









        // $('table tr:has(td):not(:last)').each(function() {
        //     $('.show-div').show();
        // });


        $(document).on("keyup", ".calculate-billing", function() {
            calculateRowMultiply()
            calculateAmount()
        });

        function calculateRowMultiply() {
            $('table tr:has(td):not(:last)').each(function() {
                let totalprice = 0
                let subscriptionfee = $(this).find('.subscriptionfee').val()
                let billing_type = $(this).find('.billing_type').val()
                console.log(subscriptionfee)
                console.log(billing_type)


                    totalprice = subscriptionfee * billing_type

                $(this).find('.totalprice').val(totalprice);
            });


        }



    </script>
@endsection
