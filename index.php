<?php 
include "config.php";

//write the query to get data from users table

$sql = "SELECT * FROM register";

//execute the query

$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html>
<head>
    <title>View Page</title>
     <!-- to make it looking good im using bootstrap -->
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css%22%3E
</head>
<body>
    <div class="container">
        <h2>List of Persons</h2>
        <a href='/REG/create.php'class="btn btn-primary">Add Contact</a>
        
<table class="table">
    <thead>
        <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>User Name</th>
        <th>Email</th>
        <th>Password</th>
       
    </tr>
    </thead>
    <tbody>
        <?php
            if ($result->num_rows > 0) {
                //output data of each row
                while ($row = $result->fetch_assoc()) {
        ?>

                    <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['fullname']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    </tr>

        <?php        }
            }
        ?>

    </tbody>
</table>
    </div>  

</body>
</html>