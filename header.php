<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <?php wp_head(); ?>
	<title>Welcome to The Cockentrice | Charcuterie Restaurant | Atlanta</title>
</head>
<body>
   <section id="header">
	  <div class="social-bar">
		 <div class="social-bar-container">
			<div class="social-bar-icons">
			   <div class="address">456 Quay Street, Auckland</div>
			   <div class="phone-number">(09) 528 4456</div>
			   <div class="social-icons">
				  <a href="#"><i class="fab fa-facebook-f"></i></a>
				  <a href="#"><i class="fab fa-twitter"></i></a>
				  <a href="#"><i class="fab fa-instagram"></i></a>
			   </div>
			</div>
		 </div>
	  </div>
	  <div class="menu-bar">
		 <div class="menu-bar-container">
			<div class="logo">
			   <img src="https://i.postimg.cc/xjwShwh1/The-Cockentrice-Horizontal4.png" alt="">
			</div>

			 <?php wp_nav_menu(
				array(
					 'theme-location' => 'top_menu',
					 'menu' => 'main_menu',
					 'menu-class' => 'top-menu',
					 'container' => 'ul',
				)
				); ?> 
			<!-- <ul class="top-menu">
			 <li><a href="#">Home</a></li>
			 <li><a href="#">Menu</a></li>
			 <li><a href="#">Gallery</a></li>
			 <li><a href="#">About</a></li>
			 <li><a href="#">Find Us</a></li>
			 <li><a href="#">Reservations</a></li>
			 </ul> -->
		 </div>
	  </div>
   </section>

