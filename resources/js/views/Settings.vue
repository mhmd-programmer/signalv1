<template>
    <div>
        
        <div class="change-pass">
            <center><p v-if="f" style="color:grey;border-bottom: 1px dashed;display:table;padding-bottom:5px">تغییر کلمه عبور</p></center><br>
            <center><p v-if="e" style="color:grey;border-bottom: 1px dashed;display:table;padding-bottom:5px">Change Password</p></center><br>
            <form @submit.prevent="Password">
                <v-text-field :label="a" type="password" name="passwords" v-model="passwords"></v-text-field>
                <v-text-field :label="b" type="password" name="password" v-model="password"></v-text-field>
                <button v-if="f" class="btn" style="background:none;color:green;border:1px solid" v-ripple>تغییر کلمه عبور</button>
                <button v-if="e" class="btn" style="background:none;color:green;border:1px solid" v-ripple>Change</button>
            </form>
        </div>
        <div @click="Close" id="back" style="background:rgba(0, 0, 0, 0.34);position:fixed;left:0;top:0;right:0;bottom:0;width:100%;height:100%;z-index:9"></div>
        <div style="position:absolute;left:50%;top:0;transform:translateX(-50%)">
            <router-link to="/"><img src="/img/sin2.png" class="img-fluid" style="width:200px"></router-link>
        </div>
        <div class="container">
            <div class="sett-desktop" style="background:rgba(255, 255, 255, 0.5);border-radius:25px;margin-top:246px;position:relative">
                <button dir="rtl" v-if="fa" @click="Logout" class="btn" style="background:none;color:#ff0000a6;position:absolute;top:10px;left:10px;border:1px solid;font-size:14px" v-ripple> <span class="far fa-sign-out"></span> <span>خروج</span> </button>
                <button dir="rtl" v-if="en" @click="Logout" class="btn" style="background:none;color:#ff0000a6;position:absolute;top:10px;left:10px;border:1px solid;font-size:14px" v-ripple> <span class="far fa-sign-out"></span> <span>Logout</span> </button>
                <form @submit.prevent="Change">
                    <div style="width:1px;height:47%;background:grey;position:absolute;left:50%"></div>
            <div class="row" dir="rtl" style="margin-right:250px">
                <div class="col-lg-3">                  
                        <div class="form-group">
                            <v-text-field :label="c" name="name" v-model="name"></v-text-field>
                        </div>
                </div>
            </div>
            <div class="row" style="margin-left:250px">
                <div class="col-lg-3">                  
                        <div class="form-group">
                            <v-text-field :label="d" name="mobile" v-model="mobile"></v-text-field>
                        </div>
                </div>
                
            </div>
            <div class="row" dir="rtl" style="margin-right:250px">
                <div class="col-lg-3">                  
                        <div class="form-group">
                            <label v-if="e">Region Time</label>
                            <label v-if="f" style="position: relative;right: -83%;">زمان</label>
                            <select name="timezone" class="form-control" v-model="timezone">
                                <option value="-12">(GMT -12:00) Eniwetok, Kwajalein</option>
                                 <option value="-11">(GMT -11:00) Midway Island</option>
                                 <option value="-10">(GMT -10:00) Hawaii</option>
                                 <option value="-9">(GMT -9:00) Alaska</option>
                                 <option value="-8">(GMT -8:00) Pacific Time (US &amp; Canada)</option>
                                 <option value="-7">(GMT -7:00) Mountain Time (US &amp; Canada)</option>
                                 <option value="America/Mexico_City">(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
                                 <option value="America/Lima">(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
                                 <option value="America/Caracas">(GMT -4:30) Caracas</option>
                                 <option value="America/Santiago">(GMT -4:00) Atlantic Time (Canada), La Paz, Santiago</option>
                                 <option value="-3.5">(GMT -3:30) Newfoundland</option>
                                 <option value="America/Buenos_Aires">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
                                 <option value="-2">(GMT -2:00) Mid-Atlantic</option>
                                 <option value="-1">(GMT -1:00 hour) Azores, Cape Verde Islands</option>
                                 <option value="Europe/London">(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
                                 <option value="Europe/Paris">(GMT +1:00 hour) Brussels, Copenhagen, Madrid, Paris</option>
                                 <option value="Asia/Jerusalem">(GMT +2:00) South Africa, Jerusalem, Kaliningrad</option>
                                 <option value="Europe/Moscow">(GMT +3:00) Baghdad, Riyadh, Moscow</option>
                                 <option value="Asia/Tehran" selected="selected">(GMT +3:30) Tehran</option>
                                 <option value="Asia/Baku">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
                                 <option value="Asia/Kabul">(GMT +4:30) Kabul</option>
                                 <option value="Asia/Karachi">(GMT +5:00) Islamabad, Karachi, Tashkent, Yekaterinburg</option>
                                 <option value="Asia/Kolkata">(GMT +5:30) Mumbai, Kolkata, Colombo, New Delhi</option>
                                 <option value="Asia/Kathmandu">(GMT +5:45) Kathmandu</option>
                                 <option value="Asia/Dhaka">(GMT +6:00) Almaty, Dhaka</option>
                                 <option value="Asia/Yangon">(GMT +6:30) Yangon, Cocos Islands</option>
                                 <option value="Asia/Jakarta">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
                                 <option value="Asia/Hong_Kong">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
                                 <option value="Asia/Tokyo">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
                                 <option value="9.5">(GMT +9:30) Adelaide, Darwin</option>
                                 <option value="10">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
                                 <option value="11">(GMT +11:00) Solomon Islands</option>
                                 <option value="12">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>

                            </select>
                        </div>
                </div>
            </div>
            <div class="row" style="margin-left:250px">
                <div class="col-lg-3" style="text-align:center">                  
                        <span v-if="f" @click="Open" class="btn" style="background:white;color:black;border:1px solid" v-ripple>تغییر کلمه عبور</span>
                        <span v-if="e" @click="Open" class="btn" style="background:white;color:black;border:1px solid" v-ripple>Change Password</span>
                </div>
            </div>
            <br><br>
            <br>
            <br>
            <div style="position:relative">
                <div style="position:absolute;left:50%;top:0;transform:translate(-50%, -50%);margin-top:-21px"><button v-if="f" class="btn" style="background:green;color:white;border:1px solid" v-ripple>تغییر اطلاعات</button></div>
                <div style="position:absolute;left:50%;top:0;transform:translate(-50%, -50%);margin-top:-21px"><button v-if="e" class="btn" style="background:green;color:white;border:1px solid" v-ripple>Change</button></div>
            </div>
            <br>
                </form>
            </div><br><br>
            <div class="sett-mobile" style="position:absolute;top:0;left:0;margin-top:200px">
                <form @submit.prevent="Change" style="background:rgba(255, 255, 255, 0.5);border-radius:25px">
                    <div class="row">
                    <div class="col-12">
                        <div class="form-group" style="padding:0 32px 0 32px">
                            <v-text-field :label="c" name="name" v-model="name"></v-text-field>
                        </div>
                            <div class="form-group" style="padding:0 32px 0 32px">
                            <v-text-field :label="d" name="mobile" v-model="mobile"></v-text-field>
                        </div>
                          
                            <div class="form-group" style="padding:0 32px 0 32px">
                                <label v-if="e">Region Time</label>
                            <label v-if="f" style="position: relative;right: -83%;">زمان</label>
                            
                            <select name="timezone" class="form-control" v-model="timezone">
                                <option value="-12">(GMT -12:00) Eniwetok, Kwajalein</option>
                                 <option value="-11">(GMT -11:00) Midway Island</option>
                                 <option value="-10">(GMT -10:00) Hawaii</option>
                                 <option value="-9">(GMT -9:00) Alaska</option>
                                 <option value="-8">(GMT -8:00) Pacific Time (US &amp; Canada)</option>
                                 <option value="-7">(GMT -7:00) Mountain Time (US &amp; Canada)</option>
                                 <option value="America/Mexico_City">(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
                                 <option value="America/Lima">(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
                                 <option value="America/Caracas">(GMT -4:30) Caracas</option>
                                 <option value="America/Santiago">(GMT -4:00) Atlantic Time (Canada), La Paz, Santiago</option>
                                 <option value="-3.5">(GMT -3:30) Newfoundland</option>
                                 <option value="America/Buenos_Aires">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
                                 <option value="-2">(GMT -2:00) Mid-Atlantic</option>
                                 <option value="-1">(GMT -1:00 hour) Azores, Cape Verde Islands</option>
                                 <option value="Europe/London">(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
                                 <option value="Europe/Paris">(GMT +1:00 hour) Brussels, Copenhagen, Madrid, Paris</option>
                                 <option value="Asia/Jerusalem">(GMT +2:00) South Africa, Jerusalem, Kaliningrad</option>
                                 <option value="Europe/Moscow">(GMT +3:00) Baghdad, Riyadh, Moscow</option>
                                 <option value="Asia/Tehran" selected="selected">(GMT +3:30) Tehran</option>
                                 <option value="Asia/Baku">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
                                 <option value="Asia/Kabul">(GMT +4:30) Kabul</option>
                                 <option value="Asia/Karachi">(GMT +5:00) Islamabad, Karachi, Tashkent, Yekaterinburg</option>
                                 <option value="Asia/Kolkata">(GMT +5:30) Mumbai, Kolkata, Colombo, New Delhi</option>
                                 <option value="Asia/Kathmandu">(GMT +5:45) Kathmandu</option>
                                 <option value="Asia/Dhaka">(GMT +6:00) Almaty, Dhaka</option>
                                 <option value="Asia/Yangon">(GMT +6:30) Yangon, Cocos Islands</option>
                                 <option value="Asia/Jakarta">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
                                 <option value="Asia/Hong_Kong">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
                                 <option value="Asia/Tokyo">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
                                 <option value="9.5">(GMT +9:30) Adelaide, Darwin</option>
                                 <option value="10">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
                                 <option value="11">(GMT +11:00) Solomon Islands</option>
                                 <option value="12">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>

                            </select>
                        </div>
                        <div class="form-grou">
                            <center><span v-if="f" @click="Open" class="btn" style="background:white;color:black;border:1px solid" v-ripple>تغییر کلمه عبور</span></center>
                            <center><span v-if="e" @click="Open" class="btn" style="background:white;color:black;border:1px solid" v-ripple>Change Password</span></center>
                        </div><br>
                        <div class="form-group">
                            <center><button v-if="f" class="btn" style="background:green;color:white;border:1px solid" v-ripple>تغییر اطلاعات</button></center>
                            <center><button v-if="e" class="btn" style="background:green;color:white;border:1px solid" v-ripple>Submit</button></center>
                        </div>
                    </div>
                </div>
                </form>
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
import Swal from 'sweetalert2';
export default {
    data() {
        return {
            f: true,
            e: false,
            a: 'کلمه عبور قبلی',
            b: 'کلمه عبور جدید',
            c: 'تغییر نام کاربری',
            d: 'تایید شماره تلفن',
            g: 'تغییر ایمیل',
            password: '',
            passwords: '',
            name: '',
            email: '',
            timezone: '',
            en: false,
            fa: false,
        }
    },
    mounted() {
        $(".change-pass").hide();
        $("#back").hide();

        if(localStorage.getItem('lang') == 'fa'){
            this.a = 'کلمه عبور قبلی';
            this.b = 'کلمه عبور جدید';
            this.c = 'تغییر نام کاربری';
            this.d = 'تایید شماره تلفن';
            this.g = 'تغییر ایمیل';
            this.f =  true;
            this.e =  false;
            this.fa = false;
            this.en = true;
        }
        else {
            this.a = 'Old Password';
            this.b = 'New Password';
            this.c = 'Change Name';
            this.d = 'Confirm Phone Number';
            this.g = 'Change Email';
            this.f =  false;
            this.e =  true;
            this.fa = true;
            this.en = false;
        }
    },
    methods: {
        Logout() {
            axios.get('/logout').then(response => {
                localStorage.setItem('auth', null);
                window.location = '/login';
            });
        },
        changeEN() {
            this.a = 'Old Password';
            this.b = 'New Password';
            this.c = 'Change Name';
            this.d = 'Confirm Phone Number';
            this.g = 'Change Email';
            this.f =  false;
            this.e =  true;
            localStorage.setItem('lang', 'en');
            this.fa = true;
            this.en = false;
        },
        changeFA() {
            this.a = 'کلمه عبور قبلی';
            this.b = 'کلمه عبور جدید';
            this.c = 'تغییر نام کاربری';
            this.d = 'تایید شماره تلفن';
            this.g = 'تغییر ایمیل';
            this.f =  true;
            this.e =  false;
            localStorage.setItem('lang', 'fa');
            this.fa = false;
            this.en = true;
        },
        Change() {
            let formData = new FormData();
            formData.append('name', this.name);
            formData.append('email', this.email);
            formData.append('timezone', this.timezone);
            axios.post('/change/name/email', formData).then(respone => {
                Swal.fire({
                        icon: 'success',
                        title: 'تغییرات شما ذخیره شد',
                        showConfirmButton: 'باشه',
                        dir: 'rtl',
                    });
                    this.name = '';
                    this.email = '';
            });
        },
        Password() {
            let formData = new FormData();
            formData.append('passwords', this.passwords);
            formData.append('password', this.password);
            axios.post('/change/password', formData).then(response => {
                Swal.fire({
                        icon: 'success',
                        title: 'کلمه عبور شما عوض شد',
                        showConfirmButton: 'باشه',
                        dir: 'rtl',
                    });
                    this.passwords = '';
                    this.password = '';
                    $(".change-pass").fadeOut();
                    $("#back").fadeOut();
            });
        },
        Open() {
            $(".change-pass").fadeIn();
            $("#back").fadeIn();
        },
        Close() {
            $(".change-pass").fadeOut();
            $("#back").fadeOut();
        },
    },
}
</script>
<style scoped>
    @media (max-width:767px) {
        .back-responsive {
            height:100%;
        }
    }
</style>