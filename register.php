<?php include('server.php') ?>

<html>
<head>
  <meta charset="utf-8">
  <title>CSC 208 Web Programming Group ASsignment</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
    * {
  padding: 0;
  margin: 0;
  color: #1a1f36;
  box-sizing: border-box;
  word-wrap: break-word;
  font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Ubuntu,sans-serif;
}
body {
    min-height: 100%;
    background-color: #ffffff;
}
h1 {
    letter-spacing: -1px;
}
a {
  color: #5469d4;
  text-decoration: unset;
}
.login-root {
    background: #fff;
    display: flex;
    width: 100%;
    min-height: 100vh;
    overflow: hidden;
}
.loginbackground {
    min-height: 692px;
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    top: 0;
    z-index: 0;
    overflow: hidden;
}
.flex-flex {
    display: flex;
}
.align-center {
  align-items: center; 
}
.center-center {
  align-items: center;
  justify-content: center;
}
.box-root {
    box-sizing: border-box;
}
.flex-direction--column {
    -ms-flex-direction: column;
    flex-direction: column;
}
.loginbackground-gridContainer {
    display: -ms-grid;
    display: grid;
    -ms-grid-columns: [start] 1fr [left-gutter] (86.6px)[16] [left-gutter] 1fr [end];
    grid-template-columns: [start] 1fr [left-gutter] repeat(16,86.6px) [left-gutter] 1fr [end];
    -ms-grid-rows: [top] 1fr [top-gutter] (64px)[8] [bottom-gutter] 1fr [bottom];
    grid-template-rows: [top] 1fr [top-gutter] repeat(8,64px) [bottom-gutter] 1fr [bottom];
    justify-content: center;
    margin: 0 -2%;
    transform: rotate(-12deg) skew(-12deg);
}
.box-divider--light-all-2 {
    box-shadow: inset 0 0 0 2px #e3e8ee;
}
.box-background--blue {
    background-color: #5469d4;
}
.box-background--white {
  background-color: #ffffff; 
}
.box-background--blue800 {
    background-color: #212d63;
}
.box-background--gray100 {
    background-color: #e3e8ee;
}
.box-background--cyan200 {
    background-color: #7fd3ed;
}
.padding-top--64 {
  padding-top: 64px;
}
.padding-top--24 {
  padding-top: 24px;
}
.padding-top--48 {
  padding-top: 48px;
}
.padding-bottom--24 {
  padding-bottom: 24px;
}
.padding-horizontal--48 {
  padding: 48px;
}
.padding-bottom--15 {
  padding-bottom: 15px;
}


.flex-justifyContent--center {
  -ms-flex-pack: center;
  justify-content: center;
}

.formbg {
    margin: 0px auto;
    width: 100%;
    max-width: 448px;
    background: white;
    border-radius: 4px;
    box-shadow: rgba(60, 66, 87, 0.12) 0px 7px 14px 0px, rgba(0, 0, 0, 0.12) 0px 3px 6px 0px;
}
span {
    display: block;
    font-size: 20px;
    line-height: 28px;
    color: #1a1f36;
}
label {
    margin-bottom: 10px;
}
.reset-pass a,label {
    font-size: 14px;
    font-weight: 600;
    display: block;
}
.reset-pass > a {
    text-align: right;
    margin-bottom: 10px;
}
.grid--50-50 {
    display: grid;
    grid-template-columns: 50% 50%;
    align-items: center;
}

.field input {
    font-size: 16px;
    line-height: 28px;
    padding: 8px 16px;
    width: 100%;
    min-height: 44px;
    border: unset;
    border-radius: 4px;
    outline-color: rgb(84 105 212 / 0.5);
    background-color: rgb(255, 255, 255);
    box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(60, 66, 87, 0.16) 0px 0px 0px 1px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px;
}

input[type="submit"] {
    background-color: rgb(84, 105, 212);
    box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0.12) 0px 1px 1px 0px, 
                rgb(84, 105, 212) 0px 0px 0px 1px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(60, 66, 87, 0.08) 0px 2px 5px 0px;
    color: #fff;
    font-weight: 600;
    cursor: pointer;
}
.field-checkbox input {
    width: 20px;
    height: 15px;
    margin-right: 5px; 
    box-shadow: unset;
    min-height: unset;
}
.field-checkbox label {
    display: flex;
    align-items: center;
    margin: 0;
}
a.ssolink {
    display: block;
    text-align: center;
    font-weight: 600;
}
.footer-link span {
    font-size: 14px;
    text-align: center;
}
.listing a {
    color: #697386;
    font-weight: 600;
    margin: 0 10px;
}

.animationRightLeft {
  animation: animationRightLeft 2s ease-in-out infinite;
}
.animationLeftRight {
  animation: animationLeftRight 2s ease-in-out infinite;
}
.tans3s {
  animation: animationLeftRight 3s ease-in-out infinite;
}
.tans4s {
  animation: animationLeftRight 4s ease-in-out infinite;
}

@keyframes animationLeftRight {
  0% {
    transform: translateX(0px);
  }
  50% {
    transform: translateX(1000px);
  }
  100% {
    transform: translateX(0px);
  }
} 

@keyframes animationRightLeft {
  0% {
    transform: translateX(0px);
  }
  50% {
    transform: translateX(-1000px);
  }
  100% {
    transform: translateX(0px);
  }
} 
    </style>

<body>
<?php
// // initializing variables
$matricnumber = "";
$name    = "";
$groupno = "";
$sex = "";
$phoneno = "";
$email = "";
$address = "";
$next_of_kin = "";
$next_of_kin_phone_number = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $matricnumber = mysqli_real_escape_string($db, $_POST['matricnumber']);
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $groupno = mysqli_real_escape_string($db, $_POST['group']);
  $sex = mysqli_real_escape_string($db, $_POST['sex']);
  $phoneno = mysqli_real_escape_string($db, $_POST['phone_number']);
  $email = mysqli_real_escape_string($db, $_POST['user_email']);
  $address = mysqli_real_escape_string($db, $_POST['user_address']);
  $next_of_kin = mysqli_real_escape_string($db, $_POST['next_of_kin']);
  $next_of_kin_phone_number = mysqli_real_escape_string($db, $_POST['next_of_kin_phonenumber']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($matricnumber)) { array_push($errors, "Username / Matric Number is required"); }
  if (empty($name)) { array_push($errors, "Fullname is required"); }
  if (empty($groupno)) { array_push($errors, "Please select your group number"); }
  if (empty($sex)) { array_push($errors, " Sex is required"); }
  if (empty($phoneno)) { array_push($errors, "Phone Number is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($address)) { array_push($errors, "Address is required"); }
  if (empty($next_of_kin)) { array_push($errors, "Next Of Kin is required"); }
  if (empty($next_of_kin_phone_number)) { array_push($errors, "Next Of Kin's Phone Number is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if (empty($password_2)) { array_push($errors, "Password is required"); }

  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
  
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE matricnumber ='$matricnumber' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    // if user exists
    if ($user['matricnumber'] === $matricnumber) {
      array_push($errors, "Matric Number already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form

  if (count($errors) == 0) {
  	$password = md5($password_1);
    //encrypt the password before saving in the database
  	$query1 = "INSERT INTO `users`(`matricnumber`, `fullname`, 
    `groupno`, `sex`, `phone_number`, `email`, `address`, 
    `next_of_kin`, `next_of_kin_phonenumber`)
    VALUES ('$matricnumber','$name','$groupno','$sex','$phoneno',
    '$email','$address','$next_of_kin','$next_of_kin_phone_number')";
    $query2 = "INSERT INTO `student`(`matricnumber`, `password`) 
    VALUES ('$matricnumber','$password')";
  	mysqli_query($db, $query1);
    mysqli_query($db, $query2);
    array_push($errors, "Account created!!");
  	// $_SESSION['matricnumber'] = $matricnumber;
  	// $_SESSION['success'] = "You are now logged in";
  	// header('location: index.php');
  }
}
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
              <form id="my-login" action="" method="post">
              <?php include('errors.php'); ?>
                <div class="field padding-bottom--24">
                  <label for="text">Matric Number:</label>
                  <input type="text" name="matricnumber" value="<?php echo $matricnumber; ?>">
                </div>
                <div class="field padding-bottom--24">
                  <label for="text">Full Name:</label>
                  <input type="text" name="name" value="<?php echo $name; ?>">
                </div>
                <div class="field padding-bottom--24">
                  <label for="text">Group:</label>
                  <input type="number" name="group" value="<?php echo $groupno; ?>">
                </div>
                <div class="field padding-bottom--24">
                  <label for="text">Sex:</label>
                  <input type="text" name="sex" value="<?php echo $sex; ?>">
                </div>
                <div class="field padding-bottom--24">
                  <label for="text">Phone Number:</label>
                  <input type="text" name="phone_number" value="<?php echo $phoneno; ?>">
                </div>
                <div class="field padding-bottom--24">
                  <label for="text">Email:</label>
                  <input type="text" name="user_email" value="<?php echo $email; ?>">
                </div>
               
                <div class="field padding-bottom--24">
                <label for="text">Address:</label>
                <textarea id="address" name="user_address" rows="4" cols="55" 
                value="<?php echo $address; ?>">
                </textarea>                
                </div>
                <div class="field padding-bottom--24">
                  <label for="text">Next of Kin:</label>
                  <input type="text" name="next_of_kin"value="<?php echo $next_of_kin; ?>">
                </div>
                <div class="field padding-bottom--24">
                  <label for="text">Next of Kin's Phone Number:</label>
                  <input type="text" name="next_of_kin_phonenumber" value="<?php echo $next_of_kin_phone_number; ?>">
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="password">Password</label>
                  </div>
                  <input type="password" name="password_1" value="<?php echo $password_1; ?>">
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="password">Confirm Password</label>
                  </div>
                  <input type="password" name="password_2" value="<?php echo $password_2; ?>">
                </div>
                
                <div class="field padding-bottom--24">
                  <input type="submit" name="reg_user" value="Let's Go!">
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
</body>

</html>