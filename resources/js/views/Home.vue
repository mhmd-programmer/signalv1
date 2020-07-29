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
                    <p style="float:left;font-size:16px">{{signal.year}}/{{signal.month}}/{{signal.day}}</p>
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
                        <li>PRICE: <span style="opacity:0.6;font-weight:500">{{golds.price}}</span></li>
                        <li>STOP LOSS: <span style="opacity:0.6;font-weight:500">{{golds.stop}}</span></li>
                        <li>TAKE PROFIT: <span style="opacity:0.6;font-weight:500">{{golds.profit}}</span></li>
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
        <div class="line-div">BINERY OPTION</div>

        <div class="container">
            <div class="row archive-gold">
                <div class="col-lg-3 col-md-6 col-sm-12" v-for="value in binery" :key="value">
                    <div class="card4">
                        <div class="overlay"></div>
                        <div class="flag-signal">
                            <div class="one-flag flag" ><img :src="'/flag/' + value.name[0] + value.name[1] + '.svg'" style="width:100%"></div>
                            <div class="two-flag flag"><img :src="'/flag/' + value.name[4] + value.name[5] + '.svg'" style="width:100%"></div>
                        </div>
                        <div class="content">
                            <h2>{{value.name}}</h2>
                        </div>
                        <div class="inner">
                            <button :class="value.status == 'ready' ? 'neon' : 'neon-ready'">
                                <span>READY</span>
                            </button>
                            <button :class="value.status == 'go' ? 'neon1' : 'neon1-go'">
                                <span>GO</span>
                            </button>
                            <button :class="value.status == 'end' ? 'neon2' : 'neon2-end'">
                                <span>END</span>
                            </button>
                        </div>
                        <div class="time-binery">
                            <p style="font-size:16px;width:35%" :class="value.id == 1 ? 'demo' : value.id == 2 ? 'demos' : value.id == 3 ? 'democ' : ''">15</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="line-div" style="text-indent:-5px">GOLD</div>

        <div class="container">
            <div class="row archive-gold">
                <div class="col-lg-3 col-md-6 col-sm-12" v-for="golds in gold" :key="golds">
                    <div class="card3">
                        <div class="overlay"></div>
                        <div class="flag-signal">
                            <div class="one-flag flag" ><img src="/img/tala.jpg" style="width:100%"></div>
                            <div class="two-flag flag"><img src="/flag/us.svg" style="width:100%"></div>+
                        </div>
                        <div class="content">
                            <h2>{{golds.name}}</h2>
                        </div>
                        <div>
                            <button class="open-boxs" @click="OpenBox(golds.id, golds.status)">TalaroBegir:)</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</template>
<script>
    import axios from 'axios';
    import moment from 'moment';
    export default {
        data() {
            return {
                signals: [],
                signal: '',
                binery: [],
                gold: [],
                golds: '',
            }
        },

        mounted(){
            $(".back-blur").click(function() {
                $(".back-blur").css('z-index', '-2');
                $(".boxs").animate({'z-index' : '-5', 'width' : '350px', 'height' : '350px'}, 250).animate({'width' : '400px', 'height' : '400px'}, 250);
                $(".box").animate({'z-index' : '-5', 'width' : '350px', 'height' : '350px'}, 250).animate({'width' : '400px', 'height' : '400px'}, 250);
                $(".box-gold").animate({'z-index' : '-6', 'width' : '350px', 'height' : '350px'}, 250).animate({'width' : '400px', 'height' : '400px'}, 250);
            });
            $(".back-blur").css('z-index', '-2');
            $(".boxs").css('z-index', '-5');
            $(".box-gold").css('z-index', '-6');
            $(".open-box").click(function() {
                $(".back-blur").css('z-index', '9');
                $(".boxs").animate({'z-index' : '10', 'width' : '450px', 'height' : '450px'}, 250).animate({'width' : '400px', 'height' : '400px'}, 250);
            });
            $(".open-boxs").click(function() {
                $(".back-blur").css('z-index', '9');
                $(".box-gold").animate({'z-index' : '10', 'width' : '450px', 'height' : '450px'}, 250).animate({'width' : '400px', 'height' : '400px'}, 250);
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
            this.fetchData();
            this.fetchGold();
            setInterval(() => {
                this.fetchBinery();
            }, 3000);
        },
        methods: {
            fetchData() {
                axios.get('/filter/signal').then(response => {
                    this.signals = response.data;
                });
            },
            fetchGold() {
                axios.get('/fetch/signal/gold').then(response => {
                    this.gold = response.data
                });
            },
            fetchBinery() {
                axios.get('/fetch/binery').then(response => {
                    this.binery = response.data;
                    let a = response.data[0].hour;
                    let b = response.data[1].hour;
                    let c = response.data[2].hour;
                    var countDownDate = new Date(a).getTime();
                    var countDownDates = new Date(b).getTime();
                    var countDownDatec = new Date(c).getTime();
                    var x = setInterval(function () {
                        var now = new Date().getTime();
                        var distance = countDownDate - now;
                        var distances = countDownDates - now;
                        var distancec = countDownDatec - now;

                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                        var minute = Math.floor((distances % (1000 * 60 * 60)) / (1000 * 60));
                        var second = Math.floor((distances % (1000 * 60)) / 1000);
                        var minutec = Math.floor((distancec % (1000 * 60 * 60)) / (1000 * 60));
                        var secondc = Math.floor((distancec % (1000 * 60)) / 1000);
                        $(".demo").html(minutes + " : " + seconds);
                        $(".demos").html(minute + " : " + second);
                        $(".democ").html(minutec + " : " + secondc);
                        if (distance < 0) {
                            clearInterval(x);
                            document.getElementsByClassName("demo").innerHTML = "EXPIRED";
                        }
                    }, 1000);

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
        OpenBox(id, status) {
                axios.get('/fetch/gold/' + id).then(response => {
                    this.golds = response.data;
                    $(".box-gold").animate({'z-index' : '10', 'width' : '450px', 'height' : '450px'}, 250).animate({'width' : '400px', 'height' : '400px'}, 250);
                    $(".back-blur").css('z-index', '9');
                });
            },


            fetchUserId(){
                axios.get('/fetch/user/id').then(response => {
                    localStorage.setItem('auth', response.data.id);
                    localStorage.setItem('token', response.data.token);
                });
            },
            NotClick(){
                let id = localStorage.getItem('auth');
                let token = localStorage.getItem('token');
                axios.get('/fetch/user/data/' + id + '/' + token).then(response => {
                    if(response.data.role == 20){
                        $(".disable").hide();
                        $(".enable").show();
                    }
                    else {
                        $(".disable").show();
                        $(".enable").hide();
                    }
                });
            },

            TimeCountA(){
                var tbs = this.infoa.hour;
                setInterval(function () {
                    var sum = document.getElementById('mines1');
                    var after = new Date(tbs.replace(/-/g, '/'));
                    var now = new Date().getTime();
                    var mines = after - now;

                    var days = Math.floor(mines / (1000 * 60 * 60 * 24));
                    var hours = Math.floor(mines % (1000 * 60 * 60 * 24))
                    var minutes = Math.floor(mines % (1000 * 60 * 60) / (1000 * 60));
                    var seconds = Math.floor(mines % (1000 * 60) / (1000));
                    if(minutes != '-1' && seconds != '-1'){
                        sum.innerHTML = minutes + ':' + seconds;
                    }
                    if(minutes < 0 && seconds < 0) {
                        $("#mines1").hide();
                        $("#plus1").show();
                    }
                }, 1000);
            },


            Check() {
                let id = localStorage.getItem('auth');
                let token = localStorage.getItem('token');
                axios.get('/fetch/user/data/' + id + '/' + token).then(response => {
                    if(response.data.role == 1){
                        this.auth = true;
                    }
                    else if(response.data.role == 20){
                        this.auth = true;
                    }
                    else if(localStorage.getItem('auth') == null) {
                        this.auth = false;
                        window.location = '/login';
                    }
                    else {
                        // this.AutoLogin();
                    }
                });
            },
            AutoLogin() {
                let formData = new FormData();
                formData.append('id', localStorage.getItem('auth'));
                formData.append('token', localStorage.getItem('token'));
                axios.post('/login/auto', formData).then(response => {
                    // this.Check();
                });
            },
            fetchDate() {
                let id = localStorage.getItem('auth');
                // let token = localStorage.getItem('token');
                axios.get('/fetch/date/' + id).then(response => {
                    this.time = response.data.time;
                    this.date = response.data.date;
                    this.city = response.data.city;
                });
            },



        },
    }
</script>

<style scoped>
    .line-div{
        text-align: center;
        color: #fff;
        font-size: 22px;
        font-weight: 600;
    }
    .line-div::after{
        content: '';
        height: 3px;
        width: 33%;
        background-color:  blueviolet;
        position: absolute;
        border-radius: 29%;
        transform: translate(10px, 10px);
    }
    .line-div::before{
        content: '';
        height: 3px;
        width: 33%;
        background-color: blueviolet;
        position: absolute;
        border-radius: 29%;
        left: 10%;
        transform: translate(-10px, 10px);
    }
    .time-binery{
        position: relative;
        top: 55%;
        left: 15%;
        color:white;
    }
    .time-binery > p {
        width: 14%;
        float: left;
        font-size: 28px;
        font-weight: 600;
        text-align: center;
        filter: drop-shadow(3px 5px 2px black);
    }
    .inner {
        position: absolute;
        top: 65%;
        right: 9px;
        display: grid;
        transform: translateY(-50%);
    }

    .neon {
        width: 49px;
        height: 28px;
        background: gold;
        border: 2px solid gold;
        border-radius: 20px;
        margin-top:5px;
        margin-bottom:5px;
        text-align: center;
        box-shadow: 0px 0px 16px 1px gold;
        transition: ease 0.3s;
        animation: ready 1s 0s ease infinite;
    }
    .neon-ready {
        width: 49px;
        height: 28px;
        background: gold;
        border: 2px solid gold;
        border-radius: 20px;
        margin-top:5px;
        margin-bottom:5px;
        text-align: center;
        box-shadow: 0px 0px 16px 1px gold;
    }
    @keyframes ready {
        0% ,
        100% {
            box-shadow: -.1vw 0vw .1vw #FED128, -.15vw 0vw .2vw #FED128, -.2vw 0vw .2vw #FED128,
            -.1vw 0vw 1vw gold, -.2vw 0vw 1vw gold, -.4vw 0vw 1vw gold,
            -.1vw 0vw 2vw gold, -.2vw 0vw 2vw gold, -.4vw 0vw .8vw gold, .2vw 0vw 2vw gold;
        }
        50% {
            box-shadow:
                -.1vw 0vw .1vw gold, -.2vw 0vw .1vw gold, -.4vw 0vw .1vw gold,
                -.1vw 0vw .2vw gold, -.2vw 0vw .2vw gold, -.4vw 0vw .2vw gold, .2vw 0vw .5vw gold;
        }
    }

    .neon span {
        font-size: 10px;
        color: #222;
        text-align: center;
        line-height: 17px;
        font-weight: 300;
        transition: ease 0.3s;
    }
    .neon-ready span {
        font-size: 10px;
        color: #222;
        text-align: center;
        line-height: 17px;
        font-weight: 300;
        transition: ease 0.3s;
    }
    .neon1 {
        width: 49px;
        height: 28px;
        background: green;
        border: 2px solid green;
        border-radius: 20px;
        margin-top:5px;
        margin-bottom:5px;
        text-align: center;
        box-shadow: 0px 0px 16px 1px green;
        transition: ease 0.3s;
        animation: go 1s 0s ease infinite;
    }
    .neon1-go {
        width: 49px;
        height: 28px;
        background: green;
        border: 2px solid green;
        border-radius: 20px;
        margin-top:5px;
        margin-bottom:5px;
        text-align: center;
        box-shadow: 0px 0px 16px 1px green;
    }
    @keyframes go {
        0% ,
        100% {
            box-shadow: -.1vw 0vw .1vw #3f800a, -.15vw 0vw .2vw #3f800a, -.2vw 0vw .2vw #3f800a,
            -.1vw 0vw 1vw green, -.2vw 0vw 1vw green, -.4vw 0vw 1vw green,
            -.1vw 0vw 2vw green, -.2vw 0vw 2vw green, -.4vw 0vw .8vw green, .2vw 0vw 2vw green;
        }
        50% {
            box-shadow:
                -.1vw 0vw .1vw green, -.2vw 0vw .1vw green, -.4vw 0vw .1vw green,
                -.1vw 0vw .2vw green, -.2vw 0vw .2vw green, -.4vw 0vw .2vw green, .2vw 0vw .5vw green;
        }
    }

    .neon1 span {
        font-size: 10px;
        color: white;
        text-align: center;
        line-height: 17px;
        font-weight: 300;
        transition: ease 0.3s;
    }
    .neon1-go span {
        font-size: 10px;
        color: white;
        text-align: center;
        line-height: 17px;
        font-weight: 300;
        transition: ease 0.3s;
    }
    .neon2 {
        width: 49px;
        height: 28px;
        background: red;
        border: 2px solid red;
        border-radius: 20px;
        margin-top:5px;
        margin-bottom:5px;
        text-align: center;
        box-shadow: 0px 0px 16px 1px red;
        transition: ease 0.3s;
        animation: end 1s 0s ease infinite;
    }
    .neon2-end {
        width: 49px;
        height: 28px;
        background: red;
        border: 2px solid red;
        border-radius: 20px;
        margin-top:5px;
        margin-bottom:5px;
        text-align: center;
        box-shadow: 0px 0px 16px 1px red;
    }
    @keyframes end {
        0% ,
        100% {
            box-shadow: -.1vw 0vw .1vw #ff400b, -.15vw 0vw .2vw #ff400b, -.2vw 0vw .2vw #ff400b,
            -.1vw 0vw 1vw red, -.2vw 0vw 1vw red, -.4vw 0vw 1vw red,
            -.1vw 0vw 2vw red, -.2vw 0vw 2vw red, -.4vw 0vw .8vw red, .2vw 0vw 2vw red;
        }
        50% {
            box-shadow:
                -.1vw 0vw .1vw red, -.2vw 0vw .1vw red, -.4vw 0vw .1vw red,
                -.1vw 0vw .2vw red, -.2vw 0vw .2vw red, -.4vw 0vw .2vw red, .2vw 0vw .5vw red;
        }
    }

    .neon2 span {
        font-size: 10px;
        color: white;
        text-align: center;
        line-height: 17px;
        font-weight: 300;
        transition: ease 0.3s;
    }
    .neon2-end span {
        font-size: 10px;
        color: white;
        text-align: center;
        line-height: 17px;
        font-weight: 300;
        transition: ease 0.3s;
    }
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
    .open-boxs {
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
        background: linear-gradient(to bottom, #f3b416, #def 80%, white);
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
    .card4 {
        position: relative;
        height: 170px;
        background: url(/img/81563.jpg),
        #ffffff;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        border-radius: 25px;
        margin: 10px;
        transition: 0.25s ease-in;
    }
    .card4 .overlay {
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
    .card4 .content {
        position: absolute;
        top: 40px;
        left: 35%;
    }
    .card4 .content h2 {
        font-weight: bold;
        font-size: 21px;
        color: #f2f2f2;
        filter: drop-shadow(2px 6px 3px black);
    }
    .card4:hover {
        transform: scale(1.05);

    }
    .card4:hover {
        background-position: top;
    }
    .card4:hover .overlay{
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
        box-shadow: 3px 3px 10px 4px rgba(0,0,0,.68);
    }
</style>
