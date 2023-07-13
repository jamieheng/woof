<?php

@include 'config.php';
session_start();

$conn = OpenCon();


if (isset($_POST['submit'])) {

   $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
   $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $passwords = md5($_POST['passwords']);
   $cpassword = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];


   // Validate password strength 
   $password = ($_POST['passwords']);
   $uppercase = preg_match('@[A-Z]@', $password);
   $lowercase = preg_match('@[a-z]@', $password);
   $number    = preg_match('@[0-9]@', $password);
   $specialChars = preg_match('@[^\w]@', $password);

   echo $uppercase;



   $select = "SELECT * FROM register WHERE email = '$email' ";

   $result = mysqli_query($conn, $select);

   if (mysqli_num_rows($result) > 0) {

      $error[] = 'User already exist!';
   } else if (mysqli_num_rows($result) <= 0) {


      if (($uppercase  || $lowercase || $number || $specialChars || strlen($password) < 8) == 0) {
         echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
         echo $passwords;
         echo ($_POST['passwords']);
      } else {
         if ($cpassword != $passwords) {
            $error[] = 'Password is not matched!';
         } else {

            $insert = "INSERT INTO register VALUES(0,'$firstname', '$lastname', '$username','$email','$passwords', '$cpassword', '$user_type')";
            mysqli_query($conn, $insert);

            $_SESSION["email"] = $email;
            $_SESSION["username"] = $username;

            $result = mysqli_query($conn, $select);
            $row = mysqli_fetch_array($result);

            if ($row['user_type'] == 'admin') {

               $_SESSION['username'] = $row['username'];
               header('location: admin_panel/index.php');
            } else if ($row['user_type'] == 'user') {

               $_SESSION['username'] = $row['username'];
               header('location: mainpage/index.php');
            }
         }
      }
   } else echo "Could not insert into database";
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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
   <script src="passValidation.js" defer></script>

</head>

<body>

   <div class="form-container">

      <form method="post">
         <h3>register now</h3>
         <?php
         if (isset($error)) {
            foreach ($error as $error) {
               echo '<span class="error-msg">' . $error . '</span>';
            };
         };
         ?>

         <input type="text" name="firstname" required placeholder="Enter your first name">
         <input type="text" name="lastname" required placeholder="Enter your last name">
         <input type="text" name="username" required placeholder="Enter your username">
         <input type="email" name="email" required placeholder="Enter your email">
         <!-- <input type="password" name="passwords" required placeholder="Enter your password"> -->
         <div class="wrapper">
            <div class="pass-field">
               <input type="password" name="passwords" required placeholder="Create your password">
               <i class="fa-solid fa-eye"></i>
            </div>
            <div class="content" required>
               <!-- <p>Password must contains</p> -->
               <ul class="requirement-list">
                  <li>
                     <i class="fa-solid fa-circle"></i>

                     <span>At least 8 characters length</span>
                  </li>
                  <li>
                     <i class="fa-solid fa-circle"></i>
                     <span>At least 1 number (0...9)</span>
                  </li>
                  <li>
                     <i class="fa-solid fa-circle"></i>
                     <span>At least 1 lowercase letter (a...z)</span>
                  </li>
                  <li>
                     <i class="fa-solid fa-circle"></i>
                     <span>At least 1 special symbol (!...$)</span>
                  </li>
                  <li>
                     <i class="fa-solid fa-circle"></i>
                     <span>At least 1 uppercase letter (A...Z)</span>
                  </li>
               </ul>
            </div>
         </div>
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