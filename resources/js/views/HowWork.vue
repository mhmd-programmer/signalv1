<template>
    <div>
        
        <div style="position:absolute;left:50%;top:0;transform:translateX(-50%)">
            <router-link to="/"><img src="/img/sin2.png" class="img-fluid" style="width:200px"></router-link>
            
        </div>
        <div v-ripple class="forms bstni">
                <p v-if="f" style="color:black;opacity:0.8">ثبت نام</p>
                <p v-if="e" style="color:black;opacity:0.8">Reqister</p>
                <form @submit.prevent="Register">
                    <div class="form-group">
                        <v-text-field :label="c" name="name" v-model="name"></v-text-field>
                    </div>
                    <div class="form-group">
                        <v-text-field :label="d" type="email" name="email" v-model="email"></v-text-field>
                    </div>
                    <div class="form-group">
                        <v-text-field :label="h" type="password" name="password" v-model="password"></v-text-field>
                    </div>
                    <div class="form-group">
                        <v-text-field :label="g" type="password" name="confirmation_password" v-model="passwords"></v-text-field>
                    </div>
                    <div class="form-group">
                        <button v-if="f" style="color:white" class="btn btn-insta" v-ripple>ثبت نام</button>
                        <button v-if="e" style="color:white" class="btn btn-insta" v-ripple>Reqister</button>
                        
                    </div>
                </form>
            </div>
            <div @click="Close" id="back" style="background:rgba(0, 0, 0, 0.34);position:fixed;left:0;top:0;right:0;bottom:0;width:100%;height:100%;z-index:9"></div>
        <div class="background">
            <span></span>
            <span></span>
            <span></span>
            <span></span>

            <p v-if="f" style="text-align:right" class="p-head">چرا اینجاییم!؟</p>
            <p v-if="e" class="p-heads" dir="ltr">Why Are We Here ?! </p>
            <p v-if="f" style="text-align:right;margin-top:90px ;width:95%" dir="rtl">
                من قبلا در جایگاه شما بودم و حس شما را درک میکنم
            </p>
            <p dir="ltr" v-if="e" style="margin-top:60px ;width:95%">
                    While  the  whole world is worrying about their
                    <br>
                    9 to 5 job 
                    <br>
                    smart group of people are starting  their online business 
                    <br>
                    obviously there are so many ways to earn money online for example : drop shipping , affiliate marketing , YouTube channel etc
            </p>
            <p dir="ltr" v-if="e" style="width:95%">
                Society might made you think there is a lot of confusion and you may think it takes years of training and hardwork 
            </p>
            <p dir="ltr" v-if="e" style="width:95%">
                That’s right!
            </p>
            <p dir="ltr" v-if="e" style="width:95%">
                but if you decided to be a forex  trader
            </p>
            <p dir="ltr" v-if="e" style="width:95%">
                me and my expert team are here to make it easy for you with the right information and marketing techniques , our special
                training method will cover every single tricks and secrets behind forex market so
                that you can trade like a pro and make a living out of it on your laptop or your phone To be your own boss and never work for anyone again
            </p>
            <p dir="ltr" v-if="e" style="width:95%">
                Why we are doing this?
                <br> 
                Because I’ve been in your place and I know how that feels also there is a rule that says :
            </p>
            <p dir="ltr" v-if="e" style="width:95%">
                If you want to make a million you have to help a million
                <br>
                The more value you add to others the more money you make 
            </p>
            <p dir="ltr" v-if="e" style="width:95%">
                I am Seyed Mehdi hosseini  expert Entrepreneur and CEO of GAMA Company  with years of experience in financial market.
                <br>
                Me and my team are here to make the forex and digital currencies bargain more easier and we give you trusted signals.
            </p>
            <p dir="ltr" v-if="e" style="width:95%">
                Our company main goal is to give our members more information about financial market and The result that we are supposed to get every day in this market : 
                <br>
                -Save the first investment 
                <br>
                -Receiving profit step by step ( each step )
            </p>
            <p dir="ltr" v-if="e" style="width:95%">
                <span style="color:red">((We are intended to profit the traders in forex marketing and short-term trades between pip400-pip500,daily free for 30days.
And also we will give you 20-25 trusted Binary option for free,for 1 month))</span>
            </p>
            <p dir="ltr" v-if="e" style="width:95%">
                But you should consider the fact that forex market has ups and downs but the thing that  separates our members  from normal traders is our team helps to improve your risk 
                <br>
                management skill
                <br>
                To take the most out of this crisis while you staying at home .
            </p>
            <p dir="ltr" v-if="e" style="width:95%">
                We confidently provide 100% money back guarantee if you was not happy with your membership .
            </p>
            <p dir="ltr" v-if="e" style="width:95%">
                The biggest risk is not taking anyrisks 
            </p>
            <p v-if="f" style="text-align:right;margin-top:0; width:95%" dir="rtl">
                قانونی هست که میگوید : اگر شما میخواهید یک میلیون به دست اورید باید به یک میلیون نفر کمک کنید, هر چه ارزش بیشتری به دیگران بدهید پول بیشتری به دست می اورید.
                <br>
                من سید مهدی حسینی , متخصص و سازنده و CEO کمپانی گاما هستم که سابقه سال ها تجربه در بازار های مالی دارد . من و تیم من اینجا هستیم تا فارکس و مبادلات دیجیتال را برای شما اسان تر کرده و سیگنال های مورد اعتماد به شما بدهیم.
هدف اصلی ما این است که به اعضای خود درباره بازارهای مالی اطلاعات بیشتری بدهیم. 
            </p>
            <p v-if="f" style="text-align:right;margin-top:-4px; width:95%" dir="rtl">
                نتایجی که ما برای بودنمون توی این بازار مد نظر داریم :
                <br>
                  ١ - حفظ سرمایه اولیه 
                <br>١ - حفظ سرمایه اولیه 
            </p>
         
            <p v-if="f" style="text-align:right;width:95%;" dir="rtl">
                <span style="color:red">(( ما قصد داریم به مدت ٣۰ روز , روزانه به صورت رایگان بین (Pip400) تا (pip500) توی بازار های فارکس و با معاملات کوتاه مدت به کاربران سود دهیم همچنین به مدت یک ماه روزانه ٢۰ تا ٢٥ عدد سیگنال مورد اطمینان باینری اپشن باز هم به صورت کاملا رایگان در اختیار شما عزیزان قرار دهیم ))</span>
 شما باید در نظر بگیرید که بازار فارکس , بالا و پایین دارد اما انچه که اعضای ما را از تاجران عادی متمایز میکند , تیم ماست که توانایی کنترل ریسک شما را بالا میبرند تا بیشترین سود را از بحران , هنگامی که در خانه هستید به دست بیارید
ما با اطمینان کامل , بازگشت ١۰۰% پولتان را در صورت عدم رضایت از عضویتتان , تضمین میکنیم. <br>
بزرگ ترین ریسک این است که هیچ ریسکی نکنیم.
            </p>
          <p v-if="f" style="text-align:right;width:95%;">در حالی که تمام دنیا نگران شغل ثابت خود هستند, گروهی باهوش , تجارت انلاین خود را راه اندازی میکنند . <br>حقیقتا راه های زیادی برای کسب  پول به شکل انلاین وجود دارد مثلا راه اندازی ترابری , پیوستن به بازاریابی , کانال یوتیوب و ...
ممکن است جامعه باعث شده باشد که شما فکر کنید تجارت انلاین بسیار دشوار است و نیاز به سال ها تمرین و سخت کوشی دارد.
این درسته ! </p> 
<p v-if="f" style="text-align:right;width:95%;">
	
اما اگر شما تصمیم گرفتید که یک تاجر فارکس باشید
من و تیم متخصصم اینجا هستیم تا با اطلاعات درست و تکنیک های بازاری, این موضوع را برای شما ساده کنیم . <br>
روش تمرینی مخصوص ما , هر رمز و رازی را که پشت فارکس وجود دارد ,  برای شما پوشش میدهد تا شما بتوانید مثل یک تاجر حرفه ای در فارکس معامله کنید و از طریق لپ تاپ یا موبایل خود , یک زندگی رویایی برای خود بسازید تا همواره رییس خود بوده و برای کس دیگر کار نکنید.
</p>
            <div id="checkit">
                <button @click="Open" v-if="f" style="text-align:right;background:blue;color:white;border:1px solid;float:right;margin:14px 62px 0 0" class="btn" v-ripple>همین الان ثبت نام کن</button>
                <button @click="Open" v-if="e" class="btn btn-block" style="background:blue;color:white;border:1px solid" v-ripple>Now Register</button>
            </div> <br><br><br>
            <br>    
        </div>
        <div class="lang">
            <img style="cursor:pointer;width:57px;border-radius:6px" v-if="en" @click="changeEN" src="/img/english.jpg" class="img-fluid" v-ripple>
            <img style="cursor:pointer;width:57px;border-radius:6px" v-if="fa" @click="changeFA" src="/img/iran.jpg" class="img-fluid" v-ripple>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
import Swal from 'sweetalert2';
export default {
        data() {
            return {
                e: false,
                f: false,
                en: false,
                fa: false,
                a: 'ایمیل',
                b: 'کلمه عبور',
                c: 'نام',
                d: 'ایمیل',
                h: 'کلمه عبور',
                g: 'تکرار کلمه عبور',
                name: '',
                email: '',
                password: '',
                passwords: '',
                username: '',
                pass: '',
            }
        },
        mounted() {
            $("#checkit").show();
            $(".forms").css('display', 'none');
            $("#back").hide();

            if(localStorage.getItem('lang') == 'en'){
                this.en = false;
                this.fa = true;
                this.f = false;
                this.e = true;
                this.a = 'Email';
                this.b = 'Password';
                this.c = 'Name';
                this.d = 'Email';
                this.h = 'Password';
                this.g = 'Confirm Password';
                localStorage.setItem('lang', 'en');
            }
            else {
                this.en = true;
                this.fa = false;
                this.f = true;
                this.e = false;
                this.a = 'ایمیل';
                this.b = 'کلمه عبور';
                this.c = 'نام';
                this.d = 'ایمیل';
                this.h = 'کلمه عبور';
                this.g = 'تکرار کلمه عبور';
                localStorage.setItem('lang', 'fa');
            }
        },
        methods: {
            Check() {
            axios.get('/fetch/user/data').then(response => {
                if(response.data.role == 1){
                    $("#checkit").hide();
                }
                else if(response.data.role == 20){
                    $("#checkit").hide();
                }
                else if(localStorage.getItem('auth') == null) {
                    $("#checkit").show();
                }
                else {
                    $("#checkit").show();
                }
            }).catch(error => {
                $("#checkit").show();
            });
        },
            changeEN() {
                this.en = false;
                this.fa = true;
                this.f = false;
                this.e = true;
                this.a = 'Email';
                this.b = 'Password';
                this.c = 'Name';
                this.d = 'Email';
                this.h = 'Password';
                this.g = 'Confirm Password';
                localStorage.setItem('lang', 'en');
            },
            changeFA() {
                this.en = true;
                this.fa = false;
                this.f = true;
                this.e = false;
                this.a = 'ایمیل';
                this.b = 'کلمه عبور';
                this.c = 'نام';
                this.d = 'ایمیل';
                this.h = 'کلمه عبور';
                this.g = 'تکرار کلمه عبور';
                localStorage.setItem('lang', 'fa');
            },
            Register() {
                let formData = new FormData();
                formData.append('name', this.name);
                formData.append('email', this.email);
                formData.append('password', this.password);
                formData.append('password_confirmation', this.passwords);
                axios.post('/register', formData).then(response => {
                    if(localStorage.getItem('lang') == 'en'){
                        Swal.fire({
                        icon: 'success',
                        title: 'Register Successfuly! Plz Confirm Email.',
                    });
                    }
                    else {
                        Swal.fire({
                        icon: 'success',
                        title: '.ثبت نام شما با موفقیت انجام شد لطفا ایمیل خود را تایید کنید',
                        dir: 'rtl',
                    });
                    } setTimeout(() => {
                        this.$router.push('/login');
                    }, 2000);
                }).catch(error => {
                    if(localStorage.getItem('lang') == 'en'){
                        Swal.fire({
                        icon: 'error',
                        title: 'Not Registred Yet, Plz Check Form Data.',
                    });
                    }
                    else {
                        Swal.fire({
                        icon: 'error',
                        title: '.اطلاعات وارد شده رابررسی کنید، ممکنه ایمیل تکراری باشه یا کلمه عبور تطابق نداشته باشه',
                        dir: 'rtl',
                    });
                    }
                    
                    
                });
            },
            
        Open() {
            $(".forms").fadeIn();
            $("#back").fadeIn();
        },
        Close() {
            $(".forms").fadeOut();
            $("#back").fadeOut();
        },
        },
}
</script>
<style scoped>
@media(max-width:767px){
    .background{
    color: #ffffff88;
    font-weight: 600;
    width: 100%;
    letter-spacing: 1px;
    height: 100%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50% , -50%);
    margin-top:200px;
    padding: 20px;
    
}
.p-head{
    float: right;
    color: #ffffff88;
    font-size: 25px;
    text-indent: -5px;
    font-weight: 800;
    margin-right: 15px;
}
.p-heads{
    float: left;
    color: #ffffff88;
    font-size: 25px;
    text-indent: -5px;
    font-weight: 800;
    margin-left: 15px;
}
}
@media(min-width:768px){
    .background{
    color: #3e3b3b;
    font-weight: 600;
    width: 60%;
    letter-spacing: 1px;
    height: 520px;
    position: absolute;
    top: 50%;
    left: 50%;
    background-color: #eeeeee88;
    transform: translate(-50% , -50%);
    box-shadow: 0 20px 50px rgba(0, 0, 0, .5);
    overflow-y: scroll;
    margin-top:112px;
    padding: 20px;
    border-radius: 6px;
}
.background::-webkit-scrollbar{
    width:8px;
    margin-right: 7px;
}
.background::-webkit-scrollbar-thumb{
    background:linear-gradient( transparent,#181d7b);
    border-radius:6px;
}
.p-head{
    float: right;
    color: #3e3b3b;
    font-size: 25px;
    text-indent: -5px;
    font-weight: 800;
    margin-right: 15px;
}
.p-heads{
    float: left;
    color: #3e3b3b;
    font-size: 25px;
    text-indent: -5px;
    font-weight: 800;
    margin-left: 15px;
}}
/* .background span:nth-child(3){
    position: absolute;
    bottom: 0;
    right: 0;
    width: 90%;
    height: 4px;
    background: linear-gradient(to left,#0c002b,#1779ff);
    animation: animate3 4s linear infinite;
    animation-delay: 2s;
}
.background span:nth-child(1){
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(to right,#0c002b,#1779ff);
    animation: animate1 4s linear infinite;
    animation-delay: 2s;
}
@keyframes animate1
{
    0%{
        transform: translateX(-100%);
    }
    100%{
        transform: translateX(100%);
    }
}

.background span:nth-child(2){
    position: absolute;
    top: 0;
    right: 0;
    width: 4px;
    height: 100%;
    background: linear-gradient(to bottom,#0c002b,#1779ff);
    animation: animate2 4s linear infinite;
}

@keyframes animate2
{
    0%{
        transform: translateY(-100%);
    }
    100%{
        transform: translateY(100%);
    }
}


@keyframes animate3
{
    0%{
        transform: translateX(100%);
    }
    100%{
        transform: translateX(-100%);
    }
}
.background span:nth-child(4){
    position: absolute;
    top: 0;
    left:  0;
    width: 4px;
    height: 100%;
    background: linear-gradient(to top,#0c002b,#1779ff);
    animation: animate4 4s linear infinite;
    
}
@keyframes animate4
{
    0%{
        transform: translateY(100%);
    }
    100%{
        transform: translateY(-100%);
    }
}
}
 */



</style>