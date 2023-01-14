<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registrasi || BEM STMIK Bandung</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('temp') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('temp') }}/css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('temp') }}/css/startmin.css" rel="stylesheet">

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
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <b class="navbar-brand">BEM STMIK Bandung</b>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title text-center"><b>Form Registrasi</b></h2>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="/register" method="POST">
                            @csrf
                            <fieldset>
                                <div class="form-floating">
                                    <input class="form-control is-invalid" placeholder="NIM"
                                        name="email" type="text" autofocus>
                                        @error('email')
                                        <div class="invalid-feedback text-danger">
                                            Masukkan NIM
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input class="form-control is-invalid" placeholder="Nama"
                                        name="name" type="text">
                                    @error('name')
                                        <div class="invalid-feedback text-danger">
                                            Masukkan Nama
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" placeholder="Password" name="password" type="password"
                                        value="">
                                        @error('password')
                                        <div class="invalid-feedback text-danger">
                                            Masukkan Password
                                        </div>
                                    @enderror
                                </div><br>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="w-100 btn btn-block btn-success" type="submit">Registrasi</button>
                            </fieldset>
                        </form>
                        <small>Sudah Registrasi? <a href="/login">Login!</a> </small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('temp') }}/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('temp') }}/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('temp') }}/js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('temp') }}/js/startmin.js"></script>

</body>

</html>
