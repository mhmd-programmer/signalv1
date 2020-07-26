<template>
    <div>
        
        <div style="position:absolute;left:50%;top:0;transform:translateX(-50%)">
            <router-link to="/"><img src="/img/sin2.png" class="img-fluid" style="width:200px"></router-link>
            <p v-if="f" style="color:grey;display:table;padding-bottom:5px;position:absolute;left:50%;transform:translateX(-50%)">آرشیو</p>
            <p v-if="e" style="color:grey;display:table;padding-bottom:5px;position:absolute;left:50%;transform:translateX(-50%)">Archive</p><br>
        </div>
        <div class="container" style="margin-top:190px">
            <div class="row" dir="rtl">
                <div class="col-lg-3">
                    <p v-if="f" style="text-align:center;color:white;opacity:0.8">فیلتر</p>
                    <p v-if="e" style="text-align:center;color:white;opacity:0.8">Filter</p>
        <select v-if="y" @change="FilterA" name="year" v-model="year" class="form-control">
            <option value="2020">2020</option>
        </select>
        <select v-if="m" @change="FilterB" name="month" v-model="month" class="form-control">
            <option value="1">January</option>
            <option value="2">February</option>
            <option value="3">March</option>
            <option value="4">April</option>
        </select>        
        <select v-if="d" @change="FilterC" name="day" v-model="day" class="form-control">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="22">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
        </select>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <table class="table table-bordered table-desktop" style="border:0;line-height:2;text-align:center">
                    <tbody>
                        <tr>
                            <td v-ripple style="border-radius:25px;border:0;background:#eeeeee">  <span style="font-size:12px">{{date}} | {{city}} | {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            GBP/JPY: <span style="background:rgba(255, 0, 0, 0.2);color:red;padding:3px;border-radius:10px">(-30pip)</span> <br>
                            Sell price: <span style="color:grey">13510</span> <br>
                            stop Loss: <span style="color:grey">6.13510</span> <br>
                            Take Profit: <span style="color:grey">4.12492</span>
                             </td>
                            <td v-ripple style="border-radius:25px;border:0;background:#eeeeee">  <span style="font-size:12px">{{date}} | {{city}} | {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            EUR/USD: <span style="background:rgba(0, 255, 0, 0.2);color:green;padding:3px;border-radius:10px">(50pip)</span> <br>
                            Buy price: <span style="color:grey">1.5654</span> <br>
                            stop Loss: <span style="color:grey">1.39145</span> <br>
                            Take Profit: <span style="color:grey">1.40132</span>
                             </td>
                            <td v-ripple style="border-radius:25px;border:0;background:#eeeeee">  <span style="font-size:12px">{{date}} | {{city}} | {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            EUR/USD: <span style="background:rgba(0, 255, 0, 0.2);color:green;padding:3px;border-radius:10px">(50pip)</span> <br>
                            Buy price: <span style="color:grey">1.5654</span> <br>
                            stop Loss: <span style="color:grey">1.39145</span> <br>
                            Take Profit: <span style="color:grey">1.40132</span>
                             </td>
                            <td v-ripple style="border-radius:25px;border:0;background:#eeeeee">  <span style="font-size:12px">{{date}} | {{city}} | {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            GBP/JPY: <span style="background:rgba(255, 0, 0, 0.2);color:red;padding:3px;border-radius:10px">(-30pip)</span> <br>
                            Sell price: <span style="color:grey">13510</span> <br>
                            stop Loss: <span style="color:grey">6.13510</span> <br>
                            Take Profit: <span style="color:grey">4.12492</span>
                             </td>
                        </tr>
            </tbody>
            </table>
            <table class="table table-bordered table-responsive table-mobile" style="border:0;line-height:2;text-align:center;font-size:12px">
                    <tbody>
                        <tr>
                            <td v-ripple style="border-radius:25px;border:0;background:#eeeeee">  <span style="font-size:12px">{{date}} | {{city}} | {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            GBP/JPY: <span style="background:rgba(255, 0, 0, 0.2);color:red;padding:3px;border-radius:10px">(-30pip)</span> <br>
                            Sell price: <span style="color:grey">13510</span> <br>
                            stop Loss: <span style="color:grey">6.13510</span> <br>
                            Take Profit: <span style="color:grey">4.12492</span>
                             </td>
                            <td v-ripple style="border-radius:25px;border:0;background:#eeeeee">  <span style="font-size:12px">{{date}} | {{city}} | {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            EUR/USD: <span style="background:rgba(0, 255, 0, 0.2);color:green;padding:3px;border-radius:10px">(50pip)</span> <br>
                            Buy price: <span style="color:grey">1.5654</span> <br>
                            stop Loss: <span style="color:grey">1.39145</span> <br>
                            Take Profit: <span style="color:grey">1.40132</span>
                             </td>
                            <td v-ripple style="border-radius:25px;border:0;background:#eeeeee">  <span style="font-size:12px">{{date}} | {{city}} | {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            EUR/USD: <span style="background:rgba(0, 255, 0, 0.2);color:green;padding:3px;border-radius:10px">(50pip)</span> <br>
                            Buy price: <span style="color:grey">1.5654</span> <br>
                            stop Loss: <span style="color:grey">1.39145</span> <br>
                            Take Profit: <span style="color:grey">1.40132</span>
                             </td>
                            <td v-ripple style="border-radius:25px;border:0;background:#eeeeee">  <span style="font-size:12px">{{date}} | {{city}} | {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            GBP/JPY: <span style="background:rgba(255, 0, 0, 0.2);color:red;padding:3px;border-radius:10px">(-30pip)</span> <br>
                            Sell price: <span style="color:grey">13510</span> <br>
                            stop Loss: <span style="color:grey">6.13510</span> <br>
                            Take Profit: <span style="color:grey">4.12492</span>
                             </td>
                        </tr>
            </tbody>
            </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <table class="table table-bordered table-desktop" style="border:0;line-height:2;text-align:center">
                    <tbody>
                        <tr>
                            <td v-ripple style="border-radius:25px;border:0;background:#eeeeee">  <span style="font-size:12px">{{date}} | {{city}} | {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            GBP/JPY: <span style="background:rgba(255, 0, 0, 0.2);color:red;padding:3px;border-radius:10px">(-30pip)</span> <br>
                            Sell price: <span style="color:grey">13510</span> <br>
                            stop Loss: <span style="color:grey">6.13510</span> <br>
                            Take Profit: <span style="color:grey">4.12492</span>
                             </td>
                            <td v-ripple style="border-radius:25px;border:0;background:#eeeeee">  <span style="font-size:12px">{{date}} | {{city}} | {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            EUR/USD: <span style="background:rgba(0, 255, 0, 0.2);color:green;padding:3px;border-radius:10px">(50pip)</span> <br>
                            Buy price: <span style="color:grey">1.5654</span> <br>
                            stop Loss: <span style="color:grey">1.39145</span> <br>
                            Take Profit: <span style="color:grey">1.40132</span>
                             </td>
                            <td v-ripple style="border-radius:25px;border:0;background:#eeeeee">  <span style="font-size:12px">{{date}} | {{city}} | {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            EUR/USD: <span style="background:rgba(0, 255, 0, 0.2);color:green;padding:3px;border-radius:10px">(50pip)</span> <br>
                            Buy price: <span style="color:grey">1.5654</span> <br>
                            stop Loss: <span style="color:grey">1.39145</span> <br>
                            Take Profit: <span style="color:grey">1.40132</span>
                             </td>
                            <td v-ripple style="border-radius:25px;border:0;background:#eeeeee">  <span style="font-size:12px">{{date}} | {{city}} | {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            GBP/JPY: <span style="background:rgba(255, 0, 0, 0.2);color:red;padding:3px;border-radius:10px">(-30pip)</span> <br>
                            Sell price: <span style="color:grey">13510</span> <br>
                            stop Loss: <span style="color:grey">6.13510</span> <br>
                            Take Profit: <span style="color:grey">4.12492</span>
                             </td>
                        </tr>
            </tbody>
            </table>
            <table class="table table-bordered table-responsive table-mobile" style="border:0;line-height:2;text-align:center;font-size:12px">
                    <tbody>
                        <tr>
                            <td v-ripple style="border-radius:25px;border:0;background:#eeeeee">  <span style="font-size:12px">{{date}} | {{city}} | {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            GBP/JPY: <span style="background:rgba(255, 0, 0, 0.2);color:red;padding:3px;border-radius:10px">(-30pip)</span> <br>
                            Sell price: <span style="color:grey">13510</span> <br>
                            stop Loss: <span style="color:grey">6.13510</span> <br>
                            Take Profit: <span style="color:grey">4.12492</span>
                             </td>
                            <td v-ripple style="border-radius:25px;border:0;background:#eeeeee">  <span style="font-size:12px">{{date}} | {{city}} | {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            EUR/USD: <span style="background:rgba(0, 255, 0, 0.2);color:green;padding:3px;border-radius:10px">(50pip)</span> <br>
                            Buy price: <span style="color:grey">1.5654</span> <br>
                            stop Loss: <span style="color:grey">1.39145</span> <br>
                            Take Profit: <span style="color:grey">1.40132</span>
                             </td>
                            <td v-ripple style="border-radius:25px;border:0;background:#eeeeee">  <span style="font-size:12px">{{date}} | {{city}} | {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            EUR/USD: <span style="background:rgba(0, 255, 0, 0.2);color:green;padding:3px;border-radius:10px">(50pip)</span> <br>
                            Buy price: <span style="color:grey">1.5654</span> <br>
                            stop Loss: <span style="color:grey">1.39145</span> <br>
                            Take Profit: <span style="color:grey">1.40132</span>
                             </td>
                            <td v-ripple style="border-radius:25px;border:0;background:#eeeeee">  <span style="font-size:12px">{{date}} | {{city}} | {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            GBP/JPY: <span style="background:rgba(255, 0, 0, 0.2);color:red;padding:3px;border-radius:10px">(-30pip)</span> <br>
                            Sell price: <span style="color:grey">13510</span> <br>
                            stop Loss: <span style="color:grey">6.13510</span> <br>
                            Take Profit: <span style="color:grey">4.12492</span>
                             </td>
                        </tr>
            </tbody>
            </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <table class="table table-bordered table-desktop" style="border:0;line-height:2;text-align:center">
                    <tbody>
                        <tr>
                            <td v-ripple style="border-radius:25px;border:0;background:#eeeeee">  <span style="font-size:12px">{{date}} | {{city}} | {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            GBP/JPY: <span style="background:rgba(255, 0, 0, 0.2);color:red;padding:3px;border-radius:10px">(-30pip)</span> <br>
                            Sell price: <span style="color:grey">13510</span> <br>
                            stop Loss: <span style="color:grey">6.13510</span> <br>
                            Take Profit: <span style="color:grey">4.12492</span>
                             </td>
                            <td v-ripple style="border-radius:25px;border:0;background:#eeeeee">  <span style="font-size:12px">{{date}} | {{city}} | {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            EUR/USD: <span style="background:rgba(0, 255, 0, 0.2);color:green;padding:3px;border-radius:10px">(50pip)</span> <br>
                            Buy price: <span style="color:grey">1.5654</span> <br>
                            stop Loss: <span style="color:grey">1.39145</span> <br>
                            Take Profit: <span style="color:grey">1.40132</span>
                             </td>
                            <td v-ripple style="border-radius:25px;border:0;background:#eeeeee">  <span style="font-size:12px">{{date}} | {{city}} | {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            EUR/USD: <span style="background:rgba(0, 255, 0, 0.2);color:green;padding:3px;border-radius:10px">(50pip)</span> <br>
                            Buy price: <span style="color:grey">1.5654</span> <br>
                            stop Loss: <span style="color:grey">1.39145</span> <br>
                            Take Profit: <span style="color:grey">1.40132</span>
                             </td>
                            <td v-ripple style="border-radius:25px;border:0;background:#eeeeee">  <span style="font-size:12px">{{date}} | {{city}} | {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            GBP/JPY: <span style="background:rgba(255, 0, 0, 0.2);color:red;padding:3px;border-radius:10px">(-30pip)</span> <br>
                            Sell price: <span style="color:grey">13510</span> <br>
                            stop Loss: <span style="color:grey">6.13510</span> <br>
                            Take Profit: <span style="color:grey">4.12492</span>
                             </td>
                        </tr>
            </tbody>
            </table>
            <table class="table table-bordered table-responsive table-mobile" style="border:0;line-height:2;text-align:center;font-size:12px">
                    <tbody>
                        <tr>
                            <td v-ripple style="border-radius:25px;border:0;background:#eeeeee">  <span style="font-size:12px">{{date}} | {{city}} | {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            GBP/JPY: <span style="background:rgba(255, 0, 0, 0.2);color:red;padding:3px;border-radius:10px">(-30pip)</span> <br>
                            Sell price: <span style="color:grey">13510</span> <br>
                            stop Loss: <span style="color:grey">6.13510</span> <br>
                            Take Profit: <span style="color:grey">4.12492</span>
                             </td>
                            <td v-ripple style="border-radius:25px;border:0;background:#eeeeee">  <span style="font-size:12px">{{date}} | {{city}} | {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            EUR/USD: <span style="background:rgba(0, 255, 0, 0.2);color:green;padding:3px;border-radius:10px">(50pip)</span> <br>
                            Buy price: <span style="color:grey">1.5654</span> <br>
                            stop Loss: <span style="color:grey">1.39145</span> <br>
                            Take Profit: <span style="color:grey">1.40132</span>
                             </td>
                            <td v-ripple style="border-radius:25px;border:0;background:#eeeeee">  <span style="font-size:12px">{{date}} | {{city}} | {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            EUR/USD: <span style="background:rgba(0, 255, 0, 0.2);color:green;padding:3px;border-radius:10px">(50pip)</span> <br>
                            Buy price: <span style="color:grey">1.5654</span> <br>
                            stop Loss: <span style="color:grey">1.39145</span> <br>
                            Take Profit: <span style="color:grey">1.40132</span>
                             </td>
                            <td v-ripple style="border-radius:25px;border:0;background:#eeeeee">  <span style="font-size:12px">{{date}} | {{city}} | {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            GBP/JPY: <span style="background:rgba(255, 0, 0, 0.2);color:red;padding:3px;border-radius:10px">(-30pip)</span> <br>
                            Sell price: <span style="color:grey">13510</span> <br>
                            stop Loss: <span style="color:grey">6.13510</span> <br>
                            Take Profit: <span style="color:grey">4.12492</span>
                             </td>
                        </tr>
            </tbody>
            </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <table class="table table-bordered table-desktop" style="border:0;line-height:2;text-align:center">
                    <tbody>
                        <tr>
                            <td v-ripple style="border-radius:25px;border:0;background:#eeeeee">  <span style="font-size:12px">{{date}} | {{city}} | {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            GBP/JPY: <span style="background:rgba(255, 0, 0, 0.2);color:red;padding:3px;border-radius:10px">(-30pip)</span> <br>
                            Sell price: <span style="color:grey">13510</span> <br>
                            stop Loss: <span style="color:grey">6.13510</span> <br>
                            Take Profit: <span style="color:grey">4.12492</span>
                             </td>
                            <td v-ripple style="border-radius:25px;border:0;background:#eeeeee">  <span style="font-size:12px">{{date}} | {{city}} | {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            EUR/USD: <span style="background:rgba(0, 255, 0, 0.2);color:green;padding:3px;border-radius:10px">(50pip)</span> <br>
                            Buy price: <span style="color:grey">1.5654</span> <br>
                            stop Loss: <span style="color:grey">1.39145</span> <br>
                            Take Profit: <span style="color:grey">1.40132</span>
                             </td>
                            <td v-ripple style="border-radius:25px;border:0;background:#eeeeee">  <span style="font-size:12px">{{date}} | {{city}} | {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            EUR/USD: <span style="background:rgba(0, 255, 0, 0.2);color:green;padding:3px;border-radius:10px">(50pip)</span> <br>
                            Buy price: <span style="color:grey">1.5654</span> <br>
                            stop Loss: <span style="color:grey">1.39145</span> <br>
                            Take Profit: <span style="color:grey">1.40132</span>
                             </td>
                            <td v-ripple style="border-radius:25px;border:0;background:#eeeeee">  <span style="font-size:12px">{{date}} | {{city}} | {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            GBP/JPY: <span style="background:rgba(255, 0, 0, 0.2);color:red;padding:3px;border-radius:10px">(-30pip)</span> <br>
                            Sell price: <span style="color:grey">13510</span> <br>
                            stop Loss: <span style="color:grey">6.13510</span> <br>
                            Take Profit: <span style="color:grey">4.12492</span>
                             </td>
                        </tr>
            </tbody>
            </table>
            <table class="table table-bordered table-responsive table-mobile" style="border:0;line-height:2;text-align:center;font-size:12px">
                    <tbody>
                        <tr>
                            <td v-ripple style="border-radius:25px;border:0;background:#eeeeee">  <span style="font-size:12px">{{date}} | {{city}} | {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            GBP/JPY: <span style="background:rgba(255, 0, 0, 0.2);color:red;padding:3px;border-radius:10px">(-30pip)</span> <br>
                            Sell price: <span style="color:grey">13510</span> <br>
                            stop Loss: <span style="color:grey">6.13510</span> <br>
                            Take Profit: <span style="color:grey">4.12492</span>
                             </td>
                            <td v-ripple style="border-radius:25px;border:0;background:#eeeeee">  <span style="font-size:12px">{{date}} | {{city}} | {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            EUR/USD: <span style="background:rgba(0, 255, 0, 0.2);color:green;padding:3px;border-radius:10px">(50pip)</span> <br>
                            Buy price: <span style="color:grey">1.5654</span> <br>
                            stop Loss: <span style="color:grey">1.39145</span> <br>
                            Take Profit: <span style="color:grey">1.40132</span>
                             </td>
                            <td v-ripple style="border-radius:25px;border:0;background:#eeeeee">  <span style="font-size:12px">{{date}} | {{city}} | {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            EUR/USD: <span style="background:rgba(0, 255, 0, 0.2);color:green;padding:3px;border-radius:10px">(50pip)</span> <br>
                            Buy price: <span style="color:grey">1.5654</span> <br>
                            stop Loss: <span style="color:grey">1.39145</span> <br>
                            Take Profit: <span style="color:grey">1.40132</span>
                             </td>
                            <td v-ripple style="border-radius:25px;border:0;background:#eeeeee">  <span style="font-size:12px">{{date}} | {{city}} | {{time}}</span> <div style="width:100%;height:1px;border-bottom:0.5px solid"></div>
                            GBP/JPY: <span style="background:rgba(255, 0, 0, 0.2);color:red;padding:3px;border-radius:10px">(-30pip)</span> <br>
                            Sell price: <span style="color:grey">13510</span> <br>
                            stop Loss: <span style="color:grey">6.13510</span> <br>
                            Take Profit: <span style="color:grey">4.12492</span>
                             </td>
                        </tr>
            </tbody>
            </table>
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
import axios from 'axios';
export default {
    data() {
        return {
            y: true,
            m: false,
            d: false,
            year: '',
            month: '',
            day: '',
            time: '',
            date: '',
            city: '',
            f: false,
            e: false,
            en: false,
            fa: false,
        }
    },
    mounted() {
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

        this.fetchDate();
    },
    methods: {
        fetchDate() {
            axios.get('/fetch/date').then(response => {
                this.time = response.data.time;
                this.date = response.data.date;
                this.city = response.data.city;
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
        FilterA() {
                this.y = false;
                this.m = true;
        },
        FilterB() {
                this.m = false;
                this.d = true;
        },
        FilterC() {
            // let formData = new FormData();
            // formData.append('year', this.year);
            // formData.append('month', this.month);
            // formData.append('day', this.day);
            axios.get('/filter/signal/' + this.year + '/' + this.month + '/' + this.day).then(response => {

            });
        },
    },
}
</script>