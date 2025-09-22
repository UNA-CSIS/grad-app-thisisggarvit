<?php
/**
 * Author: Garvit Garvit
 * Purpose: Step 1 – shows a form to collect the applicant's first and last name, then posts to courses.php.
 */
session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <form action="courses.php" method="POST">
                First Name: <input type="text" name="first_name"><br>
                Last Name: <input type="text" name="last_name"><br>
                <input type="submit">
            </form>
    </body>
</html>