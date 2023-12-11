@extends('Admin.master')

@section('title','add-customer')

@section('css')

    <style>
        .border-bottom{
            border-bottom: 1px solid #28282B !important;
        }
        .box-item{
            text-align: center;
            padding: 5px 10px;
        }
        .box-item .name{

        }
        .box-item .qr{

        }
        .box-item .code{

        }
        .box-item .price{

        }

          @media print {
    .no-print {
      display: none;
    }



  }

    </style>

@endsection
@section('body')


    <!-- {{$barCods->xitem}} -->

    @php
        $roles = \App\Models\User::find(auth()->user()->id);
    @endphp

    @if($roles->barcode_option == 1 )
    <section class="py-5">
        <div class="container">

            <div class="row ">

                <div class="col-sm-10">
                    <div class="widget-box">

                        <div class="widget-header">
                            <h4 class="widget-title">

                            </h4>

                            <span class="widget-toolbar">
                                      <span class="no-print">
    <a href="javascript:void(0)" onclick="window.print()" class="btn btn-print"> Print</a>
    <a href="{{route('barcode')}}" class="btn btn-back">Back</a>
</span>

                                <a href=""><i class="ace-icon fa fa-list-alt"></i> {{$barCods->xdesc}}</a>
                            </span>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main">
                                <div class="box-main" style="display:flex; flex-wrap: wrap;">
                                    @for($i = 0; $i < 40; $i++)
                                        <div class="box-item {{ $i > 34 ? 'border-bottom' : '' }}" style="width: 20%; border: 1px solid #28282B; border-bottom: 0;">
                                            <div class="name" style=" font-size:12px; font-family: sans-serif;">
                                                 {{$barCods->xdesc}}
                                            </div>
                                            <div class="qr">

                                                <div style="margin-left:12px">

                                             <!--  @php
                                              $barcodeData = preg_replace('/[^0-9]/', '', $barCods->xitem);

                                              echo DNS1D::getBarcodeSVG($barcodeData, 'MSI');

                                               @endphp -->

                                               @php
$barcodeData = preg_replace('/[^0-9]/', '', $barCods->xitem);
$barcodeHTML = DNS1D::getBarcodeHTML($barcodeData, 'MSI');


$barcodeImage = DNS1D::getBarcodePNG($barcodeData, 'MSI');
$barcodeImageBase64 = base64_encode($barcodeImage);
$dataURL = 'data:image/png;base64,' . $barcodeImageBase64;
@endphp

<div class="qr">
    <div style="margin-left: 0px">
        <img src="{{ asset('barcode.jpg')}}" alt="Barcode Image" width="150" height="auto">
    </div>
</div>


                                                </div>
                                            </div>
                                            <div class="code" style=" font-size:10px; font-family: sans-serif;">
                                                    {{$barCods->xitem}}
                                            </div>
                                            <div class="price" style=" font-size:10px;font-family: sans-serif;">
                                               Rate : {{ number_format($barCods->xstdprice, 2) }} vat 5%
                                            </div>
                                        </div>
                                    @endfor
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    @else
        @include('errors.404')
    @endif
<script>
    window.print()
</script>

@endsection
