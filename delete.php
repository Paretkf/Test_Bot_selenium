<?php
  include 'connect.php';

  if ($_GET) {
    $id = $_GET['id'];
    $sql = "delete from PET where PET_ID='$id'";
    $objParse = oci_parse($conn, $sql);
    oci_execute ($objParse,OCI_DEFAULT);
    oci_commit($conn);
    header('Location: index.php');
  }

 ?>
