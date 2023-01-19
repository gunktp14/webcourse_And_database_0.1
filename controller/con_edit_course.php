    <?php
        session_start();
        $cs_id=$_SESSION['cs_id'];
    ?>
    
    <?php
        $cs_name=$_POST['cs_name'];
        $cs_img=$_POST['cs_img'];
        $cs_date=$_POST['cs_date'];
        $cs_wallet=$_POST['cs_wallet'];
        $cs_range_date=$_POST['cs_range_date'];
        $cs_fcourse=$_POST['cs_fcourse'];
        $cs_time=$_POST['cs_time'];
        $cs_location=$_POST['cs_location'];
        $cs_group=$_POST['cs_group'];
        $cs_detail=$_POST['cs_detail'];
        $cs_perform=$_POST['cs_perform'];
        $cs_reward=$_POST['cs_reward'];
    ?>

    <?php
        $course=array();
        $course['cs_id']=$cs_id;
        $course['cs_name']=$cs_name;
        $course['cs_img']=$cs_img;
        $course['cs_date']=$cs_date;
        $course['cs_wallet']=$cs_wallet;
        $course['cs_range_date']=$cs_range_date;
        $course['cs_fcourse']=$cs_fcourse;
        $course['cs_time']=$cs_time;
        $course['cs_location']=$cs_location;
        $course['cs_group']=$cs_group;
        $course['cs_detail']=$cs_detail;
        $course['cs_perform']=$cs_perform;
        $course['cs_reward']=$cs_reward;
        print_r($course);
    ?>
        

    <?php
        include_once '../model/ConDB.php';
        include_once '../model/Course.php';
        $obj_name = new Course();
        //$rs2 = $obj_name->editCourse2($course);
        $rs2 = $obj_name->editCourse($cs_id, $cs_name, $cs_img, $cs_date, $cs_wallet, $cs_range_date, $cs_fcourse, $cs_time, $cs_location, $cs_group, $cs_detail, $cs_perform, $cs_reward);
        $_SESSION['name']=$cs_name;
        header('Location: ../view/view_edit_success.php');

    ?>

