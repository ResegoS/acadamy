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
      <a href="students.php" class="w3-bar-item w3-button">Students</a>
      <a href="marks.php" class="w3-bar-item w3-button">Record Marks</a>
      <a href="login.php" class="w3-bar-item w3-button" name="logout">Logout</a>
    </div>

    <!-- Navigation bar on small screens -->
    <div class="w3-center w3-light-grey w3-padding-16 w3-hide-large w3-hide-medium">
      <div class="w3-bar w3-light-grey">
        <a href="index-home.html" class="w3-bar-item w3-button">Home</a>
        <a href="students.php" class="w3-bar-item w3-button">Students</a>
        <a href="marks.php" class="w3-bar-item w3-button">Record Marks</a>
        <a href="login.php" class="w3-bar-item w3-button" name="logout">Logout</a>
      </div>
    </div>
    <script src="javascript/students.js"></script>
  </header>

  <body>
    <div class="w3-light-grey w3-padding-large w3-padding-32 w3-margin-top" id="users">
      <h3 class="w3-center">Below is a list of student progress.</h3>
      <hr/>

      <form action="" method="POST">
        <div class="w3-section">
          <div class="w3-table w3-bordered">

            <div class="w3-section">
                <input type="text" name="search_bar" id="search_bar" style="vertical-align: right;" onkeyup="search()" placeholder="Search..."/>
            </div>

            <table id="members" name="members">

              <th>User ID</th>
              <th>Course</th>
              <th>Assessment</th>
              <th>Mark</th>
              <th>Comment</th>
              <?php
                //Employees and Clients
                $query= $conn->query("SELECT * FROM marks");

                while($user_data= $query->fetch(PDO::FETCH_ASSOC))
                {
                $user_id=$user_data['user_id'];
                $last_name=$user_data['course'];
                $school=$user_data['assessment'];
                $facility=$user_data['mark'];
                $maths=$user_data['comment'];

                echo
                  "<tr id='user_info'>
                    <td>$user_id</td>
                    <td>$course</td>
                    <td>$assessment</td>
                    <td>$mark</td>
                    <td>$comment</td>
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
