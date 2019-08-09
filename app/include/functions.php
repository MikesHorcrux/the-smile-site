<?php

//takes users name and displays Hey ____!
function Name($name){
  $name = $_GET['name'];
  //If user just pressed the arrow then it'll say hey friend!
  if (empty($name)) {
    echo "Hey Friend!";
    echo "<br>";
  }else{
    //Nmae will be displayed in all uppercase
    echo "Hey ".strtoupper($name)."!";
    echo "<br>";
  }
}
