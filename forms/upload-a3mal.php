<?php
$conn = mysqli_connect("localhost", "ahmed", "123", "elwr4a");
if (!$conn) {
  echo mysqli_connect_error();
}

if (isset($_POST['submit'])) {
  $photo = $_FILES['photo'];
  $fname = $_POST['name'];
  $photoname = $photo['name'];
  $phone = $_POST['number'];
  $khdma = $_POST['khdma'];
  $location = $_POST['location'];
  $email = $_POST['email'];
  $wsf = $_POST['wsf'];
  $date = $_POST['date'];
  $temp = $photo["tmp_name"];
  $error = $photo["error"];

  $sql =  "INSERT INTO al23mal(fname, email, phone, flocation, 5dma, wsf, ftime, photo) VALUES ('$fname', '$email', '$phone', '$location','$khdma', '$wsf', '$date', '$photoname')";
  if (!$sql) {
    echo "asfasfasf";
  }
  mysqli_query($conn, $sql);

  $comedata = "SELECT * FROM al23mal";

  $reslut = mysqli_query($conn, $comedata);
  $sqll1 = mysqli_fetch_all($reslut, MYSQLI_ASSOC);
  $folder = "./assets/photos/a3mal/" . $photoname;
  move_uploaded_file($temp, $folder);
}