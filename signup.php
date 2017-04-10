<?php
  include 'connection.php';
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $uid = $_POST['usernam'];
  $pas = $_POST['userpasswor'];

  $sql = 'insert into userdata(firstname,lastname,username,password) values ("' .$fname. '","' .$lname. '","' .$uid. '","' .$pas. '")';
  echo $sql;

 ?>
