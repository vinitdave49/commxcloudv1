 
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
	//var unholdButton;
	var transfercallButton;
	var callStatus;
	var workerActivity;
	var CallSid;
	var connection;
	var mutestate;
	var table;
	var transferWorker;
	var cc_softphone = {
	  
		_initialiseDOM : function(){
			  //this._softphoneHTMLHandler();
		  	answerButton = document.getElementById("answer");
		  	hangUpButton = document.getElementById("hangup");
		  	makeCallButton = document.getElementById("makecall");
		  	holdButton = document.getElementById("hold");
		  	transferButton = document.getElementById("transfer");
		  	transfercallButton = document.getElementById("btntransfer");
		  	conferenceButton = document.getElementById("conference");
		  	//transferWorker = $("transerWorker tbody");
		  	//transferWorker = document.getElementById("transerWorker");
		  	//unholdButton = document.getElementById("unhold");
		  	callStatus = document.getElementById("callstatus");
		  	workerActivity = document.getElementById("workerActivity");
		  	table = $('#transerWorker').DataTable();
  	
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
			transferButton.disabled = true;
		  	answerButton.disabled = true;
		  	hangUpButton.disabled = true;
		  	holdButton.disabled = true;
		  	//transferButton.disabled = true;
		  	//conferenceButton.disabled = false;	
		  	//unholdButton.disabled = false;
		  	 
		  	holdButton.addEventListener('click', function(e) {
		  	     cc_handler.holdhandler(connection);
		  	});
		  	// unholdButton.addEventListener('click', function(e) {
		  	//     cc_handler.unholdhandler(connection);
		  	// });
		  	transferButton.addEventListener('click', function(e) {
		  	     cc_handler.transferhandler();
		  	});
		  	transfercallButton.addEventListener('click', function(e) {
		  	     cc_handler.transfercallhandler();
		  	});
		  	// transferWorker.tBodies[0].addEventListener('click', function(e) {
		  	//     cc_handler.transferworkerhandler(this);
		  	// });
		  	hangUpButton.addEventListener('click', function(e){
		  	     cc_handler.hanguphandler();
		  	});
		  	makeCallButton.addEventListener('click', function(e) {
		  	     cc_handler.makecallhandler();
		  	});
            workerActivity.addEventListener('change', function(e) {
		  		var nextActivitySid = workerActivity.options[workerActivity.selectedIndex].value;
		  		console.log("Activity selected: " + nextActivitySid);
		  	    workerModule.cc_worker._activityChanged({"ActivitySid": nextActivitySid});
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
			  softphoneHTML+= '<input type="text" class="form-control" id="exampleInputPhone" placeholder="Enter Phone Number to call"/>';
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
			  softphoneHTML+= '<button class="btn btn-block btn-default btn-sm keypad-123" style="margin-top:0px;  border-radius:0px" id="conference">Conference</button>';
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
		    //this._doAjaxCall;
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
					    //var token1 = (data[0].token);
					    //console.log(token1);
					    handler(data[0]);
					        
					}
					else{
						console.log("error");
					}
				}	
          xmlhttp.open("POST", '/web/app.php/token', true);
          xmlhttp.send();
			}
			catch(e){
				console.log("error occured:"  + e);
			}
		},
		_loadWorkerJs : function(){
			// (function () {
              var s = document.createElement('script');
              s.type = 'text/javascript';
              s.async = true;
              s.src = window.workerjsUrl;
              var x = document.getElementsByTagName('script')[0];
              x.parentNode.insertBefore(s, x);
              s.onload = function(){
               console.log("taskrouter loaded");
              }
	        // })();
		},
		_initialiseTwilioEvents : function(data){
			console.log("_initialiseTwilioEvents");
		  	Twilio.Device.setup(data.token, {debug : true, rtc : true}); 
		    Twilio.Device.ready(cc_handler.readyhandler);
		  	Twilio.Device.error(cc_handler.errorhandler);
		  	Twilio.Device.connect(cc_handler.connecthandler);
		  	Twilio.Device.disconnect(cc_handler.disconnecthandler);
		  	Twilio.Device.presence(cc_handler.presencehandler);
		  	Twilio.Device.incoming(cc_handler.incominghandler);
		  	
		  	//Load Worker.js async for taskrouter
		  	cc_softphone._loadWorkerJs();
		  	
		}
		
		
	};
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
			console.log("conn: " + conn);
			console.log("conn parameters: " + conn.parameters.CallSid);
			console.log("Conn Parameter: Direction: " + conn.parameters.Direction);
			console.log('Successfully connected');
			 transferButton.disabled = false;
		    hangUpButton.disabled = false;
		    holdButton.disabled = false;
		    answerButton.disabled = true;
		    //updateCallStatus("Successfully Established a call");
		    document.getElementById("status").innerhtml = "<h4><span style='color:#0F0'>Successfully established call.</span></h4>";
		    conn.disconnect(function(conn) {
		         console.log("the call has ended");
		    });
		    mutestate = false;
		    connection = conn;
		    //CallSid = conn.parameters.CallSid;
		    console.log("call sid variable: workerModule.callsid" + workerModule.callsid);
		},
		disconnecthandler : function(conn){
		  console.log("Disconnected");
			hangUpButton.disabled = true;
			transferButton.disabled = true;
			holdButton.disabled = true;
			answerButton.disabled = false;
			callStatus.innerText = "No Active Call";
			holdButton.innerHTML ="Hold";
			holdButton.className = "btn btn-block btn-default btn-sm keypad-123";
		    //updateCallStatus("Call Ended. Ready to take next call");
		    document.getElementById("status").innerhtml = "<h4><span style='color:#333'>Call ended.</span></h4>";
		},
		presencehandler : function(){},
		incominghandler : function(conn){
			console.log("conn: " + conn);
			console.log("conn parameters: " + conn.parameters.CallSid);
			console.log("Incoming call status: " + conn.status);
			console.log("Conn Parameter: Direction: " + conn.parameters.Direction);
		//	conn.accept(function() { 
				//updateCallStatus("In call with customer"); 
		//	}); 
			
			if (confirm("Accept incoming call from " + conn.parameters.From + "?")){
				conn.accept();
				console.log("Incoming call status after accepting: " + conn.status);
			}
			//CallSid = conn.parameters.CallSid;
		},
		holdhandler : function(connection){
			//alert("Hold Button is clicked!!!"+ conn.parameters); //window.callsid;
			console.log(connection);
			//var bool;
			//holdButton.className = "btn btn-block btn-danger btn-sm keypad-123";
			if(!connection.isMuted()){
				console.log("Call is on Mute");
				mutestate = true;
				connection.mute(mutestate);
				callStatus.innerText = "Call is on Mute";
				holdButton.innerHTML ="Unhold";
				holdButton.className = "btn btn-block btn-danger btn-sm keypad-123";
			}else{
				console.log("Call is unmuted");
				mutestate = false;
				connection.mute(mutestate);
				callstatus.innerText = "Call is Unmuted";
				holdButton.innerHTML ="Hold";
				holdButton.className = "btn btn-block btn-default btn-sm keypad-123";
			}
			
			/*Below code is working only for Incoming call and if we use Queue for Hold,Unhold feature
			$.ajax({
			type: "POST", 
			//data: {callsid : workerModule.cc_worker._getcallsid()}, 
			data: {callsid : conn.parameters.CallSid}, 
			url: "/web/app_dev.php/hold",
			}).success(function(msg) {
			console.log("Call is on Hold");
			});
			*/
		},
		unholdhandler : function(connection){
			console.log("Call is on Mute");
			connection.mute(false);
			/*Below code is working only for Incoming call and if we use Queue for Hold,Unhold feature
			$.ajax({
			 	type: "POST", 
			 	data: {callsid : workerModule.cc_worker._getcallsid()}, 
			 	url: "/web/app_dev.php/unhold",
			 }).success(function(msg) {
				console.log("Call is Un-Hold");
			});
			*/
		},
		transfercallhandler : function(connection){
			if(table.rows('.selected').data()[0]) {
                var transferagentloginId = table.rows('.selected').data()[0][0];
                alert("selected agent id :" + transferagentloginId + workerModule.cc_worker._getcallsid());
                try{			
					console.log("inside transfer call try block");
					// var xmlhttp = new XMLHttpRequest();
					// xmlhttp.onreadystatechange = function() {
					// 	if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
					// 		//var data = JSON.parse(xmlhttp.responseText);
					// 	    console.log("Call is being transferred");
					// 	}
					// 	else{
					// 		console.log("error");
					// 	}
					// };	
     //     			xmlhttp.open("POST", '/web/app_dev.php/transfercallaction', true);
     //     			xmlhttp.send({callsid : workerModule.cc_worker._getcallsid(), transferagentloginId: transferagentloginId});
		                $.ajax({
		                    type: "POST", 
		                    //data: {callsid : workerModule.cc_worker._getcallsid()}, 
		                    data: {callsid : workerModule.cc_worker._getcallsid(), transferagentloginId: transferagentloginId}, 
		                    url: "/web/transfercallaction",
		                    }).success(function(msg) {
		                    console.log("Call is being transferred");
		                });
				}
				catch(e){
					console.log("error occured:"  + e);
				}
            }else {
                alert("No Agent is selected");
            }
            //console.log(loginId);
		},
		transferhandler : function(){
			try{			
				console.log("inside transfer try block");
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
					if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
						var data = JSON.parse(xmlhttp.responseText);
						console.log(data);
						//document.getElementById("alert").className = 'in alert-success';
                		//var table = $('#transerWorker').DataTable();
                		table.clear();
                		table.rows.add(data).draw();
                		$('transferModal').modal('show');
					}
					else{
						console.log("error");
					}
				}	
          		xmlhttp.open("POST", window.transferurl, true);
          		xmlhttp.send();
			}
			catch(e){
				console.log("error occured:"  + e);
			}
		},
		transferworkerhandler : function(self){
			if ( $(self).hasClass('selected') ) {
                $(self).removeClass('selected');
            }
            else {
                table.$('tr.selected').removeClass('selected');
                $(self).addClass('selected');
            }
		},
		hanguphandler : function(){
			holdButton.className = "btn btn-block btn-default btn-sm keypad-123";
			Twilio.Device.disconnectAll();
		},
		makecallhandler : function(){
			var params = {"PhoneNumber": document.getElementById("exampleInputPhone").value};
			console.log(params);
			if(ValidatePhone()){
				Twilio.Device.connect(params);
			}else{
				console.log("validation failed");
			}	
		}
	};
	
	var Twilio;
	var connection;
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
	
	
	/**
	 * Phone number validation script.
	*/
	// Declaring required variables
	var digits = "0123456789";
	// non-digit characters which are allowed in phone numbers
	var phoneNumberDelimiters = "()- ";
	// characters which are allowed in international phone numbers
	// (a leading + is OK)
	var validWorldPhoneChars = phoneNumberDelimiters + "+";
	// Minimum no of digits in an international phone no.
	var minDigitsInIPhoneNumber = 10;

	function isInteger(s)
	{   var i;
	    for (i = 0; i < s.length; i++)
	    {   
	        // Check that current character is number.
	        var c = s.charAt(i);
	        if (((c < "0") || (c > "9"))) return false;
	    }
	    // All characters are numbers.
	    return true;
	}
	function trim(s)
	{   var i;
	    var returnString = "";
	    // Search through string's characters one by one.
	    // If character is not a whitespace, append to returnString.
	    for (i = 0; i < s.length; i++)
	    {   
	        // Check that current character isn't whitespace.
	        var c = s.charAt(i);
	        if (c != " ") returnString += c;
	    }
	    return returnString;
	}
	function stripCharsInBag(s, bag)
	{   var i;
	    var returnString = "";
	    // Search through string's characters one by one.
	    // If character is not in bag, append to returnString.
	    for (i = 0; i < s.length; i++)
	    {   
	        // Check that current character isn't whitespace.
	        var c = s.charAt(i);
	        if (bag.indexOf(c) == -1) returnString += c;
	    }
	    return returnString;
	}

	function checkInternationalPhone(strPhone)
	{
		var bracket=3
		var s=''
		strPhone=trim(strPhone)
		if(strPhone.indexOf("+")>1) return false
		if(strPhone.indexOf("-")!=-1)bracket=bracket+1
		if(strPhone.indexOf("(")!=-1 && strPhone.indexOf("(")>bracket)return false
		var brchr=strPhone.indexOf("(")
		if(strPhone.indexOf("(")!=-1 && strPhone.charAt(brchr+2)!=")")return false
		if(strPhone.indexOf("(")==-1 && strPhone.indexOf(")")!=-1)return false
		s=stripCharsInBag(strPhone,validWorldPhoneChars);
		return (isInteger(s) && s.length >= minDigitsInIPhoneNumber);
	}
	
	function ValidatePhone()
	{
		var Phone=document.getElementById("exampleInputPhone");
		//alert(Phone);
		if ((Phone.value==null)||(Phone.value=="")){
			alert("Please Enter your Phone Number");
			Phone.focus();
			return false;
		}
		if (checkInternationalPhone(Phone.value)==false){
			alert("Please Enter a Valid Phone Number");
			Phone.value="";
			Phone.focus();
			return false;
		}
		return true;
	 }
	 /**
	 * Phone number validation script ends. 
	*/


})();
