<?php include "../forms/upload-khrbya.php";

$comedata = "SELECT * FROM `mlnzlya`";
$reslut = mysqli_query($connaction, $comedata);  
$sql = mysqli_fetch_all($reslut , MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>طلب للأنضمام لفريق العمل</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="icone here" rel="icon">
    <link href="icone here" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <!-- <h1 class="logo"><a href="index.html">الورشة</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.html" class="logo"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="../index.php">الرئيسية</a></li>
                    <li><a class="nav-link scrollto" href="../index.php#about">من نحن</a></li>
                    <li><a class="nav-link scrollto" href="../index.php#services">خدماتنا</a></li>
                    <li><a class="nav-link scrollto" href="../index.php#team">فريق العمل</a></li>
                    <li><a class="nav-link scrollto" href="../index.php#contact">تواصل معنا</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->
    <?php include "../assets/pages/centerpage.php" ?>

    <section class="inner-page">

    <center><h1>قسم الأجهزة المنزلية </h1></center>
   <?php foreach($sql as $mlnzlya): ?>
    <div style=" text-align:right; direction:rtl; " class="card">
  <h5 class="card-header" style="color:#2a39a5;"> نوع الخدمة : <?php echo $mlnzlya['5dma'] ?> </h5>
  <div class="card-body">
    <h5 class="card-text" > <b> الأسم :</b>   <?php echo $mlnzlya['fullname'] ?> </h5>
    <p class="card-text"> <b> رقم التليفون : </b> <?php echo $mlnzlya['phone'] ?></p>
    <p class="card-text"> <b>  الأيميل  : </b> <?php echo $mlnzlya['email'] ?>   </p>
    <p class="card-text"> <b>  موقع الشخص : </b> <?php echo $mlnzlya['flocation'] ?> </p>
    <p class="card-text">  <b>اسم الجهاز : </b><?php echo $mlnzlya['nameghaz'] ?>   </p>

    <p class="card-text">  <b>وصف المشكلة : </b><?php echo $mlnzlya['wsf'] ?>   </p>

    <p class="card-text"> <b>  الوقت المناسب للتواصل : </b>  <?php echo $mlnzlya['fdate'] ?>  </p>
    <a href="../assets/photos/khrbya/<?php echo $mlnzlya['photo'] ?>" download="<?php echo $mlnzlya['fullname'] ?>" class="btn btn-primary">Download CV</a>
  </div>
</div>  
<?php endforeach ?>
</section>


    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include "./../assets/pages/fotter.php" ?>
                                                 <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/purecounter/purecounter.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

</body>

</html>