<?php
  include('connection.php');
  //use PHPMailer\PHPMailer;
  session_start();
  //Registration
  if(isset($_POST['register']))
  {
      //declare variables
      $user_id='';
      $first_name=$_POST['first_name'];
      $last_name=$_POST['last_name'];
      $password= $_POST['password'];
      $confirm_password=$_POST['confirm_password'];
      $email=$_POST['email'];
      $confirm_email=$_POST['confirm_email'];
      $contact=$_POST['contact'];
      $user_type=$_POST['user_type'];

      try
      {
        //verifying user
        //checking database
        $query= $conn->query("SELECT email FROM registration WHERE email='$email'");
        $user_email= $query->rowCount();

        //verifying email
        if($user_email == 0)
        {
          if($password==$confirm_password)
          {
            if($email==$confirm_email)
            {
                do
                {
                  //Randomizing the ID
                  $user_id= rand(11111111,99999999);

                  //checking if user ID exists
                  $user_id_query=$conn->query("SELECT user_id FROM registration WHERE user_id=$user_id");
                  $user_count= $user_id_query->rowCount();
                  if($user_count==0)
                  {
                    $user_count++;
                  }

                  else
                  {
                    $user_count=0;
                  }
                }while($user_count=0);

                //$hashed_password= password_hash($password, PASSWORD_DEFAULT);

                //Storing data
                $sql=$conn->prepare("INSERT INTO registration(user_id,last_name,first_name,user_type,password,email,contact_number)
                VALUES ('$user_id','$last_name','$first_name','$user_type','$password','$email','$contact')");
                $sql->execute();

                if($user_type=='Tutor' || $user_type=='Educator')
                {
                  $_SESSION['user_id'] = $user_id;
                  $_SESSION['first_name']=$first_name;
                  // Welcome message
                  $_SESSION['success'] = "You Have Successfully Registered";
                  header('location:welcome.php');
                }

                else
                {
                  $_SESSION['user_id'] = $user_id;
                  $_SESSION['first_name']=$first_name;
                  $_SESSION['user_type']=$user_type;
                  $_SESSION['success'] = "You Have Successfully Registered";
                  header('location:student-index.php');
                }
              }

              else
              {
                echo "Emails do not match!";
              }
            }

            else
            {
              echo "Password do not match!";
            }
          }

          else
          {
            echo "Email already exists.";
          }
      }

      catch(PDOException $e)
      {
        $error= "Error: ".$e->getMessage();
      }
  }
