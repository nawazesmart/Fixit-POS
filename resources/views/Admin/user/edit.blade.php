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
                                <h3> User Edit Form</h3>
                            </div>
                        </div>
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="align-right" style="margin-right: 20px"><a href="{{route('users.index')}}" class="btn btn-outline-warning"
                                                                               id="bootbox-options">User List</a></div>


                        <form action="{{route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <section>
                                <div class="row">

                                </div>
                            </section>
                            <section class="py-5">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <div class="row">
                                            <div class="col-md-3 ">
                                                User Name <sup><span style="color: red">*</span></sup>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" name="name" class="form-control" value="{{$user->name}}">
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                User Email <sup><span style="color: red">*</span></sup>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="email" name="email" class="form-control" value="{{$user->email}}">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                Old Password <sup><span style="color: red">*</span></sup>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" name="oldpassword" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                New Password <sup><span style="color: red">*</span></sup>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" name="password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                New Re-Password <sup><span style="color: red">*</span></sup>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="password" name="request_password" class="form-control">
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
                                    </div>
                                </div>
                            </section>
                        </form>




                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
