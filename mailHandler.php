<?php
  mail('manvijay@buffalo.edu', 'checking php');

  if(mail('manvijay@buffalo.edu', 'checking php')){
    echo "<h1> Sent Successfully</h1>";
  }
  else {
    echo "<h1>something went wrong!</h1>"
  }

 ?>
