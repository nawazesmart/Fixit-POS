@extends('Admin.master')
@section('title', 'Sale-details')

@section('body')
{{--    <input type="text" id="searchInput" placeholder="Search...">--}}
    <section class="py-3">
        <div class="container">

            <div class="row">
                <div class="col-xs-10">
                    <!-- PAGE CONTENT BEGINS -->
                    <div class="row">
                        <div class="col-xs-12">

                            <h3 class="header smaller lighter blue">All Sales details List</h3>

                            <div class="clearfix">
                                <div class="pull-right tableTools-container"></div>
                            </div>
                            <div class="input-group input-group-sm"
                                 style="border: 0px ; border-bottom: floralwhite;width: 300px " !importan>
                                            <span class="input-group-addon">CO Number</span>
                                <input type="text" class="form-control rounded-0 search-input" name="search"
                                       value=""
                                       id="searchInput" placeholder="Search Your CO Number"
                                       autocomplete="off">
                            </div>
                            <br>
                            <div class="clearfix">
                                <div class="pull-right tableTools-container"></div>
                            </div>
                            <div class="table-header">
                                Results for "Latest Sale list"
                            </div>
                            <table class="table table-bordered table-hover" id="list">
                                <thead>
                                <tr>
                                    <td>Co ID</td>
                                    <td class="detail-col">Sales man</td>
                                    <td>details</td>
                                    <td>action</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$product->xordernum}}</td>
                                        <td>{{$product->xsp}}</td>
                                        <td>
                                            <a href="{{route('sale-details.show', $product->xordernum)}}" class="btn btn-warning btn-sm">
                                                <button class="btn btn-xs btn-warning">
                                                    <i class="ace-icon fa fa-flag bigger-20"></i>
                                                </button>
                                            </a>
                                          </td>
                                        <td>
                                            <div class="hidden-sm hidden-xs btn-group">
                                                <i class="ace-icon fa fa-trash-o bigger-20"></i>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

        </div>





    </section>





    <script>

        $(document).ready(function() {
            var dataTable = $('#list').DataTable();

            $('#searchInput').on('keyup', function() {
                dataTable.search(this.value).draw();
            });
        });
    </script>


@endsection
