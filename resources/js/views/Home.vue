<template>
    <div>
			<Cadr></Cadr>

        <div class="start">
          <p dir="rtl" style="text-align:center">{{start}}</p>
          <button class="btn" style="background:green;color:white" @click="EndStart" v-ripple>Okay</button>
        </div>
        <div class="start-back" style="background:rgba(0, 0, 0, 0.5);position:fixed;left:0;top:0;width:100%;height:100%;z-index:29;"></div>

        <div class="setting" v-ripple>
            <router-link title="Settings" to="/settings" class="sett"><span v-ripple style="font-size:42px;cursor:pointer" class="fa fa-cog"></span></router-link>
        </div>
        <div class="support" v-ripple>
            <router-link title="Support" to="/support" class="sett"><span v-ripple style="font-size:42px;cursor:pointer" class="far fa-user-headset"></span></router-link>
        </div>
		<div class="store" v-ripple>
            <router-link title="Store" to="/store" class="sett"><span v-ripple style="font-size:42px;cursor:pointer" class="fab fa-btc"></span></router-link>
        </div>
		<div class="archive" v-ripple>
            <router-link title="Archive" to="/archive" class="sett"><span v-ripple style="font-size:42px;cursor:pointer" class="fa fa-folder-open"></span></router-link>
        </div>
		<div class="work" v-ripple>
            <router-link title="How Work" to="/how-work" class="sett"><span v-ripple style="font-size:42px;cursor:pointer" class="fa fa-ship"></span></router-link>
        </div>
		<div class="targets" v-ripple>
            <router-link title="targets" to="/targets" class="sett"><span v-ripple style="font-size:42px;cursor:pointer" class="fa fa-rocket"></span></router-link>
        </div>

        <div class="container-fluid responsive-pos">
        <div style="position:relative">
            <!--<div class="tradingview-widget-container">
                <div id="tradingview_a4878"></div>

            </div>-->
       <div style="margin-left:-60px" class="chart1"></div>

			<button data-toggle="modal" data-target="#myModal" class="fast-eye" style="z-index:20;font-size:25px"><span style="transform:rotate(0deg)" class="far fa-waveform-path"></span></button>
        </div>
        <div style="position:relative">
         <!--   <div class="tradingview-widget-container">
  			<div id="tradingview_fb4de"></div>
		</div>-->
    <div style="margin-left:-60px" class="chart2"></div>
    <div v-if="silvera" style="background:rgba(0, 0, 0, 0.5);position:absolute;width:100%;height:100%;left:0;top:0">
              <span style="font-size:45px;color:white;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%)" class="fa fa-lock"></span>
            </div>
		<button v-if="silverlocka" data-toggle="modal" data-target="#myModal" class="fast-eye" style="z-index:20;font-size:25px"><span style="transform:rotate(0deg)" class="far fa-waveform-path"></span></button>
        </div>
        <div style="position:relative">
            <!--<div class="tradingview-widget-container">
                <div id="tradingview_cd5bc"></div>
            </div>-->
           <div style="margin-left:-60px" class="chart3"></div>
            <div v-if="silverb" style="background:rgba(0, 0, 0, 0.5);position:absolute;width:100%;height:100%;left:0;top:0">
              <span style="font-size:45px;color:white;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%)" class="fa fa-lock"></span>
            </div>
			<button v-if="silverlockb" data-toggle="modal" data-target="#myModal" class="fast-eye" style="z-index:20;font-size:25px"><span style="transform:rotate(0deg)" class="far fa-waveform-path"></span></button>
        </div>
        <div style="position:relative">
            <!--<div class="tradingview-widget-container">
                <div id="tradingview_26f12"></div>
            </div>-->
            <div style="margin-left:-60px" class="chart4"></div>
            <div v-if="golda" style="background:rgba(0, 0, 0, 0.5);position:absolute;width:100%;height:100%;left:0;top:0">
              <span style="font-size:45px;color:white;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%)" class="fa fa-lock"></span>
            </div>
			<button v-if="goldlocka" data-toggle="modal" data-target="#myModal" class="fast-eye" style="z-index:20;font-size:25px"><span style="transform:rotate(0deg)" class="far fa-waveform-path"></span></button>
		</div>
		<div style="position:relative">
			<!--<div class="tradingview-widget-container">
  			<div id="tradingview_27a61"></div>
    	</div>-->
      <div style="margin-left:-60px" class="chart5"></div>
      <div v-if="goldb" style="background:rgba(0, 0, 0, 0.5);position:absolute;width:100%;height:100%;left:0;top:0">
              <span style="font-size:45px;color:white;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%)" class="fa fa-lock"></span>
            </div>
		<button v-if="goldlockb" data-toggle="modal" data-target="#myModal" class="fast-eye" style="z-index:20;font-size:25px"><span style="transform:rotate(0deg)" class="far fa-waveform-path"></span></button>
		</div>
    </div>
	<div class="container-fluid responsive-pos">

			<div style="position:relative">
			<!--	<div class="tradingview-widget-container">
  					<div id="tradingview_5664a"></div>
				</div>-->
        <div style="margin-left:-60px" class="chart6"></div>
        <div v-if="goldc" style="background:rgba(0, 0, 0, 0.5);position:absolute;width:100%;height:100%;left:0;top:0">
              <span style="font-size:45px;color:white;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%)" class="fa fa-lock"></span>
            </div>
				<button v-if="goldlockc" data-toggle="modal" data-target="#myModal" class="fast-eye" style="z-index:20;font-size:25px"><span style="transform:rotate(0deg)" class="far fa-waveform-path"></span></button>
			</div>

			<div style="position:relative">
				<!--<div class="tradingview-widget-container">
  					<div id="tradingview_565ef"></div>
				</div>-->
        <div style="margin-left:-60px" class="chart7"></div>
        <div v-if="goldd" style="background:rgba(0, 0, 0, 0.5);position:absolute;width:100%;height:100%;left:0;top:0">
              <span style="font-size:45px;color:white;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%)" class="fa fa-lock"></span>
            </div>
				<button v-if="goldlockd" data-toggle="modal" data-target="#myModal" class="fast-eye" style="z-index:20;font-size:25px"><span style="transform:rotate(0deg)" class="far fa-waveform-path"></span></button>
			</div>

			<div style="position:relative">
				<!--<div class="tradingview-widget-container">
  					<div id="tradingview_b3eca"></div>
				</div>-->
        <div style="margin-left:-60px" class="chart8"></div>
        <div v-if="diamonda" style="background:rgba(0, 0, 0, 0.5);position:absolute;width:100%;height:100%;left:0;top:0">
              <span style="font-size:45px;color:white;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%)" class="fa fa-lock"></span>
            </div>
				<button v-if="diamondlocka" data-toggle="modal" data-target="#myModal" class="fast-eye" style="z-index:20;font-size:25px"><span style="transform:rotate(0deg)" class="far fa-waveform-path"></span></button>
			</div>

			<div style="position:relative">
				<!--<div class="tradingview-widget-container">
  					<div id="tradingview_39c7f"></div>
				</div>-->
        <div style="margin-left:-60px" class="chart9"></div>
        <div v-if="diamondb" style="background:rgba(0, 0, 0, 0.5);position:absolute;width:100%;height:100%;left:0;top:0">
              <span style="font-size:45px;color:white;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%)" class="fa fa-lock"></span>
            </div>
				<button v-if="diamondlockb" data-toggle="modal" data-target="#myModal" class="fast-eye" style="z-index:20;font-size:25px"><span style="transform:rotate(0deg)" class="far fa-waveform-path"></span></button>
			</div>

			<div style="position:relative">
				<!--<div class="tradingview-widget-container">
  					<div id="tradingview_48291"></div>
				</div>-->
        <div style="margin-left:-60px" class="chart10"></div>
        <div v-if="diamondc" style="background:rgba(0, 0, 0, 0.5);position:absolute;width:100%;height:100%;left:0;top:0">
              <span style="font-size:45px;color:white;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%)" class="fa fa-lock"></span>
            </div>
				<button v-if="diamondlockc" data-toggle="modal" data-target="#myModal" class="fast-eye" style="z-index:20;font-size:25px"><span style="transform:rotate(0deg)" class="far fa-waveform-path"></span></button>
			</div>
	</div>
	<div class="container-fluid responsive-pos">

			<div style="position:relative">
				<!--<div class="tradingview-widget-container">
  					<div id="tradingview_7824e"></div>
				</div>-->
        <div style="margin-left:-60px" class="chart11"></div>
        <div v-if="diamondd" style="background:rgba(0, 0, 0, 0.5);position:absolute;width:100%;height:100%;left:0;top:0">
              <span style="font-size:45px;color:white;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%)" class="fa fa-lock"></span>
            </div>
				<button v-if="diamondlockd" data-toggle="modal" data-target="#myModal" class="fast-eye" style="z-index:20;font-size:25px"><span style="transform:rotate(0deg)" class="far fa-waveform-path"></span></button>
			</div>

			<div style="position:relative">
				<!--<div class="tradingview-widget-container">
  					<div id="tradingview_27410"></div>
				</div>-->
        <div style="margin-left:-60px" class="chart12"></div>
        <div v-if="diamonde" style="background:rgba(0, 0, 0, 0.5);position:absolute;width:100%;height:100%;left:0;top:0">
              <span style="font-size:45px;color:white;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%)" class="fa fa-lock"></span>
            </div>
				<button v-if="diamondlocke" data-toggle="modal" data-target="#myModal" class="fast-eye" style="z-index:20;font-size:25px"><span style="transform:rotate(0deg)" class="far fa-waveform-path"></span></button>
			</div>

			<div style="position:relative">
				<!--<div class="tradingview-widget-container">
  					<div id="tradingview_2e41a"></div>
				</div>-->
        <div style="margin-left:-60px" class="chart13"></div>
        <div v-if="diamondf" style="background:rgba(0, 0, 0, 0.5);position:absolute;width:100%;height:100%;left:0;top:0">
              <span style="font-size:45px;color:white;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%)" class="fa fa-lock"></span>
            </div>
				<button v-if="diamondlockf" data-toggle="modal" data-target="#myModal" class="fast-eye" style="z-index:20;font-size:25px"><span style="transform:rotate(0deg)" class="far fa-waveform-path"></span></button>
			</div>

			<div style="position:relative">
				<!--<div class="tradingview-widget-container">
  					<div id="tradingview_2b211"></div>
				</div>-->
        <div style="margin-left:-60px" class="chart14"></div>
        <div v-if="diamondg" style="background:rgba(0, 0, 0, 0.5);position:absolute;width:100%;height:100%;left:0;top:0">
              <span style="font-size:45px;color:white;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%)" class="fa fa-lock"></span>
            </div>
				<button v-if="diamondlockg" data-toggle="modal" data-target="#myModal" class="fast-eye" style="z-index:20;font-size:25px"><span style="transform:rotate(0deg)" class="far fa-waveform-path"></span></button>
			</div>

			<div style="position:relative">
				<!--<div class="tradingview-widget-container">
  					<div id="tradingview_3c129"></div>
				</div>-->
        <div style="margin-left:-60px" class="chart15"></div>
        <div v-if="diamondh" style="background:rgba(0, 0, 0, 0.5);position:absolute;width:100%;height:100%;left:0;top:0">
              <span style="font-size:45px;color:white;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%)" class="fa fa-lock"></span>
            </div>
				<button v-if="diamondlockh" data-toggle="modal" data-target="#myModal" class="fast-eye" style="z-index:20;font-size:25px"><span style="transform:rotate(0deg)" class="far fa-waveform-path"></span></button>
			</div>
	</div> <br><br><br>
  <div>
    <div class="wid-resp">
        <table class="table table-bordered table-dark " style="border-radius:25px">
            <tbody>
                <tr>
                    <td class="td-resp" style="padding:5px 0px 56px;border-top:none;border-left:none;border-right:none">
                        <span>
                            <img src="/img/usd.jpg" alt="img-fluid" style="border-radius:50%">
                            <span style="font-size:18px">{{infoa.name}}/{{infoa.pips}}</span>
                        </span><br>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="mines1"></p>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="plus1">00:00</p>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="enable">
                            <button class="btn ready1">Ready</button>
                            <button @click="GoA(infoa.id)" class="btn go1">Go</button>
                            <button @click="EndA(infoa.id)" class="btn end1">End</button>
                        </div>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="disable">
                            <button class="btn ready1" disabled>Ready</button>
                            <button class="btn go1" disabled>Go</button>
                            <button class="btn end1" disabled>End</button>
                        </div>
                    </td>
                    <td class="td-resp" style="padding:5px 0px 56px;">
                        <span>
                            <img src="/img/usd.jpg" alt="img-fluid" style="border-radius:50%">
                            <span style="font-size:18px">{{infob.name}}/{{infob.pips}}</span>
                        </span><br>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="mines2"></p>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="plus2">00:00</p>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="enable">
                            <button class="btn ready2">Ready</button>
                            <button @click="GoB(infob.id)" class="btn go2">Go</button>
                            <button @click="EndB(infob.id)" class="btn end2">End</button>
                        </div>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="disable">
                            <button class="btn ready2" disabled>Ready</button>
                            <button class="btn go2" disabled>Go</button>
                            <button class="btn end2" disabled>End</button>
                        </div>
                    </td>
                    <td class="td-resp" style="padding:5px 0px 56px;">
                        <span>
                            <img src="/img/usd.jpg" alt="img-fluid" style="border-radius:50%">
                            <span style="font-size:18px">{{infoc.name}}/{{infoc.pips}}</span>
                        </span><br>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="mines3"></p>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="plus3">00:00</p>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="enable">
                            <button class="btn ready3">Ready</button>
                            <button @click="GoC(infoc.id)" class="btn go3">Go</button>
                            <button @click="EndC(infoc.id)" class="btn end3">End</button>
                        </div>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="disable">
                            <button class="btn ready3" disabled>Ready</button>
                            <button class="btn go3" disabled>Go</button>
                            <button class="btn end3" disabled>End</button>
                        </div>
                    </td>
                    <td class="td-resp" style="padding:5px 0px 56px;border-top:none;border-right:none">
                        <span>
                            <img src="/img/usd.jpg" alt="img-fluid" style="border-radius:50%">
                            <span style="font-size:18px">{{infod.name}}/{{infod.pips}}</span>
                        </span><br>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="mines4"></p>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="plus4">00:00</p>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="enable">
                            <button class="btn ready4">Ready</button>
                            <button @click="GoD(infod.id)" class="btn go4">Go</button>
                            <button @click="EndD(infod.id)" class="btn end4">End</button>
                        </div>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="disable">
                            <button class="btn ready4" disabled>Ready</button>
                            <button class="btn go4" disabled>Go</button>
                            <button class="btn end4" disabled>End</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="td-resp" style="padding:5px 0px 56px;">
                        <span>
                            <img src="/img/usd.jpg" alt="img-fluid" style="border-radius:50%">
                            <span style="font-size:18px">{{infoe.name}}/{{infoe.pips}}</span>
                        </span><br>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="mines5"></p>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="plus5">00:00</p>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="enable">
                            <button class="btn ready5">Ready</button>
                            <button @click="GoE(infoe.id)" class="btn go5">Go</button>
                            <button @click="EndE(infoe.id)" class="btn end5">End</button>
                        </div>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="disable">
                            <button class="btn ready5" disabled>Ready</button>
                            <button class="btn go5" disabled>Go</button>
                            <button class="btn end5" disabled>End</button>
                        </div>
                    </td>
                    <td class="td-resp" style="padding:5px 0px 56px;">
                        <span>
                            <img src="/img/usd.jpg" alt="img-fluid" style="border-radius:50%">
                            <span style="font-size:18px">{{infof.name}}/{{infof.pips}}</span>
                        </span><br>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="mines6"></p>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="plus6">00:00</p>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="enable">
                            <button class="btn ready6">Ready</button>
                            <button @click="GoF(infof.id)" class="btn go6">Go</button>
                            <button @click="EndF(infof.id)" class="btn end6">End</button>
                        </div>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="disable">
                            <button class="btn ready6" disabled>Ready</button>
                            <button class="btn go6" disabled>Go</button>
                            <button class="btn end6" disabled>End</button>
                        </div>
                    </td>
                    <td class="td-resp" style="padding:5px 0px 56px;">
                        <span>
                            <img src="/img/usd.jpg" alt="img-fluid" style="border-radius:50%">
                            <span style="font-size:18px">{{infog.name}}/{{infog.pips}}</span>
                        </span><br>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="mines7"></p>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="plus7">00:00</p>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="enable">
                            <button class="btn ready7">Ready</button>
                            <button @click="GoG(infog.id)" class="btn go7">Go</button>
                            <button @click="EndG(infog.id)" class="btn end7">End</button>
                        </div>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="disable">
                            <button class="btn ready7" disabled>Ready</button>
                            <button class="btn go7" disabled>Go</button>
                            <button class="btn end7" disabled>End</button>
                        </div>
                    </td>
                    <td class="td-resp" style="padding:5px 0px 56px;">
                        <span>
                            <img src="/img/usd.jpg" alt="img-fluid" style="border-radius:50%">
                            <span style="font-size:18px">{{infoh.name}}/{{infoh.pips}}</span>
                        </span><br>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="mines8"></p>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="plus8">00:00</p>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="enable">
                            <button class="btn ready8">Ready</button>
                            <button @click="GoH(infoh.id)" class="btn go8">Go</button>
                            <button @click="EndH(infoh.id)" class="btn end8">End</button>
                        </div>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="disable">
                            <button class="btn ready8" disabled>Ready</button>
                            <button class="btn go8" disabled>Go</button>
                            <button class="btn end8" disabled>End</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="td-resp" style="padding:5px 0px 56px;">
                        <span>
                            <img src="/img/usd.jpg" alt="img-fluid" style="border-radius:50%">
                            <span style="font-size:18px">{{infoi.name}}/{{infoi.pips}}</span>
                        </span><br>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="mines9"></p>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="plus9">00:00</p>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="enable">
                            <button class="btn ready9">Ready</button>
                            <button @click="GoI(infoi.id)" class="btn go9">Go</button>
                            <button @click="EndI(infoi.id)" class="btn end9">End</button>
                        </div>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="disable">
                            <button class="btn ready9" disabled>Ready</button>
                            <button class="btn go9" disabled>Go</button>
                            <button class="btn end9" disabled>End</button>
                        </div>
                    </td>
                    <td class="td-resp" style="padding:5px 0px 56px;">
                        <span>
                            <img src="/img/usd.jpg" alt="img-fluid" style="border-radius:50%">
                            <span style="font-size:18px">{{infoj.name}}/{{infoj.pips}}</span>
                        </span><br>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="mines10"></p>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="plus10">00:00</p>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="enable">
                            <button class="btn ready10">Ready</button>
                            <button @click="GoJ(infoj.id)" class="btn go10">Go</button>
                            <button @click="EndJ(infoj.id)" class="btn end10">End</button>
                        </div>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="disable">
                            <button class="btn ready10" disabled>Ready</button>
                            <button class="btn go10" disabled>Go</button>
                            <button class="btn end10" disabled>End</button>
                        </div>
                    </td>
                    <td class="td-resp" style="padding:5px 0px 56px;">
                        <span>
                            <img src="/img/usd.jpg" alt="img-fluid" style="border-radius:50%">
                            <span style="font-size:18px">{{infok.name}}/{{infok.pips}}</span>
                        </span><br>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="mines11"></p>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="plus11">00:00</p>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="enable">
                            <button class="btn ready11">Ready</button>
                            <button @click="GoK(infok.id)" class="btn go11">Go</button>
                            <button @click="EndK(infok.id)" class="btn end11">End</button>
                        </div>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="disable">
                            <button class="btn ready11" disabled>Ready</button>
                            <button class="btn go11" disabled>Go</button>
                            <button class="btn end11" disabled>End</button>
                        </div>
                    </td>
                    <td class="td-resp" style="padding:5px 0px 56px;">
                        <span>
                            <img src="/img/usd.jpg" alt="img-fluid" style="border-radius:50%">
                            <span style="font-size:18px">{{infol.name}}/{{infol.pips}}</span>
                        </span><br>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="mines12"></p>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="plus12">00:00</p>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="enable">
                            <button class="btn ready12">Ready</button>
                            <button @click="GoL(infol.id)" class="btn go12">Go</button>
                            <button @click="EndL(infol.id)" class="btn end12">End</button>
                        </div>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="disable">
                            <button class="btn ready12" disabled>Ready</button>
                            <button class="btn go12" disabled>Go</button>
                            <button class="btn end12" disabled>End</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="td-resp" style="padding:5px 0px 56px;">
                        <span>
                            <img src="/img/usd.jpg" alt="img-fluid" style="border-radius:50%">
                            <span style="font-size:18px">{{infom.name}}/{{infom.pips}}</span>
                        </span><br>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="mines13"></p>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="plus13">00:00</p>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="enable">
                            <button class="btn ready13">Ready</button>
                            <button @click="GoM(infom.id)" class="btn go13">Go</button>
                            <button @click="EndM(infom.id)" class="btn end13">End</button>
                        </div>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="disable">
                            <button class="btn ready13" disabled>Ready</button>
                            <button class="btn go13" disabled>Go</button>
                            <button class="btn end13" disabled>End</button>
                        </div>
                    </td>
                    <td class="td-resp" style="padding:5px 0px 56px;">
                        <span>
                            <img src="/img/usd.jpg" alt="img-fluid" style="border-radius:50%">
                            <span style="font-size:18px">{{infon.name}}/{{infon.pips}}</span>
                        </span><br>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="mines14"></p>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="plus14">00:00</p>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="enable">
                            <button class="btn ready14">Ready</button>
                            <button @click="GoN(infon.id)" class="btn go14">Go</button>
                            <button @click="EndN(infon.id)" class="btn end14">End</button>
                        </div>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="disable">
                            <button class="btn ready14" disabled>Ready</button>
                            <button class="btn go14" disabled>Go</button>
                            <button class="btn end14" disabled>End</button>
                        </div>
                    </td>
                    <td class="td-resp" style="padding:5px 0px 56px;">
                        <span>
                            <img src="/img/usd.jpg" alt="img-fluid" style="border-radius:50%">
                            <span style="font-size:18px">{{infoo.name}}/{{infoo.pips}}</span>
                        </span><br>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="mines15"></p>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="plus15">00:00</p>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="enable">
                            <button class="btn ready15">Ready</button>
                            <button @click="GoO(infoo.id)" class="btn go15">Go</button>
                            <button @click="EndO(infoo.id)" class="btn end15">End</button>
                        </div>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="disable">
                            <button class="btn ready15" disabled>Ready</button>
                            <button class="btn go15" disabled>Go</button>
                            <button class="btn end15" disabled>End</button>
                        </div>
                    </td>
                    <td class="td-resp" style="padding:5px 0px 56px;">
                        <span>
                            <img src="/img/usd.jpg" alt="img-fluid" style="border-radius:50%">
                            <span style="font-size:18px">{{infop.name}}/{{infop.pips}}</span>
                        </span><br>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="mines16"></p>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="plus16">00:00</p>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="enable">
                            <button class="btn ready16">Ready</button>
                            <button @click="GoP(infop.id)" class="btn go16">Go</button>
                            <button @click="EndP(infop.id)" class="btn end16">End</button>
                        </div>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="disable">
                            <button class="btn ready16" disabled>Ready</button>
                            <button class="btn go16" disabled>Go</button>
                            <button class="btn end16" disabled>End</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="td-resp" style="padding:5px 0px 56px;border-bottom:none;border-left:none">
                        <span>
                            <img src="/img/usd.jpg" alt="img-fluid" style="border-radius:50%">
                            <span style="font-size:18px">{{infoq.name}}/{{infoq.pips}}</span>
                        </span><br>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="mines17"></p>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="plus17">00:00</p>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="enable">
                            <button class="btn ready17">Ready</button>
                            <button @click="GoQ(infoq.id)" class="btn go17">Go</button>
                            <button @click="EndQ(infoq.id)" class="btn end17">End</button>
                        </div>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="disable">
                            <button class="btn ready17" disabled>Ready</button>
                            <button class="btn go17" disabled>Go</button>
                            <button class="btn end17" disabled>End</button>
                        </div>
                    </td>
                    <td class="td-resp" style="padding:5px 0px 56px;">
                        <span>
                            <img src="/img/usd.jpg" alt="img-fluid" style="border-radius:50%">
                            <span style="font-size:18px">{{infor.name}}/{{infor.pips}}</span>
                        </span><br>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="mines18"></p>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="plus18">00:00</p>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="enable">
                            <button class="btn ready18">Ready</button>
                            <button @click="GoR(infor.id)" class="btn go18">Go</button>
                            <button @click="EndR(infor.id)" class="btn end18">End</button>
                        </div>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="disable">
                            <button class="btn ready18" disabled>Ready</button>
                            <button class="btn go18" disabled>Go</button>
                            <button class="btn end18" disabled>End</button>
                        </div>
                    </td>
                    <td class="td-resp" style="padding:5px 0px 56px;">
                        <span>
                            <img src="/img/usd.jpg" alt="img-fluid" style="border-radius:50%">
                            <span style="font-size:18px">{{infos.name}}/{{infos.pips}}</span>
                        </span><br>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="mines19"></p>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="plus19">00:00</p>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="enable">
                            <button class="btn ready19">Ready</button>
                            <button @click="GoS(infos.id)" class="btn go19">Go</button>
                            <button @click="EndS(infos.id)" class="btn end19">End</button>
                        </div>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="disable">
                            <button class="btn ready19" disabled>Ready</button>
                            <button class="btn go19" disabled>Go</button>
                            <button class="btn end19" disabled>End</button>
                        </div>
                    </td>
                    <td class="td-resp" style="padding:5px 0px 56px;border-bottom:none;border-right:none;border-left:none">
                        <span>
                            <img src="/img/usd.jpg" alt="img-fluid" style="border-radius:50%">
                            <span style="font-size:18px">{{infot.name}}/{{infot.pips}}</span>
                        </span><br>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="mines20"></p>
                        <p style="color:#65d0a3;padding:0px 0 0 11px;font-size:26px;position:absolute;left:50%;top:50%;transform:translate(-73%, -10%)" id="plus20">00:00</p>
                       <div style="position:absolute;top:5%;right:5%;display:grid" class="enable">
                            <button class="btn ready20">Ready</button>
                            <button @click="GoT(infot.id)" class="btn go20">Go</button>
                            <button @click="EndT(infot.id)" class="btn end20">End</button>
                        </div>
                        <div style="position:absolute;top:5%;right:5%;display:grid" class="disable">
                            <button class="btn ready20" disabled>Ready</button>
                            <button class="btn go20" disabled>Go</button>
                            <button class="btn end20" disabled>End</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
  </div>



</div>
</template>
<script>
import axios from 'axios';
import moment from 'moment';
import TableFree from './TableFree';
import TableSilver from './TableSilver';
import TableGold from './TableGold';
import TableDiamond from './TableDiamond';
import Cadr from './Cadr';
export default {
    components: { TableFree, TableSilver, TableGold, TableDiamond, Cadr },
    data() {
        return {
			time: '',
			date: '',
			city: '',
      minutes: 0,
      seconds: 0,
      days: 0,
      hours: 0,
      dokme: 'yellow',
      ahah: '',
      tb: '',
      tc: '',
    infoa: '',
    infob: '',
    infoc: '',
    infod: '',
    infoe: '',
    infof: '',
    infog: '',
    infoh: '',
    infoi: '',
    infoj: '',
    infok: '',
    infol: '',
    infom: '',
    infon: '',
    infoo: '',
    infop: '',
    infoq: '',
    infor: '',
    infos: '',
    infot: '',
    signals: '',
      start: '',
      auth: false,
      free: false,
      silver: false,
      gold: false,
      diamond: false,
			dialog:false,
      eye:false,
			silverlocka: true,
			silvera: false,
			silverlockb: true,
			silverb: false,
			goldlocka: true,
			golda: false,
			goldlockb: true,
			goldb: false,
			goldlockc: true,
			goldc: false,
			goldlockd: true,
			goldd: false,
			diamondlocka: true,
			diamonda: false,
			diamondlockb: true,
			diamondb: false,
			diamondlockc: true,
			diamondc: false,
			diamondlockd: true,
			diamondd: false,
			diamondlocke: true,
			diamonde: false,
			diamondlockf: true,
			diamondf: false,
			diamondlockg: true,
			diamondg: false,
			diamondlockh: true,
			diamondh: false,
        }
	},
	created() {
		$(".change-pass").hide();
        $("#back").hide();
        $("#myModal").css('display', 'hidden');
	},

    mounted(){
        // alert(moment().unix());

        var options = {
          series: [{
          data: [{
              x: new Date(1538841600000),
              y: [6597.5, 6600, 6588.39, 6596.25]
            },
            {
              x: new Date(1538843400000),
              y: [6598.03, 6588.73, 6604, 6602.97]
            },
            {
              x: new Date(1538845200000),
              y: [6602.97, 6595, 6609.17, 6605]
            },
            {
              x: new Date(1538847000000),
              y: [6605, 6603, 6610.51, 6610.95]
            },
            {
              x: new Date(1538848800000),
              y: [6610.51, 6600.21, 6615.39, 6614.59]
            },
            {
              x: new Date(1538850600000),
              y: [6614.59, 6610.08, 6618, 6616]
            },
            {
              x: new Date(1538852400000),
              y: [6610, 6605.01, 6613, 6606]
            },
            {
              x: new Date(1538854200000),
              y: [6606, 6603.01, 6609, 6602]
            },
            {
              x: new Date(1538856000000),
              y: [6602.34, 6600.76, 6606.63, 6598.86]
            },
            {
              x: new Date(1538857800000),
              y: [6598.86, 6595.28, 6600.57, 6590.01]
            },
            {
              x: new Date(1538859600000),
              y: [6590.81, 6580.21, 6592.78, 6585.25]
            },
            {
              x: new Date(1538861400000),
              y: [6585.25, 6582.2, 6587, 6582.99]
            },
          ]
        }],
          chart: {
          type: 'candlestick',
          height:"290",
          width: "320",
        },
        title: {
          align: 'left',
          color:"white"
        },
        xaxis: {
          type: 'datetime'
        },
        yaxis: {
          tooltip: {
            enabled: false
          }
        }
        };



        var chart = new ApexCharts(document.querySelector(".chart1"), options);
        chart.render();
        var chart = new ApexCharts(document.querySelector(".chart2"), options);
        chart.render();
        var chart = new ApexCharts(document.querySelector(".chart3"), options);
        chart.render();
        var chart = new ApexCharts(document.querySelector(".chart4"), options);
        chart.render();
        var chart = new ApexCharts(document.querySelector(".chart5"), options);
        chart.render();
        var chart = new ApexCharts(document.querySelector(".chart6"), options);
        chart.render();
        var chart = new ApexCharts(document.querySelector(".chart7"), options);
        chart.render();
        var chart = new ApexCharts(document.querySelector(".chart8"), options);
        chart.render();
        var chart = new ApexCharts(document.querySelector(".chart9"), options);
        chart.render();
        var chart = new ApexCharts(document.querySelector(".chart10"), options);
        chart.render();
        var chart = new ApexCharts(document.querySelector(".chart11"), options);
        chart.render();
        var chart = new ApexCharts(document.querySelector(".chart12"), options);
        chart.render();
        var chart = new ApexCharts(document.querySelector(".chart13"), options);
        chart.render();
        var chart = new ApexCharts(document.querySelector(".chart14"), options);
        chart.render();
        var chart = new ApexCharts(document.querySelector(".chart15"), options);
        chart.render();
      $(".ready1").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
      $(".go1").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".end1").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".ready2").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
      $(".go2").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".end2").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".ready3").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
      $(".go3").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".end3").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".ready4").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
      $(".go4").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".end4").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".ready5").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
      $(".go5").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".end5").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".ready6").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
      $(".go6").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".end6").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".ready7").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
      $(".go7").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".end7").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".ready8").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
      $(".go8").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".end8").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".ready9").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
      $(".go9").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".end9").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".ready10").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
      $(".go10").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".end10").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".ready11").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
      $(".go11").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".end11").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".ready12").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
      $(".go12").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".end12").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".ready13").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
      $(".go13").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".end13").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".ready14").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
      $(".go14").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".end14").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".ready15").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
      $(".go15").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".end15").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".ready16").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
      $(".go16").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".end16").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".ready17").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
      $(".go17").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".end17").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".ready18").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
      $(".go18").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".end18").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".ready19").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
      $(".go19").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".end19").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".ready20").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
      $(".go20").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');
      $(".end20").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px');

      $(".enable").hide();
        $(".disable").show();
      $("#plus1").hide();
      $("#plus2").hide();
      $("#plus3").hide();
      $("#plus4").hide();
      $("#plus5").hide();
      $("#plus6").hide();
      $("#plus7").hide();
      $("#plus8").hide();
      $("#plus9").hide();
      $("#plus10").hide();
      $("#plus11").hide();
      $("#plus12").hide();
      $("#plus13").hide();
      $("#plus14").hide();
      $("#plus15").hide();
      $("#plus16").hide();
      $("#plus17").hide();
      $("#plus18").hide();
      $("#plus19").hide();
      $("#plus20").hide();

        this.NotClick();

      this.Accept();
      // $(window).scroll(function(){
      //   if($(window).scrollTop()>200 && $(window).scrollTop()<300){
      //     $("html, body").animate({'scrollTop' : '800px'}, 1000);
      //     // window.scrollByPages(1);
      //   }
      // });
      // $(window).scroll(function(){
      //   if($(window).scrollTop()>799){
      //     $("html, body").animate({'scrollTop' : '0'}, 1000);
      //   }
      // });
      $(".start").hide();
      $(".start-back").hide();

        $(".fast-eye").click(function(){
            $("#myModal").fadeIn();
        });

        setInterval(() => {
            this.fetchBinery();
        }, 6000);

        if(localStorage.getItem('lang') == 'fa'){
            this.e = false;
            this.f = true;
        }
        else {
            this.e = true;
            this.f = false;
        }

        // this.AutoLogin();
        this.Check();

			// this.fetchRate();
    this.fetchUserId();
    this.Start();
		this.fetchSignals();
		this.fetchDate();

    },
    methods: {
      fetchUserId(){
            axios.get('/fetch/user/id').then(response => {
                localStorage.setItem('auth', response.data.id);
                localStorage.setItem('token', response.data.token);
            });
        },
      NotClick(){
        let id = localStorage.getItem('auth');
        let token = localStorage.getItem('token');
        axios.get('/fetch/user/data/' + id + '/' + token).then(response => {
                if(response.data.role == 20){
                    $(".disable").hide();
                    $(".enable").show();
                }
                else {
                    $(".disable").show();
                    $(".enable").hide();
                }
            });
      },
      EndA(num){
        let formData = new FormData();
        formData.append('number', num);
        axios.post('/changes/status', formData).then(response => {
          $(".go1").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
          $(".end1").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
        });
      },
      TimeCountA(){
        var tbs = this.infoa.hour;
        setInterval(function () {
      var sum = document.getElementById('mines1');
      var after = new Date(tbs.replace(/-/g, '/'));
      var now = new Date().getTime();
      var mines = after - now;

      var days = Math.floor(mines / (1000 * 60 * 60 * 24));
      var hours = Math.floor(mines % (1000 * 60 * 60 * 24))
      var minutes = Math.floor(mines % (1000 * 60 * 60) / (1000 * 60));
      var seconds = Math.floor(mines % (1000 * 60) / (1000));
      if(minutes != '-1' && seconds != '-1'){
        sum.innerHTML = minutes + ':' + seconds;
      }
       if(minutes < 0 && seconds < 0) {
        $("#mines1").hide();
        $("#plus1").show();
      }
        }, 1000);
      },

      GoA(num){
        let formData = new FormData();
        formData.append('number', num);
        axios.post('/change/status', formData).then(response => {
          $(".go1").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
          $(".ready1").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
        });
      },
      Accept() {
        let id = localStorage.getItem('auth');
        let token = localStorage.getItem('token');
            axios.get('/fetch/user/data/' + id + '/' + token).then(response => {
                if(response.data.role == 20){
                    this.role = 1
                }
                else {
                    this.role = 0;
                }
            });
        },
      fetchBinery() {
                axios.get('/fetch/binery').then(response => {
                    this.infoa = response.data[0];
                    this.infob = response.data[1];
                    this.infoc = response.data[2];
                    this.infod = response.data[3];
                    this.infoe = response.data[4];
                    this.infof = response.data[5];
                    this.infog = response.data[6];
                    this.infoh = response.data[7];
                    this.infoi = response.data[8];
                    this.infoj = response.data[9];
                    this.infok = response.data[10];
                    this.infol = response.data[11];
                    this.infom = response.data[12];
                    this.infon = response.data[13];
                    this.infoo = response.data[14];
                    this.infop = response.data[15];
                    this.infoq = response.data[16];
                    this.infor = response.data[17];
                    this.infos = response.data[18];
                    this.infot = response.data[19];
                    if(response.data[0].status == 'go'){
                      $(".go1").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                      $(".ready1").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end1").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[0].status == 'ready'){
                      $(".ready1").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
                      $(".go1").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end1").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[0].status == 'end'){
                      $(".end1").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
                      $(".go1").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".ready1").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    if(response.data[1].status == 'go'){
                      $(".go2").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                      $(".ready2").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end2").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[1].status == 'ready'){
                      $(".ready2").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
                      $(".go2").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end2").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[1].status == 'end'){
                      $(".end2").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
                      $(".go2").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".ready2").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    if(response.data[2].status == 'go'){
                      $(".go3").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                      $(".ready3").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end3").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[2].status == 'ready'){
                      $(".ready3").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
                      $(".go3").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end3").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[2].status == 'end'){
                      $(".end3").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
                      $(".go3").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".ready3").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    if(response.data[3].status == 'go'){
                      $(".go4").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                      $(".ready4").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end4").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[3].status == 'ready'){
                      $(".ready4").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
                      $(".go4").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end4").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[3].status == 'end'){
                      $(".end4").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
                      $(".go4").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".ready4").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    if(response.data[4].status == 'go'){
                      $(".go5").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                      $(".ready5").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end5").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[4].status == 'ready'){
                      $(".ready5").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
                      $(".go5").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end5").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[4].status == 'end'){
                      $(".end5").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
                      $(".go5").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".ready5").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    if(response.data[5].status == 'go'){
                      $(".go6").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                      $(".ready6").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end6").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[5].status == 'ready'){
                      $(".ready6").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
                      $(".go6").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end6").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[5].status == 'end'){
                      $(".end6").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
                      $(".go6").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".ready6").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    if(response.data[6].status == 'go'){
                      $(".go7").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                      $(".ready7").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end7").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[6].status == 'ready'){
                      $(".ready7").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
                      $(".go7").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end7").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[6].status == 'end'){
                      $(".end7").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
                      $(".go7").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".ready7").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    if(response.data[7].status == 'go'){
                      $(".go8").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                      $(".ready8").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end8").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[7].status == 'ready'){
                      $(".ready8").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
                      $(".go8").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end8").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[7].status == 'end'){
                      $(".end8").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
                      $(".go8").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".ready8").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    if(response.data[8].status == 'go'){
                      $(".go9").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                      $(".ready9").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end9").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[8].status == 'ready'){
                      $(".ready9").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
                      $(".go9").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end9").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[8].status == 'end'){
                      $(".end9").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
                      $(".go9").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".ready9").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    if(response.data[9].status == 'go'){
                      $(".go10").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                      $(".ready10").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end10").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[9].status == 'ready'){
                      $(".ready10").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
                      $(".go10").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end10").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[9].status == 'end'){
                      $(".end10").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
                      $(".go10").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".ready10").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    if(response.data[10].status == 'go'){
                      $(".go11").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                      $(".ready11").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end11").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[10].status == 'ready'){
                      $(".ready11").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
                      $(".go11").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end11").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[10].status == 'end'){
                      $(".end11").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
                      $(".go11").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".ready11").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    if(response.data[11].status == 'go'){
                      $(".go12").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                      $(".ready12").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end12").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[11].status == 'ready'){
                      $(".ready12").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
                      $(".go12").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end12").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[11].status == 'end'){
                      $(".end12").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
                      $(".go12").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".ready12").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    if(response.data[12].status == 'go'){
                      $(".go13").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                      $(".ready13").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end13").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[12].status == 'ready'){
                      $(".ready13").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
                      $(".go13").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end13").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[12].status == 'end'){
                      $(".end13").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
                      $(".go13").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".ready13").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    if(response.data[13].status == 'go'){
                      $(".go14").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                      $(".ready14").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end14").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[13].status == 'ready'){
                      $(".ready14").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
                      $(".go14").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end14").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[13].status == 'end'){
                      $(".end14").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
                      $(".go14").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".ready14").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    if(response.data[14].status == 'go'){
                      $(".go15").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                      $(".ready15").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end15").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[14].status == 'ready'){
                      $(".ready15").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
                      $(".go15").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end15").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[14].status == 'end'){
                      $(".end15").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
                      $(".go15").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".ready15").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    if(response.data[15].status == 'go'){
                      $(".go16").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                      $(".ready16").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end16").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[15].status == 'ready'){
                      $(".ready16").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
                      $(".go16").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end16").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[15].status == 'end'){
                      $(".end16").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
                      $(".go16").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".ready16").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    if(response.data[16].status == 'go'){
                      $(".go17").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                      $(".ready17").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end17").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[16].status == 'ready'){
                      $(".ready17").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
                      $(".go17").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end17").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[16].status == 'end'){
                      $(".end17").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
                      $(".go17").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".ready17").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    if(response.data[17].status == 'go'){
                      $(".go18").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                      $(".ready18").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end18").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[17].status == 'ready'){
                      $(".ready18").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
                      $(".go18").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end18").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[17].status == 'end'){
                      $(".end18").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
                      $(".go18").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".ready18").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    if(response.data[18].status == 'go'){
                      $(".go19").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                      $(".ready19").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end19").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[18].status == 'ready'){
                      $(".ready19").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
                      $(".go19").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end19").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[18].status == 'end'){
                      $(".end19").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
                      $(".go19").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".ready19").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    if(response.data[19].status == 'go'){
                      $(".go20").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                      $(".ready20").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end20").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[19].status == 'ready'){
                      $(".ready20").css('background', 'yellow').css('color', 'black').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px yellow');
                      $(".go20").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".end20").css('background', 'none').css('color', 'red').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    else if(response.data[19].status == 'end'){
                      $(".end20").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
                      $(".go20").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                      $(".ready20").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                    }
                    this.TimeCountA();
                    this.TimeCountB();
                    this.TimeCountC();
                    this.TimeCountD();
                    this.TimeCountE();
                    this.TimeCountF();
                    this.TimeCountG();
                    this.TimeCountH();
                    this.TimeCountI();
                    this.TimeCountJ();
                    this.TimeCountK();
                    this.TimeCountL();
                    this.TimeCountM();
                    this.TimeCountN();
                    this.TimeCountO();
                    this.TimeCountP();
                    this.TimeCountQ();
                    this.TimeCountR();
                    this.TimeCountS();
                    this.TimeCountT();
                });
            },
      EndStart() {
        $(".start").hide();
        $(".start-back").hide();
        axios.get('/end/start').then(response => {

        });
      },
      Start() {
        axios.get('/start/date').then(response => {
            this.start = response.data;
            this.checkStart();
        });
      },
      checkStart() {
        if(this.start == '-'){
          $(".start").hide();
          $(".start-back").hide();
        }
        else {
          $(".start").show();
          $(".start-back").show();
        }
      },
      fetchSignals() {
      		  axios.get('/fetch/signal/free').then(response => {
					 this.signals = response.data.a.symbol;
                     this.chartA();
          //  alert(response.data.a.name);
					//  this.fetchSignal();
              });
        },
        Check() {
          let id = localStorage.getItem('auth');
          let token = localStorage.getItem('token');
            axios.get('/fetch/user/data/' + id + '/' + token).then(response => {
                if(response.data.role == 1){
                    this.auth = true;
                }
                else if(response.data.role == 20){
                    this.auth = true;
                }
                else if(localStorage.getItem('auth') == null) {
                    this.auth = false;
                    window.location = '/login';
                }
                else {
                    // this.AutoLogin();
                }
            });
        },
        AutoLogin() {
            let formData = new FormData();
            formData.append('id', localStorage.getItem('auth'));
            formData.append('token', localStorage.getItem('token'));
            axios.post('/login/auto', formData).then(response => {
                // this.Check();
            });
        },
		fetchDate() {
            let id = localStorage.getItem('auth');
            // let token = localStorage.getItem('token');
            axios.get('/fetch/date/' + id).then(response => {
                this.time = response.data.time;
                this.date = response.data.date;
                this.city = response.data.city;
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
        fetchSignal() {
			let ehem = 'USD';
			let formData = new FormData();
			formData.append('name', this.signals.a.name);
			formData.append('pips', this.signals.a.pips);
            axios.get('/signal', formData).then(response => {

				this.signala = response.data.daya.rates.USD;
				this.signalb = response.data.dayb.rates.USD;
				this.signalc = response.data.dayc.rates.USD;
				this.signald = response.data.dayd.rates.USD;
				this.signale = response.data.daye.rates.USD;
				this.signalf = response.data.dayf.rates.USD;
				this.signalg = response.data.dayg.rates.USD;
				this.signalh = response.data.dayh.rates.USD;
				this.signali = response.data.dayi.rates.USD;
				this.signalj = response.data.dayj.rates.USD;
				this.signalk = response.data.dayk.rates.USD;
				this.signall = response.data.dayl.rates.USD;
				this.signalm = response.data.daym.rates.USD;
				this.signaln = response.data.dayn.rates.USD;
				this.signalo = response.data.dayo.rates.USD;
				this.signalp = response.data.dayp.rates.USD;
				this.signalq = response.data.dayq.rates.USD;
				this.signalr = response.data.dayr.rates.USD;
				this.signals = response.data.days.rates.USD;
				this.signalt = response.data.dayt.rates.USD;
				this.signalu = response.data.dayu.rates.USD;
				this.signalv = response.data.dayv.rates.USD;
				this.signalw = response.data.dayw.rates.USD;
				this.signalx = response.data.dayx.rates.USD;
				this.signaly = response.data.dayy.rates.USD;
				this.signalz = response.data.dayz.rates.USD;
				this.signalaa = response.data.dayaa.rates.USD;
				this.signalbb = response.data.dayabbrates.USD;
				this.signalcc = response.data.daya.ccates.USD;
				this.signaldd = response.data.daya.rddtes.USD;
                // this.signalb = response.data.dayb.this.signals.a.pips;

                console.log(this.signal);
            });
        },

        fetchRate() {
            axios.get('/fetch/rate/user').then(response => {

                if(response.data == 'free'){
          this.diamonda = true;
					this.diamondlocka = false;
					this.diamondb = true;
					this.diamondlockb = false;
          this.diamondc = true;
					this.diamondlockc = false;
					this.diamondd = true;
					this.diamondlockd = false;
					this.diamonde = true;
					this.diamondlocke = false;
					this.diamondf = true;
					this.diamondlockf = false;
					this.diamondg = true;
					this.diamondlockg = false;
					this.diamondh = true;
					this.diamondlockh = false;
					this.silvera = true;
					this.silverlocka = false;
					this.silverb = true;
					this.silverlockb = false;
          this.golda = true;
					this.goldlocka = false;
					this.goldb = true;
					this.goldlockb = false;
					this.goldc = true;
					this.goldlockc = false;
					this.goldd = true;
					this.goldlockd = false;
                }
                else if(response.data == 'silver'){
          this.diamonda = true;
					this.diamondlocka = false;
					this.diamondb = true;
					this.diamondlockb = false;
          this.diamondc = true;
					this.diamondlockc = false;
					this.diamondd = true;
					this.diamondlockd = false;
					this.diamonde = true;
					this.diamondlocke = false;
					this.diamondf = true;
					this.diamondlockf = false;
					this.diamondg = true;
					this.diamondlockg = false;
					this.diamondh = true;
					this.diamondlockh = false;
					this.silvera = false;
					this.silverlocka = true;
					this.silverb = false;
					this.silverlockb = true;
          this.golda = true;
					this.goldlocka = false;
					this.goldb = true;
					this.goldlockb = false;
					this.goldc = true;
					this.goldlockc = false;
					this.goldd = true;
					this.goldlockd = false;
                }

                else if(response.data == 'gold'){
					this.diamonda = true;
					this.diamondlocka = false;
					this.diamondb = true;
					this.diamondlockb = false;
          this.diamondc = true;
					this.diamondlockc = false;
					this.diamondd = true;
					this.diamondlockd = false;
					this.diamonde = true;
					this.diamondlocke = false;
					this.diamondf = true;
					this.diamondlockf = false;
					this.diamondg = true;
					this.diamondlockg = false;
					this.diamondh = true;
					this.diamondlockh = false;
					this.silvera = false;
					this.silverlocka = true;
					this.silverb = false;
					this.silverlockb = true;
          this.golda = false;
					this.goldlocka = true;
					this.goldb = false;
					this.goldlockb = true;
					this.goldc = false;
					this.goldlockc = true;
					this.goldd = false;
					this.goldlockd = true;
                }
                else if(response.data == 'diomond'){
          this.diamonda = false;
					this.diamondlocka = true;
					this.diamondb = false;
					this.diamondlockb = true;
          this.diamondc = false;
					this.diamondlockc = true;
					this.diamondd = false;
					this.diamondlockd = true;
					this.diamonde = false;
					this.diamondlocke = true;
					this.diamondf = false;
					this.diamondlockf = true;
					this.diamondg = false;
					this.diamondlockg = true;
					this.diamondh = false;
					this.diamondlockh = true;
					this.silvera = false;
					this.silverlocka = true;
					this.silverb = false;
					this.silverlockb = true;
          this.golda = false;
					this.goldlocka = true;
					this.goldb = false;
					this.goldlockb = true;
					this.goldc = false;
					this.goldlockc = true;
					this.goldd = false;
					this.goldlockd = true;
                }
            }).catch(error => {
              window.location = '/';
            });
        },
        GoB(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/change/status', formData).then(response => {
                $(".go2").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                $(".ready2").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
            });
        },
        GoC(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/change/status', formData).then(response => {
                $(".go3").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                $(".ready3").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
            });
        },
        GoD(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/change/status', formData).then(response => {
                $(".go4").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                $(".ready4").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
            });
        },
        GoE(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/change/status', formData).then(response => {
                $(".go5").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                $(".ready5").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
            });
        },
        GoF(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/change/status', formData).then(response => {
                $(".go6").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                $(".ready6").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
            });
        },
        GoG(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/change/status', formData).then(response => {
                $(".go7").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                $(".ready7").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
            });
        },
        GoH(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/change/status', formData).then(response => {
                $(".go8").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                $(".ready8").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
            });
        },
        GoI(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/change/status', formData).then(response => {
                $(".go9").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                $(".ready9").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
            });
        },
        GoJ(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/change/status', formData).then(response => {
                $(".go10").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                $(".ready10").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
            });
        },
        GoK(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/change/status', formData).then(response => {
                $(".go11").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                $(".ready11").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
            });
        },
        GoL(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/change/status', formData).then(response => {
                $(".go12").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                $(".ready12").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
            });
        },
        GoM(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/change/status', formData).then(response => {
                $(".go13").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                $(".ready13").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
            });
        },
        GoN(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/change/status', formData).then(response => {
                $(".go14").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                $(".ready14").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
            });
        },
        GoO(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/change/status', formData).then(response => {
                $(".go15").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                $(".ready15").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
            });
        },
        GoP(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/change/status', formData).then(response => {
                $(".go16").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                $(".ready16").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
            });
        },
        GoQ(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/change/status', formData).then(response => {
                $(".go17").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                $(".ready17").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
            });
        },
        GoR(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/change/status', formData).then(response => {
                $(".go18").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                $(".ready18").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
            });
        },
        GoS(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/change/status', formData).then(response => {
                $(".go19").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                $(".ready19").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
            });
        },
        GoT(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/change/status', formData).then(response => {
                $(".go20").css('background', 'green').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px green');
                $(".ready20").css('background', 'none').css('color', 'yellow').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
            });
        },
        EndB(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/changes/status', formData).then(response => {
                $(".go2").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                $(".end2").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
            });
        },
        EndC(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/changes/status', formData).then(response => {
                $(".go3").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                $(".end3").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
            });
        },
        EndD(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/changes/status', formData).then(response => {
                $(".go4").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                $(".end4").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
            });
        },
        EndE(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/changes/status', formData).then(response => {
                $(".go5").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                $(".end5").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
            });
        },
        EndF(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/changes/status', formData).then(response => {
                $(".go6").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                $(".end6").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
            });
        },
        EndG(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/changes/status', formData).then(response => {
                $(".go7").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                $(".end7").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
            });
        },
        EndH(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/changes/status', formData).then(response => {
                $(".go8").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                $(".end8").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
            });
        },
        EndI(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/changes/status', formData).then(response => {
                $(".go9").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                $(".end9").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
            });
        },
        EndJ(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/changes/status', formData).then(response => {
                $(".go10").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                $(".end10").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
            });
        },
        EndK(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/changes/status', formData).then(response => {
                $(".go11").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                $(".end11").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
            });
        },
        EndL(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/changes/status', formData).then(response => {
                $(".go12").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                $(".end12").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
            });
        },
        EndM(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/changes/status', formData).then(response => {
                $(".go13").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                $(".end13").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
            });
        },
        EndN(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/changes/status', formData).then(response => {
                $(".go14").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                $(".end14").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
            });
        },
        EndO(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/changes/status', formData).then(response => {
                $(".go15").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                $(".end15").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
            });
        },
        EndP(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/changes/status', formData).then(response => {
                $(".go16").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                $(".end16").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
            });
        },
        EndQ(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/changes/status', formData).then(response => {
                $(".go17").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                $(".end17").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
            });
        },
        EndR(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/changes/status', formData).then(response => {
                $(".go18").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                $(".end18").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
            });
        },
        EndS(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/changes/status', formData).then(response => {
                $(".go19").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                $(".end19").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
            });
        },
        EndT(num){
            let formData = new FormData();
            formData.append('number', num);
            axios.post('/changes/status', formData).then(response => {
                $(".go20").css('background', 'none').css('color', 'green').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', 'none');
                $(".end20").css('background', 'red').css('color', 'white').css('border', '2px solid white').css('margin', '3px 0 3px 0').css('font-size', '14px').css('box-shadow', '0 0 10px 0px red');
            });
        },

        TimeCountB(){
            var tbs = this.infob.hour;
            setInterval(function () {
                var sum = document.getElementById('mines2');
                // var after = new Date(tbs.replace(/-/g, '/'));
                // var now = new Date().getTime();
                var now = moment.unix(1591210960);
                var after = moment().unix();
                var mines = after - now;

                var days = Math.floor(mines / (1000 * 60 * 60 * 24));
                var hours = Math.floor(mines % (1000 * 60 * 60 * 24))
                var minutes = Math.floor(mines % (1000 * 60 * 60) / (1000 * 60));
                var seconds = Math.floor(mines % (1000 * 60) / (1000));
                if(minutes != '-1' && seconds != '-1'){
                    sum.innerHTML = minutes + ':' + seconds;
                }
                if(minutes < 0 && seconds < 0) {
                    $("#mines2").hide();
                    $("#plus2").show();
                }
            }, 1000);
        },
        TimeCountC(){
            var tbs = this.infoc.hour;
            setInterval(function () {
                var sum = document.getElementById('mines3');
                var after = new Date(tbs.replace(/-/g, '/'));
                var now = new Date().getTime();
                var mines = after - now;

                var days = Math.floor(mines / (1000 * 60 * 60 * 24));
                var hours = Math.floor(mines % (1000 * 60 * 60 * 24))
                var minutes = Math.floor(mines % (1000 * 60 * 60) / (1000 * 60));
                var seconds = Math.floor(mines % (1000 * 60) / (1000));
                if(minutes != '-1' && seconds != '-1'){
                    sum.innerHTML = minutes + ':' + seconds;
                }
                if(minutes < 0 && seconds < 0) {
                    $("#mines3").hide();
                    $("#plus3").show();
                }
            }, 1000);
        },
        TimeCountD(){
            var tbs = this.infod.hour;
            setInterval(function () {
                var sum = document.getElementById('mines4');
                var after = new Date(tbs.replace(/-/g, '/'));
                var now = new Date().getTime();
                var mines = after - now;

                var days = Math.floor(mines / (1000 * 60 * 60 * 24));
                var hours = Math.floor(mines % (1000 * 60 * 60 * 24))
                var minutes = Math.floor(mines % (1000 * 60 * 60) / (1000 * 60));
                var seconds = Math.floor(mines % (1000 * 60) / (1000));
                if(minutes != '-1' && seconds != '-1'){
                    sum.innerHTML = minutes + ':' + seconds;
                }
                if(minutes < 0 && seconds < 0) {
                    $("#mines4").hide();
                    $("#plus4").show();
                }
            }, 1000);
        },
        TimeCountE(){
            var tbs = this.infoe.hour;
            setInterval(function () {
                var sum = document.getElementById('mines5');
                var after = new Date(tbs.replace(/-/g, '/'));
                var now = new Date().getTime();
                var mines = after - now;

                var days = Math.floor(mines / (1000 * 60 * 60 * 24));
                var hours = Math.floor(mines % (1000 * 60 * 60 * 24))
                var minutes = Math.floor(mines % (1000 * 60 * 60) / (1000 * 60));
                var seconds = Math.floor(mines % (1000 * 60) / (1000));
                if(minutes != '-1' && seconds != '-1'){
                    sum.innerHTML = minutes + ':' + seconds;
                }
                if(minutes < 0 && seconds < 0) {
                    $("#mines5").hide();
                    $("#plus5").show();
                }
            }, 1000);
        },
        TimeCountF(){
            var tbs = this.infof.hour;
            setInterval(function () {
                var sum = document.getElementById('mines6');
                var after = new Date(tbs.replace(/-/g, '/'));
                var now = new Date().getTime();
                var mines = after - now;

                var days = Math.floor(mines / (1000 * 60 * 60 * 24));
                var hours = Math.floor(mines % (1000 * 60 * 60 * 24))
                var minutes = Math.floor(mines % (1000 * 60 * 60) / (1000 * 60));
                var seconds = Math.floor(mines % (1000 * 60) / (1000));
                if(minutes != '-1' && seconds != '-1'){
                    sum.innerHTML = minutes + ':' + seconds;
                }
                if(minutes < 0 && seconds < 0) {
                    $("#mines6").hide();
                    $("#plus6").show();
                }
            }, 1000);
        },
        TimeCountG(){
            var tbs = this.infog.hour;
            setInterval(function () {
                var sum = document.getElementById('mines7');
                var after = new Date(tbs.replace(/-/g, '/'));
                var now = new Date().getTime();
                var mines = after - now;

                var days = Math.floor(mines / (1000 * 60 * 60 * 24));
                var hours = Math.floor(mines % (1000 * 60 * 60 * 24))
                var minutes = Math.floor(mines % (1000 * 60 * 60) / (1000 * 60));
                var seconds = Math.floor(mines % (1000 * 60) / (1000));
                if(minutes != '-1' && seconds != '-1'){
                    sum.innerHTML = minutes + ':' + seconds;
                }
                if(minutes < 0 && seconds < 0) {
                    $("#mines7").hide();
                    $("#plus7").show();
                }
            }, 1000);
        },
        TimeCountH(){
            var tbs = this.infoh.hour;
            setInterval(function () {
                var sum = document.getElementById('mines8');
                var after = new Date(tbs.replace(/-/g, '/'));
                var now = new Date().getTime();
                var mines = after - now;

                var days = Math.floor(mines / (1000 * 60 * 60 * 24));
                var hours = Math.floor(mines % (1000 * 60 * 60 * 24))
                var minutes = Math.floor(mines % (1000 * 60 * 60) / (1000 * 60));
                var seconds = Math.floor(mines % (1000 * 60) / (1000));
                if(minutes != '-1' && seconds != '-1'){
                    sum.innerHTML = minutes + ':' + seconds;
                }
                if(minutes < 0 && seconds < 0) {
                    $("#mines8").hide();
                    $("#plus8").show();
                }
            }, 1000);
        },
        TimeCountI(){
            var tbs = this.infoi.hour;
            setInterval(function () {
                var sum = document.getElementById('mines9');
                var after = new Date(tbs.replace(/-/g, '/'));
                var now = new Date().getTime();
                var mines = after - now;

                var days = Math.floor(mines / (1000 * 60 * 60 * 24));
                var hours = Math.floor(mines % (1000 * 60 * 60 * 24))
                var minutes = Math.floor(mines % (1000 * 60 * 60) / (1000 * 60));
                var seconds = Math.floor(mines % (1000 * 60) / (1000));
                if(minutes != '-1' && seconds != '-1'){
                    sum.innerHTML = minutes + ':' + seconds;
                }
                if(minutes < 0 && seconds < 0) {
                    $("#mines9").hide();
                    $("#plus9").show();
                }
            }, 1000);
        },
        TimeCountJ(){
            var tbs = this.infoj.hour;
            setInterval(function () {
                var sum = document.getElementById('mines10');
                var after = new Date(tbs.replace(/-/g, '/'));
                var now = new Date().getTime();
                var mines = after - now;

                var days = Math.floor(mines / (1000 * 60 * 60 * 24));
                var hours = Math.floor(mines % (1000 * 60 * 60 * 24))
                var minutes = Math.floor(mines % (1000 * 60 * 60) / (1000 * 60));
                var seconds = Math.floor(mines % (1000 * 60) / (1000));
                if(minutes != '-1' && seconds != '-1'){
                    sum.innerHTML = minutes + ':' + seconds;
                }
                if(minutes < 0 && seconds < 0) {
                    $("#mines10").hide();
                    $("#plus10").show();
                }
            }, 1000);
        },
        TimeCountK(){
            var tbs = this.infok.hour;
            setInterval(function () {
                var sum = document.getElementById('mines11');
                var after = new Date(tbs.replace(/-/g, '/'));
                var now = new Date().getTime();
                var mines = after - now;

                var days = Math.floor(mines / (1000 * 60 * 60 * 24));
                var hours = Math.floor(mines % (1000 * 60 * 60 * 24))
                var minutes = Math.floor(mines % (1000 * 60 * 60) / (1000 * 60));
                var seconds = Math.floor(mines % (1000 * 60) / (1000));
                if(minutes != '-1' && seconds != '-1'){
                    sum.innerHTML = minutes + ':' + seconds;
                }
                if(minutes < 0 && seconds < 0) {
                    $("#mines11").hide();
                    $("#plus11").show();
                }
            }, 1000);
        },
        TimeCountL(){
            var tbs = this.infol.hour;
            setInterval(function () {
                var sum = document.getElementById('mines12');
                var after = new Date(tbs.replace(/-/g, '/'));
                var now = new Date().getTime();
                var mines = after - now;

                var days = Math.floor(mines / (1000 * 60 * 60 * 24));
                var hours = Math.floor(mines % (1000 * 60 * 60 * 24))
                var minutes = Math.floor(mines % (1000 * 60 * 60) / (1000 * 60));
                var seconds = Math.floor(mines % (1000 * 60) / (1000));
                if(minutes != '-1' && seconds != '-1'){
                    sum.innerHTML = minutes + ':' + seconds;
                }
                if(minutes < 0 && seconds < 0) {
                    $("#mines12").hide();
                    $("#plus12").show();
                }
            }, 1000);
        },
        TimeCountM(){
            var tbs = this.infom.hour;
            setInterval(function () {
                var sum = document.getElementById('mines13');
                var after = new Date(tbs.replace(/-/g, '/'));
                var now = new Date().getTime();
                var mines = after - now;

                var days = Math.floor(mines / (1000 * 60 * 60 * 24));
                var hours = Math.floor(mines % (1000 * 60 * 60 * 24))
                var minutes = Math.floor(mines % (1000 * 60 * 60) / (1000 * 60));
                var seconds = Math.floor(mines % (1000 * 60) / (1000));
                if(minutes != '-1' && seconds != '-1'){
                    sum.innerHTML = minutes + ':' + seconds;
                }
                if(minutes < 0 && seconds < 0) {
                    $("#mines13").hide();
                    $("#plus13").show();
                }
            }, 1000);
        },
        TimeCountN(){
            var tbs = this.infon.hour;
            setInterval(function () {
                var sum = document.getElementById('mines14');
                var after = new Date(tbs.replace(/-/g, '/'));
                var now = new Date().getTime();
                var mines = after - now;

                var days = Math.floor(mines / (1000 * 60 * 60 * 24));
                var hours = Math.floor(mines % (1000 * 60 * 60 * 24))
                var minutes = Math.floor(mines % (1000 * 60 * 60) / (1000 * 60));
                var seconds = Math.floor(mines % (1000 * 60) / (1000));
                if(minutes != '-1' && seconds != '-1'){
                    sum.innerHTML = minutes + ':' + seconds;
                }
                if(minutes < 0 && seconds < 0) {
                    $("#mines14").hide();
                    $("#plus14").show();
                }
            }, 1000);
        },
        TimeCountO(){
            var tbs = this.infoo.hour;
            setInterval(function () {
                var sum = document.getElementById('mines15');
                var after = new Date(tbs.replace(/-/g, '/'));
                var now = new Date().getTime();
                var mines = after - now;

                var days = Math.floor(mines / (1000 * 60 * 60 * 24));
                var hours = Math.floor(mines % (1000 * 60 * 60 * 24))
                var minutes = Math.floor(mines % (1000 * 60 * 60) / (1000 * 60));
                var seconds = Math.floor(mines % (1000 * 60) / (1000));
                if(minutes != '-1' && seconds != '-1'){
                    sum.innerHTML = minutes + ':' + seconds;
                }
                if(minutes < 0 && seconds < 0) {
                    $("#mines15").hide();
                    $("#plus15").show();
                }
            }, 1000);
        },
        TimeCountP(){
            var tbs = this.infop.hour;
            setInterval(function () {
                var sum = document.getElementById('mines16');
                var after = new Date(tbs.replace(/-/g, '/'));
                var now = new Date().getTime();
                var mines = after - now;

                var days = Math.floor(mines / (1000 * 60 * 60 * 24));
                var hours = Math.floor(mines % (1000 * 60 * 60 * 24))
                var minutes = Math.floor(mines % (1000 * 60 * 60) / (1000 * 60));
                var seconds = Math.floor(mines % (1000 * 60) / (1000));
                if(minutes != '-1' && seconds != '-1'){
                    sum.innerHTML = minutes + ':' + seconds;
                }
                if(minutes < 0 && seconds < 0) {
                    $("#mines16").hide();
                    $("#plus16").show();
                }
            }, 1000);
        },
        TimeCountQ(){
            var tbs = this.infoq.hour;
            setInterval(function () {
                var sum = document.getElementById('mines17');
                var after = new Date(tbs.replace(/-/g, '/'));
                var now = new Date().getTime();
                var mines = after - now;

                var days = Math.floor(mines / (1000 * 60 * 60 * 24));
                var hours = Math.floor(mines % (1000 * 60 * 60 * 24))
                var minutes = Math.floor(mines % (1000 * 60 * 60) / (1000 * 60));
                var seconds = Math.floor(mines % (1000 * 60) / (1000));
                if(minutes != '-1' && seconds != '-1'){
                    sum.innerHTML = minutes + ':' + seconds;
                }
                if(minutes < 0 && seconds < 0) {
                    $("#mines17").hide();
                    $("#plus17").show();
                }
            }, 1000);
        },
        TimeCountR(){
            var tbs = this.infor.hour;
            setInterval(function () {
                var sum = document.getElementById('mines18');
                var after = new Date(tbs.replace(/-/g, '/'));
                var now = new Date().getTime();
                var mines = after - now;

                var days = Math.floor(mines / (1000 * 60 * 60 * 24));
                var hours = Math.floor(mines % (1000 * 60 * 60 * 24))
                var minutes = Math.floor(mines % (1000 * 60 * 60) / (1000 * 60));
                var seconds = Math.floor(mines % (1000 * 60) / (1000));
                if(minutes != '-1' && seconds != '-1'){
                    sum.innerHTML = minutes + ':' + seconds;
                }
                if(minutes < 0 && seconds < 0) {
                    $("#mines18").hide();
                    $("#plus18").show();
                }
            }, 1000);
        },
        TimeCountS(){
            var tbs = this.infos.hour;
            setInterval(function () {
                var sum = document.getElementById('mines19');
                var after = new Date(tbs.replace(/-/g, '/'));
                var now = new Date().getTime();
                var mines = after - now;

                var days = Math.floor(mines / (1000 * 60 * 60 * 24));
                var hours = Math.floor(mines % (1000 * 60 * 60 * 24))
                var minutes = Math.floor(mines % (1000 * 60 * 60) / (1000 * 60));
                var seconds = Math.floor(mines % (1000 * 60) / (1000));
                if(minutes != '-1' && seconds != '-1'){
                    sum.innerHTML = minutes + ':' + seconds;
                }
                if(minutes < 0 && seconds < 0) {
                    $("#mines19").hide();
                    $("#plus19").show();
                }
            }, 1000);
        },
        TimeCountT(){
            var tbs = this.infot.hour;
            setInterval(function () {
                var sum = document.getElementById('mines20');
                var after = new Date(tbs.replace(/-/g, '/'));
                var now = new Date().getTime();
                var mines = after - now;

                var days = Math.floor(mines / (1000 * 60 * 60 * 24));
                var hours = Math.floor(mines % (1000 * 60 * 60 * 24))
                var minutes = Math.floor(mines % (1000 * 60 * 60) / (1000 * 60));
                var seconds = Math.floor(mines % (1000 * 60) / (1000));
                if(minutes != '-1' && seconds != '-1'){
                    sum.innerHTML = minutes + ':' + seconds;
                }
                if(minutes < 0 && seconds < 0) {
                    $("#mines20").hide();
                    $("#plus20").show();
                }
            }, 1000);
        },


    },
}
</script>
<style scoped>
@media(max-width:767px){
	.responsive-pos {
		display: block;
		background:#131722
  }
  .start {
    background:white;
    padding: 35px;
    border-radius:15px;
    width:100%;
    position:fixed;
    left:50%;
    top:50%;
    transform:translate(-50%, -50%);
    z-index:30;
  }
}
@media(min-width:768px){
	.responsive-pos {
		display: flex;
		background:#131722
  }
  .start {
    background:white;
    padding: 35px;
    border-radius:15px;
    position:fixed;
    left:50%;
    top:50%;
    transform:translate(-50%, -50%);
    z-index:30;
  }
}
    .sett {
        color: black;
        opacity: 0.75;
    }
    .sett:hover {
        color: black;
        opacity: 0.75;
    }
	.canvasjs-chart-credit {
		display: none;
	}

</style>
