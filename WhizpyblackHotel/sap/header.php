<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-lg-5 py-lg-4 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">WhixpyBlack</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"> </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-3" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active me-3" href="facilities.php">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active me-3" href="room.php">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active me-3" href="contactus.php">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active me-3" href="aboutus.php">About us</a>
        </li>
      </ul>
      <div class="d-flex">
        <button type="button" class="btn btn-outline-light shadow-none me-lg-3 me-3" data-bs-toggle="modal" data-bs-target="#LoginModal">
         Login
        </button>
        <button type="button" class="btn btn-outline-light shadow-none me-lg-3 me-3" data-bs-toggle="modal" data-bs-target="#SignupModal">
         Signup
        </button>
      </div>
    </div>
  </div>
</nav>

<div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center"> <i class="bi bi-person-circle fs-3 me-2"></i> User Login</h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
       <div class="modal-body">
        <form>
         <div class="mb-3">
        <label class="form-label">Email address</label>
      <input type="email" class="form-control shadow-none"> </input>
   </div> 
   <div class="mb-3">
        <label class="form-label">Password</label>
      <input type="password" class="form-control shadow-none"> </input>
   </div> 
   <input type="checkbox" id="box" name="keepMeLogin" class="checkbox mb-4" data-ui-name="keepMeLogin" value="">
   <label for="box">Remember me</label>
   </input>
   <div class="d-flex align-items-center justify-content-between mb-4">
   <button class="btn btn-dark shadow-none">LOGIN</button>
   <a href="javascript;void(0)" class="text-secondary text-decoration-none">Forgot your Password?</a>
   </form>
    </div>
  </div>
</div>
</div> 
</div>

<div class="modal fade" id="SignupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center"> <i class="bi bi-person-lines-fill fs-3 me-2"></i> User Signup</h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <span class="badge rounded-pill bg-dark text-light mb-3 text-wrap lh-base col-md-12">
          Note: Your details must match with your ID (passport, drivings license, senior id, national id, etc...)
          that will be reqiured in your check in.     
        </span>
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 po-0 mb-3">
        <label class="form-label">Full Name</label>
      <input type="text" class="form-control shadow-none">
   </div> 
   <div class="col-md-6 po-0 mb-3">
   <label class="form-label">Email</label>
      <input type="email" class="form-control shadow-none"></input>
   </div> 
   <div class="col-md-6 po-0 mb-3">
    <label class="form-label">PhoneNumber</label>
      <input type="number" class="form-control shadow-none"></input>
   </div>
   <div class="col-md-6 po-0 mb-3">
   <label class="form-label">Picture</label>
      <input type="file" class="form-control shadow-none"></input>
   </div>
   <div class="col-md-12 po-0 mb-3"> 
   <label class="form-label">Address</label>
      <textarea type="text" class="form-control shadow-none" rows="1"></textarea>
   </div> 
   <div class="col-md-6 po-0 mb-3">
   <label class="form-label">Pincode</label>
      <input type="number" class="form-control shadow-none"></input>
   </div> 
   <div class="col-md-6 po-0 mb-3">
   <label class="form-label">Date of Birth</label>
      <input type="date" class="form-control shadow-none"></input>
   </div> 
   <div class="col-md-6 po-0 mb-3">
   <label class="form-label">Password</label>
      <input type="password" class="form-control shadow-none"></input>
   </div> 
   <div class="col-md-6 po-0 mb-3">
   <label class="form-label">Confirm Password</label>
      <input type="password" class="form-control shadow-none"></input>
       </div>
      </form>
    </div>  
  <div class="text my-1 mb-3">
  <button type="submit" class="btn btn-dark shadow-none">SIGN UP</button>  
</div>
  </div>
 </div>
</div>
</div>