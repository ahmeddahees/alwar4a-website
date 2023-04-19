
<?php
$conn = mysqli_connect("localhost", "ahmed", "123", "elwr4a");
if (!$conn) {
echo mysqli_connect_error();}

if (isset($_POST['submmit'])) {
    $photo = $_FILES['photo'];
      $fname = $_POST['name1'];
     $photoname = $photo['name'];
    $phone = $_POST['number'];     
    $khdma = $_POST['5dma'];  
    $location = $_POST['location'];  
    $email = $_POST['email'];  
    $wsf = $_POST['wsf'];  
    $date = $_POST['date'];  
    $temp = $photo["tmp_name"];
    $error = $photo["error"];

$sql =  "INSERT INTO elctronic(fullname, email, phone, flocation, 5dma, photo, wsf, ftime) VALUES ('$fname', '$email', '$phone', '$location','$khdma', '$photoname', '$wsf', '$date')";
if (!$sql) {
echo "asfasfasf";} 
mysqli_query($conn, $sql);  

$comedata = "SELECT * FROM elctronic";

$reslut = mysqli_query($conn, $comedata);  
$sqll1 = mysqli_fetch_all($reslut , MYSQLI_ASSOC);
$folder = "./assets/photos/elctronics/".$photoname;
move_uploaded_file($temp,$folder);

}



