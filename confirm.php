<?php
/**
 * Author: Garvit Garvit
 * Purpose: Step 4 – saves the essay in the session and shows a simple summary for the user to confirm.
 */
session_start();

//Save essay from accomplishments.php
if (isset($_POST['accomplishments'])) {
  $_SESSION['accomplishments'] = $_POST['accomplishments'];
}
?>
<!DOCTYPE html>
<html>
  <body>
    <h1>Confirm Your Application</h1>

    <p>Name: <?php echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name']; ?></p>

    <p>Courses:</p>
    <ul>
      <?php
      if (!empty($_SESSION['courses'])) {
        foreach ($_SESSION['courses'] as $courses) {
          echo "<li>$courses</li>";
        }
      } else {
        echo "<li>None selected</li>";
      }
      ?>
    </ul>

    <p>Accomplishments:</p>
    <p><?php echo nl2br($_SESSION['accomplishments']); ?></p>

    <form action="result.php" method="post">
      <button type="submit" name="confirm" value="yes">Confirm</button>
    </form>
  </body>
</html>
