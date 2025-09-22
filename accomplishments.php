<?php
/**
 * Author: Garvit Garvit
 * Purpose: Step 3 – saves selected courses in the session and shows a textarea to collect the essay.
 */
session_start();

//Save courses sent from courses.php
if (isset($_POST['courses'])) {
  $_SESSION['courses'] = $_POST['courses'];
}
?>
<!DOCTYPE html>
<html>
    <body>
        <h1>Hey, <?php echo $_SESSION["first_name"] . " " . $_SESSION["last_name"]; ?>!</h1>

        <p>Please describe your personal accomplishments:</p>

        <form action="confirm.php" method="post">
            <textarea name="accomplishments" rows="8" cols="60" required></textarea><br><br>
        <button type="submit">Next</button>
        </form>
    </body>
</html>