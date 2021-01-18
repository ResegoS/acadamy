<?php
  include("php/login-php.php");

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
    Students
  </title>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
  <link rel="stylesheet" href="css/students.css"/>

  <header class="w3-display-container w3-content w3-center" style="max-width:1500px">
    <img class="w3-image" src="images/1772051.jpg" alt="Me" width="1500" height="600"/>
    <div class="w3-display-middle w3-padding-large w3-border w3-wide w3-text-light-grey w3-center">
      <h1  style="top:50px; color:#5a97f2;"class="w3-hide-medium w3-hide-small w3-xxxlarge">Inspire</h1>
      <h5 class="w3-hide-large" style="white-space:nowrap"></h5>
      <h3 class="w3-hide-medium w3-hide-small" style="color:#5a97f2;">Foundation Acadamy</h3>
    </div>

    <!-- Navigation bar (placed at the bottom of the header image) -->
    <div class="w3-bar w3-light-grey w3-round w3-display-bottommiddle w3-hide-small" style="bottom:-16px;">
      <a href="index-home.html" class="w3-bar-item w3-button">Home</a>
      <a href="marks.php" class="w3-bar-item w3-button">Record Marks</a>
      <a href="report.php" class="w3-bar-item w3-button">Progress</a>
      <a href="login.php" class="w3-bar-item w3-button" name="logout">Logout</a>
    </div>

    <!-- Navigation bar on small screens -->
    <div class="w3-center w3-light-grey w3-padding-16 w3-hide-large w3-hide-medium">
      <div class="w3-bar w3-light-grey">
        <a href="index-home.html" class="w3-bar-item w3-button">Home</a>
        <a href="marks.php" class="w3-bar-item w3-button">Record Marks</a>
        <a href="report.php" class="w3-bar-item w3-button">Progress</a>
        <a href="login.php" class="w3-bar-item w3-button" name="logout">Logout</a>
      </div>
    </div>
    <script src="javascript/students.js"></script>
  </header>

  <body>
    <div class="w3-light-grey w3-padding-large w3-padding-32 w3-margin-top" id="users">
      <h3 class="w3-center">Below is a list of all the students registered in the system.</h3>
      <hr/>

      <form action="" method="POST">
        <div class="w3-section">
          <div class="w3-table w3-bordered">

            <div class="w3-section">
                <input type="text" name="search_bar" id="search_bar" style="vertical-align: right;" onkeyup="search()" placeholder="Search..."/>
            </div>

            <table id="members" name="members">

              <th>User ID</th>
              <th>Last Name</th>
              <th>School</th>
              <th>Facility</th>
              <th>ICT</th>
              <th>Mathematics</th>
              <th>Physical Science</th>
              <th>Accounting</th>
              <?php
                //Employees and Clients
                $query2= $conn->query("SELECT * FROM student_information");

                while($user_data2= $query2->fetch(PDO::FETCH_ASSOC))
                {
                $last_name=$user_data2['last_name'];
                $user_id=$user_data2['user_id'];
                $school=$user_data2['school'];
                $facility=$user_data2['facility'];
                $maths=$user_data2['Maths'];
                $grade=$user_data2['grade'];
                $science=$user_data2['Science'];
                $accounting=$user_data2['Accounting'];
                $ict=$user_data2['ICT'];

                echo
                  "<tr id='user_info'>
                    <td>$user_id</td>
                    <td>$last_name</td>
                    <td>$school</td>
                    <td>$facility</td>
                    <td>$ict</td>
                    <td>$maths</td>
                    <td>$science</td>
                    <td>$accounting</td>
                  </tr>";
                }
              ?>
            </table>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
