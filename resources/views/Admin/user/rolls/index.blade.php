@extends('Admin.master')

@section('title','user')

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
                                <h3> User Permission Form</h3>
                            </div>
                        </div>
                        <div class="align-right" style="margin-right: 20px"><a href="{{route('users.index')}}" class="btn btn-outline-warning"
                                                                               id="bootbox-options">User List</a></div>

                        <form action="{{route('user-rolls.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')


                            <div class="col-sm-8 mt-5">
                                <hr>
                                <b>User</b>
                                <hr>
                            </div>

                            <div class="col-sm-8 mt-5">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label align-right" for="form-field-1"> User Section :  </label>

                                    <div class="col-sm-8">
                                        <label class="me-3"><input type="radio" class="me-1" name="user_roll" value="1" {{$user->user_roll == 1 ? "Checked" : ""}}>Access</label>
                                        <label><input type="radio" class="me-1" name="user_roll" value="0" {{$user->user_roll == 0 ? "Checked" : ""}}>not access</label>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-8 mt-5">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label align-right" for="form-field-1"> User permission :  </label>

                                    <div class="col-sm-8">
                                        <label class="me-3"><input type="radio" class="me-1" name="user_v" value="1" {{$user->user_v == 1 ? "Checked" : ""}}>Access</label>
                                        <label><input type="radio" class="me-1" name="user_v" value="0" {{$user->user_v == 0 ? "Checked" : ""}}>not access</label>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-8 mt-5">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label align-right" for="form-field-1"> User Edit :  </label>

                                    <div class="col-sm-8">
                                        <label class="me-3"><input type="radio" class="me-1" name="user_edit" value="1" {{$user->user_edit == 1 ? "Checked" : ""}}>Access</label>
                                        <label><input type="radio" class="me-1" name="user_edit" value="0" {{$user->user_edit == 0 ? "Checked" : ""}}>not access</label>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-8 mt-5">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label align-right" for="form-field-1"> User Delete :  </label>

                                    <div class="col-sm-8">
                                        <label class="me-3"><input type="radio" class="me-1" name="user_delete" value="1" {{$user->user_delete == 1 ? "Checked" : ""}}>Access</label>
                                        <label><input type="radio" class="me-1" name="user_delete" value="0" {{$user->user_delete == 0 ? "Checked" : ""}}>not access</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-8 mt-5">
                                <hr>
                                <b>Sale</b>
                                <hr>
                            </div>

                            <div class="col-sm-8 mt-5">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label align-right" for="form-field-1"> Sale Section :  </label>

                                    <div class="col-sm-8">
                                        <label class="me-3"><input type="radio" class="me-1" name="sale_roll" value="1" {{$user->sale_roll == 1 ? "Checked" : ""}}>Access</label>
                                        <label><input type="radio" class="me-1" name="sale_roll" value="0" {{$user->sale_roll == 0 ? "Checked" : ""}}>not access</label>
                                    </div>
                                </div>
                            </div>



                            <div class="col-sm-8 mt-5">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label align-right" for="form-field-1"> Sale  :  </label>

                                    <div class="col-sm-8">
                                        <label class="me-3"><input type="radio" class="me-1" name="sale_option" value="1" {{$user->sale_option == 1 ? "Checked" : ""}}>Access</label>
                                        <label><input type="radio" class="me-1" name="sale_option" value="0" {{$user->sale_option == 0 ? "Checked" : ""}}>not access</label>
                                    </div>
                                </div>
                            </div>



                            <div class="col-sm-8 mt-5">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label align-right" for="form-field-1"> Sale Details :  </label>

                                    <div class="col-sm-8">
                                        <label class="me-3"><input type="radio" class="me-1" name="sale_details" value="1" {{$user->sale_details == 1 ? "Checked" : ""}}>Access</label>
                                        <label><input type="radio" class="me-1" name="sale_details" value="0" {{$user->sale_details == 0 ? "Checked" : ""}}>not access</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-8 mt-5">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label align-right" for="form-field-1"> BarCode Generate  :  </label>

                                    <div class="col-sm-8">
                                        <label class="me-3"><input type="radio" class="me-1" name="barcode_option" value="1" {{$user->barcode_option == 1 ? "Checked" : ""}}>Access</label>
                                        <label><input type="radio" class="me-1" name="barcode_option" value="0" {{$user->barcode_option == 0 ? "Checked" : ""}}>not access</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-8 mt-5">
                                <hr>
                                <b>Return</b>
                                <hr>
                            </div>

                            <div class="col-sm-8 mt-5">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label align-right" for="form-field-1">  Return Section  :  </label>

                                    <div class="col-sm-8">
                                        <label class="me-3"><input type="radio" class="me-1" name="return_roll" value="1" {{$user->return_roll == 1 ? "Checked" : ""}}>Access</label>
                                        <label><input type="radio" class="me-1" name="return_roll" value="0" {{$user->return_roll == 0 ? "Checked" : ""}}>not access</label>
                                    </div>
                                </div>
                            </div>



                            <div class="col-sm-8 mt-5">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label align-right" for="form-field-1">  Return   :  </label>

                                    <div class="col-sm-8">
                                        <label class="me-3"><input type="radio" class="me-1" name="return_option" value="1" {{$user->return_option == 1 ? "Checked" : ""}}>Access</label>
                                        <label><input type="radio" class="me-1" name="return_option" value="0" {{$user->return_option == 0 ? "Checked" : ""}}>not access</label>
                                    </div>
                                </div>
                            </div>



                            <div class="col-sm-8 mt-5">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label align-right" for="form-field-1">  Return Details  :  </label>

                                    <div class="col-sm-8">
                                        <label class="me-3"><input type="radio" class="me-1" name="return_details" value="1" {{$user->return_details == 1 ? "Checked" : ""}}>Access</label>
                                        <label><input type="radio" class="me-1" name="return_details" value="0" {{$user->return_details == 0 ? "Checked" : ""}}>not access</label>
                                    </div>
                                </div>
                            </div>


                            <div class="row mt-5 text-end">
                                <div class="col-md-8">
                                </div>
                                <div class="col-md-4 text-center ">
                                    <button type="submit" class="btn-shadow  btn btn-info"><span
                                            class="btn-icon-wrapper pr-2 opacity-7"><i
                                                class="fa fa-business-time fa-w-20"></i></span> Update
                                    </button>
                                </div>
                            </div>



                        </form>




                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>

@endsection
