<?php 
include "config.php";

// if the form's submit button is clicked, we need to process the form
    if (isset($_POST['submit'])) {
        // get variables from the form
        $fullname = $_POST['fullname'];
        $usertname = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];


        //write sql query

        $sql = "INSERT INTO register(fullname, username, email, password) VALUES ('$fullname','$username','$email','$password')";

        // execute the query

        $result = $conn->query($sql);

        if ($result == TRUE) {
            echo "New record created successfully.";
        }else{
            echo "Error:". $sql . "<br>". $conn->error;
        }

        $conn->close();

    }



?>

<!DOCTYPE html>
<html>

<body>

<a class="btn btn-primary" href='/REG'>View Table</a>
<h2>Signup Form</h2>
<form action="" method="POST">
  <fieldset>
    <legend>Personal information:</legend>
    Last name:<br>
    <input type="text" name="fullname" required>
    <br>
    First name:<br>
    <input type="text" name="username" required>
    <br>
    Email:<br>
    <input type="email" name="email" required>
    <br>
    Password:<br>
    <input type="password" name="password" required>
    <br>
    <br><br>
    <input type="submit" name="submit" value="submit">
  </fieldset>
</form>

</body>
</html>