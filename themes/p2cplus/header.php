<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"><![endif]-->
<!--[if IE 7 ]> <html class="ie ie7 no-js" lang="en"> <![endif]--><!--[if IE 8 ]>
<html class="ie ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9 ]> <html class="ie ie9 no-js" lang="en"><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->

<html id="top">

<head> 

<!--
***************************************************************** 
Fluid Baseline Grid v1.0.0 Designed & Built by Josh Hopkins and 40 Horse, http://40horse.com Licensed under Unlicense, http://unlicense.org/
*****************************************************************
-->

  <title>P2C+</title>
  <meta charset="utf-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <meta name="description" content="The website for Power To Change Students Conference P2C Plus." />
  <meta name="author" content="Justin Alm">
  <meta name="keywords" content="conference, schedule, students, mobile first, power to change, P2C+, Christian, evangelism, Jesus Christ" />

  <!-- Optimized mobile viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Place favicon.ico and apple-touch-icon.png in root directory -->
  <link href="/plus/wp-content/themes/p2cplus/style.css" rel="stylesheet" />
  <!-- Minimized jQuery from Google CDN -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

</head>

<body>
  
    <header><!-- Begin the Header Container -->
       <div class="logo">    
         <a href="/plus/home/"><img src="/plus/wp-content/themes/p2cplus/images/logo.png"></a>
       </div>
       <div class="logo-full">    
         <a href="/plus/home/"><img src="<?php global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta($post=141, 'header_logo', true); ?>"></a>
       </div>

       <div id="nav">
           <a class="drawer" href="#"><li><?php global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta($post=155, 'nav_menu', true); ?> <span class="icon" id="smallmenu">i</span></li></a>
         <ul class="info">
           <a href="/plus/home"><li><?php global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta($post=155, 'nav_home', true); ?> <span class="icon" id="smallmenuhome">&iuml;</span></li></a>
           <a href="/plus/speakersbands/"><li><?php global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta($post=155, 'nav_speakers_bands', true); ?> <span class="icon" id="smallmenu">O</span></li></a>
           <a href="/plus/schedule/"><li><?php global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta($post=155, 'nav_schedule', true); ?> <span class="icon" id="smallmenu">P</span></li></a>
           <a href="/plus/workshops/"><li><?php global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta($post=155, 'nav_workshops', true); ?> <span class="icon" id="smallmenu">@</span></li></a>
           <a href="/plus/outreach/"><li><?php global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta($post=155, 'nav_outreach', true); ?> <span class="icon" id="smallmenu">9</span></li></a>
           <a href="/plus/opportunities/"><li><?php global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta($post=155, 'nav_opportunities', true); ?> <span class="icon" id="smallmenu">$</span></li></a>
         </ul>
      </header>
      
    </div><!-- End of Header Contianer -->

<div class="wrapper">
