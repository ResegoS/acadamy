<?php
  include('php/marks-php.php');
  $first_name= $_SESSION['first_name'];

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

  <title>
    Record Marks
  </title>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
  <!--<link rel="stylesheet" href="css/students.css"/>-->

  <body>
    <header class="w3-display-container w3-content w3-center" style="max-width:1500px">
      <img class="w3-image" src="images/1772051.jpg" alt="Me" width="1500" height="600">
      <div class="w3-display-middle w3-padding-large w3-border w3-wide w3-text-light-grey w3-center">
        <h1  style="top:50px; color:#5a97f2;" class="w3-hide-medium w3-hide-small w3-xxxlarge">Inpire</h1>
        <h5 class="w3-hide-large" style="white-space:nowrap color:#0a0a0a;"></h5>
        <h3 class="w3-hide-medium w3-hide-small" style="color:#5a97f2;">Foundation Acadamy</h3>
        <h3 class="w3-hide-medium w3-hide-small" style="color:#5a97f2;"><?php echo "$first_name";?></h3>
      </div>

      <!-- Navigation bar (placed at the bottom of the header image) -->
      <div class="w3-bar w3-light-grey w3-round w3-display-bottommiddle w3-hide-small" style="bottom:-16px;" >
        <a href="index-home.html" class="w3-bar-item w3-button">Home</a>
        <a href="students.php" class="w3-bar-item w3-button">Students</a>
        <a href="report.php" class="w3-bar-item w3-button">Progress</a>
    	  <a href="login.php" class="w3-bar-item w3-button" name="logout">Logout</a>
      </div>
    </header>

    <!-- Navigation bar on small screens -->
    <div class="w3-center w3-light-grey w3-padding-16 w3-hide-large w3-hide-medium">
      <div class="w3-bar w3-light-grey">
        <a href="index-home.html" class="w3-bar-item w3-button">Home</a>
        <a href="students.php" class="w3-bar-item w3-button">Students</a>
        <a href="login.php" class="w3-bar-item w3-button" name="logout">Logout</a>
      </div>
    </div>

    <div class="nbody" style="margin: 100px 400px; overflow: hidden; width: 600px;">

  		<div class="w3-light-grey w3-padding-large w3-padding-32 w3-margin-top" id="registration_form">

      <form action="" method="POST" enctype="multipart/form-data">
        <table style="padding:15px; border-spacing:10px;">
          <div class="w3-section">
            <th style="text-align:center; font-size:20px; color: #0047b3;" colspan="2">Please fill in all fields.</th>
          </div>

          <div class="w3-section" id="grade_div">
            <tr>
              <td><label for="grade" style="color: #0047b3;">Course</label></td>
              <td>
                <select  id="course" name="course" placeholder="Course">
                  <option value="1">Accounting</option>
                  <option value="2">Information Communication Technology</option>
                  <option value="3">Physical Science</option>
                  <option value="4">Mathatics</option>
              </td>
            </tr>
          </div>

          <div class="w3-section">
            <tr>
              <td><label style=" color: #0047b3;">User_id</label></td>
              <td><input type="number" name="user_id" id="user_id" required style="vertical-align: right;"/></td>
            </tr>
          </div>

          <div class="w3-section">
            <tr>
              <td><label style=" color: #0047b3;">Assessment</label></td>
              <td><input type="text" name="assessment" required/></td>
            </tr>
          </div>

          <div class="w3-section">
            <tr>
              <td><label style=" color: #0047b3;">Mark</label></td>
              <td><input type="number" name="mark" required/></td>
            </tr>
          </div>

          <div class="w3-section">
            <tr>
              <td><label style=" color: #0047b3;">Comment</label></td>
              <td><textarea name="comment" colspan="10"></textarea></td>
            </tr>
          </div>
      </table>

          <button type="submit" name="submit" id="submit" class="w3-button w3-block w3-dark-grey" style="padding: 5px 10px; border-radius:4px; width:20%; position:relative; left:110px;">
            Submit
          </button>
      </form>
    </div>
    </div>
    </div>
  </body>
</html>
