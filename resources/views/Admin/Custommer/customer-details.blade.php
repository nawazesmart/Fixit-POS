<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customers</title>
</head>
<body>

<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
        <header class="w3-container w3-teal">
            <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            <h2>Customer Details </h2>
        </header>
        <div class="w3-container">

            <div class="table-detail">

                <div class="row">
                    <div class="col-xs-12 col-sm-2">
                        <div class="text-center">
                            <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="assets/images/avatars/profile-pic.jpg" />
                            <br />
                            <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                <div class="inline position-relative">
                                    <a class="user-title-label" href="#">
                                        <i class="ace-icon fa fa-circle light-green"></i>
                                        &nbsp;
                                        <span class="white">Alex M. Doe</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-7">
                        <div class="space visible-xs"></div>

                        <div class="profile-user-info profile-user-info-striped">
                            <div class="profile-info-row">
                                <div class="profile-info-name"> Name  </div>

                                <div class="profile-info-value">
                                    <span></span>
                                </div>
                            </div>

                            <div class="profile-info-row">
                                <div class="profile-info-name"> Company Name  </div>

                                <div class="profile-info-value">

                                    <span>{{$customer->xorg}}</span>
                                </div>
                            </div>

                            <div class="profile-info-row">
                                <div class="profile-info-name"> CustomerType  </div>

                                <div class="profile-info-value">
                                    <span>{{$customer->xgcus}}</span>
                                </div>
                            </div>

                            <div class="profile-info-row">
                                <div class="profile-info-name"> POST Code  </div>

                                <div class="profile-info-value">
                                    <span>{{$customer->xzip}}</span>
                                </div>
                            </div>

                            <div class="profile-info-row">
                                <div class="profile-info-name"> Address  </div>

                                <div class="profile-info-value">
                                    <i class="fa fa-map-marker light-orange bigger-110"></i>
                                    <span>{{$customer->xadd1}}</span>
                                    <hr>
                                    <span>{{$customer->xadd1}}</span>
                                </div>
                            </div>

                            <div class="profile-info-row">
                                <div class="profile-info-name"> Country  </div>

                                <div class="profile-info-value">
                                    <span>{{$customer->xcountry}}</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{--                                                                          <div class="col-xs-12 col-sm-3">--}}
                    {{--                                                                              <div class="space visible-xs"></div>--}}
                    {{--                                                                              <h4 class="header blue lighter less-margin">Send a message to Alex</h4>--}}

                    {{--                                                                              <div class="space-6"></div>--}}

                    {{--                                                                              <form>--}}
                    {{--                                                                                  <fieldset>--}}
                    {{--                                                                                      <textarea class="width-100" resize="none" placeholder="Type something…"></textarea>--}}
                    {{--                                                                                  </fieldset>--}}

                    {{--                                                                                  <div class="hr hr-dotted"></div>--}}

                    {{--                                                                                  <div class="clearfix">--}}
                    {{--                                                                                      <label class="pull-left">--}}
                    {{--                                                                                          <input type="checkbox" class="ace" />--}}
                    {{--                                                                                          <span class="lbl"> Email me a copy</span>--}}
                    {{--                                                                                      </label>--}}

                    {{--                                                                                      <button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">--}}
                    {{--                                                                                          Submit--}}
                    {{--                                                                                          <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>--}}
                    {{--                                                                                      </button>--}}
                    {{--                                                                                  </div>--}}
                    {{--                                                                              </form>--}}
                    {{--                                                                          </div>--}}
                </div>

            </div>


        </div>
        <footer class="w3-container w3-teal">
            <p>---- o ----</p>
        </footer>
    </div>
</div>

</body>
</html>
