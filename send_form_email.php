<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $roobt = $_POST['roobt'];
    $from = 'From: andrew@andrewbregman.com'; 
    $to = 'djbreg@gmail.com'; 
    $subject = 'Hello';
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if ($_POST['submit']) {
      if($roobt == "robot")
        if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Your message has been sent!</p>';
        else{
          echo '<p>Uh oh, something went wrong!</p>';
        }
      }
      else{
          echo '<p>Uh oh, something went wrong!</p>';
      } 

      else { 
          echo '<p>Something went wrong, go back and try again!</p>'; 
      }
    }

?>