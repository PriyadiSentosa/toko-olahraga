<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alat Olahraga</title>
    <link rel="icon" href="{{ asset('bakend/img/university-icon-0.png') }}" type="image/gif" sizes="16x16">
    <link href="{{ asset('bakend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bakend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bakend/css/datepicker3.css') }}" rel="stylesheet">
    <link href="{{ asset('bakend/css/styles.css') }}" rel="stylesheet">

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!--[if lt IE 9]>
	<script src="{{ asset('bakend/js/html5shiv.js') }}"></script>
	<script src="{{ asset('bakend/js/respond.min.js') }}"></script>
	<![endif]-->
    @yield('css')
</head>
<body>

    @include('layouts.partials.navbar')

    @include('layouts.partials.slidebar')

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        @yield('header')

        @include('layouts._flash')

        @yield('content')

        <br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br>


        @include('layouts.partials.footer')

    </div>


    <script src="{{ asset('bakend/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('bakend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bakend/js/chart.min.js') }}"></script>
    <script src="{{ asset('bakend/js/chart-data.js') }}"></script>
    <script src="{{ asset('bakend/js/easypiechart.js') }}"></script>
    <script src="{{ asset('bakend/js/easypiechart-data.js') }}"></script>
    <script src="{{ asset('bakend/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('bakend/js/custom.js') }}"></script>
    <script>
        window.onload = function() {
            var chart1 = document.getElementById("line-chart").getContext("2d");
            window.myLine = new Chart(chart1).Line(lineChartData, {
                responsive: true
                , scaleLineColor: "rgba(0,0,0,.2)"
                , scaleGridLineColor: "rgba(0,0,0,.05)"
                , scaleFontColor: "#c5c7cc"
            });
        };

    </script>

    @yield('js')

</body>
</html>
