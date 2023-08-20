@extends('Admin.master')

@section('title','return-details')

@section('body')

    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-xs-10">
                    <!-- PAGE CONTENT BEGINS -->
                    <div class="row">
                        <div class="col-xs-12">
                            <h3 class="header smaller lighter blue">All Return details List</h3>
                            <div class="clearfix">
                                <div class="pull-right tableTools-container"></div>
                            </div>
                            <table class="table  table-bordered table-hover" id="list">
                                <thead>
                                <tr>
                                    <td>SRE ID</td>
                                    {{--                                    <td class="detail-col">Sales man</td>--}}
                                    <td>details</td>
                                    <td>action</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($return as $product)
                                    <tr>
                                        <td>{{$product->ximtmptrn}}</td>
                                        {{--                                        <td>{{$product->xmember}}</td>--}}
                                        <td>
                                            <a href="{{route('return-details.show', $product->ximtmptrn)}}"
                                               class="btn btn-warning btn-sm">
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
        const searchInput = document.getElementById('searchInput');
        const list = document.getElementById('list').getElementsByTagName('li');

        searchInput.addEventListener('input', function () {
            const searchTerm = this.value.toLowerCase();

            for (let i = 0; i < list.length; i++) {
                const listItemText = list[i].textContent.toLowerCase();
                const listItem = list[i];

                if (listItemText.includes(searchTerm)) {
                    listItem.style.display = 'block';
                } else {
                    listItem.style.display = 'none';
                }
            }
        });
    </script>

@endsection
