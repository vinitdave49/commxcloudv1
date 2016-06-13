var workerModule = (function(){
    "use strict";
    var callsid;
    var cc_worker = {
        _getworkerToken : function(handler){
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
        _registerTaskRouterCallbacks : function(data){
            worker = new Twilio.TaskRouter.Worker(data.workerToken);
            worker.on('ready', function(worker){ cc_workerHandler._workerreadyhandler(worker);});
    	    worker.on('activity.update', function(worker){ cc_workerHandler._activityupdatehandler(worker); });
    	    worker.on("reservation.created", function(reservation){ cc_workerHandler._reservationcreatedhandler(reservation); });
    	    worker.on("reservation.accepted", function(reservation){ cc_workerHandler._reservationacceptedhandler(reservation); });
    	    worker.on("reservation.rejected", function(reservation){ cc_workerHandler._reservationrejectedhandler(reservation); });
    	    worker.on("reservation.timeout", function(reservation){ cc_workerHandler._reservationtimeouthandler(reservation); });
    	    worker.on("reservation.canceled", function(reservation){ cc_workerHandler._reservationcancelledhandler(reservation); });
    	    worker.on("token.expired", function(){ cc_workerHandler._tokenexpiredhandler(); });
    	    
        },
        _activityChanged : function(data){
            worker.update(data, function(error, worker) {
            	  if(error) {
            	    console.log(error.code);
            	    console.log(error.message);
            	  } else {
            	    console.log(worker.activityName); 
            	  }
    	    });
        },
        _getcallsid :  function(){
             return callsid;
        },
        _setcallsid : function(call_sid){
            callsid = call_sid;
        }
    };
    var cc_workerHandler = {
        _workerreadyhandler : function(worker){
             console.log("worker ready");
		     console.log(worker.available);
        },
        _activityupdatehandler : function(worker){
             console.log("activity update");
    		 console.log(worker.sid);    
             console.log(worker.friendlyName);
             console.log(worker.activityName);
             console.log(worker.available); 
        },
        _reservationcreatedhandler : function(reservation){
             console.log("reservation created");
    	     console.log(reservation.task.attributes);    
             console.log(reservation.task.priority);     
             console.log(reservation.task.age);       
             console.log(reservation.task.sid);        
             console.log(reservation.sid);
             console.log("reservation.task.attributes.call_sid: " + reservation.task.attributes.call_sid);
             cc_worker._setcallsid(reservation.task.attributes.call_sid);
             //this.callsid = reservation.task.attributes.call_sid;
              if(reservation.task.attributes.channel_sid){
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
                           chatModule.cc_chat._setupChannel(reservation.task.attributes.channel_sid);
                             
                        }
                      );
               }
              else{
                        
              }
            
        },
        _reservationacceptedhandler : function(reservation){
             console.log("reservation accepted");
    		 console.log(reservation.task.attributes);    
             console.log(reservation.task.priority);     
             console.log(reservation.task.age);       
             console.log(reservation.task.sid);        
             console.log(reservation.sid);
        },
        _reservationrejectedhandler : function(reservation){
             console.log("reservation rejected");
    		 console.log(reservation.task.attributes);    
             console.log(reservation.task.priority);     
             console.log(reservation.task.age);       
             console.log(reservation.task.sid);        
             console.log(reservation.sid);
        },
        _reservationtimeouthandler : function(reservation){
             console.log("reservation timeout");
    	     console.log(reservation.task.attributes);    
             console.log(reservation.task.priority);     
             console.log(reservation.task.age);       
             console.log(reservation.task.sid);        
             console.log(reservation.sid);  
        },
        _reservationcancelledhandler : function(reservation){
             console.log("reservation canceled");
    		 console.log(reservation.task.attributes);    
             console.log(reservation.task.priority);     
             console.log(reservation.task.age);       
             console.log(reservation.task.sid);        
             console.log(reservation.sid);
        },
        _tokenexpiredhandler : function(){
             console.log("updating token");
             var token = refreshJWT(); // your method to retrieve a new capability token
             worker.updateToken(token);
        }
        
    };
    
    var worker;

	if (window.Twilio.Taskrouter === undefined) {
		var script_tag = document.createElement('script');
		script_tag.setAttribute("type","text/javascript");
		script_tag.setAttribute("src",
			"//media.twiliocdn.com/taskrouter/js/v1.1.1/taskrouter.min.js");
		if (script_tag.readyState) {
				script_tag.onreadystatechange = function () { // For old versions of IE
				if (this.readyState == 'complete' || this.readyState == 'loaded') {
			       taskscriptLoadHandler();
				}
			};
		} else { // Other browsers
			script_tag.onload = taskscriptLoadHandler;
		}
		// Try to find the head, otherwise default to the documentElement
		(document.getElementsByTagName("head")[0] || document.documentElement).appendChild(script_tag);
	} else {
		taskscriptLoadHandler();
	}

	function taskscriptLoadHandler(){

		//Twilio = window.Twilio;
		cc_worker._getworkerToken(cc_worker._registerTaskRouterCallbacks);
		//return cc_worker;
	}
	
    return {
       
       cc_worker : cc_worker,
       callsid : callsid
    };
    
})();
console.log("callsid: " + this.workerModule.callsid);
console.log("callsid: " + workerModule.callsid);