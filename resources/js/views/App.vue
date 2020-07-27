<template>
    <div>
      <!-- <div class="loading">
        <img src="/img/loading.gif" class="img-fluid" style="position:fixed;top:50%;left:50%;transform:translate(-50%, -50%);z-index:40">
      </div> -->
      <!--========================================================DARGAH=======================================-->
        <div class="wrap t3-sl-1 jb-breadcrumb page-headers" style="margin-top:-24px"><div class="container"><div class="t3-module module " id="Mod289"><div class="module-inner"><div class="module-ct"><div class="mainheading-wrapper asb" style=""><div class="uk-container uk-container-center heading-content heading-align-right"><div class="heading-text-wrapper"><div class="header_text"><div class="clearfix"></div></div></div><div class="clearfix"></div></div><div id="bdt-header-animation"><canvas class="particles-js-canvas-el" width="1140" height="157" style="width: 100%; height: 100%;"></canvas></div></div></div></div></div></div></div>
        <div id="payment-access" style="position:absolute;width:100%;top:50%;transform:translateY(-50%);">
            <span style="position:fixed;top:0;right:5%;cursor:pointer;font-size:39px;opacity:0.8;color:white" @click="CloseWindow">&times;</span>
            <div class="modal fade" id="payment_confirmation" tabindex="-1" role="dialog"
    aria-labelledby="paymentConfirmationLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" id="close-modal" class="reset-menu close" data-dismiss="modal" style="margin:0"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Waiting for payment...</h4>
      </div>
      <div id="menu_list" class="modal-body">
          <div id="invoiceid"></div>
          <div id="exchange_rate"></div>
          <div id="total_price"></div>
          <div id="qrcode" align="middle"></div>
          <a id="qrcode-text" align="middle"></a>
      </div>
    </div>
  </div>
</div>

<div id="order_form">
    <center><h1><img height="250" width="250" src="/bitcoin/img/logo.png" alt="Bitcoin Payment" style="margin-top:15px"></h1><h1 style="color:white">Payment Request<a rel="license"
     href="https://www.gnu.org/copyleft/gpl.html"></a>

    </h1>
    <p><span ng-show="status.didInitializeHD" single-click-select=""><span ng-hide="(fields.amount || fields.label) && showPaymentRequestURL" style="font-size:14px;color:white">1BXehuemC9QUjZRd9exANiAoBY1ewKLv2z</span></span></p>
    </center>
    <div class="input-group" id="select-resp">
        <span class="input-group-btn">
            <button id="currency" type="button" class="btn btn-default" style="color:white"></button>
        </span>

        <!-- <input type="number" id="input_form" class="form-control" placeholder="0"> -->
        <select name="plan" id="input_form" class="form-control" aria-placeholder="0">
            <option value="0.23">0.23</option>
        </select>
        <span class="input-group-btn">
            <button id="order" disabled type="button" class="btn btn-primary">Pay</button>
        </span>
    </div>
    <div id="order_amount" align="middle"></div>
    <div style="margin-bottom: 20%;"></div>
</div>
        </div>
        <!--===================================================DARGAH=================================================-->
        
        <header class="header" style="border-bottom-right-radius: 93%; background:">
            <div>
              <nav class="navigation">
    <section class="navigation__icon">
      <span class="topBar"></span>
      <span class="middleBar"></span>
    </section>

    <ul class="navigation__ul">
      <li style="text-align:left;font-size:16px"><a style="font-weight:200;font-size:16px;" href=""><i style="margin-right:12px" class="fa fa-folder-open"></i>Archive</a></li>
      <li style="text-align:left;font-size:16px"><a style="font-weight:200;font-size:16px;" href=""><i style="margin-right:12px" class="fa fa-user"></i>Support</a></li>
      <li style="text-align:left;font-size:16px"><a style="font-weight:200;font-size:16px;" href=""><i style="margin-right:12px" class="fa fa-ship"></i>How To Work</a></li>
      <li style="text-align:left;font-size:16px"><a style="font-weight:200;font-size:16px;" href=""><i style="margin-right:12px" class="fa fa-btc"></i>Store</a></li>
      <li style="text-align:left;font-size:16px"><a style="font-weight:200;font-size:16px;" href=""><i style="margin-right:12px" class="fa fa-rocket"></i>Targets</a></li>
    </ul>

    <section class="navigation__social">
      <ul class="navigation__social-ul">
        <li>
          <a href="" class="social-icon"></a>
        </li>
        <li>
          <a href="" class="social-icon"></a>
        </li>
        <li>
          <a href="" class="social-icon"></a>
        </li>
        <li>
          <a href="" class="social-icon"></a>
        </li>
      </ul>
    </section>

  </nav>
    <div>
      <img src="/img/sin2.png" class="logo-img">
    </div>
            </div>
        </header>

        <header class="headers">
          <div class="container" style="padding:0">
            <div class="row">
              <div class="col-3">
            <div class="menu-hamber">
              <div class="top"></div>
              <div class="bottom"></div>
            </div>
          </div>
          <div class="col-6" style="text-align:center">
            <h5 class="h5-header" style="height:35px">
                <span class="letter">S</span>
                <span class="letter">i</span>
                <span class="letter">g</span>
                <span class="letter">n</span>
                <span class="letter">a</span>
                <span class="letter">l</span>
                <span class="letter">b</span>
                <span class="letter">e</span>
                <span class="letter">d</span>
                <span class="letter">a</span>
                <span class="letter">m</span>
                <span class="letter">!</span>
                <span class="letter">?</span>
            </h5>
          </div>
            </div>
          </div>
        </header>
        <nav class="menu-mob">
          <img src="/img/sin2.png" class="menu-mob-img">
          <ul>
            <li>Archive</li>
            <li>Support</li>
            <li>How To Work</li>
            <li>Store</li>
            <li>Targets</li>
          </ul>
        </nav>
        <div class="close-menu"></div>

        <router-view></router-view>
        
    </div>
</template>

<script>
import axios from 'axios';
import Swal from 'sweetalert2';
    export default {
        data() {
            return {
                check: '',
                rate: 'gold',
            }
        },
        mounted() {




              $(".close-menu").hide();
          // $(".back-blur").hide();
          // $(".boxs").hide();
          $(".box-gold").hide();
          
         
          // $(".open-box").click(function() {
          //   $(".back-blur").fadeIn();
          //   $(".box-gold").fadeIn();
          // });
            $(function() {
   $(".navigation__icon").click(function() {
     $(".navigation").toggleClass('navigation-open');
     $(".archive-chart").toggleClass('archive-charts');
     $(".archive-card").toggleClass('archive-cards');
     $(".archive-gold").toggleClass('archive-golds');
     $(".logo-img").toggleClass('logo-imgs');
    });
   });
   $(".menu-hamber").click(function() {
     $(".menu-mob").css('left', '0').css('transition', 'all 800ms cubic-bezier(.9, 0, .33, 1)');
     setTimeout(() => {
       $(".menu-mob ul").css('left', '50%').css('transition', 'all 800ms cubic-bezier(.9, 0, .33, 1)');
     }, 300);
     setTimeout(() => {
       $(".close-menu").fadeIn();
     }, 700);
    });
    $(".close-menu").click(function() {
     $(".menu-mob").css('left', '-100%').css('transition', 'all 800ms cubic-bezier(.9, 0, .33, 1)');
     $(".menu-mob ul").css('left', '20%').css('transition', 'all 800ms cubic-bezier(.9, 0, .33, 1)');
     $(".close-menu").fadeOut();
    });










      window.onload = function(){
        // $(".loading").fadeOut();
        $(".chart-loading").show();
            $(".loading").fadeOut();
            $("#app").fadeIn();
            $(".loadings").fadeOut();
      },
            $("#payment-access").hide();

                if(/iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream){
        document.querySelector('meta[name=viewport]')
          .setAttribute(
            'content',
            'initial-scale=1.0001, minimum-scale=1.0001, maximum-scale=1.0001, user-scalable=no'
          );
      }
    function RESTget(url) {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open( "GET", url, false );
        xmlHttp.send( null );
        return JSON.parse(xmlHttp.responseText);
    }
    
    $(document).ready(function() {
    
      var payeeName = RSBP_CONFIG.payee.name;
      var address = RSBP_CONFIG.payee.address;
      var currency = RSBP_CONFIG.payee.currency;
      var amount = RSBP_CONFIG.payee.amount;
      var discount = RSBP_CONFIG.payee.discount;
    
      $('#currency').text(currency);
      $("#input_form").val(amount);
    
            // get rate from bitcoin average every minute
    
            var rate = 1;
            if (currency != "BTC") {
              setInterval((function() {
                  $.ajax("https://api.bitcoinaverage.com/ticker/"+currency+"/last").done(function(x) {
                      rate = x * (1 + discount);
                      $("#order").removeAttr("disabled");
                      });
                  })(), 1000*60);
            } else {
              $("#order").removeAttr("disabled");
            }
    
            $("#order").click(function(e){
                var invoiceID = Math.floor(Math.random() * (900000 - 100000 + 1)) + 100000;
    
                amount = $("#input_form").val();
                if (payeeName) {
                  var payment_uri = 'bitcoin:'+address+'?amount='+(amount/rate).toFixed(8)+'&message=invoice'+invoiceID+'&label='+payeeName;
                } else {
                  var payment_uri = 'bitcoin:'+address+'?amount='+(amount/rate).toFixed(8);
                }
                $('#qrcode').html("");  // reset from previous qrcode
                $('#qrcode').qrcode(payment_uri);
                $('#qrcode-text').text(payment_uri);
                $('#qrcode-text').attr("href", payment_uri);
    
                if (currency != "BTC") {
                  $('#exchange_rate').text('Rate 1 BTC = ' + rate.toLocaleString() + ' ' + currency);
                  $('#total_price').text('Total ' + amount.toLocaleString() + ' ' + currency + ' (' +
                        (amount/rate).toFixed(8) + ' BTC)' );
                } else {
                  $('#total_price').text('Total ' + amount.toLocaleString() + ' BTC');
                }
    
                $("#payment_confirmation").modal('toggle');
    
                // waiting animation
                $("#myModalLabel").text("Waiting for payment");
                var ellipsis = setInterval(function(){
                    for (i = 1; i <= 3; i++) {
                    setTimeout(function() {
                        $("#myModalLabel").append(".");
                        }, i * 250);
                    }
                    $("#myModalLabel").text("Waiting for payment");
                    },1000);
    
                var initial_balance = RESTget("https://blockchain.info/q/addressbalance/"+address+"?cors=true");
                var blockchain_check = setInterval(function() {
                        balance = RESTget("https://blockchain.info/q/addressbalance/"+address+"?cors=true");
                        if (balance > initial_balance) {
                          if ((balance - initial_balance - (amount/rate).toFixed(8)) > 0) {
                            clearInterval(blockchain_check);
                            clearInterval(ellipsis);
                            $("#myModalLabel").text();
                            $("#myModalLabel").append('<div class="alert alert-success"><strong>Success!</strong> The payment has been received.</div>');
                            let formData = new FormData();
                            formData.append('plan', this.rate);
                            axios.post('/upgrade/plan', formData).then(response => {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Pament Success',
                                    });
                            });
                          } else {
                            clearInterval(blockchain_check);
                            clearInterval(ellipsis);
                            $("#myModalLabel").text("Amount received is insufficient");
    
                            // close after modal 1 s
                            setTimeout(function(){$("#close-model").trigger('click');}, 1000);
                            $("#input_form").val(amount/rate - rate*(balance - initial_balance));
                            $("#order").trigger('click')
                          }
                        }
                        }, 5*1000);
    
             });
    
            // interpret <enter> keypress as click on the 'order' button
            $('#input_form').keyup(function (e) {
                    if(e.which == 13) {
                    $('#order').trigger('click');
                    }
                    });
    
            $("#close-modal").click(function(e){
                    clearInterval(blockchain_check);
                    });
            $('#payment_confirmation').on('hidden.bs.modal', function () {
                    clearInterval(blockchain_check);
                    });
    });

            $("#register-form").hide();

                if(localStorage.getItem('lang') != 'fa' && localStorage.getItem('lang') != 'en'){
                    localStorage.setItem('lang', 'en');
                }




            
        
        },
        methods: {
            CloseWindow() {
                $("#payment-access").hide();
                $("#pay-acc").fadeIn();
            },
        
            
        
        },
    }
</script>
<style scoped>
.open-box {
  color: white;
    position: absolute;
    bottom: 10px;
    right: 15px;
    border-radius: 20px;
    font-weight: 600;
    background: none;
    /* z-index: 20; */
    padding: 4px;
    filter: drop-shadow(2px 4px 2px black);
    font-size: 13px;
    margin-bottom: 8px;
    border: 1.5px solid white;
}
.box-gold{
width: 400px;
  height: 400px;
  border-radius: 70px;
  top:50%;
  left:50%;
  transform: translate(-50%, -50%);
  z-index:10;
  box-shadow: 0 2px 30px rgba(black, .2);
  background: lighten(#f0f4c3, 10%);
  position: fixed;
  overflow: hidden;
}
.wave-gold {
  opacity: .4;
  position: absolute;
  top: -25%;
  left: 50%;
  background: #f3b416;
  width: 500px;
  height: 500px;
  margin-left: -250px;
  margin-top: -250px;
  transform-origin: 50% 48%;
  border-radius: 43%;
  animation: drift 3000ms infinite linear;
}
.wave-gold.-three-gold {
  animation: drift 5000ms infinite linear;
}
.wave-gold.-two-gold {
  animation: drift 7000ms infinite linear;
  opacity: .1;
  background: yellow;
}
.box-gold:after {
  content: '';
  display: block;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to bottom, rgba(#f3b416, 1), rgba(#def, 0) 80%, rgba(white, .5));
  z-index: 11;
  transform: translate3d(0, 0, 0);
}
.signal-profit {
  position: absolute;
    bottom: 35%;
    text-align: center;
    left: 55%;
    font-size: 27px;
    transform: translate(-50%, 50%);
    z-index: 10;
    font-weight: 900;
    opacity: 0.7;
    font-family: monospace;
    width: 100%;
}
.signal-profit ul {
  list-style-type: none;
}
.logo-img {
   position:absolute;
   width:96px;
   transition: 1s;
   left: 0;
}
.logo-imgs {
   transform: rotateY(180deg);
   width: 165px;
   left:3%;
   transition: 1.5s;
}
    
@media(min-width:780px){
  .menu-mob-img {
    display: none;
  }
  .menu-mob {
    display: none;
  }
  .header {
  width: 100vw;
  height: 100vh;   
  background-size: cover;
  position: fixed;
}
.archive-chart {
    padding-left:55px;
    transition:0.6s;
}
.archive-charts {
    padding-left: 184px;
    transition:0.6s;
}
.archive-card {
    padding-left:44px;
    transition:0.6s;
}
.archive-cards {
    padding-left:173px;
    transition:0.6s;
}
.archive-gold {
    padding-left:44px;
    transition:0.6s;
}
.archive-golds {
    padding-left:173px;
    transition:0.6s;
}
}
@media(max-width:779px){
  .menu-mob {
  position: fixed;
  left: -100%;
  top: 0;
  width: 80%;
  z-index: 9;
  height: 100%;
  background: linear-gradient(0deg,#b723fb,#1e1e2f);
  color: white;
  transition: all 800ms cubic-bezier(.9, 0, .33, 1);
}
.menu-mob ul {
  position: absolute;
    left: 20%;
    list-style-type: none;
    top: 45%;
    text-align: center;
    transform: translate(-50%, -50%);
    font-size: 18px;
    line-height: 2.2rem;
    transition: all 800ms cubic-bezier(.9, 0, .33, 1);
}
.menu-mob-img {
  width: 150px;position: absolute;left: 50%;transform: translateX(-50%);
}
.close-menu {
  position: fixed;
  top: 0;
  right: 0;
  z-index: 9;
  height: 100%;
  width: 20%;
  background: rgba(0, 0, 0, 0.5);
}
  .header {
    display: none;
  }
  .headers {
    
  }
  .menu-hamber {
    padding: 14px;
  }
  .menu-hamber .top {
    width: 40px;
    height: 2px;
    background: white;
    border-radius: 5px;
  }
  .menu-hamber .bottom {
    width: 40px;
    height: 2px;
    background: white;
    border-radius: 5px;
    margin-top: 10px;
  }
  .archive-chart {
    padding-left:0;
    transition:0.6s;
}
.archive-charts {
    padding-left: 0;
    transition:0.6s;
}
.archive-card {
    padding-left:0;
    transition:0.6s;
}
.archive-cards {
    padding-left:0;
    transition:0.6s;
}
.archive-gold {
    padding-left:0;
    transition:0.6s;
}
.archive-golds {
    padding-left:0;
    transition:0.6s;
}
}
.logo-img {
   position:absolute;width:96px;
   transition: 1s;
   left: 0;
}
.logo-imgs {
   transform: rotateY(180deg);
    width: 165px;
   left:3%;
   transition: 1.5s;
}
    
.header {
  width: 100vw;
  height: 100vh;   
  background-size: cover;
  position: fixed;
}
.navigation {
  width: 100px;
  height: 100%;
  display: block;
  padding-right: 40px;
  position: absolute;
  top: 0;
  left: 0;
  background: linear-gradient(0deg,#b723fb,#1e1e2f);
  border-radius: 0% 50% 350% 0%;   
  perspective: 800;   
  transition: all 800ms cubic-bezier(.9, 0, .33, 1);
}
.logo {
  width: 70px;
  height: 70px;
  display: block;
  position: absolute;
  top: 8%;
  left: 15%; 
  cursor: pointer;  
  transform-style: preserve-3d;   
  transform: rotateY(-360deg);   
  transition: all 800ms cubic-bezier(.9, 0, .33, 1);
}
.navigation__icon {
  width: 55px;
  height: 44px;
  display: block;
  position: relative;
  top: 22%;
  left: 35%;
  background: hsla(312, 51%, 41%, 0.0);
  cursor: pointer;  
  transition: all 800ms cubic-bezier(.9, 0, .33, 1);
}
.navigation__icon .topBar {
  width: 55px;
  height: 2px;
  display: block;
  background: #fff;
  position: absolute;
  top: 10px;   
  transform: rotate(0);   
  transition: all 800ms cubic-bezier(.9, 0, .33, 1);
}
.navigation__icon .middleBar {
  width: 55px;
  height: 2px;
  display: block;
  background: #fff;
  position: absolute;
  top: 20px;   
  transform: rotate(0);
   transition: all 800ms cubic-bezier(.9, 0, .33, 1);
}
.navigation .navigation__ul {
  float: right;
  margin-top: 220px;
  opacity: 0;
  visibility: hidden;  
  transform: rotateY(-90deg) translateX(-300px);   
  transition: all 800ms cubic-bezier(.9, 0, .33, 1);
}
.navigation .navigation__ul li {
  list-style: none;
  text-align: right;
}
.navigation .navigation__ul a {
  display: block;
  font-size: 20px;
  font-weight: 800;
  text-transform: uppercase;
  text-decoration: none;
  color: #fff;
  margin-bottom: 15px;
}
.navigation .navigation__ul a:hover {
  color: rgba(255, 255, 255, 0.384);
  font-weight: bloder;
}
.navigation .navigation__social {
  width: 100%;
  height: 30px;
  padding-right: 45px;
  position: absolute;
  bottom: 18%;
}
.navigation .navigation__social-ul {
  float: right;
  list-style: none;
  white-space: nowrap;
  opacity: 0;
  visibility: hidden;   
  transform: rotateY(-90deg) translateX(-300px);   
  transition: all 800ms cubic-bezier(.9, 0, .33, 1);
}
.navigation .navigation__social-ul li {
  display: inline-block;
  opacity: 0;
  visibility: hidden;   
  transform: translateY(35px);   
  transition: all 800ms cubic-bezier(.9, 0, .33, 1);
}
.navigation .social-icon {
  width: 30px;
  height: 30px;
  display: block;   
  margin-left: 15px;
}
 
.navigation-open {
  width: 250px;
  height: 100%;
  display: block;
  background: linear-gradient(0deg,#b723fb,#1e1e2f);
  position: absolute;
  left: 0;
  border-radius: 0% 1% 1% 0%;
}
.navigation-open .logo {
  left: 68%;   
  transform: rotateY(0);
}
.navigation-open .navigation__icon {
  left: 80%;
}
.navigation-open .navigation__ul {
  opacity: 1;
  visibility: visible;
}
.navigation-open .navigation__social-ul {
  opacity: 1;
  visibility: visible;
}
.navigation-open .topBar {
  top: 21px;   
  transform: rotate(45deg);
}
.navigation-open .middleBar {
  top: 21px;   
  transform: rotate(-45deg);
}
.navigation-open .navigation__ul {   
  transform: rotateY(0) translateX(0);
}
.navigation-open .navigation__social-ul {   
  transform: rotateY(0) translateX(0);
}
.navigation-open .navigation__social-ul li {
  opacity: 1;
  visibility: visible;   
  transform: translateY(0px);
}
.navigation-open .navigation__social-ul li:nth-child(1) {   
  transition-delay: .5s;
}
.navigation-open .navigation__social-ul li:nth-child(2) {   
  transition-delay: .46s;
}
.navigation-open .navigation__social-ul li:nth-child(3) {   
  transition-delay: .43s;
}
.navigation-open .navigation__social-ul li:nth-child(4) {   
  transition-delay: .4s;
}
.fa{
    margin-right: 5px;
}
.img-gold {
    max-width: 100%;
    height: 302px;
    transition: 0.5s;
}
.img-gold:hover {
  filter: opacity(0.3);
}
.card{
    position: relative;
    background: #333;
    border-radius: 6px;
    padding: 2rem;
    color: #aaa;
    box-shadow: 0 0.25rem 0.25rem rgba(0, 0, 0, 0.2), 0 0 1rem rgba(0, 0, 0, 0.2);
    overflow: hidden;
    box-sizing: border-box;
}
.card-image-container{
    margin: -2rem -2rem 1rem -2rem;
}
.card-line{
    opacity: 0;
    animation: LineFadeIn .8s .8s forwards ease-in;
}
.card-image{
    opacity: 0;
    animation: LineFadeIn .8s 1.4s forwards;
}
.card-title{
    color: white;
    margin-top: 0;
    font-weight: 800;
    letter-spacing: 0.01em;
}
.card-content{
    margin-top: -1rem;
    opacity: 0;
    animation: ContentFadeIn .8s 1.6s forwards;
}
.card-svg{
    position: absolute;
    left: 0;
    top: 115px;
}
@keyframes LineFadeIn{
    0%{
        opacity: 0;
        d: path("M 0 300 Q 0 300 0 300 Q 0 300 0 300 C 0 300 0 300 0 300 Q 0 300 0 300");
        stroke: #fff;
    }
    50%{
        opacity: 1;
        d: path("M 0 300 Q 50 300 100 300 Q 250 300 350 300 C 350 300 500 300 650 300 Q 750 300 800 300");
        stroke: #f7b208;
    }
    100%{
        opacity: 1;
        d: path("M -2 100 Q 50 200 100 250 Q 250 400 350 300 C 400 250 550 150 650 300 Q 750 450 802 400");
        stroke: #f7b208;
    }
}
@keyframes ContentFadeIn{
    0%{
        transform: translateY(-1rem);
        opacity: 0;
    }
    100%{
        transform: translateY(0);
        opacity: 1;
    }
}
@keyframes ImageFadeIn{
    0%{
        transform: translate(-0.5rem, -0.5rem) scale(1.05);
        opacity: 0;
        filter: blur(2px);
    }
    50%{
        opacity: 1;
        filter: blur(2px);
    }
    100%{
        transform: translateY(0) scale(1);
        opacity: 1;
        filter: blur(0);
    }
}
.card-content{
    text-align: center;
}
.card-content label{
	cursor: pointer;
	width: 80px;
	height: 80px;
	line-height: 75px;
	text-align: center;
	border-radius: 50%;
	margin: 0 50px;
	font-size: 26px;
	color: #fff;
	transition: all .2s
}
.card-content label:hover{
	color: #fff;
}
input{display:none;}
#fa-signal:hover ~ .card-content .fa-signal{
	color: #f7b208;
	transform: scale(1.1);
	background: linear-gradient(45deg, #252323 50%, #302c2c);
    box-shadow: 0 0 20px #f7b208;
    font-size: 26px;
}
</style>
<style lang="scss" scoped>
  @keyframes fat {
  from {
    font-size: 1.25rem;
    font-weight: 100;
  }
  to {
    font-size: 1.50rem;
    font-weight: 900;
  }
}
body {
  font-family: "Oswald";
  font-size: 3vw;
  line-height: 1.4em;
  margin: 0 2em;
  color: white;
  font-feature-settings: "kern" on;
  -moz-font-feature-settings: "kern" on;
  -webkit-font-feature-settings: "kern" on;
  -ms-font-feature-settings: "kern" on;
  -o-font-feature-settings: "kern" on;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  justify-content: space-around;
  background: black;
}
a {
  color: white;
  text-decoration: none;
}
.h5-header {
  color:white;
  white-space: nowrap;
  text-transform: uppercase;
}
.letter {
  @for $i from 1 through 13 {
    &:nth-child(#{$i}) {
      animation-name: fat;
      animation-duration: 2s;
      animation-direction: alternate;
      animation-iteration-count: infinite;
      animation-delay: $i * 100ms;
    }
  }
}
.box {
  width: 400px;
  height: 400px;
  border-radius: 70px;
  top:50%;
  left:50%;
  transform: translate(-50%, -50%);
  z-index:10;
  box-shadow: 0 2px 30px rgba(black, .2);
  background: lighten(#f0f4c3, 10%);
  position: fixed;
  overflow: hidden;
  // transform: translate3d(0, 0, 0);
}
.wave {
  opacity: .4;
  position: absolute;
  top: -25%;
  left: 50%;
  background: red;
  width: 500px;
  height: 500px;
  margin-left: -250px;
  margin-top: -250px;
  transform-origin: 50% 48%;
  border-radius: 43%;
  animation: drift 3000ms infinite linear;
}
.wave.-three {
  animation: drift 5000ms infinite linear;
}
.wave.-two {
  animation: drift 7000ms infinite linear;
  opacity: .1;
  background: yellow;
}
.box:after {
  content: '';
  display: block;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to bottom, rgba(red, 1), rgba(#def, 0) 80%, rgba(white, .5));
  z-index: 11;
  transform: translate3d(0, 0, 0);
}
.boxs {
  width: 400px;
  height: 400px;
  border-radius: 70px;
  top:50%;
  left:50%;
  transform: translate(-50%, -50%);
  z-index:10;
  box-shadow: 0 2px 30px rgba(black, .2);
  background: lighten(#f0f4c3, 10%);
  position: fixed;
  overflow: hidden;
  // transform: translate3d(0, 0, 0);
}
.waves {
  opacity: .4;
  position: absolute;
  top: -25%;
  left: 50%;
  background: #0af;
  width: 500px;
  height: 500px;
  margin-left: -250px;
  margin-top: -250px;
  transform-origin: 50% 48%;
  border-radius: 43%;
  animation: drift 3000ms infinite linear;
}
.waves.-threes {
  animation: drift 5000ms infinite linear;
}
.waves.-twos {
  animation: drift 7000ms infinite linear;
  opacity: .1;
  background: yellow;
}
.boxs::after {
  content: '';
  display: block;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to bottom, rgba(#0dd69d, 1), rgba(#def, 0) 80%, rgba(white, .5));
  z-index: 11;
  transform: translate3d(0, 0, 0);
}
.title {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  z-index: 1;
  line-height: 300px;
  text-align: center;
  transform: translate3d(0, 0, 0);
  color: white;
  text-transform: uppercase;
  font-family: 'Playfair Display', serif;
  letter-spacing: .4em;
  font-size: 24px;
  text-shadow: 0 1px 0 rgba(black, .1);
  text-indent: .3em;
}
@keyframes drift {
  from { transform: rotate(0deg); }
  from { transform: rotate(360deg); }
}
.back-blur{
    position:fixed;
    width:100%;
    height:100%;
    left:0;
    top:0;
    z-index:8;
    background:rgba(0,0,0,.5);
    backdrop-filter:blur(5px);
   
}
.card2 {
	position: relative;
	height: 170px;
	background: url(/img/78430.jpg),
		#ffffff;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	border-radius: 25px;
	margin: 10px;
	transition: 0.25s ease-in;
}
.card2 .overlay {
	position: absolute;
	top: 0;
	bottom: 0;
	width: 100%;
	height: 170px;
	background: linear-gradient(
		120.55deg,
		rgba(39, 39, 39, 0.38) 0%,
		rgba(39, 39, 39, 0.2394) 100%
	);
	border-radius: 25px;
}
.card2 .content {
	position: absolute;
	top: 40px;
	right: 40px;
}
.card2 .content h2 {
	font-weight: bold;
	font-size: 21px;
	color: #f2f2f2;
}
.card2:hover {
	transform: scale(1.05);
  
}
.card2:hover {
	background-position: top;
}
.card2:hover .overlay{
  backdrop-filter: blur(3px);
  transition: 1s;
}
.card3 {
	position: relative;
	height: 170px;
	background: url(/img/gold.jpg),
		#ffffff;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	border-radius: 25px;
	margin: 10px;
	transition: 0.25s ease-in;
}
.card3 .overlay {
	position: absolute;
	top: 0;
	bottom: 0;
	width: 100%;
	height: 170px;
	background: linear-gradient(
		120.55deg,
		rgba(39, 39, 39, 0.38) 0%,
		rgba(39, 39, 39, 0.2394) 100%
	);
	border-radius: 25px;
}
.card3 .content {
	position: absolute;
	top: 40px;
	right: 40px;
}
.card3 .content h2 {
	font-weight: bold;
	font-size: 21px;
	color: #f2f2f2;
}
.card3:hover {
	transform: scale(1.05);
  
}
.card3:hover {
	background-position: top;
}
.card3:hover .overlay{
  backdrop-filter: blur(3px);
  transition: 1s;
}
button{
  outline: none;
}
.flag{
    width: 40px;
    height: 40px;
    background-color: white;
    position: absolute;
    border-radius: 50%;
    top: 24px;
    left: 13px;
    overflow: hidden;
}
.one-flag{
  box-shadow: -5px -3px 11px 5px rgba(0,0,0,.68);
}
.two-flag{
  left: 33px;
  top: 35px;
  box-shadow: 3px 3px 10px 4px rgba(0,0,0,.68);;
}
</style>