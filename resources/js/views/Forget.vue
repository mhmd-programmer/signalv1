<template>
    <div>
        <div class="back">
            <!-- <video id="a" class="back-video" autoplay>
                <source src="/video/1.mp4" type="video/mp4">
            </video>
            <video id="b" class="back-video" autoplay loop>
                <source src="/video/2.mp4" type="video/mp4">
            </video>
            <video id="c" class="back-video" autoplay="false">
                <source src="/video/3.mp4" type="video/mp4">
            </video> -->
            <div v-ripple class="form">
                <p v-if="f" style="color:white;opacity:0.8">بازگرداندن کلمه عبور</p>
                <p v-if="e" style="color:white;opacity:0.8">Forget Password</p>
                <form @submit.prevent="Forget">
                    <div class="form-group">
                        <v-text-field :label="a" type="email" name="email" v-model="email"></v-text-field>
                    </div>
                    <div class="form-group">
                        <button v-if="f" style="color:white" class="btn btn-insta-for-fa" v-ripple>بازیابی کلمه عبور</button>
                        <button v-if="e" style="color:white" class="btn btn-insta-for-en" v-ripple>Send Email Recovery</button>
                    </div>  
                </form>
            </div>
            
            <div class="lang">
                <img style="cursor:pointer;width:57px;border-radius:6px" v-if="en" @click="changeEN" src="/img/english.jpg" class="img-fluid">
                <img style="cursor:pointer;width:57px;border-radius:6px" v-if="fa" @click="changeFA" src="/img/iran.jpg" class="img-fluid">
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
import Swal from 'sweetalert2';
    export default {
        data() {
            return {
                en: true,
                fa: false,
                f: true,
                e: false,
                a: 'ایمیل',
                email: '',
            }
        },
        mounted() {
            if(localStorage.getItem('lang') == 'fa'){
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
            else {
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
        },
        methods: {
            changeEN() {
                this.en = false;
                this.fa = true;
                this.f = false;
                this.e = true;
                this.a = 'Email';
                localStorage.setItem('lang', 'en');
            },
            changeFA() {
                this.en = true;
                this.fa = false;
                this.f = true;
                this.e = false;
                this.a = 'ایمیل';
                localStorage.setItem('lang', 'fa');
            },
            
            Forget() {
            let formData = new FormData();
            formData.append('email', this.email);
            axios.post('/password/email', formData).then(response => {
                    if(localStorage.getItem('lang') == 'en'){
                        Swal.fire({
                        icon: 'success',
                        title: 'Login Successful.',
                        timer: 2000,
                        timerProgressBar: true,
                        showConfirmButton: false,
                    });
                    }
                    else {
                        Swal.fire({
                        icon: 'success',
                        title: '.شما با موفقیت وارد شدید',
                        dir: 'rtl',
                        timer: 2000,
                        timerProgressBar: true,
                        showConfirmButton: false,
                    });
                    } setTimeout(() => {
                        window.location = '/';
                    }, 5000);
            }).catch(error => {
                if(localStorage.getItem('lang') == 'en'){
                    Swal.fire({
                        icon: 'success',
                        title: 'Check Email',
                        timer: 2000,
                        timerProgressBar: true,
                        showConfirmButton: false,
                    });
                }
                else {
                    Swal.fire({
                        icon: 'success',
                        title: '.لطفا ایمیلتونو چک کنید',
                        dir: 'rtl',
                        timer: 2000,
                        timerProgressBar: true,
                        showConfirmButton: false,
                });
                }
                });
        },
        },
    }
</script>