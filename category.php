<?php get_header(); // This fxn gets the header.php file and renders it ?>
<main class="ms-sm-auto col-lg-10">
  
<!-- jarallax image -->
 
<div data-jarallax data-speed="0.2"  class="row p-0 bg-dark jarallax">
      
        <?php $image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "squaresmall" ); ?><?php $image_width = $image_data[1]; ?><?php $image_height = $image_data[2];  // get the featuered images width and height ?> 
      
     <img src="<?php $category_idcat = get_queried_object_id(); //this code to get the image from taxonimy category?><?php $cat_idcat = 'category_'.$category_idcat; ?><?php $image = get_field( 'image', $cat_idcat); ?><?php if( get_field( 'image', $cat_idcat) ): // if there something fire?><?php echo $image['sizes']['squaresmall']; //this code to get the image from taxonimy category?><?php else: //if there not fire first image from the first post ?><?php query_posts('cat=' . $category_idcat . '&showposts=1'); // start the loop to get the first item?><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><?php global $more; $more = 0; ?><?php the_post_thumbnail_url('squaresmall'); ?><?php endwhile; endif; ?><?php wp_reset_query(); //end of the loop?><?php endif; // end of get the image from taxonimy category?>" class="jarallax-img" alt="<?php bloginfo('name'); ?>" width="<?php echo $image_width; ?>" height="<?php echo $image_height; ?>">
      

      
    <div class="col-12 p-5 text-white text-center">
    <h1 class="my-4 fw-bold"><?php $id = 'category_'.get_queried_object()->term_id; the_field('subtitle', $id); ?></h1>
    <h2 class="my-3 fw-bold card-title text-uppercase"><?php $category = get_queried_object(); 'category_' . $category->term_id; // loading the category id?><?php if( get_field('icon', 'category_' . $category->term_id ) ): //if there something fire?><i class="text-white mx-3 fa fa-<?php $id = 'category_'.get_queried_object()->term_id; the_field('icon', $id); ?>"></i><?php else: //if there not fire default ?><?php endif; // end of category?><?php single_cat_title(); ?></h2>
    <p class="my-4 card-text"><?php $id = 'category_'.get_queried_object()->term_id; the_field('description', $id); ?></p>
	
	
      <a class="m-1 btn btn-primary" href="tel:+201000171208" target="_self">Call now! +201000171208</a>
      <a class="m-1 btn btn-light" href="#footer">Start a Project</a>
	  
	  
    </div>
	
	
	
	
	
</div>
    
<!-- jarallax image --> 

<div class="container-fluid p-0">
    
<div class="row p-0 my-5">
      



<?php if ( is_category( '2' )) { // clients category?>
  
<div class="col-md-9 mb-5">  
<h2 class="border-bottom border-3 mb-3 pb-3">Our Projects Are Worldwide</h2>
<div class="row p-0">
          
          
<?php $category_id = get_queried_object_id(); //this code to get the image from taxonimy category?>
 <?php $cat_id = 'category_'.$category_id; ?>
 <?php $image = get_field( 'image', $cat_id); ?>
         

          
         <?php $categories = get_categories (array('parent' => 2, 'orderby' => 'include','order' => 'ASC', 'hide_empty' => 1 )); ?>
          <?php  foreach($categories as $category):  ?>
          <?php query_posts( array ( 'category_name' => $category->slug, 'showposts' => '5' ) ); ?>
          <div class="col-md-3 col-6 ">
  <div class="mb-3 border">
 <?php $category_id = get_queried_object_id(); //this code to get the image from taxonimy category?>
 <?php $cat_id = 'category_'.$category_id; ?>
 <?php $image = get_field( 'image', $cat_id); ?>
            
 <a href="<?php $category_id = get_query_var('cat'); echo get_category_link( $category_id ); ?>">
   
   <!-- getting the size of each image to be added  -->
    <?php foreach( $image as $images ):
            
            $size = 'medium';
            $width = $image['sizes'][ $size . '-width' ];
            $height = $image['sizes'][ $size . '-height' ];
            
           ?><?php endforeach; ?>
     <!-- getting the size of each image to be added  -->
                  
                  
									<img class="img-fluid lazyload" data-expand="-100" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $image['sizes']['medium']; ?>" title="<?php single_cat_title(); ?>" alt="Latest Digital Marketing Work for <?php single_cat_title(); ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" /></a>
                
             
    
    
         </div>
            
               
                
                <p class="mb-3 text-center">
                  <?php single_cat_title(); ?>
                </p>
            
          </div>
  
  
          <!-- counter to set every 3 items in a row div -->
          <?php $counter++;
                  if ($counter % 4 == 0) {
                  echo '</div><div class="team-members row">';
                } // set every 3 section inside a loop ?>
          <?php endforeach; ?>
          <?php wp_reset_query(); ?>
  
  
  
  
  
  
  
  
  
  
  
  <?php //showing new clients posts
global $post;
$args = array( 'numberposts' => 0, 'offset'=> 0, 'category__in' => 2, 'posts_per_page' => -1 );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :  setup_postdata($post); ?>          
        <div class="col-md-3 col-6">

          
      
      <a href="<?php the_permalink(); ?>"> 
      
       <?php if( get_field('client_logo') ): //if client logo is ready ?>
      <?php $image = get_field( 'client_logo'); ?>
      <div class="mb-3 border">
    <img class="m-0 img-fluid imgwidthfull lazyload" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $image['sizes']['medium']; ?>" alt="<?php if( !empty($image['alt']) ): ?><?php echo $image['alt']; ?><?php else: ?><?php the_field('client_name'); ?><?php endif; ?>" width="<?php echo $image['width']?>" height="<?php echo $image['height']?>" title="<?php the_field('client_name'); ?>" />
        </div>
<?php endif; //end if client logo is ready ?>
      
      
      </a>
      
          <p class="mb-3 text-center"> <?php the_field('client_name'); ?></p>

    
          
</div>
          
<?php endforeach; wp_reset_postdata();  //showing new clients posts ?>    
  
  
  
  
  
  
  
  
  
  
        </div>
  
  <!-- flixable content -->
		 <article class="p-3 blog-post">					
<?php $term = get_queried_object(); // get the current taxonomy term ?>
<?php if( have_rows('body', $term) ): ?>
<?php while( have_rows('body', $term) ): the_row(); ?>
        
<?php include get_theme_file_path( '/flixable.php' ); //load sidebar.php ?>          

<?php endwhile; ?>
<?php endif; ?>
          </article>                 
<!-- flixable content -->  
</div>
  
  <div class="col-md-3 mb-2">
  <?php include get_theme_file_path( '/sidebar.php' ); //load sidebar.php ?>
  </div>

<?php } elseif ( is_category( '1' )) { // latest work category?>

   
<div class="col-md-12 mb-5">
           

<!-- flixable content -->
		 			
<?php $term = get_queried_object(); // get the current taxonomy term ?>
<?php if( have_rows('body', $term) ): ?>
  <article class="blog-post">		
    
<?php while( have_rows('body', $term) ): the_row(); ?>
     <?php include get_theme_file_path( '/flixable.php' ); //load sidebar.php ?>  
<?php endwhile; ?>
    </article>   
<?php endif; ?>
                        
<!-- flixable content -->  


</div>

   
     


  
<?php } elseif ( is_category(array( 4 ))) { // news category?>
  
  
<div class="col-md-9 mb-5">      
<h2 class="border-bottom border-3 mb-3 pb-3">Latest Posts</h2>
              
<div class="row mb-5 p-0" data-masonry='{"percentPosition": true }'>          							
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post();  ?>
			
<div class="mb-3 col-12 col-md-6">
 <div class="card ">
  <div class="row g-0">
    <div class="col-12">
      
      <?php $image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "medium" ); ?><?php $image_width = $image_data[1]; ?><?php $image_height = $image_data[2];  // get the featuered images width and height ?>  
            
      <a href="<?php echo get_permalink($post->ID) // get the loop-item the link ?>"><img class="card-img-top img-fluid lazyload" data-expand="-100" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" width="<?php echo $image_width; ?>" height="<?php echo $image_height; ?>" data-src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" ></a>
      
      
    </div>
    <div class="col-12">
      <div class="card-body">
        <h3 class="card-title"><?php the_title(); ?></h3>
        <p class="card-text"><?php the_field('description'); ?></p>
        <p class="card-text"><small class="text-muted"><?php echo get_the_time('jS', $post->ID); // get the loop-item the time ?> <?php echo get_the_time('M, Y', $post->ID); // get the loop-item the time  ?></small></p>
      </div>
    </div>
  </div>
</div>
</div>      
 
  <?php endwhile; endif; ?>         
 </div>   
  
  <?php bittersweet_pagination(); // get the pagination ?> 

 <!-- flixable content -->
		 				
<?php $term = get_queried_object(); // get the current taxonomy term ?>
<?php if( have_rows('body', $term) ): ?>
  
  <article class="p-3 blog-post">	
    
<?php while( have_rows('body', $term) ): the_row(); ?>
<?php include get_theme_file_path( '/flixable.php' ); //load sidebar.php ?>
<?php endwhile; ?>
    
      </article>   
  
<?php endif; ?>
                      
<!-- flixable content -->   
  
  
  </div>
        
  
  <div class="col-md-3 mb-2">
  <?php include get_theme_file_path( '/sidebar.php' ); //load sidebar.php ?>
  </div>

  
<?php } elseif ( is_category(array( 155))) { // articles category?>
  
  
<div class="col mb-5">      

  
    <!-- flixable content -->
		 <article class="blog-post">					
<?php $term = get_queried_object(); // get the current taxonomy term ?>
<?php if( have_rows('body', $term) ): ?>
<?php while( have_rows('body', $term) ): the_row(); ?>
        
<?php include get_theme_file_path( '/flixable.php' ); //load sidebar.php ?>          

<?php endwhile; ?>
<?php endif; ?>
          </article>                 
<!-- flixable content -->  
  
  
  
  </div>
          
<?php } else { // Other / All Other Categories ?>

<!-- All Other Category Pages -->  

<!-- flixable content -->
			
  <?php $category = get_queried_object(); 'category_' . $category->term_id; // loading the category id?>   
  <?php if( have_rows('body',  'category_' . $category->term_id)  ): // if has flixable content ?>
       
<div class="col-md-9 mb-5">
	          
           
  
<nav class="border-3 d-none d-sm-none d-md-block border-bottom pb-3 mb-3" aria-label="breadcrumb">
               
               <ul class="breadcrumb">
               <li class="breadcrumb-item active"><a href="/" rel="v:url" property="v:title">Home</a></li>
               <li class="breadcrumb-item active"><?php single_cat_title(); ?></li></ul>
               
</nav>
     
<article class="blog-post mb-5">	
      <?php while( have_rows('body',  'category_' . $category->term_id) ): the_row(); ?>      
     <?php include get_theme_file_path( '/flixable.php' ); //load flixable.php ?>  
     <?php endwhile; ?>
  
 </article> 


</div>       

  
  <?php else : // if no flixable content ?>
  
   
<?php endif; //end if flixable content is in or out?> 
  

 <?php $term = get_queried_object(); // get the current taxonomy term ?>  
<div class="mb-5 col-md-3">
  
  
  <?php include get_theme_file_path( '/sidebar.php' ); //load sidebar.php ?>          
 
</div>


  
<!-- All Other Category Pages -->  

<?php } ?>
  

  
 </div>       
        
</div>
      

    

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>