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
     <br><br>
     <?php
      $id = $_GET['id'];
      $sql = "SELECT * FROM \"5906021612038\".emp where EMP_ID = $id";
      $objParse = oci_parse($conn, $sql);
      oci_execute ($objParse,OCI_DEFAULT);
      while($objResult = oci_fetch_array($objParse,OCI_BOTH)){

      ?>
      <div class="container">
        <div class="columns is-centered">

          <div class="column box is-8">
            <label class="title is-2"><?php  echo "รหัสพนักงาน : ".$objResult[0]; ?></label>

            <article class="media">
              <div class="media-left">
                <figure class="image">
                  <img src="<?php echo $objResult[4]; ?>"  alt="Image" style="width : 300px">
                </figure>
              </div>
              <div class="media-content">
                <div class="content">
                  <form class="" action="#" method="post">
                    <div class="columns">
                      <div class="column is-3">
                        <label class="title is-5"> Name </label>
                      </div>
                      <div class="column is-8">
                        <input type="text" name="name" value="<?php echo $objResult[1]; ?>" class="input">
                      </div>
                    </div>
                    <div class="columns">
                      <div class="column is-3">
                        <label class="title is-5"> Last Name </label>
                      </div>
                      <div class="column is-8">
                        <input type="text" name="Lastname" value="<?php echo $objResult[2]; ?>" class="input">
                      </div>
                    </div>
                    <div class="columns">
                      <div class="column is-3">
                        <label class="title is-5"> Tel </label>
                      </div>
                      <div class="column is-8">
                        <input type="text" name="Tel" value="<?php echo $objResult[3]; ?>" class="input">
                      </div>
                    </div>
                    <div class="columns">
                      <div class="column is-3">
                        <label class="title is-5"> IMG </label>
                      </div>
                      <div class="column is-8">
                        <input type="text" name="pic" value="<?php echo $objResult[4]; ?>" class="input">
                      </div>
                    </div>
                    <div class="columns  is-centered">
                      <input type="submit" name="" value="อัพเดท" class="button is-danger is-outlined is-large">
                    </div>
                  </form>

                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
      <?php
      }
      ?>
      <?php if ($_POST) {
        $name = $_POST['name'];
        $lastname = $_POST['Lastname'];
        $tel = $_POST['Tel'];
        $pic = $_POST['pic'];
        $sql = "update \"5906021612038\".EMP SET EMP_FIRST_NAME = '$name', EMP_LAST_NAME  = '$lastname',
        TEL = '$tel',EMP_PIC = '$pic' where EMP_ID = '$id' ";
        $objParse = oci_parse($conn, $sql);
        oci_execute ($objParse,OCI_DEFAULT);
        oci_commit($conn);
        header('Location: empDetail.php?id='.$id);
      }
      ?>
  </body>
</html>
