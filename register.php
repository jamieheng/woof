<?php

@include 'config.php';
session_start();
// $dbhost = "localhost";
//  $dbuser = "insothiry";
//  $dbpass = "";
//  $db = "yourwoofRegistration";
// $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
// $conn = mysqli_connect("localhost", "root", "", "insothiry");

$conn = OpenCon();
if(isset($_POST['submit']))
{

   $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
   $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $passwords = md5($_POST['passwords']);
   $cpassword = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = "SELECT * FROM register WHERE email = '$email' && passwords = '$passwords' ";

   $result = mysqli_query($conn, $select);
   // echo ($firstname);
   // echo mysqli_num_rows($result);
   if(mysqli_num_rows($result) > 0)
   {

      $error[] = 'user already exist!';

   }
   else if (mysqli_num_rows($result) <= 0)
   {
      if($passwords != $cpassword)
      {
         $error[] = 'password not matched!';
      }
      else
      {
         
         $insert = "INSERT INTO register VALUES(0,'$firstname', '$lastname', '$username','$email','$passwords', '$cpassword', '$user_type')";
         mysqli_query($conn, $insert);

         $_SESSION["email"] = $email;
         $_SESSION["username"] = $username;
   
         $result = mysqli_query($conn, $select);
         $row = mysqli_fetch_array($result);

         if($row['user_type'] == 'admin')
         {

         $_SESSION['username'] = $row['username'];
            header('location: admin_panel/index.php');

         }
         else if($row['user_type'] == 'user')
         {

            $_SESSION['username'] = $row['username'];
            header('location: mainpage/index.php');

         }
      }
   } 
   else echo "could not insert into database";
   mysqli_close($conn);

};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/stylesheet.css">

</head>
<body>
   
<div class="form-container">

   <form method="post">
      <h3>register now</h3>
      
      <input type="text" name="firstname" required placeholder="Enter your first name">
      <input type="text" name="lastname" required placeholder="Enter your last name">
      <input type="text" name="username" required placeholder="Enter your username">
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="passwords" required placeholder="Enter your password">
      <input type="password" name="cpassword" required placeholder="Confirm your password">
      <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>

      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>Already have an account? <a href="login.php">login now</a></p>
   </form>

</div>

</body>
</html>