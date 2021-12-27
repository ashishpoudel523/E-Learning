
<!-- start including footer -->
<?php
    include('./mainInclude/header.php');
?>
<!-- end including footer -->


<!-- Start Video background -->
<div class="container-fluid remove-vid-marg">
    <div class="vid-parent">
    <video playinline autoplay muted loop>
        <source src="video/laptop.mp4">
    </video>
    <div class="vid-overlay"></div>
    </div>
    <div class="vid-content">
        <h1 class="my-content">Welocme to Skill World </h1>
        <small class="my-content">Learn and Implement</small><br>
        <a href="#" class="btn btn-danger" 
        data-toggle="modal" data-target="#stuRegModalCenter">Get Started</a>
    </div>
</div>
<!-- End of video background   -->

<!-- Start Text banner -->
<div class="container-fluid bg-danger txt-banner">
    <div class="row bottom-banner">
        <div class="col-sm">
            <h5><i class="fas fa-book mr-3"></i>100+ Online Courses</h5>
        </div>

        <div class="col-sm">
            <h5><i class="fas fa-users mr-3"></i> Expert Instructor</h5>
        </div>

        <div class="col-sm">
            <h5><i class="fas fa-keyboard mr-3"></i> Lifetie Access</h5>
        </div>

        <div class="col-sm">
            <h5><i class="fas fa-dollar-sign mr-3"></i>Money Back Guarentee</i> </h5>
        </div>
    </div>
</div>
<!-- End Text banner -->

<!-- Start most popular course -->
<div class="container mt-5">
    <h1 class="text-center">Popular Course</h1>
    
    <!-- start most popular course 1st card deck -->
    <div class="card-deck mt-4">
        <a href="#" class="btn" style="text-align: left;
        padding:0px; margin:0px;">
            <div class="card">
                <img src="image/guitar.jpg" class="card-img-top" alt="Guitar">
                <div class="card-body">
                    <h5 class="card-title">Learn Guitar Easy Way</h5>
                    <p class="card-text">Awesome course of Guitar.</p>
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>& #8377 2000</del></small>
                        <span 
                        class="font-weigght-bolder">&#8377 200 <span></p> 
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
                </div>
            </div>
        </a>

        <a href="#" class="btn" style="text-align: left;
        padding:0px; margin:0px;">
            <div class="card">
                <img src="image/guitar.jpg" class="card-img-top" alt="Guitar">
                <div class="card-body">
                    <h5 class="card-title">Learn Guitar Easy Way</h5>
                    <p class="card-text">Awesome course of Guitar.</p>
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>& #8377 2000</del></small>
                        <span 
                        class="font-weigght-bolder">&#8377 200 <span></p> 
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
                </div>
            </div>
        </a>

        <a href="#" class="btn" style="text-align: left;
        padding:0px; margin:0px;">
            <div class="card">
                <img src="image/guitar.jpg" class="card-img-top" alt="Guitar">
                <div class="card-body">
                    <h5 class="card-title">Learn Guitar Easy Way</h5>
                    <p class="card-text">Awesome course of Guitar.</p>
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>& #8377 2000</del></small>
                        <span 
                        class="font-weigght-bolder">&#8377 200 <span></p> 
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
                </div>
            </div>
        </a>

    </div>

     <!-- start most popular course 2nd card deck -->
    <div class="card-deck mt-4">
    <a href="#" class="btn" style="text-align: left;
        padding:0px; margin:0px;">
            <div class="card">
                <img src="image/guitar.jpg" class="card-img-top" alt="Guitar">
                <div class="card-body">
                    <h5 class="card-title">Learn Guitar Easy Way</h5>
                    <p class="card-text">Awesome course of Guitar.</p>
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>& #8377 2000</del></small>
                        <span 
                        class="font-weigght-bolder">&#8377 200 <span></p> 
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
                </div>
            </div>
        </a>

        <a href="#" class="btn" style="text-align: left;
        padding:0px; margin:0px;">
            <div class="card">
                <img src="image/guitar.jpg" class="card-img-top" alt="Guitar">
                <div class="card-body">
                    <h5 class="card-title">Learn Guitar Easy Way</h5>
                    <p class="card-text">Awesome course of Guitar.</p>
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>& #8377 2000</del></small>
                        <span 
                        class="font-weigght-bolder">&#8377 200 <span></p> 
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
                </div>
            </div>
        </a>

        <a href="#" class="btn" style="text-align: left;
        padding:0px; margin:0px;">
            <div class="card">
                <img src="image/guitar.jpg" class="card-img-top" alt="Guitar">
                <div class="card-body">
                    <h5 class="card-title">Learn Guitar Easy Way</h5>
                    <p class="card-text">Awesome course of Guitar.</p>
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>& #8377 2000</del></small>
                        <span 
                        class="font-weigght-bolder">&#8377 200 <span></p> 
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
                </div>
            </div>
        </a>

    </div>
</div>
<div class="text-center m-2">
    <a class="btn btn-danger btn-sm" href="courses.php">View All Courses</a>
</div>
<!-- End most popular course -->

<!-- start contact us -->
<?php
include('./contact.php');
?>
<!-- start student testimonial -->

<div class="testimonials">
    <div class="inner">
        <h1>Testimonials</h1>
        <div class="border"></div>

        <div class="row">
            <div class="col">
                <div class="testimonial">
                    <img src="image/user1.jpg" alt="">
                    <div class="name">Ethan Hunt</div>
                    <small>Web Developer</small>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p>Thrive is a great company to work with, 
                        I use them for a lot more than just building 
                        a website. It's almost as if they are an employee. 
                        Thrive is a company you can really trust. They handle 
                        my PHP development work, web design, web hosting and 
                        search engine optimization.
                    </p>
                </div>
            </div>

            <div class="col">
                <div class="testimonial">
                    <img src="image/user2.jpg" alt="">
                    <div class="name">Bryan Mills</div>
                    <small>Network Engineer</small>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Thrive is a great company to work with, 
                        I use them for a lot more than just building 
                        a website. It's almost as if they are an employee. 
                        Thrive is a company you can really trust. They handle 
                        my PHP development work, web design, web hosting and 
                        search engine optimization.
                    </p>
                </div>
            </div>

            <div class="col">
                <div class="testimonial">
                    <img src="image/user1.jpg" alt="">
                    <div class="name">Bilbo Baggins</div>
                    <small>Graphics Designer</small>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Thrive is a great company to work with, 
                        I use them for a lot more than just building 
                        a website. It's almost as if they are an employee. 
                        Thrive is a company you can really trust. They handle 
                        my PHP development work, web design, web hosting and 
                        search engine optimization.
                    </p>
                </div>
            </div>  

        </div>
    </div>
</div>
<!-- <div class="container-fluid mt-5" style="background-color: #4b7289" id="Feedback">
    <h1 class="text-center testyheading p-4">Students' Feedback</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="owl-carousel" id="testimonial-slider">
                <p class="description">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id, illo fugit? Voluptatum a tempore repudiandae excepturi ex eos corrupti velit, ab magni, tenetur magnam
                     fugit perspiciatis voluptatibus enim temporibus obcaecati?
                </p>
                <div class="pic">
                    <img src="image/user1.jpg" alt="">
                </div>
                <div class="testimonial-prof">
                    <h4>Sonam</h4>
                    <small>Web Developer</small>
                </div>   
            </div>
        </div>

        <div class="col-md-12">
            <div class="owl-carousel" id="testimonial-slider">
                <p class="description">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id, illo fugit? Voluptatum a tempore repudiandae excepturi ex eos corrupti velit, ab magni, tenetur magnam
                     fugit perspiciatis voluptatibus enim temporibus obcaecati?
                </p>
                <div class="pic">
                    <img src="image/user1.jpg" alt="">
                </div>
                <div class="testimonial-prof">
                    <h4>Sonam</h4>
                    <small>Web Developer</small>
                </div>   
            </div>
        </div>

        <div class="col-md-12">
            <div class="owl-carousel" id="testimonial-slider">
                <p class="description">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id, illo fugit? Voluptatum a tempore repudiandae excepturi ex eos corrupti velit, ab magni, tenetur magnam
                     fugit perspiciatis voluptatibus enim temporibus obcaecati?
                </p>
                <div class="pic">
                    <img src="image/user1.jpg" alt="">
                </div>
                <div class="testimonial-prof">
                    <h4>Sonam</h4>
                    <small>Web Developer</small>
                </div>   
            </div>
        </div>

        <div class="col-md-3">
            <div class="owl-carousel" id="testimonial-slider">
                <p class="description">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id, illo fugit? Voluptatum a tempore repudiandae excepturi ex eos corrupti velit, ab magni, tenetur magnam
                     fugit perspiciatis voluptatibus enim temporibus obcaecati?
                </p>
                <div class="pic">
                    <img src="image/stu/student2.jpg" alt="">
                </div>
                <div class="testimonial-prof">
                    <h4>Sonam</h4>
                    <small>Web Developer</small>
                </div>   
            </div>
        </div>

        
    </div>
</div> -->
<!-- end student testimonial -->

<div class="container-fluid bg-danger">
    <!-- social follow -->
    <div class="row text-white text-center p-1">
        <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
        </div>
        <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-twitter"></i> Twitter</a>
        </div>
        <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-instagram"></i> Instagram</a>
        </div>
        <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-linkedin"></i> LinkedIn</a>
        </div>
    </div>    
</div> 



<!-- about us section -->
<div class="container-fluid p-4" style="background-color:#e9ecef">
<div class="container" style="background-color:#e9ecef">
<div class="row text-center">
    <div class="col-sm">
        <h5>About Us</h5>
        <p>Skill World provides universal access to the education to offer online course</p>
    </div>
    <div class="col-sm">
        <h5>Category</h5>
        <a class="text-dark" href="#">Web Development</a> <br>
        <a class="text-dark" href="#">Web Designing</a> <br>
        <a class="text-dark" href="#">Android App Dev</a> <br>
        <a class="text-dark" href="#">iOS Development</a> <br>
        <a class="text-dark" href="#">Data Analysis</a> <br>
    </div>
    <div class="col-sm">
        <h5>Contact Us</h5>
        <p>Skill World Pvt. Ltd. <br> Near Police Camp <br> Thankot, Kathmandu <br> Ph. 8976547862</p>
    </div>
</div>
</div>
</div>


<!-- start including footer -->
<?php
    include('./mainInclude/footer.php');
?>
<!-- end including footer -->

