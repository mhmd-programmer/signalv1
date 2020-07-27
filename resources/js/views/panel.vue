<template>
    <div>
       <div class="form-signal">
            <div class="card1 text-center" style="color:white;">
                <h3 class="card-title" style="font-weight:0;text-shadow: 2px 1px 4px white;">panel Admin </h3>
                <h5 class="description" style="font-weight:0">Panel Admin Signal bedam</h5>
            </div>
            <div class="nav-btn">
                <div class="btn-container" id="cur-btn"><button class="btn-btn-cur"><i  class="fas fa-comments-dollar"></i></button>
                <br>    
                <p style="color:white; font-weight:400; font-size:13px;padding-top:8px ">CURRENCIES</p>
                </div>
                <div class="btn-container biner-btn"><button class="btn-btn-binery"><i class="fas fa-bold"></i> </button>
                <br>
                <p style="color:white; font-weight:400; font-size:13px;padding-top:8px ">BINERY OPTION</p>
                </div>
                <div class="btn-container " id="gold-btn"><button class="btn-btn-gold"> <i class="fas fa-coins"></i></button>
                <br>
                <p style="color:white; font-weight:400; font-size:13px;padding-top:8px ">GOLD</p>
                </div>
         
            </div>
            <form class="form-currencies" @submit.prevent="Forex">
                    
               <div class="currencies">
                    <select class=" arzha col-6 col-lg-3 col-md-3 col-sm-3" name="name" v-model="name" required>
                    <option selected>ONE CURRENCIE</option>
                    <option> EUR</option>
                    <option> USD</option>
                    <option> GBP</option>
                    <option> AUD</option>
                    <option> NZD</option>
                    <option> CAD</option>
                    <option> CHF</option>
                    <option> JPY</option>
                    <option> CNY</option>
                    <option> AED</option>
                    <option> TRY</option>
                    <option> SEK</option>
                    <option> KRW</option>
                    <option> SGD</option>
                    <option> SAR</option>
                    <option> RUB</option>
                    <option> QAR</option>
                    <option> PKR</option>
                    <option> KWD</option>
                    <option> IQD</option>
                    <option> HKD</option>
                    <option> DKK</option>
                    </select>
                    <select class=" arzha col-6 col-lg-3 col-md-3 col-sm-3" label="EUR" v-model="names" required >
                        <option selected>TWO CURRENCIE</option>
                    <option> EUR</option>
                    <option> USD</option>
                    <option> GBP</option>
                    <option> AUD</option>
                    <option> NZD</option>
                    <option> CAD</option>
                    <option> CHF</option>
                    <option> JPY</option>
                    <option> CNY</option>
                    <option> AED</option>
                    <option> TRY</option>
                    <option> SEK</option>
                    <option> KRW</option>
                    <option> SGD</option>
                    <option> SAR</option>
                    <option> RUB</option>
                    <option> QAR</option>
                    <option> PKR</option>
                    <option> KWD</option>
                    <option> IQD</option>
                    <option> HKD</option>
                    <option> DKK</option>
                    </select>
               </div>
               <div class="row" style="height:56%">
                    <div class="radio-container  col-12 col-sm-4 col-lg-4 col-md-4">
                        <div class="radiobuysell">
                               
                            <input type="radio" id="buy" name="info" v-model="info" value="buy">
                            <label for="buy">BUY</label><br>
                            <input type="radio" id="buylimit" name="info" v-model="info" value="buy limit">
                            <label for="buylimt">BUY LIMIT</label><br>
                            <input type="radio" id="buystop" name="info" v-model="info" value="buy stop">
                            <label for="buystop">BUY STOP</label><br>
                        
                        
                            <input type="radio" id="sell" name="info" v-model="info" value="sell">
                            <label for="sell">SELL</label><br>
                            <input type="radio" id="selllimit" name="info" v-model="info" value="sell limit">
                            <label for="selllimit">SELL LIMIT</label><br>
                            <input type="radio" id="sellstop" name="info" v-model="info" value="sell stop">
                            <label for="sellstop">SELL STOP</label>
                        
                    </div>

               </div>
               <div class="table-container col-12 col-sm-4 col-lg-4 col-md-4" style="padding:0">
                   <div id="radioBtn">
                        
                        <input type="radio" id="adad1" name="number" v-model="number" value="1">
                            <label for="adad1">1</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn">
                        <input type="radio" id="adad2" name="number" v-model="number" value="2">
                            <label for="adad2">2</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn">
                        <input type="radio" id="adad3" name="number" v-model="number" value="3">
                            <label for="adad3">3</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn">
                        <input type="radio" id="adad4" name="number" v-model="number" value="4">
                            <label for="adad4">4</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn">
                        <input type="radio" id="adad5" name="number" v-model="number" value="5">
                            <label for="adad5">5</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn">
                        <input type="radio" id="adad6" name="number" v-model="number" value="6">
                            <label for="adad6">6</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn">
                        <input type="radio" id="adad7" name="number" v-model="number" value="7">
                            <label for="adad7">7</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn">
                        <input type="radio" id="adad8" name="number" v-model="number" value="8">
                            <label for="adad8">8</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn">
                        <input type="radio" id="adad9" name="number" v-model="number" value="9">
                            <label for="adad9">9</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn">
                        <input type="radio" id="adad10" name="number" v-model="number" value="10">
                            <label for="adad10">10</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn">
                        <input type="radio" id="adad11" name="number" v-model="number" value="11">
                            <label for="adad11">11</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn">
                        <input type="radio" id="adad12" name="number" v-model="number" value="12">
                            <label for="adad12">12</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn">
                        <input type="radio" id="adad13" name="number" v-model="number" value="13">
                            <label for="adad13">13</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn">
                        <input type="radio" id="adad14" name="number" v-model="number" value="14">
                            <label for="adad14">14</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn">
                        <input type="radio" id="adad15" name="number" v-model="number" value="15">
                            <label for="adad15">15</label><br>
                            <div class="check"></div>
                   </div>
               </div>

                <div class="table-container col-12 col-lg-4 col-md-4 col-sm-4">
                    <input class="inp-price" type="text" placeholder="PRICE" name="price" v-model="price">
                    <input class="inp-price" type="text" placeholder="STOP LOSS" name="stop" v-model="stop">
                    <input class="inp-price" type="text" placeholder="TAKE PROFIT" name="profit" v-model="profit">
                </div>
               </div>
               <input type="submit" style="outline:none;position: absolute;left: 50%$;z-index: 10;" class="send-btn-price" v-ripple>
            </form>
            <form class="form-gold" @submit.prevent="Gold">
                <h3 style="padding-top:20px">XAU/USD</h3>
                 <div class="table-container col-12 col-lg-12 col-md-12 col-sm-6" style="border-right:1px solid white">
                     <p>Short Time</p>
                    <input class="inp-price-gold" type="text" placeholder="PRICE" name="price" v-model="pgold"><br>
                    <input class="inp-price-gold" type="text" placeholder="STOP LOSS" name="stop" v-model="sgold"><br>
                    <input class="inp-price-gold" type="text" placeholder="TAKE PROFIT" name="profit" v-model="ppgold"><br>
                    <select name="info" id="" class="inp-price-gold" @change="Time" v-model="time" style="width:25%">
                        <option value="long time">Long Time</option>
                        <option value="short time">Short Time</option>
                    </select><br>
                    <input type="submit" class="ready" value="Ready" disabled>
                    
                
                 <div>
                     <div id="radioBtn" style="width:20%">
                        
                        <input type="radio" id="adada1" name="number" v-model="ngold" value="1">
                            <label for="adada1">1</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn" style="width:20%">
                        <input type="radio" id="adada2" name="number" v-model="ngold" value="2">
                            <label for="adada2">2</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn" style="width:20%">
                        <input type="radio" id="adada3" name="number" v-model="ngold" value="3">
                            <label for="adada3">3</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn" style="width:20%">
                        <input type="radio" id="adada4" name="number" v-model="ngold" value="4">
                            <label for="adada4">4</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn" style="width:20%">
                        <input type="radio" id="adada5" name="number" v-model="ngold" value="5">
                            <label for="adada5">5</label><br>
                            <div class="check"></div>
                   </div>
                 </div>
                </div>
                
                 
                <button style="outline:none; width:20%; height:30px; margin-top:1% " class="send-btn-price" v-ripple>SEND</button>
            </form>
       </div>
    </div>
</template>
<script>
    import axios from 'axios';
    export default {
        data() {
            return {
             name: '',
             names: '',
             info: '',
             price: '',
             stop: '',
             profit: '',
             number: '',
             time: '',
             pgold: '',
             sgold: '',
             ppgold: '',
             ngold: '',
            }
        },
        mounted() {
            $('.ready').hide()
            $('.form-gold').hide()
             $('.btn-btn-cur').css('backgroundColor' , '#3c0e67' )
                        $('.btn-btn-cur').css('color' , '#fff' )
                        $('.btn-btn-cur').css('border' , '2px solid #fff' )

            $(document).ready(
                
                function () {
                    $('#cur-btn').click(function(){
                        $('.form-currencies').fadeIn(2000)
                        $('.form-gold').hide(100)
                        $('.btn-btn-cur').css('backgroundColor' , '#3c0e67' )
                        $('.btn-btn-cur').css('color' , '#fff' )
                        $('.btn-btn-cur').css('border' , '2px solid #fff' )
                        $('.btn-btn-gold').css('backgroundColor' , '#fff' )
                        $('.btn-btn-gold').css('color' , '#3c0e67' )

                    })
                    
                    $('#gold-btn').click(function(){
                        $('.form-currencies').fadeOut(100)
                        $('.form-gold').fadeIn(2000)
                        $('.btn-btn-gold').css('backgroundColor' , '#3c0e67' )
                        $('.btn-btn-gold').css('color' , '#fff' )
                        $('.btn-btn-gold').css('border' , '2px solid #fff' )
                        $('.btn-btn-cur').css('backgroundColor' , '#fff' )
                        $('.btn-btn-cur').css('color' , '#3c0e67' )
                        $('.btn-btn-cur').css('border' , '2px solid #fff' )
                    })
                    $('.table-number').click(function(){
                    $('.table-number').toggleClass('table-table-1')

                    })
                }
            );

        },
        methods: {
            Time() {
                if(this.time == 'short time'){
                    $('.ready').fadeIn();
                }
                else {
                    $('.ready').fadeOut();
                }
            },
            Forex() {
                let formData = new FormData();
                let sum = this.name + '/' +  this.names;
                formData.append('name', sum);
                formData.append('info', this.info);
                formData.append('number', this.number);
                formData.append('price', this.price);
                formData.append('stop', this.stop);
                formData.append('profit', this.profit);
                axios.post('/save/signal', formData).then(response => {
                   this.name = '';
                   this.names = '';
                   this.price = ''; 
                   this.stop = '';
                   this.profit = '';
                });
            },
            Gold() {
                let formData = new FormData();
                formData.append('info', this.time);
                formData.append('ngold', this.ngold);
                formData.append('price', this.pgold);
                formData.append('stop', this.sgold);
                formData.append('profit', this.ppgold);
                axios.post('/save/signal/gold', formData).then(response => {
                    
                });
            },
        },
    }
</script>
<style scoped>
body{
    margin: 0;
    font-family: Poppins,sans-serif;
    font-size: .875rem;
    font-weight: 400;
    line-height: 1.5;
    color: #8a8f9c;
    text-align: left;
    background-color: #1e1e2f;
    cursor: url(/img/R_B.cur);
    
}
.ready {
    background: none;
    color: yellow;
    border: 1px solid;
    padding: 5px;
    opacity: 0.7;
    font-size: 12px;
    border-radius: 7px;
}
.form-signal{
    width: 60%;
    height: 90vh;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
}
.btn-container{
    width: 33%;
    float: left;
    text-align: center;
}
.nav-btn{
    width: 100%;
    height: 14%;
    margin-top: 20px;
    margin-bottom:20px ;
}
.btn-container > button {
    width: 50px;
    height: 50px;
    outline: none;
    border-radius: 50%;
    background-color: white;
    font-size: 25px;
     color:#3c0e67
}
.btn-container > button:hover{
    background-color: #3c0e67;
    color: white;
    border: 2px solid #fff;
    transition: 1s;
}
.form-currencies{
    background: #222a42;
    width: 100%;
    padding-bottom: 35px;
    text-align: center;
    border-radius:50px ;
    color: white;
}
.currencies{
    padding: 15px 30px 0 30px;    

}
.arzha{
    background-color: #222a42;
    border: 1px solid dimgray;
    outline: none;
    height: 40px;
    font-size:11px ;
    font-weight: 600;
    margin: 3%;
    border-radius: 10px ;
}
.radiobuysell{
    float: left;
    position: relative;
    left: 30%;
    width: 50%;
   font-size:12px ;
   font-weight:700 ;
}
.radio-container{
   text-align:left;
    height: 100px;
}
.table-container{
    float: left;
  
}

.table-table-1{
    border: 2px solid violet;
    color: violet;
}
.inp-price{
    background-color: transparent;
    border: 1px solid dimgray;
    outline: none;
    height: 35px;
    font-size:11px ;
    font-weight: 600;
    margin: 3%;
    border-radius: 10px ;
    text-indent: 10px;

}
.send-btn-price{
    font-weight: 600;
    border: 1px solid;
    width: 16%;
    height: 40px;
    border-radius: 13px;
    color:#4af64a ;
    outline: none;
}
/* gold-form */
.form-gold{
    background: #222a42;
    width: 80%;
    padding-bottom: 35px;
    text-align: center;
    border-radius:50px ;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    color: white;
}
.inp-price-gold{
    background-color: #222a42;
    border: 1px solid dimgray;
    outline: none;
    height: 35px;
    font-size:11px ;
    font-weight: 600;
    margin: 2%;
    border-radius: 10px ;
    text-indent: 10px;


}
#radioBtn{
    width: 25%;
    height: 16%;
    float: left;
}

#radioBtn > input[type=radio]{
  position: absolute;
  visibility: hidden;
}
#radioBtn label{
    position: relative;
    transform: translate(0%, 90%);
    z-index: 999    ;
}
#radioBtn .check{
  display: block;
  border: 1px solid #AAAAAA;
  border-radius: 100%;
  height: 35px;
  width: 35px;
  position: relative;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
	z-index: 5;
	transition: border .25s linear;
	-webkit-transition: border .25s linear;
}
#radioBtn input[type=radio]:checked ~ .check {
  border: 5px solid #0DFF92;
}
#radioBtn input[type=radio]:checked ~ .check::before{
  background: #0DFF92;
}
.heart-rate {
  width: 150px;
  height: 73px;
  position: relative;
  margin: 20px auto;
}

.fade-in {
  position: absolute;
  width: 100%;
  height: 100%;
  background-color: #1e1e2f;
  top: 0;
  right: 0;
  animation: heartRateIn 2.5s linear infinite;
}

.fade-out {
  position: absolute;
  width: 120%;
  height: 100%;
  top: 0;
  left: -120%;
  animation: heartRateOut 2.5s linear infinite;
  background: #1e1e2f;
  background: -moz-linear-gradient(left, #1e1e2f 0%, #1e1e2f 50%, rgba(255, 255, 255, 0) 100%);
  background: -webkit-linear-gradient(left, #1e1e2f 0%, #1e1e2f 50%, rgba(255, 255, 255, 0) 100%);
  background: -o-linear-gradient(left, #1e1e2f 0%, #1e1e2f 50%, rgba(255, 255, 255, 0) 100%);
  background: -ms-linear-gradient(left, #1e1e2f 0%, #1e1e2f 50%, rgba(255, 255, 255, 0) 100%);
  background: linear-gradient(to right, #1e1e2f 0%, #1e1e2f 80%, rgba(255, 255, 255, 0) 100%);
}

@keyframes heartRateIn {
  0% {
    width: 100%;
  }
  50% {
    width: 0;
  }
  100% {
    width: 0;
  }
}

@keyframes heartRateOut {
  0% {
    left: -120%;
  }
  30% {
    left: -120%;
  }
  100% {
    left: 0;
  }
}


</style>