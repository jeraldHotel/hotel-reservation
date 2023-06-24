<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Whizpy Black Hotel-Home</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
  <?php
      require('sap/links.php');
   ?>
</head>
<style>
.advantages {
  background: url(IMAGES/service.JPEG)no-repeat;
  min-height: 0px;
  background-size: cover;
}
.advantage-bottom {
      margin-top: 20px;
      margin-bottom: 20px;
			display: flex;
			justify-content: center;
		}
.advantage-block {
    padding:2em 2em;
    background: rgba(0, 0, 0, 0.52);
    text-align: center;
}
.advantage-block:hover {
    background: rgba(255, 255, 255, 0.22);
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
}
.advantage-block h4 {
    font-size: 1.5em;
    color: #fff;
    margin: 0.5em 0em 0.5em 0em;
    text-transform: capitalize;
    letter-spacing: 1px;
}
.advantage-block p {
    font-size: 16px;
    color: #FFF;
    text-align: left;
    padding-left: 3em;
    line-height: 35px;
	letter-spacing: .8px;
}
.advantage-grid {
    padding: 6;
}
.left-w3ls {
    border-right: 1px solid #b1b1b1;
}
.advantage-block .bi-credit-card,.advantage-block .bi-clock {
    color: #ffce14;
    font-size: 45px;
    margin-bottom: 10px;
}
.advantage-block p i {
    color: #ffce14;
    font-size: 13px;
    margin-right: 0px;
}
@media screen and (max-width: 575px) {
      .advantage-grid {
        margin-top: 20px;
      }
    }
    
    @media screen and (max-width: 575px) {
      .advantage-grid {
        padding: 5px;
      }
      
      .advantage-block {
        padding: 15px;
      }
      
      .advantage-block i {
        font-size: 15px;
      }
      
      .advantage-block h4 {
        font-size: 15px;
      }
    }
.swiper-slide {
  margin-top: 2px;
      background-position: auto;
      background-size: auto;
      width: 400px;
      height: 300px;
    }
    .swiper-slide img {
      margin-top: 2px;
      display: flex;
      width: 20px;
    }
.availability-form{
  margin-top: -50px;
  z-index: 2;
  position: relative;
}
@media screen and (max-width: 585px){
  .availability-form{
    padding: 0 35;
}
}
</style>
<body class="bg-light" >

<?php 
require('sap/header.php'); 
?>

<!--------slideshow---------->
<div class="container-fluid px-lg-1 mt-1">
<div class="swiper mySwiper"> 
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="IMAGES/1.PNG" class="w-100 d-block"></div>
      <div class="swiper-slide"><img src="IMAGES/2.PNG" class="w-100 d-block"></div>
      <div class="swiper-slide"><img src="IMAGES/3.PNG" class="w-100 d-block"></div>
      <div class="swiper-slide"><img src="IMAGES/4.PNG" class="w-100 d-block"></div>
    </div>
  </div>
</div>

<!---------availability form----------->
<div class="container availability-form">
  <div class="row">
    <div class="col-lg-20 bg-dark text-light shadow p-4 rounded">
      <h5 class="mb-4">Checking Room Availabe</h5>
      <form>
       <div class="row align-items-end">
        <div class="col-lg-3">
        <label class="form-label" style="font-weight: 500;">Check-in</label>
      <input type="date" class="form-control shadow-none"></input>
    </div>          
    <div class="col-lg-3">
        <label class="form-label" style="font-weight: 500;">Check-out</label>
      <input type="date" class="form-control shadow-none"></input>
    </div>
    <div class="col-lg-3">
    <label class="form-label" style="font-weight: 500;">Adult</label>
    <select class="form-select shadow-none">
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
  <option value="3">Four</option>
  <option value="3">Five</option>
</select> </div>
<div class="col-lg-2">
    <label class="form-label" style="font-weight: 500;">Kids</label>
    <select class="form-select shadow-none">
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
  <option value="3">Four</option>
  <option value="3">Five</option>
</select> </div>
<div class="col-lg-1 mt-3">
  <button type="submit" class="btn btn-outline-light shadow-none me-lg-3 me-3">Submit</button>
    </div>
   </div>
   </form>
  </div>
 </div>
</div>

<!---------rooms----------->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
    <div class="container">
        <div class="row justify-content-evenly">
          
<div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
    <img src="IMAGES/room/1.JPEG" class="card-img-top">
    <div class="card-body">
    <h5>Simple Room</h5>
    <h6 class="mb-4">₱2000 Per Night</h6>
    <div class="features mb-2">
      <h6 class="mb-1">Features</h6>
      <span class="badge rounded-pill bg-dark text-light text-wrap">
        1 Bed Good For Two People
       </span>
    <span class="badge rounded-pill bg-dark text-light text-wrap">
            1 Bathroom 
    </span>
      <span class="badge rounded-pill bg-dark text-light text-wrap">
            1 Sofa  
      </span>
        <span class="badge rounded-pill bg-dark text-light text-wrap">
            1  Office Table 
          </span>
         </div>
         <div class="facilities mb-2">
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
         </div> </div>  
         <div class="d-flex justify-content-evenly mb-2">
        <a href="room.php" class="btn btn-outline-dark shadow-none me-lg-3 me-3">Book Now</a>
         </div>
      </div>
</div>
<div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="IMAGES/room/4.JPEG" class="card-img-top">
        <div class="card-body">
        <h5>Double Bed Room</h5>
        <h6 class="mb-4">₱5000 Per Night</h6>
        <div class="features mb-2">
          <h6 class="mb-1">Features</h6>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
            2 Bed Good For Two People
          </span>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
            1 Bathroom 
          </span>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
            1 Sofa  
          </span>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
            1  Office Table 
          </span>
         </div>
         <div class="facilities mb-2">
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
         <div class="d-flex justify-content-evenly mb-2">
        <a href="room.php" class="btn btn-outline-dark shadow-none me-lg-3 me-3">Book Now</a>
         </div>
      </div>
    </div>
</div>
<div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="IMAGES/room/5.JPEG" class="card-img-top">
        <div class="card-body">
        <h5>Deluxe Room</h5>
        <h6 class="mb-4">₱10000 Per Night</h6>
        <div class="features mb-2">
          <h6 class="mb-1">Features</h6>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
            1 Bed Good For Two People
          </span>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
            1 Bathroom 
          </span>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
            1 Sofa  
          </span>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
            1  Office Table 
          </span>
         </div>
         <div class="facilities mb-2">
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
         </div>
         <h6 class="mb-1">Guest</h6>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
            4 Adult
          </span>
          <span class="badge rounded-pill bg-dark text-light text-wrap">
            3 children
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
         <div class="d-flex justify-content-evenly mb-2">
        <a href="#" class="btn btn-outline-dark shadow-none me-lg-3 me-3">Book Now</a>
        <a href="#" class="btn btn-sm text-dark custom-bg shadow-none">More Details</a>
         </div>
      </div>
    </div>
</div>
    <div class="col-lg-12 text-center mt-5">
  <a href="room.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms <i class="bi bi-arrow-right"></i></a>
     </div>
   </div>
 </div>
</div>
    
<!---------facilities----------->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
    <div class="container">
      <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-3 my-3">
          <img src="IMAGES/facilities/1.PNG" width="80px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-3 my-3">
          <img src="IMAGES/facilities/2.PNG" width="80px">
          <h5 class="mt-3">Dining Option</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-3 my-3">
          <img src="IMAGES/facilities/3.PNG" width="80px">
          <h5 class="mt-3">Air  Conditioned</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-3 my-3">
          <img src="IMAGES/facilities/4.PNG" width="80px">
          <h5 class="mt-3">Spa Service</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-3 my-3">
          <img src="IMAGES/facilities/5.PNG" width="80px">
          <h5 class="mt-3">Free Coffee</h5>
        </div>
    </div>
 </div>
 <div class="col-lg-12 text-center mt-5">
  <a href="facilities.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">For Facilities<i class="bi bi-arrow-right"></i></a>
     </div>
  <!-------------->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR SERVICES</h2>
  <div class="advantages">
	<div class="container">
		<div class="advantages-main">
		   <div class="advantage-bottom">
			 <div class="col-md-6 advantage-grid left-w3ls wow bounceInLeft">
			 	<div class="advantage-block ">
         <i class="bi bi-credit-card"></i>
			 		<h4>Stay First, Pay After! </h4>
			 		<p>TAt our hotel, we believe in offering an exceptional <br>
             experience where your comfort and satisfaction are <br>
             our top priorities. We understand that flexibility <br>
             and convenience are crucial when it comes to planning <br>
              your stay,</p>
					<p><i class="bi bi-check2"></i>Decorated room, air conditioned</p>
					<p><i class="bi bi-check2"></i>Private balcony</p>
			 		
			 	</div>
			 </div>
			 <div class="col-md-6 advantage-grid right-w3ls wow zoomIn">
			 	<div class="advantage-block">
         <i class="bi bi-clock"></i>
			 		<h4>24 Hour Restaurant</h4>
			 		<p>At our hotel, we redefine the concept of exceptional <br>
             service, and our 24-hour restaurant is no exception. <br>
             Step into a world where culinary delights await you <br>
             around the clock, where hunger knows no boundaries.
             In our collaborative symphony, </p>
					<p><i class="bi bi-check2"></i>24 hours room service</p>
					<p><i class="bi bi-check2"></i>24-hour Concierge service</p>
			 	</div>
			 </div>
			</div>
		</div>
	</div>
</div>
<!---------------->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font mt-1">RATINGS</h2>
    <div class="container mt-5">
    <div class="swiper mySwiper-2">
    <div class="swiper-wrapper mb-5">
    
    <div class="swiper-slide bg-white p-4 mt-2">
        <div class="profile d-flex align-items-center p-4">
        <i class="bi bi-person" style="fs-3 me-2"></i>
        <h6 class="m-0 ms-2"> Random User 4</h6>
       </div>
       <p>"Excellent experience! The service was prompt, and the staff was friendly and attentive. <br>
         The quality of the place exceeded my expectations. I highly recommend this place!" </p>
       <div class="rating mb-2">
       <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-half text-warning"></i>
         <i class="bi bi-star text-warning"></i>    
       </div>
      </div>
      <div class="swiper-slide bg-white p-4 mt-2">
        <div class="profile d-flex align-items-center p-4">
        <i class="bi bi-person" style="fs-3 me-2"></i>
        <h6 class="m-0 ms-2"> Random User 1</h6>
       </div>
       <p> "Excellent experience! The service was prompt, and the staff was friendly and attentive. br
        The quality of the place exceeded my expectations. I highly recommend this place!" </p>
       <div class="rating mb-2">
       <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-half text-warning"></i>
         <i class="bi bi-star text-warning"></i>    
       </div>
      </div>
      <div class="swiper-slide bg-white p-4 mt-2">
        <div class="profile d-flex align-items-center p-4">
        <i class="bi bi-person" style="fs-3 me-2"></i>
        <h6 class="m-0 ms-2"> Random User 2</h6>
       </div>
       <p>"Excellent experience! The service was prompt, and the staff was friendly and attentive. <br>
         The quality of the place exceeded my expectations. I highly recommend this place!" </p>
       <div class="rating mb-2">
       <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-half text-warning"></i>
         <i class="bi bi-star text-warning"></i>    
       </div>
      </div>
      <div class="swiper-slide bg-white p-4 mt-2">
        <div class="profile d-flex align-items-center p-4">
        <i class="bi bi-person" style="fs-3 me-2"></i>
        <h6 class="m-0 ms-2"> Random User 3</h6>
       </div>
       <p> "Excellent experience! The service was prompt, and the staff was friendly and attentive. <br>
        The quality of the place exceeded my expectations. I highly recommend this place!" </p>
       <div class="rating mb-2">
       <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-half text-warning"></i>
         <i class="bi bi-star text-warning"></i>    
       </div>
      </div>
    </div>
  </div>
</div>
<!------------------->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>

<div class="container">
<div class="row">  
<div class="col-lg-4 col-md-4">
  <div class="bg-white p-4 rounded mb-4">
			<h4>Connect With Us</h4>
			<a href="telephone: +63 (63)222-33-44" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-inbound-fill"></i> +63 (63)222-33-44</a> <br>
			<a href="Emai: name@example.com" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-envelope-fill"></i> WhixpyBlack@Gmail.com</a>
</div>
      <div class="bg-white p-4 rounded mb-4">
			<h4>Follow Us</h4>
			<a href="#" class="d-inline-block mb-3">
        <span class="badge bg-light text-dark fs-6 p-2">
        <i class="bi bi-facebook me-1"></i>Facebook
        </span> 
      </a> 
      <br>
      <a href="#" class="d-inline-block mb-3">
        <span class="badge bg-light text-dark fs-6 p-2">
        <i class="bi bi-twitter me-1"></i>Twitter
        </span> 
      </a> 
      <br>
      <a href="#" class="d-inline-block mb-3">
        <span class="badge bg-light text-dark fs-6 p-2">
        <i class="bi bi-instagram me-1"></i>Instagram
        </span> 
      </a> 
      <br>
</div>
</div>
<div class="col-lg-8 col-md-6 col-sm-8 p-4 mb-lg-0 mb-3 bg-white rounded">
			<iframe class="w-100 rounded" height="350px" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d12986.338763884358!2d121.25782382597785!3d14.606958066906456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sph!4v1686248276202!5m2!1sen!2sph" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		 </div>
	  </div>
  </div>
 </div>

<!-------------------->

<?php
   require('sap/footer.php');
 ?>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true, }, 
    });
    var swiper = new Swiper(".mySwiper-2", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerview: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
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