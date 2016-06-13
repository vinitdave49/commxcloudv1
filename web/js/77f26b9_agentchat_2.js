 window.chat = window.chat || {};

$(document).ready(function(){
    
    path = $("#abc").attr("data-path");
    
    console.log('path'+ path);
    
    // Get handle to the chat div 
    var $chatWindow = $('#messages');

    // Manages the state of our access token we got from the server
    var accessManager;

    // Our interface to the IP Messaging service
    var messagingClient;

    // A handle to the "general" chat channel - the one and only channel we
    // will have in this sample app
    var privateChannel;

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
    $.post('/web/app_dev.php/getchattoken', {
        identity: path,
        device: 'browser'
    }, function(data) {
        
        data = JSON.parse(data);
        console.log(data);
        
        // Alert the user they have been assigned a random username
        username = data.identity;
        console.log('uername: ' + username);
        print('You have been assigned a username of: ' 
            + '<span class="me">' + username + '</span>', true);

        // Initialize the IP messaging client
        chat.accessManager = new Twilio.AccessManager(data.token);
        chat.messagingClient = new Twilio.IPMessaging.Client(chat.accessManager);

       
    });
    
   
    // Set up channel after it has been found
     chat.setupChannel = function (channelSid) {
        console.log('Channel Sid:'+channelSid);
        
        // Join the general channel
        var promise = chat.messagingClient.getChannelBySid(channelSid);
        promise.then(function(channel) {
             privateChannel = channel;
             console.log('Found channel:');
             console.log(privateChannel);
             console.log(privateChannel.uniqueName);
             console.log(privateChannel.friendlyName);
             
             privateChannel.join().then(function(channel) {
                print('Joined channel as ' 
                    + '<span class="me">' + username + '</span>.', true);
             });
    
            // Listen for new messages sent to the channel
             privateChannel.on('messageAdded', function(message) {
                printMessage(message.author, message.body);
             });
                
             privateChannel.on('channelAdded', function(channel) {
                console.log("on channel added: " + channel);
             });
        });
        
       
    }

    // Send a new message to the general channel
    var $input = $('#chat-input');
    $input.on('keydown', function(e) {
        if (e.keyCode == 13) {
            privateChannel.sendMessage($input.val());
            $input.val('');
        }
    });
});