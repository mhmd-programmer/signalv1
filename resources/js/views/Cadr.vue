<template>
    <div>
        <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:25px">
                <div class="modal-header">
                <button type="button" class="close" style="padding:1rem 1rem;margin:0" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="position:absolute;left:50%;transform:translateX(-50%);top:8%;opacity:0.8;">{{signals.a.name}} / {{signals.a.pips}}</h4>
                <img src="/img/usd.jpg" class="img-fluid" style="width:21px;border-radius:10px;position:absolute;left:25%;transform:translate(-50%, 10px);top:13%;">
                </div>
                <div class="modal-body">
					
                        <div class="card card-default">
							<div class="card card-header" style="text-align:center;border:none;">
									{{datea}} | {{citya}} | {{timea}}
							</div>
							<div class="card card-body" :style="'text-align:center;background: ' + signals.a.status">
								<p style="color:white;font-size:14px;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%);padding:0;border-radius:16px;display:contents;">Buy Signal {{signals.a.pip}}pip</p><br>
							</div>
							<div class="card card-footer" style="border:none">
								<span><span style="display:block;text-align:center">Price: {{signals.a.price}}</span><span class="stop">Stop Loss: {{signals.a.stop}}</span><span class="lost">Stop Profit: {{signals.a.profit}}</span></span>
							</div>
						</div>
                </div>
                
            </div>
        </div>
        </div>
        <div class="modal fade" id="myModal1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:25px">
                <div class="modal-header">
                <button type="button" class="close" style="padding:1rem 1rem;margin:0" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="position:absolute;left:50%;transform:translateX(-50%);top:8%;opacity:0.8;">{{signals.a.name}} / {{signals.a.pips}}</h4>
                <img src="/img/usd.jpg" class="img-fluid" style="width:21px;border-radius:10px;position:absolute;left:25%;transform:translate(-50%, 10px);top:13%;">
                
                </div>
                <div class="modal-body">
					
                        <div class="card card-default">
							<div class="card card-header" style="text-align:center;border:none;">
									{{dateb}} | {{cityb}} | {{timeb}}
							</div>
							<div class="card card-body" :style="'text-align:center;background: ' + signals.a.status">
								<p style="color:white;font-size:14px;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%);padding:0;border-radius:16px;display:contents;">Buy Signal {{signals.a.pip}}pip</p><br>
							</div>
							<div class="card card-footer" style="border:none">
								<span><span style="display:block;text-align:center">Price: {{signals.a.price}}</span><span class="stop">Stop Loss: {{signals.a.stop}}</span><span class="lost">Stop Profit: {{signals.a.profit}}</span></span>
							</div>
						</div>
                </div>
                
            </div>
        </div>
        </div>
        <div class="modal fade" id="myModal2" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:25px">
                <div class="modal-header">
                <button type="button" class="close" style="padding:1rem 1rem;margin:0" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="position:absolute;left:50%;transform:translateX(-50%);top:8%;opacity:0.8;">{{signals.a.name}} / {{signals.a.pips}}</h4>
                <img src="/img/usd.jpg" class="img-fluid" style="width:21px;border-radius:10px;position:absolute;left:25%;transform:translate(-50%, 10px);top:13%;">
                </div>
                <div class="modal-body">
					
                        <div class="card card-default">
							<div class="card card-header" style="text-align:center;border:none;">
									{{datec}} | {{cityc}} | {{timec}}
							</div>
							<div class="card card-body" :style="'text-align:center;background: ' + signals.a.status">
								<p style="color:white;font-size:14px;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%);padding:0;border-radius:16px;display:contents;">Buy Signal {{signals.a.pip}}pip</p><br>
							</div>
							<div class="card card-footer" style="border:none">
								<span><span class="prifor">price: {{signals.a.price}}</span><span class="stop">Stop Loss: {{signals.a.stop}}</span><span class="lost">Stop Profit: {{signals.a.profit}}</span></span>
							</div>
						</div>
                </div>
                
            </div>
        </div>
        </div>
        <div class="modal fade" id="myModal3" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:25px">
                <div class="modal-header">
                <button type="button" class="close" style="padding:1rem 1rem;margin:0" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="position:absolute;left:50%;transform:translateX(-50%);top:8%;opacity:0.8;">{{signals.a.name}} / {{signals.a.pips}}</h4>
                <img src="/img/usd.jpg" class="img-fluid" style="width:21px;border-radius:10px;position:absolute;left:25%;transform:translate(-50%, 10px);top:13%;">
                </div>
                <div class="modal-body">
					
                        <div class="card card-default">
							<div class="card card-header" style="text-align:center;border:none;">
									{{dated}} | {{cityd}} | {{timed}}
							</div>
							<div class="card card-body" :style="'text-align:center;background: ' + signals.a.status">
								<p style="color:white;font-size:14px;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%);padding:0;border-radius:16px;display:contents;">Buy Signal {{signals.a.pip}}pip</p><br>
							</div>
							<div class="card card-footer" style="border:none">
								<span><span class="prifor">price: {{signals.a.price}}</span><span class="stop">Stop Loss: {{signals.a.stop}}</span><span class="lost">Stop Profit: {{signals.a.profit}}</span></span>
							</div>
						</div>
                </div>
                
            </div>
        </div>
        </div>
        <div class="modal fade" id="myModal4" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:25px">
                <div class="modal-header">
                <button type="button" class="close" style="padding:1rem 1rem;margin:0" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="position:absolute;left:50%;transform:translateX(-50%);top:8%;opacity:0.8;">{{signals.a.name}} / {{signals.a.pips}}</h4>
                <img src="/img/usd.jpg" class="img-fluid" style="width:21px;border-radius:10px;position:absolute;left:25%;transform:translate(-50%, 10px);top:13%;">
                </div>
                <div class="modal-body">
					
                        <div class="card card-default">
							<div class="card card-header" style="text-align:center;border:none;">
									{{datee}} | {{citye}} | {{timee}}
							</div>
							<div class="card card-body" :style="'text-align:center;background: ' + signals.a.status">
								<p style="color:white;font-size:14px;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%);padding:0;border-radius:16px;display:contents;">Buy Signal {{signals.a.pip}}pip</p><br>
							</div>
							<div class="card card-footer" style="border:none">
								<span><span class="prifor">price: {{signals.a.price}}</span><span class="stop">Stop Loss: {{signals.a.stop}}</span><span class="lost">Stop Profit: {{signals.a.profit}}</span></span>
							</div>
						</div>
                </div>
                
            </div>
        </div>
        </div>
        <div class="modal fade" id="myModal5" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:25px">
                <div class="modal-header">
                <button type="button" class="close" style="padding:1rem 1rem;margin:0" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="position:absolute;left:50%;transform:translateX(-50%);top:8%;opacity:0.8;">{{signals.a.name}} / {{signals.a.pips}}</h4>
                <img src="/img/usd.jpg" class="img-fluid" style="width:21px;border-radius:10px;position:absolute;left:25%;transform:translate(-50%, 10px);top:13%;">
                </div>
                <div class="modal-body">
					
                        <div class="card card-default">
							<div class="card card-header" style="text-align:center;border:none;">
									{{datef}} | {{cityf}} | {{timef}}
							</div>
							<div class="card card-body" :style="'text-align:center;background: ' + signals.a.status">
								<p style="color:white;font-size:14px;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%);padding:0;border-radius:16px;display:contents;">Buy Signal {{signals.a.pip}}pip</p><br>
							</div>
							<div class="card card-footer" style="border:none">
								<span><span class="prifor">price: {{signals.a.price}}</span><span class="stop">Stop Loss: {{signals.a.stop}}</span><span class="lost">Stop Profit: {{signals.a.profit}}</span></span>
							</div>
						</div>
                </div>
                
            </div>
        </div>
        </div>
        <div class="modal fade" id="myModal6" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:25px">
                <div class="modal-header">
                <button type="button" class="close" style="padding:1rem 1rem;margin:0" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="position:absolute;left:50%;transform:translateX(-50%);top:8%;opacity:0.8;">{{signals.a.name}} / {{signals.a.pips}}</h4>
                <img src="/img/usd.jpg" class="img-fluid" style="width:21px;border-radius:10px;position:absolute;left:25%;transform:translate(-50%, 10px);top:13%;">
                </div>
                <div class="modal-body">
					
                        <div class="card card-default">
							<div class="card card-header" style="text-align:center;border:none;">
									{{dateg}} | {{cityg}} | {{timeg}}
							</div>
							<div class="card card-body" :style="'text-align:center;background: ' + signals.a.status">
								<p style="color:white;font-size:14px;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%);padding:0;border-radius:16px;display:contents;">Buy Signal {{signals.a.pip}}pip</p><br>
							</div>
							<div class="card card-footer" style="border:none">
								<span><span class="prifor">price: {{signals.a.price}}</span><span class="stop">Stop Loss: {{signals.a.stop}}</span><span class="lost">Stop Profit: {{signals.a.profit}}</span></span>
							</div>
						</div>
                </div>
                
            </div>
        </div>
        </div>
        <div class="modal fade" id="myModal7" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:25px">
                <div class="modal-header">
                <button type="button" class="close" style="padding:1rem 1rem;margin:0" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="position:absolute;left:50%;transform:translateX(-50%);top:8%;opacity:0.8;">{{signals.a.name}} / {{signals.a.pips}}</h4>
                <img src="/img/usd.jpg" class="img-fluid" style="width:21px;border-radius:10px;position:absolute;left:25%;transform:translate(-50%, 10px);top:13%;">
                </div>
                <div class="modal-body">
					
                        <div class="card card-default">
							<div class="card card-header" style="text-align:center;border:none;">
									{{dateh}} | {{cityh}} | {{timeh}}
							</div>
							<div class="card card-body" :style="'text-align:center;background: ' + signals.a.status">
								<p style="color:white;font-size:14px;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%);padding:0;border-radius:16px;display:contents;">Buy Signal {{signals.a.pip}}pip</p><br>
							</div>
							<div class="card card-footer" style="border:none">
								<span><span class="prifor">price: {{signals.a.price}}</span><span class="stop">Stop Loss: {{signals.a.stop}}</span><span class="lost">Stop Profit: {{signals.a.profit}}</span></span>
							</div>
						</div>
                </div>
                
            </div>
        </div>
        </div>
        <div class="modal fade" id="myModal8" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:25px">
                <div class="modal-header">
                <button type="button" class="close" style="padding:1rem 1rem;margin:0" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="position:absolute;left:50%;transform:translateX(-50%);top:8%;opacity:0.8;">{{signals.a.name}} / {{signals.a.pips}}</h4>
                <img src="/img/usd.jpg" class="img-fluid" style="width:21px;border-radius:10px;position:absolute;left:25%;transform:translate(-50%, 10px);top:13%;">
                </div>
                <div class="modal-body">
					
                        <div class="card card-default">
							<div class="card card-header" style="text-align:center;border:none;">
									{{datei}} | {{cityi}} | {{timei}}
							</div>
							<div class="card card-body" :style="'text-align:center;background: ' + signals.a.status">
								<p style="color:white;font-size:14px;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%);padding:0;border-radius:16px;display:contents;">Buy Signal {{signals.a.pip}}pip</p><br>
							</div>
							<div class="card card-footer" style="border:none">
								<span><span class="prifor">price: {{signals.a.price}}</span><span class="stop">Stop Loss: {{signals.a.stop}}</span><span class="lost">Stop Profit: {{signals.a.profit}}</span></span>
							</div>
						</div>
                </div>
                
            </div>
        </div>
        </div>
        <div class="modal fade" id="myModal9" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:25px">
                <div class="modal-header">
                <button type="button" class="close" style="padding:1rem 1rem;margin:0" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="position:absolute;left:50%;transform:translateX(-50%);top:8%;opacity:0.8;">{{signals.a.name}} / {{signals.a.pips}}</h4>
                <img src="/img/usd.jpg" class="img-fluid" style="width:21px;border-radius:10px;position:absolute;left:25%;transform:translate(-50%, 10px);top:13%;">
                </div>
                <div class="modal-body">
					
                        <div class="card card-default">
							<div class="card card-header" style="text-align:center;border:none;">
									{{datej}} | {{cityj}} | {{timej}}
							</div>
							<div class="card card-body" :style="'text-align:center;background: ' + signals.a.status">
								<p style="color:white;font-size:14px;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%);padding:0;border-radius:16px;display:contents;">Buy Signal {{signals.a.pip}}pip</p><br>
							</div>
							<div class="card card-footer" style="border:none">
								<span><span class="prifor">price: {{signals.a.price}}</span><span class="stop">Stop Loss: {{signals.a.stop}}</span><span class="lost">Stop Profit: {{signals.a.profit}}</span></span>
							</div>
						</div>
                </div>
                
            </div>
        </div>
        </div>
        <div class="modal fade" id="myModal10" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:25px">
                <div class="modal-header">
                <button type="button" class="close" style="padding:1rem 1rem;margin:0" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="position:absolute;left:50%;transform:translateX(-50%);top:8%;opacity:0.8;">{{signals.a.name}} / {{signals.a.pips}}</h4>
                <img src="/img/usd.jpg" class="img-fluid" style="width:21px;border-radius:10px;position:absolute;left:25%;transform:translate(-50%, 10px);top:13%;">
                </div>
                <div class="modal-body">
					
                        <div class="card card-default">
							<div class="card card-header" style="text-align:center;border:none;">
									{{datek}} | {{cityk}} | {{timek}}
							</div>
							<div class="card card-body" :style="'text-align:center;background: ' + signals.a.status">
								<p style="color:white;font-size:14px;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%);padding:0;border-radius:16px;display:contents;">Buy Signal {{signals.a.pip}}pip</p><br>
							</div>
							<div class="card card-footer" style="border:none">
								<span><span class="prifor">price: {{signals.a.price}}</span><span class="stop">Stop Loss: {{signals.a.stop}}</span><span class="lost">Stop Profit: {{signals.a.profit}}</span></span>
							</div>
						</div>
                </div>
                
            </div>
        </div>
        </div>
        <div class="modal fade" id="myModal11" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:25px">
                <div class="modal-header">
                <button type="button" class="close" style="padding:1rem 1rem;margin:0" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="position:absolute;left:50%;transform:translateX(-50%);top:8%;opacity:0.8;">{{signals.a.name}} / {{signals.a.pips}}</h4>
                <img src="/img/usd.jpg" class="img-fluid" style="width:21px;border-radius:10px;position:absolute;left:25%;transform:translate(-50%, 10px);top:13%;">
                </div>
                <div class="modal-body">
					
                        <div class="card card-default">
							<div class="card card-header" style="text-align:center;border:none;">
									{{datel}} | {{cityl}} | {{timel}}
							</div>
							<div class="card card-body" :style="'text-align:center;background: ' + signals.a.status">
								<p style="color:white;font-size:14px;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%);padding:0;border-radius:16px;display:contents;">Buy Signal {{signals.a.pip}}pip</p><br>
							</div>
							<div class="card card-footer" style="border:none">
								<span><span class="prifor">price: {{signals.a.price}}</span><span class="stop">Stop Loss: {{signals.a.stop}}</span><span class="lost">Stop Profit: {{signals.a.profit}}</span></span>
							</div>
						</div>
                </div>
                
            </div>
        </div>
        </div>
        <div class="modal fade" id="myModal12" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:25px">
                <div class="modal-header">
                <button type="button" class="close" style="padding:1rem 1rem;margin:0" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="position:absolute;left:50%;transform:translateX(-50%);top:8%;opacity:0.8;">{{signals.a.name}} / {{signals.a.pips}}</h4>
                <img src="/img/usd.jpg" class="img-fluid" style="width:21px;border-radius:10px;position:absolute;left:25%;transform:translate(-50%, 10px);top:13%;">
                </div>
                <div class="modal-body">
					
                        <div class="card card-default">
							<div class="card card-header" style="text-align:center;border:none;">
									{{datem}} | {{citym}} | {{timem}}
							</div>
							<div class="card card-body" :style="'text-align:center;background: ' + signals.a.status">
								<p style="color:white;font-size:14px;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%);padding:0;border-radius:16px;display:contents;">Buy Signal {{signals.a.pip}}pip</p><br>
							</div>
							<div class="card card-footer" style="border:none">
								<span><span class="prifor">price: {{signals.a.price}}</span><span class="stop">Stop Loss: {{signals.a.stop}}</span><span class="lost">Stop Profit: {{signals.a.profit}}</span></span>
							</div>
						</div>
                </div>
                
            </div>
        </div>
        </div>
        <div class="modal fade" id="myModal13" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:25px">
                <div class="modal-header">
                <button type="button" class="close" style="padding:1rem 1rem;margin:0" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="position:absolute;left:50%;transform:translateX(-50%);top:8%;opacity:0.8;">{{signals.a.name}} / {{signals.a.pips}}</h4>
                <img src="/img/usd.jpg" class="img-fluid" style="width:21px;border-radius:10px;position:absolute;left:25%;transform:translate(-50%, 10px);top:13%;">
                </div>
                <div class="modal-body">
					
                        <div class="card card-default">
							<div class="card card-header" style="text-align:center;border:none;">
									{{daten}} | {{cityn}} | {{timen}}
							</div>
							<div class="card card-body" :style="'text-align:center;background: ' + signals.a.status">
								<p style="color:white;font-size:14px;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%);padding:0;border-radius:16px;display:contents;">Buy Signal {{signals.a.pip}}pip</p><br>
							</div>
							<div class="card card-footer" style="border:none">
								<span><span class="prifor">price: {{signals.a.price}}</span><span class="stop">Stop Loss: {{signals.a.stop}}</span><span class="lost">Stop Profit: {{signals.a.profit}}</span></span>
							</div>
						</div>
                </div>
                
            </div>
        </div>
        </div>
        <div class="modal fade" id="myModal14" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:25px">
                <div class="modal-header">
                <button type="button" class="close" style="padding:1rem 1rem;margin:0" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="position:absolute;left:50%;transform:translateX(-50%);top:8%;opacity:0.8;">{{signals.a.name}} / {{signals.a.pips}}</h4>
                <img src="/img/usd.jpg" class="img-fluid" style="width:21px;border-radius:10px;position:absolute;left:25%;transform:translate(-50%, 10px);top:13%;">
                </div>
                <div class="modal-body">
					
                        <div class="card card-default">
							<div class="card card-header" style="text-align:center;border:none;">
									{{dateo}} | {{cityo}} | {{timeo}}
							</div>
							<div class="card card-body" :style="'text-align:center;background: ' + signals.a.status">
								<p style="color:white;font-size:14px;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%);padding:0;border-radius:16px;display:contents;">Buy Signal {{signals.a.pip}}pip</p><br>
							</div>
							<div class="card card-footer" style="border:none">
								<span><span class="prifor">price: {{signals.a.price}}</span><span class="stop">Stop Loss: {{signals.a.stop}}</span><span class="lost">Stop Profit: {{signals.a.profit}}</span></span>
							</div>
						</div>
                </div>
                
            </div>
        </div>
        </div>
        <div class="modal fade" id="myModal15" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:25px">
                <div class="modal-header">
                <button type="button" class="close" style="padding:1rem 1rem;margin:0" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="position:absolute;left:50%;transform:translateX(-50%);top:8%;opacity:0.8;">{{signals.a.name}} / {{signals.a.pips}}</h4>
                <img src="/img/usd.jpg" class="img-fluid" style="width:21px;border-radius:10px;position:absolute;left:25%;transform:translate(-50%, 10px);top:13%;">
                </div>
                <div class="modal-body">
					
                        <div class="card card-default">
							<div class="card card-header" style="text-align:center;border:none;">
									{{date}} | {{city}} | {{time}}
							</div>
							<div class="card card-body" :style="'text-align:center;background: ' + signals.a.status">
								<p style="color:white;font-size:14px;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%);padding:0;border-radius:16px;display:contents;">Buy Signal {{signals.a.pip}}pip</p><br>
							</div>
							<div class="card card-footer" style="border:none">
								<span><span class="prifor">price: {{signals.a.price}}</span><span class="stop">Stop Loss: {{signals.a.stop}}</span><span class="lost">Stop Profit: {{signals.a.profit}}</span></span>
							</div>
						</div>
                </div>
                
            </div>
        </div>
        </div>
        
    </div>
</template>
<script>
import axios from 'axios';
export default {
    name: 'Cadr',
    data() {
        return {
            signals: [],
            timea: '',
			datea: '',
            citya: '',
            timeb: '',
			dateb: '',
            cityb: '',
            timec: '',
			datec: '',
            cityc: '',
            timed: '',
			dated: '',
            cityd: '',
            timee: '',
			datee: '',
            citye: '',
            timef: '',
			datef: '',
            cityf: '',
            timeg: '',
			dateg: '',
            cityg: '',
            timeh: '',
			dateh: '',
            cityh: '',
            timei: '',
			datei: '',
            cityi: '',
            timej: '',
			datej: '',
            cityj: '',
            timek: '',
			datek: '',
            cityk: '',
            timel: '',
			datel: '',
            cityl: '',
            timem: '',
			datem: '',
            citym: '',
            timen: '',
			daten: '',
            cityn: '',
            timeo: '',
			dateo: '',
			cityo: '',
        }
    },
    mounted() {
        this.fetchSignals();
    },
    methods: {
        OpenEye() {
            alert('Hi')
        },
        fetchDateA() {
            let id = localStorage.getItem('auth');
            let token = localStorage.getItem('token');
            let slug = this.signals.a.id;
            axios.get('/fetch/date/' + id + '/' + slug + '/' + token).then(response => {
                this.timea = response.data.time;
                this.datea = response.data.date;
                this.citya = response.data.city;
            });
        },
        fetchDateB() {
            let id = localStorage.getItem('auth');
            let token = localStorage.getItem('token');
            let slug = this.signals.b.id;
            axios.get('/fetch/date/' + id + '/' + slug + '/' + token).then(response => {
                this.timeb = response.data.time;
                this.dateb = response.data.date;
                this.cityb = response.data.city;
            });
        },
        fetchDateC() {
            let id = localStorage.getItem('auth');
            let token = localStorage.getItem('token');
            let slug = this.signals.c.id;
            axios.get('/fetch/date/' + id + '/' + slug + '/' + token).then(response => {
                this.timec = response.data.time;
                this.datec = response.data.date;
                this.cityc = response.data.city;
            });
        },
        fetchDateD() {
            let id = localStorage.getItem('auth');
            let token = localStorage.getItem('token');
            let slug = this.signals.d.id;
            axios.get('/fetch/date/' + id + '/' + slug + '/' + token).then(response => {
                this.timed = response.data.time;
                this.dated = response.data.date;
                this.cityd = response.data.city;
            });
        },
        fetchDateE() {
            let id = localStorage.getItem('auth');
            let token = localStorage.getItem('token');
            let slug = this.signals.e.id;
            axios.get('/fetch/date/' + id + '/' + slug + '/' + token).then(response => {
                this.timee = response.data.time;
                this.datee = response.data.date;
                this.citye = response.data.city;
            });
        },
        fetchDateF() {
            let id = localStorage.getItem('auth');
            let token = localStorage.getItem('token');
            let slug = this.signals.f.id;
            axios.get('/fetch/date/' + id + '/' + slug + '/' + token).then(response => {
                this.timef = response.data.time;
                this.datef = response.data.date;
                this.cityf = response.data.city;
            });
        },
        fetchDateG() {
            let id = localStorage.getItem('auth');
            let token = localStorage.getItem('token');
            let slug = this.signals.g.id;
            axios.get('/fetch/date/' + id + '/' + slug + '/' + token).then(response => {
                this.timeg = response.data.time;
                this.dateg = response.data.date;
                this.cityg = response.data.city;
            });
        },
        fetchDateH() {
            let id = localStorage.getItem('auth');
            let token = localStorage.getItem('token');
            let slug = this.signals.h.id;
            axios.get('/fetch/date/' + id + '/' + slug + '/' + token).then(response => {
                this.timeh = response.data.time;
                this.dateh = response.data.date;
                this.cityh = response.data.city;
            });
        },
        fetchDateI() {
            let id = localStorage.getItem('auth');
            let token = localStorage.getItem('token');
            let slug = this.signals.i.id;
            axios.get('/fetch/date/' + id + '/' + slug + '/' + token).then(response => {
                this.timei = response.data.time;
                this.datei = response.data.date;
                this.cityi = response.data.city;
            });
        },
        fetchDateJ() {
            let id = localStorage.getItem('auth');
            let token = localStorage.getItem('token');
            let slug = this.signals.j.id;
            axios.get('/fetch/date/' + id + '/' + slug + '/' + token).then(response => {
                this.timej = response.data.time;
                this.datej = response.data.date;
                this.cityj = response.data.city;
            });
        },
        fetchDateK() {
            let id = localStorage.getItem('auth');
            let token = localStorage.getItem('token');
            let slug = this.signals.k.id;
            axios.get('/fetch/date/' + id + '/' + slug + '/' + token).then(response => {
                this.timek = response.data.time;
                this.datek = response.data.date;
                this.cityk = response.data.city;
            });
        },
        fetchDateL() {
            let id = localStorage.getItem('auth');
            let token = localStorage.getItem('token');
            let slug = this.signals.l.id;
            axios.get('/fetch/date/' + id + '/' + slug + '/' + token).then(response => {
                this.timel = response.data.time;
                this.datel = response.data.date;
                this.cityl = response.data.city;
            });
        },
        fetchDateM() {
            let id = localStorage.getItem('auth');
            let token = localStorage.getItem('token');
            let slug = this.signals.m.id;
            axios.get('/fetch/date/' + id + '/' + slug + '/' + token).then(response => {
                this.timem = response.data.time;
                this.datem = response.data.date;
                this.citym = response.data.city;
            });
        },
        fetchDateN() {
            let id = localStorage.getItem('auth');
            let token = localStorage.getItem('token');
            let slug = this.signals.n.id;
            axios.get('/fetch/date/' + id + '/' + slug + '/' + token).then(response => {
                this.timen = response.data.time;
                this.daten = response.data.date;
                this.cityn = response.data.city;
            });
        },
        fetchDateO() {
            let id = localStorage.getItem('auth');
            let token = localStorage.getItem('token');
            let slug = this.signals.o.id;
            axios.get('/fetch/date/' + id + '/' + slug + '/' + token).then(response => {
                this.timeo = response.data.time;
                this.dateo = response.data.date;
                this.cityo = response.data.city;
            });
        },
        fetchSignals() {
      		  axios.get('/fetch/signal/free').then(response => {
					 this.signals = response.data;
        this.fetchDateA();
        this.fetchDateB();
        this.fetchDateC();
        this.fetchDateD();
        this.fetchDateE();
        this.fetchDateF();
        this.fetchDateG();
        this.fetchDateH();
        this.fetchDateI();
        this.fetchDateJ();
        this.fetchDateK();
        this.fetchDateL();
        this.fetchDateM();
        this.fetchDateN();
        this.fetchDateO();
              });
        },
    },
}
</script>
<style scoped>
    #myModal {
        position: fixed;
        top: 20%;
        left: 50%;
        transform: translateX(-50%);
        width:330px;
        padding: 20px;
        border-radius: 25px;
    }
</style>