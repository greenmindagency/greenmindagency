<?php wp_footer(); 
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website. 
// Removing this fxn call will disable all kinds of plugins. 
// Move it if you like, but keep it around.
?>

 <div class="row">

 
 <?php if ( is_page( '145' )) { // Contact us page?>
 
<?php } elseif ( is_page( '642' )) { // quotation page?>
 
 
 <?php } else { // Other / All Other pages ?>
 
     <!-- jarallax image -->
    <div data-jarallax data-speed="0.2"  id="footer" class="bg-dark jarallax">
      
        <?php $image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "large" ); ?><?php $image_width = $image_data[1]; ?><?php $image_height = $image_data[2];  // get the featuered images width and height ?> 
      
    <?php $image = get_field('image-header', 1797); if( !empty( $image ) ):
  
   $size = 'large';
            $width = $image['sizes'][ $size . '-width' ];
            $height = $image['sizes'][ $size . '-height' ];
   ?> 
      
      <img  src="<?php echo $image['sizes']['large']; //fire the image as a large size?>" class="jarallax-img" alt="<?php bloginfo('name'); ?>" width="<?php echo $width?>" height="<?php echo $height?>" loading="lazy">
      
      <?php endif; ?>
      
      
    <div class="col-12 p-5 text-white text-center">
    <h3 class="display-5 text-uppercase">Contact Us Now!</h3>
    <p class="mb-4">Hire Us To Be Your Growth Digital Marketing Team</p>
      
  <?php echo do_shortcode( '[contact-form-7 id="1793" title="contact"]' ); ?> 
     
    </div>
</div>
    <!-- jarallax image -->     
	
  <?php } ?>
  
  
  
  
    <footer class="bg-dark px-4 py-5">
   <div class="row">
     
      
      <div class="col-12 col-md">
        <img class="logo mb-2" loading="lazy" src="https://greenmindagency.com/blog/wp-content/uploads/2021/01/logo-white.png" alt="Green Mind Agency" width="130" height="30">
        <small class="d-block text-secondary">© Copyright - Green Mind Agency  © <?php echo date('Y'); ?></small>
		<small class="d-block text-secondary"><a target="_blank" class="text-secondary" href="https://g.page/greenmindagency">125 Toman Bey Street, Zeitoun, Cairo, Egypt.</a></small>
		<small class="d-block mb-4 text-secondary"> <a href="tel:+201000171208" target="_self">Call now! +201000171208</a></small>
		
		
		
		
              <p class="align-items-center pe-5"> 

        <a href="https://www.facebook.com/greenmindagency" target="_blank"> <i class="mb-2 me-2 fa-2x fab fa-facebook-square"></i></a>
        <a href="https://instagram.com/greenmindagency" target="_blank"> <i class="mb-2 me-2 fa-2x fab fa-instagram"></i></a>
        <a href="https://www.linkedin.com/company/green-mind-agency" target="_blank"> <i class="mb-2 me-2 fa-2x fab fa-linkedin"></i></a>
        <a href="https://www.youtube.com/user/greenmindagency" target="_blank"> <i class="mb-2 me-2 fa-2x fab fa-youtube"></i></a> 
        <a href="https://twitter.com/GreenMindAgency" target="_blank"> <i class="mb-2 me-2 fa-2x fa-brands fa-square-x-twitter"></i></a>
        <a href="https://www.behance.net/greenmindagency" target="_blank"> <i class="mb-2 me-2 fa-2x fab fa-behance-square"></i></a>
        <a href="https://www.flickr.com/photos/128952373@N03/" target="_blank"> <i class="mb-2 me-2 fa-2x fab fa-flickr"></i></a>             <a href="https://www.pinterest.com/greenmindagency/" target="_blank"> <i class="mb-2 me-2 fa-2x fab fa-pinterest-square"></i></a>
      </p>
      </div>
      <div class="col-12 col-md">
        <p class="bold h5 pb-2 text-light">Expertise</p>
        <ul class="list-inline list-unstyled text-small">
          
     <?php $categories = get_categories (array('orderby' => 'id', 'child_of'=>'1', 'hide_empty' => 1)); ?>
      <?php  foreach($categories as $category):  ?>
      <?php query_posts( array ( 'category_name' => $category->slug, 'showposts' => '5', 'child_of'=>'1' ) ); ?>
          
          <li class="list-inline-item"><a class="link-light" href="<?php $category_id = get_query_var('cat'); echo get_category_link( $category_id ); ?>">
    
    <h3 class="h6 text-secondary"><i class="me-2 fa fa-<?php $category = get_queried_object(); 'category_' . $category->term_id; // loading the category id?><?php if( get_field('icon', 'category_' . $category->term_id ) ): //if there something fire?><?php $id = 'category_'.get_queried_object()->term_id; the_field('icon', $id); ?><?php else: //if there not fire default ?><?php the_field('icon', 2); ?><?php endif; // end of category?>"></i> <?php single_cat_title(); ?></h3>
               </a></li>
           <?php endforeach; ?>
            
            <?php wp_reset_query(); ?>
        </ul>
      </div>
      <div class="col-12 col-md">
        <p class="bold h5 pb-2 text-light">Services</p>
        <ul class="list-unstyled text-small">
          
            <?php
  
  $posttags = get_tags();
$count=0;
if ($posttags) {
  foreach($posttags as $tag) {
    $count++;
    
      echo '<li><a class="link-secondary" href='.get_tag_link($tag->term_id) .'>'.$tag->name . '</a></li>';
      if( $count > 4 ) break; //change the number to adjust the count
    
  }
}
 // get first 5  tags ?>
          
        
        </ul>
      </div>
      </div> 
      
      
       <div class="sticky-circle"><a class="whatsapp-livechat" href="https://api.whatsapp.com/send?phone=201000171208&text=Hi,%20I%20Contact%20you%20from%20<?php global $wp; echo home_url( $wp->request ) ?>" target="_blank"> <i class="fab fa-whatsapp text-white"></i></a></div>
      
      
      
  </footer>
</div>
  </main>
<!-- closing the main container-->
 </div> 
    </div>



<!-- onload css -->  

<style>


body {  padding-top: 55px;  font-family: 'Lato', sans-serif;}
a:link { text-decoration: none;}
a:visited { text-decoration: none;}
a:hover {text-decoration: none;}
a:active {text-decoration: none;} 
 
  blockquote {border-left: 4px solid #32cd32;    padding: 0 20px; margin: 30px 0 !important; line-height: 2.1rem;font-size: calc(1.3rem);}
     
.card-overlay img, .jarallax-img {opacity: 0.2}   
  .navbar-brand { background: none !important; box-shadow: 0px 0 0 !important; }   

.carousel-item img { width: 100%;   -webkit-mask-image: -webkit-linear-gradient(bottom, transparent 0%, black 50%);
  mask-image: -moz-linear-gradient(bottom, transparent 0%, black 50%);
  mask-image: -o-linear-gradient(bottom, transparent 0%, black 50%);
  mask-image: linear-gradient(to top, transparent 0%, black 50%); }
  
 .imgcarousel .carousel-item img {       -webkit-mask-image: none !important;
    mask-image: none !important; }
	
	
 .imgcarousel .carousel-control-prev, .imgcarousel .carousel-control-next {text-shadow: 0px 0px 10px rgba(0, 0, 0, 1);}




  
       /*coloring*/
      body .bg-primary, body .btn-outline-primary:hover, body .btn-primary { color: #fff !important; background-color: #32CD32 !important; border-color: #208320 !important;}
       .btn-primary:hover, .btn-primary:active, .btn-primary:focus { color: #fff !important; background-color: #208320 !important; border-color: #208320 !important; box-shadow:none !important}
       .btn-outline-primary {border-color: #32CD32 !important; color:#208320 !important}
	   
       
       
      i, a, .page-link, body .text-primary { color: #32CD32 !important;}
      a:hover, .page-link:hover { color: #208320 !important;} 
  
    body .bg-dark {background-color:#000 !important}
  #sidebarMenu {padding-top:100px}
  
  .dropdown-item.active, .dropdown-item:active { color: #fff  !important; background-color: #32CD32 !important; }
 /*coloring*/
  
  
    input[type="checkbox"] {    margin: 0 0.5rem; }
  .wpcf7-file {    margin: 1.5rem 0;} 
  
  
  
  .sticky-circle {background: #32CD32;   width: 50px;    text-align: center;    border-radius: 50%;    height: 50px;    line-height: 50px;    font-size: 34px;    position: fixed;    bottom: 20px;    right: 20px; box-shadow: 3px 3px 21px -5px #000; z-index:999} 
.sticky-circle a {color: #fff} 
  
.blog-post img, .blog-post .video {  margin: 20px 0;}
.blog-post h3, .blog-post h4, .blog-post h5, .blog-post h6 {line-height: 2.1rem;  margin-top: 2rem; margin-bottom: 1rem;}  
  .imgwidthfull {width:100%}
  a.anchor { display: block; position: relative;  top: -70px; visibility: hidden}
  
.jarallax { position: relative; z-index: 0; }
.jarallax > .jarallax-img {  position: absolute;  object-fit: cover; font-family: 'object-fit: cover;'; top: 0; left: 0; width: 100%; height: 100%; z-index: -1; }
  
 .py-spacer {padding: 6rem 0 !important} 
 .py-spacer-8 {padding: 8rem 3rem !important}   
  .lead { font-size: 1.3rem !important;    font-weight: 400 !important;} 
  
.screen-reader-response {  display: none; }
.wpcf7-mail-sent-ok {background-color: #32CD32; padding: 1rem; color: #fff;font-weight: bold;}
.wpcf7-not-valid-tip, .wpcf7-validation-errors {color: red; margin-top: 10px; display: block;}
.wpcf7-recaptcha {padding: 20px 0;}
    
.sidebar { position: fixed; top: 0; /* rtl:raw: right: 0;  */  bottom: 0;  /* rtl:remove */  left: 0;  z-index: 100; /* Behind the navbar */  padding: 0; /* Height of navbar */  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);}

@media (max-width: 767.98px) {  .sidebar {    top: 0rem;  }}

.sidebar-sticky {
  position: relative;  top: 0;  height: calc(100vh - 48px);  padding-top: .5rem;  overflow-x: hidden;  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */}

.sidebar .nav-link {  font-weight: 500;  color: #333; padding: .3rem .8rem;}

.sidebar .nav-link .feather {  margin-right: 4px;  color: #727272;}

.sidebar .nav-link.active {  color: #007bff;}

.sidebar .nav-link:hover .feather,.sidebar .nav-link.active .feather {  color: inherit;}

.sidebar-heading {  font-size: .75rem;  text-transform: uppercase;}

.flags-list {font-size: 1.3em;}

/*
 * Navbar
 */

.navbar-brand {  padding-top: .75rem;  padding-bottom: .75rem;  font-size: 1rem;  background-color: rgba(0, 0, 0, .25);  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);}

.navbar .navbar-toggler {  top: 0rem;  right: 0rem;}

.navbar .form-control {  padding: .75rem 1rem;  border-width: 0;  border-radius: 0;}

.form-control-dark {  color: #fff;  background-color: rgba(255, 255, 255, .1);  border-color: rgba(255, 255, 255, .1);}

.form-control-dark:focus {  border-color: transparent;  box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);}

  .cover-font { font-size: calc(.8rem + 3.4vw) }
  .cover-font-s { font-size: calc(.8rem + 1.3vw) }
  
 


	 /** isotop **/

  .filter-sidebar {
	   overflow-y: auto;
  -webkit-overflow-scrolling: touch; /* Smooth scrolling on iOS */
    position: fixed;
    top: 80px;
    right: -1000px;
    width: 250px;
    height: 100%;
    background: #fff;
    box-shadow: -2px 0 5px rgba(0, 0, 0, 0.5);
    transition: right 0.3s ease;
    z-index: 1200;
  }

  .filter-sidebar.active {
    right: -50px;
  }

  .filter-sidebar .close-btn {
    background: none;
    border: none;
    font-size: 24px;
    padding: 10px;
    cursor: pointer;
  }

//* isotop *//  

 
  
 //////////////* infinite scroll */  
  
  .scroller-status{ position: fixed;  bottom: 0; display:none; z-index:1 }
  /* reveal grid after images loaded */
.grid.are-images-unloaded {
  opacity: 0;
}

.grid__col-sizer {
  width: 25% !important 
}

.grid__col-sizer-wide {
  width: 50% !important 
}


.grid__gutter-sizer { width: 0% !important }

/* hide by default */
.grid.are-images-unloaded .image-grid-item {
  opacity: 0;
}

.grid-item {
  
  float: left;
}


.ratio-9x16 {
    --bs-aspect-ratio: 177.78%; /* (16/9) * 100 */
}


  
  /* loader-ellips
------------------------- */

.loader-ellips {
	
  font-size: 20px; /* change size here */
  position: relative;
  width: 4em;
  height: 1em;
  margin: 10px auto;
}

.loader-ellips__dot {
  display: block;
  width: 1em;
  height: 1em;
  border-radius: 0.5em;
  background: #555; /* change color here */
  position: absolute;
  animation-duration: 0.5s;
  animation-timing-function: ease;
  animation-iteration-count: infinite;
}

.loader-ellips__dot:nth-child(1),
.loader-ellips__dot:nth-child(2) {
  left: 0;
}
.loader-ellips__dot:nth-child(3) { left: 1.5em; }
.loader-ellips__dot:nth-child(4) { left: 3em; }

@keyframes reveal {
  from { transform: scale(0.001); }
  to { transform: scale(1); }
}

@keyframes slide {
  to { transform: translateX(1.5em) }
}

.loader-ellips__dot:nth-child(1) {
  animation-name: reveal;
}

.loader-ellips__dot:nth-child(2),
.loader-ellips__dot:nth-child(3) {
  animation-name: slide;
}

.loader-ellips__dot:nth-child(4) {
  animation-name: reveal;
  animation-direction: reverse;
}
 //////////////* infinite scroll */  
 
 


	
	

</style>
   
<?php if ( is_user_logged_in() ) { // your code for logged in user fix the top bar position  ?>
   
  <style>
     body{padding-top: 85px}
    .navbar {margin-top: 30px}
  #wpadminbar {  height: 30px !important;  min-width: auto !important; position: fixed !important;  }
    
  </style>
  
<? } else {   ?>
<? }   ?>
  
<!-- fonts and icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lato-font/3.0.0/css/lato-font.min.css" integrity="sha512-rSWTr6dChYCbhpHaT1hg2tf4re2jUxBWTuZbujxKg96+T87KQJriMzBzW5aqcb8jmzBhhNSx4XYGA6/Y+ok1vQ==" crossorigin="anonymous" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" integrity="sha512-Cv93isQdFwaKBV+Z4X8kaVBYWHST58Xb/jVOcV9aRsGSArZsgAnFIhMpDoMDcFNoUtday1hdjn0nGp3+KZyyFw==" crossorigin="anonymous" />

    <!-- Bootstrap CSS -->
<script src="<?php bloginfo('template_directory'); ?>/style.css"></script>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js" integrity="sha512-VK2zcvntEufaimc+efOYi622VN5ZacdnufnmX7zIhCPmjhKnOi9ZDMtg1/ug5l183f19gG1/cBstPO4D8N/Img==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js" integrity="sha512-JRlcvSZAXT8+5SQQAvklXGJuxXTouyq8oIMaYERZQasB8SBDHZaUbeASsJWpk0UUrf89DP3/aefPPrlMR1h1yQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    

<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.4.0/clipboard.min.js" integrity="sha512-iJh0F10blr9SC3d0Ow1ZKHi9kt12NYa+ISlmCdlCdNZzFwjH1JppRTeAnypvUez01HroZhAmP4ro4AvZ/rG0UQ==" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jarallax/1.12.5/jarallax.min.js" integrity="sha512-DI98Iva+99hqdsd+etSf/W9iJcmz5jornxiWr5nkr/kcKWlaCDwIsWW6AGxXu/X5u/yylsLYJowdPzIcLUDklw==" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jarallax/1.12.5/jarallax-video.min.js" integrity="sha512-lI/p03BLuV8qpkrf/tGCwqJSLwRmPTPvsOEv8LVs2gaSS17/fNiaCxowRK2zooDdf5r7C04rRmnPAMnbXWcVPA==" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.0/lazysizes.min.js" integrity="sha512-JrL1wXR0TeToerkl6TPDUa9132S3PB1UeNpZRHmCe6TxS43PFJUcEYUhjJb/i63rSd+uRvpzlcGOtvC/rDQcDg==" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-infinitescroll/4.0.1/infinite-scroll.pkgd.min.js" integrity="sha512-R50vU2SAXi65G4oojvP1NIAC+0WsUN2s+AbkXqoX48WN/ysG3sJLiHuB1yBGTggOu8dl/w2qsm8x4Xr8D/6Hug==" crossorigin="anonymous"></script>

    
    <script>
      
// carousel_homepage lazy load
$(function() {
    $('.carousel.lazy-load').bind('slide.bs.carousel', function (e) {
        var image = $(e.relatedTarget).find('img[data-src]');
        image.attr('src', image.data('src'));
        image.removeAttr('data-src');
    });
});
      
// add color to the images that has lazyloading with lazysizes
$("img.lazyload").css("background-color","#f8f9fa");

// fix each image height and width to stop the CLS
$('img.lazyload').each(function(i,j){
    var h = $(j).attr( 'height' );
    var w = $(j).attr( 'width' );
    var at = `data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 ${w} ${h}'%3E%3C/svg%3E`;
    $(j).attr('src', at);
});      
      
// copy to clipboard
 var clipboard = new Clipboard('.clipboardcopy');
    clipboard.on('success', function(e) {
        console.log(e);
    });
    clipboard.on('error', function(e) {
        console.log(e);
    });
    
      
      
// adding class to fix the pagination
$(document).ready(function() {
$('.pagination .page-item a, .pagination .page-item span ').addClass('page-link');
});


// TOC generator
jQuery.tableOfContents =                                                                   
function (tocList) {                                                                   
    jQuery(tocList).empty();                                                            
    var prevH2Item = null;                                                             
    var prevH2List = null;                                                             
    
    var index = 0;                                                                     
    jQuery(".blog-post h3, .blog-post h4, .blog-post h5, .blog-post h6").each(function() {                                                      
    
        var anchor = "<a class='anchor' id=" + jQuery(this).text().replace(/\ /g, '-') + "></a>";                                   
        jQuery(this).before(anchor);                                                        
        
        var li     = "<li><a href='#" + jQuery(this).text().replace(/\ /g, '-') + "'>" + 
                     jQuery(this).text() + "</a></li>";   
        
        if( jQuery(this).is(".blog-post h3") ){                                                        
            prevH2List = jQuery("<ul></ul>");                                               
            prevH2Item = jQuery(li);                                                        
            prevH2Item.append(prevH2List);                                             
            prevH2Item.appendTo(tocList);                                              
        } else {                                                                       
            prevH2List.append(li);                                                     
        }                                                                              
        index++;                                                                       
    });                                                                                
}    
$(document).ready(function() { //run the toc generator 
    jQuery.tableOfContents("#tocList"); 
});  


// This script is fixing the scroll to # from url
if ( window.location.hash ) scroll(0,0);
// fixing the scroll to # from url void some browsers issue
setTimeout( function() { scroll(0,0); }, 1);
$(function() {

    // your current click function
    $('.scroll').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top + 'px'
        }, 1000, 'swing');
    });

    // *only* if we have anchor on the url
    if(window.location.hash) {

        // smooth scroll to the anchor id
        $('html, body').animate({
            scrollTop: $(window.location.hash).offset().top + 'px'
        }, 1000, 'swing');
    }

});      
     

// greenmind some custome scripts for contact form and google conversions

$(document).ready(function() {
  // place this within dom ready function
  function showpanel() {     

		$('.wpcf7').find('.sent').each(function(el) {
	
	 $('.inputs-wrapper').hide();
	
    console.log("conversion count");
});
	
	$('.wpcf7-mail-sent-ok').addClass('alertok');
		
 }
 // use setTimeout() to execute
 setTimeout(showpanel, 1000)

});
	
  

   
   
   
   
/** Isotope Filtering with Active Button Styling */
jQuery(document).ready(function($) {
    var $container = $('.posts-container').isotope({
        itemSelector: '.post-item',
        layoutMode: 'fitRows'
    });

    $('.filter-buttons button').on('click', function() {
        var filterValue = $(this).attr('data-filter');

        // Isotope filtering
        $container.isotope({ filter: filterValue });

        // Button class toggle
        $('.filter-buttons button').removeClass('btn-primary').addClass('btn-outline-primary');
        $(this).addClass('btn-primary').removeClass('btn-outline-primary');
    });
});



//mobile filter sidebar

  jQuery(document).ready(function($) {
    $('#openFilter').on('click', function() {
      $('#filterSidebar').addClass('active');
    });

    $('#closeFilter').on('click', function() {
      $('#filterSidebar').removeClass('active');
    });

    $(document).on('click', function(e) {
      if (!$(e.target).closest('#filterSidebar, #openFilter').length) {
        $('#filterSidebar').removeClass('active');
      }
    });
  });
  
  
  //insure masonry 
  
jQuery(document).ready(function($) {
    var $container = $('.posts-container').isotope({
        itemSelector: '.post-item',
        layoutMode: 'masonry',
        percentPosition: true,
    });

    // Filter functionality
    $('.filter-buttons button').on('click', function() {
        var filterValue = $(this).attr('data-filter');
        $container.isotope({ filter: filterValue });

        // Ensure Masonry re-layouts after filtering
        $container.imagesLoaded().progress(function() {
            $container.isotope('layout');
        });
    });
});
  //insure masonry 



/** Isotope Filtering with Active Button Styling */

   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   ///infinite scroll
   
//-------------------------------------//
// init Masonry

let $grid = $('.grid').masonry({
  itemSelector: 'none', // select none at first
  columnWidth: '.grid__col-sizer',
 
  percentPosition: true,
  stagger: 30,
  // nicer reveal transition
  visibleStyle: { transform: 'translateY(0)', opacity: 1 },
  hiddenStyle: { transform: 'translateY(100px)', opacity: 0 },
});

// get Masonry instance
let msnry = $grid.data('masonry');

// initial items reveal
$grid.imagesLoaded( function() {
  $grid.removeClass('are-images-unloaded');
  $grid.masonry( 'option', { itemSelector: '.grid-item' });
  let $items = $grid.find('.grid-item');
  $grid.masonry( 'appended', $items );
});

//-------------------------------------//
// init Infinte Scroll

$grid.infiniteScroll({
  path: '.pagination__next',
  append: '.grid-item',
  outlayer: msnry,
  status: '.scroller-status',
});

//-------------------------------------//

///infinite scroll
   
    </script>


  </body>
</html>

