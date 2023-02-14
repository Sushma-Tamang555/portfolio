<?php
$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');
  if(isset($_POST['send'])){

    $name =mysqli_real_escape_string($conn, $_POST['name']);
    $email =mysqli_real_escape_string($conn, $_POST['email']);
    $number =mysqli_real_escape_string($conn, $_POST['number']);
    $msg =mysqli_real_escape_string($conn, $_POST['message']);
    
    $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name='$name'AND email='$email' AND number='$number' AND message='$msg'") or die('query failed from line 11');

     if(mysqli_num_rows($select_message)>0){
    echo  'message sent already';
     }
     else{
       mysqli_query($conn,"INSERT INTO `contact_form` (`name`, `email`, `number`, `message`) VALUES ('$name', '$email','$number', '$msg');") or die ('query failed from line 1');
echo 'message sent successfully';
     }
  }
?>
