<?php
$conncompany = mysqli_connect("localhost", "ahmed", "123", "elwr4a");
if (!$conncompany) {
  echo mysqli_connect_error();
}

if (isset($_POST['submit'])) {
  $Cname = $_POST['Cname'];
  $phone = $_POST['number'];
  $mgalcompany = $_POST['mgalcompany'];
  $location = $_POST['location'];
  $email = $_POST['email'];
  $wsfwzyfa = $_POST['wsfwzyfa'];
  $mharatneed = $_POST['mharatneed'];
  $moneyneed = $_POST['moneyneed'];
  $mozfsent = $_POST['msolkhdma'];
  $whatneed = $_POST['whatneed'];
  $anymore = $_POST['anymore'];
  $date = $_POST['date'];

  $sqlCompany =  "INSERT INTO mozf(companyname, mgalcompany, complocation, compemail, elmharatneed, cnumber, wsfelwzyfa, elmortp,elmo2halneed,mozfsent,anymore,cdate ) VALUES ('$Cname', '$mgalcompany', '$location', '$email','$mharatneed', '$phone', '$wsfwzyfa', '$moneyneed' , '$whatneed',' $mozfsent', '$anymore', '$date')";
  if (!$sqlCompany) {
    echo "asfasfasf";
  }

  mysqli_query($conncompany, $sqlCompany);

  $comedataC = "SELECT * FROM mozf";

  $reslutcompany = mysqli_query($conncompany, $comedataC);
  $sqlCompanydata = mysqli_fetch_all($reslutcompany, MYSQLI_ASSOC);
}