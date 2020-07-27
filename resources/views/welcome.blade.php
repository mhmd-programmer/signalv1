<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signal Bedam??</title>
    <style>
        
        
        
        .loading {
            position: fixed;
            left: 50%;
            top: 50%;
            transform:translate(-50% , -50%);
            z-index: 20;
            display: flex;
            width: 50%;
            height: 50%;

            background: transparent;
            overflow: hidden;
        }
    
        .line-1 {
        height: 98vh;
    fill: none;
    stroke-linecap: round;
    opacity: .8;
    stroke-width: 6px;
    stroke-miterlimit: 10;
    stroke-dasharray: 2400;
    stroke-dashoffset: 0;
    animation: myAnimation1 3s infinite ;
    z-index: 1;
}
.line-2 {
        height: 98vh;
    fill: rgb(25, 0, 255);
    fill-opacity: .5;
    stroke-linecap: round;
    stroke-width: 5px;
    stroke-miterlimit: 10;
    stroke-dasharray: 1;
    stroke-dashoffset: 0;
    animation: anim 1.5s infinite;
    z-index: 1;
}
@keyframes myAnimation1 {
      0% {stroke-dashoffset: 2451;}
      100% {stroke-dashoffset: 0;}
    }
    @keyframes anim{
        
            0%{ fill-opacity:.1;}
            100%{ fill-opacity:1;}
        }
        </style>

    <link rel="shortcut icon" href="https://signalbedam.com/img/sin2.png" type="image/icon">
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
    .asb {
            position: fixed;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
    <script src="{{asset('bitcoin/config.js')}}"></script>
    <script src="{{asset('bitcoin/rsbp.js')}}"></script>
    <script src="{{asset('FX/script1.js')}}"></script>
<script src="{{asset('FX/script2.js')}}"></script>
    
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>

    
    

</head>
<body style="font-family: IRANSansWeb;background:#0f0f17">

    
    <div class="loading">
        <div>
        <div class="ll">
        <!-- <img src="./sin2.png" width="100%" height="100%" > -->
        <svg viewBox="0 0 1000 550" style="height: 100%; width:100%; position:absolute; left:0; top:0;">
            <filter class="anim" height="200%" width="200%" y="-50%" x="-50%" id="svg_1_blur">
                <feGaussianBlur in="SourceGraphic" stdDeviation="1" />
            </filter>
            <filter class="anim" height="200%" width="200%" y="-50%" x="-50%" id="svg_2_blur">
                <feGaussianBlur in="SourceGraphic" stdDeviation="3" />
            </filter>
            <g>
                <polyline class="line-1" filter="url(#svg_1_blur)"  stroke="#5c2082" points="214 68 345 6 280 105 313 135 390 147 426 130 495 143 555 130 586 148 673 133 702 106 637 6 765 68 785 156 712 220 613 260 620 300 662 342 600 470 490 538 380 470 319 341 361 297 368 260 270 223 195 158 214 68"/>
            </g>
            <g>
                <polyline class="line-1" filter="url(#svg_1_blur)"  stroke="#5c2082" points="393 148 394 199 369 259 360 299 423 396 444 422 490 435 533 422 558 397 619 299 612 259 586 199 586 148 "/>
            </g>
            <g>
                <polyline class="line-1" filter="url(#svg_1_blur)"  stroke="#5c2082" points="  586 199 563 204 491 272 419 204 396 199 383 229 398 243 398 292 418 309 428 334 444 317 457 317 490 332 522 318 535 318 553 333 565 308 580 298 583 245 599 229 587 199"/>
            </g>
            <g>
                <polyline class="line-1" filter="url(#svg_1_blur)"  stroke="#5c2082" points=" 553 333 554 350 562 370 571 376"/>
            </g>
            <g>
                <polyline class="line-1" filter="url(#svg_1_blur)"  stroke="#5c2082" points=" 429 335 429 350 419 370 410 376"/>
            </g>
            <g>
                <polyline class="line-1" filter="url(#svg_1_blur)"  stroke="#5c2082" points=" 420 372 440 382 470 379 489 382 506 379 539 383 561 372"/>
            </g>
            <g>
                <polyline class="line-1" filter="url(#svg_1_blur)"  stroke="#5c2082" points="  425 395 440 394 470 400 489 405 506 402 539 394 556 396"/>
            </g>
            <g>
                <polyline class="line-2" filter="url(#svg_2_blur)"  points=" 410 247 433 253 433 242 422 231 404 226 410 247 "/>
            </g>
            <g>
                <polyline class="line-2" filter="url(#svg_2_blur)"  points=" 569 247 548 253 549 242 557 231 580 226 569 247  "/>
            </g>
            <g>
                <polyline class="line-1" filter="url(#svg_1_blur)" stroke="#5c2082" points="  532 336 513 361 523 369 534 361 532 336   "/>
            </g>
            <g>
                <polyline class="line-1" filter="url(#svg_1_blur)" stroke="#5c2082" points="  449 336 468 361 458 369 448 361 449 336    "/>
            </g>
        </svg>
    </div>
        </div>
    </div>

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
</script> --}}
{{-- <script src="{{asset('canvasjs/canvasjs.min.js')}}"></script> --}}
{{-- <script src="{{asset('canvasjs/jquery.canvasjs.min.js')}}"></script> --}}

<script>
    $(".change-pass").hide();
    $(".forms").hide();
    $("#back").hide();
    $("#app").hide();
</script>

<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
                
                <script id="rendered-js">
                "use strict";
                //# sourceURL=pen.js
                    </script>
<script src="{{mix('js/app.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('Icons/fontawesome-pro-5.12.0-web-ulabs/js/all.min.js')}}"></script>
</body>
</html>