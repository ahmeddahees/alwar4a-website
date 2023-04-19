
<?php
$connaction = mysqli_connect("localhost", "ahmed", "123", "elwr4a");
if (!$connaction) {
echo mysqli_connect_error();}

if (isset($_POST['submit'])) {
    $photo = $_FILES['photo'];
      $fname = $_POST['fname'];
     $photoname = $photo['name'];
    $phone = $_POST['number'];     
    $khdma = $_POST['5dma'];  
    $ghazname = $_POST['ghazname'];  
    $location = $_POST['location'];  
    $email = $_POST['email'];  
    $wsf = $_POST['wsf'];  
    $date = $_POST['date'];  
    $temp = $photo["tmp_name"];
    $error = $photo["error"];

$sql =  "INSERT INTO mlnzlya(fullname, phone, flocation, email, 5dma, photo, wsf, nameghaz , fdate) VALUES ('$fname', '$phone', '$location', '$email','$khdma', '$photoname', '$wsf', '$ghazname', '$date')";

if (!$sql) {
echo "asfasfasf";} 
mysqli_query($connaction, $sql);  

$comedata = "SELECT * FROM mlnzlya";

$reslut = mysqli_query($connaction, $comedata);  
$sqll1 = mysqli_fetch_all($reslut , MYSQLI_ASSOC);
$folder = "./assets/photos/khrbya/".$photoname;
move_uploaded_file($temp,$folder);

}



