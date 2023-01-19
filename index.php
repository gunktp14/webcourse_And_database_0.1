<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
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
            background-image: url("images/background6.jpg");
            background-size: 100% 100%;
            font-family: 'Kanit', sans-serif;
        }
        #center-form{
            top: 100px;
            border-radius:20px ;
            background-color: white;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="row align-items-start">
            <div class="col-1">
                <!--Null col --><p></p>
            </div>
    <div id="center-form" class="col-10">
    <br>
    <h1 class="text-center">All Course</h1>
    <p class="text-center" id="text-sm">(คอร์สทั้งหมดของเรา) <i class="bi bi-journals"></i></p> 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!--navbar-->
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form action="view/view_search_year.php" method="POST" class="d-flex"> 
        <input class="form-control me-2" type="search" placeholder="Search" name="cs_year"aria-label="Search">
        <button style="font-size:small;"class="btn btn-outline-success btn-sm" type="submit">ค้นหา</button>  
      </form>
    </div>
  </div>
</nav>
<!--navbar-->

    <!-- Start of center form-->
    <?php
      include_once "model/ConDB.php";
      include_once  "model/Course.php";
      $obj_name = new Course();
      $rs2 = $obj_name->getCourse();
      $no = 1;
      echo "<table id='customers'>
      <tr>
        <th>ลำดับ</th>
        <th>ชื่อคอร์ส</th>
        <th></th>
        <th></th>
      </tr>
      ";
      
      foreach($rs2 as $row){
        echo "
        <tr>
            <td>$no.</td>
            <td width='88%'><a style='color: black;' href='view/view_detail_course.php?cs_id=".$row['cs_id']."'>".$row['cs_name']."</a></td>
            <td width='7%'><button class='btn btn-primary btn-sm'><a style='color: white;' href='view/view_edit_course.php?cs_id=".$row['cs_id']."'>เเก้ไข</a></button></td> 
            <td width='5%'><button class='btn btn-danger btn-sm'><a style='color: white;' href='view/view_del_confirm.php?cs_id=".$row['cs_id']."'>ลบ</a></button></td> 
        </tr> 
        ";
        $no++;
      }
      echo "</table>
      <br>
      <form action='view/view_add_course.php'>
      <input type='submit' class='btn btn-secondary btn-sm btn-block' value='เพิ่มคอร์สของคุณ +' id='submit_buttons'> 
      </form>
      ";
      ?>
        <br>
        

      
      <!-- End of center form--> 
            </div>
            <div class="col-1">
                <!--Null col -->
            </div>
            
     </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br>

    
</body>
</html>