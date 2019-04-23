<!DOCTYPE html>
<html lang="en-US" class="no-js">
  <head>  
        <!-- Mobile Specific Meta -->
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>   
        <!-- Favicon-->
        <?php       
   
             foreach ($logo->result() as $row)  
         {  
           ?>
        <!-- Favicon-->
        <link rel="shortcut icon" href="<?php echo $row->favi_icon;?>">

           <?php

          } 

         ?>
          
        <!-- Author Meta -->
        <meta name="author" content="colorlib">
        <!-- Site Title -->
        <title><?php echo $metadata['title']; ?> </title>
    <meta name="description" content="<?php echo $metadata['description']; ?>" />
    <meta name="keywords" content="<?php echo $metadata['keywords']; ?>">
    
     <link rel="canonical" href="<?php echo $metadata['canonical']; ?>" /> 
     

     
 <meta property="og:description" content="<?php echo $metadata['og_desc']; ?>"/>
<meta property="og:title" content="<?php echo $metadata['og_title']; ?>"/>
<meta property="og:url" content="<?php echo $metadata['og_url']; ?>"/>
<meta property="og:keyword" content="<?php echo $metadata['og_key']; ?>"/>
<meta property="og:image" content="<?php echo $metadata['og_imageurl']; ?>"/>

<meta property="og:type" content="website"/>
<meta property="og:locale" content="en_GB"/> 
  
     
     
        <!-- meta character set -->
        <meta charset="UTF-8">

        
      <!--
      CSS
      ============================================= -->
      <link rel="stylesheet" href="<?= base_url(); ?>assets/css/linearicons.css">
            <link rel="stylesheet" href="<?= base_url(); ?>assets/css/font-awesome.min.css">
            <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css">
            <link rel="stylesheet" href="<?= base_url(); ?>assets/css/magnific-popup.css">
            <link rel="stylesheet" href="<?= base_url(); ?>assets/css/nice-select.css">                         
            <link rel="stylesheet" href="<?= base_url(); ?>assets/css/animate.min.css">
            <link rel="stylesheet" href="<?= base_url(); ?>assets/css/owl.carousel.css">              
            <link rel="stylesheet" href="<?= base_url(); ?>assets/css/jquery-ui.css">           
            <link rel="stylesheet" href="<?= base_url(); ?>assets/css/main.css">
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
            
             <script charset="UTF-8" src="//cdn.sendpulse.com/js/push/b842a1068bd517a020d5e2fc2262fa23_1.js" async></script>
          
 
  
  
    <script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "Capital Info Solution",
    "url": "https://www.capitalinfosol.com/",
    "logo": "https://www.capitalinfosol.com/assets/img/capital_logo.png",
    "contactPoint": [
        {
            "@type": "ContactPoint",
            "telephone": "+91 86 86 86 42 86",
            "contactType": "customer service",
            "email": "capitalinfosol@gmail.com",
            "areaServed": [
                "India"
            ],
            "contactOption": [
                "HearingImpairedSupported"
            ],
            "availableLanguage": [
                "English"
            ]
        }
    ],
   
"sameAs": [
 	"https://www.facebook.com/capitalinfosolution",
 	"https://twitter.com/Capitalinfosol1",
 	"https://www.linkedin.com/company/capitalinfosolutions",
    "https://in.pinterest.com/capitalinfo/",
    "https://www.instagram.com/capitalinfosolutions/"

 	]
}
</script>


<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "WebSite",
    "name": "Capital Info Solutions",
    "alternateName": "Salesforce Training in Hyderabad",
    "url": "https://www.capitalinfosol.com/"
}
</script>

  <!--
      CSS
      ============================================= -->


   <style type="text/css">
   
   .youtube
   {
          background: #ffffff !important;
    color: #f98f17 !important;
    width: 25px;
    height: 25px;
   
    padding-right: 3px; 
   }

   
   .myreg
   {
        width: 370px !important;
   }

   .reg_deg
   {
        background: #fff;
    height: 34px;
    line-height: 34px;
    border-radius: 8px;
    color: #f98f17 !important;
    /*margin-left: 32px;*/
   }

   .reg_deg:hover
   {
 background: #102b42ed !important;
 color: #fff !important;

   }

   .reg_he1
   {
    height: 83px !important;
   }




 #header #logo img {
    margin-left: -40px;
}


.nav-menu>li {
    margin-left: 0px !important;
}
               .mylogo {
    width: 174px;
    margin-left: -86px;
    margin-top: -12px;
}



           .blin_mob {
    font-size: 20px;
    float: left;
    color: #f5f500;
    width: 121px;
    margin-top: -3px;
    margin-left: 4%;
}

             .blin_mob1
            {
                      font-size: 17px;
    float: left;
    color: #014783;
    width: 374px;
    margin-left: -21%;
    font-weight: bold;

            }

            .header-top
            {

                 height: 56px;
                  background: #f98f17;
            }

            .social_mob  
            {
                font-size: 30px; 

            }
             .head_left
             {
                background: white;
    height: 48px;
       margin-left: -200px;

             }
             .phone_mob
             {
                color: #fff

             }
             .course_menu
             {
                margin: 23px -80px 33px 67px;
                padding: 10%;
                box-shadow: rgba(127, 137, 161, 0.25) 0px 0px 30px;
                   background: #102b42ed ;
                      width: 818px !important;


                height: 180px;
                display: none;color: rgb(255, 255, 255);

             }

                #social_icons

             {

                /*margin-left: 14%;*/
             }

             #header #logo img {
   
         margin-left: -40px;
        }

        .nav-menu ul li a {
    padding: 6px 3px;
    color: #fff;
    transition: 0.3s;
    display: block;
    font-size: 13px;
    text-transform: none;
    text-decoration: unset;

}
.nav-menu a {
  font-size: 14px;
    text-transform: uppercase;
    outline: none;
        padding: 0 15px 0px 8px;
  
       color: #014783;
}

  div.b {
       width: 87px;
    height: 47px;
    background-color: white;
    -ms-transform: skewY(20deg);
    -webkit-transform: skewY(20deg);
    transform: skewY(34deg);
    margin-top: 30px;
        color: white;
}
             /*header part end*/
     



.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    /*background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4); */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 44%;
    margin-top: 6%;

} 

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}





a:hover
{
  text-decoration: none;
}
h4
{
  margin: 12px 0px !important;
    color: #f7631b;
    font-size: 14px !important;
    text-align: center;
}

.single-feature > .title >  h1 {
    font-size: 15px;
    COLOR: WHITE;
    margin-top: 10px;
    margin-bottom: 10px;
}
.no-js .owl-carousel
{
    margin-top: -30px;
}
.mb-10 {
    margin-top: 50px;
}

 .single-detials h4 
      {
        margin: 20px 0px;color: #f98f17; font-size: 18px;
      }
.cta-two-area {
    background: #f98f17 !important;
      }
      li > a >h2
      {
         font-size: 14px !important;
    padding: 0 8px 0px 8px;
    text-decoration: none;
    display: inline-block;
    color: white;
    /* font-weight: 500; */
    font-size: 13px;
    outline: none;
    /* font-weight: 600; */
    font-family: sans-serif;
      }
      li > a:hover >h2
      {
        color:#f7631b;
      }

      
      .un
      {
        text-decoration: unset;
      }

      .auto_top
      {
        margin-top: 6%;
      }


    
          @media only screen and (max-width: 450px) 
        {
            
               .youtube
               
          {
              
          background: #ffffff !important;
          color: #f98f17 !important;
          padding-right: 3px; 
             width: 17px !important;
    height: 18px !important;
        }
            .new_user
            {
                
    margin-left: -52px !important;
            }

  .list_mobile1

  {
    height: 38px;
  }
  
  .devop_mob
  {
  
      margin-top: 5%;
      
      }
      
      .header-top {
    height: 140px !important;

}

.sale_menu {
    padding-top: 0px !important;
    font-size: 11px !important;
    padding: 18px 83px 10px 0px !important;
}
.sale_menu1
{

            padding: 0px 1px 0px 1px;
    margin-left: 25% !important;
    padding-left: 0px;
}

.sale_down
 {
  
     padding: 30px !important;
 }
 
 #mobile-nav {  
   
    width: 260px !important;
    
}
.my_top
{
margin-top: 28%;

}

.course_menu {
    margin: -12px -109px 35px 43px;
    /* padding: 0%; */
    box-shadow: rgba(127, 137, 161, 0.25) 0px 0px 30px;
     background: #102b42ed ;
    width: 890px !important;
    height: 500px !important;
    color: rgb(255, 255, 255);
    display: block;
}

.all_course
{    /*margin-top: 17%;*/

}

.menu_left
{

    margin-left: -19% !important;  
}

.allsales_menu
{

    width: 212px !important;
   
    margin-top: -21% !important;
}

.force_menu
{
    margin-top: 0% !important;
}
.force_menu1
{
    margin-top: -9%;
}  

 .auto_top
      {
        margin-top: 2%;
      }

      .social_type {
      margin-left: -80px !important;
    margin-top: 30px !important;
}
.header-top .header-top-left a, .header-top .header-top-right a {
    margin-right: 10px;
    line-height: 19px !important;
}

.myinput
{
    width:100% !important;
}

}


@media only screen and (min-width: 750px) 
{
 .sale_down
 {
  display: none;
     padding: 30px;
 }

}

.ser_height
{
    height: 155px !important;
        margin: 24px -59px 0 0 !important;
}

.reso_height
{
    height: 97px !important;
    margin: 24px -59px 0 0 !important;
    
}
.course_height
{
        height: 538px !important;
            margin: 32px -502px 0 0 !important;
}

.nav-menu ul {
   
    background: #102b42ed !important;
    
}

.sf-arrows .sf-with-ul:after {
    content: "" !important;
    /* position: absolute; */
    right: 0px;
    font-family: FontAwesome;
    font-style: normal;  
    font-weight: normal;
}

@media only screen and (max-width: 450px) 
{
 .course_height 
 {
      height: 1594px !important;
 }
 
 .sale_menu {
    padding-top: 0px !important;
    font-size: 10px !important;
         padding-left: 0px !important; 
  /*  padding: 25px 83px 10px 0px !important;*/
}

#mobile-nav ul li li {
    padding-left: 0px !important;
}

.header-top ul li {
    
    padding-top: 7px !important;
}
.header-top {
    height: 140px !important;
}


 .force_menu 
 {
      font-size: 13px !important;
 }
 .register_display
 {
  display: none;
 }


 

#header {
    position: unset !important;
    left: 0;  
    top: 0;
    right: 0;
    transition: all 0.5s;
    z-index: 997;
}

.about-banner {
   
    background-size: cover;
    height: 120px !important;
}

.our_services {
    margin-top: -182px !important;
   
}
   .course-banner {
    
    background-size: cover;
    height: 121px;
}


.register_menu
{
   height:100px; box-shadow: rgba(127, 137, 161, 0.25) 0px 0px 30px; background: rgba(0, 0, 0, 0.64);width: 115px;height: 106px;
}

.reg_height
{
      height: 72px !important;
}  

.reg_left
{
    
    margin-left: 40px;
    background: #ffffff;
    height: 32px;
    border-radius: 14px;
    border-color: #171a2e;
       color: #f98f17 !important;
    margin-top: 3px;
    padding: 8px !important;
    
}

.reg_left:hover
{
    
      
    background: #428bca!important;
    
       color: #f98f17 !important;
        text-decoration: none !important;
}

.aws_left {
    margin-left: -2%;
}

.single-feature:hover .title {

    background: #107ad67a !important;
}


.modal {
   
   width: 100% !important;  
    
  margin-left: 0% !important; 
}
/*input[type=text], input[type=password] {*/
/*    width: 100% !important;*/
  
/*}*/

.my_icon
{
    display:none !important;
}
.fa-2x {
    font-size: 22px !important;
}

}

.about-banner {
   
    background-size: cover;
    height: 120px !important;
}

.our_services {
    margin-top: -182px !important;
   
}



        </style>

        <style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
 width: 25%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
     /* margin-left: 2%;*/
}

/* Set a style for all buttons */
button {
     background-color: #f98f17;
    color: white;
 
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    width: 89px;
   
    height: 30px;
    line-height: 30px;
    color: #fff;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
width: auto;
    padding: 0px 19px;
    background-color: #f44336;
    margin-top: 2%;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
/*  margin: 24px 0 12px 0;*/
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

/*.container {
  padding: 16px;
}*/

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 33%; /* Full width */
  height: 100%; /* Full height */
 /* overflow: auto;*/ /* Enable scroll if needed */
/*  background-color: rgb(0,0,0); /* Fallback color */
  /*background-color: rgba(0,0,0,0.4); 
*/  padding-top: 60px;
   margin-left: 50%;

}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

.modal-backdrop {
   
    background-color: transparent !important; 
}



.modal-header {
  padding: 0;
}
.modal-header .close {
  padding: 10px 15px;
}
.modal-header ul {
  border: none;
}
.modal-header ul li {
  margin: 0;
}
.modal-header ul li a {
  border: none;
  border-radius: 0;
}
.modal-header ul li.active a {
  color: #e12f27;
}
.modal-header ul li a:hover {
  border: none;
}
.modal-header ul li a span {
  margin-left: 10px;
}
.modal-body .form-group {
  margin-bottom: 10px;
}


.header-top ul li 
{
    /*display: inline-block;*/
    margin-left: 0px !important; 
}

.reg_mob
{
min-width: 0px !important; 
}  

.reg_col
{
  color: #fff;
}

.mylogin
{
    width:80% !important;
}

  .insta {
    background-color: #fff;
    border-radius: 5px;
    color: #f98f17; 
}

.fa:hover {
    opacity: unset !important;
}

.myinsta:hover
{
        background: #15558c !important;
}

..mob_land
{
    margin-top:6px;
}

.fa-2x {
    font-size: 24px !important;
}
</style>
    
<style>

@media only screen and (max-width: 768px)      
  
    
{
.mail_land
    {
            font-size: 14px !important;
    }
    
   
.fa-2x { 
    font-size: 14px !important;
    margin-top: 6px !important;
}

a.reg_left.reg_deg.sf-with-ul {
    margin-top: 3px !important;
}
.header-top {
    height: 125px !important;
    
}


.my_top {
    width: 32px !important;
    float: right;
    margin-top: -50px !important;
}

#mobile-nav-toggle {

    top: 12%!important;

}
#mobile-nav-toggle i {
    color: #ffffff !important;

}
.head_left {
    background: #f98f17 !important;
   
}

div.b {
    
    background-color: #f98f17 !important;
   
}


.search_course {
    height: 1962px !important;
}

.mob_land
{
    margin-top:0px;
}

.cnt223 {
    /* min-width: 35% !important; */
    
    width: 72% important;
    min-height: 150px;
    margin: 7px auto !important;
}

header-top ul li {
 
    margin-top: 5px !important;
}
.course_height {
   height: auto !important;
    
}

#mobile-nav ul li li {
    padding-left: 0px !important;
}
.aws_left {
    margin-left: -2% !important;
}
.mymenu_landscape
{
    padding-left: 0px !important;
}

}

</style>

        </head>  
    
    <script type="text/javascript">

        $(document).ready(function() {
<?php if($this->session->flashdata('success')): ?>
    // <p><?php echo $this->session->flashdata('success'); ?></p>

    alert('your Registration is successfull,Admin will Accept your request and mail You soon!');
<?php endif; ?>

});

</script>

  <header id="header" id="home" style="    background: #fff;">
      
      
      <div class="header-top" >
                <div class="container" style="width:100%">
                    <div class="row">
                        <div class="col-lg-4 col-sm-4 col-4 header-top-left no-padding head_left" >
         
            </div>
                        
            
            
                        <div class="b"></div>
            <?php  
              
              foreach ($setting_list->result() as $row)  
              {  
              ?>
              
              <div style="   " class="col-lg-4 col-sm-4 header-top-left no-padding mob_land" >
                <a style="color: #fff;font-size:14px"><span class="lnr fa fa-phone"></span>  <?php echo $row->mobile_no;?></a>
                
                <a class="mail_land" style="color: #fff;font-size:14px"><span class="lnr fa fa-envelope"></span><?php echo $row->mail_id;?></a> 
                
               
              </div>
              
              
              
              
           <div id ="social_icons" class="col-lg-4 col-sm-4 col-4 header-top-right no-padding " >
           
                                <ul class="social_type" style="margin-bottom: 0px;">
                                 
 <nav id="nav-menu-container register_display" >
            <ul class="nav-menu" >

       
              <li class="menu-has-children " ><a class="reg_left reg_deg"  href="javascript:void(0);"  style=" ">Register Now</a>
                <ul class="register_menu reg_height reg_he1">
                  
                  <div class="col-md-4"> 

                   <li class="list_mobile1 devop_mob reg_mob" style=" "><a href="<?= base_url(); ?>faculty-registration" style="color: #000" ><p class="reg_col">Faculty </p></a></li><br>

                    
                      
                        <li class="list_mobile1 reg_mob" style="   "><a href="<?= base_url(); ?>student" style="color: #000" ><p class="reg_col">Student</p></a></li> 
                   
                  </div>
                  
                </ul>
              </li>  
            </ul>
          </nav>
                                
                          
         <li><a href="<?php echo $row->facebook_link;?>" target="_blank"><i class="fa fa-facebook-square fa-2x social_mob" style="     "></i></a></li>
                  
          <li><a href="<?php echo $row->twitter_link;?>" target="_blank"><i class="fa fa-twitter-square fa-2x  social_mob" style="    "></i></a></li>
                  
         <li><a href="<?php echo $row->linkedin_link;?>" target="_blank"><i class="fa fa-linkedin-square fa-2x  social_mob" style="       "></i></a></li>
                  
        <li><a href=" <?php echo $row->pinterest_link;?>" target="_blank"><i class="fa fa-pinterest-square fa-2x  social_mob" style="       "></i></a></li>
        
      <li><a href=" <?php echo $row->instagram;?>" target="_blank"><i class="fa fa-instagram fa-2x  social_mob insta myinsta" style="      "></i></a></li>
      
       <li><a href=" <?php echo $row->youtube;?>" target="_blank"><i class="fa fa-youtube fa-2x  social_mob insta myinsta youtube" style="     "></i></a></li>
                  
                </ul>           
              </div>
                
              <?php 
              }  
            ?>
            
          
          </div>                              
        </div>
      </div>
           
            <div class="container main-menu" style="    background: #fff;    border-bottom-color: #fff;">
                <div class="row align-items-center justify-content-between d-flex">
             

           
          <div >
        <a href="<?=base_url(); ?>">
          <img src="<?=base_url(); ?>assets/img/capital_logo.png" alt="capital info solutions" class="mylogo" />
        </a>
          </div>

          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li><a href="<?=base_url(); ?>" class="un" >Home</a></li>
          

              <li><a href="<?= base_url(); ?>about-us" class="un">About Us</a></li>
              
              
              <li class="menu-has-children"><a href="<?= base_url(); ?>courses" class="un" >courses</a>

                <ul class="course_menu course_height " style="     box-shadow: rgba(127, 137, 161, 0.25) 0px 0px 30px;
                background: rgba(0, 0, 0, 0.64);z-index:9999" >
                  
                  <div class="col-md-12">

                    <div class="col-md-4 mymenu_landscape">
                  
                    <li class="list_mobile1"><a class="sale_menu menu_left" href="<?= base_url(); ?>salesforce-crm"><p class="sale_menu1 force_menu" style="    color: #f98f17;font-size: 17px">Salesforce Training</p></a></li>
                    
                    
                   

                      <li class="list_mobile1 all_course" ><i class="lnr lnr-chevron-down sale_down force_menu1"></i><a href="<?= base_url(); ?>courses/salesforce-crm-training"  class="sf-with-ul"><p class=" force_menu "> CRM/Admin   </p></span></a></li>

                        <li class="list_mobile1 all_course" ><i class="lnr lnr-chevron-down sale_down force_menu1"></i><a href="<?= base_url(); ?>courses/salesforce-development"  class="sf-with-ul"><p class=" force_menu "> Development  </p></span></a></li>

           <li class="list_mobile1 all_course" ><i class="lnr lnr-chevron-down sale_down force_menu1"></i><a href="<?= base_url(); ?>courses/salesforce-integration"  class="sf-with-ul"><p class="s force_menu "> Integration 
</p></span></a></li>

                            <li class="list_mobile1 all_course" ><i class="lnr lnr-chevron-down sale_down force_menu1"></i><a href="<?= base_url(); ?>courses/salesforce-lightning-training"  class="sf-with-ul"><p class=" force_menu ">
 Lightning  </p></span></a></li>

  


                    

                  </div>

                       <div class="col-md-4 mymenu_landscape">

                          <li class="list_mobile1"><a class="sale_menu menu_left" href="<?= base_url(); ?>courses/devops-training-in-hyderabad"><p class="sale_menu1 devop_left force_menu" style=" color: #f98f17;font-size: 17px
">DevOps </p></a></li>

 <li class="list_mobile1 all_course" ><i class="lnr lnr-chevron-down sale_down force_menu1"></i><a href="<?= base_url(); ?>courses/devops-training-in-hyderabad"  class="sf-with-ul"><p class=" force_menu devop_left menu_display " >Fundamentals - Devops Overview </p></span></a></li>

                        <li class="list_mobile1 all_course" ><i class="lnr lnr-chevron-down sale_down force_menu1"></i><a href="<?= base_url(); ?>courses/devops-training-in-hyderabad"  class="sf-with-ul"><p class="force_menu devop_left menu_display " style="  ">DevOps Tools Covered</p></span></a></li>

                          <li class="list_mobile1 all_course" ><i class="lnr lnr-chevron-down sale_down force_menu1"></i><a href="<?= base_url(); ?>courses/devops-training-in-hyderabad"  class="sf-with-ul"><p class="force_menu devop_left menu_display " >Cloud Computing Models</p></span></a></li>

                            <li class="list_mobile1 all_course" ><i class="lnr lnr-chevron-down sale_down force_menu1"></i><a href="<?= base_url(); ?>courses/devops-training-in-hyderabad"  class="sf-with-ul"><p class=" force_menu devop_left menu_display " >Lifecycle of DevOps & its Workflow </p></span></a></li>


                            <li class="list_mobile1 all_course" ><i class="lnr lnr-chevron-down sale_down force_menu1"></i><a href="<?= base_url(); ?>courses/devops-training-in-hyderabad"  class="sf-with-ul"><p class=" force_menu  devop_left menu_display" >Source Code Management Tools
</p></span></a></li>

     <li class="list_mobile1 all_course" ><i class="lnr lnr-chevron-down sale_down force_menu1"></i><a href="<?= base_url(); ?>courses/devops-training-in-hyderabad"  class="sf-with-ul"><p class="force_menu  devop_left menu_display" >Continous Integration

</p></span></a></li>
                    
                       </div>

                          <div class="col-md-4 mymenu_landscape">

                          <li class="list_mobile1"><a class="sale_menu menu_left" href="<?= base_url(); ?>courses/oracle-dba"><p class="sale_menu1 oracle_left force_menu " style="      color: #f98f17;font-size: 17px
">Oracle DBA</p></a></li>


<li class="list_mobile1 all_course" ><i class="lnr lnr-chevron-down sale_down force_menu1"></i><a href="<?= base_url(); ?>courses/oracle-dba"  class="sf-with-ul"><p class=" force_menu oracle_left menu_display" >Introduction of Oracle DBA
</p></span></a></li>

                        <li class="list_mobile1 all_course" ><i class="lnr lnr-chevron-down sale_down force_menu1"></i><a href="<?= base_url(); ?>courses/oracle-dba"  class="sf-with-ul"><p class=" force_menu oracle_left force_menu menu_display" >Oracle DBA Architecture</p></span></a></li>

                          <li class="list_mobile1 all_course" ><i class="lnr lnr-chevron-down sale_down force_menu1"></i><a href="<?= base_url(); ?>courses/oracle-dba"  class="sf-with-ul"><p class="force_menu  oracle_left menu_display " style="      ">Installation of Oracle</p></span></a></li>

                            <li class="list_mobile1 all_course" ><i class="lnr lnr-chevron-down sale_down force_menu1"></i><a href="<?= base_url(); ?>courses/oracle-dba"  class="sf-with-ul"><p class=" force_menu oracle_left menu_display" >Database structure and management</p></span></a></li>

                            <li class="list_mobile1 all_course" ><i class="lnr lnr-chevron-down sale_down force_menu1"></i><a href="<?= base_url(); ?>courses/oracle-dba"  class="sf-with-ul"><p class=" force_menu oracle_left menu_display" >Oracle Database 12c New Features </p></span></a></li>

                             <li class="list_mobile1 all_course" ><i class="lnr lnr-chevron-down sale_down force_menu1"></i><a href="<?= base_url(); ?>courses/oracle-dba"  class="sf-with-ul"><p class="force_menu oracle_left menu_display" >Oracle Database in 11g Release  </p></span></a></li>
                    
                    
                   

                       </div>

                                 <div class="col-md-12 ">
                                    <hr style="    width: 750px;margin-top: 1%">



                         <div class="col-md-4 mymenu_landscape">

                          <li class="list_mobile1"><a class="sale_menu menu_left" href="<?= base_url(); ?>courses/amazon-web-services"><p class="sale_menu1 aws_left force_menu" style="  color: #f98f17;margin-top: 6%;
">AWS </p></a></li>

<li class="list_mobile1 all_course" ><i class="lnr lnr-chevron-down sale_down force_menu1"></i><a href="<?= base_url(); ?>courses/amazon-web-services"  class="sf-with-ul"><p class=" force_menu  aws_left menu_display" style="   ">Introduction to Cloud Computing</p></span></a></li>

                        <li class="list_mobile1 all_course" ><i class="lnr lnr-chevron-down sale_down force_menu1"></i><a href="<?= base_url(); ?>courses/amazon-web-services"  class="sf-with-ul"><p class=" force_menu aws_left menu_display " style="   ">Introduction to AWS
</p></span></a></li>

                          <li class="list_mobile1 all_course" ><i class="lnr lnr-chevron-down sale_down force_menu1"></i><a href="<?= base_url(); ?>courses/amazon-web-services"  class="sf-with-ul"><p class=" force_menu aws_left menu_display " style="  ">Elastic Compute cloud Essentials</p></span></a></li>

                            <li class="list_mobile1 all_course" ><i class="lnr lnr-chevron-down sale_down force_menu1"></i><a href="<?= base_url(); ?>courses/amazon-web-services"  class="sf-with-ul"><p class=" force_menu aws_left menu_display" style="  ">EC2 Instances </p></span></a></li>

                            <li class="list_mobile1 all_course" ><i class="lnr lnr-chevron-down sale_down force_menu1"></i><a href="<?= base_url(); ?>courses/amazon-web-services"  class="sf-with-ul"><p class="force_menu aws_left menu_display" style="  ">Elastic Block Store (EBS) </p></span></a></li>

                             <li class="list_mobile1 all_course" ><i class="lnr lnr-chevron-down sale_down force_menu1"></i><a href="<?= base_url(); ?>courses/amazon-web-services "  class="sf-with-ul"><p class="force_menu aws_left menu_display" style="    ">
Simple Storage Service (s3) </p></span></a></li>

                              <li class="list_mobile1 all_course" ><i class="lnr lnr-chevron-down sale_down force_menu1"></i><a href="<?= base_url(); ?>courses/amazon-web-services"  class="sf-with-ul"><p class="force_menu aws_left menu_display" style="   ">Virtual Private Clous (VPC) </p></span></a></li>
                               <li class="list_mobile1 all_course" ><i class="lnr lnr-chevron-down sale_down force_menu1"></i><a href="<?= base_url(); ?>courses/amazon-web-services"  class="sf-with-ul"><p class="force_menu aws_left menu_display" style="   ">Rational Database Service (RDS) </p></span></a></li>
                    
                  

                       </div>

           



                        <div class="col-md-4 mymenu_landscape">

       <li class="list_mobile1"><a class="sale_menu menu_left" href="<?= base_url(); ?>courses/hadoop"><p class="sale_menu1 hadoop_left force_menu" style="color: #f98f17;font-size: 17px;    margin-top: 6%;
">Hadoop</p></a></li>


<li class="list_mobile1 all_course" ><i class="lnr lnr-chevron-down sale_down force_menu1"></i><a href="<?= base_url(); ?>courses/hadoop"  class="sf-with-ul"><p class=" force_menu hadoop_left menu_display" >Data Analytics
</p></span></a></li>

                        <li class="list_mobile1 all_course" ><i class="lnr lnr-chevron-down sale_down force_menu1"></i><a href="<?= base_url(); ?>courses/hadoop"  class="sf-with-ul"><p class=" force_menu hadoop_left menu_display" >Big Data</p></span></a></li>

                          <li class="list_mobile1 all_course" ><i class="lnr lnr-chevron-down sale_down force_menu1"></i><a href="<?= base_url(); ?>courses/hadoop"  class="sf-with-ul"><p class=" force_menu hadoop_left menu_display">HDFS</p></span></a></li>

                            <li class="list_mobile1 all_course" ><i class="lnr lnr-chevron-down sale_down force_menu1"></i><a href="<?= base_url(); ?>courses/hadoop"  class="sf-with-ul"><p class=" force_menu hadoop_left menu_display" style="       ">Hadoop Installation modes</p></span></a></li>

                            <li class="list_mobile1 all_course" ><i class="lnr lnr-chevron-down sale_down force_menu1"></i><a href="<?= base_url(); ?>courses/hadoop"  class="sf-with-ul"><p class=" force_menu hadoop_left menu_display" style="        ">
Hadoop Developing tasks </p></span></a></li>

                             <li class="list_mobile1 all_course" ><i class="lnr lnr-chevron-down sale_down force_menu1"></i><a href="<?= base_url(); ?>courses/hadoop"  class="sf-with-ul"><p class="force_menu hadoop_left menu_display" style="         ">Hadoop ecosystems </p></span></a></li>
                    
                       </div>


                          <div class="col-md-3 mymenu_landscape">


                          <li class="list_mobile1"><a class="sale_menu menu_left" href="<?= base_url(); ?>courses/automation-framework"><p class="sale_menu1 automation_left auto_top" style="   color: #f98f17;      font-size: 17px; 
">Automation Framework</p></a></li>




                        <li class="list_mobile1 all_course" ><i class="lnr lnr-chevron-down sale_down force_menu1"></i><a href="<?= base_url(); ?>courses/automation-framework"  class="sf-with-ul"><p class="force_menu  force_menu automation_left menu_display" style="     ">Introduction to types of framework</p></span></a></li>

                          <li class="list_mobile1 all_course" ><i class="lnr lnr-chevron-down sale_down force_menu1"></i><a href="<?= base_url(); ?>courses/automation-framework"  class="sf-with-ul"><p class="force_menu  force_menu automation_left  menu_display" style="     ">TestNg and Data Driven Framework</p></span></a></li>

                            <li class="list_mobile1 all_course" ><i class="lnr lnr-chevron-down sale_down force_menu1"></i><a href="<?= base_url(); ?>courses/automation-framework"  class="sf-with-ul"><p class="force_menu  force_menu automation_left menu_display" style="     ">TestNg and keyword Framework</p></span></a></li>

                            <li class="list_mobile1 all_course" ><i class="lnr lnr-chevron-down sale_down force_menu1"></i><a href="<?= base_url(); ?>courses/automation-framework"  class="sf-with-ul"><p class="force_menu  force_menu automation_left menu_display" style="    ">POM with Page Factory </p></span></a></li>
                    
                    
                       </div>
                    

                     </div>




                    
                    
                    
                  </div>
                  
                </ul>
                
              </li> 
              
              <li><a href="<?= base_url(); ?>batches" class="batch_top un" >Batches</a></li>
              
              
              
              <li class="menu-has-children"><a class="un" href="<?= base_url(); ?>services" >Services</a>
                <ul class="ser_height" style=" background: rgba(0, 0, 0, 0.64);">
                  <li><a  href="<?= base_url(); ?>services/product-development" style="    font-size: 14px;    font-weight: 100;">Product Development</a></li>
                  
                  <li><a href="<?= base_url(); ?>services/corporate-training" style="    font-size: 14px;    font-weight: 100;"> Corporate Training</a></li>
                  <li><a href="<?= base_url(); ?>services/class-room-training" style="    font-size: 14px;    font-weight: 100;"> Class Room Training</a></li>
                  <li><a href="<?= base_url(); ?>services/consulting" style="    font-size: 14px;    font-weight: 100;"> Consulting</a></li>
                </ul>
              </li>
              
                   <li class="menu-has-children"><a class="un" href="" >Resources</a>
              <ul class="reso_height" style=" background: rgba(0, 0, 0, 0.64);">
               
                  
                  <li><a href="<?= base_url(); ?>blog" style="    font-size: 14px;    font-weight: 100;"> Blog</a></li>
                  <li><a href="<?= base_url(); ?>salesforce-interview-questions" style="    font-size: 14px;    font-weight: 100;"> Interview Questions</a></li>
                 
                </ul>
              </li> 
              
              <!--<li><a href="<?= base_url(); ?>blog"  class="un " style="text-decoration: unset;">Blog</a></li>-->

                   <!--<li><a  href="<?= base_url(); ?>salesforce-interview-questions" style="text-decoration: unset;">Interview Questions</a></li>-->
           
              <li><a href="<?= base_url(); ?>contact-us" class="un "  >Contact Us</a></li>

                <li><a href="<?= base_url(); ?>salesforce-online-training" class="un "  >Online Training</a></li>
              <!--  <button style="        background: #107ad6;
    /* color: red; */
    height: 28px;
    /* border: 2px; */
    border-radius: 8px;
        border-color: #107ad6;
    margin-top: -1%;"><a href="<?= base_url(); ?>salesforce-online-training" class="un "  style="    color: #fff;" >Online Training</a></button> -->

 <!--    <li><a href="<?= base_url(); ?>contact-us" class="un "  >Log In</a></li> -->

  <button onclick="document.getElementById('id01').style.display='block'" style="   width: 65px !important;
    height: 27px;

    color: #fff;
    border-radius: 9px !important;
    font-weight: bold !important;">Log In</button>
  
            </ul>



          </nav><!-- #nav-menu-container -->                    
        </div>
      </div>
    </header><!-- #header -->   

<div id="id01" class="modal">


  
  <form class="modal-content animate mylogin" id='loginform' action="<?php echo base_url();?>Welcome/login" method="post" id="myDIV">

    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    

     <p style="    font-size: 20px;
    color: #000;
    font-weight: 600;
    margin-top: 0px;">USER SIGN IN</p>  
     
        <hr style="color: #000;margin-bottom: 0px;   margin-top: -1px !important;">
    </div>

    <hr style="    margin-top: 10px;
    margin-bottom: 0px;">

    <div class="container">
    
 <input type="text" class="myinput" placeholder="Enter UserId" name="username" value="CIS/" required >
  <i class="fa fa-user my_icon" style="    margin-left: -4%;"></i>
      <br>

     
  <input type="password" class="myinput"  placeholder="Enter Password" name="password" id="password"  required >
      <i class="fa fa-key my_icon" style="    margin-left: -4%;"></i>
      <br>
        
  

  <input type="submit" value="Sign In" name="login" onlclick="" style="    width: 90px;
    height: 28px;
    line-height: 22px;
    color: #fff;
    text-align: center;
    margin-left: 8%;
    background: #f98f17;
    border-color: #f98f17;">

      <br>

      <p id="demo" style="color: rgb(60, 127, 255);
    font-family: serif;
    font-style: normal;
    font-size: 15px;
    display: block;    margin: 2px 21px 10px;"></p>

      <br>
  
    </div>
  
    <div class="container new_user" style="   width: 300px;">  
     
         
       
     <a class="btn btn-primary my_reg" href="#" data-toggle="modal" data-target=".login-register-form" onclick="myFunction()">
                           New User- Registration
                        </a>

    </div>
  </form>

</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

  
</div>
    <!-- #header -->    
    
       
    <div  class="modal fade login-register-form" role="dialog"  style="    width: 100%;
    margin-left: 13%;">
                            <div class="modal-dialog modal-sm" id="id02">
                                <div class="modal-content myreg" style="   ">
                                    <div class="modal-header" style="    padding: 0px;">
                                      <!--   <button type="button" class="close" data-dismiss="modal">
                                            <span class="glyphicon glyphicon-remove"></span>
                                        </button> -->

                                          
      <span onclick="myFunctionone()" class="close" title="Close Modal">&times;</span>

                                        <ul class="nav nav-tabs">
                                            <li ><a data-toggle="tab" href="#login-form" style="    color: #000;
    text-decoration: none;
    font-size: 20px;
    font-weight: 600;"> <span class="glyphicon glyphicon-user"></span>&nbsp;User Registration </a></li>
                                     
                                        </ul>
                                    </div>
                                    <div class="modal-body">
                                        <div class="tab-content">
                                            <div id="login-form" class="tab-pane fade in active">
        
        
         <form role="form" class="user_reg" action="<?php echo base_url();?>Welcome/insert_user" method="post" enctype="multipart/form-data">


 <div class="form-group" style="width: 100%">
       
               <input type="Hidden" class="form-control" name="user_type" value="Students" >

                 
            </div> 

  
  <div class="form-group" style="width: 100%">
                                                        <!-- <label for="name">Your Name:</label> -->
         <input type="text" class="form-control" id="name" placeholder="First Name" name="fisrt_name" maxlength="20" style="    width: 100%;border: 1px solid #f98f17;" required="">
                                                    </div> 

           <div class="form-group">
                                                        <!-- <label for="name">Your Name:</label> -->
     <input type="text" class="form-control" id="name" placeholder="Last Name" name="last_name" maxlength="20" style="    width: 100%;border: 1px solid #f98f17;" required="">  
                                                    </div>

      <div class="form-group">
                                                        
  <input type="text" class="form-control" id="user-name" onblur="check_if_exists();" placeholder="User Id"  name="user_name" value="CIS/" maxlength="20"  style="    width: 100%;border: 1px solid #f98f17;" required="">

                                                  
   <span style="color:red" id="msg">   </span> 
                                                    </div>
      <div class="form-group">
                                                   <!--      <label for="newemail">Email:</label> -->
        <input type="password" class="form-control" id="newpwd" placeholder="password" name="passwod" style="    width: 100%;border: 1px solid #f98f17;" required="">
          </div>

           <div class="form-group">
                                                       <!--  <label for="newpwd">Password:</label> -->

          <input type="text" class="form-control" id="newemail" placeholder="Phone " name=" phone" maxlength="12"  style="    width: 100%;border: 1px solid #f98f17;" required="">
                                                        
           </div>


            <div class="form-group">
                                                       <!--  <label for="newpwd">Password:</label> -->

              <input type="email" class="form-control" id="newemail" placeholder="Email" name="email" style="    width: 100%;border: 1px solid #f98f17;padding: 6px 20px;" required="">
                                                        
                 </div>

                 <div class="form-group">
                                                       <!--  <label for="newpwd">Password:</label> -->

                    <input type="text" name="batch_no"  class="form-control" id="newemail" placeholder="Batch No."  maxlength="15" style="    width: 100%;border: 1px solid #f98f17;" required="">
                                                        
             </div>
             
                 <div class="form-group">
                                                       <!--  <label for="newpwd">Password:</label> -->

                    <input type="Hidden" name="status"  class="form-control" value="Inactive" >
                                                        
             </div>

                                                  
               <button type="submit" name="create" class="btn btn-default" style="color: #fff;
    background-color: green;
    border-color: #ccc;
    height: 33px;
    line-height: 20px;">Register</button>
                                                </form>
        
                                            </div>
                                     

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
    
   <script>
function myFunction() {

  document.getElementById("id01").style.display="none";
  document.getElementById("id02").style.display="block";

  
}
// function myFunction1() {
// document.getElementById('id02').style.display='none' ;
// document.getElementByClass('login-register-form')..remove("show");
// document.getElementByClass('login-register-form')..remove("in");

// }
</script>

<script type="text/javascript">
  
function myFunctionone() {
document.getElementById('id02').style.display='none' ;
document.getElementByClass('login-register-form').remove("show");
document.getElementByClass('login-register-form').remove("in");

}


</script>

 <script>
        <?php if($msg != null){ ?>
        window.onload=function() {
        alert("<?php  echo $msg; ?>");
        };
    <?php    } ?>

    
 </script>  
   
<style>
    
    .modal-backdrop.fade {
    display: none !important;
}

.my_reg
{
  
    border-color: #fff !important;
    background: transparent !important;
    border: #fff !important;
    margin-left: 46% !important;
        color: #047d04 !important;
}
    
    
</style>


 <script type="text/javascript">
   

$(document).ready(function() {
  $('#loginform').submit(function(e) {
    e.preventDefault();
    $.ajax({
       type: "POST",
       url: 'Welcome/ajaxlogin',
       data: $(this).serialize(),
       success: function(data)
       {
        
          if (data === 'success') {
            window.location = 'Welcome/user_dashboard';
          }
          else {
           // alert('Invalid Credentials ');

           $('#demo').text('Incorrect Username OR Password.Try again!');
         // document.getElementById('demo').Html='invalid Credentials' ;
          }
       }
   });
 });
});

 </script> 
 
 
 <script type="text/javascript">
   
   function check_if_exists() {
var username = $("#user-name").val();

$.ajax(
    {
        type:"post",
        url: "<?php echo base_url(); ?>index.php/Welcome/filename_exists",
        data:{ username:username},
        success:function(response)
        {
            if (response == true) 
            {

             //  alert("this is unique");
              $('#msg').html('username already  exist');
             
            }
            else 
            {
                // alert("this is duplicate");
                   $('#msg').html('username is available');
              //  $('#msg').html('<span style="color:red;">Value does not exist</span>');
            }  
        }
    });
}
 </script>

 

