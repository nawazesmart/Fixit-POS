<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>

        *
        {
            border: 0;
            box-sizing: content-box;
            color: inherit;
            font-family: inherit;
            font-size: inherit;
            font-style: inherit;
            font-weight: inherit;
            line-height: inherit;
            list-style: none;
            margin: 0;
            padding: 0;
            text-decoration: none;
            vertical-align: top;
        }

        /* content editable */

        *[contenteditable] { border-radius: 0.25em; min-width: 1em; outline: 0; }

        *[contenteditable] { cursor: pointer; }

        *[contenteditable]:hover, *[contenteditable]:focus, td:hover *[contenteditable], td:focus *[contenteditable], img.hover { background: #DEF; box-shadow: 0 0 1em 0.5em #DEF; }

        span[contenteditable] { display: inline-block; }

        /* heading */

        h1 { font: bold 100% sans-serif; letter-spacing: 0.5em; text-align: center; text-transform: uppercase; }

        /* table */

        table { font-size: 75%; table-layout: fixed; width: 100%; }
        table { border-collapse: separate; border-spacing: 2px; }
        th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
        th, td { border-radius: 0.25em; border-style: solid; }
        th { background: #EEE; border-color: #BBB; }
        td { border-color: #DDD; }

        /* page */

        html { font: 16px/1 'Open Sans', sans-serif; overflow: auto; padding: 0.5in; }
        html { background: #999; cursor: default; }

        body { box-sizing: border-box; height: 11in; margin: 0 auto; overflow: hidden; padding: 0.5in; width: 8.5in; }
        body { background: #FFF; border-radius: 1px; box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5); }

        /* header */

        header { margin: 0 0 3em; }
        header:after { clear: both; content: ""; display: table; }

        header h1 { background: #000; border-radius: 0.25em; color: #FFF; margin: 0 0 1em; padding: 0.5em 0; }
        header address { float: left; font-size: 75%; font-style: normal; line-height: 1.25; margin: 0 1em 1em 0; }
        header address p { margin: 0 0 0.25em; }
        header span, header img { display: block; float: right; }
        header span { margin: 0 0 1em 1em; max-height: 25%; max-width: 60%; position: relative; }
        header img { max-height: 100%; max-width: 100%; }
        header input { cursor: pointer; -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; height: 100%; left: 0; opacity: 0; position: absolute; top: 0; width: 100%; }

        /* article */

        article, article address, table.meta, table.inventory { margin: 0 0 3em; }
        article:after { clear: both; content: ""; display: table; }
        article h1 { clip: rect(0 0 0 0); position: absolute; }

        article address { float: left; font-size: 125%; font-weight: bold; }

        /* table meta & balance */

        table.meta, table.balance { float: right; width: 36%; }
        table.meta:after, table.balance:after { clear: both; content: ""; display: table; }

        /* table meta */

        table.meta th { width: 40%; }
        table.meta td { width: 60%; }

        /* table items */

        table.inventory { clear: both; width: 100%; }
        table.inventory th { font-weight: bold; text-align: center; }

        table.inventory td:nth-child(1) { width: 26%; }
        table.inventory td:nth-child(2) { width: 38%; }
        table.inventory td:nth-child(3) { text-align: right; width: 12%; }
        table.inventory td:nth-child(4) { text-align: right; width: 12%; }
        table.inventory td:nth-child(5) { text-align: right; width: 12%; }

        /* table balance */

        table.balance th, table.balance td { width: 50%; }
        table.balance td { text-align: right; }

        /* aside */

        aside h1 { border: none; border-width: 0 0 1px; margin: 0 0 1em; }
        aside h1 { border-color: #999; border-bottom-style: solid; }

        /* javascript */

        .add, .cut
        {
            border-width: 1px;
            display: block;
            font-size: .8rem;
            padding: 0.25em 0.5em;
            float: left;
            text-align: center;
            width: 0.6em;
        }

        .add, .cut
        {
            background: #9AF;
            box-shadow: 0 1px 2px rgba(0,0,0,0.2);
            background-image: -moz-linear-gradient(#00ADEE 5%, #0078A5 100%);
            background-image: -webkit-linear-gradient(#00ADEE 5%, #0078A5 100%);
            border-radius: 0.5em;
            border-color: #0076A3;
            color: #FFF;
            cursor: pointer;
            font-weight: bold;
            text-shadow: 0 -1px 2px rgba(0,0,0,0.333);
        }

        .add { margin: -2.5em 0 0; }

        .add:hover { background: #00ADEE; }

        .cut { opacity: 0; position: absolute; top: 0; left: -1.5em; }
        .cut { -webkit-transition: opacity 100ms ease-in; }

        tr:hover .cut { opacity: 1; }

        @media print {
            * { -webkit-print-color-adjust: exact; }
            html { background: none; padding: 0; }
            body { box-shadow: none; margin: 0; }
            span:empty { display: none; }
            .add, .cut { display: none; }
        }

        @page { margin: 0; }
    </style>


</head>
<body>


<header class="top-bar align-center">
    <div class="top-bar-title">
        <h1>Invoice Template <small>with Foundation Flex-Grid Layout</small></h1>
    </div>
</header>
<div class="row expanded">
    <main class="columns">
        <div class="inner-container">
            <header class="row align-center">
                <a class="button hollow secondary"><i class="ion ion-chevron-left"></i> Go Back to Purchases</a>
                &nbsp;&nbsp;<a class="button"><i class="ion ion-ios-printer-outline"></i> Print Invoice</a>
            </header>
            <section class="row">
                <div class="callout large invoice-container">
                    <table class="invoice">
                        <tr class="header">
                            <td class="">
                                <img src="http://www.travelerie.com/wp-content/uploads/2014/04/PlaceholderLogoBlue.jpg"
                                     alt="Company Name"/>
                            </td>
                            <td class="align-right">
                                <h2>Invoice</h2>
                            </td>
                        </tr>
                        <tr class="intro">
                            <td class="">
                                Hello, Philip Brooks.<br>
                                Thank you for your order.
                            </td>
                            <td class="text-right">
                                <span class="num">Order #00302</span><br>
                                October 18, 2017
                            </td>
                        </tr>
                        <tr class="details">
                            <td colspan="2">
                                <table>
                                    <thead>
                                    <tr>
                                        <th class="desc">Item Description</th>
                                        <th class="id">Item ID</th>
                                        <th class="qty">Quantity</th>
                                        <th class="amt">Subtotal</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="item">
                                        <td class="desc">Name or Description of item</td>
                                        <td class="id num">MH792AM</td>
                                        <td class="qty">1</td>
                                        <td class="amt">$100.00</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr class="totals">
                            <td></td>
                            <td>
                                <table>
                                    <tr class="subtotal">
                                        <td class="num">Subtotal</td>
                                        <td class="num">$100.00</td>
                                    </tr>
                                    <tr class="fees">
                                        <td class="num">Shipping & Handling</td>
                                        <td class="num">$0.00</td>
                                    </tr>
                                    <tr class="tax">
                                        <td class="num">Tax (7%)</td>
                                        <td class="num">$7.00</td>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <td>$107.00</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>

                    <section class="additional-info">
                        <div class="row">
                            <div class="columns">
                                <h5>Billing Information</h5>
                                <p>Philip Brooks<br>
                                    134 Madison Ave.<br>
                                    New York NY 00102<br>
                                    United States</p>
                            </div>
                            <div class="columns">
                                <h5>Payment Information</h5>
                                <p>Credit Card<br>
                                    Card Type: Visa<br>
                                    &bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull; 1234
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        </div>
    </main>
</div>
<a href="{{route('sales.index')}}" >
    <button class="btn btn-primary" onclick="printPage()">Print</button>
</a>



<script>
    function printPage() {
        window.print();
    }
</script>

</body>
</html>
