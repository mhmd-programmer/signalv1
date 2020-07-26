<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signal Bedam?!</title>

{{--    <link rel="shortcut icon" href="https://signalbedam.com/img/sin2.png" type="image/icon">--}}
    <link rel="icon" href="{{asset('img/sin2.png')}}">
    <link rel="apple-touch-startup-image" href="{{asset('img/sin2.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('img/sin2.png')}}">
    <link rel="apple-touch-icon" href="{{asset('img/sin2.png')}}">
    <link rel="manifest" href="{{asset('manifest.json')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('Icons/fontawesome-pro-5.12.0-web-ulabs/css/all.min.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('FX/style1.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('FX/style.css')}}"> --}}
    <style>
        .apexcharts-yaxis {
            display: none;
        }

        .btn:focus {
    box-shadow: none;
    outline: none;
}.btn:active {
    box-shadow: none;
    outline: none;
}
@media(min-width:768px){
    .table-responsive {
        display: none;
    }
}
.canvasjs-chart-credit {
		display: none;
	}
    @media (max-width:767px){
        .asb {
            position: fixed;
            left: 0;
            width: 368%;
            height: 417%;
            top: 0;
            bottom: 0;
        }
    }
    @media (min-width:768px){
        .asb {
            position: fixed;
            left: 0;
            width: 145%;
            height: 100%;
        }
    }
    </style>
{{--    <script src="{{asset('bitcoin/config.js')}}"></script>--}}
{{--    <script src="{{asset('bitcoin/rsbp.js')}}"></script>--}}


    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
{{--    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>--}}


</head>
<body style="font-family: IRANSansWeb;background:#131722;width:100%;position:absolute;height:100%;">




<div id="app">
    <app></app>
</div>

{{-- <script src="{{asset('service-worker-prod-es6.js')}}"></script>
<script>
   if('serviceWorker' in navigator) {
       navigator.serviceWorker.register('service-worker-prod-es6.js')
           .then(function() {
               console.log('Service Worker Registered');
           });
   }
</script>
<script src="{{asset('canvasjs/canvasjs.min.js')}}"></script>
<script src="{{asset('canvasjs/jquery.canvasjs.min.js')}}"></script> --}}

<script>
    $(".change-pass").hide();
    $(".forms").hide();
    $("#back").hide();
</script>

<!--<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>-->

<script src="{{asset('js/app.js')}}"></script>

<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('FX/script1.js')}}"></script>
{{--<script src="{{asset('FX/script2.js')}}"></script>--}}
<script src="{{asset('Icons/fontawesome-pro-5.12.0-web-ulabs/js/all.min.js')}}"></script>
</body>
</html>
