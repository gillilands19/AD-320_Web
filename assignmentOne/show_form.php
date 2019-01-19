<?php

function buildForm(){

  $form =
    '<div class="form-wrapper">
    <form action="form_handler.php" method="get" class="test-form">
      <div class="input-wrapper">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" placeholder="Required" required>
      </div>
      <div class="input-wrapper">
        <label for="email">Email: </label>
        <input type="email" name="email" id="email" placeholder="Required" required>
      </div>
      <div class="input-wrapper">
        <label for="phone">Phone: </label>
        <input type="tel" name="tel" id="tel">
      </div>
      <div class="input-wrapper">
        <label for="state">State: </label>
        <input type="text" name="state" id="state">
      </div>
      <div class="input-wrapper">
        <input type="submit" value="Submit!">
      </div>
    </form>
    </div>';

  echo $form;
  }

  buildForm();
?>