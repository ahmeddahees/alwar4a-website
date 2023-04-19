<?php include "./forms/upload-khrbya.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ورشة الاجهزة المنزلية</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link  rel="icon" href="assets/img/logo/alwarshaa12.png">
    <link href="assets/img/logo/alwarshaa12.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

    <!-- ======= Header ======= -->
    <?php include "./assets/pages/header.php"; ?>
    <!-- End Header -->
    <?php include "./assets/pages/centerpage.php" ?>

    <section id="apply" class="inner-page">
        <center>
            <h1 style="font-size: calc(1rem + 1vw);">قدم طلب للتواصل مع احد المتخصصين لدينا في مجال الاجهزة المنزلية لحل مشكلتك في اسرع وقت


            </h1>
        </center>
        <br>
        <div class="container">
            <form action="applymo4klawr4akhrb2ya.php" enctype="multipart/form-data" method="POST" role="form" >
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="tel" name="number" class="form-control" id="name" placeholder="رقم الهاتف " required>
                    </div>

                    <div class="col-md-6 form-group">
                        <input type="text" name="fname" class="form-control" id="name" placeholder="الاسم " required>
                    </div>

                </div>
                <br>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="email" name="email" class="form-control" id="name" placeholder="البريد الالكتروني" required>
                    </div>

                    <div class="col-md-6 form-group">
                        <input type="text" name="location" class="form-control" id="name" placeholder="العنوان" required>
                    </div>

                </div>
                <br>
                <div class="input-group mb-3">
                    <select class="form-select" name="5dma" id="inputGroupSelect01">
                      <option selected>اختر القسم المختص بالمشكلة</option>
                      <option>اعمال التبريد والتكيف  </option>
                      <option>التليفزيون والريسيفر والدش </option>
                      <option>السخانات   </option>                    
                      <option>الثلاجات والمبردات </option>
                      <option>الغسالات  </option>
                      <option>البوتجازات والافران </option> 
                      <option>الخلاطات والمراوح </option>
                      <option>المكانس الكهربائية  </option>
                      <option>المكواه  </option>                    
                      <option>الدفيات  </option>
                      <option>الميكرويف  </option>
                      <option>اجهزة اخري </option>

                    </select>
                </div>

                <input type="text" name="ghazname" class="form-control" id="name" placeholder="اسم الجهاز" required>

                <div class="form-group mt-3">
                    <i style="text-align: right; float: right; width: 100%;">وصف المشكلة</i>
                    <textarea type="text" class="form-control" name="wsf" id="subject" placeholder="وصف المشكلة" required> </textarea>
                </div>
                <br>
                <div class="input-group mb-3">
                    <label class="input-group-text" style="width: 100%; text-align: right; justify-content: right; width: 100%;" for="inputGroupFile01">ارفاق صورة او نموذج</label>
                    <input type="file" style="display:none;" name="photo" class="form-control" id="inputGroupFile01">
                </div>


                <i style="float: right;">الوقت المناسب للتواصل معك</i>
                <input type="date" name="date" class="form-control">

                <br>
                <div class="text-center"><button class="btn btn-primary" name="submit" type="submit">Send Message</button></div>
            </form>
        </div>
    </section>

    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include "./assets/pages/fotter.php" ?>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>