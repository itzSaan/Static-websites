<?php 
    // error_reporting(0);
    include "db-connect.php";
    $message = "";
    if (isset($_POST['SubmitButton'])) {

        $phoneNumber = $_POST['mobileNumber'];  

        $sql = "INSERT INTO `contact-table` (mobileNumber) VALUES ('$phoneNumber')";

        if(mysqli_query($connection, $sql)) {
            $message = "We Received your Mobile Number.";        
            
        } else{
            $message = "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sangram Kishor">
    <meta name="description" content="Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni">
    <title>Welcome to Health Pro</title>

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-utilities.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <!-- Navbar -->
    <div id="navBar" class="container-fluid bg-primary-light">
        <nav class="navbar navbar-expand-lg fw-bold text-dark">
            <div class="container">                
              <a class="navbar-brand col-md-3" href="#">
                <img src="assets/images/Logo-light.png" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Find Doctors</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Consultation</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pharmacy</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link">Diagonistic</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      For Providers
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Security & Help
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                </ul>               
                <div class="d-grid d-md-block gap-2 ml-auto">
                    <button class="btn rounded-pill fw-bold mr-3">Login</button>
                    <button class="btn rounded-pill nav-btn fw-bold">Signup</button>
                </div>
              </div>
            </div>
          </nav>
    </div>

    <!-- Hero Section -->
    <section id="hero" class="container-fluid hero bg-primary-light">
        <div class="container py-3">
            <div class="row align-items-center gy-3">
                <div class="col-md-6">
                    <div class="w-100">
                        <img src="assets/images/BannerImage.png" alt="Doctor-Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6">
                    <span class="text-dark"><small class="fw-bold">Goodbye doubts</small> 👋</span>
                    <h1 class="hero-heading">Say Hello to<br/>Doctor <img src="assets/images/stethoscope 1.png" class="img-fluide" alt=""></h1>
                    <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
                        <br/>iusto error debitis sit pariatur aliquid soluta, quas obcaecati! </p>
                    <div class="d-grid points-wrap fw-bold mb-4">
                        <div class="co">
                            <img src="assets/images/Tick Square.png" alt=""> Book an appointment
                        </div>
                        <div class="co">
                            <img src="assets/images/Tick Square.png" alt=""> Consult with top doctors
                        </div>
                        <div class="co">
                            <img src="assets/images/Tick Square.png" alt=""> Book test & checkups
                        </div>
                        <div class="co">
                            <img src="assets/images/Tick Square.png" alt=""> Medical & health Products
                        </div>
                    </div>
                    <div class="d-flex search-wrap p-2 rounded-pill bg-white">
                        <div class="d-flex align-items-center">
                            <img src="assets/images/Location.png" alt="" class="img-fluid">
                            <form action="">
                                <input type="text" class="location-input" 
                                placeholder="Location" required>
                            </div>
                            <div class="search-input-wrap"> 
                                <input type="text" class="search-input" 
                                placeholder="Search doctors, clinics, hospitals, etc." required>
                            </div>    
                            <div class="search-btn">
                                <button type="submit" class="btn p-0">
                                    <img src="assets/images/Search button.png" alt="">
                                </button>
                            </div>  
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <section class="container-fluid">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6">
                <h1 class="section-header">Consultation With Best<br/>Doctors Near You</h1>
                <p class="desc">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos, hic iste? Quod consequuntur fugiat excepturi tempora consequatur et non. Quisquam provident in obcaecati consectetur delectus, fugit deserunt pariatur dicta qui, aliquid sint! Sit, est vel.
                </p>
                <button class=" btn my-btn">Find Doctors Now</button>
            </div>
            <div class="col-md-6">
                <img src="assets/images/img 01.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
   </section> 

   <section class="container-fluid">
    <div class="container">
        <div class="row align-items-center gy-3">
            <div class="col-md-6">
                <img src="assets/images/img 02.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h1 class="section-header">Now Talk Online With<br/>Best Doctor.</h1>
                <p class="desc">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos, hic iste? Quod consequuntur fugiat excepturi tempora consequatur et non. Quisquam provident in obcaecati consectetur delectus, fugit deserunt pariatur dicta qui, aliquid sint! Sit, est vel.
                </p>
                <button class=" btn my-btn">Start Consulting Now</button>
            </div>
        </div>
    </div>
   </section> 

   <section class="container-fluid bg-primary-light">
    <div class="container">
        <h1 class="section-header text-center">Consult Top Doctors Online For<br/>Any Health Concern</h1>
        <p class="text-black mt-0 fw-bold text-center">Private online consultations with verified doctors in all specialists</p>
        <div class="row justify-content-center py-4  g-3">           
            <div class="col-md-3">
                <img src="assets/images/doc1.png" alt="" class="img-fluid mb-3">
                <h6>Dr. Rochel Foose</h6>
                <p class="text-black">Professional Dentist</p>
            </div>
            <div class="col-md-3">
                <img src="assets/images/doc2.png" alt="" class="img-fluid mb-3">
                <h6>Dr. Geofferey Mott</h6>
                <p class="text-black">Heart Expert</p>
            </div>
            <div class="col-md-3">
                <img src="assets/images/doc3.png" alt="" class="img-fluid mb-3">
                <h6>Dr. Georgette Strobel</h6>
                <p class="text-black">Professional Dentist</p>
            </div>
            <div class="col-md-3">
                <img src="assets/images/doc4.png" alt="" class="img-fluid mb-3">
                <h6>Dr. Augustine MidgettD</h6>
                <p class="text-black">Professional Dentist</p>
            </div>
        </div>
            <div class="mt-4 text-center">
                <button class=" btn my-btn">View All Specialists</button>
            </div>
    </div>
   </section> 

   <!-- Blog Section -->
   <section class="container-fluid">
    <div class="container">
        <h1 class="section-header text-center">Read Top Articles From Health<br/>Experts.</h1>
        <p class="text-black mt-0 fw-bold text-center">Health articles that keep you informed about good health practices and achieve your goals.</p>
        <div class="row justify-content-center py-4  gy-3">
            <div class="col-md-4">
                <img src="assets/images/healthcare.png" alt="" class="img-fluid mb-2">
                
                    <small class="blog-category text-blue text-uppercase fw-bold">
                        Coronavirus
                    </small>                
                <h6 class="mt-2">12 Coronavirus Myths and Facts That You<br/>Should Be Aware Of</h6>
                <p>Dr. Rochel Foose</p>
            </div>
            <div class="col-md-4 align-items-center">
                <img src="assets/images/fruits.png" alt="" class="img-fluid mb-2">
                    <small class="blog-category text-blue text-uppercase fw-bold">
                        Vitamins and Supplements
                    </small>
                
                <h6 class="mt-2">10 Fruits You Must Try in Monsoon Season.</h6>
                <p>Dr. Rochel Foose</p>
                
            </div>
            <div class="col-md-4">
                <img src="assets/images/excercise.png" alt="" class="img-fluid mb-2">
                
                    <small class="blog-category text-blue text-uppercase fw-bold">
                       Fittness and Health
                    </small>
                
                <h6 class="mt-2">This 5 Excercise will help you gain six abs.</h6>
                <p>Professional Dentist</p>
            </div>
           
            <div class="mt-4 text-center">
                <button class=" btn my-btn">View All Articles</button>
            </div>
        </div>
    </div>
   </section> 

   <section class="container-fluid">
    <div class="container">
        <div class="row align-items-center gy-3">
            <div class="col-md-6">
                <img src="assets/images/img.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h1 class="section-header">We are here to provide Quality Care For Everyone</h1>
                <p class="desc">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos, hic iste? Quod consequuntur fugiat excepturi tempora.
                </p>
                <button class=" btn my-btn">Book Appointment</button>
            </div>
        </div>
    </div>
   </section>

   <!-- Download our App Section-->
   <section class="container-fluid bg-primary-light">
    <div class="container">
        <div class="row align-items-center gy-3">
            <div class="col-md-6">
                <h1 class="section-header mb-4">Download Our App</h1>
                <p class="desc">
                    Access video consultaion with India's top doctors on the Practo app.
                    Connect with doctors online, available 24/7, from the comfort of your home.
                </p>
                <p class="text-blue fw-bold">Get the link to download the app</p>
                <p class="text-green fw-bold">
                <?php echo $message; ?>  
                </p>
                <div class="row rounded-pill py-2 mb-4" style="background-color:#fff;">
                    <form action="#getLink" id="getLink" method="post">
                    <div class="" >
                        <div class="phone-input-wrap d-grid">
                            <span class="text-secondary">+91</span>
                                <input type="number" 
                                        name="mobileNumber"
                                        placeholder="Enter Phone Number"
                                        class="phone-input"
                                        maxlength="10"
                                        required>
                                <input type="submit" name="SubmitButton" value="Get The Link" class="btn get-link-btn">
                            </div>
                        </div> 
                    </form> 
                </div>                                     

                <div class="d-flex gap-2">
                    <a class="#">
                        <img src="assets/images/ios badge.png" height="" alt="App Store">
                    </a>
                    <a class="#">
                        <img src="assets/images/Android badge.png" height="" alt="App Store">
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="assets/images/Mockup.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
   </section> 

   <section class="container-fluid my-4"></section>

   <!-- Footer section -->
    <footer class="footer container-fluid">
        <div class="container  py-2">
            <div class="row top-footer gx-2 gy-4">
                <div class="col-sm-3">
                    <a href="/index.html" class="mb-3">
                        <img src="assets/images/logo-dark.png" alt="Health Pro">
                    </a>
                    <p class="text-dimmed mt-4">2972 Westheimer Rd. Santa Ana, Illionois
                        85486
                    </p>
                    <p class="text-dimmed">+91 (903) 134-55-26
                    </p>
                    <div class="d-flex gap-2">
                        <div class="cl">
                            <a href="">
                                <img src="assets/images/Facebook.png" width="32px" alt="">
                            </a>
                        </div>
                        <div class="co">
                            <a href="">
                                <img src="assets/images/Instagram.png" width="32px" alt="">
                            </a>
                        </div>
                        <div class="co">
                            <a href="">
                                <img src="assets/images/LinkedIn.png" width="32px" alt="">
                            </a>
                        </div>
                        <div class="c">
                            <a href="">
                                <img src="assets/images/Twitter.png" width="32px" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <h6 class="footer-heading mb-4">For Patients</h6>
                    <div class="d-grid gap-3 footer-nav">
                        <a class="nav-link" href="#">Search Doctor</a>
                        <a class="nav-link" href="#">Search Clinics</a>
                        <a class="nav-link" href="#">Search Hospitals</a>
                        <a class="nav-link">Read Health Blog</a>                                             
                      </div>
                </div>
                <div class="col-sm-2">
                    <h6 class="footer-heading mb-3">For Doctors</h6>
                    <div class="d-grid gap-3 footer-nav">
                        <a class="nav-link" href="#">Manage Profile</a>                                            
                    </div>
                      <h6 class="footer-heading mt-4 mb-3">For Clinics</h6>
                      <div class="d-grid gap-3 footer-nav">
                          <a class="nav-link" href="#">Try Pro Features</a>
                          <a class="nav-link" href="#">Manage Profile</a>                     
                      </div>
                </div>
                <div class="col-sm-2">
                    <h6 class="footer-heading mb-3">For Hospitals</h6>
                    <div class="d-grid gap-3 footer-nav">
                        <a class="nav-link" href="#">Try Pro Features</a>
                        <a class="nav-link" href="#">Manage Profile</a>
                        <a class="nav-link" href="#">Reach</a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <h6 class="footer-heading mb-3">Subscribe</h6> 
                    <p class="footer-text text-dimmed">Subscribe to get the latest news<br/>From us.</p>
                    <form action="">
                        <div class="input-wrap">
                            <input type="email" placeholder="Email Address">
                            <button class="subscribe-btn">
                                <img src="assets/images/arrow.png" alt="">
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container text-center text-dimmed"><small>Copyright &copy; 2022, Practo. All rights reserved.</small></div>
    </footer>

    <script src="scripts.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>

