<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>CSC 208 Web Programming Group Assignment</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 

  $fullname = stripslashes($_REQUEST['name']);
	$fullname = mysqli_real_escape_string($con,$fullname);

  $groupno = stripslashes($_REQUEST['group']);
	$groupno = mysqli_real_escape_string($con,$groupno);

  $usersex = stripslashes($_REQUEST['sex']);
	$usersex = mysqli_real_escape_string($con,$usersex);

  $userphone = stripslashes($_REQUEST['phone_number']);
	$userphone = mysqli_real_escape_string($con,$userphone);

  $email = stripslashes($_REQUEST['user_email']);
	$email = mysqli_real_escape_string($con,$email);

	$useraddress = stripslashes($_REQUEST['user_address']);
	$useraddress = mysqli_real_escape_string($con,$useraddress);

  $usernextofkin = stripslashes($_REQUEST['next_of_kin']);
	$usernextofkin = mysqli_real_escape_string($con,$usernextofkin);

  $usernextofkinphone = stripslashes($_REQUEST['next_of_kin_phonenumber']);
	$usernextofkinphone = mysqli_real_escape_string($con,$usernextofkinphone);


	$password = stripslashes($_REQUEST['password_1']);
	$password = mysqli_real_escape_string($con,$password);


	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT INTO `users`(`username`, `fullname`, `groupno`, `usersex`, `userphone`, `email`, `useraddress`, `usernextofkin`, `usernextofkinphone`, `password`, `trn_date`) 
        VALUES ('$username', '$fullname', '$groupno', '$usersex', '$userphone', '$email', '$useraddress', '$usernextofkin', '$usernextofkinphone', '".md5($password)."', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
  <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
            <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
            <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
            <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
            <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
            <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
            <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
            <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
            <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
          </div>
        </div>
      </div>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
        <h1><a href="#" rel="dofollow">CSC 208 Group 2 Assignment</a></h1>
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15">Lets Get You Registered</span>
              <form name="registration" action="" method="post">
                <div class="field padding-bottom--24">
                  <label for="text">Matric Number:</label>
                  <input type="text" name="username">
                </div>
                <div class="field padding-bottom--24">
                  <label for="text">Full Name:</label>
                  <input type="text" name="name" >
                </div>
                <div class="field padding-bottom--24">
                  <label for="text">Group:</label>
                  <input type="number" name="group">
                </div>
                <div class="field padding-bottom--24">
                  <label for="text">Sex:</label>
                  <input type="text" name="sex" >
                </div>
                <div class="field padding-bottom--24">
                  <label for="text">Phone Number:</label>
                  <input type="text" name="phone_number" >
                </div>
                <div class="field padding-bottom--24">
                  <label for="text">Email:</label>
                  <input type="text" name="user_email" >
                </div>
               
                <div class="field padding-bottom--24">
                <label for="text">Address:</label>
                <textarea id="address" name="user_address" rows="4" cols="55">
                </textarea>                
                </div>
                <div class="field padding-bottom--24">
                  <label for="text">Next of Kin:</label>
                  <input type="text" name="next_of_kin">
                </div>
                <div class="field padding-bottom--24">
                  <label for="text">Next of Kin's Phone Number:</label>
                  <input type="text" name="next_of_kin_phonenumber" >
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="password">Password</label>
                  </div>
                  <input type="password" name="password_1" >
                </div>
                
                <div class="field padding-bottom--24">
                  <input type="submit" name="submit" value="Let's Go!">
                </div>
                
              </form>
            </div>
          </div>
          <div class="footer-link padding-top--24">
            <span>Already have an account? <a href="login.php">Then come in!</a></span>
            <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
            <span><a href="#">© CSC 208 Project Work</a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
</body>
</html>