<?php
include 'head.php';
$course = "active";
include 'header.php';
?>



<main class="main">
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
  
   <!-- <div class="social-icons">
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
    </style> -->
  <!-- Page Title -->
  <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1>Courses</h1>
            <p class="mb-0">After completing the Cosmetology & Trichology Course, you will receive
              a proper Intent Institute Certificate.</p>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li class="current">Courses</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->

  <!-- Courses Section -->
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
<!-- /Courses Section -->

</main>

<?php
include 'footer.php';
?>