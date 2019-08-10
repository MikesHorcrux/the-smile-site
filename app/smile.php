<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- stylesheet -->
    <link rel="stylesheet" href="/css/main.css">
    <!-- Include function file -->
    <?php include "include/functions.php";
        //this is to filter mean names
          $filter = array('fuck',
                          'shit');
          ?>
  </head>
  <?php include 'include/hearder.php'; ?>
  <body>
    <?php

    if (in_array($_GET['name'], $filter)) {
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
      include 'include/typewriter.php';
    }?>



  </body>
  <?php include 'include/footer.php'; ?>
</html>
