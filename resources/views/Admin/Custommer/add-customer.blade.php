@extends('Admin.master')

@section('title','add-customer')

@section('css')

    <style>
        .mt-3{
            margin-top: 3px;
        }
        .mt-4{
            margin-top: 4px;
        }
        .mt-5{
            margin-top:10px;
        }
    </style>

@endsection
@section('body')


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-sx-12 align-center">
                    <div class="">
                        <div class="align-center">
                            <div class="header smaller link-dark text-center">
                                <h3> Customer add Form</h3>
                            </div>
                        </div>


                        <form action="{{ route('customers.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="col-sm-8 mt-5">
                            <div class="form-group">
                                <label class="col-sm-4 control-label align-right" for="form-field-1"> Customer Name: </label>

                                <div class="col-sm-8">
                                    <input type="text" name="xshort"  placeholder="customer name" class="col-xs-10 col-sm-5 form-control" />
                                </div>
                            </div>
                        </div>


                            <div class="col-sm-8 mt-5">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label align-right" for="form-field-1"> Company Name: </label>

                                    <div class="col-sm-8">
                                        <input type="text" name="xorg"  placeholder="company name" class="col-xs-10 col-sm-5 form-control" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-8 mt-5">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label align-right" for="form-field-1"> Customer Type:  </label>

                                    <div class="col-sm-8">
                                        <input type="text" name="xgcus"  placeholder="customer type" class="col-xs-10 col-sm-5 form-control" />
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-8 mt-5">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label align-right" for="form-field-1"> Phone Number: </label>

                                    <div class="col-sm-8">
                                        <input type="number" name="xmobile"  placeholder="number" class="col-xs-10 col-sm-5 form-control" />
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-8 mt-5">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label align-right" for="form-field-1">Present Address:  </label>

                                    <div class="col-sm-8">
                                        <textarea class="form-control" id="form-field-8" name="xadd1"  placeholder="present address"></textarea>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-8 mt-5">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label align-right" for="form-field-1"> Permanent Address: </label>

                                    <div class="col-sm-8">
                                        <textarea class="form-control" id="form-field-8" name="xadd2"  placeholder="permanent address"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-8 mt-5">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label align-right" > POST Code: </label>

                                    <div class="col-sm-8">
                                        <input type="text" name="xzip"  placeholder="post code" class="col-xs-10 col-sm-5 form-control" />
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-8 mt-5">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label align-right"  > Country: </label>

                                    <div class="col-sm-8">
                                        <input type="text" name="xcountry"  placeholder="country" class="col-xs-10 col-sm-5 form-control" />
                                    </div>
                                </div>
                            </div>



                            <div class="col-sm-8 mt-5">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label no-padding-right" for="form-field-1"> </label>

                                    <div class="col-sm-8 align-left">
                                        <button type="submit" class="btn btn-success">SUBMIT</button>
                                    </div>
                                </div>
                            </div>


                        </form>




                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
