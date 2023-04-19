
<?php
$conn = mysqli_connect("localhost", "ahmed", "123", "elwr4a");
if (!$conn) {
echo mysqli_connect_error();}

if (isset($_POST['submit'])) {
    $photo = $_FILES['photo'];
      $fname = $_POST['fname'];
     $photoname = $photo['name'];
    $phone = $_POST['number'];     
    $ghazname = $_POST['ghazname'];  
    $location = $_POST['location'];  
    $email = $_POST['email'];  
    $wsf = $_POST['wsf'];  
    $nameghaz = $_POST['nameghaz'];  

    $date = $_POST['date'];  
    $temp = $photo["tmp_name"];
    $error = $photo["error"];

$sql =  "INSERT INTO 5amat(fullname, email, phone, flocation, nameghaz, ghazname, photo, wsfml4kla, fdate) VALUES ('$fname', '$email', '$phone', '$location','$ghazname', '$nameghaz', '$photoname', '$wsf', '$date')";
if (!$sql) {
echo "asfasfasf";} 
mysqli_query($conn, $sql);  

$comedata = "SELECT * FROM 5amat";

$reslut = mysqli_query($conn, $comedata);  
$sqll1 = mysqli_fetch_all($reslut , MYSQLI_ASSOC);
$folder = "./assets/photos/khamatphoto/".$photoname;
move_uploaded_file($temp,$folder);

}



