<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ url('admin-dashboard/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ url('admin-dashboard/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ url('admin-dashboard/dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ url('admin-dashboard/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Parsley -->
    <link href="{{ url('css/parsley.css') }}" rel="stylesheet" type="text/css">

    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>

    @yield('style')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Sweet Alert -->
    @include('sweetalert::alert')

    <div id="wrapper">

        @include('partials.admin._nav')

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        @yield('content')
                    </div>
                      <!-- /.col-lg-12 -->
                </div>
                  <!-- /.row -->
            </div>
              <!-- /.container-fluid -->
        </div>
          <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ url('admin-dashboard/vendor/jquery/jquery.min.js') }}"></script>

    @yield('script')

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url('admin-dashboard/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ url('admin-dashboard/vendor/metisMenu/metisMenu.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ url('admin-dashboard/vendor/raphael/raphael.min.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ url('admin-dashboard/dist/js/sb-admin-2.js') }}"></script>

    <!-- Parsley -->
    <script src="{{ url('js/parsley.min.js') }}" type="text/javascript"></script>

</body>

</html>
