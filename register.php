<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Thank You for registering</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="container">
        <nav>
          <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="viewUsers.php">All Users</a></li>
        </ul>
        </nav>
        <div class="content">
            <?php

            // 1. retrieve form data
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        echo "<p> Welcome $fname. Thank you for attending our GICT 2026 day at COSTAATT. Your information has been received.<br/></p>";

        
        // 2. connect to the database
        // require_once 'dbase.php';
        
        if (isset($conn)){
            // 3. construct and execute query & 4. Provide user feedback
            $qry = "INSERT INTO users (first_name, last_name, email) VALUES ('$fname', '$lname', '$email');";
            $result = null;
        try{
            $result = mysqli_query($conn, $qry);
            echo 'Your data was successfully saved.<br><br>';
        }
        catch(Exception $e){
            echo 'error occurred: ' . mysqli_error($conn) . '<br><br>';
        }

        // 5. close connection
        mysqli_close($conn);

        } else echo "<h5>You reached the server but are not connected to the database yet</h5>";
        

        
        ?>

        </div>
        
    </div>
</body>
</html>

