   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
   <style>
      .ab::placeholder {
  color: #fff;
  opacity: 1; /* Firefox */
}

.ab
{
   border: 1px solid #f7631b;;

    height: 35px;
    font-size: 17px;
    font-weight: bold;
    color: #f98f17;
    background: #f7631b;;
    color: #fff;padding:10px;width: 80%; 
}
input.ab {
   border: 1px solid #f7631b;;

    height: 35px;
    font-size: 17px;
    font-weight: bold;
    color: #f98f17;
    background: #f7631b;;
    color: #fff;padding:10px;width: 80%; 
}

   
.quick_link
{
    margin-top: 30px;
}

.search_bar
{
    margin-top: 40px; 
}

.main_branch
{
   margin-top: 29px;  
}

.popular_color
{
    text-align: left;
    color: #04091e;
}
   </style>
   <style>
   
   .fa-2x {
    font-size: 30px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}


.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}



.fa-instagram {
    background: #ffffff;
    color: #f98f17;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

.myicon:hover {
    color: #ffffff !important;
    text-decoration: none;
        background: #86b6da;
}

.my_top
{
        width: 40px;
    float: right;
    margin-top: -90px;
}

</style>

<style>
    
@media only screen and (max-width: 768px)    
  

{
  input.ab {
    border: 1px solid #f7631b;
    height: 35px;
    font-size: 15px !important;
    font-weight: bold;
    
    background: #f7631b;
    color: #fff !important;
    padding: 4px;
    width: 133px !important;
}

}
</style>



   
   <footer class="footer-area section-gap">
                <div class="container">
                    <div class="row">

                      <div class="col-lg-2 col-md-3 col-sm-3 quick_link" style="    ">
                            <div class="single-footer-widget">
                                          
               
                                <ul>
                                    <li><h4 class="" style="text-align: left !important;font-size:20px !important;">Quick Links    </h4></li>
                                     <?php 

                               foreach ($footer_title->result() as $row)  
         {  
           ?>
                                    <li><a href="<?php echo $row->title_url;?>"><?php echo $row->title_name;?> </a></li>
                                     <?php }  
         ?>
                                  

                                </ul>  
                                            
                                         
                            </div>
                        </div>   
    
             
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="single-footer-widget">
                                
                                <ul>
                                      <div class="search-container" style="  float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;margin-left: -15px;">
                                     <form action="" style="    color: #04091e !important;">
      <input class="ab"  type="text" placeholder="Popular Search..." name="search" style=" ">
      <button type="button" style="width: 33px;
    height: 36px;
    background: #f7631b;border:1px;    margin-left: -5px;
"><i class="fa fa-search" style="color:#fff"></i></button>
    </form>
</div>
                                    <?php 

                               foreach ($footer_popular->result() as $row)  
         {  
           ?>
                                    <li><a href="<?php echo $row->footer_url;?>"><?php echo $row->footer_popular;?></a></li>
                                 
                                 <?php }  
         ?>  
            
                                </ul>                               
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-3 search_bar" style=" color:   ">
                            <div class="single-footer-widget">
                                
                                <ul>
                                
                                <li><h4 class="popular_color" style="    color: #04091e;">.</h4></li>
                              
                                <?php 

                               foreach ($footer_search->result() as $row)  
         {  
           ?>
             
     <li><a href="<?php echo $row->search_url;?>"><?php echo $row->search_title;?></a></li>
                            
                                  <?php }  
         ?>
            
                                </ul>                               
                            </div>
                        </div>
                                                                                         
                        <div class="col-lg-3  col-md-3 col-sm-3 main_branch" style="   ">
                            <div class="single-footer-widget">
                                <h4  style="text-align: left !important;font-size:20px !important;">Main Branch</h4>
                                <div style="color:white;">
                                    <?php 

                               foreach ($footer_address->result() as $row)  
         {  
           ?>
                                <p>
                                        <?php echo $row->address;?>
                                </p>
                                
                                <div class="icon" >
                                    <span class="lnr lnr-phone-handset" style="    color: #f8af8f;    font-size: 15px;"></span> <?php echo $row->phone;?>
                                </div>
                                
                                <div class="icon" style="font-size:12px">
                                    <span class="lnr lnr-envelope" style="    color: #f8af8f;    font-size: 11px;"></span> <?php echo $row->mail;?>
                                </div>
                                </div>
                                
                                <a href="https://www.facebook.com/capitalinfosolution" target="_blank" class="fa fa-facebook myicon" style="display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: 25px !important;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    margin-top: 9px;
    padding: 4px !important;"></a>
<a href="https://twitter.com/Capitalinfosol1" target="_blank" class="fa fa-twitter myicon" style="display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: 25px !important;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    margin-top: 9px;
    padding: 4px !important;"></a>
<a href="https://www.linkedin.com/in/capitalinfo-solutions/" target="_blank" class="fa fa-linkedin myicon" style="display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: 25px !important;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    margin-top: 9px;
    padding: 4px !important;"></a>
<a href="https://in.pinterest.com/capitalinfo/" target="_blank" class="fa fa-pinterest myicon" style="display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: 25px !important;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    margin-top: 9px;
    padding: 4px !important;"></a> 
    
<a href="https://www.instagram.com/capitalinfosolutions/" target="_blank" class="fa fa-instagram myicon" style="display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: 25px !important;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    margin-top: 9px;
    padding: 4px !important;  background: #125688;
  color: white;"></a>
  
  <a href="https://www.youtube.com/channel/UCmNxIYuzl90AZZ0MLSrte2Q/videos" target="_blank" class="fa fa-youtube myicon" style="display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: 25px !important;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    margin-top: 9px;
    padding: 4px !important;  background: #bb0000;
  color: white;"></a>


                            </div>
                        </div>                                          
                    </div>
                    <div class="footer-bottom row align-items-center justify-content-between">
                        <p class="footer-text m-0 col-lg-6 col-md-12" style="color: #fff">
<?php echo $row->footer_bar;?>
</p>
 <?php }  
         ?>
            
                        
                    </div>                      
                </div>
                
                
             
<a href="javascript:" id="return-to-top"><img class="my_top" src="<?=base_url(); ?>assets/img/arr1.png"  style="width: 40px"   /></i></a>



<!-- ICON NEEDS FONT AWESOME FOR CHEVRON UP ICON -->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet"> 

   <script type="text/javascript">

// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
    
</script>
                
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ba23021c666d426648ae7ee/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
            </footer>  