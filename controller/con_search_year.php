<?php
    $cs_year = $_POST['cs_year'];
    include_once '../model/ConDB.php';
    include_once '../model/Course.php';
    $obj_name = new Course();
    $rs2 = $obj_name->getCourseforyear($cs_year);
    foreach($rs2 as $row){
        echo "";

    }
    
?>