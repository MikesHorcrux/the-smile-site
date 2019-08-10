<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- stylesheet -->
    <link rel="stylesheet" href="/css/main.css">
    <!-- Include function file -->
    <?php
      include "include/functions.php";
        //this is to filter unwanted resultes
      $filter = array('fuck',
                      'shit',
                      'sex',);
          ?>
  </head>
  <?php
    include 'include/hearder.php';
  ?>
  <body>
    <?php

    if (in_array($_GET['name'], $filter)) {
      //if any results matched the filtered results then user will be told thats a mean word
      echo "That is Not a nice Name...";
      echo '<img src="" alt="Sad face">';
    }else{?>
      <div class="name">
        <?php
        echo "Well ";
        echo Name($name);
        ?>
      </div>
      <?php
      //this is the meassage as a typed out animation
      include 'include/typewriter.php';
    }?>



  </body>
  <!-- Footer-->
  <?php include 'include/footer.php'; ?>
</html>
