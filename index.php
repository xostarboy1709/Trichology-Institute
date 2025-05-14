<?php
include 'head.php';
$home = "active";
include 'header.php';
?>


<style>
  #customButton {
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    font-size: 18px;
    border-radius: 5px;
  }

  #swal2-html-container {
    display: block;
    margin-block: -34px;

  }

  .swal2-close {
    color: yellow !important;
    margin-right: 40px;

  }
</style>
<div class="">
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      Swal.fire({
        imageUrl: 'assets/img/batch3.png',
        imageWidth: 350,
        imageHeight: 450,
        imageAlt: 'Custom Image',
        // html: '<button id="customButton"><a href="contact.php">Contact</a></button>',
        html: `<button onclick="alertFunction()" style="padding:10px 20px; color:white; border:none; border-radius:5px; cursor:pointer;"><a href="contact.php">Enquire Now<a/></button>`,
        timer: 10000,
        showCloseButton: true,
        showConfirmButton: false,
        background: "transparent"

      });
    });
  </script>
  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img class="image1" src="assets/img/bg-10.jfif" alt="" data-aos="fade-in">

      <div class="container">
        <h2 data-aos="fade-up" data-aos-delay="100">Intent Institute of Cosmetology & Trichology</h2>
        <p data-aos="fade-up" data-aos-delay="200">Enroll at Intent International Institute for best-of-class cosmetology and trichology courses in Kota. Our expert instructors, hands-on training, and modern facilities assure you are well prepared to succeed in a beauty and wellness career. Take that first step toward success today with Intent!</p>
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
          <a href="courses.php" class="btn-get-started">Get Started</a>
        </div>
      </div>

    </section><!-- /Hero Section -->
    <a href="https://wa.me/8233289489" target="_blank" class="whatsapp-float">
      <i class="bi bi-whatsapp"></i>
    </a>
    
    <style>
      .whatsapp-float {
        position: fixed;
        bottom: 20px;
        left: 20px;
        background-color: #25d366;
        color: white;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
        text-decoration: none;
        font-size: 30px;
        z-index: 1000;
      }

      .whatsapp-float:hover {
        background-color: #1ebe57;
      }
    </style>
<!--     
     <div class="social-icons">
        <a href="https://x.com/intent567?t=az3A4BwrjTZP8Rg6d-IBIw&s=09" target="_blank"><i class="bi bi-twitter-x"></i></a>
        <a href="https://www.facebook.com/people/Intent-Institute-of-Cosmetology-and-Trichology/61574577974147/?rdid=zR9zcqtmxismuHrR&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F19fr2ziUnc%2F" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="https://youtube.com" target="_blank"><i class="bi bi-youtube"></i></a>
        <a href="https://www.instagram.com/intent141/?igsh=YnBwcjcwenFkNDR5#" target="_blank"><i class="bi bi-instagram"></i></a>
    </div>
    <style>
        .social-icons {
            position: fixed;
            left: 10px;  
            top: 50%;  
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 10px;
            z-index: 1000;
           
        }

        .social-icons a {
            text-decoration: none;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #333;
            color: white;
            border-radius: 50%;
            transition: 0.3s;
        }

        .social-icons a:hover {
            background: #555;
        }

        .social-icons img {
            width: 24px;
            height: 24px;
        }
    </style>  -->
    <!-- Why Us Section -->
    <section id="about" class="about section">

<div class="container">
 <div class="card p-0" style="font-size:0.8rem; border-radius:18px; background-image: url('assets/img/background.jpg'); background-size:cover;">
  <div class="row gy-4">

    <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
       <img style="border-radius: 15px; object-fit:cover; height: 100%;" src="assets/img/institute.jpg" class="img-fluid" alt=""> 
    </div>

    <div class="col-lg-6 p-5 order-1 order-lg-2 content" data-aos="fade-up" data-aos-delay="200">
      <h3>About Us</h3>
      <p class="">
        Welcome to Intent International Institute of Cosmetology and Trichology! Passionate about the shaping of future beauty and wellness professionals, the institute is situated in Kota, Rajasthan, providing education of the highest quality in clinical cosmetology and trichology.
      </p>
      <p class="">
        Founded by Reena Jain, Intent International is more than a mere institution; it is the place where creativity meets science. Our courses provide real-world skills and knowledge, blending hand-on training with the necessary theoretical insights. Experience is the key, along with a totally modern environment at Intent, making us one of the best institutes in the country today.  We at Intent empower the student, foster talent, and enable you to build a successful and satisfying career in cosmetology and trichology. Let’s build a brighter future together!
      </p>

      <p class="">
       
      </p>
      <!-- <ul>
        <li><i class="bi bi-check-circle"></i> <span>Helping clients find the right products or looks tailored to
            their needs.</span></li>
        <li><i class="bi bi-check-circle"></i> <span> Focus on areas like bridal makeup, nail artistry, or even
            permanent makeup.</span></li>
        <li><i class="bi bi-check-circle"></i> <span>Work with beauty brands to create new products.</span></li>
      </ul> -->

    </div>

  </div>
  </div>
</div>

</section>


<section id="courses" class="courses section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Courses</h2>
    <p>Popular Courses</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row">

      <div class="col-lg-4 col-md-6 p-2 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="course-item shadow" style="border-radius:25px">
          <img src="assets/img/image-1.jfif" class="img img-responsive" style="border-radius:25px;height:300px;width:100%" alt="...">
          <div class="course-content">
            <!-- <div class="d-flex justify-content-between align-items-center mb-3">
              <p class="category">Certificate</p>
            </div> -->

            <center><h3 style="font-size: 1rem;"><a href="course-details1.php"><b>Certificate in Cosmetology & Trichology</b></a></h3></center>
            <p class="description">This 14-day course offers 3-hour sessions daily, blending theory and practical training. Learn skin and hair basics to advanced treatments, including facials, chemical peels, PRP, lasers, tattoo removal, and more, equipping you with essential cosmetology and trichology skills.
            </p>
            <!-- <div class="trainer d-flex justify-content-between align-items-center">
              <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-1-2.jpg" class="img-fluid" alt="">
                    <a href="" class="trainer-link">Antonio</a>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bi bi-person user-icon"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bi bi-heart heart-icon"></i>&nbsp;65
                  </div>
            </div> -->
            <a href='course-details1.php' class="category">View Course</a>
          </div>
        </div>
      </div> <!-- End Course Item-->

      <div class="col-lg-4 col-md-6 p-2 d-flex align-items-stretch mt-2 mt-md-0" data-aos="zoom-in"
        data-aos-delay="200">
        <div class="course-item shadow" style="border-radius: 25px;">
          <img src="assets/img/image-2.jpg" class="img img-responsive" style="border-radius:25px; height:300px; width:100%;" alt="...">
          <div class="course-content">
            <!-- <div class="d-flex justify-content-between align-items-center mb-3">
              <p class="category">Diploma</p>
            </div> -->

           <center><h3 style="font-size: 1rem;"><a href="course-details2.php"><b>Diploma of Cosmetology & Trichology</b></a></h3></center>
            <p class="description">This 1-month course consists of 15 days of theory and 15 days of practical training. You will learn everything from skin and hair basics to advanced treatments like facials, PRP, lasers, and more, giving you real-world skills in cosmetology and trichology.
            </p>
            <!-- <div class="trainer d-flex justify-content-between align-items-center"> -->
              <!-- <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-2-2.jpg" class="img-fluid" alt="">
                    <a href="" class="trainer-link">Lana</a>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bi bi-person user-icon"></i>&nbsp;35
                    &nbsp;&nbsp;
                    <i class="bi bi-heart heart-icon"></i>&nbsp;42
                  </div> -->
            <!-- </div> -->
            <a href='course-details2.php' class="category">View Course</a>
          </div>
        </div>
      </div> <!-- End Course Item-->

      <div class="col-lg-4 col-md-6 p-2 d-flex align-items-stretch mt-2 mt-lg-0" data-aos="zoom-in"
        data-aos-delay="300">
        <div class="course-item shadow" style="border-radius: 25px;">
          <img src="assets/img/image-4.jfif" class="img img-responsive" style="border-radius:25px; height:300px; width:100%;" alt="...">
          <div class="course-content">
            <!-- <div class="d-flex justify-content-between align-items-center mb-3">
              <p class="category">Advanced Diploma</p>
            </div> -->

            <center><h3 style="font-size: 1rem;"><a href="course-details3.php"><b>Advanced Diploma of Cosmetology & Trichology</b></a></h3></center>
            <p class="description">This 90-day course includes 45 days of theory and 45 days of hands-on practice. Learn skin and hair care basics to advanced treatments like facials, PRP, lasers, Botox, fillers, acne care, pigmentation, and more, with personalized one-on-one consultation training provided.</p>
            <!-- <div class="trainer d-flex justify-content-between align-items-center"> -->
              <!-- <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-3-2.jpg" class="img-fluid" alt="">
                    <a href="" class="trainer-link">Brandon</a>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bi bi-person user-icon"></i>&nbsp;20
                    &nbsp;&nbsp;
                    <i class="bi bi-heart heart-icon"></i>&nbsp;85
                  </div> -->
            <!-- </div> -->
            <a href='course-details3.php' class="category">View Course</a>
          </div>
        </div>
      </div> <!-- End Course Item-->
      <div class="col-lg-4 col-md-6 p-2 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="course-item shadow" style="border-radius: 25px;">
          <img src="assets/img/image-6.jfif" class="img img-responsive" style="border-radius:25px; height:300px; width:100%;" alt="...">
          <div class="course-content">
            <!-- <div class="d-flex justify-content-between align-items-center mb-3">
              <p class="category">Fellowship</p>
            </div> -->

          <center><h3 style="font-size: 1rem;"><a href="course-details4.php"><b>Fellowship in Cosmetology & Trichology</b></a></h3></center>
            <p class="description">This 90-day course provides unlimited hands-on training with online/offline theory. Learn skin and hair basics to advanced treatments like facials, PRP, lasers, Botox, fillers, acne care, and pigmentation. It includes business strategies, consultation training, and lifetime support to launch your practice.
            </p>
            <!-- <div class="trainer d-flex justify-content-between align-items-center"> -->
              <!-- <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-1-2.jpg" class="img-fluid" alt="">
                    <a href="" class="trainer-link">Antonio</a>
                  </div> -->
              <!-- <div class="trainer-rank d-flex align-items-center">
                    <i class="bi bi-person user-icon"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bi bi-heart heart-icon"></i>&nbsp;65
                  </div> -->
            <!-- </div> -->
            <a href='course-details4.php' class="category">View Course</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 p-2 d-flex align-items-stretch mt-2 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="course-item shadow" style="border-radius: 25px;">
          <img src="assets/img/image-7.jfif" class="img img-responsive" style="border-radius:25px; height:300px; width:100%;" alt="...">
          <div class="course-content">
            <!-- <div class="d-flex justify-content-between align-items-center mb-3">
              <p class="category">Certificate</p>
            </div> -->

          <center><h3 style="font-size: 1rem;"><a href="course-details6.php"><b>Certificate in Cosmetology</b></a></h3></center>
            <p class="description">Skin structure
Analysis of skin
Electric and Light therapy
Ultra violet lamp
Ionophorosis of face, Galvenic and ultrasound
Terminology in cosmetology
Magnifying glass
Dermascope analysis
Product knowledge of each skin type and home care
Steamer and beauty studio
High frequency
Acne management
<!-- Exfoliation: MDA by crystal, Diamond -->
<!-- Chemical Peels
Different types of pigmentation and their solution
Antiaging treatments
Laser hair removal
Carbon peel
Photo facial
Mesotherapy
Hydrafacial -->

            </p>
            <!-- <div class="trainer d-flex justify-content-between align-items-center"> -->
              <!-- <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-2-2.jpg" class="img-fluid" alt="">
                    <a href="" class="trainer-link">Lana</a>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bi bi-person user-icon"></i>&nbsp;35
                    &nbsp;&nbsp;
                    <i class="bi bi-heart heart-icon"></i>&nbsp;42
                  </div> -->
            <!-- </div> -->
            <a href='course-details6.php' class="category">View Course</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 p-2 d-flex align-items-stretch mt-2 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
        <div class="course-item shadow" style="border-radius: 25px;">
          <img src="assets/img/image-8.jfif" class="img img-responsive" style="border-radius:25px; height:300px; width:100%;" alt="...">
          <div class="course-content">
            <!-- <div class="d-flex justify-content-between align-items-center mb-3">
              <p class="category">Diploma</p>
            </div> -->

            <center><h3 style="font-size: 1rem;"><a href="course-details5.php"><b>PG Diploma In Aesthetic Injectables</b></a></h3></center>
            <p class="description">Hair Analysis Scalp Evaluation Surgical Techniques Hair PRP & GFC Graft Extraction Graft Placement PRE & POST Operative Care Managing Complications Botulium Toxin Fillers Threads Botulinum Toxins
HA Fillers
PDO Threads
IV Therapy
PRP Face and Scalp

            </p>
            <!-- <div class="trainer d-flex justify-content-between align-items-center"> -->
              <!-- <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-3-2.jpg" class="img-fluid" alt="">
                    <a href="" class="trainer-link">Brandon</a>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bi bi-person user-icon"></i>&nbsp;20
                    &nbsp;&nbsp;
                    <i class="bi bi-heart heart-icon"></i>&nbsp;85
                  </div> -->
            <!-- </div> -->
            <a href='course-details5.php' class="category">View Course</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 p-2 d-flex align-items-stretch mt-2 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
        <div class="course-item shadow" style="border-radius: 25px;">
          <img src="assets/img/image-9.jpg" class="img img-responsive" style="border-radius:25px; height:300px; width:100%;" alt="...">
          <div class="course-content">
            <!-- <div class="d-flex justify-content-between align-items-center mb-3">
              <p class="category">Certificate</p>
            </div> -->

            <center><h3 style="font-size: 1rem;"><a href="course-details7.php"><b>Certificate in Trichology</b></a></h3></center>
            <p class="description">Hair, Follicle and Scalp structure
Terminology
Some hair and scalp disorder in brief
Different types of Alopacia
Patchy hair loss
Analysis with Trichoscope
Treatment of Dandruff
High frequency
Hair fall and hair loss
Hydration therapy
Laser comb
Laser Helmet
Mesotherapy
<!-- Scalp micro pigmentation
Diet and nutrition for Hair growth
Hair product knowledge
Knowledge of PRP, stem cell therapy and GFC  -->

            </p>
            <!-- <div class="trainer d-flex justify-content-between align-items-center"> -->
              <!-- <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-3-2.jpg" class="img-fluid" alt="">
                    <a href="" class="trainer-link">Brandon</a>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bi bi-person user-icon"></i>&nbsp;20
                    &nbsp;&nbsp;
                    <i class="bi bi-heart heart-icon"></i>&nbsp;85
                  </div> -->
            <!-- </div> -->
            <a href='course-details7.php' class="category">View Course</a>
          </div>
        </div>
      </div>
    </div>

  </div>

</section>
    <!-- About Section -->
    
    <section id="about" class=" about section">

      <div class="container">
       <div class="card p-5 shadow" style="font-size:0.8rem; background: linear-gradient(135deg, #f7dfe5, #f1a6dc);border-radius:18px;">
        <div class="row gy-4">

          <div class="col-lg-6 order-2 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <img style="border-radius: 15px;" src="assets/img/image-3.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 order-1 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
            <h3>Why Join Intent Institute for Cosmetology and Trichology?</h3>
            <p class="fst-italic">
              At Intent Institute of Cosmetology and Trichology is to help you realize your passion in beauty and wellness into a real and successful career. You will get hands-on experience, work with the latest tools and techniques, and learn from the best when you join our team. Our courses equip you with knowledge and confidence as you stand your ground in an industry that calls for competition, growth, excel, and following those dreams. 
            </p>

            <p class="fst-italic">
              We have programs at all levels of study, whether you are just starting out or a seasoned practitioner looking to learn more. Learn advanced skin treatments, cutting-edge hair care techniques, and so much more while ensuring you remain current. Apply now for your next step in a rewarding career.
            </p>
            <!-- <ul>
              <li><i class="bi bi-check-circle"></i> <span>Helping clients find the right products or looks tailored to
                  their needs.</span></li>
              <li><i class="bi bi-check-circle"></i> <span> Focus on areas like bridal makeup, nail artistry, or even
                  permanent makeup.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Work with beauty brands to create new products.</span></li>
            </ul> -->
            <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>
        </div>
      </div>

    </section><!-- /About Section -->

    <!-- Counts Section -->
    <!-- <section id="counts" class="section counts light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100"> -->
    <!-- 
         <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Students</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Courses</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Events</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Trainers</p>
            </div>
          </div>

        </div>  -->

</div>

</section><!-- /Counts Section -->


<!-- Features Section -->
<section id="features" class="features section">

  <div class="container">

    <!-- <div class="row gy-4">

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="features-item">
              <i class="bi bi-eye" style="color: #ffbb2c;"></i>
              <h3><a href="" class="stretched-link">Lorem Ipsum</a></h3>
            </div>
          </div><!-- End Feature Item -->
    <!-- 
          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="features-item">
              <i class="bi bi-infinity" style="color: #5578ff;"></i>
              <h3><a href="" class="stretched-link">Dolor Sitema</a></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="features-item">
              <i class="bi bi-mortarboard" style="color: #e80368;"></i>
              <h3><a href="" class="stretched-link">Sed perspiciatis</a></h3>
            </div>
          </div> -->

    <!-- <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="400">
            <div class="features-item">
              <i class="bi bi-nut" style="color: #e361ff;"></i>
              <h3><a href="" class="stretched-link">Magni Dolores</a></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="500">
            <div class="features-item">
              <i class="bi bi-shuffle" style="color: #47aeff;"></i>
              <h3><a href="" class="stretched-link">Nemo Enim</a></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="600">
            <div class="features-item">
              <i class="bi bi-star" style="color: #ffa76e;"></i>
              <h3><a href="" class="stretched-link">Eiusmod Tempor</a></h3>
            </div>
          </div> -->

    <!-- <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="700">
            <div class="features-item">
              <i class="bi bi-x-diamond" style="color: #11dbcf;"></i>
              <h3><a href="" class="stretched-link">Midela Teren</a></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="800">
            <div class="features-item">
              <i class="bi bi-camera-video" style="color: #4233ff;"></i>
              <h3><a href="" class="stretched-link">Pira Neve</a></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="900">
            <div class="features-item">
              <i class="bi bi-command" style="color: #b2904f;"></i>
              <h3><a href="" class="stretched-link">Dirada Pack</a></h3>
            </div>
          </div> -->

    <!-- <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1000">
            <div class="features-item">
              <i class="bi bi-dribbble" style="color: #b20969;"></i>
              <h3><a href="" class="stretched-link">Moton Ideal</a></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1100">
            <div class="features-item">
              <i class="bi bi-activity" style="color: #ff5828;"></i>
              <h3><a href="" class="stretched-link">Verdo Park</a></h3>
            </div>
          </div> -->

    <!-- <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1200">
            <div class="features-item">
              <i class="bi bi-brightness-high" style="color: #29cc61;"></i>
              <h3><a href="" class="stretched-link">Flavor Nivelanda</a></h3>
            </div>
          </div>

        </div>  -->

  </div>

</section><!-- /Features Section -->
<section id="why-us" class="section why-us">

<div class="container">

  <div class="row gy-4">

    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
      <div class="why-box">
        <h3>Who is this Program for?</h3>
        <h4>Newcomers to the Industry</h4>
        <p>
          If you’re exploring career options or
          considering a change, this is a great way to
          dive into the world of cosmetology or
          trichology. You’ll learn the fundamentals and
          gain the confidence to build a solid career.
        </p>
        <div class="text-center">
          <a href="#" class="more-btn"><span>Learn More</span> <i class="bi bi-chevron-right"></i></a>
        </div>
      </div>
    </div><!-- End Why Box -->

    <div class="col-lg-8 d-flex align-items-stretch">
      <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

        <div class="col-xl-4">
          <div class="icon-box d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-clipboard-data"></i>
            <h4>Beauty Professionals
              </h4>
            <p>Are you already a hairstylist, makeup artist,
              or esthetician? Adding advanced skills or a
              specialization in hair and scalp care can set
              you apart from the competition and open
              new doors.</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
          <div class="icon-box d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-gem"></i>
            <h4>Aspiring Entrepreneurs</h4>
            <p>Thinking of starting your own salon, spa, or
              trichology clinic? This program doesn’t just
              teach you techniques – it also gives you the
              insights and knowledge to build and grow
              your business.</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
          <div class="icon-box d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-inboxes"></i>
            <h4>Healthcare Professionals</h4>
            <p>If you’re a dermatologist, nurse, or in the
              health and wellness field, this program can
              help you branch into hair and scalp
              treatments or medical aesthetics, expanding
              your practice and client base.</p>
          </div>
        </div><!-- End Icon Box -->

      </div>
    </div>

  </div>

</div>

</section><!-- /Why Us Section -->
<!-- Courses Section -->
<!-- /Courses Section -->

<!-- Trainers Index Section -->
<section id="trainers-index" class="section trainers-index">

  <div class="container">
    <div class="row">
      <h3 style="font-size: 24px;"><b>Become a Certified Cosmetologist and Trichologist with Intent Institute</b></h3>
      <p>Get certified in cosmetology and trichology by joining Intent Institute. Our course offers a complete curriculum and hands-on training, along with mentorship to help you grow in confidence and skill. Lifetime support and real-life training will be provided to get you started and thriving in a career that is exciting and new.</p>
      <div class="image-container">
        <img style="border: solid;" src="assets/img/certificate.png" alt="">
      </div>


    </div>
  </div>

  <!-- <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <video width="300" height="300" controls>
                <source src="assets/vid/WhatsApp Video 2025-02-06 at 6.44.45 PM.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
               
              <!-- <class="img-fluid" alt=""> -->
  <!-- <div class="member-content"> -->
  <!-- <h4>Walter White</h4>
                <span>Web Development</span>
                <p>
                  Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut
                  aut aut
                </p> -->
  <!-- <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
  <!-- </div> -->
  <!-- </div>
          </div>  -->

  <!-- <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <video width="300" height="300" controls>
                <source src="assets/vid/WhatsApp Video 2025-02-06 at 6.44.47 PM.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
              <class="img-fluid" alt="">
              <!-- <div class="member-content">
                <!-- <h4>Sarah Jhinson</h4>
                <span>Marketing</span>
                <p>
                  Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum
                  temporibus
                </p> -->
  <!-- <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
  <!-- </div> -->
  <!-- </div>
          </div>  -->
  <!-- 
          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <video width="300" height="300" controls>
                <source src="assets/vid/WhatsApp Video 2025-02-06 at 6.44.47 PM (1).mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
             <class="img-fluid" alt="">
              <!-- <div class="member-content">
                <!-- <h4>William Anderson</h4>
                <span>Content</span>
                <p>
                  Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
                </p> -->
  <!-- <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
  <!-- </div> -->
  <!-- </div>
          </div>  -->

  </div>

  </div>

</section><!-- /Trainers Index Section -->
<section id="contact" class="contact section">
  <div class="container">
    <div class="row">
      <h3 style="font-size: 24px;"><b>Contact Us</b></h3>
      <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
        <div class="row gy-4">

          <div class="col-md-6">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
          </div>

          <!-- <div class="col-md-6 ">
            <input type="text" class="form-control" name="name" placeholder="Last Name" required="">
          </div> -->

          <div class="col-md-6">
            <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
          </div>

          <div class="col-md-6">
            <input type="text" class="form-control" name="number" placeholder="Your Number" required="">
          </div>

          <div class="col-md-6">

            <select id="options" name="option">
              <option value="Select The Course">Select The Course</option>
              <option value="Certificate in Cosmetology & Trichology">Certificate in Cosmetology & Trichology</option>
              <option value="Diploma of Cosmetology & Trichology">Diploma of Cosmetology & Trichology</option>
              <option value="Advanced Diploma of Cosmetology & Trichology">Advanced Diploma of Cosmetology & Trichology</option>
              <option value="Fellowship in Cosmetology & Trichology">Fellowship in Cosmetology & Trichology</option>
              <option value="Workshop For International Certificate">PG Diploma In Aesthetic Injectables</option>
              <option value="Certificate in Cosmetology">Certificate in Cosmetology</option>
              <option value="Certificate in Trichology">Certificate in Trichology</option>
            </select>

          </div>


          <div class="col-md-12 text-center">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>

            <button type="submit">Submit</button>
          </div>

        </div>
      </form>
    </div><!-- End Contact Form -->

  </div>


  </div>
  </div>
</section>
</main>

<?php
include 'footer.php';
?>