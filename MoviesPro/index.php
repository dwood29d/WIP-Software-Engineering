<?php # Script 3.7 - index.php #2
  session_start();
  // This function outbuts theoretical html
  // for adding ads to a Web page.
  // function create_ad() {
  //   echo '<p class="ad">This is an annoying ad! This is an annoying ad! This is an annoying ad! This is an annoying ad! </p>';
  // } //End of the function definition

  $page_title = 'MoviesPro';
  include ('includes/header.html');

  // Call the function;
  // create_ad();
?>
<div class="text-center">
  <img src="images/movies.jpg" class="img-fluid home-image">
</div>
<h1>Welcome To MoviesPro</h1>

  <p>We built this as a space for movie lovers to meet like minded movie lovers and discuss their favorite films, stories, and actors, while also giving them access to all the newest films.</p>

  <p>We welcome you and hope that you enjoy the ride. Check out the forums for conversation, purchase some tickets, and register with us to join our community. Registration comes with its own benefits.</p>

<?php

  // Call the function again;
  // create_ad();

include ('includes/footer.html');
?>
