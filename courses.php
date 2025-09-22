<?php
/**
 * Author: Garvit Garvit
 * Purpose: Step 2 – saves the name in the session and shows checkboxes to pick completed courses.
 */
session_start();

// Save name into the session when coming from name.php
if (isset($_POST['first_name'])) { 
    $_SESSION['first_name'] = $_POST['first_name']; 
}
if (isset($_POST['last_name']))  { 
    $_SESSION['last_name']  = $_POST['last_name']; 
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Welcome, <?php echo $_SESSION["first_name"] . " " . $_SESSION["last_name"]; ?>!</h1>

        <form action="accomplishments.php" method="post">
            <p>Select that courses you're enrolled in: </p>
            <input type="checkbox" name="courses[]" value="Object-oriented programming"> Object-oriented programming<br>
            <input type="checkbox" name="courses[]" value="Systems analysis & design"> Systems analysis & design<br>
            <input type="checkbox" name="courses[]" value="Advanced programming"> Advanced programming<br>
            <input type="checkbox" name="courses[]" value="Introduction to Networking"> Introduction to Networking<br>
            <input type="checkbox" name="courses[]" value="Introduction to Computer Security"> Introduction to Computer Security<br>
            
            <br>
            <input type="submit" value="Next">
        </form>
    </body>
</html>
