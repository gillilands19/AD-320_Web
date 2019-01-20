<!doctype html>
<html lang="en">
<head>
    
<meta charset="utf-8" />
<meta name="robots" content="noindex,nofollow" />
<meta name="viewport" content="width=device-width" />
<meta name="description" content="PHP Form" />
<link rel="stylesheet" href="css/styles.css">
    
<title>Sean G.</title>
</head>

<body>

  <div class="site-wrapper">
  <?php

      if(empty($_GET))
        include('show_form.php');

      else {

        echo '<div class="results-wrapper">';
        foreach($_GET as $key => $value){
          echo '<p>' . ' ' . $key . ': ' . $value . ' ' . '</p>';
        }
        echo '</div>';
      }


  ?>
  </div>
</body>