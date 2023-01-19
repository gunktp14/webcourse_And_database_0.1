    <?php
        session_start();
    ?>
    <?php 
        $cs_name=$_POST['cs_name'];
        $cs_img=$_POST['cs_img'];
        $cs_date=$_POST['cs_date'];
        $cs_wallet=$_POST['cs_wallet'];
    ?>

    <?php
        $course=array();
        $course["cs_img"]=$cs_img;
        $course["cs_name"]=$cs_name;
        $course["cs_date"]=$cs_date;
        $course["cs_wallet"]=$cs_wallet; 
        //print_r($course);
    ?>

    <?php
        include_once "../model/ConDB.php";
        include_once "../model/Course.php";
        $obj_name=new Course();
        $check_empty = $obj_name->checkAddCourse($cs_name,$cs_date,$cs_wallet,$cs_img);
        if($check_empty == TRUE)
        {
            header('Location: ../view/view_add_error.php');
        }
        else {
            $rs2 = $obj_name->addCourse($course);
            $_SESSION['name'] = $cs_name;
            header('Location: ../view/view_add_success.php');
        }
    ?>

    <?php
        
    ?>





