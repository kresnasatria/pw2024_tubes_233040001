<?php
require 'functions.php';

if( isset($_POST["cari"]) ) {
  $teachers = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kursus Privat - Kresna Satria Dewantoro</title>

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- MY CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- DATA AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
  <body>
    <!-- HEADER -->
    <header>
      <div class="main-container">
        <div class="nav">
          <div class="logo">
            <a href="#">KursusPrivat.</a>
          </div>

          
          <div class="search">
                <input class="form-control" list="datalistOptions" id="exampleDataList" name="cari" placeholder="Type to search..." style="width: 450px; margin-top: 20px; margin-left: 60px; cursor: pointer;">  
          </div>
          <button type="submit" name="cari" style="width: 35px; height: 40px; margin-top: 18px; margin-left: -222px; background-color: rgb(216, 108, 19);"><svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m15.97 17.031c-1.479 1.238-3.384 1.985-5.461 1.985-4.697 0-8.509-3.812-8.509-8.508s3.812-8.508 8.509-8.508c4.695 0 8.508 3.812 8.508 8.508 0 2.078-.747 3.984-1.985 5.461l4.749 4.75c.146.146.219.338.219.531 0 .587-.537.75-.75.75-.192 0-.384-.073-.531-.22zm-5.461-13.53c-3.868 0-7.007 3.14-7.007 7.007s3.139 7.007 7.007 7.007c3.866 0 7.007-3.14 7.007-7.007s-3.141-7.007-7.007-7.007z" fill-rule="nonzero"/></svg></button>

          
          <nav>
            <ul>
              <li><a class="link" href="#hero">About</a></li>
              <li><a class="link" href="#subject">Subjects</a></li>
              <li><a class="link" href="#teachers">Teachers</a></li>
              <li><a class="link" href="#contact">Contact</a></li>
              <li><a class="btn" href="logout.php">Logout</a></li>
            </ul>
          </nav>

          <div class="burger">
            <div class="line-1"></div>
            <div class="line-2"></div>
            <div class="line-3"></div>
          </div>
        </div>

        
      </div>
    </header>
    <div class="gambar">
          <img src="img/user/header5.jpg" alt="hero"/>
        </div>

        <section class="main-container" id="hero" data-aos="fade-right" data-aos-duration="1800">
          <div class="hero-left">
            <div class="h3 pre-title">Welcome to</div>
            <h1 class="hero-name" data-aos="zoom-in" data-aos-duration="2000">Kursus<span> Privat</span></h1>
            <p>Welcome to the Kursus Privat. Here we provide private tutor search services for you. We provide many teachers who are experienced in their fields.</p>
            <p>Our teachers have received their own training, so that the material presented is easy to understand.</p>
            <p>Our teacher will come directly to your place, as long as your place is still within the coverage area</p>
          </div>
          
          <div class="hero-right" data-aos="fade-left" data-aos-duration="2000">
            <img src="img/user/logo3.jpg" alt="hero" />
          </div>
        </section>
    <!-- END OF HEADER -->

     <!-- SUBJECTS -->

     <section id="subject">
      <div class="skills main-container">
        <h3 class="pre-title" data-aos="fade-left" data-aos-duration-2000>Learning Categories</h3>
        <h1 class="section-title" data-aos="fade-right" data-aos-duration-2000>Subjects</h1>

        <div class="skills-grid">
          <div class="skills-left">
            <!-- Education - 1 -->
            <div class="education">
              <div class="line">
                <div></div>
              </div>
      
              <div class="education-info" data-aos="fade-left" data-aos-duration-2000>
                <h4 class="education-title">VISUAL EFFECTS</h4>
                <p>Specialized in After Effects</p>
                <h4 class="education-years">(19 YEARS OLD MINIMAL)</h4>

              </div>
            </div>
            <!-- Education - 2 -->
            <div class="education">
              <div class="line">
                <div></div>
              </div>

              <div class="education-info" data-aos="fade-left" data-aos-duration-2000 data-aos-delay="200">
                <h4 class="education-title">VIDEOGRAPHY</h4>
                <p> Specialized in Premiere Pro </p>
                <h4 class="education-years">(19 YEARS OLD MINIMAL)</h4>
                
              </div>
            </div>
            <!-- Education - 3 -->
            <div class="education">
              <div class="line">
                <div></div>
              </div>

              <div class="education-info" data-aos="fade-left" data-aos-duration-2000 data-aos-delay="300">
                <h4 class="education-title">PHOTOGRAPHY</h4>
                <p>Specialized in Comercial Advertising</p>
                <h4 class="education-years">(19 YEARS OLD MINIMAL)</h4>
                
              </div>
            </div>
             <!-- Education - 4 -->
             <div class="education">
              <div class="line">
                <div></div>
              </div>

              <div class="education-info" data-aos="fade-left" data-aos-duration-2000 data-aos-delay="300">
                <h4 class="education-title">SOUND DESIGN</h4>
                <p>Specialized in Adobe Audition</p>
                <h4 class="education-years">(19 YEARS OLD MINIMAL)</h4>
                
              </div>
            </div>
          </div>
          <div class="skills-right" data-aos="fade-up" data-aos-duration-2000 data-aos-delay="200">
            <p>We provide several course categories. Starting from visual effects, videography, photography and sound design</p>
            <p>You can order a teacher now, our teacher can come to your place. so you don't need to bother going to our place anymore</p>
           
            <div class="skills-list">
              <ul>
                <p>For clients who want a private teacher to come to your place</p>
                <p>A computer is required with the software installed below*</p>
                <li>Adobe After Effects</li>
                <li>Adobe Pemiere Pro</li>
                <li>Adobe Audition</li>
                <li>Adobe Photoshop</li>
              </ul>
            </div>
            <p>*And for photography classes a camera is required.*</p>
          </div>
        </div>
      </div>
    </section>
    <!-- END OF SUBJECTS -->

    <?php
  $teachers = query('SELECT * FROM guru');    
    ?>
    <!-- TEACHERS  -->
    <section id="teachers">

    
      <div class="container pt-5s">
        <div class="row text-center">
          <div class="col" style="color: rgb(221, 97, 8);"  data-aos="fade-up" data-aos-duration-2000>
            <h3 class="fw-bold" style="color: #000;">Teachers</h3>
          </div>
        </div>
        <div class="row pt-3" data-aos="fade-up" data-aos-duration-2000>

      <!-- TEACHER 1 -->
      <?php
      foreach( $teachers as $teacher ) :
      ?>
          <div class="col-md-3 mb-3">
            <div class="card" style="width: 15rem;">
              <img src="img/teachers/<?= $teacher['gambar'] ?>" class="card-img-top" alt="visual" />
              <div class="card-body">
                <h3 class="card-title" style="color: rgb(216, 108, 19);"><?= $teacher['kelas'] ?></h3>              
                <h5 class="card-title" style="color: #000;">Teacher: <?= $teacher['nama_guru'] ?></h5>
                <p class="card-text"><?= $teacher['description'] ?></p>
                <a href="booking.php" class="btn btn-primary position-relative bottom-0 start-50 translate-middle-x">BOOK NOW</a>
              </div>
            </div>
          </div>
          <?php
      endforeach;
      ?>
    </section>


   

    
    <!-- CONTACT -->

    <section id="contact">
      <div class="contact main-container" data-aos="fade-up" data-aos-duration-2000>
        <div class="contact-left">
          <form class="contact-form" action="https://formspree.io/f/mjvqnrye" method="POST">
            <div>
            <input type="text" placeholder="Name" name="name">
            </div>
            <div>
              <input type="email" placeholder="Email" name="email">
            </div>
            <div>
             <textarea name="message" placeholder="Message" id="message" cols="30" rows="10"></textarea> 
            </div>
            <div>
              <button class="btn-submit">Send Message</button>
            </div>
          </form>
        </div>

          <div class="contact-right">
            <!-- Contact Item - 1 -->
            <div class="contact-item" data-aos="fade-left" data-aos-duration-2000>
              <div class="contact-item-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 1c-3.148 0-6 2.553-6 5.702 0 3.148 2.602 6.907 6 12.298 3.398-5.391 6-9.15 6-12.298 0-3.149-2.851-5.702-6-5.702zm0 8c-1.105 0-2-.895-2-2s.895-2 2-2 2 .895 2 2-.895 2-2 2zm12 14h-24l4-8h3.135c.385.641.798 1.309 1.232 2h-3.131l-2 4h17.527l-2-4h-3.131c.435-.691.848-1.359 1.232-2h3.136l4 8z"/></svg>
              </div>
              <div class="contact-item-detail">
                <h4>Address</h4>
                <p>Taman Puri Lestari A6 No 9</p>
              </div>
                </div>
              <!-- Contact Item - 2 -->
                <div class="contact-item" data-aos="fade-left" data-aos-duration-2000 data-aos-delay="200">
                  <div class="contact-item-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20 22.621l-3.521-6.795c-.008.004-1.974.97-2.064 1.011-2.24 1.086-6.799-7.82-4.609-8.994l2.083-1.026-3.493-6.817-2.106 1.039c-7.202 3.755 4.233 25.982 11.6 22.615.121-.055 2.102-1.029 2.11-1.033z"/></svg>                  </div>
                  <div class="contact-item-detail">
                    <h4>Phone</h4>
                    <p>+62 877-7888-9214</p>
                  </div>
                  </div>
                  <!-- Contact Item - 3 -->
                  <div class="contact-item" data-aos="fade-left" data-aos-duration-2000 data-aos-delay="400">
                    <div class="contact-item-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 3v18h24v-18h-24zm21.518 2l-9.518 7.713-9.518-7.713h19.036zm-19.518 14v-11.817l10 8.104 10-8.104v11.817h-20z"/></svg>                    </div>
                    <div class="contact-item-detail">
                      <h4>Email</h4>
                      <p>kresnasatria160@gmail.com</p>
                    </div>
                    </div>
              </div>
            </div>
          </div>
      </div>
    </section>

    <!-- END OF CONTACT -->

    <!-- FOOTER -->

    <footer>
      <div class="footer-icons" data-aos="fade-up" data-aos-duration-2000>
        <a href="https://www.instagram.com/satria.kresna/" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
        </a>
        <a href="https://www.facebook.com/profile.php?id=100082269596213" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3 8h-1.35c-.538 0-.65.221-.65.778v1.222h2l-.209 2h-1.791v7h-3v-7h-2v-2h2v-2.308c0-1.769.931-2.692 3.029-2.692h1.971v3z"/></svg>
        </a>
        <a href="https://github.com/kresnasatria" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
        </a>
      </div>
      <div class="footer-paragraph" data-aos="fade-up" data-aos-duration-2000 data-aos-delay="200">
      <p>&copy; 2023 - Made by KSatria</p>
    </div>
    </footer>

    <!-- END OF FOOTER -->

    <!-- JAVASCRIPT BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- DATA AOS         -->
    <script src="script/main.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script> 
  </body>
</html>