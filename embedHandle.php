<?php

  $isReady = empty($_GET['contentChoice']) ? 'empty': $_GET['contentChoice'];

  switch($isReady){
    case 1:
      $content = "<object class='resume' data='resume/jung.pdf'></object>";
      print $content;
      break;
    case 2:
      $content = "<h1> Name: James Jung</h1><h2>Email: jmjhw9@mail.missouri.edu</h2><h3>Currently Based In: Columbia</h3>";
      print $content;
      break;
    default:
      break;
  }



 ?>
