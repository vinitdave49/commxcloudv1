
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
 