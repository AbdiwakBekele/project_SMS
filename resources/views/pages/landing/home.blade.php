<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="SM_frontend/node_modules/bootstrap/dist/css/bootstrap.min.css" />

    <link rel="stylesheet" href="SM_frontend/node_modules/font-awesome/css/font-awesome.css">
    
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <link rel="stylesheet" href="SM_frontend/css/style.css">
    <link rel="stylesheet" href="SM_frontend/css/modal.css">
    <link rel="stylesheet" href="SM_frontend/css/milestone.css">
  
    

</head>
<body>
  <section class="header">
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#" class="top me-3"><span class="fa fa-phone "></span> +00 123 4455 6666</a>
              <span class="divider">|</span>
              <a href="#" class=" top me-3"> <span class=" fa fa-envelope  "></span> mail@example.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button text-center w-100">
              <a href="#"><span class="fa fa-facebook top me-4"></span></a>
              <a href="#"><span class="fa fa-twitter top me-4"></span></a>
              <a href="#"><span class="fa fa-linkedin top me-4"></span></a>
              <a href="#"><span class="fa fa-youtube top me-4"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div>
    <section class="navigation">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img class="img-fluid w-50" width="40px" src="SM_frontend/img/download.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ">
              <li class="nav-item me-2">
                <a class="nav-link active unordered" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item me-2">
                <a class="nav-link unordered" href="#about">About</a>
              </li>
              <li class="nav-item me-2">
                <a class="nav-link unordered" href="#contact">Contact</a>
              </li>
              <li class="nav-item me-2">
                <a class="nav-link unordered" href="#">Blog</a>
              </li>
            </ul>
            <ul class="navbar-nav  ms-auto" >
                <li class="nav-item pe-3">
                    <button type="button" class="btn btn-primary log" data-bs-toggle="modal" data-bs-target="#loginModal2" >Login</button>
                  </li>
                  <li class="nav-item">
                    <button type="button" class="btn btn-primary log"  data-bs-toggle="modal" data-bs-target="#registerModal2">Register</button>
                  </li>
                  <!-- <span class="navbar-text" id="login"><a href="#"  >
                    <span class="fa fa-sign-in">Login</span>
                  </a>
                  </span> -->
            </ul>
          </div>
        </div>
      </nav>
    </section>


  
    
    <!-- login modal 2 -->
	<div id="loginModal2" class="modal-style-2 dark modal ">
		<div class="modal-dialog modal-login">
			<div class="modal-content">
				<div class="modal-header p-0">				
					<h4 class="modal-title">Login</h4>
	               <button  type="button" style="background-color: #fff0;"   class="close fa fa-times " data-bs-dismiss="modal" aria-hidden="true">
</button>				</div>
				<div class="modal-body">
					<!-- dont forget to add action and action method  -->
					<form method="POST" action="{{ route('login') }}" class="mt-3">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="text" class="form-control" name="username" placeholder="Enter your username" required="required">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="password" class="form-control" name="password" placeholder="Enter password" required="required" autocomplete="on">
							</div>
						</div>
						<div class="row pl-1 pr-1">
                            <div class="col text-left">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1">
                                    <span class="custom-control-label">&nbsp;Remember Me</span>
                                </label>
                            </div>
                            <div class="col text-right hint-text pt-0">
                                <a href="" class="text-danger">Forgot Password?</a>
                            </div>
                        </div>
						<div class="form-group text-center mt-2 mb-0">
							<button type="submit" class="btn btn-primary btn-sm">Login</button>
							
						</div>
						<p class="hint-text mt-0">follow us on</p>
						<div class="social-login text-center">
              <a class="btn-social-icon btn-google me-2" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
              <a class=" btn-social-icon btn-facebook me-2" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
              <a class=" btn-social-icon btn-linkedin me-2" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
						</div>
					</form>
				</div>
				<div class="modal-footer">Don't have an account? <a href="#registerModal2" data-dismiss="modal" data-toggle="modal"> Register</a></div>
			</div>
		</div>
	</div>  
	<!-- register modal 2 -->
	<div id="registerModal2" class="modal-style-2 dark modal ">
		<div class="modal-dialog modal-login">
			<div class="modal-content">
				<div class="modal-header p-0">				
					<h4 class="modal-title">Register</h4>
          <button  type="button" style="background-color: #fff0;"   class="close fa fa-times " data-bs-dismiss="modal" aria-hidden="true">
          </button>	
				</div>
				<div class="modal-body">
					<form action="" method="post" class="mt-3">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="text" class="form-control" name="name" placeholder="Enter your name" required="required">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
								<input type="text" class="form-control" name="email" placeholder="Enter email address" required="required">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="password" class="form-control" name="password" placeholder="Enter password" required="required" autocomplete="on">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-eye-slash"></i></span>
								<input type="password" class="form-control" name="password_confirmation" placeholder="Retype password" required="required" autocomplete="on">
							</div>
						</div>

						<div class="form-group text-center">
							<button id="signup-button" type="submit" class="btn btn-primary btn-sm">Register</button>
							
						</div>
					</form>

				</div>
				<!-- social icons -->
				<p class="hint-text">follow us on</p>
				<div class="social-login text-center mb-2">
          <a class="btn-social-icon btn-google me-2" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
          <a class=" btn-social-icon btn-facebook me-2" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
          <a class=" btn-social-icon btn-linkedin me-2" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
				</div>
				<div class="modal-footer">Already have an account? <a  data-bs-toggle="modal" data-bs-target="#loginModal2"  > Login</a></div>
			</div>
		</div>
	</div> 
<!--modal style 2 end -->


  <div class="row">
    <div class="col-md-6 landing d-flex justify-content-center flex-column text-center">
        <div>Bole Community School</div> 
        <div class="quote">-"within the community"</div>
        <div>
        <a class="btn btn-primary btn-xl js-scroll-trigger w-10" role="button" href="#welcome">Find Out More <span class="fa fa-arrow-circle-down"></span></a></div>
    </div>
    <header class="w-md-50 col-md-6" >
        
        
      <div class="login d-none d-md-block">
              
        <div class="wrap">
          <button type="button" class="button " data-bs-toggle="modal" data-bs-target="#loginModal2" >Login</button>
          </div>
    </div>
    <div class="register d-none d-md-block">
              
      <div class="wrap">
        <button type="button" class="button "  data-bs-toggle="modal" data-bs-target="#registerModal2">Register</button>
        </div>
  </div>
  
 


  <!--  -->



            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
               
            <div class="carousel-inner carimg">
              <div class="carousel-item active">
                
                <div class="carousel-caption d-none d-md-block text-center">
                  <h5>First slide label</h5>
                  <p>"The roots of 
                    education are bitter, 
                    but the fruit is sweet"</p>
                </div>
                <img src="SM_frontend/img/image1.jpg" class="d-block w-100  float-right" alt="...">
              </div>
              <div class="carousel-item">
               
                <div class="carousel-caption d-none d-md-block ">
                    
                  <h5>Second slide label</h5>
                  <p>"The roots of 
                    education are bitter, 
                    but the fruit is sweet"</p>
                </div>
                <img src="SM_frontend/img/image2.jpg" class="d-block w-100  float-right" alt="...">
              </div>
              <div class="carousel-item">
                
                <div class="carousel-caption d-block d-md-block">
                  <h5>Third slide label</h5>
                  <p>"The roots of 
                    education are bitter, 
                    but the fruit is sweet"</p>
                  
                </div>
                <img src="SM_frontend/img/image3.jpg" class="d-block w-100  float-right" alt="...">
              </div>
            </div>
              </div>
            </div>
     </header>
    </div>
  </section>
  
<!-- welcome -->

<h2 class="hr-lines" id="welcome"> Welcome </h2> 
  <div class="page-section pb-0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 py-3">
          <h1>Welcome to <br> Bole Community School</h1>
          <p class="text-grey mb-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Accusantium aperiam earum ipsa eius, inventore nemo labore eaque porro consequatur ex aspernatur. Explicabo, excepturi accusantium! Placeat voluptates esse ut optio facilis!</p>
          <a href="about.html" class="btn btn-primary">Learn More</a>
        </div>
        <div class="col-lg-6 wow fadeInRight">
          <div class="text-center">
            <img src="SM_frontend/img/download.png "  class="w-100" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <h2 class="hr-lines"> Why BCS </h2>  -->
  <section class="fun-facts text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <i class="fa fa-folder fa-5x"></i>
          <p class="number">20+</p>
          <p>Projects</p>
        </div>
        <div class="col-md-3">
          <i class="fa fa-handshake-o fa-5x"></i>
          <p class="number">50+</p>
          <p>Business Owners Helped</p>			
        </div>
        <div class="col-md-3">
          <i class="fa fa-code fa-5x"></i>
          <p class="number">200,000,000+</p>
          <p>Lines Of Code</p>			
        </div>
        <div class="col-md-3">
          <i class="fa fa-coffee fa-5x"></i>
          <p class="number">200+</p>
          <p>Cups Of Coffee</p>
        </div>
      </div>
    </div>
  </section>
  <!-- About Us -->
  <section class="about container  mb-4" id="about">
    <h1 class="w-100 text-center mt-3">About US</h1>
    <div class="row mt-5">
      <div class="col-4">
<img src="SM_frontend/img/school.jpg" alt="" class="aboutus mt-5">
      </div>
      <div class="col-8 d-flex align-items-center justify-content-center imageabout flex-column  mt-5" >
        <h2 class=" w-100"> About-us </h2> 

        Bole Community School is a coeducational school with a roll of 
approximately 1700 students. Bole is in the heart of the  big city 
Addis Ababa . Bole Community School serves the interests of the 
community incredibly well, meeting the academic, trades, cultural 
and sporting needs of a range of students. Places at BCS are highly 
sought after with families choosing to move into town to gain 
access to the school. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique perferendis sapiente debitis ipsam vitae reprehenderit, totam qui iure maxime delectus earum reiciendis fuga facilis nesciunt sint distinctio dolorum quia in. Perferendis voluptates repellendus omnis excepturi. Repellendus praesentium distinctio, voluptas voluptates sit deleniti aliquid facilis hic dolor magni atque dolores doloremque quo ratione quia laborum corporis tenetur exercitationem fugiat? Eveniet officia nisi perspiciatis, aspernatur dignissimos, qui laudantium possimus nobis distinctio blanditiis deleniti earum reprehenderit eius voluptatum amet pariatur molestiae modi necessitatibus in dolorem. Veritatis at non odit quo consequuntur error molestias, quos nulla. Perspiciatis tempora esse nesciunt molestiae facilis nostrum tempore?
      </div>
    </div>

  </section>
  <!-- school timeline -->
  <section class="experience pt-100 pb-100" id="experience">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 mx-auto text-center">
					<div class="section-title">
						<h4>BCS through time </h4>
						<p>the school road map from starting of the school</p>
					</div>
				</div>
			</div>
			<div class="row">
               <div class="col-xl-12">
                  <ul class="timeline-list">
                     <!-- Single Experience -->
                     <li>
                        <div class="timeline_content">
                           <span>2008</span>
                           <h4>Intern Developer span</h4>
                           <p>We gather your business and products information. We then determine the direction of the project and understand your goals and we combine your ideas with ours for an amazing website.</p>
                        </div>
                     </li>
                     <!-- Single Experience -->
                     <li>
                        <div class="timeline_content">
                        <span>2007-2012</span>
                           <h4>Junior Developer</h4>
                           <p>We gather your business and products information. We then determine the direction of the project and understand your goals and we combine your ideas with ours for an amazing website.</p>
                        </div>
                     </li>
                     <!-- Single Experience -->
                     <li>
                        <div class="timeline_content">
                        <span>2012-2015</span>
                           <h4>Senior Developer</h4>
                           <p>We gather your business and products information. We then determine the direction of the project and understand your goals and we combine your ideas with ours for an amazing website.</p>
                        </div>
                     </li>
                     <!-- Single Experience -->
                     <li>
                        <div class="timeline_content">
                        <span>2015-2018</span>
                           <h4>Project Manager</h4>
                           <p>We gather your business and products information. We then determine the direction of the project and understand your goals and we combine your ideas with ours for an amazing website.</p>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
		</div>
	  </section>
    <!-- contact -->
    <!--Section: Contact v.2-->
<section class="mb-4 container" id="contact">

  <!--Section heading-->
  <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
  <!--Section description-->
  <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
      a matter of hours to help you.</p>

  <div class="row">

      <!--Grid column-->
      <div class="col-md-9 mb-md-0 mb-5">
          <form id="contact-form" name="contact-form" action="" method="POST">

              <!--Grid row-->
              <div class="row">

                  <!--Grid column-->
                  <div class="col-md-6">
                      <div class="md-form mb-0">
                          <input type="text" id="name" name="name" class="form-control" placeholder="name">
                          <label for="name" class="" >Your name</label>
                      </div>
                  </div>
                  <!--Grid column-->

                  <!--Grid column-->
                  <div class="col-md-6">
                      <div class="md-form mb-0">
                          <input type="text" id="email" name="email" class="form-control"  placeholder="email">
                          <label for="email" class="" >Your email</label>
                      </div>
                  </div>
                  <!--Grid column-->

              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">
                  <div class="col-md-12">
                      <div class="md-form mb-0">
                          <input type="text" id="subject" name="subject" class="form-control" placeholder="subject">
                          <label for="subject" class=""  >Subject</label>
                      </div>
                  </div>
              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">

                  <!--Grid column-->
                  <div class="col-md-12">

                      <div class="md-form">
                          <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" ></textarea>
                          <label for="message">Your message</label>
                      </div>

                  </div>
              </div>
              <!--Grid row-->

          </form>

          <div class="text-right text-md-left">
              <a class="btn " style="background-color:#0b0b1fbb ;color: white;" onclick="document.getElementById('contact-form').submit();">Send</a>
          </div>
          <div class="status"></div>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-3 text-center">
          <ul class="list-unstyled mb-0">
              <li><i class="fa fa-map-marker fa-2x"></i>
                  <p> cameron st,bole 

                    AddisAbaba 
                    ,Ethiopia</p>
              </li>

              <li><i class="fa fa-phone mt-4 fa-2x"></i>
                  <p>+ 01 234 567 89</p>
              </li>

              <li><i class="fa fa-envelope mt-4 fa-2x"></i>
                  <p>contact@mdbootstrap.com</p>
              </li>
          </ul>
      </div>
      <!--Grid column-->

  </div>

</section>
<!--Section: Contact v.2-->
    <!-- Footer -->
<footer class="text-center text-lg-start  text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 link-secondary">
        <i class="fa fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fa fa-twitter"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fa fa-google"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fa fa-instagram"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fa fa-linkedin"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fa fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3 text-secondary"></i>Company name
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

       

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Home</a>
          </p>
          <p>
            <a href="#!" class="text-reset">About</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Contact</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Blog</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fa fa-home me-3 text-secondary"></i> cameron st,bole 

            AddisAbaba 
            ,Ethiopia</p>
          <p>
            <i class="fa fa-envelope me-3 text-secondary"></i>
            info@example.com
          </p>
          <p><i class="fa fa-phone me-3 text-secondary"></i> +251979870980</p>
          <p><i class="fa fa-print me-3 text-secondary"></i> +251979870980</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
    © 2023 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Summer Interns</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    <script src="SM_frontend/node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="SM_frontend/node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="SM_frontend/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>