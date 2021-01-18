<?php
  include('registration-php.php');
  $user_id = $_SESSION['user_id'];
  $last_name= $_SESSION['last_name'];

  if(isset($_POST['submit']))
  {
    $grade= $_POST['grade'];
    $maths_mark= $_POST['maths_mark'];
    $science_mark= $_POST['science_mark'];
    $ict_mark= $_POST['ict_mark'];
    $accounting_mark= $_POST['accounting_mark'];
    $facility= $_POST['facility'];
    $school=$_POST['school'];

    //if subjects are checked.
    if(isset($_POST['maths']))
    {
      $maths="Registered";
    }

    else
    {
      $maths="Not registered";
    }

    if(isset($_POST['science']))
    {
      $science="Registered";
    }

    else
    {
      $science="Not registered";
    }

    if(isset($_POST['accounting']))
    {
      $accounting="Registered";
    }

    else
    {
      $accounting="Not registered";
    }

    if(isset($_POST['ict']))
    {
      $ict="Registered";
    }

    else
    {
      $ict="Not registered";
    }

    //Uploading school report
    $file= $_FILES['report'];
    $file_name= $_FILES['report']['name'];
    $file_size= $_FILES['report']['size'];
    $file_type= $_FILES['report']['type'];
    $file_tmp_name= $_FILES['report']['tmp_name'];
    $file_error= $_FILES['report']['error'];

    $file_ext= explode('.', $file_name);
    $new_file_ext= strtolower(end($file_ext));

    $allowed= array('pdf','docx');

    if(in_array($new_file_ext, $allowed))
    {
      if($file_error===0)
        {
          $report_name = $user_id."/school_report.".$new_file_ext;
          $file_path='documentation/'.$report_name;

          /*if(move_uploaded_file($file_tmp_name, $file_path))
          {*/
            //Uploading Biography
            $file= $_FILES['biography'];
            $file_name= $_FILES['biography']['name'];
            $file_size= $_FILES['biography']['size'];
            $file_type= $_FILES['biography']['type'];
            $file_tmp_name= $_FILES['biography']['tmp_name'];
            $file_error= $_FILES['biography']['error'];

            $file_ext= explode('.', $file_name);
            $new_file_ext= strtolower(end($file_ext));

            $allowed= array('pdf','docx');

            if(in_array($new_file_ext, $allowed))
            {
              if($file_error===0)
              {
                $biography_name = $user_id."/biography.".$new_file_ext;
                $file_path='documentation/'.$biography_name;

                $sql=$conn->prepare("INSERT INTO student_information(user_id, school_report, biography, grade, maths_mark ,science_mark, ict_mark, accounting_mark, facility, Science, school, ICT, Maths, Accounting,last_name)
                VALUES ('$user_id','$report_name', '$biography_name','$grade', '$maths_mark', '$science_mark','$ict_mark','$accounting_mark','$facility','$science','$school','$ict','$maths','$accounting','$last_name')");
                $sql->execute();
                header('location:welcome.php');

                /*if(move_uploaded_file($file_tmp_name, $file_path))
                {

                }

                else
                {
                  echo "File was not uploaded.";
                }*/
              }

              else
              {
                echo "File was not uploaded.";
              }
          }

          else
          {
            echo"File type invalid.";
          }
        }

        else
        {
          echo "File was not uploaded.";
        }
      }

      else
      {
        echo "File was not uploaded.";
      }
    }
?>
