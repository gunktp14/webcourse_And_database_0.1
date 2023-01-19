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
            background-size: 100% 250%;
            font-family: 'Kanit', sans-serif;
        }
        #center-border-form{
            top: 180px; 
            border-radius: 20px;
            background-color: white;
        }
 
    </style>

</head>
<body>
 
    <?php
        session_start();
    ?>

    <div class="container">
        <div class="row align-items-start">
            <div class="col">
                <!--Null col -->
            </div>
    <div id="center-border-form" class="col">
    <br>
    <h1 class="text-center">Add Course</h1>
    <p class="text-center" id="text-sm">(กรุณา กรอกรายละเอียดให้ถูกต้อง) <i class="bi bi-journal-arrow-down"></i></p>
    <!-- Start of centers form-->
      <br>
    
    <form action="../controller/con_add_course.php" method="POST"> 
            <div class="form-group row">
                    <label for="staticEmail" class="col-sm-3 col-form-label">&nbsp&nbspชื่อคอร์ส</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPassword" name="cs_name">
                </div>
            </div>

            <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">&nbsp&nbspวันที่</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="inputPassword" name="cs_date">
                </div>
            </div>

            <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">&nbsp&nbspราคา</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPassword" name="cs_wallet">
                </div>
            </div>

            <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">&nbspรูปภาพ</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPassword" name="cs_img">
                    <!--<input type="file" name="fileToUpload" id="fileToUpload">-->
                </div>
            </div>

            <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">&nbsp&nbspYear</label>
                <div class="col-sm-8">
                    <input class="col-sm-6 custom-select custom-select-sm" list="cs_year" name="cs_year" id="cs_year">
                            <datalist id="cs_year">
                            <option value="2564">
                            <option value="2565">
                            <option value="2566">
                        </datalist>
                </div>
            </div>
            <br>

            <div class="form-group row">
                    <label class="col-sm-3 col-form-label"></label>
                <div class="col-sm-8">
                    <input type="submit" class="btn btn-primary btn btn-block" value="ยืนยันการเพิ่มข้อมูล" id="submit_buttons">
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
            <div class="col">
                <!--Null col -->
            </div>
    </div>

</body>
</html>
