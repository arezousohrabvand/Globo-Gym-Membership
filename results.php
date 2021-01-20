<?php
    // get the data from the form

    $name = filter_input(INPUT_POST, 'name');
        $namelength=strlen($name);

    $password = filter_input(INPUT_POST, 'password');
        $passwordlength=strlen($password);

    $email= filter_input(INPUT_POST, 'email',
        FILTER_VALIDATE_EMAIL);

    $age= filter_input(INPUT_POST, 'age',
        FILTER_VALIDATE_INT);


    // validate Globo-Gym Membership
    // Here is where you should validate name
$error_name = $error_pass = $error_email = $error_age = $error_membership = $error_message = "";

if ( strlen($name)<5 )
{
        $error_name = 'Username should be at least 5 characters in lenght.';
        $error_message = '1';
    }

    // Here is where you should validate password
    if ( strlen($password)<6) {
        $error_pass = 'Password should be at least 5 characters in lenght.';
        $error_message='1';

    }
    // Here is where you should validate email
    if ($email ===FALSE) {
      $error_email = 'Your email is not valid.';
      $error_message='1';

    }

    // Here is where you should validate age
   if ($age===FALSE) {
    $error_age = 'Your age must be a whole number.';
    $error_message='1';
  } else if ( $age <= 18) {
    $error_age = 'Age must be greater than 18.';
    $error_message='1';
  } else if ( $age >100) {
    $error_age = 'Age must be less than 101.';
    $error_message='1';
  }

  if (!isset($membership_lenght)) {
    $error_membership = "Please choose a membership plan";
  }

    // if an error message exists, go to the index page
    if ($error_message != '') {
        //This redirects us to the index.php page again and displays the error_message
        include('index.php');
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Assignment2</title>
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
    <main>
        <h1>Successful Application</h1>

        <img src="https://user-images.githubusercontent.com/71450268/105212891-053c9380-5b1c-11eb-8876-8602c8c60339.png" alt="welcome" style="width:180px"><br>

        <label> Welcome</label>
        <span><?php echo  $name; ?></span><label>!</label><br>

        <label>You email address is </label>
        <span><?php echo $email; ?></span><br>

        <label>We think you will be fit at age</label>

        <span><?php echo $age; ?></span><br>

    </main>
</body>
</html>
