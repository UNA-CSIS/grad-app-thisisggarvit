<?php
/**
 * Author: Garvit Garvit
 * Purpose: Step 5 – uses a simple function to decide accept/reject based on essay containing "PHP"
 *          and taking at least 50% of the listed courses, then displays the final result.
 */
session_start();

// The full list of courses offered (so we know how many total there are)
$all_courses = [
  'Object-oriented programming',
  'Systems analysis & design',
  'Advanced programming',
  'Introduction to Networking',
  'Introduction to Computer Security'
];

$essay = '';
if (isset($_SESSION['accomplishments'])) {
    $essay = $_SESSION['accomplishments'];
}

$selected = array();
if (isset($_SESSION['courses'])) {
    $selected = $_SESSION['courses'];
    if (!is_array($selected)) {
        $selected = array();
    }
}

//count all courses
$numListed = count($all_courses);

//count selected courses
$numTaken = 0;
if (is_array($selected)) {
    $numTaken = count($selected);
}

//boolean function: look for "PHP" and check >= 50% of courses
function meetsRequirements($essay, $numListed, $numTaken) {
    return ($numListed > 0)
        && (stripos($essay, 'PHP') !== false)
        && (($numTaken / $numListed) >= 0.5);
}

$accepted = meetsRequirements($essay, $numListed, $numTaken);
?>
<!DOCTYPE html>
<html>
  <body>
    <h1>Result</h1>

    <?php if ($accepted): ?>
      <h2>You are accepted for a phone interview.</h2>
    <?php else: ?>
      <h2>Sorry, your application was rejected.</h2>
    <?php endif; ?>

    <p>Name: <?php echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name']; ?></p>
    <p>Courses taken: <?php echo $numTaken . ' of ' . $numListed; ?></p>
    <p>Essay mentions "PHP": <?php echo (stripos($essay, 'PHP') !== false) ? 'Yes' : 'No'; ?></p>
  </body>
</html>
