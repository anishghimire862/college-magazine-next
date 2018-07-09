<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    function clearNotifications() {
        /* 
            clears notification 
        */
        $_SESSION['notification'] = array();
    }

    function createNotification($notification) {
        /* session ma notification vanne variable(array) chha huna ni sakcha nahuna ni sakchha. if chha bhane append to the array. 
        else create new array and append */
        /*
            creates notification
            
            It is used when a notification is to be created. Pass the notification text as parameter.
            
            @param notification: notification text
            @type notification: string
            
        */
        if(!isset($_SESSION['notification'])) {
            $_SESSION['notification'] = array();
        }
        array_push($_SESSION['notification'],$notification);
    }
    

    function displayNotification() { 
        /*
            displays notification
        */
        if(isset($_SESSION['notification'])) {
            foreach($_SESSION['notification'] as $notification) { ?>

                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <?php echo $notification; ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
    <?php
            }
            clearNotifications();
        }
    }
    ?>
    