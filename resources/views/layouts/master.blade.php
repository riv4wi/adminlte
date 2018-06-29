<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="{{ app()->getLocale() }}>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('section_name_title', 'Carma')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700')}}" >
    <link rel="shortcut icon" href="{{{ asset('img/favicon.ico') }}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Header -->
        @include('layouts.header')

        <!-- Sidebar -->
        @include('layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                @include('layouts.contentHeader')
            </section>

            <!-- Main content -->
            <section class="content">
                @yield('content')
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        <!-- Control Sidebar (Right side) -->
        @include('layouts.controlSidebar')

        <!-- Footer -->
        @include('layouts.footer')
    </div><!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <script src="{{asset('js/app.js')}}"></script>
    <script>
        $('#EditModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var title = button.data('mytitle') // Extract info from data-* attributes
            var description = button.data('mydescription') // Extract info from data-* attributes
            var category_id = button.data('category_id') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            var URI= modal.find('.modal-body #formModal').attr('action');
            modal.find('.modal-body #title').val(title);
            modal.find('.modal-body #description').val(description);
            modal.find('.modal-body #category_id').val(category_id);
            // modal.find('.modal-body #formModal').attr('action', URI+'/'+categoryId);
        })
    </script>
</body>
</html>







