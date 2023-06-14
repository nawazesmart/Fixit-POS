<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>@yield('title')</title>

    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->

  @include('Admin.includes.css')
    <![endif]-->
</head>

<body class="no-skin">
@include('Admin.includes.nav')

<div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
        try{ace.settings.loadState('main-container')}catch(e){}
    </script>

    <div id="sidebar" class="sidebar responsive ace-save-state">
        <script type="text/javascript">
            try{ace.settings.loadState('sidebar')}catch(e){}
        </script>

       @include('Admin.includes.sideber')

    </div>

    <div class="main-content">




      @yield('body')
    </div><!-- /.main-content -->

  @include('Admin.includes.footer')
</div><!-- /.main-container -->

<!-- basic scripts -->

@include('Admin.includes.js')
</body>
</html>
