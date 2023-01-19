<?php
        session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css">
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
            background-size: 100% 220%;
            font-family: 'Kanit', sans-serif;
        }
        #center-form{
            top: 180px;
            border-radius:20px ;
            background-color: white;
        }
        h4{
            color: #7B2E2F ;
        }
        h1
        {
            font-weight: bold;
        }
    </style>

    <?php
        include_once '../model/ConDB.php'; 
        include_once '../model/Course.php';
    ?>

</head>
<body>
    <div class="container">
        <div class="row align-items-start">
            <div class="col-3">
                <!--Null col --><p></p>
            </div>
    <div id="center-form" class="col-6">
        <br>
    <h1 class="text-center">Success Editing</h1><br>
    <h4 class="text-center"><?php echo "".$_SESSION['name']."";?></h4>
    <br> 
    <h6 class="text-center" id="text-sm">ทำการบันทึกข้อมูลที่คุณเเก้ไขเรียบร้อยเเล้ว <i class="bi bi-check-circle-fill text-success"></i></h6>
    <div class="form-group row">
        <div class="col-sm-3">

        </div>
        <div class="col-sm-6">
            <a href="../index.php" class="btn btn-secondary btn-sm btn-block">กลับไปยังหน้า Home Page</a>
        </div>
        <div class="col-sm-3">

        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-3">

        </div>
        <div class="col-sm-6">
            <form action ="view_add_course.php">
            <input type='submit' class='btn btn-primary btn-sm btn-block' value='เพิ่มคอร์สของคุณ +' id='submit_buttons'>
            </form>
        </div>
        <div class="col-sm-3"> 

        </div>
    </div>


    <!-- Start of center form-->
 
        <br>

      
      <!-- End of center form--> 
            </div>
            <div class="col-3">
                <!--Null col -->
            </div>
            
     </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br>

    
</body>
</html>