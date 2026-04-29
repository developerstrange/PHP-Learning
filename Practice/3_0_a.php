<?php

interface Notifier{
  public function sentNotification($message, $recipient);
}

class EmailNotifier implements Notifier{
    public function sentNotification($message, $recipient){
      echo "Notification arrived via Email.<br>Message is: ". $message . ".<br>Recipient is: ". $recipient.".";
    }
}

class SmsNotifier implements Notifier{
    public function sentNotification($message, $recipient){
      echo "Notification arrived via SMS.<br>Message is: ". $message . ".<br>Recipient is: ". $recipient.".";
    }
}

class PushNotifier implements Notifier{
    public function sentNotification($message, $recipient){
      echo "Notification arrived via Push.<br>Message is: ". $message . ".<br>Recipient is: ". $recipient.".";
    }
}

$notification = new EmailNotifier();
$notification->sentNotification("Hi, how are you?", "Kabir");

?>