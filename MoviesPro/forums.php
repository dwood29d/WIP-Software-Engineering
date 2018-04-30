<?php # Script 9.3 - Forums.php
  // This script performs an INSERT query to add a record to the users table.
  session_start();

  $page_title = 'Forums';
  include ('includes/header.html');
  require_once('../mysqli_connect.php');

  // Check for form submission:
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //require ('../mysqli_connect.php'); // Connect to the database.

    $errors = array(); // Initialize an error array.

    //Check for a Thread input:
    if (empty($_POST['input'])) {
      $errors[] = 'You forgot to enter your input.';
    } else {
      $un = mysqli_real_escape_string($dbc, trim($_POST['input']));
    }



    if (empty($errors)) { // If everything's OK.

      // Register the user in the database...

      // Make the query:
      $q = "INSERT INTO threads(forum_id, post_content) VALUES (1, '$un')";
      $r = @mysqli_query ($dbc, $q); // Run the query.
      if ($r) { // If it ran OK.

        // Print a message:
        echo '<h1>Thank you!</h1>
        <p>Your thread has been posted.</p><p><br /></p>';

      } else { // If it did not run OK.

        // Public message:
        echo '<h1>System Error</h1>
        <p class="error">Your content is not valid.</p>';

        // Debugging message:
        echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';

      } // End of if ($r) IF.

      mysqli_close($dbc); // Close the database connection.

      // Include the footer and quit the script:
      include ('includes/footer.html');
      exit();

    } else { // Report the errors.

      echo '<h1>Error!</h1>
      <p class="error">The following error(s) occurred:<br />';
      foreach ($errors as $msg) { // Print each error.
        echo " - $msg<br />\n";
      }
      echo '</p><p>Please try again.</p><p><br /></p>';

    } // End of if (empty($errors)) IF.

  } // End of the main Submit conditional.
?>
<h1>Threads</h1>
<form action="forums.php" method="post">
  <p><b>Thread:</b></p>
	<textarea name = "input" rows = "10" cols = "60"> Post thread here </textarea>
  <br/>
  <input type="submit" value="Submit">
</form>
<?php include ('includes/footer.html'); ?>
