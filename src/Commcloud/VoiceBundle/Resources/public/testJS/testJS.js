// This is a test JS file for adv js testing
// created by Ashwin Deshpande at 4/4/2016 11:59 AM
// Namespace creation 
// Please update the log before updating

(function(window,$){
    var CC = CC || {};
    CC.createNS = function (namespace) {
        var nsparts = namespace.split(".");
        var parent = CC;
     
        // we want to be able to include or exclude the root namespace 
        // So we strip it if it's in the namespace
        if (nsparts[0] === "CC") {
            nsparts = nsparts.slice(1);
        }
     
        // loop through the parts and create 
        // a nested namespace if necessary
        for (var i = 0; i < nsparts.length; i++) {
            var partname = nsparts[i];
            // check if the current parent already has 
            // the namespace declared, if not create it
            if (typeof parent[partname] === "undefined") {
                parent[partname] = {};
            }
            // get a reference to the deepest element 
            // in the hierarchy so far
            parent = parent[partname];
        }
        // the parent is now completely constructed 
        // with empty namespaces and can be used.
        return parent;
    };
    CC.createNS("CC.Web");
    CC.createNS("CC.Web.Phone");
    CC.createNS("CC.Web.Chat");
    
    CC.createNS("CC.Web.Parameter");
    
    CC.Web.tokenManager = {
        
         getToken : function(callback){
             console.log("callback function: " + callback);
             var path = $("#abc").attr("data-path");
             console.log("P3:Server token path: " + path);
            //make ajax call and get the token, parse it and return it.
             $.post(path, function(data) { 
                 // Set up the Twilio Client Device with the token 
        		 console.log("P4:After ajax call data: " + data[0].token);
        		 //setToken(data[0].token);
        	    // new CC.Web.Chat.initialize_TwilioDevice(data[0].token);
        	    CC.Web.tokenManager.setToken(data[0].token);
                console.log("P7:After set token");
                
                callback(data[0].token);
               // console.log("P9:Before twilio device initialize");
               // new _phone.initialize_TwilioDevice();
                new CC.Web.Phone.initialize_Taskrouter(data[0].workerToken);
        	    return data[0].token;
             });
            return ;
         },
         setToken : function(token){
             CC.Web.Parameter.TOKEN = token || null;
             console.log("P6:CC.Web.Parameter.TOKEN: " + CC.Web.Parameter.TOKEN);
        }
        
    }
    
   
    CC.Web.Phone.initialize = function(){
        CC.Web.Parameter.TOKEN = null;
        CC.Web.Parameter.WORKER_TOKEN = null;
        CC.Web.Parameter.CALLSID = null;
        //initialize all local variables required
        //new CC.Web.Chat.getToken();
        console.log("P2:Inside initialize function");
       // var _web = CC.Web;
       // var _token = new _web.tokenManager();
       // var token = new _token.getToken();
        var token = CC.Web.tokenManager.getToken(CC.Web.Phone.initialize_TwilioDevice);
        console.log("P5:After token generation");
        
    }
    CC.createNS("CC.Web.Twilio");
    CC.Web.Phone.initialize_TwilioDevice = function(data){
        CC.Web.Twilio = Twilio || null;
        //need to test this thing
        console.log("P10:Before twilio device set up");
        CC.Web.Twilio.Device.setup(data, {debug : true, rtc : true});
        console.log("P11:After twilio device setup");
        new CC.Web.Phone.TwilioDeviceContainer();
    }
    CC.createNS("CC.Web.worker");
    CC.Web.Phone.initialize_Taskrouter = function(data){
        
        CC.Web.worker = new Twilio.TaskRouter.Worker(data);
    }
    
    CC.Web.Phone.TwilioDeviceContainer = function(){
        //need to test this thing
         CC.Web.Twilio.Device.ready(function (device) {
             console.log("Twilio.Device.ready");
         });

         CC.Web.Twilio.Device.error(function (error) {
             console.log("Twilio.Device.error");
         });
        
         Twilio.Device.connect(function (conn) {
             console.log("Twilio.Device.connect");
         });
        
         Twilio.Device.disconnect(function (conn) {
             console.log("Twilio.Device.disconnect");
         });
         
         Twilio.Device.presence(function(presenceEvent) { 
             console.log("Twilio.Device.presence");
         }); 

         Twilio.Device.incoming(function (conn) {
             console.log("Twilio.Device.incoming");
         });			
         console.log("P12:After twilio container");
    }
    
    CC.Web.TaskrouterContainer = function(){
         worker.on('ready', function(worker){
		    console.log("worker ready");
		    console.log(worker.available);
    	  });
    	 
    	  worker.on('activity.update', function(worker){
    		 console.log("activity update");
    		 console.log(worker.sid)             
             console.log(worker.friendlyName)  
             console.log(worker.activityName)  
             console.log(worker.available)      
    	  });
    	 
    	  worker.on("reservation.created", function(reservation){
    	     console.log("reservation created");
    	     console.log(reservation.task.attributes)      
             console.log(reservation.task.priority)      
             console.log(reservation.task.age)           
             console.log(reservation.task.sid)            
             console.log(reservation.sid) 
    	  });
    	 
    	  worker.on("reservation.accepted", function(reservation){
    		 console.log("reservation accepted");
    		 console.log(reservation.task.attributes)      
             console.log(reservation.task.priority)     
             console.log(reservation.task.age)          
             console.log(reservation.task.sid)         
             console.log(reservation.sid)     
    	  });
    	 
    	  worker.on("reservation.rejected", function(reservation){
    		 console.log("reservation rejected");
    		 console.log(reservation.task.attributes)     
             console.log(reservation.task.priority)    
             console.log(reservation.task.age)          
             console.log(reservation.task.sid)        
             console.log(reservation.sid)    
    	  });
    	 
    	  worker.on("reservation.timeout", function(reservation){
    	     console.log("reservation timeout");
    	     console.log(reservation.task.attributes)      
             console.log(reservation.task.priority)    
             console.log(reservation.task.age)          
             console.log(reservation.task.sid)         
             console.log(reservation.sid)      
    	  });
    	 
    	  worker.on("reservation.canceled", function(reservation){
    		 console.log(reservation.task.attributes)     
             console.log(reservation.task.priority)     
             console.log(reservation.task.age)         
             console.log(reservation.task.sid)       
             console.log(reservation.sid)   
    	  });
    	  
    	  worker.on("token.expired", function() {
             console.log("updating token");
             var token = refreshJWT(); // your method to retrieve a new capability token
             worker.updateToken(token);
          });
    }
    
    CC.createNS("CC.Web.Common.Utility");
    
    CC.Web.Common.Utility.commonHTMLUtilityFunction = function(){
        
    }
    
    $(document).ready(function() { 
        // var _chat = CC.Web.Chat;
         var _phone = CC.Web.Phone;
         
         console.log("P1:Before initialization: ");
         var _initialize = new _phone.initialize();
         console.log("P8:After initialization: ");
         //console.log("P9:Before twilio device initialize");
        // new _phone.initialize_TwilioDevice();
    })
    
})(window, window.jQuery || {});

 