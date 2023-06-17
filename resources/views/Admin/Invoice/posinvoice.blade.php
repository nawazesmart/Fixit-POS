<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title></title>




    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        @media print {
            #invoice {
                margin-top: 0 !important;
                margin-bottom: 0 !important;
                padding-top: 2px !important;
                font-size: 16px !important;
            }

            .company-logo {
                margin-top: 0 !important;
                padding-top: 0 !important;
            }


            .no-print,
            .no-print * {
                display: none !important;
            }

            .container {
                height: 100%;
                /* width: 58mm; */
                width: 100%;
            }
            .invoice-price {
                /* margin-right: -70px !important; */
            }
            .invoice-no{
                width: 300px!important;
            }

        }

        body {
            background: #efefef;
            font-family: 'Fira Code', monospace;
            font-size: .8rem;
            font-weight: 600;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .col-2 {
            float: left;
            width: 16.6666666667%;
        }

        .col-3 {
            float: left;
            width: 25%;
        }

        .col-4 {
            float: left;
            width: 33.3333333333%;
        }

        .col-6 {
            float: left;
            width: 50%;
        }

        .col-8 {
            float: left;
            width: 66.6666666666%;
        }

        .col-9 {
            float: left;
            width: 75%;
        }

        .col-10 {
            float: left;
            width: 83.3333333333%;
        }

        #invoice {
            background: #ffffff;
            width: 328.36px;
            min-height: 100px;
            margin: 0 auto;
            margin-top: 10px;
            margin-bottom: 50px;
            padding: 5px;
        }

        .container {
            height: 100%;
        }

        .company-logo {
            /* width: 60px; */
            margin: 0px auto;
            margin-top: 5px;
            text-align: center
        }

        .logo {
            width: 100%;
        }

        .company-info {
            font-size: .6rem;
            font-weight: 700;
            text-align: center;
        }

        .receipt-heading {
            text-align: center;
            font-weight: 700;
            margin: 0 auto;
            margin-top: 2px;
            max-width: 450px;
            position: relative;
        }


        .invoice-info {
            margin-top: 1px;
            margin-bottom: 10px;
        }

        .invoice-info .date {
            text-align: right;
        }

        table {
            width: 100%;
        }

        table,
        th {
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 5px;
        }

        .text-center {
            text-align: center;
        }

        .text-left {
            text-align: left;
        }

        .text-right {
            text-align: right;
        }

        .invoice-price {
            padding: 5px;
            margin-top: 10px;
            margin-bottom: 10px;
            text-align: right !important;
        }

        .footer {
            /* margin: -25px; */
            font-size: .7rem;
            padding: 0.3rem;
            text-align: center;
        }


        .no-print {
            text-align: center;
            margin-top: 10px;
        }

        .no-print .btn {
            border: none;
            color: white;
            padding: 6px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        .no-print .btn.btn-print {
            background-color: #4CAF50;
        }

        .no-print .btn.btn-back {
            background-color: rgb(250, 225, 0);
        }

    </style>

    <script>
        window.console = window.console || function(t) {};
    </script>
    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>
</head>

<body>


<div class="no-print">
    <a href="javascript:void(0)" onclick="window.print()" class="btn btn-print"> Print</a>
    <a href="{{ route('sales.index') }}" class="btn btn-back">Back</a>
    <a onclick="window.close();"
       style=" background-color: red; border: none;color: white; padding: 6px 12px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;cursor: pointer; border-radius: 5px;">Close</a>
</div>
<?php //$dokan_user = \App\Models\User::query()->where('id', dokanId())->first() ?>

<section id="invoice">
    <div class="container">
        <div class="company-logo">


        </div>



            <div class="company-info">
                <p style="font-size: 16px"></p>
                <p></p>
                <p style="font-size: 11px">Cell: </p>
                <p style="font-size: 11px"></p>
            </div>
{{--        @else--}}
{{--            <div class="company-info">--}}
{{--                <p style="font-size: 16px"></p>--}}
{{--                <p></p>--}}
{{--                <p style="font-size: 11px">Cell: </p>--}}
{{--                <p style="font-size: 11px"></p>--}}
{{--            </div>--}}

{{--        @endif--}}

{{--        @if (optional($sale->branch)->bin_no != null)--}}
{{--            <div style="display: flex; justify-content: space-between;margin-top: 3px;font-size: 15px;">--}}
{{--                <p>BIN: Dhaka</p>--}}
{{--                <p>Mushak-2.3</p>--}}
{{--            </div>--}}
{{--        @endif--}}




        {{-- <p class="receipt-heading"> Customer Receipt </p> --}}




        <div class="invoice-info">
            <div class="row">
                <div class="col-12 invoice-no text-center">
                    Invoice No: <br>
                </div>
            </div>
            <p style="margin-top: 10px;">Date: {{ \Carbon\Carbon::now()->timezone('Asia/Dhaka')->format('d M, Y, g:i A') }}</p>
            <p>Customer: Arafat</p>
            {{-- <p>Phone: {{ optional($sale->customer)->mobile }}</p> --}}
            <p>Cashier:{{auth()->user()->name}} </p>
            <p>Sale By:{{auth()->user()->name}} </p>
        </div>




        <div class="product-info">
            <table>

                <thead>
                <tr>
                    <th>SL</th>
                    <th class="text-left">Item</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Disc(%)</th>
                    <th>Amount</th>
                </tr>
                </thead>

                <tbody>



                @php

                    $totalPrice = 0;
                @endphp
                @foreach ($previewData as $data)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>
                            {{ $data['productDetails']->xdesc }} <br>
{{--                            {{ ($detail->description) }}--}}
                        </td>
                        <td class="text-center">{{ $data['productDetails']->xcost ,2}}</td>
                        <td class="text-center">4</td>
                        <td class="text-center">{{ round(( 10/100* ($data['productDetails']->xcost* 4 )), 2) }}
                            <h6>10%</h6>
                        </td>
                        <td class="text-right">{{ round($data['productDetails']->xcost * 4)-(10/100 * ($data['productDetails']->xcost * 4)) }}</td>
                    </tr>
                    @php
                        $totalPrice +=  round($data['productDetails']->xcost * 4)-(10/100 * ($data['productDetails']->xcost * 4))
                    @endphp

                @endforeach
                </tbody>
            </table>


            <div class="invoice-price">
                <div class="row">
                    <div class="col-8">
                        <p>Subtotal: </p>
                        <p>VAT:</p>
                    </div>
                    <div class="col-4">
                        @php $price = $totalPrice; @endphp

{{--                         @php $price = number_format($sale->payable_amount - $sale->total_vat, 2, '.', ''); @endphp --}}
                        <p>{{ $price }}</p>
                        <p><span style="font-size: 7px">(10%)</span>{{round((10 * $price)/100,2)}}
                        </p>
                    </div>
                </div>
                ------------
                <div class="row">
                    <div class="col-8">
                        <p></p><br>

                        <p>Delivery Change:</p>
                    </div>
                    <div class="col-4">
                        <p>
{{round($price+((10 * $price)/100),2)}}
                        </p>
                        <p><span style="font-size: 7px;">(+)</span>70</p>


                    </div>
                </div>
                ------------
                <div class="row">
                    <div class="col-8">
                        <p></p><br>
                        <p>Rounding:</p>
                    </div>
                    <div class="col-4">
                        <p>
                            {{-- @php $price_after_discount = round($price_after_vat + $sale->delivery_charge - $sale->discount , 2); @endphp --}}
                            {{-- {{ $price_after_discount }} --}}

                        </p>
                        {{-- <p><span style="font-size: 7px">(+/-)</span> {{ number_format(round($price_after_discount), 2,'.','') }}</p> --}}
                        <p><span style="font-size: 7px">(+/-)</span>  {{round($price+((10 * $price)/100)+70 ,2)}}</p>
                        <p><span style="font-size: 7px"></span>  {{round($price+((10 * $price)/100)+70 ,2)}}</p>
                    </div>
                </div>
                ------------
                <div class="row">
                    <div class="col-8">
                        <p>Total Payable:</p>
                    </div>
                    <div class="col-4">
                        {{-- <p>{{ number_format($sale->payable_amount + $sale->delivery_charge - $sale->discount , 2, '.', '') }}</p> --}}
                        <p>200</p>
                    </div>
                </div>
                ------------
                <div class="row">
                    <div class="col-8">
                        <p>Paid Amount: </p>
                    </div>
                    <div class="col-4">
                        <p></p>
                    </div>
                </div>
            </div>

        </div>




        <div class="footer">
            <p style="margin-bottom: 10px">Paid Amount </p>
            <p>The goods can be exchange within next 7 dyas ( Refund within 3 days ).</p>
            {{-- <p>Thanks For Purchase with {{ optional(auth()->user()->businessProfile)->shop_name }}</p>
            <p>For any queries complaints or feedback.</p>
            <p>Please call {{ auth()->user()->mobile }}</p> --}}
            <small><strong style="margin-top: 10px">Software Developed By: Smart Software Ltd</strong></small>
        </div>
    </div>
</section>


<script>
    window.print()
</script>
</body>

</html>
