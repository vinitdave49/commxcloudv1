var chatModule = (function(){
    "use strict";
    //var path = document.getElementById("abc").getAttribute("data-path");
    var privateChannel;
    var channelSid;
    var messagingClient;
    var accessManager;
    var username;
    var chatWindow = document.getElementById('messages');
    var cc_chat = {
        _getChattoken : function(handler){
            //console.log(path);
            var jsondata = {'identity': window.identitypath, 'device': 'browser'};
            console.log(JSON.stringify(jsondata));
            console.log("inside do Ajaxcall");
			try{			
				console.log("inside try block");
				var xmlhttp = new XMLHttpRequest();   
				xmlhttp.onreadystatechange = function() {
					if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
						var data = JSON.parse(xmlhttp.responseText);
						console.log(data);
					    handler(data);
					        
					}
					else{
						console.log("error");
					}
				}	
            xmlhttp.open("POST", '/web/app_dev.php/getchattoken', true);
            xmlhttp.setRequestHeader('Accept', '*/*');
		    xmlhttp.setRequestHeader('Content-Type', 'text/json');
            xmlhttp.send(JSON.stringify(jsondata));
            //xmlhttp.send('identity= '+ window.identitypath + '&device=browser');
			}
			catch(e){
				console.log("error occured:"  + e);
			}
        },
        _initialiseChatClient : function(data){
            // Alert the user they have been assigned a random username
            username = data.identity;
            console.log('uername: ' + username);
            cc_chat._print('You have been assigned a username of: ' 
                + '<span class="me">' + username + '</span>', true);
    
            // Initialize the IP messaging client
            accessManager = new Twilio.AccessManager(data.token);
            messagingClient = new Twilio.IPMessaging.Client(accessManager);
           
        },
        _createPrivateChatChannel :  function(username){
            messagingClient.createChannel({
                    uniqueName: username,
                    friendlyName: 'Commcloud Chat Channel',
                    type: 'private'
                }).then(function(channel) {
                    console.log('Created private channel:');
                    console.log(channel);
                    privateChannel = channel;
                    //setupChannel(generalChannel);
            });
        
        },
        _joinChannel : function(username){
            privateChannel.join().then(function(channel) {
                    cc_chat._print('Joined channel as ' 
                        + '<span class="me">' + username + '</span>.', true);
            });
        
        },
        _setupChannel: function(channelSid){
            console.log('Channel Sid:'+channelSid);
            // Join the general channel
            var promise = messagingClient.getChannelBySid(channelSid);
            promise.then(function(channel) {
                privateChannel = channel;
                console.log('Found channel:');
                console.log(privateChannel);
                console.log(privateChannel.uniqueName);
                console.log(privateChannel.friendlyName);
                 
                cc_chat._joinChannel(privateChannel.friendlyName);
        
                // Listen for new messages sent to the channel
                privateChannel.on('messageAdded', cc_chatHandler._messageAdded);
                privateChannel.on('channelAdded', cc_chatHandler._channelAdded);
                privateChannel.on('memberJoined', cc_chatHandler._memberJoined);
                
                 
                document.getElementById('chat-input').addEventListener('click', function(e) {
                   console.log("click chat-input");
                   
    		  	   privateChannel.sendMessage(document.getElementById('type-msg').value);
    		  	   document.getElementById('type-msg').value ='';
    		  	});
    		  	
    		  	document.getElementById('type-msg').addEventListener('keydown', function(e) {
        		  	if(e.keyCode == 13){ 
                       e.preventDefault();
                //       console.log("click chat-input");
        		  	   //privateChannel.sendMessage(document.getElementById('type-msg').value);
        		  	   //document.getElementById('type-msg').textContent ='';
        		  	   return false;
        		  	}
    		  	});
            
            
		  	
            });
        },
        _printMessage : function(fromUser, message){
            //var $user = $('<span class="username">').text(fromUser + ':');
            var user = "<span class='username'>" + fromUser + ":" + '</span>';
            if (fromUser === username) {
                //$user.addClass('me');
               // user.setAttribute('class', 'me');
            }

            var message = "<span class='message'>" + message + "</span>";

            var container = "<div class='message'>";
                container += user;
                container += message;
                container += "</div>";
                
           // container.innerHTML += user;
           // container.innerHTML += message;
            chatWindow.innerHTML += container;
            chatWindow.scrollTop = chatWindow.scrollHeight;
            
        },
        _print : function(infoMessage, asHtml){
            var msg = '<div class="info">';
               
            if (asHtml) {
                msg += infoMessage;
               // msg.textContent = infoMessage;
            } else {
                msg += infoMessage;
                //msg.textContent = infoMessage;
            }
            msg += '</div>';
            //chatWindow.append($msg);
            chatWindow.innerHTML += msg;
        }
    };
    
    var cc_chatHandler = {
        _memberJoined : function(member){
            console.log(member.identity + 'agent has joined the channel.');
            cc_chat._print('<span class="me">' + member.identity + '</span>.' + 'agent has joined the channel.', true);
        },
        _messageAdded : function(message){
            console.log("_messageAdded triggered");
            cc_chat._printMessage(message.author, message.body);
        },
        _channelAdded : function(channel){
            console.log("on channel added: " + channel);
        }
    };
    
    if(window.workerModule === undefined){
        
    }
    if(window.Twilio.IPMessaging === undefined){
        var script_tag = document.createElement('script');
		script_tag.setAttribute("type","text/javascript");
		script_tag.setAttribute("src",
			"//media.twiliocdn.com/sdk/rtc/js/ip-messaging/v0.9/twilio-ip-messaging.min.js");
		if (script_tag.readyState) {
				script_tag.onreadystatechange = function () { // For old versions of IE
				if (this.readyState == 'complete' || this.readyState == 'loaded') {
			      loadTwilioCommonJs();
				}
			};
		} else { // Other browsers
			script_tag.onload = loadTwilioCommonJs;
		}
		// Try to find the head, otherwise default to the documentElement
		(document.getElementsByTagName("head")[0] || document.documentElement).appendChild(script_tag);
    }
    
    function loadTwilioCommonJs() {
        if(window.Twilio.AccessManager === undefined){
            var script_tag = document.createElement('script');
    		script_tag.setAttribute("type","text/javascript");
    		script_tag.setAttribute("src",
    			"//media.twiliocdn.com/sdk/js/common/v0.1/twilio-common.min.js");
    		if (script_tag.readyState) {
    				script_tag.onreadystatechange = function () { // For old versions of IE
    				if (this.readyState == 'complete' || this.readyState == 'loaded') {
    			      cc_chat._getChattoken();
    				}
    			};
    		} else { // Other browsers
    			script_tag.onload = cc_chat._getChattoken;
    		}
    		// Try to find the head, otherwise default to the documentElement
    		(document.getElementsByTagName("head")[0] || document.documentElement).appendChild(script_tag);
            
        } else {
            cc_chat._getChattoken(cc_chat._initialiseChatClient);
        }
            
    }
    return{
        cc_chat: cc_chat
    };
    
})();