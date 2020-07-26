<template>
    <div>
        <table class="table table-bordered table-responsive table-mobile" style="border:0;line-height:2;text-align:center;font-size:12px">
                    <tbody>
                        <tr>
                        <td style="transform:translateY(30%);">Free</td>
                            <td v-ripple style="color:white;background:green;border-radius:25px;border:1px solid white;"> <span style="font-size:12px">{{date}} Tehran {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>                             
                            EUR/USD(50pip) <br>
                            Buy price: 4325 <br>
                            stop Loss: 1.39410 <br>
                            Take Profit: 1.40132
                             </td>
                        </tr>
                        <tr>
                            <td style="transform:translateY(30%);">Silver Pelan</td>
                            <td v-ripple style="color:white;background:red;border-radius:25px;border:1px solid white;">  <span style="font-size:12px">{{date}} Tehran {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            GBP/JPY(50pip) <br>
                            Sell price: 13510 <br>
                            stop Loss: 6.13510 <br>
                            Take Profit: 4.12492
                             </td>
                            <td v-ripple style="color:white;background:red;border-radius:25px;border:1px solid white;">  <span style="font-size:12px">{{date}} Tehran {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            GBP/JPY(50pip) <br>
                            Sell price: 13510 <br>
                            stop Loss: 6.13510 <br>
                            Take Profit: 4.12492
                             </td>
                        </tr>
                        <tr>
                            <td style="transform:translateY(30%);">Gold Pelan</td>
                            <td v-ripple style="color:white;background:red;border-radius:25px;border:1px solid white;">  <span style="font-size:12px">{{date}} Tehran {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            GBP/JPY(50pip) <br>
                            Sell price: 13510 <br>
                            stop Loss: 6.13510 <br>
                            Take Profit: 4.12492
                             </td>
                            <td v-ripple style="color:white;background:green;border-radius:25px;border:1px solid white;">  <span style="font-size:12px">{{date}} Tehran {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            EUR/USD(50pip) <br>
                            Buy price: 4325 <br>
                            stop Loss: 1.39410 <br>
                            Take Profit: 1.40132
                             </td>
                            <td v-ripple style="color:white;background:green;border-radius:25px;border:1px solid white;">  <span style="font-size:12px">{{date}} Tehran {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            EUR/USD(50pip) <br>
                            Buy price: 4325 <br>
                            stop Loss: 1.39410 <br>
                            Take Profit: 1.40132
                             </td>
                            <td v-ripple style="color:white;background:red;border-radius:25px;border:1px solid white;">  <span style="font-size:12px">{{date}} Tehran {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            GBP/JPY(50pip) <br>
                            Sell price: 13510 <br>
                            stop Loss: 6.13510 <br>
                            Take Profit: 4.12492
                             </td>
                        </tr>
                        <tr>
                            <td style="border-bottom:aliceblue;border-left:1px solid #dee2e6;transform:translateY(70%);">Diamond Pelan</td>
                            <td v-ripple style="color:white;background:#076107;text-align:center;border-radius:25px;border:1px solid white;"><span class="far fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                            <td v-ripple style="color:white;background:#800e0e;text-align:center;border-radius:25px;border:1px solid white;"><span class="far fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                            <td v-ripple style="color:white;background:#800e0e;text-align:center;border-radius:25px;border:1px solid white;"><span class="far fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                            <td v-ripple style="color:white;background:#076107;text-align:center;border-radius:25px;border:1px solid white;"><span class="far fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                        </tr>
                        <tr>
                            <td style="color:white;opacity:0;border-top:aliceblue;border-left:1px solid #dee2e6;border-bottom:1px solid #dee2e6">اشتراک الماس</td>
                            <td v-ripple style="color:white;background:#800e0e;text-align:center;border-radius:25px;border:1px solid white;"><span class="far fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                            <td v-ripple style="color:white;background:#076107;text-align:center;border-radius:25px;border:1px solid white;"><span class="far fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                            <td v-ripple style="color:white;background:#800e0e;text-align:center;border-radius:25px;border:1px solid white;"><span class="far fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                            <td v-ripple style="color:white;background:#076107;text-align:center;border-radius:25px;border:1px solid white;"><span class="far fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                        </tr>
            </tbody>
            </table>
            <table class="table table-bordered table-desktop" style="border:0;line-height:2;text-align:center">
                    <tbody>
                        <tr>
                        <td style="transform:translateY(30%);">Free</td>
                            <td v-ripple style="color:white;background:green;border-radius:25px;border:1px solid white;"> <span style="font-size:12px">{{date}} Tehran {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>                             
                            EUR/USD(50pip) <br>
                            Buy price: 4325 <br>
                            stop Loss: 1.39410 <br>
                            Take Profit: 1.40132
                             </td>
                        </tr>
                        <tr>
                            <td style="transform:translateY(30%);">Silver Pelan</td>
                            <td v-ripple style="color:white;background:red;border-radius:25px;border:1px solid white;">  <span style="font-size:12px">{{date}} Tehran {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            GBP/JPY(50pip) <br>
                            Sell price: 13510 <br>
                            stop Loss: 6.13510 <br>
                            Take Profit: 4.12492
                             </td>
                            <td v-ripple style="color:white;background:red;border-radius:25px;border:1px solid white;">  <span style="font-size:12px">{{date}} Tehran {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            GBP/JPY(50pip) <br>
                            Sell price: 13510 <br>
                            stop Loss: 6.13510 <br>
                            Take Profit: 4.12492
                             </td>
                        </tr>
                        <tr>
                            <td style="transform:translateY(30%);">Gold Pelan</td>
                            <td v-ripple style="color:white;background:red;border-radius:25px;border:1px solid white;">  <span style="font-size:12px">{{date}} Tehran {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            GBP/JPY(50pip) <br>
                            Sell price: 13510 <br>
                            stop Loss: 6.13510 <br>
                            Take Profit: 4.12492
                             </td>
                            <td v-ripple style="color:white;background:green;border-radius:25px;border:1px solid white;">  <span style="font-size:12px">{{date}} Tehran {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            EUR/USD(50pip) <br>
                            Buy price: 4325 <br>
                            stop Loss: 1.39410 <br>
                            Take Profit: 1.40132
                             </td>
                            <td v-ripple style="color:white;background:green;border-radius:25px;border:1px solid white;">  <span style="font-size:12px">{{date}} Tehran {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            EUR/USD(50pip) <br>
                            Buy price: 4325 <br>
                            stop Loss: 1.39410 <br>
                            Take Profit: 1.40132
                             </td>
                            <td v-ripple style="color:white;background:red;border-radius:25px;border:1px solid white;">  <span style="font-size:12px">{{date}} Tehran {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            GBP/JPY(50pip) <br>
                            Sell price: 13510 <br>
                            stop Loss: 6.13510 <br>
                            Take Profit: 4.12492
                             </td>
                        </tr>
                        <tr>
                            <td style="border-bottom:aliceblue;border-left:1px solid #dee2e6;transform:translateY(70%);">Diamond Pelan</td>
                            <td v-ripple style="color:white;background:#076107;text-align:center;border-radius:25px;border:1px solid white;"><span class="far fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                            <td v-ripple style="color:white;background:#800e0e;text-align:center;border-radius:25px;border:1px solid white;"><span class="far fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                            <td v-ripple style="color:white;background:#800e0e;text-align:center;border-radius:25px;border:1px solid white;"><span class="far fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                            <td v-ripple style="color:white;background:#076107;text-align:center;border-radius:25px;border:1px solid white;"><span class="far fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                        </tr>
                        <tr>
                            <td style="color:white;opacity:0;border-top:aliceblue;border-left:1px solid #dee2e6;border-bottom:1px solid #dee2e6">اشتراک الماس</td>
                            <td v-ripple style="color:white;background:#800e0e;text-align:center;border-radius:25px;border:1px solid white;"><span class="far fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                            <td v-ripple style="color:white;background:#076107;text-align:center;border-radius:25px;border:1px solid white;"><span class="far fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                            <td v-ripple style="color:white;background:#800e0e;text-align:center;border-radius:25px;border:1px solid white;"><span class="far fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                            <td v-ripple style="color:white;background:#076107;text-align:center;border-radius:25px;border:1px solid white;"><span class="far fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                        </tr>
            </tbody>
            </table>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    name: 'table-gold',
    data() {
        return {
            time: '',
            date: '',
            e: false,
            f: false,      
        }
    },
    mounted() {

        if(localStorage.getItem('lang') == 'en'){
            this.e = true;
            this.f = false;
        }
        else {
            this.e = false;
            this.f = true;
        }
        
        this.fetchDate();
    },
    methods: {
        fetchDate() {
            axios.get('/fetch/date').then(response => {
                this.time = response.data.time;
                this.date = response.data.date;
            });
        },
    },
}
</script>