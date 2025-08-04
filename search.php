<?php get_header(); // This fxn gets the header.php file and renders it ?>
<main class="ms-sm-auto col-lg-10">

  
  <div class="row p-0 my-5">
      
        <div class="col-md-9">
      
          
      
    <?php if ( have_posts() ) : ?> 
   
   <h2 class="border-bottom border-3 pb-3 mb-3">Search Results</h2>
          
     <div class="row"  data-masonry='{"percentPosition": true }'> 
       
       <?php while ( have_posts() ) : the_post(); ?>
    <?php include get_theme_file_path( '/loop.php' ); //load loop.php ?>
  
    
    <?php endwhile; ?>
   
   <?php bittersweet_pagination(); // get the pagination ?> 
   </div>  
     
   <?php else : // if can't find any search resultes ?>

 <h2 class="border-bottom border-3 pb-3 mb-3"><i class="fa fa-times me-2"></i> Nothing Found for your Search Results</h2>
          
   <h3 class="pb-3 mb-3">Check our latest posts instead</h3>
          <div class="row"  data-masonry='{"percentPosition": true }'>
            
       <?php query_posts('cat=1&showposts=12'); ?>   
       <?php while ( have_posts() ) : the_post(); ?>
    <?php include get_theme_file_path( '/loop.php' ); //load loop.php ?>
  
    
    <?php endwhile; ?>
   
   <?php bittersweet_pagination(); // get the pagination ?> 
   </div>  
          
 	<!-- REALLY stop The Loop. -->
 <?php endif; ?>
          
    </div>        
          
        <div class="col-md-3">
          
          
           <?php include get_theme_file_path( '/sidebar.php' ); //load sidebar.php ?>


    </div>

</div>







    
 

    

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>