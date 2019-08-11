<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
    <title></title>
    <!-- stylesheet -->
    <link rel="stylesheet" href="/css/main.css">
    <!-- Include function file -->
    <?php
      include "include/functions.php";
        //this is to filter unwanted resultes     THIS NEEDS TO BE EXPANDED
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
//checks if the name is in the filter as all lower case
    if (in_array(strtolower($_GET['name']), $filter)) {?>
      <div class="name">
        <?php
      //if any results matched the filtered results then user will be told thats a mean word
      echo "That is Not a nice Name..."; ?>
    </div>
    <div class="sadface">
      <?php
        echo '<img src="images/sadface.png" alt="Sad face" >';
      }else{?>
    </div>
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
