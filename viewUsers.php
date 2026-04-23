<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Thank You for registering</title>
    <link rel="stylesheet" href="style.css">
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

            <h2>Here are our Users</h2>
        <?php
        // 1. connect to the database
         require_once 'dbase.php';
        
        // 3. construct and execute query 
     $qry = "select * from users;";
        $result = null;
        try{
            $result = mysqli_query($conn, $qry);
        }
        catch(Exception $e){
            echo 'error occurred: ' . mysqli_error($conn) . '<br><br>';
        }

        // 4. Provide user feedback
        if ($result){// query successful

            
            if (mysqli_num_rows($result)> 0){// some data was retrieved
                while ($row = mysqli_fetch_assoc($result)){
                    echo "<p class=\"demo\">$row[first_name] $row[last_name] registered with email address $row[email]</p>";
                }
            }

        }

        // 5. close connection
        mysqli_close($conn);
        ?>

        </div>
        
    </div>
</body>
</html>

