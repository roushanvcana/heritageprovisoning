<!-- Footer_Wrapper Start-->
<footer class="wdt-100"> 
 <!-- Footer_Container Start-->
 <div class="container">
  <div class="row">
   <div class="col-lg-12 ftr_txt_div"> <img src="images/logo/Heritage Provisioning Logo - Tan - 750px.png" alt="image"> </div>
   <div class="col-lg-12 col-md-12 col-sm-16 col-xs-12 ftr_nav">
    <div class="footer_menu"> 
      <a href="about.php">About</a> 
      <a href="locations.php">Locations</a> 
      <a href="loyalty.php">Loyalty</a> 
      <a href="career.php">Careers</a> 
      <a href="blog.php">Blog</a> 
    </div>
   </div>
  </div>
 </div>
 <!-- Footer_Container End--> 
 <!-- Copyright Start-->
 <div class="ftr_btm">
  <div class="container">
   <div class="row">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
     <p>&copy;<script>document.write(new Date().getFullYear());</script> Heritage Provisioning | All Rights Reserved | Privacy Policy | Terms of Use. </p>
    </div>
   </div>
  </div>
 </div>
 <!-- Copyright End--> 
</footer>
<!-- Footer_Wrapper End--> 
<!-- helper js--> 
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.touchSwipe.min.js"></script> 
<script src="js/theme.js"></script> 
<!--<script src="js/responsive_bootstrap_carousel.js"></script>--> 
<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js'></script> --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> 
<script>
	    $('#owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        dots: false,
		autoplay:false,
        nav: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            900:{
                items:2
            },
					1024:{
                items:5
            }
        }
    })
	</script> 

     <script>
	    $('#owl-caro').owlCarousel({
        loop:true,
       // margin:10,
        dots: false,
		autoplay:true,
        // nav: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
	</script>

    <script>
       
        $(function(){ $("div[data-toggle=collapse]").click(function(){
        $(this).children('span').toggleClass("fa-chevron-down fa-chevron-up");
    });
   })

    </script>
  

</body>
</html>