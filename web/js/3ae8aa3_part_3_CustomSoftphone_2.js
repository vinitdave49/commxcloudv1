 $( document ).ready(function() {
softphoneHTMLHandler();
// Localize jQuery variable
var jQuery;


if (window.jQuery === undefined || window.jQuery.fn.jquery !== '1.4.2') {
    var script_tag = document.createElement('script');
    script_tag.setAttribute("type","text/javascript");
    script_tag.setAttribute("src",
        "http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js");
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
	
    // The jQuery version on the window is the one we want to use
    jQuery = window.jQuery;
   cc_softphone(Twilio);
}

function scriptLoadHandler(){
	
	jQuery = window.jQuery.noConflict(true);
			  // Call our main function
	cc_softphone(Twilio);
}





 var cc_softphone = function (Twilio) {
  var twilioDeviceSetup;
  _initialiseDOM();
  if(twilioDeviceSetup == "false"){
	_setupDevice();
	
  }  
  function _initialiseDOM(){
	holdButton.click(holdhandler);
	conferenceButton.click(conferencehandler);
	hangUpButton.click(hanguphandler);
	makeCallButton.click(makecallhandler);	
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
      softphoneHTML+= '<div class="padding-override ">';
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
      softphoneHTML+= '<button class="btn btn-block btn-default btn-sm keypad-123" style="margin-top:0px; border-radius:0px" id="transfer" onclick="display('test')">Transfer</button>';
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
      $('#control-sidebar-phone-tab').HTML(softphoneHTML);
  }
  function _setupDevice() {
      softphoneHTMLHandler();
	doAjaxCall(url, _initialiseTwilioEvents);
	twilioDeviceSetup = "true";
	console.log("device set up successfully");
  };
  var doAjaxCall = function(url, handler){
	  try{			
    	     var xmlhttp = new XMLHttpRequest();   
    	     xmlhttp.onreadystatechange = function() {
                 if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    var data = xmlhttp.responseText;
					handler;
                 }
             };
             xmlhttp.open("POST", url, true);
             xmlhttp.send();
    	}
		catch(e){
			console.log(e);
		}
  };
  var _initialiseTwilioEvents = function(){
	console.log("_initialiseTwilioEvents");
    Twilio.Device.ready(readyhandler);
	Twilio.Device.error(errorhandler);
	Twilio.Device.connect(connecthandler);
	Twilio.Device.disconnect(disconnecthandler);
	Twilio.Device.presence(presencehandler);
	Twilio.Device.incoming(incominghandler);
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


})(); 

 