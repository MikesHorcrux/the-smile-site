# The Smile Site

## Introduction

> I found that in today's climate people felt that websites brought them down or wanted something from them. We, as a sociality, have a fell trap to comparing ourselves with fake narratives on social media. So I created The smile site. It is a simple site that asks your name and then tells you your beautiful. I built it with PHP, HTML, CSS. I had a lot of fun making this little project, and I hope I made someone smile.

## Code Samples

><?php
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


## Installation

> This Project was built using docker.

-make sure docker is downloaded
-Run docker-compose up in the terminal
-website is located localhost:80
