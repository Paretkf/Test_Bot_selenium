<?php
    $db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 202.44.47.59)(PORT = 1521)))(CONNECT_DATA=(SID=oracleSV1)))";
    $conn = oci_connect("5806021622051","5806021622051",$db,'AL32UTF8');
    // if($conn) {
    //     echo 'connect success';
    // } else {
    //     echo 'connect failed';
    //     $err = oci_error();
    //     trigger_error(htmlentities($err['message'], ENT_QUOTES), E_USER_ERROR);
    // }
?>
