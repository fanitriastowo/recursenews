<!DOCTYPE html>
<html lang="en">
<head>
	<title>Recursenews | Programming Blog</title>

  <?php include 'template/css.html'; ?>

</head>
<body>

<!-- include navbar --> 
<?php include 'template/navbar.html' ?>;

<!-- Begin page content -->
<main role="main" class="container">
  
<!-- Header -->
<header class="intro-header">
   <div class="container">
      <div id="contact" class="intro-message">
         <h2>Contact</h2>
         <hr class="intro-divider">
         <ul class="list-inline intro-social-buttons">
            <li class="list-inline-item">
               <a href="https://www.youtube.com/channel/UCk7SovF_qWeRBKnetIUzqJg/videos" 
                  class="btn btn-secondary" target="_blank"><i class="fa fa-youtube fa-fw"></i>
                  <span class="network-name">Youtube</span>
               </a>
            </li>
            <li class="list-inline-item">
               <a href="https://github.com/fanitriastowo" target="_blank" class="btn btn-secondary">
                  <i class="fa fa-github fa-fw"></i>
                  <span class="network-name">Github</span>
               </a>
            </li>
            <li class="list-inline-item">
               <a href="mailto:fani.triastowo@gmail.com" target="_blank" class="btn btn-secondary">
                  <i class="fa fa-google fa-fw"></i>
                  <span class="network-name">Mail</span>
               </a>
            </li>
            <li class="list-inline-item">
               <a href="https://www.linkedin.com/in/fani-triastowo-273745b8?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base%3BTw5gsafETnuwu2Y4vkkRig%3D%3D" 
                  target="_blank" class="btn btn-secondary"><i class="fa fa-linkedin fa-fw"></i>
                  <span class="network-name">LinkedIn</span>
               </a>
            </li>
         </ul>
      </div>
   </div>
</header>



<!-- Page Content -->
<section id="about" class="content-section-a">

   <div class="container">
      <div class="row">
         <div class="col-lg-5 ml-auto">
            <hr class="section-heading-spacer">
            <div class="clearfix"></div>
            <h2 class="section-heading">Who am I?</h2>
            <p class="lead">Saya Fani Triastowo, saat ini saya adalah software engineer 
              di salah satu kampus swasta di Purwokerto. 
              Saya lahir di kota kecil di Jawa Tengah bernama Purwokerto. 
              Kota yang sejuk dan indah dengan dikelilingi pegunungan. 
              Saya sudah memulai coding di kampus sejak 2010,
              dan ketertarikan saya ada pada musik dan programming karena 
              2 hal tersebut yang selalu membuat saya terpukau meskipun telah lama saya kerjakan tanpa rasa bosan.
              <a href="https://www.linkedin.com/in/fani-triastowo-273745b8?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base%3BTw5gsafETnuwu2Y4vkkRig%3D%3D" target="_blank">detail</a>
            </p>
         </div>
         <div class="col-lg-5 mr-auto">
            <img class="img-fluid rounded-circle" src="img/me.png" alt="My Photo">
         </div>
      </div>

   </div>
   <!-- /.container -->
</section>

<section class="content-section-b">

   <div class="container">

      <div class="row">
         <div class="col-lg-5 mr-auto order-lg-2">
            <hr class="section-heading-spacer">
            <div class="clearfix"></div>
            <h2 class="section-heading">My Career</h2>
            <p class="lead">
              Saya memulai career Software Development secara professional sejak 2014, 
              saat itu saya masih kuliah dan project pertama saya adalah aplikasi desktop pendataan alumni 
              di untuk salah satu SMK di kota Purwokerto dengan berbasis Java Swing. 
              Saat ini saya sedang mengerjakan sistem pendaftaran mahasiswa baru berbasis online dengan terintegrasi 2 bank.
            </p>
         </div>
         <div class="col-lg-5 ml-auto order-lg-1">
            <img class="img-fluid" src="img/career.png" alt="">
         </div>
      </div>

   </div>
   <!-- /.container -->

</section>
<!-- /.content-section-b -->

<section class="content-section-a">

   <div class="container">

      <div class="row">
         <div class="col-lg-5 ml-auto">
            <hr class="section-heading-spacer">
            <div class="clearfix"></div>
            <h2 class="section-heading">My Experiences</h2>
            <p class="lead">Saya banyak pengalaman dalam software development baik yg open source maupun closed source.
              Project open-source ada di akun <a href="https://github.com/fanitriastowo" target="_blank">github</a> saya.
              Kebanyakan dari project yang telah saya kerjakan adalah aplikasi berbasis Web menggunakan Java dengan Full Framework seperti 
              Java Spring MVC, Spring Data JPA, Spring Security, Twitter Bootstrap, Git, Maven, Codeigniter, JQuery dan lain sebagainya.
              Saya juga telah mendalami DSS (Decision Support System) atau Sistem Pendukung Keputusan yaitu metode penentuan suatu keputusan manusia yang berbasis aplikasi.
            </p>
         </div>
         <div class="col-lg-5 mr-auto ">
            <img class="img-fluid" src="img/github.png" alt="my works">
         </div>
      </div>

   </div>
   <!-- /.container -->

</section> 
<!-- /.content-section-a -->

</main>

<<!-- include footer -->
<?php include 'template/footer.html'; ?>

<!-- include js -->
<?php include 'template/js.html'; ?>
</body>
</html>