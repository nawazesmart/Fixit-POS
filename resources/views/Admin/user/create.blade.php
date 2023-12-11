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

    @php
        $roles = \App\Models\User::find(auth()->user()->id);
    @endphp
    @if($roles->user_roll == 1 )

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-sx-12 align-center">
                    <div class="">
                        <div class="align-center">
                            <div class="header smaller link-dark text-center">
                                <h3> User add Form</h3>
                            </div>
                        </div>
                        <div class="align-right" style="margin-right: 20px"><a href="{{route('users.index')}}" class="btn btn-outline-warning"
                                                                               id="bootbox-options">User List</a></div>

                        <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-8 mt-5">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label align-right" for="form-field-1"> User Name: </label>

                                    <div class="col-sm-8">
                                        <input type="text" name="name"  placeholder="User name" class="col-xs-10 col-sm-5 form-control" />
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-8 mt-5">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label align-right" for="form-field-1"> User Email: </label>

                                    <div class="col-sm-8">
                                        <input type="text" name="email"  placeholder="user@email" class="col-xs-10 col-sm-5 form-control" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-8 mt-5">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label align-right" for="form-field-1"> Password :  </label>

                                    <div class="col-sm-8">
                                        <input type="password" name="password"  placeholder="user password" class="col-xs-10 col-sm-5 form-control" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-8 mt-5">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label align-right" for="form-field-1"> Re-Password :  </label>

                                    <div class="col-sm-8">
                                        <input type="password" name="request_password"  placeholder="Re-Password" class="col-xs-10 col-sm-5 form-control" />
                                    </div>
                                </div>
                            </div>



                            <div class="col-sm-8 mt-5">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label no-padding-right" for="form-field-1"> </label>

                                    <div class="col-sm-8 align-left">
                                        <button type="submit" class="btn btn-success">CREATE</button>
                                    </div>
                                </div>
                            </div>


                        </form>




                    </div>
                </div>
            </div>
        </div>
    </section>

    @elseif(auth()->user()->id == 1 )

        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-sx-12 align-center">
                        <div class="">
                            <div class="align-center">
                                <div class="header smaller link-dark text-center">
                                    <h3> User add Form</h3>
                                </div>
                            </div>
                            <div class="align-right" style="margin-right: 20px"><a href="{{route('users.index')}}" class="btn btn-outline-warning"
                                                                                   id="bootbox-options">User List</a></div>

                            <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="col-sm-8 mt-5">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label align-right" for="form-field-1"> User Name: </label>

                                        <div class="col-sm-8">
                                            <input type="text" name="name"  placeholder="User name" class="col-xs-10 col-sm-5 form-control" />
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-8 mt-5">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label align-right" for="form-field-1"> User Email: </label>

                                        <div class="col-sm-8">
                                            <input type="text" name="email"  placeholder="user@email" class="col-xs-10 col-sm-5 form-control" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-8 mt-5">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label align-right" for="form-field-1"> Password :  </label>

                                        <div class="col-sm-8">
                                            <input type="password" name="password"  placeholder="user password" class="col-xs-10 col-sm-5 form-control" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-8 mt-5">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label align-right" for="form-field-1"> Re-Password :  </label>

                                        <div class="col-sm-8">
                                            <input type="password" name="request_password"  placeholder="Re-Password" class="col-xs-10 col-sm-5 form-control" />
                                        </div>
                                    </div>
                                </div>



                                <div class="col-sm-8 mt-5">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label no-padding-right" for="form-field-1"> </label>

                                        <div class="col-sm-8 align-left">
                                            <button type="submit" class="btn btn-success">CREATE</button>
                                        </div>
                                    </div>
                                </div>


                            </form>




                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        @include('errors.404')
    @endif
@endsection
