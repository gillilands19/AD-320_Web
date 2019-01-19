<?php

if(empty($_GET)) {

  include('show_form.php');

} else {
  
  $name = strip_tags($_GET['name']);
  $email = strip_tags($_GET['email']);
  $phone = strip_tags($_GET['tel']);
  $state = strip_tags($_GET['state']);

  echo '<p>' . $name . '</p>';
  echo '<p>' . $email . '</p>';
  echo '<p>' . $phone . '</p>';
  echo '<p>' . $state . '</p>';
}

?>