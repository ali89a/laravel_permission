<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/admin/img/favicon.png') }}">
    <title>Spaite | @yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/fullcalendar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/plugins/morris/morris.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/dataTables.bootstrap.min.css') }}">
    <!--[if lt IE 9]>
    <script src="{{ asset('assets/admin/js/html5shiv.min.js')}}"></script>
    <script src="{{ asset('assets/admin/js/respond.min.js')}}"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/custom/custom.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/toastr/toastr.min.css') }}">
    @yield('style')
</head>

<body>
<div class="main-wrapper">

    @include('admin.common.header')
    @include('admin.common.sidebar')
    @yield('content')
</div>
<div class="sidebar-overlay" data-reff=""></div>
<script type="text/javascript" src="{{ asset('assets/admin/js/jquery-3.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/admin/js/jquery.slimscroll.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/admin/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/admin/js/dataTables.bootstrap.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/admin/js/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/admin/js/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/admin/js/bootstrap-datetimepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/admin/plugins/morris/morris.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/admin/plugins/raphael/raphael-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/admin/js/app.js') }}"></script>

<script src="{{ asset('assets/toastr/toastr.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/admin/custom/custom.js') }}"></script>

{!! Toastr::message() !!}

<script>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
        toastr.error('{{$error}}', 'Error', {
            closeButton:true,
            progressBar:true,
        });
        @endforeach
    @endif
</script>

@yield('script')
</body>
</html>
