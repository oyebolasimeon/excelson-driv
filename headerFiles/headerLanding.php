<?php 
    session_start();
?>
<!DOCTYPE html>


<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Excelson Driving School -  Manitoba Canada</title>
  <meta content="Excelson Driving School" name="description">
  <meta content="Driving School Road Test Canada" name="keywords">
  <meta property="og:image" content="assets/icon.png ">

  <!-- Favicons -->
  <link href="assets/icon.png" rel="icon">
  <link href="assets/icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <script>
var i = 0;
var txt = 'Welcome To Excelson Driving School';
var speed = 300;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("excelsonText").innerHTML += txt.charAt(i);
    i++; 
    setTimeout(typeWriter, speed);
  } 
}
</script>


</head>

<body onLoad="typeWriter()">
  <div class="wrap">



