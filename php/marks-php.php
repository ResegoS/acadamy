<?php
  include('login-php.php');

  if(isset($_POST['submit']))
  {
    $user_id=$_POST['user_id'];
    $comment=$_POST['comment'];
    $assessment=$_POST['assessment'];
    $mark=$_POST['mark'];
    $selected=$_POST['course'];

    $query=$conn->prepare("INSERT INTO marks(course, user_id, assessment, mark, comment) VALUES ('$selected','$user_id','$assessment','$mark','$comment')");
    $query->execute();
  }
?>
