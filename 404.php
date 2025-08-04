<?php get_header(); // This fxn gets the header.php file and renders it ?>
<main class="ms-sm-auto col-lg-10">

    <!-- jarallax image -->
 
    <div data-jarallax data-speed="0.2"  class="row p-0 bg-dark jarallax">
      
        <?php $image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "large" ); ?><?php $image_width = $image_data[1]; ?><?php $image_height = $image_data[2];  // get the featuered images width and height ?> 
      
    <?php $image = get_field('image-header', 1797); if( !empty( $image ) ):
  
   $size = 'large';
            $width = $image['sizes'][ $size . '-width' ];
            $height = $image['sizes'][ $size . '-height' ];
   ?> 
      
      <img  src="<?php echo $image['sizes']['large']; //fire the image as a large size?>" class="jarallax-img" alt="<?php bloginfo('name'); ?>" width="<?php echo $width?>" height="<?php echo $height?>">
      
      <?php endif; ?>
      
      
    <div class="col-12 p-5 text-white text-center">
   <h1 class="card-title display-3">Page Not Found</h1>
    <p class="card-text">Need More Information about us? We are <a href="https://greenmindagency.com">Green Mind Agency</a></p>
    <p>
          <a href="/about-us" class="btn btn-primary">About Us</a>
          <a href="/contact-us" class="btn btn-light ">Contact Us</a>
        </p>
    </div>
</div>
    
    <!-- jarallax image --> 



 
      <div class="row p-0 my-5">
        
        
      
        
        
         <div class="col-md-9">
           
            <h2 class="border-bottom border-3 pb-3 mb-3">Latest Projects</h2>
           
              
<div class="row mb-5 p-0" data-masonry='{"percentPosition": true }'>
<?php query_posts('cat=1&showposts=12'); ?>   
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    
     <?php include get_theme_file_path( '/loop.php' ); //load loop.php ?>
    
 <?php endwhile; endif; ?>  
</div>
          
           
           
    
<?php bittersweet_pagination(); // get the pagination ?> 
  
    
           
 
</div>
        
        
        <div class="col-md-3">
          
          
           <?php include get_theme_file_path( '/sidebar.php' ); //load sidebar.php ?>


    </div>
          
             
    
        
        
        
      </div>
   


<?php get_footer(); // This fxn gets the footer.php file and renders it ?>