<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
  </head>
  <body>
    <?php
      include 'connect.php';
     ?>
     <?php
      $sql = "SELECT * FROM PET";
      $objParse = oci_parse($conn, $sql);
      oci_execute ($objParse,OCI_DEFAULT);
     ?>
     <h1 class="title is-1">PET</h1>
     <table class="table is-bordered is-striped is-narrow is-fullwidth">
       <th>รหัส</th> <th>ชื่อเล่น</th> <th>อายุ</th> <th>เพศ</th> <th>รูป</th> <th>รหัสลูกค้า</th> <th>ลบ</th>

     <?php
      while($objResult = oci_fetch_array($objParse,OCI_BOTH)){
        ?>
      <tr>
        <td><?php echo $objResult['PET_ID']; ?></a></td>
        <td><?php echo $objResult['PET_NAME']; ?></td>
        <td><?php echo $objResult['PET_AGE']; ?></td>
        <td><?php echo $objResult['PET_GENDER']; ?></td>
        <td><?php echo '----' ?></td>
        <td><?php echo '----' ?></td>
        <td><a href="delete.php?id=<?php echo $objResult['PET_ID']; ?>"><button type="button" name="button" class="button is-danger">ลบ</button></a></td>
      </tr>
      <?php
      }
      ?>
    </table>
    <form class="" action="index.php" method="get">
    <table class="table is-fullwidth">
      <tr>
        <td>ID : </td>
        <td><input type="text" name="id" value="" class="Primary input"></td>
      </tr>
      <tr>
        <td>NAME : </td>
        <td><input type="text" name="name" value="" class="Primary input"></td>
      </tr>
      <tr>
        <td>AGE : </td>
        <td><input type="text" name="age" value="" class="Primary input"></td>
      </tr>
      <tr>
        <td>GENDER : </td>
        <td><input type="text" name="gender" value="" class="Primary input"></td>
      </tr>
      <tr>
        <td><input type="submit" name="submit" value="insert" class="button is-danger is-outlined is-large"></td>
      </tr>
    </table>
    </form>
    <?php
      if($_GET){

      $id = $_GET['id'];
      $name = $_GET['name'];
      $age = $_GET['age'];
      $gender = $_GET['gender'];
      $sql = "insert into PET values('$id','$name','$age','$gender','','','')";
      echo "$sql";
      $objParse = oci_parse($conn, $sql);
      oci_execute ($objParse,OCI_DEFAULT);
      oci_commit($conn);
      header('Location: index.php');
      }
     ?>

  </body>
</html>
