@extends('Admin.master')
@section('title','return')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/chosen.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}"/>
    <style>
        #searchResults {
            border: 1px solid #ccc;
            max-height: 200px;
            overflow-y: auto;
            position: absolute;
            width: 50%;
            background-color: white;
            z-index: 1;margin-top: 20px;
        }

        .resultItem {
            padding: 8px;
            border-bottom: 1px solid #ccc;
            cursor: pointer;
        }
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


    @if ($errors->any())
        <div class="alert alert-danger error">
            <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session()->get('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Billing has been already generated !',
                    text: 'please another try !',
                    // footer: '<a href="">Why do I have this issue?</a>'
                })
            });
        </script>


        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>
            <strong>
                <i class="ace-icon fa fa-times"></i>
                Error!
            </strong>
            {{ "Product return can not successfully ! " . session()->get('not Success!') }}
        </div>
    @endif




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
                                                        <textarea name="xrem" class="form-control" required ></textarea>
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

{{--                                                                    <div id="searchResults"></div>--}}
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

                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th width="20%">Product Code</th>
                                                    <th width="20%">Product Name</th>
                                                    <th width="20%">Product Price</th>
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
                                                            <select class="form-control select-product select2 mr-0" style="width: 100%" id="name-append">
                                                                <option value="">Select</option>
                                                                @if($products)
                                                                    @foreach($products as $key => $product)

                                                                        <option value="{{ $product->xitem }}"
                                                                                data-product-code="{{ $product->xitem }}"
                                                                                data-product-name="{{$product->xdesc}}"
                                                                                data-product-price="{{$product->xstdcost}}"
                                                                                data-product-unite="{{$product->xunitiss}}"
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
                                                    </td>
{{--                                                    <td>--}}
{{--                                                        <div class="sub-row-total" data-info-type="name"></div>--}}
{{--                                                    </td>--}}
                                                    <td>
                                                        <div class="price-append" data-info-type="name"></div>
                                                    </td>
                                                    <td>
                                                        <input  class="quantity form-control" onkeypress="event.charCode >= 46 && event.charCode <= 57" type="text" value=""  >
                                                    </td>

                                                    <td>
                                                        <input  class="price form-control" onkeypress="event.charCode >= 46 && event.charCode <= 57" type="text" value="" >
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
                                    <input type="hidden" class="sub-row-total" name="totalval">
                                    <input type="hidden" class="lime-total" name="totaalime">
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
                                                    <th>Product price</th>
                                                    <th>Value</th>
                                                    <th> unite</th>
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
                                                    <th colspan="8"><strong>Total: </strong></th>
                                                    <th class="grand-total text-center"></th>
                                                    <th></th>
                                                </tr>
                                                </tfoot>
                                            </table>

                                            <div class="form-group" style="float: right; margin-top: 30px">
                                                <label for="inputError"
                                                       class="col-xs-12 col-sm-3 col-md-3 control-label"></label>
                                                <div class="col-xs-12 col-sm-12 float-right">
                                                    <button class="btn btn-xs btn-success" type="submit"><i
                                                            class="ace-icon glyphicon glyphicon-repeat"></i> Return
                                                    </button>
                                                </div>
                                            </div>


                                        </div>
                                    </div>












{{--                                    ///////////////////////////////////////////////--}}

{{--                                    <div class="form-group" style="float: right; margin-top: 30px">--}}
{{--                                        <label for="inputError"--}}
{{--                                               class="col-xs-12 col-sm-3 col-md-3 control-label"></label>--}}
{{--                                        <div class="col-xs-12 col-sm-12 float-right">--}}
{{--                                            <button class="btn btn-xs btn-success" type="submit"><i--}}
{{--                                                    class="ace-icon glyphicon glyphicon-repeat"></i> Return--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
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


        // const productSearchInput = document.getElementById('productSearch');
        // const searchResultsDiv = document.getElementById('searchResults');
        //
        // productSearchInput.addEventListener('input', function() {
        //     const searchTerm = productSearchInput.value.trim();
        //     searchResultsDiv.innerHTML = ''; // Clear existing results
        //
        //     if (searchTerm.length > 0) {
        //         // Simulated data, replace with your actual data source
        //         const fakeData = [
        //             'Product 1',
        //             'Product 2',
        //             'Product 3'
        //         ];
        //
        //         const filteredData = fakeData.filter(product => product.toLowerCase().includes(searchTerm.toLowerCase()));
        //
        //         filteredData.forEach(product => {
        //             const resultItem = document.createElement('div');
        //             resultItem.textContent = product;
        //             resultItem.classList.add('resultItem');
        //
        //             resultItem.addEventListener('click', function() {
        //                 productSearchInput.value = product;
        //                 searchResultsDiv.innerHTML = ''; // Clear the results after selection
        //             });
        //
        //             searchResultsDiv.appendChild(resultItem);
        //         });
        //     }
        // });
        //
        // // Close the search results when clicking outside
        // document.addEventListener('click', function(event) {
        //     if (!searchResultsDiv.contains(event.target) && event.target !== productSearchInput) {
        //         searchResultsDiv.innerHTML = '';
        //     }
        // });

                            //---------------------------------//
                           //-------ajax search section-------//
                          //---------------------------------//
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
                            '    data-product-price="' + product.xstdcost + '"' +
                            '    data-product-unite="' + product.xunitiss + '"' +
                            '>' + product.xitem + '</option>';
                    });
                    selectOptions += '</select>';
                    productsSelect.innerHTML = selectOptions;


                    const productSearchInput = document.getElementById('productSearch');
                    const searchResultsDiv = document.getElementById('searchResults');

                    productSearchInput.addEventListener('input', function() {
                        const searchTerm = productSearchInput.value.trim();
                        searchResultsDiv.innerHTML = ''; // Clear existing results

                        if (searchTerm.length > 0) {
                            let fakeData = [
                                'Product 1',
                                'Product 2',
                                'Product 3'
                            ]; fakeData.push('Pro $');

                            for (let i=0; response.data.length; i++){
                                fakeData.push(response.data)
                            }


                            const filteredData = fakeData.filter(product => product.toLowerCase().includes(searchTerm.toLowerCase()));

                            filteredData.forEach(product => {
                                const resultItem = document.createElement('div');
                                resultItem.textContent = product;
                                resultItem.classList.add('resultItem');

                                resultItem.addEventListener('click', function() {
                                    productSearchInput.value = product;
                                    searchResultsDiv.innerHTML = ''; // Clear the results after selection
                                });

                                searchResultsDiv.appendChild(resultItem);
                            });
                        }
                    });

                    // Close the search results when clicking outside
                    document.addEventListener('click', function(event) {
                        if (!searchResultsDiv.contains(event.target) && event.target !== productSearchInput) {
                            searchResultsDiv.innerHTML = '';
                        }
                    });

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
                $('.select-product').select2()
            });

              //---------------------------------//
             //-----ajax search section End-----//
            //---------------------------------//



              //-------------------------------------------------------//
             //-----Product price and name show but it was hidden-----//
            //-------------------------------------------------------//
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


                              //-------------------------------------------------------//
                             //-----Product name show barcode search------------------//
                            //-------------------------------------------------------//
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



                              //--------------------------------------------------------//
                             //-----Product price show barcode search------------------//
                            // -------------------------------------------------------//

        $('.select-product').change(function () {
            let productCost = $(this).find('option:selected').data('product-price')
            let barcodeIn = $(this).find('option:selected').data('product-price')
            console.log(productCost)

            $('.select-unit-price').val(productCost)
            let priceAppend = "\n" +
                "    <input class=\"select-name product-price-selected form-control\" type=\"text\" value=\"" + barcodeIn + "\">\n" +
                "";
            $('.price-append').html(priceAppend);

            $('.select-unit-barcodeIn').val(barcodeIn)
            $('.select-quantity').val(1).focus()
            // $('.select-product').select2()
        })






                              //-------------------------------------------------------//
                             //----------------Product  show   search-----------------//
                            //-------------------------------------------------------//
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
            let productBarcodes = selected_item.data('product-price')
            let productunite = selected_item.data('product-unite')

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
                    '<td>' +  productBarcodes + '<input type="hidden" name="xstdcost[]" value="'+productBarcodes+'"></td>' +
                    '<td><input type="text" readonly name="xlin[]" class="product-row-sub form-control text-center" value="' + (productBarcodes * quantity) + '"></td>' +

                    '<td>' +  productunite + '<input type="hidden"  name="xunit[]" value="'+productunite+'"></td>' +
                    '<td><input type="text" readonly name="xqtyord[]" class="product-quantity form-control text-center" value="' + quantity + '"></td>' +
                    '<td><input type="text" readonly name="xrate[]" class="product-price form-control text-center" value="' + productCost + '"></td>' +


                    '<td><input type="text" readonly name="xlineamt[]" class="product-row-subtotal form-control text-center" value="' + (productCost * quantity) + '"></td>' +
                    '<td class="text-right">' +
                    '<button type="button" class="btn btn-sm btn-danger" onclick="removeRow(this)"><i class="fa fa-trash"></i></button>'
                '</td>' +
                '</tr>' +


                $('.product-display').append(tr)

                setItemSerial()

                setItemSeri()

                setItemSeriaal()

                // disable selected option
                $('.select-product option[value=' + productId + ']').prop("disabled", true);
                $('.quantity').val('');
                $('.select-product').val('');
                // $('.select-product').select2('focus');
                $('.select-product').select2();
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Select product and fill quantity!',
                    // text: 'Please select a product and fill in the quantity.',
                    // footer: '<a href="">Why do I have this issue?</a>'
                });
                // You can also keep the original alert message if desired
                // alert('Select product and fill quantity');

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

                            function setItemSeriaal() {
                                let total = 0
                                $('.item-serial').each(function (index) {
                                    $(this).text(index + 1)
                                    total += parseFloat($(this).closest('tr').find('.product-row-subtotal').val())
                                })
                                $('.lime-total').val(total)


                            }



                            function setItemSeri() {
                                let total = 0
                                $('.item-serial').each(function (index) {
                                    $(this).text(index + 1)
                                    total += parseFloat($(this).closest('tr').find('.product-row-sub').val())
                                })
                                $('.sub-row-total').val(total)
                            }




        function removeRow(object) {
            let productId = $(object).closest('tr').find('.product-id').val();
            $('.select-product option[value="' + productId + '"]').prop("disabled", false);
            $(object).closest('tr').remove();
            setItemSerial();
        }





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
