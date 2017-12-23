<?php 
//Class Object Notifications
class Notifications{
    //Properties var
    public $receiver;
    public $isRead = false;
    
    //Method Constructor
    public function __construct($receiver) {
     $this->receiver = $receiver;   
    }
    
    //method validReceiver
    public function validReceiver(){
        if($receiver != '' || NULL) {
            return true;
        } else {
            return false;
        }
    }
    
    public function markAsRead($isReadfalse=false, $isReadtrue=true){
        if($this->isRead !== $isReadfalse || $isReadtrue ){
            return false;
        } 
    }
    
    public function status(){
        if($this->isRead == true){
            echo "read";
        }else{
            echo "unread";
        }
    }
}

//EmailNotifications Extends from parent class Notifications
class EmailNotification extends Notifications{
    
    public function AccessStatus(){
        return $this->status;
    }
}

//from parent class
$notifications = new Notifications();
$notifications.status();

//from class EmailNotifications
$emailnotifikasi = new EmailNotification();
$emailnotifikasi.AccessStatus();

?>