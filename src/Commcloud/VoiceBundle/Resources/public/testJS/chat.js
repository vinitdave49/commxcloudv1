$(document).ready(function(){
     path = $("#abc").attr("data-path");
    console.log('path '+ path);
    // Get handle to the chat div 
    var $chatWindow = $('#messages');

    // Manages the state of our access token we got from the server
    var accessManager;

    // Our interface to the IP Messaging service
    var messagingClient;

    // A handle to the "general" chat channel - the one and only channel we
    // will have in this sample app
    var generalChannel;

    // The server will assign the client a random username - store that value
    // here
    var username;

    // Helper function to print info messages to the chat window
    function print(infoMessage, asHtml) {
        var $msg = $('<div class="info">');
        if (asHtml) {
            $msg.html(infoMessage);
        } else {
            $msg.text(infoMessage);
        }
        $chatWindow.append($msg);
    }

    // Helper function to print chat message to the chat window
    function printMessage(fromUser, message) {
        var $user = $('<span class="username">').text(fromUser + ':');
        if (fromUser === username) {
            $user.addClass('me');
        }
        var $message = $('<span class="message">').text(message);
        var $container = $('<div class="message-container">');
        $container.append($user).append($message);
        $chatWindow.append($container);
        $chatWindow.scrollTop($chatWindow[0].scrollHeight);
    }
   // getworkerToken();
    // Alert the user they have been assigned a random username
    print('Logging in...');

    // Get an access token for the current user, passing a username (identity)
    // and a device ID - for browser-based apps, we'll always just use the 
    // value "browser"
    // $.post('/web/app_dev.php/getchattoken', {
    //     identity: path,
    //     device: 'browser'
    // }, function(data) {
    //     data = JSON.parse(data);
    //     console.log(data);
    //     // Alert the user they have been assigned a random username
    //     username = data.identity;
    //     console.log('uername: ' + username);
    //     print('You have been assigned a random username of: ' 
    //         + '<span class="me">' + username + '</span>', true);

    //     // Initialize the IP messaging client
        
    //     accessManager = new Twilio.AccessManager(data.token);
    //     messagingClient = new Twilio.IPMessaging.Client(accessManager);

    //     // Get the general chat channel, which is where all the messages are
    //     // sent in this simple application
    //     // var promise = messagingClient.getChannelBySid(<channel-sid>)
    //     print('Attempting to join "general" chat channel...');
    //     var promise = messagingClient.getChannelByUniqueName(username);
    //     promise.then(function(channel) {
    //         generalChannel = channel;
    //         if (!generalChannel) {
    //             // If it doesn't exist, let's create it
    //             createchannel(messagingClient, username);
    //         } else {
    //             console.log('Found general channel:');
    //           // console.log(generalChannel);
    //           // console.log(generalChannel.uniqueName);
    //           // console.log(generalChannel.friendlyName);
    //             generalChannel.delete().then(function(channel) {
    //                 console.log("Deleted channel: " + channel.sid);
    //                 createchannel(messagingClient, username);
    //             })
              
    //           //  setupChannel();
    //         }
    //     });
    // });
    
        var jsondata = {'identity': path, 'device': 'browser'};
        console.log(jsondata);
		console.log("inside try block");
		var xmlhttp = new XMLHttpRequest();   
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
				var data = JSON.parse(xmlhttp.responseText);
				console.log(data);
			    //Alert the user they have been assigned a random username
                username = data.identity;
                console.log('uername: ' + username);
                print('You have been assigned a random username of: ' 
                    + '<span class="me">' + username + '</span>', true);
        
                // Initialize the IP messaging client
                
                accessManager = new Twilio.AccessManager(data.token);
                messagingClient = new Twilio.IPMessaging.Client(accessManager);
        
                // Get the general chat channel, which is where all the messages are
                // sent in this simple application
                // var promise = messagingClient.getChannelBySid(<channel-sid>)
                print('Attempting to join "general" chat channel...');
                var promise = messagingClient.getChannelByUniqueName(username);
                promise.then(function(channel) {
                    generalChannel = channel;
                    if (!generalChannel) {
                        // If it doesn't exist, let's create it
                        createchannel(messagingClient, username);
                    } else {
                        console.log('Found general channel:');
                      // console.log(generalChannel);
                      // console.log(generalChannel.uniqueName);
                      // console.log(generalChannel.friendlyName);
                        generalChannel.delete().then(function(channel) {
                            console.log("Deleted channel: " + channel.sid);
                            createchannel(messagingClient, username);
                        });
                      
                    }  //  setupChannel();
                });
			        
			}
			else{
				console.log("error");
			}
		};	
        xmlhttp.open("POST", '/web/app_dev.php/getchattoken', true);
        xmlhttp.setRequestHeader('Accept', '*/*');
        xmlhttp.setRequestHeader('Content-Type', 'text/json');
        xmlhttp.send(JSON.stringify(jsondata));
   

			
   function createchannel(messagingClient, username){
        messagingClient.createChannel({
                    uniqueName: username,
                    friendlyName: 'Commcloud Chat Channel',
                    type: 'private'
                }).then(function(channel) {
                    console.log('Created private channel:');
                    console.log(channel);
                    generalChannel = channel;
                    setupChannel(generalChannel);
                });
    }
    // Set up channel after it has been found
    function setupChannel(generalChannel) {
        // Join the general channel
        generalChannel.join().then(function(channel) {
            print('Joined channel as ' 
                + '<span class="me">' + username + '</span>.', true);
        });
        
        generalChannel.on('memberJoined', function(member) {
            console.log(member.identity + 'agent has joined the channel.');
            print('<span class="me">' + member.identity + '</span>.' + 'agent has joined the channel.', true);
        });
        // Listen for new messages sent to the channel
        generalChannel.on('messageAdded', function(message) {
            printMessage(message.author, message.body);
        });
        
    }

    // Send a new message to the general channel
    var $input = $('#chat-input');
    $input.on('keydown', function(e) {
        if (e.keyCode == 13) {
            generalChannel.sendMessage($input.val())
            $input.val('');
        }
    });
});