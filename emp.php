<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      include 'connect.php';
     ?>
     <?php
      $sql = "SELECT * FROM \"5906021612038\".emp";
      $objParse = oci_parse($conn, $sql);
      oci_execute ($objParse,OCI_DEFAULT);
     ?>
     <table class="table is-bordered is-striped is-narrow is-fullwidth">
       <tr class="thead">
         <th>ID</th> <th>Name</th> <th>LastName</th> <th>Tel</th>
       </tr>
       <?php
        while($objResult = oci_fetch_array($objParse,OCI_BOTH)){ ?>
       <tr>
         <td><a href="empDetail.php?id=<?php echo $objResult[0]; ?>"><?php echo $objResult[0]; ?><a></td>
         <td><?php echo $objResult[1]; ?></td>
         <td><?php echo $objResult[2]; ?></td>
         <td><?php echo $objResult[3]; ?></td>
       </tr>
       <?php   } ?>
     </table>
     <?php
      while($objResult = oci_fetch_array($objParse,OCI_BOTH)){
        echo $objResult[1];
      }
      ?>



  </body>
</html>
