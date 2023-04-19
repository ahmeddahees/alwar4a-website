<?php 

include "./forms/upload-company.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>اطلب موظف لشركتك الان
    </title>
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
            <h1 style="font-size: calc(0.5rem + 1vw);">اطلب موظف لشركتك الان





            </h1>
        </center>
        <br>
        <div class="container">
            <form action="applyform4erka.php" method="POST" role="form">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="tel" name="mgalcompany" class="form-control" id="name" placeholder="مجال عمل الشركة" required>
                    </div>

                    <div class="col-md-6 form-group">
                        <input type="text" name="Cname" class="form-control" id="name" placeholder="اسم الشركة" required>
                    </div>

                </div>
                <br>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="email" name="email" class="form-control" id="name" placeholder="البريد الالكتروني للشركة" required>
                    </div>

                    <div class="col-md-6 form-group">
                        <input type="text" name="location" class="form-control" id="name" placeholder="عنوان الشركة" required>
                    </div>

                </div>
                <br>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="number" name="number" class="form-control" id="name" placeholder="رقم التواصل" required>
                    </div>

                    <div class="col-md-6 form-group">
                        <input type="text" name="msolkhdma" class="form-control" id="name" placeholder="مسؤل التوظيف او مقدم الطلب 
" required>
                    </div>

                </div>

                <div class="form-group mt-3">
                    <i style="text-align: right; float: right; width: 100%;">الوصف الوظيفي</i>
                    <textarea type="text" class="form-control" name="wsfwzyfa" id="subject" placeholder="الوصف الوظيفي" required> </textarea>
                </div>
                <br>
                <div class="row">
                <div class="col-md-6 form-group">
                        <input type="text" name="mharatneed"style="margin-top: 1em" class="form-control" id="name" placeholder="المهارات المطلوبة " required>
                    </div>
                    <br>
                    <div class="col-md-6 form-group">
                        <input type="number" style="margin-top: 1em" name="moneyneed" class="form-control" id="name" placeholder="المرتب المقترح" required>
                    </div>
                    <br>
                    <div class="col-md-6 form-group">
                        <input type="text" name="whatneed"style="margin-top: 1em" class="form-control" id="name" placeholder="المؤهلات المطلوبة " required>
                    </div>
                    <br>
                    <div class="col-md-6 form-group">
                        <input type="text" name="anymore" style="margin-top: 1em" class="form-control" id="name" placeholder="اضافات اخري" required>
                    </div>
                    <br>
               

                </div>
                <!-- <div class="col-md-6 form-group"> -->

<i style="width: 100%; float: right; text-align: right; justify-content:right;">الوقت المناسب للتواصل معك</i>
<input type="date" name="date" class="form-control">
<!-- </div> -->

                <br>
                <br>
                <div class="text-center"><button class="btn btn-primary" name="submit" type="submit">Send Message</button></div>
            </form>
        </div>
    </section>



    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include "./assets/pages/fotter.php" ?>

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