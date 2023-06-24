<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Whizpy Black Hotel-Facilities</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
  <?php
      require('sap/links.php');
   ?>
   <style>
    .box{
        border-top-color: #F1C40F !important;
    }
   </style>
</head>
<body class="bg-light">

<?php 
require('sap/header.php'); 
?>

<div class="my-5 px-4">
    <h2 class="text-center fw-bold h-font">ABOUT US</h2>
    <p class="text-center mt-3">
    At our hotel, we believe that every guest deserves anextraordinary <br>
   experience from the moment they step through our doors.  
    </p>
    </div>
      
      <div class="container mt-2">
    <div class="row justify-content-evenly align-items-center">
    <div class="col-lg-6 col-md-4 mb-4 order-lg-1 order-md-1 order-2">
        <h3 class="mb-3">Princess Dacalos</h3>
        <p>
        teamwork is the cornerstone of our success in the hotel industry, <br>
        where every guest's experience is shaped by the collective efforts of <br>
        our dedicated team. Like the intricate interplay of a well-orchestrated <br>
        ymphony, our teamwork harmonizes diverse talents,  skills, and <br>
        perspectives, creating an extraordinary symphony of hospitality. <br>
        </p>
    </div>
    <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
        <img src="IMAGES/11.JPG" class="w-100 rounded">
    </div>
   </div>
</div>

    <div class="container mt-5">
       <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 px-3">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="IMAGES/hotel.PNG" width="70px">
                <h4 class="mt-2">100+ Rooms</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-3">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="IMAGES/12.PNG" width="38px">
                <h4 class="mt-2">300+ Customers</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-3">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="IMAGES/13.PNG" width="39px">
                <h4 class="mt-2">20+ Achievements</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="IMAGES/15.PNG" width="40px">
                <h4 class="mt-2">70% Ratings</h4>
            </div>
        </div>
       </div>
    </div>

    <h3 class="text-center fw-bold h-font">OUR TEAMS</h3>
     
     <div class="container mt-4 px-2">
     <div class="swiper mySwiper">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="IMAGES/14.JPG" class="w-100">
        <h5 class="mt-2">Princess Dacalos</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="IMAGES/12.JPG" class="w-100">
        <h5 class="mt-2">Jerald Jugue</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="IMAGES/17.JPEG" class="w-100">
        <h5 class="mt-2">Louisse Ann Asuncion</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="IMAGES/17.JPEG" class="w-100">
        <h5 class="mt-2">Earl Hance Asuncion</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="IMAGES/17.JPEG" class="w-100">
        <h5 class="mt-2">ChrisOne Decano</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="IMAGES/17.JPEG" class="w-100">
        <h5 class="mt-2">Christine Mae Gayapa</h5>
      </div>
      
    </div>
    <div class="swiper-pagination"></div>
  </div>
     </div>

<?php
   require('sap/footer.php');
 ?> 
 
 <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320:{
          slidesPerview: 1,
        },
        640:{
          slidesPerview: 1,
        },
        768:{
          slidesPerview: 2,
        },
        1024:{
          slidesPerview: 3,
        },
      }
    });
  </script>
</body>
</html>