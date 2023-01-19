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
            background-size: 100% 150%;
            font-family: 'Kanit', sans-serif;
        }
        #center-border-form{
            top: 60px;
            border-radius: 20px;
            background-color: white;
        }
        p.text-center
        {
            color: #696969;
        }
 
    </style>

</head>
<body>
 
    <?php
        session_start();
        $cs_id=$_GET['cs_id'];
        include_once '../model/ConDB.php';
        include_once '../model/Course.php';
        $obj_name = new Course();
        $rs2 = $obj_name->getCourseDetail($cs_id);
        if($rs2 == TRUE){
            $_SESSION['cs_id']=$cs_id;
        }
        else{
            
        }

    ?>

    <div class="container">
        <div class="row align-items-start">
            <div class="col-3">
                <!--Null col -->
            </div>
    <div id="center-border-form" class="col-6">
    <br>
    <h1 class="text-center">Edit Course</h1>
    <p class="text-center" id="text-sm">(กรุณา กรอกรายละเอียดให้ถูกต้อง) <i class="bi bi-journal-arrow-down"></i></p>
    <!-- Start of centers form-->
      <br>
    
    <form action="../controller/con_edit_course.php" method="POST"> 
            <div class="form-group row">
                    <label for="staticEmail" class="col-sm-3 col-form-label">&nbsp&nbspชื่อคอร์ส</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPassword" name="cs_name" value="<?php echo "".$rs2['cs_name']."";?>">
                </div>
            </div>

            <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">&nbsp&nbspวันที่</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="inputPassword" name="cs_date" value="<?php echo "".$rs2['cs_date']."";?>">
                </div>
            </div>

            <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">&nbsp&nbspราคา</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPassword" name="cs_wallet" value="<?php echo "".$rs2['cs_wallet']."";?>">
                </div>
            </div>

            <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">&nbspรูปภาพ</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPassword" name="cs_img" value="<?php echo "".$rs2['cs_img']."";?>">
                </div>
            </div>

            <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">&nbspช่วงเวลาเรียน</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPassword" name="cs_range_date" value="<?php echo "".$rs2['cs_range_date']."";?>">
                </div>
            </div>

            <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">&nbspวัตถุประสงค์</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPassword" name="cs_fcourse" value="<?php echo "".$rs2['cs_fcourse']."";?>">
                </div>
            </div>

            <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">&nbspระยะเวลา</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPassword" name="cs_time" value="<?php echo "".$rs2['cs_time']."";?>">
                </div>
            </div>

            <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">&nbspสถานที่</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPassword" name="cs_location" value="<?php echo "".$rs2['cs_location']."";?>">
                </div>
            </div>

            <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">&nbspกลุ่มเป้าหมาย</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPassword" name="cs_group" value="<?php echo "".$rs2['cs_group']."";?>">
                </div>
            </div>

            <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">&nbspขอบข่ายเนื้อหา</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPassword" name="cs_detail" value="<?php echo "".$rs2['cs_detail']."";?>">
                </div>
            </div>

            <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">&nbspผลประเมิน</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPassword" name="cs_perform" value="<?php echo "".$rs2['cs_perform']."";?>">
                </div>
            </div>

            <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">&nbspผลที่คาดว่าจะได้</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPassword" name="cs_reward" value="<?php echo "".$rs2['cs_reward']."";?>">
                </div>
            </div>

            <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">&nbspYear</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPassword" name="cs_year" value="<?php echo "".$rs2['cs_year']."";?>">
                </div>
            </div>

            <div class="form-group row">
                    <label class="col-sm-3 col-form-label"></label>
                <div class="col-sm-8">
                    <input type="submit" class="btn btn-primary btn btn-block" value="ยืนยันการเเก้ไขข้อมูล" id="submit_buttons">
                    <div class="left">
                        <a class="homepage_right" href="../index.php">กลับไปยังหน้าหลัก</a>  
                    </div> 
                </div>
            </div>
            

            

            <!-- <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">&nbsp&nbspระยะเวลา</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPassword">  
                </div>
            </div> -->
    </form>

      <!-- End of center form-->
            </div>
            <div class="col-3">
                <!--Null col -->
            </div>
    </div>

</body>
</html>
