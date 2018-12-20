<?php
  mail('manvijay@buffalo.edu', 'checking php');

  if(mail('manvijay@buffalo.edu', 'checking php')){
    echo "e-mail sent";
  }
  else {
    echo "something went wrong!"
  }

 ?>
