<template>
    <div>

        <div style="position:absolute;left:50%;top:0;transform:translateX(-50%)" class="desktop">
            <router-link to="/"><img src="/img/sin2.png" class="img-fluid" style="width:200px"></router-link>
            <p v-if="f" style="color:grey;display:table;padding-bottom:5px;transform:translateX(124%)">پشتیبانی</p>
            <p v-if="e" style="color:grey;display:table;padding-bottom:5px;transform:translateX(124%)">Support</p><br>
        </div>
        <div class="background">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <div>
                <div class="online"></div>
                <p style="float:left;font-size:14px;color:#18c518c7;padding-left:7px;">ONLINE</p>
            </div>
            <a href="https://t.me/SignalBedam" target="_blank" v-ripple><span class="fab fa-telegram" style="color:#eeeeee;background:#24a1bc;border-radius:50%;font-size:27px;cursor:pointer;float:left;margin-left:13px;transform:translateY(-9%)"></span></a>

            <center>

                <br>
                <form @submit.prevent="Submit">
                    <div class="form-group">
                        <v-textarea style="width:100%" :label="a" name="body" v-model="body"></v-textarea>
                    </div>
                    <button v-if="f" class="btn" style="background: none;color:#1779ff;border:1px solid #1779ff" v-ripple>ارسال</button>
                    <button v-if="e" class="btn" style="background: none;color:#1779ff;border:1px solid #1779ff" v-ripple>Send</button>
                </form><br>
                <router-link to="/all/support" id="change-register" class="link decor">پیام های پاسخ داده شده</router-link>
            </center>
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
                f: false,
                e: false,
                a: '',
                body: '',
                en: false,
                fa: false,
            }
        },
        mounted() {
            if(localStorage.getItem('lang') == 'fa'){
                this.a = 'متن پیام';
                this.e =  false;
                this.f =  true;
                this.fa = false;
                this.en = true;
            }
            else {
                this.a = 'Text Message';
                this.f =  false;
                this.e =  true;
                this.fa = true;
                this.en = false;
            }
        },
        methods: {
            changeEN() {
                this.a = 'Text Message';
                this.f =  false;
                this.e =  true;
                localStorage.setItem('lang', 'en');
                this.fa = true;
                this.en = false;
            },
            changeFA() {
                this.a = 'متن پیام';
                this.f =  true;
                this.e =  false;
                localStorage.setItem('lang', 'fa');
                this.fa = false;
                this.en = true;
            },
            Submit() {
                let formData = new FormData();
                formData.append('body', this.body);
                axios.post('/save/support', formData).then(response => {
                    if(this.fa == false){
                        Swal.fire({
                            icon: 'success',
                            title: 'پیام شما ارسال شد',
                            showConfirmButton: 'باشه',
                            dir: 'rtl',
                        });
                    }
                    this.body = '';
                    if(this.fa == true){
                        Swal.fire({
                            icon: 'success',
                            title: 'Send Success',
                            showConfirmButton: 'Okay',
                        });
                    }
                });
            },
        },
    }
</script>
<style scoped>
    @media(max-width:767px){
        .background{
            color: #3e3b3b;
            font-weight: 600;
            width: 100%;
            letter-spacing: 1px;
            height: 100%;
            position: absolute;
            top: 50%;
            left: 50%;
            background-color: #eeeeee;
            transform: translate(-50% , -50%);
            /* box-shadow: 0 20px 50px rgba(0, 0, 0, .5); */
            text-align: right;
            padding: 20px;
            direction: rtl;
        }
    }
    @media(min-width:768px){
        .background{
            color: #3e3b3b;
            font-weight: 600;
            width: 60%;
            letter-spacing: 1px;
            height: 420px;
            position: absolute;
            top: 60%;
            left: 50%;
            background-color: #eeeeee88;
            transform: translate(-50% , -50%);
            box-shadow: 0 20px 50px rgba(0, 0, 0, .5);
            overflow: hidden;
            text-align: right;
            padding: 20px;
            direction: rtl;

        }
        .background span:nth-child(3){
            position: absolute;
            bottom: 0;
            right: 0;
            width: 90%;
            height: 4px;
            background: linear-gradient(to left,#672c9d,#1779ff);
            animation: animate3 4s linear infinite;
            animation-delay: 2s;
        }
        .background span:nth-child(1){
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(to right,#672c9d,#1779ff);
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
            background: linear-gradient(to bottom,#672c9d,#1779ff);
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
            background: linear-gradient(to top,#672c9d,#1779ff);
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
    .p-head{
        float: right;
        color: #3e3b3b;
        font-size: 25px;
        text-indent: -5px;
        font-weight: 800;
        margin-right: 15px;
    }

    .online {
        width:10px;height:10px;border-radius:50%;background:#18c518c7;float:left;transform: translateY(37%);
        animation: fade 1.5s infinite;
    }
    @keyframes fade {
        0% {
            opacity: 1;
        }
        50% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }

</style>
