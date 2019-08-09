<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- Include function file -->
    <?php include "include/functions.php";
        //this is to filter mean names
          $filter = array('fuck',
                          'shit');
          ?>
  </head>
  <body>
    <?php

    if (in_array($_GET['name'], $filter)) {
      echo "That is Not a nice Name...";
      echo '<img src="" alt="Sad face">';
    }else{
      echo "Well ";
      echo Name($name);
      include 'include/typewriter.php';
    }?>
    <div class="user-name">
    </div>


  </body>
</html>
