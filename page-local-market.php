<?php
/*
Template Name: Local Market
*/
?>

<?php get_header(); // This fxn gets the header.php file and renders it ?>

<main class="ms-sm-auto col-lg-10">


        
     <!-- jarallax image -->
 
    <div data-jarallax data-speed="0.2"  class="row p-4 bg-dark jarallax">
      
        
      
    <div class="col-12 p-5 text-white text-center">
    <h1 class="fw-bold mb-4"><?php bloginfo('name'); ?> | <?php the_title(); ?></h1>
    
    
    <h2 class="my-4 card-text"><?php the_field('subtitle'); ?></h2>
	
	
    <div class="my-3">
	  
      <a class="m-1 btn btn-primary" href="tel:+201000171208" target="_self">Call now! +201000171208</a>
      <a class="m-1 btn btn-light" href="/request-a-quote/">Start a Project</a>
      <a href="/latest-work/" class="m-1 btn btn-primary ">Latest Projects</a>
	  
	  </div>
	  
	  
	 
	  
	  </div>
            
     
      


    </div>

    
    <!-- jarallax image --> 

    

            
<!-- flixable content -->
<article class="blog-post row  justify-content-center mb-5">

							
							
							
							
							
							
                      
<?php if( have_rows('body') ): ?>
<?php while( have_rows('body') ): the_row(); ?>
                      
<?php include get_theme_file_path( '/flixable.php' ); //load sidebar.php ?>
                 
<?php endwhile; ?>
<?php endif; ?>
          </article>                 
<!-- flixable content -->   
   
   
   


<?php get_footer(); // This fxn gets the footer.php file and renders it ?>