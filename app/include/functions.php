<?php

//takes users name and displays Hey ____!
function Name($name){
  if (empty($name)) {
    echo "Hey friend!";
    echo "<br>";
  }else{
    echo "Hey ".$name."!";
    echo "<br>";
  }
}
