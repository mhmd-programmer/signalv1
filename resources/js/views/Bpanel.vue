<template>
    <div>
        <div class="form-create2">
            <p>Send Signal Binery option</p>
            <br><br>
            <form @submit.prevent="Submit">
                <div class="form-group" style="display: inline-flex;position:relative;border-bottom: 1px solid rgba(0 , 0 , 0 , 0.2);padding-bottom: 26px;">
                    <label style="position:absolute;top: 0;transform: translate(-31%, -84%);font-size:14px">FirstCurrency</label>
                    <select class="form-control" name="name" style="margin:0px 26px 0px 8px" v-model="name">
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
                    <select class="form-control" name="pips" style="margin:0 0 0 10px" v-model="pips">
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
<!--                <div class="form-group" style="display:inline-block;width:80%">-->
<!--                    <label style="padding:9px">Chart</label>-->
<!--                    <select class="form-control" name="number" v-model="number">-->
<!--                        <option> 1</option>-->
<!--                        <option> 2</option>-->
<!--                        <option> 3</option>-->
<!--                        <option> 4</option>-->
<!--                        <option> 5</option>-->
<!--                        <option> 6</option>-->
<!--                        <option> 7</option>-->
<!--                        <option> 8</option>-->
<!--                        <option> 9</option>-->
<!--                        <option> 10</option>-->
<!--                        <option> 11</option>-->
<!--                        <option> 12</option>-->
<!--                        <option> 13</option>-->
<!--                        <option> 14</option>-->
<!--                        <option> 15</option>-->
<!--                    </select>-->
<!--                </div>-->
                <div class="form-group">
                    <v-text-field label="Time" name="time" v-model="time"></v-text-field>
                </div>
                <br><br><br>
<!--                <div class="form-group" style="margin:0;padding:0;">-->
<!--                    <span class="btn" style="background:yellow;color:white;border:1px solid yellow;font-size:14px;transform:translateX(3px);border-bottom-left-radius:25px;border-top-left-radius:25px;border-bottom-right-radius:0;border-top-right-radius:0;cursor:pointer;width:25%" id="change-user1" v-ripple>Ready</span>-->
<!--                    <span class="btn" style="background:none;color:green;border:1px solid green;font-size:14px;transform:translateX(-2px);border-radius:0;cursor:pointer;width:25%" id="change-user3" v-ripple>Go</span>-->
<!--                    <span class="btn" style="background:none;color:red;border:1px solid red;font-size:14px;transform:translateX(-7px);border-bottom-right-radius:25px;border-top-right-radius:25px;border-bottom-left-radius:0;border-top-left-radius:0;cursor:pointer;width:25%" id="change-user2" v-ripple>End</span>-->
<!--                </div>-->
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
            status: '',
            time: '',
            name: '',
            pips: '',
            number: '',
            status: 'ready',
        }
    },
    mounted() {
        $("#change-user2").click(function(){
            $(this).css('background', '#ff0000c9').css('color', 'white').css('transition', '0.3s');
            $("#change-user1").css('background', 'none').css('color', 'yellow').css('transition', '0.3s');
            $("#change-user3").css('background', 'none').css('color', 'green').css('transition', '0.3s');
            this.status = 'end';
        });
        $("#change-user1").click(function(){
            $(this).css('background', 'yellow').css('color', 'white').css('transition', '0.3s');
            $("#change-user2").css('background', 'none').css('color', '#ff0000c9').css('transition', '0.3s');
            $("#change-user3").css('background', 'none').css('color', 'green').css('transition', '0.3s');
            this.status = 'ready';
        });
        $("#change-user3").click(function(){
            $(this).css('background', 'green').css('color', 'white').css('transition', '0.3s');
            $("#change-user2").css('background', 'none').css('color', '#ff0000c9').css('transition', '0.3s');
            $("#change-user1").css('background', 'none').css('color', 'yellow').css('transition', '0.3s');
            this.status = 'go';
        });


        // this.Check();
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
            // formData.append('number', this.number);
            formData.append('pips', this.pips);
            formData.append('time', this.time);
            formData.append('status', this.status);
            axios.post('/save/binery', formData).then(response => {
                Swal.fire({
                        icon: 'success',
                        title: 'سیگنال با موفقیت ذخیره شد',
                        showConfirmButton: 'باشه',
                        dir: 'rtl',
                    });
                    this.name = '';
                    this.pips = '';
                    this.number = '';
                    this.time = '';
            });
        },
    },
}
</script>
