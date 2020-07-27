<template>
    <div>
      <div class="back-blur"></div>
        <div>
          <!-- <div class='box'>
    <div class='wave -one'></div>
    <div class='wave -two'></div>
    <div class='wave -three'></div>
    <div class='title'></div>
  </div> -->
  <div class='boxs'>
    <img src="/img/sin2.png" style="width:140px; height:140px; z-index:9; position:relative;float:left; left:50%; transform:translateX(-50%); opacity:.5;">
    <div class='waves -ones'></div>
    <div class='waves -twos'></div>
    <div class='waves -threes'> </div>
    <div class='title'></div>
  <div class="signal-profit">
    <ul>
      <li><span style="opacity:0.7;font-weight:600">PRICE: </span><span>{{signal.price}}</span></li>
      <li style="color: red;"><span style="opacity:0.7;font-weight:600">STOP LOSS: </span><span>{{signal.stop}}</span></li>
      <li style="color: green;"><span style="opacity:0.7;font-weight:600">TAKE PROFIT: </span><span>{{signal.profit}}</span></li>
    </ul>
  </div>
  </div>
    <div class='box-gold'>
    <img src="/img/sin2.png" style="width:140px; height:140px; z-index:9; position:relative;float:left; left:50%; transform:translateX(-50%); opacity:.5;">
    <div class='wave-gold -one-gold'></div>
    <div class='wave-gold -twos-gold'></div>
    <div class='wave-gold -three-gold'> </div>
    <div class='title'></div>
    <div class="signal-profit">
    <ul>
      <li>PRICE: <span style="opacity:0.6;font-weight:500">{{signal.price}}</span></li>
      <li>STOP LOSS: <span style="opacity:0.6;font-weight:500">{{signal.stop}}</span></li>
      <li>TAKE PROFIT: <span style="opacity:0.6;font-weight:500">{{signal.profit}}</span></li>
    </ul>
  </div>
  </div>
        </div>
        
        
        

        <div>
            <div class="container">
                <div class="row archive-chart">
                    <div class="col-md-12" style="background:rgba(7, 71, 105,0.7);border-radius:10px; text-align:center">
                      <div class="spinner-border chart-load text-danger loadings" role="status">
                        <span class="sr-only">Loading...</span>
                      </div>
                          <div class="tradingview-widget-container chart-loading ">
                            <div id="tradingview_530f0"></div>
                                <div class="tradingview-widget-copyright"></div>
                            
                    </div>
                </div>
                        </div>
                <div class="row archive-card">
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card2">
                      <div class="overlay"></div>
                      <div class="flag-signal">
                          <div class="one-flag flag" ><img src="/flag/nz.svg" style="width:100%"></div>
                          <div class="two-flag flag"><img src="/flag/us.svg" style="width:100%"></div>
                      </div>
                      <div class="content">
                        <h2>NZD/USD</h2>
                      </div>
                        <div>
                                
                                <button class="open-box" v-ripple>SignaloBegir:)</button>
                            </div>
                    </div>
                  </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card2">
                      <div class="overlay"></div>
                      <div class="flag-signal">
                          <div class="one-flag flag" ><img src="/flag/au.svg" style="width:100%"></div>
                          <div class="two-flag flag"><img src="/flag/us.svg" style="width:100%"></div>
                      </div>
                      <div class="content">
                        <h2>AUD/USD</h2>
                      </div>
                        <div>
                                
                                <button class="open-box">SignaloBegir:)</button>
                            </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card2">
                      <div class="overlay"></div>
                      <div class="flag-signal">
                          <div class="one-flag flag" ><img src="/flag/eu.svg" style="width:100%"></div>
                          <div class="two-flag flag"><img src="/flag/ca.svg" style="width:100%"></div>
                      </div>
                      <div class="content">
                        <h2>EUR/CAD</h2>
                      </div>
                        <div>
                                
                                <button class="open-box">SignaloBegir:)</button>
                            </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card2">
                      <div class="overlay"></div>
                      <div class="flag-signal">
                          <div class="one-flag flag" ><img src="/flag/eu.svg" style="width:100%"></div>
                          <div class="two-flag flag"><img src="/flag/us.svg" style="width:100%"></div>
                      </div>
                      <div class="content">
                        <h2>EUR/USD</h2>
                      </div>
                        <div>
                                
                                <button class="open-box">SignaloBegir:)</button>
                            </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card2">
                      <div class="overlay"></div>
                      <div class="flag-signal">
                          <div class="one-flag flag" ><img src="/flag/au.svg" style="width:100%"></div>
                          <div class="two-flag flag"><img src="/flag/us.svg" style="width:100%"></div>
                      </div>
                      <div class="content">
                        <h2>AUD/USD</h2>
                      </div>
                        <div>
                                
                                <button class="open-box">SignaloBegir:)</button>
                            </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card2">
                      <div class="overlay"></div>
                      <div class="flag-signal">
                          <div class="one-flag flag" ><img src="/flag/eu.svg" style="width:100%"></div>
                          <div class="two-flag flag"><img src="/flag/ca.svg" style="width:100%"></div>
                      </div>
                      <div class="content">
                        <h2>EUR/CAD</h2>
                      </div>
                        <div>
                                
                                <button class="open-box">SignaloBegir:)</button>
                            </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card2">
                      <div class="overlay"></div>
                      <div class="flag-signal">
                          <div class="one-flag flag" ><img src="/flag/eu.svg" style="width:100%"></div>
                          <div class="two-flag flag"><img src="/flag/us.svg" style="width:100%"></div>
                      </div>
                      <div class="content">
                        <h2>EUR/USD</h2>
                      </div>
                        <div>
                                
                                <button class="open-box">SignaloBegir:)</button>
                            </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card2">
                      <div class="overlay"></div>
                      <div class="flag-signal">
                          <div class="one-flag flag" ><img src="/flag/au.svg" style="width:100%"></div>
                          <div class="two-flag flag"><img src="/flag/us.svg" style="width:100%"></div>
                      </div>
                      <div class="content">
                        <h2>AUD/USD</h2>
                      </div>
                        <div>
                                
                                <button class="open-box">SignaloBegir:)</button>
                            </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card2">
                      <div class="overlay"></div>
                      <div class="flag-signal">
                          <div class="one-flag flag" ><img src="/flag/eu.svg" style="width:100%"></div>
                          <div class="two-flag flag"><img src="/flag/ca.svg" style="width:100%"></div>
                      </div>
                      <div class="content">
                        <h2>EUR/CAD</h2>
                      </div>
                        <div>
                                
                                <button class="open-box">SignaloBegir:)</button>
                            </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card2">
                      <div class="overlay"></div>
                      <div class="flag-signal">
                          <div class="one-flag flag" ><img src="/flag/eu.svg" style="width:100%"></div>
                          <div class="two-flag flag"><img src="/flag/us.svg" style="width:100%"></div>
                      </div>
                      <div class="content">
                        <h2>EUR/USD</h2>
                      </div>
                        <div>
                                
                                <button class="open-box">SignaloBegir:)</button>
                            </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-12" v-for="signal in signals">
                    <div class="card2">
                      <div class="overlay"></div>
                      <div class="flag-signal">
                          <div class="one-flag flag" ><img :src="'/flag/' + signal.name[0] + signal.name[1] + '.svg'" style="width:100%"></div>
                          <div class="two-flag flag"><img :src="'/flag/' + signal.name[4] + signal.name[5] + '.svg'" style="width:100%"></div>
                      </div>
                      <div class="content">
                        <h2>{{signal.name}}</h2>
                      </div>
                        <div>
                                
                                <button @click="OpenSignal(signal.id, signal.status)" class="open-box">SignaloBegir:)</button>
                            </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="container">
          <div class="row archive-gold">
            <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card3">
                      <div class="overlay"></div>
                      <div class="flag-signal">
                          <div class="one-flag flag" ><img src="/img/tala.jpg" style="width:100%"></div>
                          <div class="two-flag flag"><img src="/flag/us.svg" style="width:100%"></div>
                      </div>
                      <div class="content">
                        <h2>XAU/USD</h2>
                      </div>
                        <div>
                                
                                <button class="open-box">SignaloBegir:)</button>
                            </div>
                    </div>
                  </div>
          </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
    export default {
      data(){
        return{
          signals: [],
          signal: '',
        }
      },
        mounted() {
          
          $(".chart-loading").hide();
          $(".close-menu").hide();
          // $(".back-blur").hide();
          // $(".boxs").hide();
          $(".box-gold").hide();
          window.onload = function() {
            $(".chart-loading").show();
            $(".loading").fadeOut();
            $("#app").fadeIn();
            $(".loadings").fadeOut();
          }
          $(".back-blur").click(function() {
            $(".back-blur").css('z-index', '-2');
            $(".boxs").animate({'z-index' : '-5', 'width' : '350px', 'height' : '350px'}, 250).animate({'width' : '400px', 'height' : '400px'}, 250);
            $(".box").animate({'z-index' : '-5', 'width' : '350px', 'height' : '350px'}, 250).animate({'width' : '400px', 'height' : '400px'}, 250);
          });
          $(".back-blur").css('z-index', '-2');
          $(".boxs").css('z-index', '-5');
          $(".open-box").click(function() {
            $(".back-blur").css('z-index', '9');
            $(".boxs").animate({'z-index' : '10', 'width' : '450px', 'height' : '450px'}, 250).animate({'width' : '400px', 'height' : '400px'}, 250);
          });
          this.fetchData();
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
new TradingView.widget(
  {
  "width": 'auto',
  "height": 400,
  "symbol": "FX:EURUSD",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "dark",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_530f0"
}  
  );
        },
        methods: {
          fetchData() {
            axios.get('/filter/signal').then(response => {
              this.signals = response.data;
            });
          },
          OpenSignal(id, status) {
            axios.get('/fetch/signal/' + id).then(response => {
              this.signal = response.data;
              if(status == 'green') {
                $(".back-blur").css('z-index', '9');
                $(".boxs").animate({'z-index' : '10', 'width' : '450px', 'height' : '450px'}, 250).animate({'width' : '400px', 'height' : '400px'}, 250);
                $(".box").animate({'z-index' : '10', 'width' : '450px', 'height' : '450px'}, 250).animate({'width' : '400px', 'height' : '400px'}, 250);
                $(".box").attr('class', 'boxs');
                $(".wave").attr('class', 'waves');
              }
              else {
                $(".back-blur").css('z-index', '9');
                $(".boxs").animate({'z-index' : '10', 'width' : '450px', 'height' : '450px'}, 250).animate({'width' : '400px', 'height' : '400px'}, 250);
                $(".box").animate({'z-index' : '10', 'width' : '450px', 'height' : '450px'}, 250).animate({'width' : '400px', 'height' : '400px'}, 250);
                $(".boxs").attr('class', 'box');
                $(".waves").attr('class', 'wave');
              }
            });
          },
        },
    }
</script>
