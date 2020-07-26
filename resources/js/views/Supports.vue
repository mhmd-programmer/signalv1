<template>
    <div>
        <center>
            <img src="/img/sin2.png" alt="img-fluid" style="width:200px">
        </center>
        <div class="panel">
            <center>
                <p v-if="f" style="color:grey;border-bottom: 1px dashed;display:table;padding-bottom:5px;position:absolute;left:50%;transform:translateX(-50%)">پیام های پشتیبانی</p>
                <p v-if="e" style="color:grey;border-bottom: 1px dashed;display:table;padding-bottom:5px;position:absolute;left:50%;transform:translateX(-50%)">Texts Support</p>
            </center><br><br>
            <div v-for="support in supports" :key="support" style="background:#5569691a;padding:10px;border-radius:15px;margin:10px 0 10px 0;position:relative" v-ripple>
                <img src="/img/profile.png" alt="img-fluid" style="width:50px;border-radius:50%">
                <router-link class="link decor" :to="{ name: 'answer', params: { id: support.id } }" style="position:absolute;transform:translate(10px, 39%);"><p style="margin-bottom:0">{{support.name}}</p></router-link>
                <span style="font-size:12px;opacity:0.78;position:absolute;right:5%;top:50%;transform:translateY(-50%);">{{support.created_at}}</span>
            </div>
        </div>
        <div class="lang">
            <img style="cursor:pointer;width:57px;border-radius:6px" v-if="en" @click="changeEN" src="/img/english.jpg" class="img-fluid" v-ripple>
            <img style="cursor:pointer;width:57px;border-radius:6px" v-if="fa" @click="changeFA" src="/img/iran.jpg" class="img-fluid" v-ripple>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    data() {
        return {
            supports: '',
            f: false,
            e: false,
            en: false,
            fa: false,
        }
    },
    mounted() {
        if(localStorage.getItem('lang') == 'fa'){
            this.e =  false;
            this.f =  true;
            this.fa = false;
            this.en = true;
        }
        else {
            this.f =  false;
            this.e =  true;
            this.fa = true;
            this.en = false;
        }

        this.fetchSignal();
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
        },
        fetchSignal() {
            axios.get('/fetch/support').then(response => {
                this.supports = response.data;
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
        overflow-y: scroll;
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
        overflow-y: scroll;
    }
}
    
</style>