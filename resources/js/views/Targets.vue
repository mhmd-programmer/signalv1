<template>
    <div>
        
        <router-link to="/" style="position:absolute;left:50%;top:0;transform:translateX(-50%);z-index:250"><img src="/img/sin2.png" class="img-fluid" style="width:290px;"></router-link>
       <div class="desktop">
            <div class="container">
            <div class="row" style="height:60px">
            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
              
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                    <h1 v-if="f" style="float:right; transform: translateX(11%) translateY(377%);color:white;opacity:0.81" >اهداف آینده</h1>
                    <h1 v-if="e" style="float:right; transform: translateX(11%) translateY(377%);color:white;opacity:0.81" >Future Goals</h1>
            </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-6 col-6" style="text-align:right;  transform:translateY(11%)">
                            <div> <img class="img-scroll" style="width:712px;"  src="/img/signal icon/signal bedammm-02.png"></div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6 col-6">
            <div v-if="f" class="apr" style="direction:rtl;text-align:right; position:absolute;top:40%;transform: translateX(20%) ">
                <h2 style="color:white;opacity:0.81">April</h2>
            <p style="color:gray">اضافه شدن +1000 پیپ سود روزانه با معاملات بلند مدت برای اشتراک الماس </p>
            <p style="color:gray">ربات تلگرامی برای راحت کردن کار ها </p>
            </div>
             <div v-if="e" class="apr" style="direction:ltr;text-align:left; position:absolute;top:40%;transform: translateX(15%) ">
                <h2 dir="ltr" style="color:white;opacity:0.81">April</h2>
            <p style="color:gray">Up to 1000+pip daily benefit with long-term bargain for Diamond Package </p>
            <p style="color:gray">Telegram robot for make it easier  </p>
            </div>
                </div>
            </div>
        </div> 
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-6" style="text-align:right;">
            <div v-if="f" style="direction:rtl;text-align:right; position:absolute;top:40%;transform: translateX(50%);">
                <h2 style="color:white;opacity:0.81">May</h2>
                <p style="color:gray">اضافه شدن سیگنال های باینری آپشن </p>
               
            </div>
            <div v-if="e" style="direction:rtl;text-align:left; position:absolute;top:40%;transform: translateX(50%);">
                <h2 style="color:white;opacity:0.81">May</h2>
                <p style="color:gray">Adding binary signal option  </p>
                
            </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 col-6" style="transform: translateY(-41%)translateX(-19%)">
                <div> <img class="img-scroll" style="width:912px;text-align:center;" src="/img/signal icon/signal bedammm-01.png"></div>
            </div>
        </div>  
        <div class="row">
        <div class="col-md-6 col-sm-6 col-lg-6 col-6" style="text-align:center;    transform: translateY(-65%);">
            <div> <img class="img-scroll" style="width:529px;" src="/img/signal icon/signal bedammm-03.png"></div>
        </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-6">
        <div v-if="f" style="direction:rtl;text-align:right;position: absolute; top:40%;transform: translateX(20%)">
        <h2 style="color:white;opacity:0.81">June</h2>
        <p style="color:gray">اضافه شدن سیگنال های از دیجیتال (15 الی25 سیگنال روزانه) </p>
        </div>
        <div v-if="e" style="direction:rtl;text-align:left;position: absolute; top:40%;transform: translateX(20%)">
        <h2 style="color:white;opacity:0.81">June</h2>
        <p style="color:gray">Adding digital signal (15 to 25 daily signal )  </p>
        </div>

            </div>
        </div>
        <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6 col-6" style="text-align:center">
        <div v-if="f" style="direction:rtl;text-align:right;position: absolute;top: 40%;transform: translateX(50%);">
        <h2 style="color:white;opacity:0.81">July</h2>
        <p style="color:gray">افزایش دو برابری قیمت اشتراک ها </p>
        <p style="color:gray">اپلیکیشن ios و اندروید </p>
        </div>
        <div v-if="e" style="direction:rtl;text-align:left;position: absolute;top: 40%;transform: translateX(50%);">
        <h2 style="color:white;opacity:0.81">July</h2>
        <p style="color:gray">Doubling the price of packages  </p>
        <p style="color:gray">Application for android and IOS </p>
        </div>    
            
        </div>    
        
        <div class="col-sm-6 col-md-6 col-lg-6 col-6" style="transform: translateY(-60%)">
            <div> <img class="img-scroll" style="width:620px;" src="/img/signal icon/signal bedammm-04.png"></div>
        </div>
        </div>
        <div> <img class="img-scroll" style="width:250px; position:absolute; opacity:0.6;top:80px; left:70px; " src="/img/signal icon/signal bedammm-05.png"></div>
        <div> <img class="img-scroll" style="width:250px; position:absolute; opacity:0.6;top:1500px; left:700px; " src="/img/signal icon/signal bedammm-06.png"></div>
        
        <div> <img class="img-scroll" style="width:200px; position:absolute; opacity:0.6;top:870px; left:270px; " src="/img/signal icon/signal bedammm-08.png"></div>
        <div> <img class="img-scroll" style="width:300px; position:absolute; opacity:0.6;top:1250px; left:200px; " src="/img/signal icon/signal bedammm-09.png"></div>
        <div> <img class="img-scroll" style="width:300px; position:absolute; opacity:0.6;top:2150px; left:100px; " src="/img/signal icon/signal bedammm-10.png"></div>
         <div class="lang">
            <img style="cursor:pointer;width:57px;border-radius:6px" v-if="en" @click="changeEN" src="/img/english.jpg" class="img-fluid" v-ripple>
            <img style="cursor:pointer;width:57px;border-radius:6px" v-if="fa" @click="changeFA" src="/img/iran.jpg" class="img-fluid" v-ripple>
        </div>
        
       </div>
        <div class="mobile" style="margin-top:137px">
            <div class="container">
            <div class="row">
            <div class="col-12 col-sm-6 col-lg-12 col-md-12">
                    <h1 v-if="f" style="text-align:center;color:white;opacity:0.81">اهداف آینده</h1>
                    <h1 v-if="e" style="text-align:center;color:white;opacity:0.81">Future Goals</h1>
            </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6" style="text-align:center">
                            <div> <img class="img-scroll-mob" style="width:100%;transform:translateY(-10%)" src="/img/signal icon/signal bedammm-02.png"></div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                <div v-if="f" class="apr" style="direction:rtl;text-align:center;">
                <h2 style="color:white;opacity:0.81">April</h2>
            <p style="color:gray">اضافه شدن +1000 پیپ سود روزانه با معاملات بلند مدت برای اشتراک الماس </p>
            <p style="color:gray">ربات تلگرامی برای راحت کردن کار ها </p>
            </div>
                <div v-if="e" class="apr" style="direction:rtl;text-align:center;">
                <h2 style="color:white;opacity:0.81">April</h2>
            <p style="color:gray">Up to 1000+pip daily benefit with long-term bargain for Diamond Package</p>
            <p style="color:gray">Telegram robot for make it easier </p>
            </div>
            
                </div>
            </div>
        </div> 
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-6" style="text-align:center;  transform:translateY(-20%)">
                <div> <img class="img-scroll-mob" style="width:100%;text-align:center; " src="/img/signal icon/signal bedammm-01.png"></div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6" style="text-align:right;">
                <div v-if="f" style="direction:rtl;text-align:center;">
                <h2 style="color:white;opacity:0.81">May</h2>
                <p style="color:gray">اضافه شدن سیگنال های باینری آپشن </p>
            </div>
             <div v-if="e" style="direction:rtl;text-align:center;">
                <h2 style="color:white;opacity:0.81">May</h2>
                <p style="color:gray">Adding binary signal option  </p>
            </div>
            </div>
            
        </div>  
        <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-6" style="text-align:center; transform:translateY(-27%)">
            <div> <img class="img-scroll-mob" style="width:100%" src="/img/signal icon/signal bedammm-03.png"></div>
        </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
        <div v-if="f" style="direction:rtl;text-align:center;">
        <h2 style="color:white;opacity:0.81">June</h2>
        <p style="color:gray">اضافه شدن سیگنال های از دیجیتال (15 الی25 سیگنال روزانه) </p>
        </div>
        <div v-if="e" style="direction:rtl;text-align:center;">
        <h2 style="color:white;opacity:0.81">June</h2>
        <p style="color:gray">Adding digital signal (15 to 25 daily signal ) </p>
        </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-6" style="text-align:center;  transform:translateY(-37%)">
            <div> <img class="img-scroll-mob" style="width:100%;" src="/img/signal icon/signal bedammm-04.png"></div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6" style="text-align:center">
        <div v-if="f" style="direction:rtl;text-align:center;">
        <h2 style="color:white;opacity:0.81">July</h2>
        <p style="color:gray">افزایش دو برابری قیمت اشتراک ها </p>
        <p style="color:gray">اپلیکیشن ios و اندروید </p>
        </div>    
        <div v-if="e" style="direction:rtl;text-align:center;">
        <h2 style="color:white;opacity:0.81">July</h2>
        <p style="color:gray">Doubling the price of packages  </p>
        <p style="color:gray">Application for android and IOS </p>
        
        </div>
        </div>    
        
        
        </div>
        <!-- <div> <img class="img-scroll" style="display:none;width:120px " src="/img/signal icon/signal bedammm-05.png"></div>
        <div> <img class="img-scroll" style="display:none;width:120px; " src="/img/signal icon/signal bedammm-06.png"></div>
        <div> <img class="img-scroll" style="display:none;width:120px " src="/img/signal icon/signal bedammm-07.png"></div>
        <div> <img class="img-scroll" style="display:none;width:120px " src="/img/signal icon/signal bedammm-08.png"></div>
        <div> <img class="img-scroll" style="display:none;width:120px; " src="/img/signal icon/signal bedammm-09.png"></div>
        <div> <img class="img-scroll" style="display:none;width:120px; " src="/img/signal icon/signal bedammm-10.png"></div> -->
        <!-- <div> <img class="img-scroll" style="width:200px; position:absolute; opacity:0.6;top:1750px; left:200px; " src="/img/signal icon/signal bedammm-11.png"></div> -->
        </div>
          <div class="lang">
            <img style="cursor:pointer;width:57px;border-radius:6px" v-if="en" @click="changeEN" src="/img/english.jpg" class="img-fluid" v-ripple>
            <img style="cursor:pointer;width:57px;border-radius:6px" v-if="fa" @click="changeFA" src="/img/iran.jpg" class="img-fluid" v-ripple>
        </div>
        
    </div>

</template>
<script>
export default {
    name:"Targets",
    
    data() {
        return {
            f: true,
            e: false,
            en: false,
            fa: false,
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
        $(window).scroll(function(){
            
            if($(window).scrollTop() > 0){
                $(".img-scroll").css('transform', "translateY(0)").css('transition', '1s');
                $(".img-scroll-mob").css('transform', "translateY(0%)").css('transition', '1s');
            }
            if($(window).scrollTop() > 20){
                $(".img-scroll-mob").css('transform', "translateY(2%)").css('transition', '1s');
                $(".img-scroll").css('transform', "translateY(2%)").css('transition', '1s');
            }
            if($(window).scrollTop() >120){
                $(".img-scroll-mob").css('transform', "translateY(5%)").css('transition', '1s');
                $(".img-scroll").css('transform', "translateY(4%)").css('transition', '1s');
            }
            if($(window).scrollTop() > 220){
                $(".img-scroll-mob").css('transform', "translateY(8%)").css('transition', '1s');
                $(".img-scroll").css('transform', "translateY(6%)").css('transition', '1s');
            }
            if($(window).scrollTop() > 320){
                $(".img-scroll-mob").css('transform', "translateY(11%)").css('transition', '1s')
                $(".img-scroll").css('transform', "translateY(8%)").css('transition', '1s');;
            }
            if($(window).scrollTop() > 420){
                $(".img-scroll-mob").css('transform', "translateY(14%)").css('transition', '1s');
                $(".img-scroll").css('transform', "translateY(12%)").css('transition', '1s');
            }
            if($(window).scrollTop() > 520){
                $(".img-scroll-mob").css('transform', "translateY(17%)").css('transition', '1s');
                $(".img-scroll").css('transform', "translateY(15%)").css('transition', '1s');
            }
            if($(window).scrollTop() > 620){
                $(".img-scroll-mob").css('transform', "translateY(20%)").css('transition', '1s');
                $(".img-scroll").css('transform', "translateY(18%)").css('transition', '1s');
            }
            if($(window).scrollTop() > 720){
                $(".img-scroll-mob").css('transform', "translateY(23%)").css('transition', '1s');
                $(".img-scroll").css('transform', "translateY(20%)").css('transition', '1s');
            }
            if($(window).scrollTop() > 820){
                $(".img-scroll-mob").css('transform', "translateY(26%)").css('transition', '1s');
                $(".img-scroll").css('transform', "translateY(23%)").css('transition', '1s');
            }
            if($(window).scrollTop() > 920){
                $(".img-scroll-mob").css('transform', "translateY(29%)").css('transition', '1s');
                $(".img-scroll").css('transform', "translateY(26%)").css('transition', '1s');
            }
            if($(window).scrollTop() > 1020){
                $(".img-scroll-mob").css('transform', "translateY(32%)").css('transition', '1s');
                $(".img-scroll").css('transform', "translateY(30%)").css('transition', '1s');
            }
            if($(window).scrollTop() > 1120){
                $(".img-scroll-mob").css('transform', "translateY(35%)").css('transition', '1s');
                $(".img-scroll").css('transform', "translateY(32%)").css('transition', '1s');
            }
            if($(window).scrollTop() > 1220){
                $(".img-scroll-mob").css('transform', "translateY(38%)").css('transition', '1s');
                $(".img-scroll").css('transform', "translateY(35%)").css('transition', '1s');
            }
            if($(window).scrollTop() > 1320){
                $(".img-scroll-mob").css('transform', "translateY(41%)").css('transition', '1s');
                $(".img-scroll").css('transform', "translateY(48%)").css('transition', '1s');
            }
            if($(window).scrollTop() > 1420){
                $(".img-scroll-mob").css('transform', "translateY(44%)").css('transition', '1s');
                $(".img-scroll").css('transform', "translateY(41%)").css('transition', '1s');
            }
            if($(window).scrollTop() > 1520){
                $(".img-scroll-mob").css('transform', "translateY(47%)").css('transition', '1s');
                $(".img-scroll").css('transform', "translateY(44%)").css('transition', '1s');
            }
            if($(window).scrollTop() > 1620){
                $(".img-scroll-mob").css('transform', "translateY(50%)").css('transition', '1s');
                $(".img-scroll").css('transform', "translateY(47%)").css('transition', '1s');
            }
        })
        
    },
    methods: {
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
        }
    }
}

</script>
<style scoped>
      /* h1{
          color: #6157be;
  text-shadow:
    0 0 5px #6157be,
    0 0 10px #6157be,
    0 0 20px #6157be,
    0 0 40px #4594b9,
    0 0 80px #4594b9,
    0 0 90px #4594b9,
    0 0 100px #4594b9,
    0 0 150px #4594b9;
} */
</style>
