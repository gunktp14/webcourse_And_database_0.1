<?php
$cs_id=$_GET['cs_id'];
include_once '../model/ConDB.php';
include_once '../model/Course.php';
$obj_name = new Course();
$rs2 = $obj_name->getCourseDetail($cs_id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <!--Sweet Alert-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--CSS link Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--JS link Bootstrap-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" 
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" 
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Link Font-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <!-- Bootstrap-icon-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        
    <!--Style for body on this page!-->
    <style>
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css");
        @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap');
         body{
            background-image: url("../images/background6.jpg");
            background-size: 100% 500%;
            font-family: 'Kanit', sans-serif;
        }
        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        h5{
            color: #7B2E2F ;
        }
        #center-form{
            top: 100px;
            border-radius:20px ;
            background-color: white;
        }
        h1.text-center
        {
            font-weight: bold;
        }
        h4,h4.text-center
        {
            font-weight: bold;
        }
        h5{
            font-weight: bold;
        }
        h6.right
        {
            /* font-weight: bold; */
            display: inline-block;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="row align-items-start">
            <div class="col-1">
            </div>
            
    <div id="center-form" class="col-10">
    <!-- Start of center form-->
    <div style="display: inline-block;">
            <h6><p>year<?php echo"&nbsp&nbsp&nbsp&nbsp".$rs2['cs_year']."";?></p></h6>
    </div>
    <h1 class="text-center">Course Details</h1>
    <p class="text-center">(รายละเอียดของคอร์สที่คุณสนใจ)</p>
    <br>
    <img src="<?php echo "".$rs2['cs_img'].""?>" width="100%"> 
    <br>
    <h4><?php echo"&nbsp&nbsp&nbsp&nbsp".$rs2['cs_name']."";?></h4><br>
    <h5>ช่วงเวลาเรียน</h5>
    <p><?php echo"&nbsp&nbsp&nbsp&nbsp".$rs2['cs_range_date']."";?></p><br>
    <h5>วัตถุประสงค์</h5>
    <p><?php echo"&nbsp&nbsp&nbsp&nbsp ".$rs2['cs_fcourse']."";?></p><br>
    <h5>ระยะเวลาของหลักสูตร</h5>
    <p><?php echo"&nbsp&nbsp&nbsp&nbsp".$rs2['cs_time']."";?></p><br>
    <h5>สถานที่</h5>
    <p><?php echo"&nbsp&nbsp&nbsp&nbsp".$rs2['cs_location']."";?></p><br>
    <h5>กลุ่มเป้าหมาย</h5>
    <p><?php echo"&nbsp&nbsp&nbsp&nbsp".$rs2['cs_group']."";?></p><br>
    <h5>ขอบข่ายเนื้อหา</h5>
    <p><?php echo"&nbsp&nbsp&nbsp&nbsp".$rs2['cs_detail']."";?></p><br>
    <h5>การวัดผลประเมิน</h5>
    <p><?php echo"&nbsp&nbsp&nbsp&nbsp".$rs2['cs_perform']."";?></p><br>
    <h5>ผลที่คาดว่าจะได้รับ</h5>
    <p><?php echo"&nbsp&nbsp&nbsp&nbsp".$rs2['cs_reward']."";?></p><br>
    <div>
        <a class="homepage_right2" href="../index.php">กลับไปยังหน้าหลัก</a>  
    </div>
        <br>
        
      <!-- End of center form--> 
            </div>
            <div class="col-1">
                <!--Null col -->
            </div>
            
     </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>