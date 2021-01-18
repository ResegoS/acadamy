<?php
include('login-php.php');
  if(isset($_POST['ict-btn1']))
  {
    $button="Not Registered";
    $query=$conn->prepare("UPDATE student_information SET ICT='$button' WHERE user_id='$user_id' ");
    $query->execute();
  }

  if(isset($_POST['maths-btn1']))
  {
    $button="Not Registered";
    $query=$conn->prepare("UPDATE student_information SET Maths='$button' WHERE user_id='$user_id' ");
    $query->execute();
  }

  if(isset($_POST['accounting-btn1']))
  {
    $button="Not Registered";
    $query=$conn->prepare("UPDATE student_information SET Accounting='$button' WHERE user_id='$user_id' ");
    $query->execute();
  }

  if(isset($_POST['science-btn1']))
  {
    $button="Not Registered";
    $query=$conn->prepare("UPDATE student_information SET ='$button' WHERE user_id='$user_id' ");
    $query->execute();
  }

  if(isset($_POST['ict-btn2']))
  {
    $button="Registered";
    $query=$conn->prepare("UPDATE student_information SET ICT='$button' WHERE user_id='$user_id' ");
    $query->execute();
  }

  if(isset($_POST['maths-btn2']))
  {
    $button="Registered";
    $query=$conn->prepare("UPDATE student_information SET Maths='$button' WHERE user_id='$user_id' ");
    $query->execute();
  }

  if(isset($_POST['science-btn2']))
  {
    $button="Registered";
    $query=$conn->prepare("UPDATE student_information SET Science='$button' WHERE user_id='$user_id' ");
    $query->execute();
  }

  if(isset($_POST['accounting-btn2']))
  {
    $button="Registered";
    $query=$conn->prepare("UPDATE student_information SET Accounting='$button' WHERE user_id='$user_id' ");
    $query->execute();
  }
?>
