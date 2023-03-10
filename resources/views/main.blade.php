<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> @yield('title') || BEM STMIK Bandung</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('temp') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('temp') }}/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{ asset('temp') }}/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('temp') }}/css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('temp') }}/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('temp') }}/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <div id="wrapper">
        @include('includes.navbar')

        <div id="page-wrapper">
            @yield('content')

        </div>

    </div>
    <div>
        <footer class="sticky-footer bg-white" style="margin-top: 50px;">
            <nav class="navbar-inverse navbar-bottom" style="padding: 25px 0;">
                <div class="container my-auto px-5">
                    <div class="copyright text-center my-auto">
                        <span style="color: white;">Copyright &copy; M. Haikal Arif Khairil</span>
                    </div>
                </div>
            </nav>
        </footer>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('temp') }}/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('temp') }}/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('temp') }}/js/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('temp') }}/js/raphael.min.js"></script>
    <script src="{{ asset('temp') }}/js/morris.min.js"></script>
    <script src="{{ asset('temp') }}/js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('temp') }}/js/startmin.js"></script>

</body>

</html>
