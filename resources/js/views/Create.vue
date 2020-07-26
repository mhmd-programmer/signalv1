<template>
    <div>
        <div class="form-create">
            <p>Send Signal</p>
            <br><br>
            <form @submit.prevent="Submit">
                <div class="form-group" style="display: inline-flex;position:relative;float:right">
                    <label style="position:absolute;top: 0;transform: translate(-31%, -84%);font-size:14px">FirstCurrency</label>
                    <select class="form-control" name="name" v-model="name" style="margin:0px 26px 0px 8px">
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
                    <p style="margin:7px 0px 6px -10px;margin-bottom:0;">/</p>
                        <label style="position:absolute;top: 0;transform: translate(42%, -84%);right: 0;font-size:14px">SecondCurrency</label>
                    <select class="form-control" name="pips" v-model="pips" style="margin:0 0 0 10px">
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
                <div class="form-group" style="width:20%">
                    <v-text-field style="text-align:left" dir="ltr" label="Sell / Buy / Price" name="price" v-model="price"></v-text-field>
                </div>
                <div class="form-group" style="width:20%">
                    <v-text-field dir="ltr" label="stop Loss" name="stop" v-model="stop"></v-text-field>
                </div>
                <div class="form-group" style="width:20%">
                    <v-text-field dir="ltr" label="Take profit" name="profit" v-model="profit"></v-text-field>
                </div>
                <div class="form-group" style="width: 20%;position: absolute;right: 3%">
                    <v-text-field label="Profit" name="pip" v-model="pip"></v-text-field>
                </div>
                <div class="form-group" style="display:flex;width:27%">
                    <label style="padding:9px">Chart</label>
                    <select class="form-control" name="number" v-model="number">
                        <option> 1</option>
                        <option> 2</option>
                        <option> 3</option>
                        <option> 4</option>
                        <option> 5</option>
                        <option> 6</option>
                        <option> 7</option>
                        <option> 8</option>
                        <option> 9</option>
                        <option> 10</option>
                        <option> 11</option>
                        <option> 12</option>
                        <option> 13</option>
                        <option> 14</option>
                        <option> 15</option>
                    </select>
                    <v-text-field style="padding:0 0 0 14px" label="EURUSD" name="symbol" v-model="symbol"></v-text-field>
                </div>
                <br><br><br>
                <div class="form-group" style="margin:0;padding:0;float:right">
                    <span class="btn" style="background:#18c518c7;color:white;border:1px solid #18c518c7;font-size:14px;transform:translateX(3px);border-bottom-left-radius:25px;border-top-left-radius:25px;border-bottom-right-radius:0;border-top-right-radius:0;cursor:pointer" id="change-user1" v-ripple>Buy Signal</span>
                    <span class="btn" style="background:none;color:#ff0000c9;border:1px solid #ff0000c9;font-size:14px;transform:translateX(-2px);border-bottom-right-radius:25px;border-top-right-radius:25px;border-bottom-left-radius:0;border-top-left-radius:0;cursor:pointer" id="change-user2" v-ripple>Sell Signal</span>
                </div>
                <br><br>
                <div class="form-group">
                    <button class="btn" style="background:none;color:#18c518c7;border: 1px solid #18c518c7" v-ripple>Done</button>
                </div>
            </form>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
import Swal from 'sweetalert2';
export default {
    data() {
        return {
            name: '',
            pip: '',
            price: '',
            stop: '',
            profit: '',
            status: '#ff0000c9',
            pips:'',
            symbol: '',
        }
    },
    mounted() {
        $("#change-user2").click(function(){
            $(this).css('background', '#ff0000c9').css('color', 'white').css('transition', '0.3s');
            $("#change-user1").css('background', 'none').css('color', '#18c518c7').css('transition', '0.3s');
            this.status = '#ff0000c9';
        });
        $("#change-user1").click(function(){
            $(this).css('background', '#18c518c7').css('color', 'white').css('transition', '0.3s');
            $("#change-user2").css('background', 'none').css('color', '#ff0000c9').css('transition', '0.3s');
            this.status = '#18c518c7';
        });

        this.Check();
    },
    methods: {
        Check() {
            let id = localStorage.getItem('auth');
            axios.get('/fetch/user/data/' + id).then(response => {
                if(response.data.role == 20){
                    //
                }
                else {
                    window.location.href = '/';
                }
            });
        },
        Submit() {
            let formData = new FormData();
            formData.append('name', this.name);
            formData.append('number', this.number);
            formData.append('pip', this.pip);
            formData.append('price', this.price);
            formData.append('stop', this.stop);
            formData.append('profit', this.profit);
            formData.append('status', this.status);
            formData.append('pips', this.pips);
            formData.append('symbol', this.symbol);
            axios.post('/save/signal', formData).then(response => {
                Swal.fire({
                        icon: 'success',
                        title: 'سیگنال با موفقیت ذخیره شد',
                        showConfirmButton: 'باشه',
                        dir: 'rtl',
                    });
                    this.name = '';
                    this.pip = '';
                    this.price = '';
                    this.stop = '';
                    this.profit = '';
                    this.status = '';
                    $(".red").css('box-shadow', 'none');
                    $(".green").css('box-shadow', 'none');
            });
        },
        Green() {
            $(".green").css('box-shadow', '0px 0px 0px 6px #00800054');
            $(".red").css('box-shadow', 'none');
            this.status = '#18c518c7';
        },
        Red() {
            $(".red").css('box-shadow', '0px 0px 0px 6px #80000054');
            $(".green").css('box-shadow', 'none');
            this.status = '#ff0000c9';
        }
    },
}
</script>
