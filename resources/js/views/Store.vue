<template>
    <div id="pay-acc">
        
        <div style="position:absolute;left:50%;top:0;transform:translateX(-50%)">
            <router-link to="/"><img src="/img/sin2.png" class="img-fluid" style="width:200px"></router-link>
        </div>
        <div class="container" style="margin-top:250px">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 back-store" style="text-align:center ">
                    <div class="card card-default" id="silver-width"></div>
                        <div class="card card-body silver-back" dir="rtl" style="border:0;background:linear-gradient(+45deg,#a7acd9,#9e8fb2);border-radius:5px;box-shadow: #4d4949f2 0px 0px 20px 3px; padding:10px">
                            <div v-if="f" style="text-align:right;transform:translate(-5%, 27%)">
                            <span style="font-size: 22px;font-weight: 900;opacity: 0.6;color:white"> اشتراک نقره ای</span>
                            </div>
                            <div v-if="e" style="text-align:left;transform:translate(5%, 27%)">
                                <span style="font-size: 22px;font-weight: 900;opacity: 0.6;color:white">SILVER PACKAGE</span>
                            </div>
                            
                            <p v-if="e" style="margin-bottom:0px;font-size: 95px;opacity: .2;color: white; border-bottom:1px solid white">25</p>
                            <p v-if="e" style="margin-bottom:0px;font-size: 43px;color: white;position:absolute;left:50%; transform: translate(-100%, 110%)">$25</p>
                           
                            
                            <p v-if="f" style="margin-bottom:0px;font-size: 85px;opacity: .2;color: white; border-bottom:1px solid white">150</p>
                            <p v-if="f" style="margin-bottom:0px;font-size: 43px;color: white;position:absolute;left:50%; transform: translate(-100%, 110%)"> 150 <span style="font-size:19px; position: absolute;transform: translateY(70%); ">هزارتومان</span></p>

                            <div v-if="f" style="margin-top:20px;color:white ">
                            <p style="line-height:1.4"> 120 پیپ سود روزانه با معاملات کوتاه مدت</p>                                                        
                            <p style="line-height:1.1"> کانال VIP تلگرتم</p>
                            <p style="line-height:1.1"> آموزش 0 تا 100</p>
                            <p style="line-height:1.1"> پشتیبانی 24 ساعته</p>
                            <p style="line-height:1.1"> 1 تا 3 سیگنال رایگان</p>
                            <p style="line-height:1.1; visibility:hidden"> 1000 پیپ سود هفتگی با معاملات بلند مدت</p>
                            <p style="line-height:1.1; visibility:hidden"> پنل ایمیل</p>
                            </div>
                            <div v-if="e" style="margin-top:20px;color:white " >
                            <p style="line-height:1.1" dir="ltr"> 120 pip daily benefit<br> with short-term bargain </p>                                                        
                            <p style="line-height:1.1">Telegram VIP Channel-</p>
                            <p style="line-height:1.1" dir="ltr"> Training from 0 to 100</p>
                            <p style="line-height:1.1" dir="ltr"> 24/7 customer service ( support )</p>
                            <p style="line-height:1.1" dir="ltr"> 1 to 3 daily signal</p>
                            <p style="line-height:1.1; visibility:hidden"> 1000 پیپ سود هفتگی با معاملات بلند مدت</p>
                            <p style="line-height:1.1; visibility:hidden"> پنل ایمیل</p>
                            </div>
                        <div>
                            <div dir="center">
                                <button @click="OpenStore" v-if="f" class="botn-buy" style="color:white; outline:none;margin:5px">خرید <span class="far fa-shopping-cart"></span></button>
                                <button @click="OpenStore" v-if="e" class="botn-buy" style="color:white; outline:none;margin:5px">BUY <span class="far fa-shopping-cart"></span></button>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 diamond-back-one" id="diamond-width">
                    <div class="card card-default" style="border:0;width:100%;position:relative"></div>
                        <div class="card card-body diamond-back" dir="rtl" style="border:0;background:linear-gradient(-45deg,#43cbff,#9708cc);border-radius:5px;box-shadow: #4d4949f2 0px 0px 20px 3px;;z-index:10;padding:10px">
                        <div v-if="f" style="text-align:right;transform:translate(-5%, 27%)">
                            <span style="font-size: 22px;font-weight: 900;opacity: 0.6;color:white"> اشتراک الماس</span>
                        </div>
                        <div v-if="e" style="text-align:left;transform:translate(5%, 27%)">
                            <span style="font-size: 22px;font-weight: 900;opacity: 0.6;color:white">DIAMOND PACKAGE</span>
                        </div>
                           <p v-if="e" style="margin-bottom:0px;font-size: 95px;opacity: .2;color: white; border-bottom:1px solid white">50</p>
                            <p v-if="e" style="margin-bottom:0px;font-size: 43px;color: white;position:absolute;left:50%; transform: translate(-100%, 110%)">$50</p>
                           
                            
                            <p v-if="f" style="margin-bottom:0px;font-size: 85px;opacity: .2;color: white; border-bottom:1px solid white">250</p>
                            <p v-if="f" style="margin-bottom:0px;font-size: 43px;color: white;position:absolute;left:50%; transform: translate(-100%, 110%)"> 250 <span style="font-size:19px; position: absolute;transform: translateY(70%); ">هزارتومان</span></p>
                        <div v-if="f" style="margin-top:20px; color:white ">
                            <p style="line-height:1.4"> 500 پیپ سود روزانه با معاملات کوتاه مدت</p>
                            <p style="line-height:1.4"> 1000 پیپ سود هفتگی با معاملات بلند مدت</p>
                            <p style="line-height:1.4"> کانال VIP تلگرتم</p>
                            <p style="line-height:1.4"> آموزش 0 تا 100</p>
                            <p style="line-height:1.4"> پشتیبانی 24 ساعته</p>
                            <p style="line-height:1.4"> 10 تا 15 سیگنال رایگان</p>
                            <p style="line-height:1.4">پنل SMS و Email</p>
                            <p style="line-height:1.4;visibility:hidden"> پنل ایمیل</p>
                            
                        </div>
                        <div v-if="e" style="margin-top:20px; color:white ">
                            <p style="line-height:1.4" dir="ltr"> 500 pip daily benefit with short-term bargain</p>
                            <p style="line-height:1.4" dir="ltr"> 100 pip weekly benefit with long-term bargain</p>
                            <p style="line-height:1.4">Telegram VIP Channel-</p>
                            <p style="line-height:1.4">Training from 0 to 100-</p>
                            <p style="line-height:1.4" dir="ltr"> 24/7 customer service ( support )</p>
                            <p style="line-height:1.4" dir="ltr"> 10 to 15 daily signal </p>
                            <p style="line-height:1.4">Email and SMS panel-</p>
                            <p style="line-height:1.1 ;visibility:hidden"> 10 تا 15 سیگنال رایگان</p>
                            
                        </div>
                            <div dir="center">
                                <button @click="OpenStore" v-if="f" class="botn-buy" style="color:white; outline:none;margin:5px">خرید <span class="far fa-shopping-cart"></span></button>
                                <button @click="OpenStore" v-if="e" class="botn-buy" style="color:white; outline:none;margin:5px">BUY <span class="far fa-shopping-cart"></span></button>
                            </div>
                        
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 back-store" style="text-align:center;padding:0px;z-index:1">
                    <div class="card card-default" style="border:0;width:100%">
                        </div>
                        <div class="card card-body back-gold" dir="rtl" id="gold-width">
                        <div v-if="f" style="text-align:right;transform:translate(-5%, 27%)">
                            <span style="font-size: 22px;font-weight: 900;text-indent: 21px;opacity: 0.6;color:white">اشتراک طلایی</span>
                        </div>
                        <div v-if="e" style="text-align:left;transform:translate(5%, 27%)">
                            <span style="font-size: 22px;font-weight: 900;text-indent: 21px;opacity: 0.6;color:white">GOLD PACKAGE</span>
                        </div>
                            <p v-if="e" style="margin-bottom:0px;font-size: 95px;opacity: .2;color: white; border-bottom:1px solid white">35</p>
                            <p v-if="e" style="margin-bottom:0px;font-size: 43px;color: white;position:absolute;left:50%; transform: translate(-100%, 110%)">$35</p>
                           
                            
                            <p v-if="f" style="margin-bottom:0px;font-size: 85px;opacity: .2;color: white; border-bottom:1px solid white">200</p>
                            <p v-if="f" style="margin-bottom:0px;font-size: 43px;color: white;position:absolute;left:50%; transform: translate(-100%, 110%)"> 200 <span style="font-size:19px; position: absolute;transform: translateY(70%); ">هزارتومان</span></p>
                        <div v-if="f" style="margin-top:20px;color:white">
                            <p style="line-height:1.1"> 300 پیپ سود روزانه با معاملات کوتاه مدت</p>                            
                            <p style="line-height:1.1"> پنل ایمیل</p>
                            <p style="line-height:1.1"> کانال VIP تلگرتم</p>
                            <p style="line-height:1.1"> آموزش 0 تا 100</p>
                            <p style="line-height:1.1"> پشتیبانی 24 ساعته</p>
                            <p style="line-height:1.1"> 5 تا 7 سیگنال رایگان</p>
                            <p style="visibility:hidden"> asdasd</p>
                        </div>
                        <div v-if="e" style="margin-top:20px;color:white">
                            <p style="line-height:1.1" dir="ltr"> 300 pip daily benefit<br> with short-term bargain</p>                            
                            <p style="line-height:1.1">Email panel-</p>
                            <p style="line-height:1.1">Telegram VIP Channel-</p>
                            <p style="line-height:1.1" dir="ltr"> Training from 0 to 100</p>
                            <p style="line-height:1.1" dir="ltr"> 24/7 customer service ( support ) </p>
                            <p style="line-height:1.1" dir="ltr"> 5 to 7 daily signal</p>
                            <p style="visibility:hidden"> asdasd</p>
                        </div>
                            <div dir="center">
                                <button @click="OpenStore" v-if="f" class="botn-buy" style="color:white; margin:5px">خرید <span class="far fa-shopping-cart"></span></button>
                                <button @click="OpenStore" v-if="e" class="botn-buy" style="color:white; margin:5px">BUY <span class="far fa-shopping-cart"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="lang">
                <img style="cursor:pointer;width:57px;border-radius:6px" v-if="en" @click="changeEN" src="/img/english.jpg" class="img-fluid" v-ripple>
                <img style="cursor:pointer;width:57px;border-radius:6px" v-if="fa" @click="changeFA" src="/img/iran.jpg" class="img-fluid" v-ripple>
            </div>
        </div>
</template>
<script>
import Swal from 'sweetalert2';
export default {
    data(){
        return{
            e:false,
            f:false,
            fa:false,
            fn:false
        }
    },
    mounted(){
         if(localStorage.getItem('lang') == 'fa'){
            this.f =  true;
            this.e =  false;
            this.fa = false;
            this.en = true;
        }
                else {
            this.f =  false;
            this.e =  true;
            this.fa = true;
            this.en = false;
        }
    },
        methods: {
            OpenStore() {
                // $("#payment-access").fadeIn();
                // $("#pay-acc").hide();
                Swal.fire({
                        icon: 'info',
                        title: 'سیگنال ها تا یک ماه رایگان ارائه میشن:)',
                        showConfirmButton: 'باشه',
                        dir: 'rtl',
                    });
            },
        changeEN() {
            this.f =  false;
            this.e =  true;
            localStorage.setItem('lang', 'en');
            this.fa = true;
            this.en = false;
        },
            changeFA() {
            this.f =  true;
            this.e =  false;
            localStorage.setItem('lang', 'fa');
            this.fa = false;
            this.en = true;
        },
        }
}
</script>
<style >
.botn-buy::after{
    content: "";
    width: 70%;
    position: absolute;;
    height: 40px;
    border-radius: 27px;
    background-color: white;
    filter: blur();
    left: 15%;
    z-index: 1;
    opacity: .4;
    transform: translateY(-10px)translateX(0);
}
.botn-buy::after:active{
    content: "";
    width: 70%;
    position: absolute;;
    height: 40px;
    border-radius: 27px;
    background-color: white;
    filter: blur();
    z-index: 1;
    opacity: .4;
    transform: translateY(-10px)translateX(163px);
}
@media (max-width:767px){
    #silver-width {
        border:0;width:100%
    }
    #gold-width {
        border:0;background:linear-gradient(-45deg,#f55555,#fccf31 ); border-radius:5px;box-shadow: #4d4949f2 0px 0px 20px 3px;padding:10px;width:100%;
    }
    #diamond-width {
        text-align:center;z-index:110
    }
}
@media (min-width:768px){
    #silver-width {
        border:0;width:87%;
        position: relative;
        left:21%;
    }
    #gold-width {
        border:0;background:linear-gradient(-45deg,#f55555,#fccf31 ); border-radius:5px;box-shadow: #4d4949f2 0px 0px 20px 3px;padding:10px;position:relative;width:87%;right:6%
    }
    #diamond-width {
        text-align:center;z-index:110;
        margin-top: 37px
    }
}
</style>