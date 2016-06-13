 
 (function() {
	"use strict";
	//var cc_softphone = cc_softphone || {};
	// Localize twilio variable
	//jQuery;
	var answerButton;
	var hangUpButton;
	var makeCallButton;
	var holdButton;
	var transferButton;
	var conferenceButton;
	var callStatus;
	var cc_softphone = {
	
		_initialiseDOM : function(){
			  //this._softphoneHTMLHandler();
		  	answerButton = document.getElementById("answer");
		  	hangUpButton = document.getElementById("hangup");
		  	makeCallButton = document.getElementById("makecall");
		  	holdButton = document.getElementById("hold");
		  	transferButton = document.getElementById("transfer");
		  	conferenceButton = document.getElementById("#");
		  	unholdButton = document.getElementById("unhold");
		  	callStatus = document.getElementById("status");
  	
			['0','1','2','3','4','5','6','7','8','9','star','pound'].forEach(function(item, index){
			  //console.log("inside");
			  document.getElementById('button' + item).addEventListener('click', function(e){
				console.log("1.inside");
				if (item=='star'){
						//console.log("*.inside");
						document.getElementById("exampleInputPhone").value = document.getElementById("exampleInputPhone").value + "*";
						}
					else if (item=='pound'){
					   //console.log("#.inside");
					   document.getElementById("exampleInputPhone").value = document.getElementById("exampleInputPhone").value + "#";
						}
					else{
					  document.getElementById("exampleInputPhone").value = document.getElementById("exampleInputPhone").value + item;
					}
					
			  });
			  
			});
  	
		  	answerButton.disabled = true;
		  	hangUpButton.disabled = true;
		  	holdButton.disabled = false;
		  	//transferButton.disabled = true;
		  	conferenceButton.disabled = false;	
		  	 
		  	holdButton.addEventListener('click', function(e) {
		  	    cc_handler.holdhandler();
		  	});
		  	unholdButton.addEventListener('click', function(e) {
		  	    cc_handler.unholdhandler();
		  	});
		  	conferenceButton.addEventListener('click', function(e) {
		  	    cc_handler.conferencehandler();
		  	});
		  	hangUpButton.addEventListener('click', function(e){
		  	     cc_handler.hanguphandler();
		  	});
		  	makeCallButton.addEventListener('click', function(e) {
		  	     cc_handler.makecallhandler();
		  	});
		},
		_softphoneHTMLHandler: function(){
			 //var softphoneHTML= '<div id="control-sidebar-phone-tab" class="tab-pane active">'
			  var softphoneHTML='<div>';
			  softphoneHTML+= '</br>';
			  softphoneHTML+= '<div id="phonebox" class="">';
			  softphoneHTML+= '<div id="phoneheader" class="phone-header1"><h4 > CommPhone <i class="fa fa-toggle-off" id="target" style="padding-left:106px;"></i></input>  </h4> </div>';
			  softphoneHTML+= '<div id ="phone-box-content" class="box box-primary">';
			  softphoneHTML+= '<div class="box-body padding-override" style="text-align:center;" >';
									
			  softphoneHTML+= '<div class="form-group padding-override" style="text-align:left;">';
			  softphoneHTML+= '<label>Worker Activity</label>';
			  softphoneHTML+= '<select class="form-control" id="workerActivity">';
			  softphoneHTML+= '<option value="WAb4bc7105ecbff4189f3a36050d3b7863">Idle</option>'
			  softphoneHTML+= '<option value="WA81cd6c807dc20b2d1e829d226f2ac692">Busy</option>'
			  softphoneHTML+= '<option value="WAb7f02f442ef2784e2644305b36c632e8">Reserved</option>'
			  softphoneHTML+= '<option value="WA7b56deb0d7cd97a69b663e4a62532ac7" selected="selected">Offline</option>'
			  softphoneHTML+= '</select>';
			  softphoneHTML+= '</div>';
							 
			  softphoneHTML+= '<div class="box-header padding-override padding-bottom-override padding-top-override" id="incomingcallalert">';
			  softphoneHTML+= '</div>';
			  softphoneHTML+= '<div class="padding-override">';
			  softphoneHTML+= '<input type="text" onchange="validatePhoneNumber(this.value)" class="form-control" id="exampleInputPhon" placeholder="Enter Phone Number to call"/>';
			  softphoneHTML+= '</div>';
			  softphoneHTML+= '<div class="padding-override">';
			  softphoneHTML+= '<button class="btn btn-block btn-default btn-sm keypad-123" style=" margin-top:0px;" id="button1" value="1">1</button>';
			  softphoneHTML+= '<button class="btn btn-block btn-default btn-sm keypad-123" style=" margin-top:0px;" id="button2" value="2">2</button>';
			  softphoneHTML+= '<button class="btn btn-block btn-default btn-sm keypad-123" style=" margin-top:0px;" id="button3" value="3" >3</button>';
			  softphoneHTML+= '</div>';
			  softphoneHTML+= '<div class="padding-override padding-top-override" >';
			  softphoneHTML+= '<button class="btn btn-block btn-default btn-sm keypad-456" style="margin-top:0px;" id="button4" value="1">4</button>';
			  softphoneHTML+= '<button class="btn btn-block btn-default btn-sm keypad-456" style="margin-top:0px;" id="button5" value="1">5</button>';
			  softphoneHTML+= '<button class="btn btn-block btn-default btn-sm keypad-456" style="margin-top:0px;" id="button6" value="1">6</button>';
			  softphoneHTML+= '</div>';
			  softphoneHTML+= '<div class="padding-override padding-top-override" >';
			  softphoneHTML+= '<button class="btn btn-block btn-default btn-sm keypad-789" style="margin-top:0px;" id="button7" value="7">7</button>';
			  softphoneHTML+= '<button class="btn btn-block btn-default btn-sm keypad-789" style="margin-top:0px;" id="button8" value="8">8</button>';
			  softphoneHTML+= '<button class="btn btn-block btn-default btn-sm keypad-789" style="margin-top:0px;" id="button9" value="9">9</button>';
			  softphoneHTML+= '</div>';
			  softphoneHTML+= '<div class="padding-override padding-top-override" >';
			  softphoneHTML+= '<button class="btn btn-block btn-default btn-sm keypad-0" style="margin-top:0px;" id="buttonstar" value="*">*</button>';
			  softphoneHTML+= '<button class="btn btn-block btn-default btn-sm keypad-0" style="margin-top:0px;" id="button0" value="0">0</button>';
			  softphoneHTML+= '<button class="btn btn-block btn-default btn-sm keypad-0" style="margin-top:0px;" id="buttonpound" value="#">#</button>';
			  softphoneHTML+= '</div>';
			  softphoneHTML+= '<div class="padding-override" >';
			  softphoneHTML+= '<button class="btn btn-block btn-default btn-sm keypad-123" style=" border-radius:0px" id="makecall">Call</button>';
			  softphoneHTML+= '<button class="btn btn-block btn-default btn-sm keypad-123" style="margin-top:0px; border-radius:0px" id="answer">Answer</button>';
			  softphoneHTML+= '<button class="btn btn-block btn-default btn-sm keypad-123" style="margin-top:0px;  border-radius:0px" id="hangup">Hang-Up</button>';
			  softphoneHTML+= '</div>';
			  softphoneHTML+= '<div class="padding-override" >';
			  softphoneHTML+= '<button class="btn btn-block btn-default btn-sm keypad-123" style="border-radius:0px" id="hold">Hold</button>';
			  softphoneHTML+= '<button class="btn btn-block btn-default btn-sm keypad-123" style="margin-top:0px; border-radius:0px" id="transfer" onclick="display('/'test'/')">Transfer</button>';
			  softphoneHTML+= '<button class="btn btn-block btn-default btn-sm keypad-123" style="margin-top:0px;  border-radius:0px" id="unhold">Un-Hold</button>';
			  softphoneHTML+= '</div>';
			  softphoneHTML+= '<div class="box-header padding-override padding-top-override padding-bottom-override" >';
			  softphoneHTML+= '<div class="caller-info-div" style="" id="status">';
			  softphoneHTML+= '</div>';
			  softphoneHTML+= '</div>';
			  softphoneHTML+= '<div class="bottom-div-text" ><span>Ready Agents :</span> <span>1</span></div>';
			  softphoneHTML+= '<div class="bottom-div-text" ><span>Call Queue :</span> <span>0</span></div>';
			  softphoneHTML+= '</div>';
			  softphoneHTML+= '</div>';
			  softphoneHTML+= '</div>';
				 
			  softphoneHTML+= '</div>';
			  //softphoneHTML+= '</div>';
			  document.getElementById('control-sidebar-phone-tab').innerHTML += softphoneHTML;
		},
		_setupDevice : function(){
		    this._doAjaxCall;
		  	var twilioDeviceSetup = "true";
		  	console.log("device set up successfully");
		},
		_doAjaxCall : function(handler){
			console.log("inside do Ajaxcall");
			try{			
				console.log("inside try block");
				var xmlhttp = new XMLHttpRequest();   
				xmlhttp.onreadystatechange = function() {
					if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
						var data = JSON.parse(xmlhttp.responseText);
						//console.log(JSON.parse(data[0]));
					  var token1 = (data[0].token);
					  console.log(token1);
					  handler(token1);
					        
					}
					else{
						console.log("error");
					}
				}	
          xmlhttp.open("POST", 'https://commcloud-ashwindeshpande06.c9users.io/web/app_dev.php/token', false);
          xmlhttp.send();
			}
			catch(e){
				console.log("error occured:"  + e);
			}
		},
		_initialiseTwilioEvents : function(data){
			console.log("_initialiseTwilioEvents");
		  	Twilio.Device.setup(data, {debug : true, rtc : true}); 
		    Twilio.Device.ready(cc_handler.readyhandler);
		  	Twilio.Device.error(cc_handler.errorhandler);
		  	Twilio.Device.connect(cc_handler.connecthandler);
		  	Twilio.Device.disconnect(cc_handler.disconnecthandler);
		  	Twilio.Device.presence(cc_handler.presencehandler);
		  	Twilio.Device.incoming(cc_handler.incominghandler);
		}
		
	}
	var cc_handler = {
		readyhandler : function(device){
		  console.log("Device Ready");
			document.getElementById("status").innerhtml = "<h4><span style='color:#333'>Ready to start call</span></h4>";
		},
		errorhandler : function(error){
		  console.log("Error Occured" + error.message);
			document.getElementById("status").innerhtml = "<h4><span style='color:#F00'>Error: " + error.message + "</span></h4>";
		},
		connecthandler : function(conn){
			console.log('Successfully connected');
		    //hangUpButton.disabled = true;
		    answerButton.disabled = true;
		    //updateCallStatus("Successfully Established a call");
		    document.getElementById("status").innerhtml = "<h4><span style='color:#0F0'>Successfully established call.</span></h4>";
		    conn.disconnect(function(conn) {
		         console.log("the call has ended");
		    });
		},
		disconnecthandler : function(conn){
		  console.log("Disconnected");
			  hangUpButton.disabled = true;
		    answerButton.disabled = false;
		    //updateCallStatus("Call Ended. Ready to take next call");
		    document.getElementById("status").innerhtml = "<h4><span style='color:#333'>Call ended.</span></h4>";
		},
		presencehandler : function(){},
		incominghandler : function(conn){
			console.log("Incoming call status: " + conn.status);	
			conn.accept(function() { 
				//updateCallStatus("In call with customer"); 
			}); 

			if (confirm("Accept incoming call from " + conn.parameters.From + "?")){
				conn.accept();
				console.log("Incoming call status after accepting: " + conn.status);
			}
		},
		holdhandler : function(conn){
			alert("Hold Button is clicked!!!"+window.callsid);
			$.ajax({
			type: "POST", 
			data: {callsid : window.callsid}, 
			url: "/web/app_dev.php/hold",
			}).success(function(msg) {
			console.log("Call is on Hold");
			});
		},
		unholdhandler : function(conn){
			alert("Un-Hold Button Clicked!!!"+window.callsid);
			$.ajax({
			 	type: "POST", 
			 	data: {callsid : window.callsid}, 
			 	url: "/web/app_dev.php/unhold",
			 }).success(function(msg) {
				console.log("Call is Un-Hold");
			});
		},
		conferencehandler : function(){},
		hanguphandler : function(){
			Twilio.Device.disconnectAll();
		},
		makecallhandler : function(){
			var params = {"PhoneNumber": document.getElementById("exampleInputPhone").value};
			console.log(params);
			Twilio.Device.connect(params);

		}
	}
	
	var Twilio;

	if (window.Twilio === undefined) {
		var script_tag = document.createElement('script');
		script_tag.setAttribute("type","text/javascript");
		script_tag.setAttribute("src",
			"//static.twilio.com/libs/twiliojs/1.2/twilio.min.js");
		if (script_tag.readyState) {
				script_tag.onreadystatechange = function () { // For old versions of IE
				if (this.readyState == 'complete' || this.readyState == 'loaded') {
			       scriptLoadHandler();
				}
			};
		} else { // Other browsers
			script_tag.onload = scriptLoadHandler;
		}
		// Try to find the head, otherwise default to the documentElement
		(document.getElementsByTagName("head")[0] || document.documentElement).appendChild(script_tag);
	} else {
		scriptLoadHandler();
	}

	function scriptLoadHandler(){

		Twilio = window.Twilio;
		var twilioDeviceSetup = 'false';
		cc_softphone._initialiseDOM();
		if(twilioDeviceSetup == "false"){
		  cc_softphone._doAjaxCall(cc_softphone._initialiseTwilioEvents);
		//cc_softphone._setupDevice();	
		}
	}
	
	function validatePhoneNumber(inputtxt)  {
		  var phoneno = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;  
		  if((inputtxt.value.match(phoneno))  
		      return true;  
		      else {  
		        alert("message");  
		        return false;  
	      }  
		}  


})();
