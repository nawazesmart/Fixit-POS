<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('Admin.includes.css')
</head>
<body>
{{--@include('Admin.includes.nav')--}}


<div class="col-lg-6 position-relative side pos-left-side">


    <!-- TOP SEARCH -->






    <!-- ITEM ROW -->
    <div class="row p-2 gutter-sizer item-row" style="height: 100% !important;">
        <div class="col-lg-12">

            <div id="searchProduct" class="search-pos-product">
                <div class="search-any-product d-flex">

{{--                    <span class="input-group-text rounded-0 search-icon" id="barcode"><svg class="svg-inline--fa fa-barcode fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="barcode" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M0 448V64h18v384H0zm26.857-.273V64H36v383.727h-9.143zm27.143 0V64h8.857v383.727H54zm44.857 0V64h8.857v383.727h-8.857zm36 0V64h17.714v383.727h-17.714zm44.857 0V64h8.857v383.727h-8.857zm18 0V64h8.857v383.727h-8.857zm18 0V64h8.857v383.727h-8.857zm35.715 0V64h18v383.727h-18zm44.857 0V64h18v383.727h-18zm35.999 0V64h18.001v383.727h-18.001zm36.001 0V64h18.001v383.727h-18.001zm26.857 0V64h18v383.727h-18zm45.143 0V64h26.857v383.727h-26.857zm35.714 0V64h9.143v383.727H476zm18 .273V64h18v384h-18z"></path></svg><!-- <i class="fas fa-barcode"></i> Font Awesome fontawesome.com --></span>--}}
{{--                    <input type="text" class="form-control rounded-0 search-input" name="product_search" id="searchProductField" placeholder="Scan Your Barcode or SKU" autocomplete="off">--}}


                    <div class="dropdown-content live-load-content">

                    </div>

                </div>
            </div>





            <div class="table-responsive" style="height: 61vh !important; overflow-y: auto !important">
                <table class="table table-hover item-table">
                    <thead style="background-color: aliceblue; border-bottom: 2px solid;">
                    <tr>
                        <th width="25%">Item</th>
                        <th width="15%">SKU</th>
                        <th width="15%">Unit</th>
                        <th width="12%" class="text-end">U. Price</th>
                        <th width="18%" class="text-center">Quantity</th>
                        <th width="13%" class="text-center">Total</th>
                        <th width="2%"><svg class="svg-inline--fa fa-times fa-w-11" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" data-fa-i2svg=""><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg><!-- <i class="fas fa-times"></i> Font Awesome fontawesome.com --></th>
                    </tr>
                    </thead>
                    <tbody id="t-body">

                    <tr id="emptycart">
                        <td colspan="7" class="text-center p-5">
                            <img src="./POS SALE — Onestop Baby Shop_files/emptycart.png" height="100" alt="emptycart">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="row main">



    <!-- POS LEFT SIDE -->
    <div class="col-lg-6 position-relative side pos-left-side">


        <!-- TOP SEARCH -->
        <div class="row p-2 gutter-sizer" style="border-bottom: 2px solid #efefef;">


            <div class="col input-group search-body">
                <div class="row" style="width:100%">
                    <div class="col-md-12 col-md-offset-4">
                        <div class="search-box-group">
                            <div class="input-group mb-2">

                            <span class="input-group-addon" onclick="showPosEditCustomer()">
                                <svg class="svg-inline--fa fa-edit fa-w-18" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="edit" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z"></path></svg><!-- <i class="fas fa-edit"></i> Font Awesome fontawesome.com -->
                            </span>
                                <input type="text" class="form-control search-box" onkeyup="searchBox(this, event)" placeholder="Please enter 2 or more characters" value="Cash Customer">
                                <input type="hidden" id="customer_id" name="customer_id" $data-="" class="form-control search-box-selected-value" value="1000000">

                                <div class="search-box-loader">
                                    <div class="loader"></div>
                                </div>
                                <input type="hidden" id="customer_id" name="customer_id" class="form-control search-box-selected-value" value="1000000">
                                <span class="input-group-addon" onclick="clearCustomer()">
                                <svg class="svg-inline--fa fa-times fa-w-11" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" data-fa-i2svg=""><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg><!-- <i class="fas fa-times"></i> Font Awesome fontawesome.com -->
                            </span>

                            </div>
                            <ul class="search-box-list">
                                <li class="search-box-item" data-id="4434" data-name="." data-mobile="01671060040" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="1" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="4435" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">. (01671060040)</li>
                                <li class="search-box-item" data-id="4452" data-name="." data-mobile="01852632377" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="1" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="4453" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">. (01852632377)</li>
                                <li class="search-box-item" data-id="5053" data-name="." data-mobile="01816049415" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="1" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="5054" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">. (01816049415)</li>
                                <li class="search-box-item" data-id="225" data-name="." data-mobile="01871006757" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="1" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="226" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">. (01871006757)</li>
                                <li class="search-box-item" data-id="4205" data-name=".." data-mobile="01712048366" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="1" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="4206" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">.. (01712048366)</li>
                                <li class="search-box-item" data-id="5085" data-name=".." data-mobile="01711649189" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="1" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="5086" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">.. (01711649189)</li>
                                <li class="search-box-item" data-id="1005375" data-name="01302900568" data-mobile="01302900568" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="14418" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01302900568 (01302900568)</li>
                                <li class="search-box-item" data-id="1004014" data-name="01313492578" data-mobile="01313492578" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="13029" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01313492578 (01313492578)</li>
                                <li class="search-box-item" data-id="1002725" data-name="01313494241" data-mobile="01313494241" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="11723" data-point="75.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01313494241 (01313494241)</li>
                                <li class="search-box-item" data-id="1003828" data-name="01318955716" data-mobile="01318955716" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="12842" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01318955716 (01318955716)</li>
                                <li class="search-box-item" data-id="1001956" data-name="01319702940" data-mobile="01319702940" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="10943" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01319702940 (01319702940)</li>
                                <li class="search-box-item" data-id="1003065" data-name="01322994694" data-mobile="01322994694" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="12070" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01322994694 (01322994694)</li>
                                <li class="search-box-item" data-id="1003033" data-name="01328955824" data-mobile="01328955824" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="12038" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01328955824 (01328955824)</li>
                                <li class="search-box-item" data-id="1003223" data-name="01407122630" data-mobile="01407122630" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="12228" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01407122630 (01407122630)</li>
                                <li class="search-box-item" data-id="1004756" data-name="01407290201" data-mobile="01407290201" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="13785" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01407290201 (01407290201)</li>
                                <li class="search-box-item" data-id="1001645" data-name="01408076089" data-mobile="01408076089" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="10629" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01408076089 (01408076089)</li>
                                <li class="search-box-item" data-id="1002882" data-name="01533856690" data-mobile="01533856690" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="11881" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01533856690 (01533856690)</li>
                                <li class="search-box-item" data-id="1001695" data-name="01558800156" data-mobile="01558800156" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="10679" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01558800156 (01558800156)</li>
                                <li class="search-box-item" data-id="1000029" data-name="01571771840" data-mobile="01571771840" data-email="01571771840@gmail.com" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="8867" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01571771840 (01571771840)</li>
                                <li class="search-box-item" data-id="1004724" data-name="01600211332" data-mobile="01600211332" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="13753" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01600211332 (01600211332)</li>
                                <li class="search-box-item" data-id="1002609" data-name="01602756122" data-mobile="01602756122" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="11604" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01602756122 (01602756122)</li>
                                <li class="search-box-item" data-id="1003861" data-name="01610655363" data-mobile="01610655363" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="12875" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01610655363 (01610655363)</li>
                                <li class="search-box-item" data-id="1005729" data-name="01611333881" data-mobile="01611333881" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="14773" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01611333881 (01611333881)</li>
                                <li class="search-box-item" data-id="1004127" data-name="01611560675" data-mobile="01611560675" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="13144" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01611560675 (01611560675)</li>
                                <li class="search-box-item" data-id="1004651" data-name="01611900919" data-mobile="01611900919" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="13680" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01611900919 (01611900919)</li>
                                <li class="search-box-item" data-id="1001809" data-name="01614466090" data-mobile="01614466090" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="10795" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01614466090 (01614466090)</li>
                                <li class="search-box-item" data-id="1001537" data-name="01618954388" data-mobile="01618954388" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="10519" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01618954388 (01618954388)</li>
                                <li class="search-box-item" data-id="1003244" data-name="01620233373" data-mobile="01620233373" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="12249" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01620233373 (01620233373)</li>
                                <li class="search-box-item" data-id="1003482" data-name="01625332208" data-mobile="01625332208" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="12490" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01625332208 (01625332208)</li>
                                <li class="search-box-item" data-id="1000026" data-name="01625730107" data-mobile="01625730107" data-email="" data-address="Birulia, Golapgram." data-zip_code="" data-district_id="63" data-area_id="136" data-customer_type_id="" data-is_default="1" data-gender="" data-user_id="8863" data-point="0.00" data-wallet="0.00" data-shipping_cost="120.000000" onclick="selectSearchBoxValue(this)">01625730107 (01625730107)</li>
                                <li class="search-box-item" data-id="1002546" data-name="01627540352" data-mobile="01627540352" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="11540" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01627540352 (01627540352)</li>
                                <li class="search-box-item" data-id="1001534" data-name="01630634726" data-mobile="01630634726" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="10516" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01630634726 (01630634726)</li>
                                <li class="search-box-item" data-id="1004560" data-name="01632485563" data-mobile="01632485563" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="13588" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01632485563 (01632485563)</li>
                                <li class="search-box-item" data-id="1005667" data-name="01633631271" data-mobile="01633631271" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="14711" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01633631271 (01633631271)</li>
                                <li class="search-box-item" data-id="1004224" data-name="01643394596" data-mobile="01643394596" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="13249" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01643394596 (01643394596)</li>
                                <li class="search-box-item" data-id="1003571" data-name="01646909544" data-mobile="01646909544" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="12580" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01646909544 (01646909544)</li>
                                <li class="search-box-item" data-id="1002729" data-name="01670134720" data-mobile="01670134720" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="11727" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01670134720 (01670134720)</li>
                                <li class="search-box-item" data-id="1004670" data-name="01672334516" data-mobile="01672334516" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="13699" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01672334516 (01672334516)</li>
                                <li class="search-box-item" data-id="1004672" data-name="01674646432" data-mobile="01674646432" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="13701" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01674646432 (01674646432)</li>
                                <li class="search-box-item" data-id="1004300" data-name="01679053148" data-mobile="01679053148" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="13325" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01679053148 (01679053148)</li>
                                <li class="search-box-item" data-id="1003858" data-name="01679894802" data-mobile="01679894802" data-email="" data-address="Abanti, 3rd Floor (B3), Plot -37, Road -27, Block -A, Banani, Dhaka" data-zip_code="" data-district_id="58" data-area_id="67" data-customer_type_id="" data-is_default="0" data-gender="Male" data-user_id="12872" data-point="61.00" data-wallet="0.00" data-shipping_cost="60.000000" onclick="selectSearchBoxValue(this)">01679894802 (01679894802)</li>
                                <li class="search-box-item" data-id="1002760" data-name="01680300000" data-mobile="01680300000" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="11759" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01680300000 (01680300000)</li>
                                <li class="search-box-item" data-id="1003820" data-name="01682393206" data-mobile="01682393206" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="12834" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01682393206 (01682393206)</li>
                                <li class="search-box-item" data-id="1003456" data-name="01685215367" data-mobile="01685215367" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="12464" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01685215367 (01685215367)</li>
                                <li class="search-box-item" data-id="1001628" data-name="01685301104" data-mobile="01685301104" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="10612" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01685301104 (01685301104)</li>
                                <li class="search-box-item" data-id="1004809" data-name="01686332561" data-mobile="01686332561" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="13839" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01686332561 (01686332561)</li>
                                <li class="search-box-item" data-id="711" data-name="01686690168 Azad" data-mobile="01686690168" data-email="kazem.bd@gmail.com" data-address="মালেকা মঞ্জিল,ভবন মালিকঃ আব্দুর রশিদ,লিফটযুক্ত সাত তলা ভবনের নিচ তলা, ফ্লাট নম্বর -A2, গাওয়াইর, দক্ষিণ খান, ঢাকা। ( গাওয়াইর মাদ্রাসার পশ্চিম পাশের রোড দিয়ে একটু ভিতরেই বাইতুল মামুর তারা মসজিদের পূব পাশে)" data-zip_code="" data-district_id="" data-area_id="1" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="712" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01686690168 Azad (01686690168)</li>
                                <li class="search-box-item" data-id="1002635" data-name="01686966625" data-mobile="01686966625" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="11632" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01686966625 (01686966625)</li>
                                <li class="search-box-item" data-id="1002879" data-name="01688051071" data-mobile="01688051071" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="11878" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01688051071 (01688051071)</li>
                                <li class="search-box-item" data-id="1001816" data-name="01708717384" data-mobile="01708717384" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="10802" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01708717384 (01708717384)</li>
                                <li class="search-box-item" data-id="1002761" data-name="01709681388" data-mobile="01709681388" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="11760" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01709681388 (01709681388)</li>
                                <li class="search-box-item" data-id="1005022" data-name="01710912693" data-mobile="01710912693" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="14058" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01710912693 (01710912693)</li>
                                <li class="search-box-item" data-id="1005511" data-name="01711085070" data-mobile="01711085070" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="14554" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01711085070 (01711085070)</li>
                                <li class="search-box-item" data-id="1003034" data-name="01711410017" data-mobile="01711410017" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="12039" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01711410017 (01711410017)</li>
                                <li class="search-box-item" data-id="1003903" data-name="01711783492" data-mobile="01711783492" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="12918" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01711783492 (01711783492)</li>
                                <li class="search-box-item" data-id="1004773" data-name="01712561847" data-mobile="01712561847" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="13802" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01712561847 (01712561847)</li>
                                <li class="search-box-item" data-id="1002135" data-name="01713191397" data-mobile="01713191397" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="11124" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01713191397 (01713191397)</li>
                                <li class="search-box-item" data-id="1004175" data-name="01715188032" data-mobile="01715188032" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="13200" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01715188032 (01715188032)</li>
                                <li class="search-box-item" data-id="1002762" data-name="01715637194" data-mobile="01715637194" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="11761" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01715637194 (01715637194)</li>
                                <li class="search-box-item" data-id="1002065" data-name="01716488661" data-mobile="01716488661" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="11053" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01716488661 (01716488661)</li>
                                <li class="search-box-item" data-id="1002960" data-name="01716538758" data-mobile="01716538758" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="11960" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01716538758 (01716538758)</li>
                                <li class="search-box-item" data-id="1005078" data-name="01717000458" data-mobile="01717000458" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="14115" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01717000458 (01717000458)</li>
                                <li class="search-box-item" data-id="1003348" data-name="01717502012" data-mobile="01717502012" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="12353" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01717502012 (01717502012)</li>
                                <li class="search-box-item" data-id="1001605" data-name="01717625285" data-mobile="01717625285" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="10589" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01717625285 (01717625285)</li>
                                <li class="search-box-item" data-id="1001920" data-name="01717728355" data-mobile="01717728355" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="10907" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01717728355 (01717728355)</li>
                                <li class="search-box-item" data-id="1002700" data-name="01724934172" data-mobile="01724934172" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="11698" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01724934172 (01724934172)</li>
                                <li class="search-box-item" data-id="1002674" data-name="01726948285" data-mobile="01726948285" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="11671" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01726948285 (01726948285)</li>
                                <li class="search-box-item" data-id="1406" data-name="01728611511@gmail.com" data-mobile="01728611511" data-email="01728611511@gmail.com" data-address="Nibash 20/8, West Pathantula" data-zip_code="" data-district_id="6" data-area_id="1" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="1407" data-point="0.00" data-wallet="0.00" data-shipping_cost="120.000000" onclick="selectSearchBoxValue(this)">01728611511@gmail.com (01728611511)</li>
                                <li class="search-box-item" data-id="1004676" data-name="01732043347" data-mobile="01732043347" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="13705" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01732043347 (01732043347)</li>
                                <li class="search-box-item" data-id="1004825" data-name="01732444276" data-mobile="01732444276" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="13856" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01732444276 (01732444276)</li>
                                <li class="search-box-item" data-id="1003565" data-name="01732804018" data-mobile="01732804018" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="12574" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01732804018 (01732804018)</li>
                                <li class="search-box-item" data-id="1003959" data-name="01732912644" data-mobile="01732912644" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="12974" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01732912644 (01732912644)</li>
                                <li class="search-box-item" data-id="1002470" data-name="01734875087" data-mobile="01734875087" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="11463" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01734875087 (01734875087)</li>
                                <li class="search-box-item" data-id="1002408" data-name="01736547882" data-mobile="01736547882" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="11400" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01736547882 (01736547882)</li>
                                <li class="search-box-item" data-id="1004130" data-name="01737144144" data-mobile="01737144144" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="13147" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01737144144 (01737144144)</li>
                                <li class="search-box-item" data-id="1003501" data-name="01737897482" data-mobile="01737897482" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="12509" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01737897482 (01737897482)</li>
                                <li class="search-box-item" data-id="1003031" data-name="01740757978" data-mobile="01740757978" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="12036" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01740757978 (01740757978)</li>
                                <li class="search-box-item" data-id="1004840" data-name="01749492670" data-mobile="01749492670" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="13871" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01749492670 (01749492670)</li>
                                <li class="search-box-item" data-id="1004665" data-name="01749855292" data-mobile="01749855292" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="13694" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01749855292 (01749855292)</li>
                                <li class="search-box-item" data-id="1003840" data-name="01750115075" data-mobile="01750115075" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="12854" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01750115075 (01750115075)</li>
                                <li class="search-box-item" data-id="1003493" data-name="01755441055" data-mobile="01755441055" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="12501" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01755441055 (01755441055)</li>
                                <li class="search-box-item" data-id="1004803" data-name="01756088083" data-mobile="01756088083" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="13832" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01756088083 (01756088083)</li>
                                <li class="search-box-item" data-id="1002050" data-name="01756952341" data-mobile="01756952341" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="11038" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01756952341 (01756952341)</li>
                                <li class="search-box-item" data-id="1002838" data-name="01757920728" data-mobile="01757920728" data-email="engr.mdshahid@gmail.com" data-address="333/4 D, Shomsher Villa, DIG Bhobon Road, Ahmednagor, Mipur-1, Dhaka-1216" data-zip_code="1216" data-district_id="58" data-area_id="415" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="11837" data-point="0.00" data-wallet="0.00" data-shipping_cost="60.000000" onclick="selectSearchBoxValue(this)">01757920728 (01757920728)</li>
                                <li class="search-box-item" data-id="1005096" data-name="01757925792" data-mobile="01757925792" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="14133" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01757925792 (01757925792)</li>
                                <li class="search-box-item" data-id="1002458" data-name="01758896410" data-mobile="01758896410" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="11451" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01758896410 (01758896410)</li>
                                <li class="search-box-item" data-id="1002675" data-name="01759848388" data-mobile="01759848388" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="11672" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01759848388 (01759848388)</li>
                                <li class="search-box-item" data-id="1004932" data-name="01766407772" data-mobile="01766407772" data-email="" data-address="497, Barek Bhandari Road, Moddho Azampur, Dakshin Khan, Uttara" data-zip_code="1230" data-district_id="58" data-area_id="163" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="13966" data-point="0.00" data-wallet="0.00" data-shipping_cost="60.000000" onclick="selectSearchBoxValue(this)">01766407772 (01766407772)</li>
                                <li class="search-box-item" data-id="1005276" data-name="01770675496" data-mobile="01770675496" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="14319" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01770675496 (01770675496)</li>
                                <li class="search-box-item" data-id="1003484" data-name="01771417679" data-mobile="01771417679" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="12492" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01771417679 (01771417679)</li>
                                <li class="search-box-item" data-id="1004677" data-name="01775479107" data-mobile="01775479107" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="13706" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01775479107 (01775479107)</li>
                                <li class="search-box-item" data-id="1001512" data-name="01776332728" data-mobile="01776332728" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="10494" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01776332728 (01776332728)</li>
                                <li class="search-box-item" data-id="1001499" data-name="01779999553" data-mobile="01779999553" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="10481" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01779999553 (01779999553)</li>
                                <li class="search-box-item" data-id="1003894" data-name="01782076823" data-mobile="01782076823" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="12908" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01782076823 (01782076823)</li>
                                <li class="search-box-item" data-id="1002881" data-name="01782646527" data-mobile="01782646527" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="11880" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01782646527 (01782646527)</li>
                                <li class="search-box-item" data-id="1005672" data-name="01783627925" data-mobile="01783627925" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="14716" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01783627925 (01783627925)</li>
                                <li class="search-box-item" data-id="1004317" data-name="01784448714" data-mobile="01784448714" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="13342" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01784448714 (01784448714)</li>
                                <li class="search-box-item" data-id="1003370" data-name="01786243487" data-mobile="01786243487" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="12375" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01786243487 (01786243487)</li>
                                <li class="search-box-item" data-id="1005445" data-name="01786369591" data-mobile="01786369591" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="14488" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01786369591 (01786369591)</li>
                                <li class="search-box-item" data-id="1005510" data-name="01787442525" data-mobile="01787442525" data-email="" data-address="" data-zip_code="" data-district_id="" data-area_id="" data-customer_type_id="" data-is_default="0" data-gender="" data-user_id="14553" data-point="0.00" data-wallet="0.00" data-shipping_cost="" onclick="selectSearchBoxValue(this)">01787442525 (01787442525)</li>
                            </ul>
                            <ul class="search-box-action">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#customerAddModal"><svg class="svg-inline--fa fa-plus-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm144 276c0 6.6-5.4 12-12 12h-92v92c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12v-92h-92c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h92v-92c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v92h92c6.6 0 12 5.4 12 12v56z"></path></svg><!-- <i class="fas fa-plus-circle"></i> Font Awesome fontawesome.com --> ADD NEW</button>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col input-group">
                <span class="input-group-text"><svg class="svg-inline--fa fa-calendar fa-w-14" aria-hidden="true" focusable="false" data-prefix="far" data-icon="calendar" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M400 64h-48V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H160V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zm-6 400H54c-3.3 0-6-2.7-6-6V160h352v298c0 3.3-2.7 6-6 6z"></path></svg><!-- <i class="far fa-calendar"></i> Font Awesome fontawesome.com --></span>
                <input type="text" name="date" class="form-control " value="2023-05-22" data-date-format="yyyy-mm-dd" readonly="" required="">

                <span class="input-group-text" style="margin-left: 4px;"><svg class="svg-inline--fa fa-print fa-w-16" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="print" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M448 192V77.25c0-8.49-3.37-16.62-9.37-22.63L393.37 9.37c-6-6-14.14-9.37-22.63-9.37H96C78.33 0 64 14.33 64 32v160c-35.35 0-64 28.65-64 64v112c0 8.84 7.16 16 16 16h48v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h48c8.84 0 16-7.16 16-16V256c0-35.35-28.65-64-64-64zm-64 256H128v-96h256v96zm0-224H128V64h192v48c0 8.84 7.16 16 16 16h48v96zm48 72c-13.25 0-24-10.75-24-24 0-13.26 10.75-24 24-24s24 10.74 24 24c0 13.25-10.75 24-24 24z"></path></svg><!-- <i class="fa fa-print"></i> Font Awesome fontawesome.com --></span>
                <select class="form-control rounded-0" name="radio">
                    <option value="pos-print" selected="">POS Invoice</option>
                    <option value="normal-print">Normal Invoice</option>



                </select>
            </div>
        </div>





        <!-- ITEM ROW -->
        <div class="row p-2 gutter-sizer item-row" style="height: 100% !important;">
            <div class="col-lg-12">

                <div id="searchProduct" class="search-pos-product">
                    <div class="search-any-product d-flex">

                        <span class="input-group-text rounded-0 search-icon" id="barcode"><svg class="svg-inline--fa fa-barcode fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="barcode" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M0 448V64h18v384H0zm26.857-.273V64H36v383.727h-9.143zm27.143 0V64h8.857v383.727H54zm44.857 0V64h8.857v383.727h-8.857zm36 0V64h17.714v383.727h-17.714zm44.857 0V64h8.857v383.727h-8.857zm18 0V64h8.857v383.727h-8.857zm18 0V64h8.857v383.727h-8.857zm35.715 0V64h18v383.727h-18zm44.857 0V64h18v383.727h-18zm35.999 0V64h18.001v383.727h-18.001zm36.001 0V64h18.001v383.727h-18.001zm26.857 0V64h18v383.727h-18zm45.143 0V64h26.857v383.727h-26.857zm35.714 0V64h9.143v383.727H476zm18 .273V64h18v384h-18z"></path></svg><!-- <i class="fas fa-barcode"></i> Font Awesome fontawesome.com --></span>
                        <input type="text" class="form-control rounded-0 search-input" name="product_search" id="searchProductField" placeholder="Scan Your Barcode or SKU" autocomplete="off">


                        <div class="dropdown-content live-load-content">

                        </div>

                    </div>
                </div>





                <div class="table-responsive" style="height: 61vh !important; overflow-y: auto !important">
                    <table class="table table-hover item-table">
                        <thead style="background-color: aliceblue; border-bottom: 2px solid;">
                        <tr>
                            <th width="25%">Item</th>
                            <th width="15%">SKU</th>
                            <th width="15%">Unit</th>
                            <th width="12%" class="text-end">U. Price</th>
                            <th width="18%" class="text-center">Quantity</th>
                            <th width="13%" class="text-center">Total</th>
                            <th width="2%"><svg class="svg-inline--fa fa-times fa-w-11" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" data-fa-i2svg=""><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg><!-- <i class="fas fa-times"></i> Font Awesome fontawesome.com --></th>
                        </tr>
                        </thead>
                        <tbody id="t-body">

                        <tr id="emptycart">
                            <td colspan="7" class="text-center p-5">
                                <img src="./POS SALE — Onestop Baby Shop_files/emptycart.png" height="100" alt="emptycart">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- POS RIGHT SIDE -->
    <div class="col-lg-6 position-relative side">


        <!-- TOP SEARCH -->
        <div class="row p-2 gutter-sizer" style="border-bottom: 2px solid #efefef">
            <div class="col input-group">
                <span class="input-group-text rounded-0"><svg class="svg-inline--fa fa-bars fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg><!-- <i class="fas fa-bars"></i> Font Awesome fontawesome.com --></span>
                <select class="form-control select2 rounded-0 select2-hidden-accessible" name="category_id" id="category_id" onchange="searchItem(this, event)" data-select2-id="select2-data-category_id" tabindex="-1" aria-hidden="true">
                    <option value="" selected="" data-select2-id="select2-data-11-aomr">All Category</option>
                    <option value="2">
                        Clothes
                    </option>


                    <option value="31">
                        &nbsp;»&nbsp;Newborn Essentials
                    </option>

                    <option value="32">
                        &nbsp;
                        »&nbsp;Onesies Bodysuit &amp; Vest
                    </option>

                    <option value="33">
                        &nbsp;
                        »&nbsp;Rompers &amp; Sleepsuits
                    </option>

                    <option value="34">
                        &nbsp;
                        »&nbsp;Newborn Set &amp; Suit
                    </option>

                    <option value="35">
                        &nbsp;
                        »&nbsp;Nima Dresses, Sando &amp; Slips
                    </option>

                    <option value="36">
                        &nbsp;
                        »&nbsp;Cap Mitten &amp; Booties
                    </option>

                    <option value="37">
                        &nbsp;
                        »&nbsp;Newbie Dresses &amp; Frocks
                    </option>

                    <option value="38">
                        &nbsp;
                        »&nbsp;T Shirt &amp; Tops
                    </option>

                    <option value="39">
                        &nbsp;
                        »&nbsp;Pants, Shorts &amp; Skirts
                    </option>

                    <option value="40">
                        &nbsp;
                        »&nbsp;Matching Set &amp; Suits
                    </option>

                    <option value="41">
                        &nbsp;
                        »&nbsp;Clothing Gift Sets
                    </option>

                    <option value="43">
                        &nbsp;
                        »&nbsp;Preemie &amp; Tiny Preemie
                    </option>

                    <option value="44">
                        &nbsp;»&nbsp;Boys Fashion
                    </option>

                    <option value="45">
                        &nbsp;
                        »&nbsp;Onesis &amp; Rompers
                    </option>

                    <option value="46">
                        &nbsp;
                        »&nbsp;Shirts &amp; T Shirts
                    </option>

                    <option value="47">
                        &nbsp;
                        »&nbsp;Boys Set &amp; Suit
                    </option>

                    <option value="48">
                        &nbsp;
                        »&nbsp;Boys Nightwear
                    </option>

                    <option value="49">
                        &nbsp;
                        »&nbsp;Boys Partysuits
                    </option>

                    <option value="50">
                        &nbsp;
                        »&nbsp;Panjabi &amp; Pajamas
                    </option>

                    <option value="51">
                        &nbsp;
                        »&nbsp;Boys Pants &amp; Shorts
                    </option>

                    <option value="52">
                        &nbsp;
                        »&nbsp;Trousers &amp; Joggers
                    </option>

                    <option value="53">
                        &nbsp;
                        »&nbsp;Underwear &amp; Sando Vest
                    </option>

                    <option value="54">
                        &nbsp;
                        »&nbsp;Caps &amp; Hats
                    </option>

                    <option value="55">
                        &nbsp;
                        »&nbsp;Superhero Costumes
                    </option>

                    <option value="56">
                        &nbsp;
                        »&nbsp;Rainwear &amp; Swimwear
                    </option>

                    <option value="57">
                        &nbsp;»&nbsp;Girls Fashion
                    </option>

                    <option value="58">
                        &nbsp;
                        »&nbsp;Dresses &amp; Frocks
                    </option>

                    <option value="59">
                        &nbsp;
                        »&nbsp;Tops &amp; T-Shirts
                    </option>

                    <option value="60">
                        &nbsp;
                        »&nbsp;Girls Set &amp; Suits
                    </option>

                    <option value="61">
                        &nbsp;
                        »&nbsp;Onesies &amp; Rompers
                    </option>

                    <option value="62">
                        &nbsp;
                        »&nbsp;Girls Nightwear
                    </option>

                    <option value="63">
                        &nbsp;
                        »&nbsp;Girls Party Dresses
                    </option>

                    <option value="64">
                        &nbsp;
                        »&nbsp;Jumpsuit &amp; Rompers
                    </option>

                    <option value="65">
                        &nbsp;
                        »&nbsp;Stocking &amp; Tights
                    </option>

                    <option value="66">
                        &nbsp;
                        »&nbsp;Girl Pants Shorts &amp; Skirts
                    </option>

                    <option value="67">
                        &nbsp;
                        »&nbsp;Leggings &amp; Trousers
                    </option>

                    <option value="69">
                        &nbsp;
                        »&nbsp;Girls Costumes
                    </option>

                    <option value="70">
                        &nbsp;
                        »&nbsp;Innerwear Vest &amp; Slips
                    </option>

                    <option value="71">
                        &nbsp;
                        »&nbsp;Caps Hats &amp; Gloves
                    </option>

                    <option value="72">
                        &nbsp;
                        »&nbsp;Rainwear &amp; Swimwear
                    </option>

                    <option value="73">
                        &nbsp;»&nbsp;Fashion Accessories
                    </option>

                    <option value="74">
                        &nbsp;
                        »&nbsp;Headband &amp; Hairbands
                    </option>

                    <option value="75">
                        &nbsp;
                        »&nbsp;Sunglasses
                    </option>

                    <option value="76">
                        &nbsp;
                        »&nbsp;Watches &amp; Bands
                    </option>

                    <option value="77">
                        &nbsp;
                        »&nbsp;Hair Accessories
                    </option>

                    <option value="78">
                        &nbsp;
                        »&nbsp;Ties, Belts &amp; Suspenders
                    </option>

                    <option value="80">
                        &nbsp;
                        »&nbsp;Jewelleries
                    </option>

                    <option value="81">
                        &nbsp;
                        »&nbsp;Hair Clips &amp; Rubber Bands
                    </option>

                    <option value="82">
                        &nbsp;»&nbsp;Winter
                    </option>

                    <option value="83">
                        &nbsp;
                        »&nbsp;Sweat Shirts &amp; Hoodies
                    </option>

                    <option value="84">
                        &nbsp;
                        »&nbsp;Sweater &amp; Jackets
                    </option>

                    <option value="85">
                        &nbsp;
                        »&nbsp;Cardigans &amp; Pullovers
                    </option>

                    <option value="86">
                        &nbsp;
                        »&nbsp;Woolen Caps, Mitten, Gloves
                    </option>

                    <option value="87">
                        &nbsp;
                        »&nbsp;Full Sleeve Dresses &amp; Trousers
                    </option>

                    <option value="560">
                        &nbsp;
                        »&nbsp;Rompers &amp; Snowsuit
                    </option>

                    <option value="562">
                        &nbsp;
                        »&nbsp;Winter Accessories
                    </option>

                    <option value="594">
                        &nbsp;
                        »&nbsp;Newborn Winter Sets
                    </option>

                    <option value="3">
                        Nursing
                    </option>


                    <option value="88">
                        &nbsp;»&nbsp;Swaddle &amp; Receiving Blankets
                    </option>

                    <option value="89">
                        &nbsp;
                        »&nbsp;Muslin Swaddle Blanket
                    </option>

                    <option value="90">
                        &nbsp;
                        »&nbsp;Cotton Swaddle Wrap
                    </option>

                    <option value="91">
                        &nbsp;
                        »&nbsp;6-Layer Muslin Swaddle
                    </option>

                    <option value="92">
                        &nbsp;
                        »&nbsp;Receiving Blankets
                    </option>

                    <option value="93">
                        &nbsp;»&nbsp;Hooded Towels &amp; Bath Towels
                    </option>

                    <option value="94">
                        &nbsp;
                        »&nbsp;Cap Towel
                    </option>

                    <option value="96">
                        &nbsp;
                        »&nbsp;Bath Towels
                    </option>

                    <option value="236">
                        &nbsp;
                        »&nbsp;Bath Robes
                    </option>

                    <option value="97">
                        &nbsp;»&nbsp;Bedding &amp; Pillows
                    </option>

                    <option value="98">
                        &nbsp;
                        »&nbsp;Beding Set
                    </option>

                    <option value="99">
                        &nbsp;
                        »&nbsp;Bedding With Mosquito Net
                    </option>

                    <option value="100">
                        &nbsp;
                        »&nbsp;Pillow Set
                    </option>

                    <option value="101">
                        &nbsp;
                        »&nbsp;Baby Pillow
                    </option>

                    <option value="102">
                        &nbsp;
                        »&nbsp;Pillow Covers
                    </option>

                    <option value="563">
                        &nbsp;
                        »&nbsp;Safety Bedding
                    </option>

                    <option value="564">
                        &nbsp;
                        »&nbsp;Separated Beds
                    </option>

                    <option value="103">
                        &nbsp;»&nbsp;Mosquito Net
                    </option>

                    <option value="104">
                        &nbsp;
                        »&nbsp;Umbrella Fold Mosquito Net
                    </option>

                    <option value="105">
                        &nbsp;
                        »&nbsp;Side Fold Mosquito Net
                    </option>

                    <option value="106">
                        &nbsp;»&nbsp;Blanket &amp; Quilts
                    </option>

                    <option value="107">
                        &nbsp;
                        »&nbsp;Hooded Blanket
                    </option>

                    <option value="108">
                        &nbsp;
                        »&nbsp;Baby Blankets
                    </option>

                    <option value="109">
                        &nbsp;
                        »&nbsp;Baby Comforters
                    </option>

                    <option value="110">
                        &nbsp;
                        »&nbsp;Baby Sleeping Bags
                    </option>

                    <option value="111">
                        &nbsp;»&nbsp;Katha &amp; Nappy
                    </option>

                    <option value="112">
                        &nbsp;
                        »&nbsp;Nakshi Katha
                    </option>

                    <option value="113">
                        &nbsp;
                        »&nbsp;Baby Nappies
                    </option>

                    <option value="114">
                        &nbsp;»&nbsp;Bibs &amp; Burp Cloths
                    </option>

                    <option value="115">
                        &nbsp;
                        »&nbsp;Cotton Bibs
                    </option>

                    <option value="116">
                        &nbsp;
                        »&nbsp;PEVA &amp; Silicone Bibs
                    </option>

                    <option value="117">
                        &nbsp;
                        »&nbsp;Coverall
                    </option>

                    <option value="118">
                        &nbsp;
                        »&nbsp;Bandana Bibs
                    </option>

                    <option value="119">
                        &nbsp;
                        »&nbsp;Burp Cloths
                    </option>

                    <option value="120">
                        &nbsp;»&nbsp;Wash Cloths &amp; Napkins
                    </option>

                    <option value="121">
                        &nbsp;
                        »&nbsp;Cotton Wash Cloths
                    </option>

                    <option value="122">
                        &nbsp;
                        »&nbsp;Terry Cotton Wash Cloths
                    </option>

                    <option value="123">
                        &nbsp;
                        »&nbsp;Muslin Wash Cloths
                    </option>

                    <option value="124">
                        &nbsp;»&nbsp;Grooming
                    </option>

                    <option value="125">
                        &nbsp;
                        »&nbsp;Grooming &amp; Babycare Kits
                    </option>

                    <option value="126">
                        &nbsp;
                        »&nbsp;Nail Clipper, Scissors &amp; Set
                    </option>

                    <option value="127">
                        &nbsp;
                        »&nbsp;Hair Comb &amp; Brushes
                    </option>

                    <option value="128">
                        &nbsp;
                        »&nbsp;Powder Puff &amp; Case
                    </option>

                    <option value="129">
                        &nbsp;»&nbsp;Nursing Accessories
                    </option>

                    <option value="130">
                        &nbsp;
                        »&nbsp;Cloths Hanger &amp; Cloths Pin
                    </option>

                    <option value="4">
                        Feeding
                    </option>


                    <option value="135">
                        &nbsp;»&nbsp;Breast Feeding
                    </option>

                    <option value="136">
                        &nbsp;
                        »&nbsp;Breast Care Accessories
                    </option>

                    <option value="137">
                        &nbsp;
                        »&nbsp;Manual Breast Pump
                    </option>

                    <option value="138">
                        &nbsp;
                        »&nbsp;Electric Breast Pump
                    </option>

                    <option value="139">
                        &nbsp;
                        »&nbsp;Nipple Shield
                    </option>

                    <option value="140">
                        &nbsp;
                        »&nbsp;Nipple Puller
                    </option>

                    <option value="141">
                        &nbsp;
                        »&nbsp;Breast Pads
                    </option>

                    <option value="142">
                        &nbsp;
                        »&nbsp;Nipple Cream
                    </option>

                    <option value="143">
                        &nbsp;
                        »&nbsp;Nursing Pillows
                    </option>

                    <option value="144">
                        &nbsp;
                        »&nbsp;Nursing Covers
                    </option>

                    <option value="566">
                        &nbsp;
                        »&nbsp;Milk Storage Bags &amp; Bottles
                    </option>

                    <option value="145">
                        &nbsp;»&nbsp;Bottle Feeding
                    </option>

                    <option value="146">
                        &nbsp;
                        »&nbsp;Glass Bottles
                    </option>

                    <option value="147">
                        &nbsp;
                        »&nbsp;Nipple &amp; Teats
                    </option>

                    <option value="148">
                        &nbsp;
                        »&nbsp;Bottle Warmer &amp; Insulators
                    </option>

                    <option value="149">
                        &nbsp;
                        »&nbsp;Spoon Feeders
                    </option>

                    <option value="150">
                        &nbsp;
                        »&nbsp;Feeder Covers
                    </option>

                    <option value="567">
                        &nbsp;
                        »&nbsp;Plastic PP &amp; PPSU Bottles
                    </option>

                    <option value="568">
                        &nbsp;
                        »&nbsp;Feeding Bottles Set
                    </option>

                    <option value="152">
                        &nbsp;»&nbsp;Water Bottles &amp; Cups
                    </option>

                    <option value="153">
                        &nbsp;
                        »&nbsp;Straw Cups
                    </option>

                    <option value="154">
                        &nbsp;
                        »&nbsp;Sippy Cups
                    </option>

                    <option value="155">
                        &nbsp;
                        »&nbsp;Water Bottles
                    </option>

                    <option value="156">
                        &nbsp;
                        »&nbsp;Mug &amp; Cup
                    </option>

                    <option value="157">
                        &nbsp;
                        »&nbsp;Vacuum Flask &amp; Thermos
                    </option>

                    <option value="158">
                        &nbsp;
                        »&nbsp;Feeding Spare Accessories
                    </option>

                    <option value="159">
                        &nbsp;»&nbsp;Mealtime Essentials
                    </option>

                    <option value="160">
                        &nbsp;
                        »&nbsp;Bowls &amp; Plates
                    </option>

                    <option value="161">
                        &nbsp;
                        »&nbsp;Spoon &amp; Forks
                    </option>

                    <option value="162">
                        &nbsp;
                        »&nbsp;Feeding Set
                    </option>

                    <option value="163">
                        &nbsp;
                        »&nbsp;Milk Powder Containers
                    </option>

                    <option value="165">
                        &nbsp;
                        »&nbsp;Hotpack &amp; Food Containers
                    </option>

                    <option value="166">
                        &nbsp;
                        »&nbsp;Food Processors
                    </option>

                    <option value="168">
                        &nbsp;
                        »&nbsp;Storage &amp; Organizer
                    </option>

                    <option value="169">
                        &nbsp;»&nbsp;Pantry
                    </option>

                    <option value="170">
                        &nbsp;
                        »&nbsp;Snacks &amp; Drinks
                    </option>

                    <option value="171">
                        &nbsp;
                        »&nbsp;Baby Foods Pasta &amp; Noodles
                    </option>

                    <option value="172">
                        &nbsp;
                        »&nbsp;Baby Formula Milks
                    </option>

                    <option value="173">
                        &nbsp;
                        »&nbsp;Jams &amp; Spreads
                    </option>

                    <option value="174">
                        &nbsp;
                        »&nbsp;Organic &amp; Superfood
                    </option>

                    <option value="175">
                        &nbsp;
                        »&nbsp;Chocolates &amp; Candy
                    </option>

                    <option value="176">
                        &nbsp;
                        »&nbsp;Powdered Milk
                    </option>

                    <option value="569">
                        &nbsp;
                        »&nbsp;Oats &amp; Cereals
                    </option>

                    <option value="570">
                        &nbsp;
                        »&nbsp;Custard &amp; Porridges
                    </option>

                    <option value="178">
                        &nbsp;»&nbsp;High Chair &amp; Boosters
                    </option>

                    <option value="179">
                        &nbsp;»&nbsp;Cleaning &amp; Sterilization
                    </option>

                    <option value="180">
                        &nbsp;
                        »&nbsp;Cleaning Brushes
                    </option>

                    <option value="181">
                        &nbsp;
                        »&nbsp;Bottle Wash &amp; Cleanser
                    </option>

                    <option value="182">
                        &nbsp;
                        »&nbsp;Sterilizers
                    </option>

                    <option value="183">
                        &nbsp;»&nbsp;Pacifiers &amp; Teethers
                    </option>

                    <option value="557">
                        &nbsp;
                        »&nbsp;Fruits Pacifiers
                    </option>

                    <option value="184">
                        &nbsp;
                        »&nbsp;Pacifiers &amp; Soothers
                    </option>

                    <option value="185">
                        &nbsp;
                        »&nbsp;Teethers
                    </option>

                    <option value="186">
                        &nbsp;
                        »&nbsp;Pacifier accessories
                    </option>

                    <option value="5">
                        Diapers
                    </option>


                    <option value="201">
                        &nbsp;»&nbsp;Urine Mat - Changing Mat
                    </option>

                    <option value="202">
                        &nbsp;
                        »&nbsp;Lap Size - Small
                    </option>

                    <option value="203">
                        &nbsp;
                        »&nbsp;Medium - Large
                    </option>

                    <option value="204">
                        &nbsp;
                        »&nbsp;X-Large &amp; XX-Large
                    </option>

                    <option value="205">
                        &nbsp;
                        »&nbsp;Half Bed
                    </option>

                    <option value="206">
                        &nbsp;
                        »&nbsp;Full Bed
                    </option>

                    <option value="207">
                        &nbsp;»&nbsp;Washable Clothes Diaper
                    </option>

                    <option value="208">
                        &nbsp;
                        »&nbsp;Cloth Diaper Training Pants
                    </option>

                    <option value="209">
                        &nbsp;
                        »&nbsp;Inserts - Pads
                    </option>

                    <option value="210">
                        &nbsp;»&nbsp;Diaper Bag &amp; Backpacks
                    </option>

                    <option value="211">
                        &nbsp;
                        »&nbsp;Mommy Diaper Backpacks
                    </option>

                    <option value="212">
                        &nbsp;
                        »&nbsp;Diaper Bags - Hospital Bags
                    </option>

                    <option value="213">
                        &nbsp;»&nbsp;Potty Chair &amp; Seats
                    </option>

                    <option value="214">
                        &nbsp;
                        »&nbsp;Baby Potty Training
                    </option>

                    <option value="215">
                        &nbsp;
                        »&nbsp;Potty Seats
                    </option>

                    <option value="216">
                        &nbsp;»&nbsp;Diaper Rash Cream
                    </option>

                    <option value="217">
                        &nbsp;»&nbsp;Baby Wipes
                    </option>

                    <option value="194">
                        &nbsp;»&nbsp;Disposable Baby Diapers
                    </option>

                    <option value="571">
                        &nbsp;
                        »&nbsp;Diaper Pants
                    </option>

                    <option value="572">
                        &nbsp;
                        »&nbsp;Belt - Taped Diaper
                    </option>

                    <option value="595">
                        &nbsp;
                        »&nbsp;Newborn Baby Diapers
                    </option>

                    <option value="134">
                        &nbsp;»&nbsp;Urine Alarm
                    </option>

                    <option value="6">
                        Bath &amp; Skin
                    </option>


                    <option value="218">
                        &nbsp;»&nbsp;Bathing Essentials
                    </option>

                    <option value="321">
                        &nbsp;
                        »&nbsp;Kids Pools &amp; Acceesories
                    </option>

                    <option value="398">
                        &nbsp;
                        »&nbsp;Baby Bathers
                    </option>

                    <option value="219">
                        &nbsp;
                        »&nbsp;Bath Tubs
                    </option>

                    <option value="222">
                        &nbsp;»&nbsp;Bathing Accessories
                    </option>

                    <option value="221">
                        &nbsp;
                        »&nbsp;Bath Sponge &amp; Loofah
                    </option>

                    <option value="577">
                        &nbsp;
                        »&nbsp;Shower Caps
                    </option>

                    <option value="578">
                        &nbsp;
                        »&nbsp;Soap Cases
                    </option>

                    <option value="579">
                        &nbsp;
                        »&nbsp;Bath Mittens
                    </option>

                    <option value="580">
                        &nbsp;
                        »&nbsp;Shower Mugs
                    </option>

                    <option value="223">
                        &nbsp;»&nbsp;Hair, Body &amp; Skin
                    </option>

                    <option value="224">
                        &nbsp;
                        »&nbsp;Baby Shampoo &amp; Conditioner
                    </option>

                    <option value="225">
                        &nbsp;
                        »&nbsp;Baby Lotion
                    </option>

                    <option value="226">
                        &nbsp;
                        »&nbsp;Oils
                    </option>

                    <option value="227">
                        &nbsp;
                        »&nbsp;Petroleium Jelly
                    </option>

                    <option value="228">
                        &nbsp;
                        »&nbsp;Skincare Gift Set
                    </option>

                    <option value="573">
                        &nbsp;
                        »&nbsp;Bodywash - Top To Toe Wash
                    </option>

                    <option value="574">
                        &nbsp;
                        »&nbsp;Baby Soap - Cleansing Bar
                    </option>

                    <option value="575">
                        &nbsp;
                        »&nbsp;Baby Cream
                    </option>

                    <option value="576">
                        &nbsp;
                        »&nbsp;Baby Powder
                    </option>

                    <option value="232">
                        &nbsp;»&nbsp;Baby Cologne &amp; Perfumes
                    </option>

                    <option value="7">
                        Health &amp; Safety
                    </option>


                    <option value="266">
                        &nbsp;»&nbsp;Health Safety Essentials
                    </option>

                    <option value="267">
                        &nbsp;
                        »&nbsp;Face Masks &amp; Shields
                    </option>

                    <option value="593">
                        &nbsp;
                        &nbsp;
                        »&nbsp;unused
                    </option>

                    <option value="270">
                        &nbsp;
                        »&nbsp;Handwash &amp; Hand Sanitizers
                    </option>

                    <option value="271">
                        &nbsp;
                        »&nbsp;Disinfectants
                    </option>

                    <option value="272">
                        &nbsp;»&nbsp;Detergent &amp; Softeners
                    </option>

                    <option value="273">
                        &nbsp;
                        »&nbsp;Laundry Detergent Liquid
                    </option>

                    <option value="274">
                        &nbsp;
                        »&nbsp;Laundry Softener
                    </option>

                    <option value="582">
                        &nbsp;
                        »&nbsp;Laundry Detergent Powder
                    </option>

                    <option value="275">
                        &nbsp;»&nbsp;Baby Oral Care
                    </option>

                    <option value="276">
                        &nbsp;
                        »&nbsp;Toothpaste
                    </option>

                    <option value="277">
                        &nbsp;
                        »&nbsp;Toothbrush
                    </option>

                    <option value="278">
                        &nbsp;
                        »&nbsp;Tongue Cleaners
                    </option>

                    <option value="279">
                        &nbsp;
                        »&nbsp;Finger Toothbrush
                    </option>

                    <option value="280">
                        &nbsp;
                        »&nbsp;Electric Toothbrush
                    </option>

                    <option value="281">
                        &nbsp;
                        »&nbsp;Training &amp; Gum Toothbrush
                    </option>

                    <option value="282">
                        &nbsp;
                        »&nbsp;Oral Care Set
                    </option>

                    <option value="283">
                        &nbsp;
                        »&nbsp;Toothbrush Holders
                    </option>

                    <option value="284">
                        &nbsp;»&nbsp;Anti Mosquito Care
                    </option>

                    <option value="285">
                        &nbsp;
                        »&nbsp;Anti Mosquito Roll-Ons
                    </option>

                    <option value="286">
                        &nbsp;
                        »&nbsp;Anti Mosquito Patches
                    </option>

                    <option value="287">
                        &nbsp;
                        »&nbsp;Mosquito Repellant Bands
                    </option>

                    <option value="288">
                        &nbsp;
                        »&nbsp;Anti Mosquito Sprays
                    </option>

                    <option value="289">
                        &nbsp;
                        »&nbsp;Mosquito Repellant Creams &amp; Gels
                    </option>

                    <option value="290">
                        &nbsp;
                        »&nbsp;Mosquito Repellant Devices
                    </option>

                    <option value="291">
                        &nbsp;
                        »&nbsp;Mosquito Repellent Oils
                    </option>

                    <option value="243">
                        &nbsp;»&nbsp;Baby Healthcare
                    </option>

                    <option value="265">
                        &nbsp;
                        »&nbsp;Humidifiers &amp; Air Purifiers
                    </option>

                    <option value="177">
                        &nbsp;
                        »&nbsp;Multivitamins &amp; OTC Medicine
                    </option>

                    <option value="244">
                        &nbsp;
                        »&nbsp;Gripe Water
                    </option>

                    <option value="245">
                        &nbsp;
                        »&nbsp;Thermometers
                    </option>

                    <option value="246">
                        &nbsp;
                        »&nbsp;Cotton Buds &amp; Balls
                    </option>

                    <option value="247">
                        &nbsp;
                        »&nbsp;Cold Relief &amp; Inhalers
                    </option>

                    <option value="248">
                        &nbsp;
                        »&nbsp;Nasal Aspirators
                    </option>

                    <option value="250">
                        &nbsp;
                        »&nbsp;Antiseptic Liquid
                    </option>

                    <option value="251">
                        &nbsp;
                        »&nbsp;Baby Scale
                    </option>

                    <option value="252">
                        &nbsp;
                        »&nbsp;Vaporizers &amp; Nebulizers
                    </option>

                    <option value="253">
                        &nbsp;
                        »&nbsp;Droppers &amp; Medicine Spoons
                    </option>

                    <option value="581">
                        &nbsp;
                        »&nbsp;Diagnostics &amp; Testing
                    </option>

                    <option value="596">
                        &nbsp;
                        »&nbsp;Hot Water Bags
                    </option>

                    <option value="254">
                        &nbsp;»&nbsp;Child Safety Essentials
                    </option>

                    <option value="256">
                        &nbsp;
                        »&nbsp;Bed Guards &amp; Rails
                    </option>

                    <option value="257">
                        &nbsp;
                        »&nbsp;Corner &amp; Edge Guards
                    </option>

                    <option value="258">
                        &nbsp;
                        »&nbsp;Elbow and Knee Pads
                    </option>

                    <option value="259">
                        &nbsp;
                        »&nbsp;Child Safety Locks
                    </option>

                    <option value="260">
                        &nbsp;
                        »&nbsp;Electric Socket Covers
                    </option>

                    <option value="261">
                        &nbsp;
                        »&nbsp;Door Stoppers &amp; Guards
                    </option>

                    <option value="262">
                        &nbsp;
                        »&nbsp;Baby Safety Helmets
                    </option>

                    <option value="264">
                        &nbsp;
                        »&nbsp;Kids Safety Belts
                    </option>

                    <option value="255">
                        &nbsp;
                        »&nbsp;Baby Monitors
                    </option>

                    <option value="8">
                        Toys
                    </option>


                    <option value="299">
                        &nbsp;»&nbsp;Early Play Toys
                    </option>

                    <option value="300">
                        &nbsp;
                        »&nbsp;Plush Soft Toys
                    </option>

                    <option value="301">
                        &nbsp;
                        »&nbsp;Baby Rattles - Jhunjhuni
                    </option>

                    <option value="302">
                        &nbsp;
                        »&nbsp;Teether Rattles
                    </option>

                    <option value="303">
                        &nbsp;
                        »&nbsp;Bath Toys
                    </option>

                    <option value="304">
                        &nbsp;
                        »&nbsp;Musical Soft Toys
                    </option>

                    <option value="305">
                        &nbsp;
                        »&nbsp;Crib &amp; Stroller Toys
                    </option>

                    <option value="308">
                        &nbsp;»&nbsp;Indoor Home Play
                    </option>

                    <option value="309">
                        &nbsp;
                        »&nbsp;Play Dough, Sand &amp; Moulds
                    </option>

                    <option value="310">
                        &nbsp;
                        »&nbsp;Building Construction Sets
                    </option>

                    <option value="312">
                        &nbsp;
                        »&nbsp;Play Foods
                    </option>

                    <option value="314">
                        &nbsp;
                        »&nbsp;Piano &amp; Keyboards
                    </option>

                    <option value="315">
                        &nbsp;
                        »&nbsp;Drum Sets &amp; Percussion
                    </option>

                    <option value="316">
                        &nbsp;
                        »&nbsp;Dolls &amp; Dollhouses
                    </option>

                    <option value="317">
                        &nbsp;
                        »&nbsp;Playmat Floormat &amp; Rugs
                    </option>

                    <option value="318">
                        &nbsp;»&nbsp;Outdoor &amp; Backyard Play
                    </option>

                    <option value="319">
                        &nbsp;
                        »&nbsp;Beach &amp; Water Toys
                    </option>

                    <option value="320">
                        &nbsp;
                        »&nbsp;Tent Play House
                    </option>

                    <option value="322">
                        &nbsp;
                        »&nbsp;Swim Gear
                    </option>

                    <option value="323">
                        &nbsp;
                        »&nbsp;Outdoor Slides &amp; Swings
                    </option>

                    <option value="324">
                        &nbsp;
                        »&nbsp;Trampoline &amp; Bouncing Castles
                    </option>

                    <option value="325">
                        &nbsp;
                        »&nbsp;Sandboxes &amp; Water Playtables
                    </option>

                    <option value="326">
                        &nbsp;»&nbsp;Action Toys
                    </option>

                    <option value="327">
                        &nbsp;
                        »&nbsp;Action Figures &amp; Collectibles
                    </option>

                    <option value="328">
                        &nbsp;
                        »&nbsp;Toy Guns &amp; Weapons
                    </option>

                    <option value="329">
                        &nbsp;
                        »&nbsp;Push &amp; Pull Along Toys
                    </option>

                    <option value="330">
                        &nbsp;
                        »&nbsp;Musical Toys
                    </option>

                    <option value="331">
                        &nbsp;
                        »&nbsp;Remote Control Toys
                    </option>

                    <option value="332">
                        &nbsp;
                        »&nbsp;Puzzles
                    </option>

                    <option value="333">
                        &nbsp;»&nbsp;Dress Up &amp; Role Play
                    </option>

                    <option value="334">
                        &nbsp;
                        »&nbsp;Costume &amp; Dress Up
                    </option>

                    <option value="335">
                        &nbsp;
                        »&nbsp;Hero Face Mask
                    </option>

                    <option value="337">
                        &nbsp;
                        »&nbsp;Pretend Play Toys &amp; Sets
                    </option>

                    <option value="338">
                        &nbsp;»&nbsp;Learning &amp; Educational Toys
                    </option>

                    <option value="339">
                        &nbsp;
                        »&nbsp;Stacking Toys
                    </option>

                    <option value="340">
                        &nbsp;
                        »&nbsp;Cloth Books
                    </option>

                    <option value="341">
                        &nbsp;
                        »&nbsp;Draw &amp; Paints
                    </option>

                    <option value="342">
                        &nbsp;
                        »&nbsp;Craft Set
                    </option>

                    <option value="343">
                        &nbsp;
                        »&nbsp;Stickers &amp; Stamps
                    </option>

                    <option value="344">
                        &nbsp;
                        »&nbsp;Coloring &amp; Engraving Art
                    </option>

                    <option value="345">
                        &nbsp;
                        »&nbsp;Words, Pictures &amp; Scrabble
                    </option>

                    <option value="346">
                        &nbsp;
                        »&nbsp;Board Games
                    </option>

                    <option value="584">
                        &nbsp;
                        »&nbsp;Learn Writing
                    </option>

                    <option value="347">
                        &nbsp;»&nbsp;Vehicles Toys
                    </option>

                    <option value="348">
                        &nbsp;
                        »&nbsp;Toys Cars Trains &amp; Planes
                    </option>

                    <option value="349">
                        &nbsp;
                        »&nbsp;Remote Control Vehicles
                    </option>

                    <option value="350">
                        &nbsp;»&nbsp;School Essentials
                    </option>

                    <option value="351">
                        &nbsp;
                        »&nbsp;School Bags &amp; Backpacks
                    </option>

                    <option value="352">
                        &nbsp;
                        »&nbsp;School Shoes &amp; Socks
                    </option>

                    <option value="353">
                        &nbsp;
                        »&nbsp;Water Bottles, Tiffin Boxes
                    </option>

                    <option value="354">
                        &nbsp;
                        »&nbsp;School Stationeries
                    </option>

                    <option value="355">
                        &nbsp;
                        »&nbsp;Read &amp; Learn Books
                    </option>

                    <option value="585">
                        &nbsp;
                        »&nbsp;Study Table &amp; Stools
                    </option>

                    <option value="588">
                        &nbsp;»&nbsp;Replacement Accessories
                    </option>

                    <option value="589">
                        &nbsp;
                        »&nbsp;Batteries
                    </option>

                    <option value="9">
                        Gears
                    </option>


                    <option value="356">
                        &nbsp;»&nbsp;Strollers &amp; Prams
                    </option>

                    <option value="357">
                        &nbsp;
                        »&nbsp;Prams
                    </option>

                    <option value="358">
                        &nbsp;
                        »&nbsp;Lightweight Strollers
                    </option>

                    <option value="359">
                        &nbsp;
                        »&nbsp;Standard Strollers
                    </option>

                    <option value="361">
                        &nbsp;
                        »&nbsp;Travel Systems
                    </option>

                    <option value="362">
                        &nbsp;
                        »&nbsp;Twin Strollers &amp; Prams
                    </option>

                    <option value="586">
                        &nbsp;
                        »&nbsp;Multifunctional Strollers
                    </option>

                    <option value="363">
                        &nbsp;»&nbsp;Infant Activity
                    </option>

                    <option value="364">
                        &nbsp;
                        »&nbsp;Bouncers
                    </option>

                    <option value="365">
                        &nbsp;
                        »&nbsp;Rockers
                    </option>

                    <option value="366">
                        &nbsp;
                        »&nbsp;Cradle Crib &amp; Swings
                    </option>

                    <option value="367">
                        &nbsp;
                        »&nbsp;Balance Chairs
                    </option>

                    <option value="368">
                        &nbsp;
                        »&nbsp;Activity Gyms &amp; Playmats
                    </option>

                    <option value="369">
                        &nbsp;
                        »&nbsp;Playards
                    </option>

                    <option value="370">
                        &nbsp;
                        »&nbsp;Bassinets
                    </option>

                    <option value="583">
                        &nbsp;
                        »&nbsp;Baby Seats
                    </option>

                    <option value="371">
                        &nbsp;»&nbsp;Ride-On &amp; Scooters
                    </option>

                    <option value="372">
                        &nbsp;
                        »&nbsp;Manual Push Ride-ons
                    </option>

                    <option value="373">
                        &nbsp;
                        »&nbsp;Battery Operated Ride-ons
                    </option>

                    <option value="374">
                        &nbsp;
                        »&nbsp;Swing cars - Twisters
                    </option>

                    <option value="375">
                        &nbsp;
                        »&nbsp;Scooters
                    </option>

                    <option value="376">
                        &nbsp;
                        »&nbsp;Balance Bike
                    </option>

                    <option value="377">
                        &nbsp;
                        »&nbsp;Protective Gear
                    </option>

                    <option value="378">
                        &nbsp;
                        »&nbsp;Skates &amp; Skateboards
                    </option>

                    <option value="379">
                        &nbsp;»&nbsp;Bikes &amp; Tricycles
                    </option>

                    <option value="380">
                        &nbsp;
                        »&nbsp;Tricycles
                    </option>

                    <option value="381">
                        &nbsp;
                        »&nbsp;Bicycles
                    </option>

                    <option value="382">
                        &nbsp;
                        »&nbsp;Training - Balance Bikes
                    </option>

                    <option value="383">
                        &nbsp;»&nbsp;Car Seat
                    </option>

                    <option value="384">
                        &nbsp;
                        »&nbsp;Car Seat &amp; Hand Carriers
                    </option>

                    <option value="385">
                        &nbsp;
                        »&nbsp;Forward Facing Car Seat
                    </option>

                    <option value="386">
                        &nbsp;»&nbsp;Baby Walker
                    </option>

                    <option value="387">
                        &nbsp;
                        »&nbsp;Standard Walkers
                    </option>

                    <option value="389">
                        &nbsp;
                        »&nbsp;Rocker Walker
                    </option>

                    <option value="587">
                        &nbsp;
                        »&nbsp;Walking Supports
                    </option>

                    <option value="590">
                        &nbsp;
                        »&nbsp;Musical &amp; Push Walkers
                    </option>

                    <option value="390">
                        &nbsp;»&nbsp;High Chairs &amp; Boosters
                    </option>

                    <option value="391">
                        &nbsp;
                        »&nbsp;High Chairs
                    </option>

                    <option value="392">
                        &nbsp;
                        »&nbsp;Booster Seats
                    </option>

                    <option value="393">
                        &nbsp;
                        »&nbsp;Wooden High Chairs
                    </option>

                    <option value="394">
                        &nbsp;»&nbsp;Baby Carry Supports
                    </option>

                    <option value="395">
                        &nbsp;
                        »&nbsp;Baby Carriers
                    </option>

                    <option value="396">
                        &nbsp;
                        »&nbsp;Baby Carry Cots
                    </option>

                    <option value="397">
                        &nbsp;
                        »&nbsp;Baby Carry Slings
                    </option>

                    <option value="10">
                        Classy Home
                    </option>


                    <option value="400">
                        &nbsp;»&nbsp;Baby Furnitures
                    </option>

                    <option value="401">
                        &nbsp;
                        »&nbsp;Baby Cots &amp; Cribs
                    </option>

                    <option value="402">
                        &nbsp;
                        »&nbsp;Cradle &amp; Bassinets
                    </option>

                    <option value="403">
                        &nbsp;
                        »&nbsp;Crib Mattress &amp; Sheets
                    </option>

                    <option value="404">
                        &nbsp;
                        »&nbsp;Swaddle Blankets
                    </option>

                    <option value="406">
                        &nbsp;
                        »&nbsp;Bed Bumpers
                    </option>

                    <option value="407">
                        &nbsp;»&nbsp;Bedding Essentials
                    </option>

                    <option value="409">
                        &nbsp;
                        »&nbsp;Blankets &amp; Quilts
                    </option>

                    <option value="410">
                        &nbsp;
                        »&nbsp;Family Comforters
                    </option>

                    <option value="411">
                        &nbsp;
                        »&nbsp;Bed Sheets &amp; Covers
                    </option>

                    <option value="412">
                        &nbsp;
                        »&nbsp;Cushion &amp; Pillows
                    </option>

                    <option value="413">
                        &nbsp;
                        »&nbsp;Cushion &amp; Pillow Covers
                    </option>

                    <option value="414">
                        &nbsp;
                        »&nbsp;Family Mosquito Nets
                    </option>

                    <option value="415">
                        &nbsp;
                        »&nbsp;Bed Protector
                    </option>

                    <option value="416">
                        &nbsp;»&nbsp;Home Essentials &amp; Decors
                    </option>

                    <option value="417">
                        &nbsp;
                        »&nbsp;Lighting &amp; Lamps
                    </option>

                    <option value="418">
                        &nbsp;
                        »&nbsp;Wall Decors &amp; Accessories
                    </option>

                    <option value="419">
                        &nbsp;
                        »&nbsp;Rugs &amp; Playmats
                    </option>

                    <option value="420">
                        &nbsp;
                        »&nbsp;Wall Clocks &amp; Table Clocks
                    </option>

                    <option value="421">
                        &nbsp;
                        »&nbsp;Laundry Bag &amp; Baskets
                    </option>

                    <option value="422">
                        &nbsp;
                        »&nbsp;Hangers &amp; Hooks
                    </option>

                    <option value="423">
                        &nbsp;
                        »&nbsp;Door &amp; Window Curtain
                    </option>

                    <option value="424">
                        &nbsp;
                        »&nbsp;Table, Chairs &amp; Stools
                    </option>

                    <option value="559">
                        &nbsp;
                        »&nbsp;Organizers &amp; Storage
                    </option>

                    <option value="425">
                        &nbsp;»&nbsp;Luggage &amp; Bags
                    </option>

                    <option value="426">
                        &nbsp;
                        »&nbsp;Kids Luggage &amp; Trolley Bag
                    </option>

                    <option value="427">
                        &nbsp;
                        »&nbsp;Duffle Bag - Travel Bag
                    </option>

                    <option value="428">
                        &nbsp;
                        »&nbsp;Kids Accessories Bag
                    </option>

                    <option value="429">
                        &nbsp;
                        »&nbsp;Luggage Tags
                    </option>

                    <option value="430">
                        &nbsp;
                        »&nbsp;Bag Accessories
                    </option>

                    <option value="591">
                        &nbsp;
                        »&nbsp;Lunch Bags
                    </option>

                    <option value="431">
                        &nbsp;»&nbsp;Mom's Kitchen
                    </option>

                    <option value="432">
                        &nbsp;
                        »&nbsp;Knifes &amp; Chopping Board
                    </option>

                    <option value="433">
                        &nbsp;
                        »&nbsp;Servings &amp; Tablewares
                    </option>

                    <option value="434">
                        &nbsp;
                        »&nbsp;Kitchen Appliances
                    </option>

                    <option value="435">
                        &nbsp;
                        »&nbsp;Cookware
                    </option>

                    <option value="436">
                        &nbsp;
                        »&nbsp;Bakeware
                    </option>

                    <option value="437">
                        &nbsp;
                        »&nbsp;Kitchen Utensils
                    </option>

                    <option value="438">
                        &nbsp;
                        »&nbsp;Cutleries
                    </option>

                    <option value="439">
                        &nbsp;
                        »&nbsp;Kitchen Textiles
                    </option>

                    <option value="440">
                        &nbsp;
                        »&nbsp;Foods Storange
                    </option>

                    <option value="441">
                        &nbsp;
                        »&nbsp;Household Supplies
                    </option>

                    <option value="601">
                        &nbsp;
                        »&nbsp;Cooking Supplies
                    </option>

                    <option value="11">
                        Birthday
                    </option>


                    <option value="442">
                        &nbsp;»&nbsp;Party Supplies &amp; Decoration
                    </option>

                    <option value="443">
                        &nbsp;
                        »&nbsp;Plates, Cups &amp; Table Decors
                    </option>

                    <option value="444">
                        &nbsp;
                        »&nbsp;Gift Bags &amp; Wrapper
                    </option>

                    <option value="445">
                        &nbsp;
                        »&nbsp;Stickers &amp; Blow Outs
                    </option>

                    <option value="446">
                        &nbsp;
                        »&nbsp;Party Ballons
                    </option>

                    <option value="447">
                        &nbsp;
                        »&nbsp;Banners &amp; Decors
                    </option>

                    <option value="448">
                        &nbsp;
                        »&nbsp;Birthday Decoration Kit
                    </option>

                    <option value="449">
                        &nbsp;
                        »&nbsp;Party Props &amp; Caps
                    </option>

                    <option value="450">
                        &nbsp;
                        »&nbsp;Wall Paper &amp; Stickers
                    </option>

                    <option value="451">
                        &nbsp;
                        »&nbsp;Hats, Bands, Masks
                    </option>

                    <option value="452">
                        &nbsp;
                        »&nbsp;Birthday Themes
                    </option>

                    <option value="453">
                        &nbsp;»&nbsp;Candles &amp; Cake Themes
                    </option>

                    <option value="454">
                        &nbsp;
                        »&nbsp;Candle &amp; Cake Toppers
                    </option>

                    <option value="455">
                        &nbsp;
                        »&nbsp;Candies &amp; Chocolates
                    </option>

                    <option value="456">
                        &nbsp;
                        »&nbsp;Kids Foods &amp; Snacks
                    </option>

                    <option value="457">
                        &nbsp;»&nbsp;Gifts &amp; Premiums
                    </option>

                    <option value="458">
                        &nbsp;
                        »&nbsp;Toiletries Gift Set
                    </option>

                    <option value="459">
                        &nbsp;
                        »&nbsp;Clothing Gift Set
                    </option>

                    <option value="460">
                        &nbsp;
                        »&nbsp;Multi Clothing Sets
                    </option>

                    <option value="461">
                        &nbsp;
                        »&nbsp;Birthday Theme Clothes
                    </option>

                    <option value="462">
                        &nbsp;
                        »&nbsp;Dress Up Tutu
                    </option>

                    <option value="463">
                        &nbsp;
                        »&nbsp;Gifting Accessories
                    </option>

                    <option value="464">
                        &nbsp;
                        »&nbsp;Toys Gifts
                    </option>

                    <option value="12">
                        Moms
                    </option>


                    <option value="512">
                        &nbsp;»&nbsp;Maternity Clotings
                    </option>

                    <option value="514">
                        &nbsp;
                        »&nbsp;Dresses &amp; Tops
                    </option>

                    <option value="515">
                        &nbsp;
                        »&nbsp;Bottomwear
                    </option>

                    <option value="516">
                        &nbsp;
                        »&nbsp;Nursing &amp; Sleepwear
                    </option>

                    <option value="517">
                        &nbsp;
                        »&nbsp;Socks &amp; Hosiery
                    </option>

                    <option value="518">
                        &nbsp;»&nbsp;Make Up Essentials
                    </option>

                    <option value="519">
                        &nbsp;
                        »&nbsp;Facial Makeup
                    </option>

                    <option value="520">
                        &nbsp;
                        »&nbsp;Eyes Makeup
                    </option>

                    <option value="521">
                        &nbsp;
                        »&nbsp;Lips Makeup
                    </option>

                    <option value="522">
                        &nbsp;
                        »&nbsp;Nails Makeup
                    </option>

                    <option value="523">
                        &nbsp;
                        »&nbsp;Make Up Palattes
                    </option>

                    <option value="524">
                        &nbsp;
                        »&nbsp;Make Up Brshes &amp; Tools
                    </option>

                    <option value="525">
                        &nbsp;
                        »&nbsp;Make Up Bags
                    </option>

                    <option value="465">
                        &nbsp;»&nbsp;Skincare &amp; Bodycare
                    </option>

                    <option value="466">
                        &nbsp;
                        »&nbsp;Moisturisers &amp; Anti Aging
                    </option>

                    <option value="467">
                        &nbsp;
                        »&nbsp;Serum &amp; Oils
                    </option>

                    <option value="468">
                        &nbsp;
                        »&nbsp;Facial Skincare &amp; Accessories
                    </option>

                    <option value="469">
                        &nbsp;
                        »&nbsp;Eye &amp; Lip Care
                    </option>

                    <option value="470">
                        &nbsp;
                        »&nbsp;Body Lotions &amp; Body Oils
                    </option>

                    <option value="471">
                        &nbsp;
                        »&nbsp;Hand &amp; Foot Care
                    </option>

                    <option value="472">
                        &nbsp;
                        »&nbsp;Whitening, Acne &amp; Suncare
                    </option>

                    <option value="473">
                        &nbsp;
                        »&nbsp;High Tech Skincare Accessories
                    </option>

                    <option value="474">
                        &nbsp;»&nbsp;Personal Care
                    </option>

                    <option value="475">
                        &nbsp;
                        »&nbsp;Bath &amp; Shower
                    </option>

                    <option value="476">
                        &nbsp;
                        »&nbsp;Oral Care
                    </option>

                    <option value="477">
                        &nbsp;
                        »&nbsp;Deodorants
                    </option>

                    <option value="478">
                        &nbsp;
                        »&nbsp;Feminine Care
                    </option>

                    <option value="479">
                        &nbsp;
                        »&nbsp;Hair Removal
                    </option>

                    <option value="480">
                        &nbsp;
                        »&nbsp;Tissues &amp; Cotton Wools
                    </option>

                    <option value="565">
                        &nbsp;
                        »&nbsp;Manicure &amp; Pedicure
                    </option>

                    <option value="481">
                        &nbsp;»&nbsp;Hair Care
                    </option>

                    <option value="482">
                        &nbsp;
                        »&nbsp;Shampoo &amp; Conditioner
                    </option>

                    <option value="483">
                        &nbsp;
                        »&nbsp;Oils &amp; Treatments
                    </option>

                    <option value="484">
                        &nbsp;
                        »&nbsp;Conditioners
                    </option>

                    <option value="485">
                        &nbsp;
                        »&nbsp;Hair Colors
                    </option>

                    <option value="486">
                        &nbsp;
                        »&nbsp;Hair Treatments
                    </option>

                    <option value="487">
                        &nbsp;
                        »&nbsp;Hair Styling
                    </option>

                    <option value="488">
                        &nbsp;
                        »&nbsp;Hair Brushes &amp; Accessories
                    </option>

                    <option value="489">
                        &nbsp;
                        »&nbsp;Electrical Hair Care
                    </option>

                    <option value="490">
                        &nbsp;»&nbsp;Motherhood Essentials
                    </option>

                    <option value="491">
                        &nbsp;
                        »&nbsp;Parenting Books
                    </option>

                    <option value="492">
                        &nbsp;
                        »&nbsp;Maternity Personal Care
                    </option>

                    <option value="493">
                        &nbsp;
                        »&nbsp;Breast Feeding Care
                    </option>

                    <option value="494">
                        &nbsp;
                        »&nbsp;Maternity Belts
                    </option>

                    <option value="495">
                        &nbsp;
                        »&nbsp;Maternity Pillows
                    </option>

                    <option value="496">
                        &nbsp;
                        »&nbsp;Shapewears
                    </option>

                    <option value="497">
                        &nbsp;
                        »&nbsp;Nursing Bras
                    </option>

                    <option value="498">
                        &nbsp;
                        »&nbsp;Nursing Pillows
                    </option>

                    <option value="499">
                        &nbsp;»&nbsp;Bags for Moms
                    </option>

                    <option value="500">
                        &nbsp;
                        »&nbsp;Fashion Bags
                    </option>

                    <option value="502">
                        &nbsp;
                        »&nbsp;Clutches
                    </option>

                    <option value="503">
                        &nbsp;
                        »&nbsp;Travel &amp; Gym Bag
                    </option>

                    <option value="504">
                        &nbsp;
                        »&nbsp;Cosmetics Bag
                    </option>

                    <option value="505">
                        &nbsp;
                        »&nbsp;Accesorries Bags
                    </option>

                    <option value="506">
                        &nbsp;
                        »&nbsp;Foldable Bags
                    </option>

                    <option value="597">
                        &nbsp;
                        »&nbsp;Tote &amp; Shoulder Bags
                    </option>

                    <option value="507">
                        &nbsp;»&nbsp;Moms Healthcare
                    </option>

                    <option value="508">
                        &nbsp;
                        »&nbsp;Family Planning
                    </option>

                    <option value="509">
                        &nbsp;
                        »&nbsp;Vitamins &amp; Supplements
                    </option>

                    <option value="510">
                        &nbsp;
                        »&nbsp;Foods &amp; Nuturitions
                    </option>

                    <option value="511">
                        &nbsp;
                        »&nbsp;Stretch Repair Cream &amp; Oils
                    </option>

                    <option value="592">
                        &nbsp;
                        »&nbsp;Weight Management
                    </option>

                    <option value="513">
                        Footwear
                    </option>


                    <option value="528">
                        &nbsp;»&nbsp;Shoes &amp; Sandals
                    </option>

                    <option value="533">
                        &nbsp;
                        »&nbsp;Sneaker &amp; Sports Shoes
                    </option>

                    <option value="534">
                        &nbsp;
                        »&nbsp;Formal &amp; Party Shoes
                    </option>

                    <option value="535">
                        &nbsp;
                        »&nbsp;School Shoes
                    </option>

                    <option value="536">
                        &nbsp;
                        »&nbsp;Clogs
                    </option>

                    <option value="537">
                        &nbsp;
                        »&nbsp;Sandal Shoes
                    </option>

                    <option value="538">
                        &nbsp;
                        »&nbsp;Flip Flop
                    </option>

                    <option value="530">
                        &nbsp;»&nbsp;Socks
                    </option>

                    <option value="539">
                        &nbsp;
                        »&nbsp;Newborn Socks &amp; Booties
                    </option>

                    <option value="540">
                        &nbsp;
                        »&nbsp;Regular Socks
                    </option>

                    <option value="541">
                        &nbsp;
                        »&nbsp;School Socks
                    </option>

                    <option value="542">
                        &nbsp;
                        »&nbsp;Fashion Socks
                    </option>

                    <option value="531">
                        &nbsp;»&nbsp;Sock Shoes
                    </option>

                    <option value="545">
                        &nbsp;
                        »&nbsp;Booties &amp; Socks Shoes
                    </option>

                    <option value="546">
                        &nbsp;
                        »&nbsp;Rubber Sole Sock Shoes
                    </option>

                </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-10-68ob" style="width: 159.484px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-category_id-container" aria-controls="select2-category_id-container"><span class="select2-selection__rendered" id="select2-category_id-container" role="textbox" aria-readonly="true" title="All Category">All Category</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>


            </div>
            <div class="col input-group">
                <span class="input-group-text"><svg class="svg-inline--fa fa-warehouse fa-w-20" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="warehouse" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M504 352H136.4c-4.4 0-8 3.6-8 8l-.1 48c0 4.4 3.6 8 8 8H504c4.4 0 8-3.6 8-8v-48c0-4.4-3.6-8-8-8zm0 96H136.1c-4.4 0-8 3.6-8 8l-.1 48c0 4.4 3.6 8 8 8h368c4.4 0 8-3.6 8-8v-48c0-4.4-3.6-8-8-8zm0-192H136.6c-4.4 0-8 3.6-8 8l-.1 48c0 4.4 3.6 8 8 8H504c4.4 0 8-3.6 8-8v-48c0-4.4-3.6-8-8-8zm106.5-139L338.4 3.7a48.15 48.15 0 0 0-36.9 0L29.5 117C11.7 124.5 0 141.9 0 161.3V504c0 4.4 3.6 8 8 8h80c4.4 0 8-3.6 8-8V256c0-17.6 14.6-32 32.6-32h382.8c18 0 32.6 14.4 32.6 32v248c0 4.4 3.6 8 8 8h80c4.4 0 8-3.6 8-8V161.3c0-19.4-11.7-36.8-29.5-44.3z"></path></svg><!-- <i class="fas fa-warehouse"></i> Font Awesome fontawesome.com --></span>
                <select class="form-control select2 select2-hidden-accessible" name="warehouse_id" id="warehouse_id" data-select2-id="select2-data-warehouse_id" tabindex="-1" aria-hidden="true">
                    <option value="1" selected="" data-select2-id="select2-data-13-f9hv">Main
                    </option>
                </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr" data-select2-id="select2-data-12-egpz" style="width: 143.234px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-warehouse_id-container" aria-controls="select2-warehouse_id-container"><span class="select2-selection__rendered" id="select2-warehouse_id-container" role="textbox" aria-readonly="true" title="Main
                    ">Main
                    </span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>

                <span class="input-group-text" onclick="resetCart()"><svg class="svg-inline--fa fa-recycle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="recycle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M184.561 261.903c3.232 13.997-12.123 24.635-24.068 17.168l-40.736-25.455-50.867 81.402C55.606 356.273 70.96 384 96.012 384H148c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12H96.115c-75.334 0-121.302-83.048-81.408-146.88l50.822-81.388-40.725-25.448c-12.081-7.547-8.966-25.961 4.879-29.158l110.237-25.45c8.611-1.988 17.201 3.381 19.189 11.99l25.452 110.237zm98.561-182.915l41.289 66.076-40.74 25.457c-12.051 7.528-9 25.953 4.879 29.158l110.237 25.45c8.672 1.999 17.215-3.438 19.189-11.99l25.45-110.237c3.197-13.844-11.99-24.719-24.068-17.168l-40.687 25.424-41.263-66.082c-37.521-60.033-125.209-60.171-162.816 0l-17.963 28.766c-3.51 5.62-1.8 13.021 3.82 16.533l33.919 21.195c5.62 3.512 13.024 1.803 16.536-3.817l17.961-28.743c12.712-20.341 41.973-19.676 54.257-.022zM497.288 301.12l-27.515-44.065c-3.511-5.623-10.916-7.334-16.538-3.821l-33.861 21.159c-5.62 3.512-7.33 10.915-3.818 16.536l27.564 44.112c13.257 21.211-2.057 48.96-27.136 48.96H320V336.02c0-14.213-17.242-21.383-27.313-11.313l-80 79.981c-6.249 6.248-6.249 16.379 0 22.627l80 79.989C302.689 517.308 320 510.3 320 495.989V448h95.88c75.274 0 121.335-82.997 81.408-146.88z"></path></svg><!-- <i class="fas fa-recycle"></i> Font Awesome fontawesome.com --></span>

            </div>

        </div>

        <div class="row p-2 gutter-sizer product-row" style="border-left: 3px solid #efefef !important; "><div class="col-md-4 mb-2">
                <div class="product">
                    <input type="hidden" class="item-type-id" value="1">
                    <input type="hidden" class="item-id" value="9565">
                    <input type="hidden" class="item-name" value="Cetaphil Baby Gentle Wash &amp; Shampoo 230ml (Germany)">
                    <input type="hidden" class="item-sku" value="35202">
                    <input type="hidden" class="item-purchase-price" value="880.00">
                    <input type="hidden" class="item-sale-price" value="1190.00">
                    <input type="hidden" class="item-discount-price" value="0">
                    <input type="hidden" class="item-vat-percent" value="0.00">
                    <input type="hidden" class="item-discount-percent" value="0">
                    <input type="hidden" class="item-unit" value="Each">
                    <input type="hidden" class="item-sub-text" value="1">
                    <input type="hidden" class="item-is-variation" value="">
                    <input type="hidden" class="item-is-measurement" value="No">
                    <input type="hidden" class="item-current-stock" value="5.000000">
                    <input type="hidden" class="item-weight" value="0.20">

                    <a href="javascript:void(0)" class="card-info">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="p-name">Cetaphil Baby Gentle Wash &amp; Shampoo...</div>

                                <div class="d-flex justify-content-between">
                                    <b>
                                        1190.00 ৳
                                    </b>
                                    <span class="badge bg-success">5.00</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="card-overlay" type="button" onclick="addItem(this)">
                        <svg class="svg-inline--fa fa-plus fa-w-14 add-icon position-absolute" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg><!-- <i class="fas fa-plus add-icon position-absolute"></i> Font Awesome fontawesome.com -->
                    </a>
                </div>
            </div>

            <div class="col-md-4 mb-2">
                <div class="product">
                    <input type="hidden" class="item-type-id" value="1">
                    <input type="hidden" class="item-id" value="9564">
                    <input type="hidden" class="item-name" value="Johnson&#39;s Bedtime Baby Powder 200gm (Indonesia)">
                    <input type="hidden" class="item-sku" value="35201">
                    <input type="hidden" class="item-purchase-price" value="210.00">
                    <input type="hidden" class="item-sale-price" value="330.00">
                    <input type="hidden" class="item-discount-price" value="0">
                    <input type="hidden" class="item-vat-percent" value="0.00">
                    <input type="hidden" class="item-discount-percent" value="0">
                    <input type="hidden" class="item-unit" value="Each">
                    <input type="hidden" class="item-sub-text" value="1">
                    <input type="hidden" class="item-is-variation" value="">
                    <input type="hidden" class="item-is-measurement" value="No">
                    <input type="hidden" class="item-current-stock" value="6.000000">
                    <input type="hidden" class="item-weight" value="0.20">

                    <a href="javascript:void(0)" class="card-info">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="p-name">Johnson's Bedtime Baby Powder 200gm...</div>

                                <div class="d-flex justify-content-between">
                                    <b>
                                        330.00 ৳
                                    </b>
                                    <span class="badge bg-success">6.00</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="card-overlay" type="button" onclick="addItem(this)">
                        <svg class="svg-inline--fa fa-plus fa-w-14 add-icon position-absolute" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg><!-- <i class="fas fa-plus add-icon position-absolute"></i> Font Awesome fontawesome.com -->
                    </a>
                </div>
            </div>

            <div class="col-md-4 mb-2">
                <div class="product">
                    <input type="hidden" class="item-type-id" value="1">
                    <input type="hidden" class="item-id" value="9563">
                    <input type="hidden" class="item-name" value="Nuby Active Sipeez Snack N Sip 12m+ 270ml">
                    <input type="hidden" class="item-sku" value="35200PK">
                    <input type="hidden" class="item-purchase-price" value="500.00">
                    <input type="hidden" class="item-sale-price" value="700.00">
                    <input type="hidden" class="item-discount-price" value="0">
                    <input type="hidden" class="item-vat-percent" value="0.00">
                    <input type="hidden" class="item-discount-percent" value="0">
                    <input type="hidden" class="item-unit" value="Each">
                    <input type="hidden" class="item-sub-text" value="1">
                    <input type="hidden" class="item-is-variation" value="">
                    <input type="hidden" class="item-is-measurement" value="No">
                    <input type="hidden" class="item-current-stock" value="4.000000">
                    <input type="hidden" class="item-weight" value="0.30">

                    <a href="javascript:void(0)" class="card-info">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="p-name">Nuby Active Sipeez Snack N Sip 12m+...</div>

                                <div class="d-flex justify-content-between">
                                    <b>
                                        700.00 ৳
                                    </b>
                                    <span class="badge bg-success">4.00</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="card-overlay" type="button" onclick="addItem(this)">
                        <svg class="svg-inline--fa fa-plus fa-w-14 add-icon position-absolute" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg><!-- <i class="fas fa-plus add-icon position-absolute"></i> Font Awesome fontawesome.com -->
                    </a>
                </div>
            </div>

            <div class="col-md-4 mb-2">
                <div class="product">
                    <input type="hidden" class="item-type-id" value="1">
                    <input type="hidden" class="item-id" value="9562">
                    <input type="hidden" class="item-name" value="Nuby Active Sipeez Snack N Sip 12m+ 270ml">
                    <input type="hidden" class="item-sku" value="35200BL">
                    <input type="hidden" class="item-purchase-price" value="500.00">
                    <input type="hidden" class="item-sale-price" value="700.00">
                    <input type="hidden" class="item-discount-price" value="0">
                    <input type="hidden" class="item-vat-percent" value="0.00">
                    <input type="hidden" class="item-discount-percent" value="0">
                    <input type="hidden" class="item-unit" value="Each">
                    <input type="hidden" class="item-sub-text" value="1">
                    <input type="hidden" class="item-is-variation" value="">
                    <input type="hidden" class="item-is-measurement" value="No">
                    <input type="hidden" class="item-current-stock" value="4.000000">
                    <input type="hidden" class="item-weight" value="0.30">

                    <a href="javascript:void(0)" class="card-info">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="p-name">Nuby Active Sipeez Snack N Sip 12m+...</div>

                                <div class="d-flex justify-content-between">
                                    <b>
                                        700.00 ৳
                                    </b>
                                    <span class="badge bg-success">4.00</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="card-overlay" type="button" onclick="addItem(this)">
                        <svg class="svg-inline--fa fa-plus fa-w-14 add-icon position-absolute" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg><!-- <i class="fas fa-plus add-icon position-absolute"></i> Font Awesome fontawesome.com -->
                    </a>
                </div>
            </div>

            <div class="col-md-4 mb-2">
                <div class="product">
                    <input type="hidden" class="item-type-id" value="1">
                    <input type="hidden" class="item-id" value="9561">
                    <input type="hidden" class="item-name" value="Nuby Active Sipeez Snack N Sip 12m+ 270ml">
                    <input type="hidden" class="item-sku" value="35200RD">
                    <input type="hidden" class="item-purchase-price" value="500.00">
                    <input type="hidden" class="item-sale-price" value="700.00">
                    <input type="hidden" class="item-discount-price" value="0">
                    <input type="hidden" class="item-vat-percent" value="0.00">
                    <input type="hidden" class="item-discount-percent" value="0">
                    <input type="hidden" class="item-unit" value="Each">
                    <input type="hidden" class="item-sub-text" value="1">
                    <input type="hidden" class="item-is-variation" value="">
                    <input type="hidden" class="item-is-measurement" value="No">
                    <input type="hidden" class="item-current-stock" value="4.000000">
                    <input type="hidden" class="item-weight" value="0.30">

                    <a href="javascript:void(0)" class="card-info">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="p-name">Nuby Active Sipeez Snack N Sip 12m+...</div>

                                <div class="d-flex justify-content-between">
                                    <b>
                                        700.00 ৳
                                    </b>
                                    <span class="badge bg-success">4.00</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="card-overlay" type="button" onclick="addItem(this)">
                        <svg class="svg-inline--fa fa-plus fa-w-14 add-icon position-absolute" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg><!-- <i class="fas fa-plus add-icon position-absolute"></i> Font Awesome fontawesome.com -->
                    </a>
                </div>
            </div>

            <div class="col-md-4 mb-2">
                <div class="product">
                    <input type="hidden" class="item-type-id" value="1">
                    <input type="hidden" class="item-id" value="9560">
                    <input type="hidden" class="item-name" value="Puck Triange Cheese 8pcs 120g">
                    <input type="hidden" class="item-sku" value="35199">
                    <input type="hidden" class="item-purchase-price" value="150.00">
                    <input type="hidden" class="item-sale-price" value="270.00">
                    <input type="hidden" class="item-discount-price" value="0">
                    <input type="hidden" class="item-vat-percent" value="0.00">
                    <input type="hidden" class="item-discount-percent" value="0">
                    <input type="hidden" class="item-unit" value="Each">
                    <input type="hidden" class="item-sub-text" value="1">
                    <input type="hidden" class="item-is-variation" value="">
                    <input type="hidden" class="item-is-measurement" value="No">
                    <input type="hidden" class="item-current-stock" value="19.000000">
                    <input type="hidden" class="item-weight" value="0.15">

                    <a href="javascript:void(0)" class="card-info">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="p-name">Puck Triange Cheese 8pcs 120g</div>

                                <div class="d-flex justify-content-between">
                                    <b>
                                        270.00 ৳
                                    </b>
                                    <span class="badge bg-success">19.00</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="card-overlay" type="button" onclick="addItem(this)">
                        <svg class="svg-inline--fa fa-plus fa-w-14 add-icon position-absolute" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg><!-- <i class="fas fa-plus add-icon position-absolute"></i> Font Awesome fontawesome.com -->
                    </a>
                </div>
            </div>

            <div class="col-md-4 mb-2">
                <div class="product">
                    <input type="hidden" class="item-type-id" value="1">
                    <input type="hidden" class="item-id" value="9559">
                    <input type="hidden" class="item-name" value="ASDA Dark Chocolate 100g (Germany)">
                    <input type="hidden" class="item-sku" value="35198">
                    <input type="hidden" class="item-purchase-price" value="110.00">
                    <input type="hidden" class="item-sale-price" value="180.00">
                    <input type="hidden" class="item-discount-price" value="0">
                    <input type="hidden" class="item-vat-percent" value="0.00">
                    <input type="hidden" class="item-discount-percent" value="0">
                    <input type="hidden" class="item-unit" value="Each">
                    <input type="hidden" class="item-sub-text" value="1">
                    <input type="hidden" class="item-is-variation" value="">
                    <input type="hidden" class="item-is-measurement" value="No">
                    <input type="hidden" class="item-current-stock" value="15.000000">
                    <input type="hidden" class="item-weight" value="0.10">

                    <a href="javascript:void(0)" class="card-info">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="p-name">ASDA Dark Chocolate 100g (Germany)</div>

                                <div class="d-flex justify-content-between">
                                    <b>
                                        180.00 ৳
                                    </b>
                                    <span class="badge bg-success">15.00</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="card-overlay" type="button" onclick="addItem(this)">
                        <svg class="svg-inline--fa fa-plus fa-w-14 add-icon position-absolute" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg><!-- <i class="fas fa-plus add-icon position-absolute"></i> Font Awesome fontawesome.com -->
                    </a>
                </div>
            </div>

            <div class="col-md-4 mb-2">
                <div class="product">
                    <input type="hidden" class="item-type-id" value="1">
                    <input type="hidden" class="item-id" value="9558">
                    <input type="hidden" class="item-name" value="Aveeno Kids Bubble Bath &amp; Wash Soothing Oat 250ml (Italy)">
                    <input type="hidden" class="item-sku" value="35197">
                    <input type="hidden" class="item-purchase-price" value="750.00">
                    <input type="hidden" class="item-sale-price" value="1040.00">
                    <input type="hidden" class="item-discount-price" value="0">
                    <input type="hidden" class="item-vat-percent" value="0.00">
                    <input type="hidden" class="item-discount-percent" value="0">
                    <input type="hidden" class="item-unit" value="Each">
                    <input type="hidden" class="item-sub-text" value="1">
                    <input type="hidden" class="item-is-variation" value="">
                    <input type="hidden" class="item-is-measurement" value="No">
                    <input type="hidden" class="item-current-stock" value="9.000000">
                    <input type="hidden" class="item-weight" value="0.20">

                    <a href="javascript:void(0)" class="card-info">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="p-name">Aveeno Kids Bubble Bath &amp; Wash Soot...</div>

                                <div class="d-flex justify-content-between">
                                    <b>
                                        1040.00 ৳
                                    </b>
                                    <span class="badge bg-success">9.00</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="card-overlay" type="button" onclick="addItem(this)">
                        <svg class="svg-inline--fa fa-plus fa-w-14 add-icon position-absolute" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg><!-- <i class="fas fa-plus add-icon position-absolute"></i> Font Awesome fontawesome.com -->
                    </a>
                </div>
            </div>

            <div class="col-md-4 mb-2">
                <div class="product">
                    <input type="hidden" class="item-type-id" value="1">
                    <input type="hidden" class="item-id" value="9557">
                    <input type="hidden" class="item-name" value="Cetaphil Baby Massage Oil 200ml (Germany)">
                    <input type="hidden" class="item-sku" value="35196">
                    <input type="hidden" class="item-purchase-price" value="880.00">
                    <input type="hidden" class="item-sale-price" value="1190.00">
                    <input type="hidden" class="item-discount-price" value="0">
                    <input type="hidden" class="item-vat-percent" value="0.00">
                    <input type="hidden" class="item-discount-percent" value="0">
                    <input type="hidden" class="item-unit" value="Each">
                    <input type="hidden" class="item-sub-text" value="1">
                    <input type="hidden" class="item-is-variation" value="">
                    <input type="hidden" class="item-is-measurement" value="No">
                    <input type="hidden" class="item-current-stock" value="5.000000">
                    <input type="hidden" class="item-weight" value="0.20">

                    <a href="javascript:void(0)" class="card-info">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="p-name">Cetaphil Baby Massage Oil 200ml (Ge...</div>

                                <div class="d-flex justify-content-between">
                                    <b>
                                        1190.00 ৳
                                    </b>
                                    <span class="badge bg-success">5.00</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="card-overlay" type="button" onclick="addItem(this)">
                        <svg class="svg-inline--fa fa-plus fa-w-14 add-icon position-absolute" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg><!-- <i class="fas fa-plus add-icon position-absolute"></i> Font Awesome fontawesome.com -->
                    </a>
                </div>
            </div>

            <div class="col-md-4 mb-2">
                <div class="product">
                    <input type="hidden" class="item-type-id" value="1">
                    <input type="hidden" class="item-id" value="9556">
                    <input type="hidden" class="item-name" value="Cetaphil Baby Shampoo 200ml (Germany)">
                    <input type="hidden" class="item-sku" value="35195">
                    <input type="hidden" class="item-purchase-price" value="880.00">
                    <input type="hidden" class="item-sale-price" value="1190.00">
                    <input type="hidden" class="item-discount-price" value="0">
                    <input type="hidden" class="item-vat-percent" value="0.00">
                    <input type="hidden" class="item-discount-percent" value="0">
                    <input type="hidden" class="item-unit" value="Each">
                    <input type="hidden" class="item-sub-text" value="1">
                    <input type="hidden" class="item-is-variation" value="">
                    <input type="hidden" class="item-is-measurement" value="No">
                    <input type="hidden" class="item-current-stock" value="6.000000">
                    <input type="hidden" class="item-weight" value="0.20">

                    <a href="javascript:void(0)" class="card-info">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="p-name">Cetaphil Baby Shampoo 200ml (German...</div>

                                <div class="d-flex justify-content-between">
                                    <b>
                                        1190.00 ৳
                                    </b>
                                    <span class="badge bg-success">6.00</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="card-overlay" type="button" onclick="addItem(this)">
                        <svg class="svg-inline--fa fa-plus fa-w-14 add-icon position-absolute" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg><!-- <i class="fas fa-plus add-icon position-absolute"></i> Font Awesome fontawesome.com -->
                    </a>
                </div>
            </div>

            <div class="col-md-4 mb-2">
                <div class="product">
                    <input type="hidden" class="item-type-id" value="1">
                    <input type="hidden" class="item-id" value="9555">
                    <input type="hidden" class="item-name" value="Tommee Tippee Newborn Starter Set with Anti-Colic Glass Bottle (Contents: 1x150ml, 2x250ml, 2x Nipple, 1x Pacifier, 1x Bottle Brush)">
                    <input type="hidden" class="item-sku" value="35194">
                    <input type="hidden" class="item-purchase-price" value="5000.00">
                    <input type="hidden" class="item-sale-price" value="6400.00">
                    <input type="hidden" class="item-discount-price" value="0">
                    <input type="hidden" class="item-vat-percent" value="0.00">
                    <input type="hidden" class="item-discount-percent" value="0">
                    <input type="hidden" class="item-unit" value="Set">
                    <input type="hidden" class="item-sub-text" value="7">
                    <input type="hidden" class="item-is-variation" value="">
                    <input type="hidden" class="item-is-measurement" value="No">
                    <input type="hidden" class="item-current-stock" value="2.000000">
                    <input type="hidden" class="item-weight" value="3.00">

                    <a href="javascript:void(0)" class="card-info">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="p-name">Tommee Tippee Newborn Starter Set w...</div>

                                <div class="d-flex justify-content-between">
                                    <b>
                                        6400.00 ৳
                                    </b>
                                    <span class="badge bg-success">2.00</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="card-overlay" type="button" onclick="addItem(this)">
                        <svg class="svg-inline--fa fa-plus fa-w-14 add-icon position-absolute" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg><!-- <i class="fas fa-plus add-icon position-absolute"></i> Font Awesome fontawesome.com -->
                    </a>
                </div>
            </div>

            <div class="col-md-4 mb-2">
                <div class="product">
                    <input type="hidden" class="item-type-id" value="1">
                    <input type="hidden" class="item-id" value="9554">
                    <input type="hidden" class="item-name" value="Cetaphil Baby Diaper Cream with Natural Chamomile 70g (Germany)">
                    <input type="hidden" class="item-sku" value="35193">
                    <input type="hidden" class="item-purchase-price" value="550.00">
                    <input type="hidden" class="item-sale-price" value="790.00">
                    <input type="hidden" class="item-discount-price" value="0">
                    <input type="hidden" class="item-vat-percent" value="0.00">
                    <input type="hidden" class="item-discount-percent" value="0">
                    <input type="hidden" class="item-unit" value="Each">
                    <input type="hidden" class="item-sub-text" value="1">
                    <input type="hidden" class="item-is-variation" value="">
                    <input type="hidden" class="item-is-measurement" value="No">
                    <input type="hidden" class="item-current-stock" value="5.000000">
                    <input type="hidden" class="item-weight" value="0.10">

                    <a href="javascript:void(0)" class="card-info">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="p-name">Cetaphil Baby Diaper Cream with Nat...</div>

                                <div class="d-flex justify-content-between">
                                    <b>
                                        790.00 ৳
                                    </b>
                                    <span class="badge bg-success">5.00</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="card-overlay" type="button" onclick="addItem(this)">
                        <svg class="svg-inline--fa fa-plus fa-w-14 add-icon position-absolute" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg><!-- <i class="fas fa-plus add-icon position-absolute"></i> Font Awesome fontawesome.com -->
                    </a>
                </div>
            </div>

            <div class="col-md-4 mb-2">
                <div class="product">
                    <input type="hidden" class="item-type-id" value="1">
                    <input type="hidden" class="item-id" value="9553">
                    <input type="hidden" class="item-name" value="Nestle Kitkat 2 Fingers Bar 12.8g Pack">
                    <input type="hidden" class="item-sku" value="35192">
                    <input type="hidden" class="item-purchase-price" value="20.24">
                    <input type="hidden" class="item-sale-price" value="30.00">
                    <input type="hidden" class="item-discount-price" value="0">
                    <input type="hidden" class="item-vat-percent" value="0.00">
                    <input type="hidden" class="item-discount-percent" value="0">
                    <input type="hidden" class="item-unit" value="Each">
                    <input type="hidden" class="item-sub-text" value="1">
                    <input type="hidden" class="item-is-variation" value="">
                    <input type="hidden" class="item-is-measurement" value="No">
                    <input type="hidden" class="item-current-stock" value="118.000000">
                    <input type="hidden" class="item-weight" value="0.02">

                    <a href="javascript:void(0)" class="card-info">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="p-name">Nestle Kitkat 2 Fingers Bar 12.8g P...</div>

                                <div class="d-flex justify-content-between">
                                    <b>
                                        30.00 ৳
                                    </b>
                                    <span class="badge bg-success">118.00</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="card-overlay" type="button" onclick="addItem(this)">
                        <svg class="svg-inline--fa fa-plus fa-w-14 add-icon position-absolute" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg><!-- <i class="fas fa-plus add-icon position-absolute"></i> Font Awesome fontawesome.com -->
                    </a>
                </div>
            </div>

            <div class="col-md-4 mb-2">
                <div class="product">
                    <input type="hidden" class="item-type-id" value="1">
                    <input type="hidden" class="item-id" value="9552">
                    <input type="hidden" class="item-name" value="SebaMed Baby Body Lotion pH 5.5 - 100ml (Germany)">
                    <input type="hidden" class="item-sku" value="13314-100">
                    <input type="hidden" class="item-purchase-price" value="670.00">
                    <input type="hidden" class="item-sale-price" value="860.00">
                    <input type="hidden" class="item-discount-price" value="0">
                    <input type="hidden" class="item-vat-percent" value="0.00">
                    <input type="hidden" class="item-discount-percent" value="0">
                    <input type="hidden" class="item-unit" value="Each">
                    <input type="hidden" class="item-sub-text" value="1">
                    <input type="hidden" class="item-is-variation" value="">
                    <input type="hidden" class="item-is-measurement" value="No">
                    <input type="hidden" class="item-current-stock" value="6.000000">
                    <input type="hidden" class="item-weight" value="0.10">

                    <a href="javascript:void(0)" class="card-info">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="p-name">SebaMed Baby Body Lotion pH 5.5 - 1...</div>

                                <div class="d-flex justify-content-between">
                                    <b>
                                        860.00 ৳
                                    </b>
                                    <span class="badge bg-success">6.00</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="card-overlay" type="button" onclick="addItem(this)">
                        <svg class="svg-inline--fa fa-plus fa-w-14 add-icon position-absolute" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg><!-- <i class="fas fa-plus add-icon position-absolute"></i> Font Awesome fontawesome.com -->
                    </a>
                </div>
            </div>

            <div class="col-md-4 mb-2">
                <div class="product">
                    <input type="hidden" class="item-type-id" value="1">
                    <input type="hidden" class="item-id" value="9551">
                    <input type="hidden" class="item-name" value="SebaMed Baby Protective Facial Cream pH 5.5 - 50ml (Germany)">
                    <input type="hidden" class="item-sku" value="35191">
                    <input type="hidden" class="item-purchase-price" value="1100.00">
                    <input type="hidden" class="item-sale-price" value="1420.00">
                    <input type="hidden" class="item-discount-price" value="0">
                    <input type="hidden" class="item-vat-percent" value="0.00">
                    <input type="hidden" class="item-discount-percent" value="0">
                    <input type="hidden" class="item-unit" value="Each">
                    <input type="hidden" class="item-sub-text" value="1">
                    <input type="hidden" class="item-is-variation" value="">
                    <input type="hidden" class="item-is-measurement" value="No">
                    <input type="hidden" class="item-current-stock" value="6.000000">
                    <input type="hidden" class="item-weight" value="0.10">

                    <a href="javascript:void(0)" class="card-info">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="p-name">SebaMed Baby Protective Facial Crea...</div>

                                <div class="d-flex justify-content-between">
                                    <b>
                                        1420.00 ৳
                                    </b>
                                    <span class="badge bg-success">6.00</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="card-overlay" type="button" onclick="addItem(this)">
                        <svg class="svg-inline--fa fa-plus fa-w-14 add-icon position-absolute" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg><!-- <i class="fas fa-plus add-icon position-absolute"></i> Font Awesome fontawesome.com -->
                    </a>
                </div>
            </div>

            <div class="col-md-4 mb-2">
                <div class="product">
                    <input type="hidden" class="item-type-id" value="1">
                    <input type="hidden" class="item-id" value="9550">
                    <input type="hidden" class="item-name" value="SebaMed Baby Cream Extra Soft pH 5.5 - 50ml (Germany)">
                    <input type="hidden" class="item-sku" value="13407-50">
                    <input type="hidden" class="item-purchase-price" value="330.00">
                    <input type="hidden" class="item-sale-price" value="470.00">
                    <input type="hidden" class="item-discount-price" value="0">
                    <input type="hidden" class="item-vat-percent" value="0.00">
                    <input type="hidden" class="item-discount-percent" value="0">
                    <input type="hidden" class="item-unit" value="Each">
                    <input type="hidden" class="item-sub-text" value="1">
                    <input type="hidden" class="item-is-variation" value="">
                    <input type="hidden" class="item-is-measurement" value="No">
                    <input type="hidden" class="item-current-stock" value="12.000000">
                    <input type="hidden" class="item-weight" value="0.10">

                    <a href="javascript:void(0)" class="card-info">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="p-name">SebaMed Baby Cream Extra Soft pH 5....</div>

                                <div class="d-flex justify-content-between">
                                    <b>
                                        470.00 ৳
                                    </b>
                                    <span class="badge bg-success">12.00</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="card-overlay" type="button" onclick="addItem(this)">
                        <svg class="svg-inline--fa fa-plus fa-w-14 add-icon position-absolute" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg><!-- <i class="fas fa-plus add-icon position-absolute"></i> Font Awesome fontawesome.com -->
                    </a>
                </div>
            </div>

            <div class="col-md-4 mb-2">
                <div class="product">
                    <input type="hidden" class="item-type-id" value="6">
                    <input type="hidden" class="item-id" value="9549">
                    <input type="hidden" class="item-name" value="Heinz Custard With Strawberry &amp; Banana">
                    <input type="hidden" class="item-sku" value="33446SB">
                    <input type="hidden" class="item-purchase-price" value="220.00">
                    <input type="hidden" class="item-sale-price" value="270.00">
                    <input type="hidden" class="item-discount-price" value="0">
                    <input type="hidden" class="item-vat-percent" value="0.00">
                    <input type="hidden" class="item-discount-percent" value="0">
                    <input type="hidden" class="item-unit" value="pc">
                    <input type="hidden" class="item-sub-text" value="1">
                    <input type="hidden" class="item-is-variation" value="No">
                    <input type="hidden" class="item-is-measurement" value="No">
                    <input type="hidden" class="item-current-stock" value="12.000000">
                    <input type="hidden" class="item-weight" value="0.15">

                    <a href="javascript:void(0)" class="card-info">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="p-name">Heinz Custard With Strawberry &amp; Ban...</div>

                                <div class="d-flex justify-content-between">
                                    <b>
                                        270.00 ৳
                                    </b>
                                    <span class="badge bg-success">12.00</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="card-overlay" type="button" onclick="addItem(this)">
                        <svg class="svg-inline--fa fa-plus fa-w-14 add-icon position-absolute" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg><!-- <i class="fas fa-plus add-icon position-absolute"></i> Font Awesome fontawesome.com -->
                    </a>
                </div>
            </div>

            <div class="col-md-4 mb-2">
                <div class="product">
                    <input type="hidden" class="item-type-id" value="6">
                    <input type="hidden" class="item-id" value="9548">
                    <input type="hidden" class="item-name" value="Check Printed Baby Nakshi Katha with Borderlining 30x25 Inch">
                    <input type="hidden" class="item-sku" value="34271-HH">
                    <input type="hidden" class="item-purchase-price" value="133.00">
                    <input type="hidden" class="item-sale-price" value="200.00">
                    <input type="hidden" class="item-discount-price" value="0">
                    <input type="hidden" class="item-vat-percent" value="0.00">
                    <input type="hidden" class="item-discount-percent" value="0">
                    <input type="hidden" class="item-unit" value="pc">
                    <input type="hidden" class="item-sub-text" value="1">
                    <input type="hidden" class="item-is-variation" value="No">
                    <input type="hidden" class="item-is-measurement" value="No">
                    <input type="hidden" class="item-current-stock" value="0">
                    <input type="hidden" class="item-weight" value="1.00">

                    <a href="javascript:void(0)" class="card-info">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="p-name">Check Printed Baby Nakshi Katha wit...</div>

                                <div class="d-flex justify-content-between">
                                    <b>
                                        200.00 ৳
                                    </b>
                                    <span class="badge bg-danger">Stock Out</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="card-overlay" type="button">
                        <svg class="svg-inline--fa fa-exclamation-circle fa-w-16 add-icon-stock-out position-absolute" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="exclamation-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zm-248 50c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z"></path></svg><!-- <i class="fas fa-exclamation-circle add-icon-stock-out position-absolute"></i> Font Awesome fontawesome.com -->
                    </a>
                </div>
            </div>

            <div class="col-md-4 mb-2">
                <div class="product">
                    <input type="hidden" class="item-type-id" value="6">
                    <input type="hidden" class="item-id" value="9547">
                    <input type="hidden" class="item-name" value="Check Printed Baby Nakshi Katha with Borderlining 30x25 Inch">
                    <input type="hidden" class="item-sku" value="34271-GG">
                    <input type="hidden" class="item-purchase-price" value="133.00">
                    <input type="hidden" class="item-sale-price" value="200.00">
                    <input type="hidden" class="item-discount-price" value="0">
                    <input type="hidden" class="item-vat-percent" value="0.00">
                    <input type="hidden" class="item-discount-percent" value="0">
                    <input type="hidden" class="item-unit" value="pc">
                    <input type="hidden" class="item-sub-text" value="1">
                    <input type="hidden" class="item-is-variation" value="No">
                    <input type="hidden" class="item-is-measurement" value="No">
                    <input type="hidden" class="item-current-stock" value="0.000000">
                    <input type="hidden" class="item-weight" value="1.00">

                    <a href="javascript:void(0)" class="card-info">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="p-name">Check Printed Baby Nakshi Katha wit...</div>

                                <div class="d-flex justify-content-between">
                                    <b>
                                        200.00 ৳
                                    </b>
                                    <span class="badge bg-danger">Stock Out</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="card-overlay" type="button">
                        <svg class="svg-inline--fa fa-exclamation-circle fa-w-16 add-icon-stock-out position-absolute" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="exclamation-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zm-248 50c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z"></path></svg><!-- <i class="fas fa-exclamation-circle add-icon-stock-out position-absolute"></i> Font Awesome fontawesome.com -->
                    </a>
                </div>
            </div>

            <div class="col-md-4 mb-2">
                <div class="product">
                    <input type="hidden" class="item-type-id" value="6">
                    <input type="hidden" class="item-id" value="9546">
                    <input type="hidden" class="item-name" value="Check Printed Baby Nakshi Katha with Borderlining 30x25 Inch">
                    <input type="hidden" class="item-sku" value="34271-EE">
                    <input type="hidden" class="item-purchase-price" value="133.00">
                    <input type="hidden" class="item-sale-price" value="200.00">
                    <input type="hidden" class="item-discount-price" value="0">
                    <input type="hidden" class="item-vat-percent" value="0.00">
                    <input type="hidden" class="item-discount-percent" value="0">
                    <input type="hidden" class="item-unit" value="pc">
                    <input type="hidden" class="item-sub-text" value="1">
                    <input type="hidden" class="item-is-variation" value="No">
                    <input type="hidden" class="item-is-measurement" value="No">
                    <input type="hidden" class="item-current-stock" value="3.000000">
                    <input type="hidden" class="item-weight" value="1.00">

                    <a href="javascript:void(0)" class="card-info">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="p-name">Check Printed Baby Nakshi Katha wit...</div>

                                <div class="d-flex justify-content-between">
                                    <b>
                                        200.00 ৳
                                    </b>
                                    <span class="badge bg-success">3.00</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="card-overlay" type="button" onclick="addItem(this)">
                        <svg class="svg-inline--fa fa-plus fa-w-14 add-icon position-absolute" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg><!-- <i class="fas fa-plus add-icon position-absolute"></i> Font Awesome fontawesome.com -->
                    </a>
                </div>
            </div>


            <div class="d-flex justify-content-center">
                <nav>
                    <ul class="pagination">

                        <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                            <span class="page-link" aria-hidden="true">‹</span>
                        </li>





                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                        <li class="page-item"><a class="page-link" href="https://admin.monowamart.com/admin/inventory/sales/create/pos-sale?page=2">2</a></li>
                        <li class="page-item"><a class="page-link" href="https://admin.monowamart.com/admin/inventory/sales/create/pos-sale?page=3">3</a></li>
                        <li class="page-item"><a class="page-link" href="https://admin.monowamart.com/admin/inventory/sales/create/pos-sale?page=4">4</a></li>
                        <li class="page-item"><a class="page-link" href="https://admin.monowamart.com/admin/inventory/sales/create/pos-sale?page=5">5</a></li>
                        <li class="page-item"><a class="page-link" href="https://admin.monowamart.com/admin/inventory/sales/create/pos-sale?page=6">6</a></li>
                        <li class="page-item"><a class="page-link" href="https://admin.monowamart.com/admin/inventory/sales/create/pos-sale?page=7">7</a></li>
                        <li class="page-item"><a class="page-link" href="https://admin.monowamart.com/admin/inventory/sales/create/pos-sale?page=8">8</a></li>
                        <li class="page-item"><a class="page-link" href="https://admin.monowamart.com/admin/inventory/sales/create/pos-sale?page=9">9</a></li>
                        <li class="page-item"><a class="page-link" href="https://admin.monowamart.com/admin/inventory/sales/create/pos-sale?page=10">10</a></li>

                        <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>





                        <li class="page-item"><a class="page-link" href="https://admin.monowamart.com/admin/inventory/sales/create/pos-sale?page=421">421</a></li>
                        <li class="page-item"><a class="page-link" href="https://admin.monowamart.com/admin/inventory/sales/create/pos-sale?page=422">422</a></li>


                        <li class="page-item">
                            <a class="page-link" href="https://admin.monowamart.com/admin/inventory/sales/create/pos-sale?page=2" rel="next" aria-label="Next »">›</a>
                        </li>
                    </ul>
                </nav>

            </div>


        </div>
    </div>
</div>





<div class="row">

    <input type="hidden" name="radio" value="pos-print">
    <input type="hidden" name="total_cost" id="invoiceTotalCost" value="">
    <input type="hidden" name="total_quantity" id="invoiceTotalQuantity" value="">
    <input type="hidden" name="order_source" value="POS">

    <div class="col-md-2 pe-3">
        <div class="row">
            <div class="col-md-8 fs-5 text-end pe-2">
                Subtotal :
            </div>
            <div class="col-md-4">
                <input type="hidden" name="subtotal" id="invoiceSubtotal" value="">
                <b id="showInvoiceSubtotal" class="fs-5">0</b>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4 fs-5 text-end pe-2">
                <span style="font-weight: 600; font-size:12;">Qty:<span id="showInvoiceTotalQuantity">0</span></span>
            </div>
            <div class="col-md-4 fs-5 text-end pe-2">
                VAT :
            </div>
            <div class="col-md-4">
                <input type="hidden" name="total_vat_amount" id="invoiceTotalVatAmount" value="">
                <input type="hidden" name="total_vat_percent" id="invoiceTotalVatPercent" value="">
                <b id="showInvoiceTotalVatAmount" class="fs-5">0</b>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 fs-5 text-end pe-2">
                Discount :
            </div>
            <div class="col-md-4">
                <input type="hidden" name="total_discount_amount" id="invoiceTotalDiscountAmount" value="">
                <input type="hidden" name="total_discount_percent" id="invoiceTotalDiscountPercent" value="">
                <b id="showInvoiceTotalDiscountAmount" class="fs-5">0</b>
                <svg class="svg-inline--fa fa-tags fa-w-20" style="font-size: 16px;" data-bs-toggle="modal" data-bs-target="#othersAmountModal" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="tags" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M497.941 225.941L286.059 14.059A48 48 0 0 0 252.118 0H48C21.49 0 0 21.49 0 48v204.118a48 48 0 0 0 14.059 33.941l211.882 211.882c18.744 18.745 49.136 18.746 67.882 0l204.118-204.118c18.745-18.745 18.745-49.137 0-67.882zM112 160c-26.51 0-48-21.49-48-48s21.49-48 48-48 48 21.49 48 48-21.49 48-48 48zm513.941 133.823L421.823 497.941c-18.745 18.745-49.137 18.745-67.882 0l-.36-.36L527.64 323.522c16.999-16.999 26.36-39.6 26.36-63.64s-9.362-46.641-26.36-63.64L331.397 0h48.721a48 48 0 0 1 33.941 14.059l211.882 211.882c18.745 18.745 18.745 49.137 0 67.882z"></path></svg><!-- <i class="fa fa-tags" style="font-size:16px" data-bs-toggle="modal" data-bs-target="#othersAmountModal"></i> Font Awesome fontawesome.com -->

            </div>
        </div>
    </div>
    <div class="col-md-3 pe-3 fs-5">
        <div class="row">
            <div class="col-md-8 fs-5 text-end pe-2">
                Shipping :
            </div>
            <div class="col-md-4">
                <input type="hidden" name="" id="hiddenShippingCost" value="0">
                <input type="hidden" name="shipping_cost" id="shippingCost" value="0">
                <b id="shippingCostText" class="fs-5">0</b>
                <svg class="svg-inline--fa fa-shipping-fast fa-w-20" style="font-size: 16px;" data-bs-toggle="modal" data-bs-target="#othersAmountModal" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shipping-fast" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M624 352h-16V243.9c0-12.7-5.1-24.9-14.1-33.9L494 110.1c-9-9-21.2-14.1-33.9-14.1H416V48c0-26.5-21.5-48-48-48H112C85.5 0 64 21.5 64 48v48H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h272c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H40c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H64v128c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zM160 464c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm320 0c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-208H416V144h44.1l99.9 99.9V256z"></path></svg><!-- <i class="fas fa-shipping-fast" style="font-size:16px" data-bs-toggle="modal" data-bs-target="#othersAmountModal"></i> Font Awesome fontawesome.com -->

            </div>
        </div>
        <div class="row" style="display:none;">
            <div class="col-md-8 fs-5 text-end pe-2">
                Rounding :
            </div>
            <div class="col-md-4">
                <input type="hidden" name="rounding" id="invoiceRounding" value="">
                <b id="showInvoiceRounding" class="invoice-rounding fs-5">0</b>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 fs-5 text-end pe-2">
                Coupon :
            </div>
            <div class="col-md-4">
                <input type="hidden" name="coupon_discount_amount" id="invoiceCouponDiscountAmount" value="0">
                <input type="hidden" name="coupon_discount_percent" id="invoiceCouponDiscountPercent" value="0">
                <input type="hidden" name="coupon_id" id="invoiceCouponId" value="">
                <b id="showInvoiceCouponDiscountAmount" class="fs-5">0</b>
                <svg class="svg-inline--fa fa-briefcase fa-w-16" style="font-size: 16px;" onclick="showCouponModal()" data-bs-toggle="modal" data-bs-target="#couponApplyModal" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="briefcase" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M320 336c0 8.84-7.16 16-16 16h-96c-8.84 0-16-7.16-16-16v-48H0v144c0 25.6 22.4 48 48 48h416c25.6 0 48-22.4 48-48V288H320v48zm144-208h-80V80c0-25.6-22.4-48-48-48H176c-25.6 0-48 22.4-48 48v48H48c-25.6 0-48 22.4-48 48v80h512v-80c0-25.6-22.4-48-48-48zm-144 0H192V96h128v32z"></path></svg><!-- <i class="fa fa-briefcase" style="font-size:16px" onclick="showCouponModal()" data-bs-toggle="modal" data-bs-target="#couponApplyModal"></i> Font Awesome fontawesome.com -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 fs-5 text-end pe-2">
                Payable :
            </div>
            <div class="col-md-4">
                <input type="hidden" name="payable_amount" id="invoicePayable" value="">
                <b id="showInvoicePayable" class="fs-5">0</b>
            </div>
        </div>

    </div>

    <div class="col-md-2 pe-3 fs-5">


        <div class="row">
            <div class="col-md-8 fs-5 text-end pe-2">
                Walet :
            </div>
            <div class="col-md-4">
                <input type="hidden" name="previous_wallet_amount" id="previousWalletAmount" value="0">
                <input type="hidden" name="wallet_amount" id="invoiceWalletAmount" value="">
                <b id="showInvoiceWalletAmount" class="fs-5">0</b>
                <svg class="svg-inline--fa fa-wallet fa-w-16" style="font-size: 16px;" onclick="showPointModal()" data-bs-toggle="modal" data-bs-target="#addPointModal" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="wallet" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M461.2 128H80c-8.84 0-16-7.16-16-16s7.16-16 16-16h384c8.84 0 16-7.16 16-16 0-26.51-21.49-48-48-48H64C28.65 32 0 60.65 0 96v320c0 35.35 28.65 64 64 64h397.2c28.02 0 50.8-21.53 50.8-48V176c0-26.47-22.78-48-50.8-48zM416 336c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32z"></path></svg><!-- <i class="fas fa-wallet" style="font-size:16px" onclick="showPointModal()" data-bs-toggle="modal" data-bs-target="#addPointModal"></i> Font Awesome fontawesome.com -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 fs-5 text-end pe-2">
                Point :
            </div>
            <div class="col-md-4">
                <input type="hidden" name="previous_point_used" id="previousPointUsed" value="0">
                <input type="hidden" name="previous_point_amount" id="previousPointAmount" value="0">

                <input type="hidden" name="point_used" id="invoicePointUsed" value="">
                <input type="hidden" name="point_amount" id="invoicePointAmount" value="">
                <b id="showInvoicePointAmount" class="fs-5">0</b>
                <svg class="svg-inline--fa fa-trophy fa-w-18" style="font-size: 16px;" onclick="showPointModal()" data-bs-toggle="modal" data-bs-target="#addPointModal" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trophy" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M552 64H448V24c0-13.3-10.7-24-24-24H152c-13.3 0-24 10.7-24 24v40H24C10.7 64 0 74.7 0 88v56c0 35.7 22.5 72.4 61.9 100.7 31.5 22.7 69.8 37.1 110 41.7C203.3 338.5 240 360 240 360v72h-48c-35.3 0-64 20.7-64 56v12c0 6.6 5.4 12 12 12h296c6.6 0 12-5.4 12-12v-12c0-35.3-28.7-56-64-56h-48v-72s36.7-21.5 68.1-73.6c40.3-4.6 78.6-19 110-41.7 39.3-28.3 61.9-65 61.9-100.7V88c0-13.3-10.7-24-24-24zM99.3 192.8C74.9 175.2 64 155.6 64 144v-16h64.2c1 32.6 5.8 61.2 12.8 86.2-15.1-5.2-29.2-12.4-41.7-21.4zM512 144c0 16.1-17.7 36.1-35.3 48.8-12.5 9-26.7 16.2-41.8 21.4 7-25 11.8-53.6 12.8-86.2H512v16z"></path></svg><!-- <i class="fas fa-trophy" style="font-size:16px" onclick="showPointModal()" data-bs-toggle="modal" data-bs-target="#addPointModal"></i> Font Awesome fontawesome.com -->

            </div>
        </div>

        <div class="row">
            <div class="col-md-8 fs-5 text-end pe-2">
                Gift Card :
            </div>
            <div class="col-md-4">
                <input type="hidden" name="gift_card_amount" id="invoiceGiftCardAmount" value="0">
                <b id="showInvoiceGiftCardAmount" class="fs-5">0</b>
                <svg class="svg-inline--fa fa-gift fa-w-16" style="font-size: 16px;" onclick="showGiftCardModal()" data-bs-toggle="modal" data-bs-target="#giftCardApplyModal" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="gift" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M32 448c0 17.7 14.3 32 32 32h160V320H32v128zm256 32h160c17.7 0 32-14.3 32-32V320H288v160zm192-320h-42.1c6.2-12.1 10.1-25.5 10.1-40 0-48.5-39.5-88-88-88-41.6 0-68.5 21.3-103 68.3-34.5-47-61.4-68.3-103-68.3-48.5 0-88 39.5-88 88 0 14.5 3.8 27.9 10.1 40H32c-17.7 0-32 14.3-32 32v80c0 8.8 7.2 16 16 16h480c8.8 0 16-7.2 16-16v-80c0-17.7-14.3-32-32-32zm-326.1 0c-22.1 0-40-17.9-40-40s17.9-40 40-40c19.9 0 34.6 3.3 86.1 80h-86.1zm206.1 0h-86.1c51.4-76.5 65.7-80 86.1-80 22.1 0 40 17.9 40 40s-17.9 40-40 40z"></path></svg><!-- <i class="fa fa-gift" style="font-size:16px" onclick="showGiftCardModal()" data-bs-toggle="modal" data-bs-target="#giftCardApplyModal"></i> Font Awesome fontawesome.com -->
            </div>
        </div>
    </div>

    <div class="col-md-3 pe-3 fs-5">
        <div class="row">
            <div class="col-md-8 fs-5 text-end pe-2">
                Paid :
            </div>
            <div class="col-md-4">
                <input type="hidden" name="previous_paid_amount" id="previousPaidAmount" value="0">
                <input type="hidden" name="paid_amount" id="invoicePaidAmount" value="0">
                <b id="showInvoicePaidAmount" class="fs-5">0</b>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 fs-5 text-end pe-2">
                Due :
            </div>
            <div class="col-md-4">
                <input type="hidden" name="due_amount" id="invoiceDueAmount" value="">
                <b id="showInvoiceDueAmount" class="fs-5">0</b>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 fs-5 text-end pe-2">
                Change :
            </div>
            <div class="col-md-4">
                <input type="hidden" name="change_amount" id="invoiceChangeAmount" value="">
                <b id="showInvoiceChangeAmount" class="fs-5">0</b>
            </div>
        </div>
        <input type="hidden" name="total_weight" id="showInvoiceTotalWeight">
    </div>
    <div class="col-md-2 pe-3 fs-5">
        <input type="hidden" name="order_id" id="orderId" value="">
        <input type="hidden" name="quotation_id" id="quotationId">

        <div class="d-flex">
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="button" class="btn btn-info rounded-0 text-white" onclick="recentTransaction(&#39;POS&#39;)" data-bs-toggle="modal" data-bs-target="#recentTransModal" style="width: 95%;">
                    TRNSACT.
                </button>
                <button type="button" class="btn btn-warning rounded-0 text-white" style="width: 95%;" onclick="saveValidation(&#39;t-body&#39;)">


                    SAVE
                </button>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">

                <button type="button" class="btn btn-primary rounded-0" data-bs-toggle="modal" style="width: 95%;" onclick="addDataToPaymentModal()">
                    PAYMENT
                </button>
                <button class="btn btn-dark rounded-0 text-white" type="button" id="submitPOSSaleForm" style="width: 95%; color: white !important;">
                    SUBMIT
                </button>

            </div>

        </div>
    </div>
</div>
</div>

@include('Admin.includes.js')
</body>
</html>
