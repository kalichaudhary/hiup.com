<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hiuptwentyfour
 */
?>
 
 <!-- =======================
Footer START -->
 <footer class="pt-0 bg-blue rounded-4 position-relative mx-2 mx-md-4 mb-3">
     <!-- SVG decoration for curve -->
     <figure class="mb-0">
         <svg class="fill-body rotate-180" width="100%" height="150" viewBox="0 0 500 150" preserveAspectRatio="none">
             <path d="M0,150 L0,40 Q250,150 500,40 L580,150 Z"></path>
         </svg>
     </figure>

     <div class="container">
         <div class="row mx-auto">
             <div class="col-lg-6 mx-auto text-center my-5">
                 <!-- Logo -->
                 <div class="hstack justify-content-center gap-3">
                     <a href="#"><img class="h-40px" src="assets/images/logo.svg" alt="Hiup logo"></a>
                     <div class="vr"></div>
                     <p class="m-0 text-start">Powered By <br>
                         <a href="#"><img class="light-mode-item h-40px" src="assets/images/olive-group-white.webp" alt="Hiup logo"></a>
                         <a href="#"><img class="dark-mode-item h-40px" src="assets/images/olive-group-black.webp" alt="Hiup logo"></a>
                     </p>
                 </div>
                 <p class="mt-3 text-white">Hiup Solutions, Naranchour-01, Naxal, Kathmandu</p>
                 <!-- Links -->
                 <ul class="nav justify-content-center text-primary-hover mt-3 mt-md-0">
                     <li class="nav-item"><a class="nav-link text-white" href="about.html">About</a></li>
                     <li class="nav-item"><a class="nav-link text-white" href="#">Terms</a></li>
                     <li class="nav-item"><a class="nav-link text-white" href="#">Privacy</a></li>
                     <li class="nav-item"><a class="nav-link text-white" href="career.html">Career</a></li>
                     <li class="nav-item"><a class="nav-link text-white" href="contact-us.html">Contact us</a></li>
                     <li class="nav-item"><a class="nav-link text-white pe-0" href="#">Cookies</a></li>
                 </ul>
                 <!-- Social media button -->
                 <ul class="list-inline mt-3 mb-0">
                     <li class="list-inline-item">
                         <a class="btn btn-white btn-sm shadow px-2 text-facebook" href="#">
                             <i class="fab fa-fw fa-facebook-f"></i>
                         </a>
                     </li>
                     <li class="list-inline-item">
                         <a class="btn btn-white btn-sm shadow px-2 text-instagram" href="#">
                             <i class="fab fa-fw fa-instagram"></i>
                         </a>
                     </li>
                     <li class="list-inline-item">
                         <a class="btn btn-white btn-sm shadow px-2 text-twitter" href="#">
                             <i class="fab fa-fw fa-twitter"></i>
                         </a>
                     </li>
                     <li class="list-inline-item">
                         <a class="btn btn-white btn-sm shadow px-2 text-linkedin" href="#">
                             <i class="fab fa-fw fa-linkedin-in"></i>
                         </a>
                     </li>
                 </ul>
                 <!-- Bottom footer link -->
                 <div class="mt-3 text-white">©2022 <a href="https://www.olivegroup.io/" class="text-reset btn-link text-primary-hover" target="_blank">Hiup Solutions</a>. All
                     rights
                     reserved. </div>
             </div>
         </div>
     </div>
 </footer>
 <!-- =======================
Footer END -->

 <!-- Cookie alert box START -->
 <div class="alert alert-light fade show position-fixed start-0 bottom-0 z-index-99 rounded-3 shadow p-4 ms-3 mb-3 col-10 col-md-4 col-lg-3 col-xxl-2" role="alert">
     <div class="text-dark text-center">
         <!-- Image -->
         <img src="assets/images/element/27.svg" class="h-50px mb-3" alt="cookie">
         <!-- Content -->
         <p class="mb-0">This website stores cookies on your computer. To find out more about the cookies we use, see
             our <a class="text-dark" href="#"><u> Privacy Policy</u></a></p>
         <!-- Buttons -->
         <div class="mt-3">
             <button type="button" class="btn btn-success-soft btn-sm mb-0" data-bs-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">Accept</span>
             </button>
             <button type="button" class="btn btn-danger-soft btn-sm mb-0" data-bs-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">Decline</span>
             </button>
         </div>
     </div>
 </div>
 <!-- Cookie alert box END -->

 <!-- Back to top -->
 <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>
 <?php wp_footer(); ?>
 </body>

 </html>