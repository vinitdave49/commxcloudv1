 
 !function() {

// Localize twilio variable
var jQuery;
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
	
    // The Twilio version on the window is the one we want to use
   Twilio = window.Twilio;
   cc_softphone(Twilio);
}

function scriptLoadHandler(){
	
	//jQuery = window.jQuery.noConflict(true);
			  // Call our main function
	Twilio = window.Twilio;
	cc_softphone(Twilio);
}


 var cc_softphone = function (Twilio) {
	  var twilioDeviceSetup;
	  _initialiseDOM();
	  if(twilioDeviceSetup == "false"){
		_setupDevice();	
	  }  
  function _initialiseDOM(){
    softphoneHTMLHandler();
  	var answerButton = document.getElementById("answer");
  	var hangUpButton = document.getElementById("hangup");
  	var makeCallButton = document.getElementById("makecall");
  	var holdButton = document.getElementById("hold");
  	var transferButton = document.getElementById("transfer");
  	var conferenceButton = document.getElementById("unhold");
  	var callStatus = document.getElementById("status");
  	
  	
  	
  	answerButton.disabled = true;
  	hangUpButton.disabled = true;
  	holdButton.disabled = false;
  	//transferButton.disabled = true;
  	conferenceButton.disabled = false;	
  	 
  	holdButton.click(holdhandler);
  	conferenceButton.click(conferencehandler);
  	hangUpButton.click(hanguphandler);
  	//makeCallButton.onClick = makecallhandler;
  	//makeCallButton.click(function(){console.log("clicked");});
  	document.getElementById("makecall").addEventListener('click', makecallhandler, null);
  }

  function softphoneHTMLHandler()
  {
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
      softphoneHTML+= '<input type="text" class="form-control" id="exampleInputPhone" placeholder="Enter Phone Number to call">';
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
  }
  
  function _setupDevice() {
  	_doAjaxCall('/web/app_dev.php/token', _initialiseTwilioEvents);
  	twilioDeviceSetup = "true";
  	console.log("device set up successfully");
  }
  
  var _doAjaxCall = function(url, handler){
	  try{			
    	     var xmlhttp = new XMLHttpRequest();   
    	     xmlhttp.onreadystatechange = function() {
                 if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    var data = xmlhttp.responseText;
					          data = data[0].token;
					          handler(data);
                 }
             };
             xmlhttp.open("POST", url, true);
             xmlhttp.send();
    	}
		catch(e){
			console.log(e);
		}
  };
  var _initialiseTwilioEvents = function(data){
  	console.log("_initialiseTwilioEvents");
  	Twilio.Device.setup(data, {debug : true, rtc : true}); 
    Twilio.Device.ready(readyhandler);
  	Twilio.Device.error(errorhandler);
  	Twilio.Device.connect(connecthandler);
  	Twilio.Device.disconnect(disconnecthandler);
  	Twilio.Device.presence(presencehandler);
  	Twilio.Device.incoming(incominghandler);
  };
  var  readyhandler = function(device){
      //updateCallStatus("Ready to start call");
      document.getElementById("status").html("<h4><span style='color:#333'>Ready to start call</span></h4>");
  };
  var  errorhandler = function(error){
      //updateCallStatus("Error: " + error.message);
      document.getElementById("status").html("<h4><span style='color:#F00'>Error: "+error.message+"</span></h4>");
  };
  var  connecthandler = function(conn){
      console.log('Successfully connected');
      hangUpButton.disabled = true;
      answerButton.disabled = true;
      //updateCallStatus("Successfully Established a call");
      document.getElementById("status").html("<h4><span style='color:#0F0'>Successfully established call.</span></h4>");
      conn.disconnect(function(conn) {
          console.log("the call has ended");
      });
  };
  var  disconnecthandler = function(conn){
      hangUpButton.disabled = true;
      answerButton.disabled = false;
      //updateCallStatus("Call Ended. Ready to take next call");
      document.getElementById("status").html("<h4><span style='color:#333'>Call ended.</span></h4>");
  };
  var  presencehandler = function(presenceEvent){
      //updateCallStatus("Presence Event: " + presenceEvent.from + " " + presenceEvent.available);
  };
  var  incominghandler = function(conn){
      //updateCallStatus("Incoming support call: " + conn.parameters.From);
      console.log("Incoming call status: " + conn.status);
	
      conn.accept(function() { 
          //updateCallStatus("In call with customer"); 
      }); 

      if (confirm("Accept incoming call from " + conn.parameters.From + "?")){
          conn.accept();
          console.log("Incoming call status after accepting: " + conn.status);
      }
  };
  var holdhandler = function(){
  
  };
  var conferencehandler = function(){
  
  };
  var hanguphandler = function(){
      Twilio.Device.disconnectAll();
  };
  var makecallhandler = function(){
      params = {"PhoneNumber": document.getElementById("exampleInputPhone").textContent()};
      Twilio.Device.connect(params);
  }
  
  var _privateMethod = function (device) {
    console.log("inside Module Private Method");
  };

  var publicMethod = function () {
    _privateMethod();
  };
  
  return {
    publicMethod: publicMethod
  };

}; 


}(); 

 

function getworkerToken(){
     $.post('/web/app_dev.php/token', function(data) {
		window.worker = new Twilio.TaskRouter.Worker(data[0].workerToken);
		console.log(window.worker);
        registerTaskRouterCallbacks(); 
     });
}
function registerTaskRouterCallbacks() {
	     worker.on('ready', function(worker){
		    console.log("worker ready");
		    console.log(worker.available);
    	  });
    	 
    	  worker.on('activity.update', function(worker){
    		 console.log("activity update");
    		 console.log(worker.sid);    
             console.log(worker.friendlyName);
             console.log(worker.activityName);
             console.log(worker.available);   
    	  });
    	 
    	  worker.on("reservation.created", function(reservation){
    	     console.log("reservation created");
    	     console.log(reservation.task.attributes);    
             console.log(reservation.task.priority);     
             console.log(reservation.task.age);       
             console.log(reservation.task.sid);        
             console.log(reservation.sid);
             
             reservation.accept(
                function(error, reservation) {
                    if(error) {
                        console.log("error code: " + error.code);
                        console.log("error msg: " + error.message);
                        return;
                    }
                   
                   console.log("reservation.task.attributes.channel_sid: " + reservation.task.attributes.channel_sid);
                  
                    for (var property in reservation) {
                        console.log(property + " : " + reservation[property]);
                    }
                    if(reservation.task.attributes.channel_sid){
                     chat.setupChannel(reservation.task.attributes.channel_sid);   
                    }
                    else{
                        
                    }
                     
                }
            );
          
            
    	  });
    	 
    	  worker.on("reservation.accepted", function(reservation){
    		 console.log("reservation accepted");
    		 console.log(reservation.task.attributes);    
             console.log(reservation.task.priority);     
             console.log(reservation.task.age);       
             console.log(reservation.task.sid);        
             console.log(reservation.sid);     
    	  });
    	 
    	  worker.on("reservation.rejected", function(reservation){
    		 console.log("reservation rejected");
    		 console.log(reservation.task.attributes);    
             console.log(reservation.task.priority);     
             console.log(reservation.task.age);       
             console.log(reservation.task.sid);        
             console.log(reservation.sid);   
    	  });
    	 
    	  worker.on("reservation.timeout", function(reservation){
    	     console.log("reservation timeout");
    	     console.log(reservation.task.attributes);    
             console.log(reservation.task.priority);     
             console.log(reservation.task.age);       
             console.log(reservation.task.sid);        
             console.log(reservation.sid);  
    	  });
    	 
    	  worker.on("reservation.canceled", function(reservation){
    	     console.log("reservation canceled");
    		 console.log(reservation.task.attributes);    
             console.log(reservation.task.priority);     
             console.log(reservation.task.age);       
             console.log(reservation.task.sid);        
             console.log(reservation.sid);
    	  });
    	  
    	  worker.on("token.expired", function() {
             console.log("updating token");
             var token = refreshJWT(); // your method to retrieve a new capability token
             worker.updateToken(token);
          });
          
          
 }			
 