<?php
  include('php/registration-php.php');
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta charset="utf-8">
    <title>
      Register
    </title>
  </head>

  <body style="background-image: url('images/1772051.jpg');">

    <div class="nbody" style="margin: 100px 400px; overflow: hidden; width: 600px;">

  		<div class="w3-light-grey w3-padding-large w3-padding-32 w3-margin-top" id="registration_form">

      <form action="" method="POST">
        <table style="padding:15px; border-spacing:10px;">
          <div class="w3-section">
            <th style="text-align:center; font-size:20px; color: #0047b3;" colspan="2">Please fill in all fields.</th>
          </div>

          <div class="w3-section">
            <tr>
              <td><label style=" color: #0047b3;">First Name</label></td>
              <td><input type="text" name="first_name" id="first_name" required style="vertical-align: right;"></td>
            </tr>
          </div>

          <div class="w3-section">
            <tr>
              <td><label style=" color: #0047b3;">Last Name</label></td>
              <td><input type="text" name="last_name" id="last_name" required style="vertical-align: right;"/></td>
            </tr>
          </div>

          <div class="w3-section">
            <tr>
              <td><label style=" color: #0047b3;">Email Address</label></td>
              <td><input type="text" name="email" id="email" required style="vertical-align: right;"/></td>
            </tr>
          </div>

          <div class="w3-section">
            <tr>
              <td><label style=" color: #0047b3;"> Confirm Email Address</label></td>
              <td><input type="text" name="confirm_email" id="confirm_email" required style="vertical-align: right;"/></td>
            </tr>
          </div>

          <div class="w3-section">
            <tr>
              <td><label style=" color: #0047b3;">Contact Number</label></td>
              <td><input type="text" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"
                        name="contact" id="contact" required style="vertical-align: right;"/></td>
            </tr>
          </div>

          <div class="w3-section">
            <tr>
              <td><label style=" color: #0047b3;">Password</label></td>
              <td><input type="password" name="password" id="password" required style="vertical-align: right;"/></td>
            </tr>
          </div>

          <div class="w3-section">
            <tr>
              <td><label style=" color: #0047b3;">Confirm Password</label></td>
              <td><input type="password" name="confirm_password" id="confirm_password" required style="vertical-align: right;"/></td>
            </tr>
          </div>

          <div class="w3-section">
            <tr>
              <td><label style="color: #0047b3;">User Type</label></td>
              <td>
                <select name="user_type" id="user_type">
                  <option>Student</option>
                  <option>Educator</option>
                  <option>Tutor</option>
                </select>
              </td>
            </tr>
          </div>

        </table>

        <div class="w3-section">
          <button type="submit" name="register" id="register" class="w3-button w3-block w3-dark-grey" style="padding: 5px 10px; border-radius:4px; width:20%; position:relative; left:110px;">
            Sign Up
          </button>
        </div>

        <div class="w3-section">
          <a href="login.php" style="font-weight:bold; position:relative; left:28px;">
            Already have an account? Sign In
          </a>
        </div>
      </form>
      </div>
    </div>
  </body>
</html>
