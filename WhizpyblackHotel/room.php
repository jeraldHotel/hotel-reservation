<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Whizpy Black Hotel-Room</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
  <?php
      require('sap/links.php');
   ?>
   <style>
   </style>
</head>
<body class="bg-light">

<?php 
require('sap/header.php'); 
?>

    <div class="my-5 px-4">
    <h2 class="text-center fw-bold h-font">OUR ROOMS</h2>
    </div>

    <div class="container">
        <div class="row">

           <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-0">
           <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded shadow">
            <div class="container-fluid flex-lg-column align-items-stretch">
             <h4 class="mt-2 text-light">Filters</h4>
             <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column align-items-stretch" id="filterDropdown">
             <div class="border bg-light p-3 rounded">
                <h5 class="mb-3" style="font-size: 18px;">Check Availability</h5>
                <label class="form-label">Check-in</label>
                <input type="date" class="form-control shadow-none mb-3">
                <label class="form-label">Check-out</label>
                <input type="date" class="form-control shadow-none">
             </div>

             <div class="border bg-light p-3 rounded">
                <h5 class="mb-3" style="font-size: 18px;">Facilities</h5>
                <div class="mb-2">
                <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                <label class="form-check-label" for="f1">Facility 1</label>
                </div>
                <div class="mb-2">
                <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                <label class="form-check-label" for="f2">Facility 2</label>
                </div>
                <div class="mb-2">
                <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                 <label class="form-check-label" for="f3">Facility 3</label>
                 </div>
                
                  <div class="border bg-light p-3 rounded">
                 <h5 class="mb-3" style="font-size: 18px;">Guests</h5>
                 <div class="d-flex">
                 <div class="me-3">
                <label class="form-label">Adult</label>
                <input type="number" class="form-control shadow-none">
                </div>
                <div>
                <label class="form-label">Kids</label>
                <input type="number" class="form-control shadow-none">
                </div>
                </div>
             </div> 
           </div>
         </div>
       </nav>
       </div>
  
       <div class="col-lg-9 col-md-12 px-4">
       <div class="card mb-4 border-0 shadow">
       <div class="row g-0 p-3 align-items-center">
       <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
         <img src="IMAGES/room/1.JPEG" class="img-fluid rounded">
          </div>
       <div class="col-md-5 px-lg-3 px-0">
          <h5 class="mb-1">Simple Room</h5>
          <div class="features mb-3">
          <h6 class="mb-1">Features</h6>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
            2 Bed Good For Two People
          </span>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
            1 Bathroom 
          </span> <br>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
            1 Sofa  
          </span>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
            1  Office Table 
          </span>
         </div>
         <div class="facilities mb-3">
         <h6 class="mb-1">Facilities</h6>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
            Wifi
          </span>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
            Television
          </span>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
             AC
          </span>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
             Telephone
          </span>
          <h6 class="mb-1">Guest</h6>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
            2 Adult
          </span>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
            1 children
          </span>
         </div>
         <div class="rating mb-2">
         <h6 class="mb-1">Rating</h6>
         <span class="badge rounded-pill bg-light">
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-half text-warning"></i>
         <i class="bi bi-star text-warning"></i>
        </span>
         </div> 
          </div>
          
           <div class="col-md-2 text-center">
           <h6 class="mb-4">₱2000 Per Night</h6>
        <a href="admin/reservation.php" class="btn btn-outline-dark w-100 shadow-none me-lg-3 me-3 mb-2">Book Now</a> 
    </div>
  </div>
</div>
<div class="card mb-4 border-0 shadow">
       <div class="row g-0 p-3 align-items-center">
       <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
         <img src="IMAGES/room/4.JPEG" class="img-fluid rounded">
          </div>
       <div class="col-md-5 px-lg-3 px-0">
          <h5 class="mb-1">Double Bed Room</h5>
          <div class="features mb-3">
          <h6 class="mb-1">Features</h6>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
            2 Bed Good For Two People
          </span>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
            1 Bathroom 
          </span> <br>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
            1 Sofa  
          </span>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
            1  Office Table 
          </span>
         </div>
         <div class="facilities mb-3">
         <h6 class="mb-1">Facilities</h6>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
            Wifi
          </span>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
            Television
          </span>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
             AC
          </span>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
             Telephone
          </span>
          <h6 class="mb-1">Guest</h6>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
            2 Adult
          </span>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
            1 children
          </span>
         </div>
         <div class="rating mb-2">
         <h6 class="mb-1">Rating</h6>
         <span class="badge rounded-pill bg-light">
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-half text-warning"></i>
         <i class="bi bi-star text-warning"></i>
        </span>
         </div> 
          </div>
           <div class="col-md-2 text-center">
           <h6 class="mb-4">₱5000 Per Night</h6>
        <a href="admin/reservation.php" class="btn btn-outline-dark w-100 shadow-none me-lg-3 me-3 mb-2">Book Now</a> 
    </div>
  </div>
</div>
<div class="card mb-4 border-0 shadow">
       <div class="row g-0 p-3 align-items-center">
       <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
         <img src="IMAGES/room/5.JPEG" class="img-fluid rounded">
          </div>
       <div class="col-md-5 px-lg-3 px-0">
          <h5 class="mb-1">Deluxe Room</h5>
          <div class="features mb-3">
          <h6 class="mb-1">Features</h6>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
            2 Bed Good For Two People
          </span>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
            1 Bathroom 
          </span> <br>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
            1 Sofa  
          </span>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
            1  Office Table 
          </span>
         </div>
         <div class="facilities mb-3">
         <h6 class="mb-1">Facilities</h6>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
            Wifi
          </span>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
            Television
          </span>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
             AC
          </span>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
             Telephone
          </span>
          <h6 class="mb-1">Guest</h6>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
            4 Adult
          </span>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
            4 children
          </span>
         </div>
         <div class="rating mb-2">
         <h6 class="mb-1">Rating</h6>
         <span class="badge rounded-pill bg-light">
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-half text-warning"></i>
         <i class="bi bi-star text-warning"></i>
        </span>
         </div> 
          </div>
           <div class="col-md-2 text-center">
           <h6 class="mb-4">₱10000 Per Night</h6>
        <a href="admin/reservation.php" class="btn btn-outline-dark w-100 shadow-none me-lg-3 me-3 mb-2">Book Now</a> 
    </div>
  </div>
</div>

       </div>
    </div>
 </div>

<?php
   require('sap/footer.php');
 ?> 

</body>

</html>