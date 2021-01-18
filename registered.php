<?php
  include('php/registered-php.php');
  $first_name= $_SESSION['first_name'];
  $user_id= $_SESSION['user_id'];

  if (!isset($_SESSION['user_id']))
  {
    $_SESSION['msg'] = "You have to log in first";
    header('location: login.php');
  }

  if (isset($_GET['logout']))
  {
    session_destroy();
    unset($_SESSION['user_id']);
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
 <!-- Header -->
 <title>
   Courses
 </title>
 <meta charset="UTF-8"/>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
 <!--<link rel="stylesheet" href="css/students.css"/>-->

 <header class="w3-display-container w3-content w3-center" style="max-width:1500px">
   <img class="w3-image" src="images/1772051.jpg" alt="Me" width="1500" height="600"/>
   <div class="w3-display-middle w3-padding-large w3-border w3-wide w3-text-light-grey w3-center">
     <h1  style="top:50px; color:#5a97f2;"class="w3-hide-medium w3-hide-small w3-xxxlarge">Inspire</h1>
     <h5 class="w3-hide-large" style="white-space:nowrap"></h5>
     <h3 class="w3-hide-medium w3-hide-small" style="color:#5a97f2;">Foundation Acadamy</h3>
     <h3 class="w3-hide-medium w3-hide-small" style="color:#5a97f2;"><?php echo $first_name;?></h3>
   </div>

   <!-- Navigation bar (placed at the bottom of the header image) -->
   <div class="w3-bar w3-light-grey w3-round w3-display-bottommiddle w3-hide-small" style="bottom:-16px;">
     <a href="index-s.php" class="w3-bar-item w3-button" name="home">Home</a>
     <a href="login.php" class="w3-bar-item w3-button" name="logout">Logout</a>
   </div>

   <!-- Navigation bar on small screens -->
   <div class="w3-center w3-light-grey w3-padding-16 w3-hide-large w3-hide-medium">
     <div class="w3-bar w3-light-grey">
       <a href="index-s.php" class="w3-bar-item w3-button" name="home">Home</a>
       <a href="login.php" class="w3-bar-item w3-button" name="logout">Logout</a>
     </div>
   </div>
 </header>

 <body>
   <div class="w3-light-grey w3-padding-large w3-padding-32 w3-margin-top" id="courses">
     <h3 class="w3-center">Below is a list of all courses.</h3>
     <hr/>

     <form action="" method="POST">
       <div class="w3-section">
         <div class="w3-table w3-bordered">
           <table id="members" name="members">

             <th>Facility</th>
             <th>ICT</th>
             <th>Mathematics</th>
             <th>Physical Science</th>
             <th>Accounting</th>

             <?php
               //Employees and Clients
               $query= $conn->query("SELECT * FROM student_information WHERE user_id='$user_id'");

               while($user_data= $query->fetch(PDO::FETCH_ASSOC))
               {

                 $facility=$user_data['facility'];
                 $maths=$user_data['Maths'];
                 $science=$user_data['Science'];
                 $accounting=$user_data['Accounting'];
                 $ict=$user_data['ICT'];

                 echo
                   "
                    <tr>
                    <td>$facility</td>
                    <td>$ict</td>
                    <td>$maths</td>
                    <td>$science</td>
                    <td>$accounting</td>
                    </tr>
                   ";

                   if($ict==="Registered")
                   {
                     echo"<tr><td></td><td><button name='ict-btn1'>De-register</button></td>";
                   }

                   else
                   {
                     echo"<td><button name='ict-btn2'>Register</button></td>";
                   }

                   if($maths==='Registered')
                   {
                     echo"<td><button name='maths-btn1'>De-register</button></td>";
                   }

                   else
                   {
                     echo"<td><button name='maths-btn2'>Register</button></td>";
                   }

                   if($science==='Registered')
                   {
                     echo"<td><button name='science-btn1'>De-register</button></td>";
                   }

                   else
                   {
                     echo"<td><button name='science-btn2'>Register</button></td>";
                   }

                   if($accounting==="Registered")
                   {
                     echo"<td><button name='accounting-btn1'>De-register</button></td>";
                   }

                   else
                   {
                     echo"<td><button name='accounting-btn2'>Register</button></td></tr>";
                   }
               }
             ?>
         </table>
   </div>
 </body>
</html>
