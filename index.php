<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RkU Hostel </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    
    
    <link rel="stylesheet" href="./css/styleforindex.css">
    <script>
		$(document).ready(function(){
			$(".accordion_body .li_qus").click(function() {
			    $(this).parent().toggleClass("active");
			});   
		})
	</script>
   
    
</head>
<body>
   <header>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">RK Hostel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <!--The items within the navbar can be aligned using margin utilities.
                mx-auto class can be used to align the items to the center of the navbar.
                ms-auto class is used to align items to the right of the navbar.
                me-auto class is used to align items to the left of that navbar.-->
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link active" id="home" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./regforlogin.php">Registeration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./loginAll.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">ABOUT</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#contactus">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#rules">Rules And Regulations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#faq">FAQS</a>
          </li>
        
      </ul>
      <!-- <div class="custom-control custom-switch mr-md-3">
        <input type="checkbox" class="custom-control-input" id="selector">
        <label class="custom-control-label" for="selector">Mode</label>
      </div> -->
      

    </div>
  </div>
</nav>
    </div>
    
    <!-- For the carosel images -->
<div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/first.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>First slide label</h5> -->
        <p >Embassie Hostel – Relax with friends.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./img/second.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>Second slide label</h5> -->
        <p>Safestay – Stay in a new kind of place.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./img/third.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>Third slide label</h5> -->
        <p>Helping you to rise.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
      
    
   </header>
<!-- Carosel End -->
<section class="main-heading my-5 pt-2" id="about">
    <div class="text-center">
        <h1 class="display-4 text-danger">About Us</h1>
        <hr class="w-25 mx-auto" style="color:red"/>
        <div class="container">
            <div class="row my-5">
                <div class="col-lg-6 col-md-6 col-12 col-xxl-6">
                    <figure>
                        <img src="./img/first.jpeg" alt="about images" class="img-fluid about_img">
                    </figure>

                </div>
                <div class="col-lg-6 col-md-6 col-12 col-xxl-6 d-flex justify-content-center align-items-start flex-column">
                    <!-- <h1 class="text-primary">RK Hostel</h1> -->
                    <p>RK University is a private university located in Rajkot, Gujarat. The university provides accommodation to its students in the form of hostels. The hostels at RK University offer comfortable and safe living quarters for students, equipped with necessary amenities. The hostels are designed to meet the needs of students, providing them with a conducive environment to study and live. The rooms in the hostels are spacious and well-furnished, with facilities like beds, study tables, and storage spaces. The university also provides food and dining facilities in the hostels, serving nutritious and hygienic food. The hostels are supervised by trained staff and have round-the-clock security to ensure the safety of the students. Overall, the hostels at RK University provide a comfortable and conducive living environment for students and are a great option for those looking for affordable and convenient accommodation in Rajkot.

                                            </p>

                </div>


                


            </div>
        </div>


    </div>
</section>
<!-- about us end -->
 <!-- Contact us start  -->
 <section class="main-heading my-5 pt-5" id="contactus">
  <div class="text-center">
      <h1 class="display-4 text-danger">Contact Us</h1>
      <hr class="w-25 mx-auto" style="color:red"/>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xxl-8 col-10 col-md-8 mx-auto">
          <form action="./Contact.php" method="post">
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="fullname">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Number</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="number">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Complete Address</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="address">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Comments</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comments"></textarea>
            </div>
            
            <button type="submit" class="btn btn-success">Submit</button>
          </form>

        </div>
      </div>
    </div>

</section>

<!-- contact us end  -->
<!-- rules and regulations  -->
    <section class="ourteam mb-2" id="rules">
        <div class="container text-center" >
            <h1 class="text-danger">Rules And Regulations</h1>
            <hr class="w-50 mx-auto" style="color:red"/>
           <div class="row">
               <div class="col-lg-4 col-md-4 col-sm-10 col-12 m-auto">
                <figure class="figure">
                    <img src="./img/rag.jpeg" alt="ragging" class="figure-img img-fluid rounded" height="250px" width="400px">
                    <figcaption>
                        <p class="figure-caption">stg</p>
                    </figcaption>
                </figure>

               </div>

               <!-- here  -->
               <div class="col-lg-4 col-md-4 col-sm-10 col-12 m-auto">
                <figure class="figure">
                    <img src="./img/warning.jpeg" alt="ragging" class="figure-img img-fluid rounded" height="250px" width="400px">
                    <figcaption>
                        <p class="figure-caption">stg</p>
                    </figcaption>
                </figure>

               </div>
               <div class="col-lg-4 col-md-4 col-sm-10 col-12  m-auto">
                <figure class="figure">
                    <img src="./img/Ragging.jpg" alt="ragging" class="figure-img img-fluid rounded" height="250px" width="400px">
                    <figcaption>
                        <p class="figure-caption">stg</p>
                    </figcaption>
                </figure>

               </div>
               
           </div> 

        </div>
    </section>
<!-- end  -->
<!-- faq start  -->
<section id="faq">
    <div class="wrapper">
        <div class="accordion_container">
            <div class="accordion_header">
               Frequently Asked Questions
            </div>
            <div class="accordion_body">
                <ul>
                    <li>
                            <div class="li_qus">
                                <div class="btn"></div>
                                <p>What types of rooms are available? </p>
                            </div>
                            <div class="li_ans">
                            Students may want to know if there are different room types such as shared  and what amenities are included in each option.
                            </div>
                        </li>
                        <li>
                            <div class="li_qus">
                                <div class="btn"></div>
                                <p>How much does it cost per night?</p>
                            </div>
                            <div class="li_ans">
                            Students may want to know the pricing structure and any additional fees or deposits required.
                            </div>
                        </li>
                        <li>
                            <div class="li_qus">
                                <div class="btn"></div>
                                <p>What amenities are included in the stay? </p>
                            </div>
                            <div class="li_ans">
                            Students may want to know what amenities are included in the hostel stay, such as Wi-Fi, breakfast, laundry facilities, or common areas.
                            </div>
                        </li>
                        <li>
                            <div class="li_qus">
                                <div class="btn"></div>
                                <p>What is the check-in and check-out policy?</p>
                            </div>
                            <div class="li_ans">
                            Students may want to know the specific times for check-in and check-out and any penalties for late check-out or early check-in.
                            </div>
                        </li>
                        <li>
                            <div class="li_qus">
                                <div class="btn"></div>
                                <p>What is the security like?</p>
                            </div>
                            <div class="li_ans">
                            Students may want to know what security measures the hostel has in place, such as security cameras, lockers, or 24-hour reception.
                            </div>
                        </li>
                </ul>
            </div>
        </div>
    </div>
</section>



<!-- faq end  -->

<!-- footer start  -->
<footer class="footer-distributed">

    <div class="footer-left">
        <h3>RK <span>Hostel</span></h3>

        <p class="footer-links">
            <a href="#home">Home</a>
            |
            <a href="#about">About</a>
            |
            <a href="#contactus">Contact</a>
            |
            
        </p>

        <p class="footer-company-name">Copyright © 2023 <strong>rk</strong> All rights reserved</p>
    </div>

    <div class="footer-center">
        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>Gujarat</span>
                Rajkot</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>+9174**9**258</p>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:sagar00001.co@gmail.com">rkuhostel@rku.ac.in</a></p>
        </div>
    </div>
    <div class="footer-right">
        <p class="footer-company-about">
            <span>About the RK Hostel</span>
            <strong>RK University Hostel</strong> is a one of the best university where you can explore all the things.
        </p>
        <div class="footer-icons">
            <a href="https://www.facebook.com/rkuindia/" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/rkuniversity" target="_blank"><i class="fa fa-instagram"></i></a>
            <a href="https://www.linkedin.com/school/rkuniversity" target="_blank"><i class="fa fa-linkedin"></i></a>
            <a href="https://twitter.com/RKUniversity" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://www.youtube.com/@RKUniversityIndia" target="_blank"><i class="fa fa-youtube"></i></a>
        </div>
    </div>
</footer>
<!-- footer end  -->

<!-- <script>
    $document.ready(function(){
        $("#selector").change(function(){
            $("body").toggleClass("bg-secondary");
            $("nav").toggleClass("navbar-dark bg-dark");
            $(".custom-control-label").toggleClass("text-white");
            $("h1").toggleClass("text-white");
            $("p").toggleClass("text-white");
        })
    })
</script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>