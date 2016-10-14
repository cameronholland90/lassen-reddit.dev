<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Reddit Clone</title>


    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="/css/main.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('top-script')

</head>

<body>

    @include('layouts.partials.navbar')

    <!-- Page Content -->
    <div class="container">

        @if(session()->has('SUCCESS_MESSAGE'))
            <div class="alert alert-success">
                <p>{{ session('SUCCESS_MESSAGE') }}</p>
            </div>
        @endif
        @if(session()->has('ERROR_MESSAGE'))
            <div class="alert alert-danger">
                <p>{{ session('ERROR_MESSAGE') }}</p>
            </div>
        @endif

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">@yield('page-heading')
                    <small>@yield('secondary-text')</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        @yield('content')

        @include('layouts.partials.footer')

    </div>
    <!-- /.container -->

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    @yield('bottom-script')

</body>

</html>