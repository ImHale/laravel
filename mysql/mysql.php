<?php

  $con = mysql_connect("localhost","root","root");
  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }
  echo "Successful ";

  // some code

?>
