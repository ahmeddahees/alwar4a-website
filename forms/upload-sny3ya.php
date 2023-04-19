
<?php
$conn = mysqli_connect("localhost", "ahmed", "123", "elwr4a");
if (!$conn) {
echo mysqli_connect_error();}

if (isset($_POST['submit'])) {
    $photo = $_FILES['photo'];
      $fname = $_POST['fname'];
     $photoname = $photo['name'];
    $phone = $_POST['number'];     
    $khdma = $_POST['5dma'];  
    $location = $_POST['location'];  
    $email = $_POST['email'];  
    $wsf = $_POST['wsf'];  
    $date = $_POST['date'];  
    $temp = $photo["tmp_name"];
    $error = $photo["error"];

$sql =  "INSERT INTO sny3ya(fname, email, phone, flocation, 5dma, photo, wsf, ftime) VALUES ('$fname', '$email', '$phone', '$location','$khdma', '$photoname', '$wsf', '$date')";
if (!$sql) {
echo "asfasfasf";} 
mysqli_query($conn, $sql);  

$comedata = "SELECT * FROM sny3ya";

$reslut = mysqli_query($conn, $comedata);  
$sqll1 = mysqli_fetch_all($reslut , MYSQLI_ASSOC);
$folder = "./assets/photos/sny3ya/".$photoname;
move_uploaded_file($temp,$folder);

}



