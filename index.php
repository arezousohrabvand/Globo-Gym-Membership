<?php
    //set default value of variables for initial page load
    if (!isset($name)) { $name = ''; }
    if (!isset($password)) {$password = ''; }
    if (!isset($email)) { $email = ''; }
    if (!isset($age)) { $age = ''; }
    if (!isset($membership_lenght)) { $membership_lenght= ''; }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Assignment2</title>
      <link href="css/styles.css" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <main>
    <h1>Globo-Gym Membership</h1>
    <h2>Sign-Up Information</h2>
    <img src="https://user-images.githubusercontent.com/71450268/105212785-e50cd480-5b1b-11eb-9fa5-896b0d7b11d0.png" alt="gym" style="width:150px">

    <form action="results.php" method="post">

        <div id="data">
            <label>Name</label>
            <?php
            //This code checks to see if we got an error message from the results.php page
             if (!empty($error_name)) { ?>
                <p class="error" ><?php echo htmlspecialchars($error_name); ?></p>
            <?php } ?>
            <input type="text" name="name"
                   value="<?php echo htmlspecialchars($name); ?>">
            <br>

            <!-- This is where you should put the password -->
            <label>Password:</label>
            <?php
            //This code checks to see if we got an error message from the results.php page
             if (!empty($error_pass)) { ?>
                <p class="error"><?php echo htmlspecialchars($error_pass); ?></p>
            <?php } ?>
            <input type="text" name="password"
                   value="<?php echo htmlspecialchars($password); ?>">
                   <br>

            <!-- This is where you should put the email-->
            <label>Email:</label>
            <?php
            //This code checks to see if we got an error message from the results.php page
             if (!empty($error_email)) { ?>
                <p class="error"><?php echo htmlspecialchars($error_email); ?></p>
            <?php } ?>
            <input type="text" name="email"
                   value="<?php echo htmlspecialchars($email); ?>">
                   <br>
            <!-- This is where you should put the age-->
            <label>Age:</label>
            <?php
            //This code checks to see if we got an error message from the results.php page
             if (!empty($error_age)) { ?>
                <p class="error"><?php echo htmlspecialchars($error_age); ?></p>
            <?php } ?>
            <input type="text" name="age"
                    value="<?php echo htmlspecialchars($age); ?>">
                    <br>

            <input type="checkbox" name="facility" value="Locker"> Require Locker<br>

            <?php
            //This code checks to see if we got an error message from the results.php page
             if (!empty($error_membership)) { ?>
                <p  class="error"><?php echo htmlspecialchars($error_membership); ?></p>
            <?php } ?>

            <select name="membership_lenght">
              <option selected="" value="Default">(Please select your membership lenght)</option>
              <option value="1month" >1Month-$30</option>
              <option value="1year" >1Year-$300</option>
              <option value="lifetime" >Lifetime-$3000</option>
              </select>
              <br>

              <div class="slidecontainer">
                <p>Current fitness level:</p>
                  <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                  <p>Current Fitness: <span id="demo"></span></p>
                  <div id="buttons">
                      <label>&nbsp;</label>
                      <input type="submit" value="Submit"><br>
                  </div>
              </div>

              <script>
                  var slider = document.getElementById("myRange");
                  var output = document.getElementById("demo");
                  output.innerHTML = slider.value;

                  slider.oninput = function() {
                    output.innerHTML = this.value;
                  }
              </script>

        </div>




    </form>
    </main>
</body>
</html>
