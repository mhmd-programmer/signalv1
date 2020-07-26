<template>
    <div>
        <center>
            <img src="/img/sin2.png" alt="img-fluid" style="width:200px">
        </center>
        <div class="panel">
            <center>
                <p v-if="f" style="color:grey;border-bottom: 1px dashed;display:table;padding-bottom:5px;position:absolute;left:50%;transform:translateX(-50%)">پاسخ</p>
                <p v-if="e" style="color:grey;border-bottom: 1px dashed;display:table;padding-bottom:5px;position:absolute;left:50%;transform:translateX(-50%)">Answer</p>
            </center><br><br>
            <form @submit.prevent="Submit">
                <div class="form-group">
                    <v-textarea :label="a" name="text" v-model="text"></v-textarea>
                </div>
                <div class="form-group">
                    <button v-if="f" style="background:rgba(255, 255, 255, 0.1);color:green;border:1px solid green" class="btn" v-ripple>ارسال</button>
                    <button v-if="e" style="background:rgba(255, 255, 255, 0.1);color:green;border:1px solid green" class="btn" v-ripple>Send</button>
                </div><br>
                <center>
                    <router-link v-if="f" class="deskor link" to="/supports">بازگشت</router-link>
                    <router-link v-if="e" class="deskor link" to="/supports">Back</router-link>
                </center>

            </form>
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
            text: '',
            f: false,
            e: false,
            en: false,
            fa: false,
            a: '',
        }
    },
    mounted() {
        if(localStorage.getItem('lang') == 'fa'){
            this.e =  false;
            this.f =  true;
            this.fa = false;
            this.en = true;
            this.a = 'متن پاسخ';
        }
        else {
            this.f =  false;
            this.e =  true;
            this.fa = true;
            this.en = false;
            this.a = 'Text Answer';
        }
    },
    methods: {
        changeEN() {
            this.f =  false;
            this.e =  true;
            localStorage.setItem('lang', 'en');
            this.fa = true;
            this.en = false;
            this.a = 'Text Answer';
        },
        changeFA() {
            this.f =  true;
            this.e =  false;
            localStorage.setItem('lang', 'fa');
            this.fa = false;
            this.en = true;
            this.a = 'متن پاسخ';
        },
        Submit() {
            let formData = new FormData();
            formData.append('text', this.text);
            formData.append('id', this.$route.params.id);
            axios.post('/send/answer', formData).then(response => {
                if(this.fa == false){
                        Swal.fire({
                        icon: 'success',
                        title: 'جواب با موفقیت ارسال شد',
                        showConfirmButton: 'باشه',
                        dir: 'rtl',
                    });
                    }
                    this.text = '';
                    if(this.fa == true){
                        Swal.fire({
                        icon: 'success',
                        title: 'Send Success',
                        showConfirmButton: 'Okay',
                    });
                    }
                    this.text = '';
            });
        },
    },
}
</script>
<style scoped>
    @media (max-width:767px){
    .panel {
        background: rgba(255, 255, 255, 0.7);
        border-radius: 25px;
        position: absolute;
        left: 50%;
        top: 65%;
        transform: translate(-50%, -50%);
        width: 100%;
        height: 400px;
        padding: 20px;
        
    }
}
@media (min-width:768px){
    .panel {
        background: rgba(255, 255, 255, 0.7);
        border-radius: 25px;
        position: fixed;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 600px;
        height: 400px;
        padding: 20px;
        
    }
}
</style>