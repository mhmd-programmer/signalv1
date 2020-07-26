<template>
    <div>
        <table class="table table-bordered table-responsive table-mobile" style="border:0;line-height:2;text-align:center;font-size:12px">
                    <tbody>
                        <tr>
                        <td style="padding:0 70px 0 10px;background:rgb(103, 159, 167);border-radius:25px;position:relative;border:0"><span style="color:white;position:absolute;top:50%;left:50%;transform:translate(-50%, -50%)">Free</span></td>
                            <td v-for="signal in signals" v-ripple style="color:white;background:green;border-radius:25px;border:1px solid white;"> <span style="font-size:12px">{{date}} {{city}} {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            {{signal.name}}({{signal.pip}}pip) <br>
                            Buy price: {{signal.price}} <br>
                            stop Loss: {{signal.stop}} <br>
                            Take Profit: {{signal.profit}}
                             </td>
                        </tr>
                        <tr>
                            <td style="background:rgb(103, 159, 167);border-radius:25px;position:relative;border:0"><span style="color:white;position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);">Silver Pelan</span></td>
                            <td v-ripple style="color:white;background:#679fa7;text-align:center;border-radius:25px;border:1px solid white;"><span class="fa fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                            <td v-ripple style="color:white;background:#679fa7;text-align:center;border-radius:25px;border:1px solid white;"><span class="fa fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                        </tr>
                        <tr>
                            <td style="background:rgb(103, 159, 167);border-radius:25px;position:relative;border:0"><span style="color:white;position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);">Gold Pelan</span></td>
                            <td v-ripple style="color:white;background:#679fa7;text-align:center;border-radius:25px;border:1px solid white;"><span class="fa fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                            <td v-ripple style="color:white;background:#679fa7;text-align:center;border-radius:25px;border:1px solid white;"><span class="fa fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                            <td v-ripple style="color:white;background:#679fa7;text-align:center;border-radius:25px;border:1px solid white;"><span class="fa fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                            <td v-ripple style="color:white;background:#679fa7;text-align:center;border-radius:25px;border:1px solid white;"><span class="fa fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-bottom:aliceblue;border-left:1px solid #dee2e6;background:rgb(103, 159, 167);position:relative;border:0;border-top-left-radius:25px;border-top-right-radius:25px"><span style="color:white;position:absolute;top:100%;left:50%;transform:translate(-50%, -50%)">Diamond Pelan</span></td>
                            <td v-ripple style="color:white;background:#679fa7;text-align:center;border-radius:25px;border:1px solid white;"><span class="fa fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                            <td v-ripple style="color:white;background:#679fa7;text-align:center;border-radius:25px;border:1px solid white;"><span class="fa fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                            <td v-ripple style="color:white;background:#679fa7;text-align:center;border-radius:25px;border:1px solid white;"><span class="fa fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                            <td v-ripple style="color:white;background:#679fa7;text-align:center;border-radius:25px;border:1px solid white;"><span class="fa fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                        </tr>
                        <tr>
                            <td style="color:white;background:rgb(103, 159, 167);border-top:aliceblue;border-left:1px solid #dee2e6;border-bottom:1px solid #dee2e6;border:0;border-bottom-left-radius:25px;border-bottom-right-radius:25px"><span style="opacity:0">a</span></td>
                            <td v-ripple style="color:white;background:#679fa7;text-align:center;border-radius:25px;border:1px solid white;"><span class="fa fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                            <td v-ripple style="color:white;background:#679fa7;text-align:center;border-radius:25px;border:1px solid white;"><span class="fa fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                            <td v-ripple style="color:white;background:#679fa7;text-align:center;border-radius:25px;border:1px solid white;"><span class="fa fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                            <td v-ripple style="color:white;background:#679fa7;text-align:center;border-radius:25px;border:1px solid white;"><span class="fa fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                        </tr>
            </tbody>
            </table>
            <table class="table table-bordered table-desktop" style="border:0;line-height:2;text-align:center">
                    <tbody>
                        <tr>
                        <td style="background:rgb(103, 159, 167);border-radius:25px;position:relative;padding:0 147px 0 23px;border:0"><span style="color:white;position:absolute;top:50%;left:50%;transform:translate(-50%, -50%)">Free</span></td>
                            <td v-for="signal in signals" v-ripple style="color:white;background:green;border-radius:25px;border:1px solid white;"> <span style="font-size:12px">{{date}} {{city}} {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            {{signal.name}}({{signal.pip}}pip) <br>
                            Buy price: {{signal.price}} <br>
                            stop Loss: {{signal.stop}} <br>
                            Take Profit: {{signal.profit}}
                             </td>
                        </tr>
                        <tr>
                            <td style="background:rgb(103, 159, 167);border-radius:25px;position:relative;border:0"><span style="color:white;position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);">Silver Pelan</span></td>
                            <td v-ripple style="color:white;background:#679fa7;text-align:center;border-radius:25px;border:1px solid white;"><span class="fa fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                            <td v-ripple style="color:white;background:#679fa7;text-align:center;border-radius:25px;border:1px solid white;"><span class="fa fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                        </tr>
                        <tr>
                            <td style="background:rgb(103, 159, 167);border-radius:25px;position:relative;border:0"><span style="color:white;position:absolute;top:50%;left:50%;transform:translate(-50%, -50%)">Gold Pelan</span></td>
                            <td v-ripple style="color:white;background:#679fa7;text-align:center;border-radius:25px;border:1px solid white;"><span class="fa fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                            <td v-ripple style="color:white;background:#679fa7;text-align:center;border-radius:25px;border:1px solid white;"><span class="fa fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                            <td v-ripple style="color:white;background:#679fa7;text-align:center;border-radius:25px;border:1px solid white;"><span class="fa fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                            <td v-ripple style="color:white;background:#679fa7;text-align:center;border-radius:25px;border:1px solid white;"><span class="fa fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                        </tr>
                        <tr>
                            <td style="background:rgb(103, 159, 167);border-bottom:aliceblue;border-left:1px solid #dee2e6;position:relative;border-top-left-radius:25px;border-top-right-radius:25px;border:0"><span style="color:white;position:absolute;top:100%;left:50%;transform:translate(-50%, -50%)">Diamond Pelan</span></td>
                            <td v-ripple style="color:white;background:#679fa7;text-align:center;border-radius:25px;border:1px solid white;"><span class="fa fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                            <td v-ripple style="color:white;background:#679fa7;text-align:center;border-radius:25px;border:1px solid white;"><span class="fa fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                            <td v-ripple style="color:white;background:#679fa7;text-align:center;border-radius:25px;border:1px solid white;"><span class="fa fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                            <td v-ripple style="color:white;background:#679fa7;text-align:center;border-radius:25px;border:1px solid white;"><span class="fa fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                        </tr>
                        <tr>
                            <td style="color:white;background:rgb(103, 159, 167);border-top:aliceblue;border-left:1px solid #dee2e6;border-bottom:1px solid #dee2e6;border-bottom-left-radius:25px;border-bottom-right-radius:25px"><span style="opacity:0">s</span></td>
                            <td v-ripple style="color:white;background:#679fa7;text-align:center;border-radius:25px;border:1px solid white;"><span class="fa fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                            <td v-ripple style="color:white;background:#679fa7;text-align:center;border-radius:25px;border:1px solid white;"><span class="fa fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                            <td v-ripple style="color:white;background:#679fa7;text-align:center;border-radius:25px;border:1px solid white;"><span class="fa fa-lock" style="font-size:25px;color:black"></span><br>
                            <router-link to="/store" style="background:black;border:black;opacity:0.7;font-size:14px;color:white" class="btn" v-ripple><span v-if="e">Buy</span> <span v-if="f">خرید</span> <span class="far fa-shopping-cart"></span></router-link>
                            </td>
                            <td v-ripple style="color:white;background:#679fa7;text-align:center;border-radius:25px;border:1px solid white;"><span class="fa fa-lock" style="font-size:25px;color:black"></span><br>
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
    name: 'TableFree',
    data() {
        return {
            time: '',
            date: '',
            e: false,
            f: false,
            signals: [],
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
        this.fetchSignal();
    },
    methods: {
        fetchDate() {
            axios.get('/fetch/date').then(response => {
                this.time = response.data.time;
                this.date = response.data.date;
                this.city = response.data.city;
            });
        },
        fetchSignal() {
        axios.get('/fetch/signal/free').then(response => {
             this.signals = response.data;
        });
    },
    },
    
}
</script>