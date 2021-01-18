<?php
  include('php/student-index-php.php');

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
  <head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
    <meta charset="utf-8"/>
    <title>
      Additional Information
    </title>
  </head>

  <body style="background-image: url('images/1772051.jpg');">

    <div class="nbody" style="margin: 100px 400px; overflow: hidden; width: 600px;">

  		<div class="w3-light-grey w3-padding-large w3-padding-32 w3-margin-top" id="registration_form">

      <form action="" method="POST" enctype="multipart/form-data">
        <table style="padding:15px; border-spacing:10px;">
          <div class="w3-section">
            <th style="text-align:center; font-size:20px; color: #0047b3;" colspan="2">Please fill in all fields.</th>
          </div>

          <div class="w3-section">
            <tr>
              <td><label style=" color: #0047b3;">School</label></td>
              <td><input type="text" name="school" id="school" required style="vertical-align: right;"/></td>
            </tr>
          </div>

          <div class="w3-section">
            <tr>
              <td><label style=" color: #0047b3;">Facility to attend</label></td>
              <td>
                <select name="facility" id="facility">
                  <option>Bisho 1</option>
                  <option>Bisho 2</option>
                  <option>King Williams Town</option>
                  <option>Soweto</option>
                </select>
              </td>
            </tr>
          </div>

          <div class="w3-section">
            <tr>
              <td><label style=" color: #0047b3;">Subjects</label></td>
            </tr>

            <div class="w3-section" id="grade_div">
              <tr>
                <td><label for="grade" style="color: #0047b3;">Grade</label></td>
                <td>
                  <select  id="grade" name="grade">
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                  </select>
                </td>
              </tr>
            </div>

            <div id="mathematics-div">
              <tr>
                <td><label style='color: #0047b3;'>Mathematics</label></td>
                <td><input type='checkbox' name='maths' value='Mathematics'/>
                <input type='number' name='maths_mark' value='Current Mark' placeholder='Current Mark'/></td>
              </tr>
            </div>

            <div id="ict-div">
              <tr>
                <td><label style='color: #0047b3;'>Information Communcation Technology</label></td>
                <td><input type='checkbox' name='ict' value='Information Communcation Technology'/>
                <input type='number' name='ict_mark' placeholder='Current Mark'/></td>
              </tr>
            </div>

            <div id="science-div">
              <tr>
                <td><label style='color: #0047b3;'>Physical Science</label></td>
                <td><input type='checkbox' name='science' value='Physical Science'/>
                <input type='number' name='science_mark' placeholder='Current Mark'/></td>
              </tr>
            </div>

            <div id="accounting-div">
              <tr>
                <td><label style='color: #0047b3;'>Accounting</label></td>
                <td><input type='checkbox' name='accounting' value='Accounting'/>
                <input type='number' name='accounting_mark' placeholder='Current Mark'/></td>
              </tr>
          </div>

          <div class="w3-section">
            <tr>
              <td><label style=" color: #0047b3;">School Report</label></td>
              <td><input type="file" name="report" required/></td>
            </tr>
          </div>

          <div class="w3-section">
            <tr>
              <td><label style=" color: #0047b3;">Signed Biography</label></td>
              <td><input type="file" name="biography" required/></td>
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
