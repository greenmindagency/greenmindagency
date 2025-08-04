<?php get_header(); // This fxn gets the header.php file and renders it ?>

      
<main class="ms-sm-auto col-lg-10">
        

     <div class="row ">
    
          <div class="bg-dark align-items-center text-center text-white col-12 p-4">
    

    
    
    <div class="p-5">
        <h1 class="fw-bold display-5"><?php is_front_page() ? bloginfo('description') : wp_title(''); ?></h1>
        
      <h2>Green Mind Agency</h2>
    <p>Provides Digital Marketing services for all Business needs</p>
    <p>
      
      <a class="m-1 btn btn-primary" href="tel:+201000171208" target="_self">Call now! +201000171208</a>
      <a class="m-1 btn btn-light" href="request-a-quote/">Start a Project</a>
      <a href="#mainposts" class="m-1 btn btn-primary ">Latest Projects</a></div>
            
     
      

     
    
  
      
    
    
  </div>
  </div>
  
   <div class="row ">
 <!-- carousel -->
      
      <div id="carouselExampleCaptions" data-bs-pause="false" data-bs-interval="7000" class="bg-dark px-0 col-12 lazy-load carousel keyboard touch slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    

    
   <?php if( have_rows('slider', 1797) ): $counter = 0; ?>
<?php while( have_rows('slider', 1797) ): the_row(); ?>
    
    <?php if( $counter == 0 ) { ?>
     <!-- first element -->
     <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
    <?php $i=1; ?>
    <?php } ?>

     <?php if( $counter > 0 ) { ?> 
    <!-- other elements -->
        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $i++; ?>"></li>
    	   <?php } ?>
    
    
    	<?php $counter++; endwhile; ?>
	<?php endif; ?>
    
  </ol>
        
        
        
  <div class="carousel-inner">
    
   

    
     <?php if( have_rows('slider', 1797) ): $counter = 0; ?>
<?php while( have_rows('slider', 1797) ): the_row(); 

		$title = get_sub_field('title');
		$description = get_sub_field('description');
		$image = get_sub_field('image');
    $link = get_sub_field('link');	
		?>
    
    <!-- getting the size of each image to be added  -->
    <?php foreach( $image as $images ):
            
            $size = 'large';
            $width = $image['sizes'][ $size . '-width' ];
            $height = $image['sizes'][ $size . '-height' ];
            
           ?><?php endforeach; ?>
     <!-- getting the size of each image to be added  -->
    
    <?php if( $counter == 0 ) { ?>
    
     <!-- first element -->
    <div class="carousel-item active">
      
    
       <img class="img-fluid" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php echo $title; ?>" src="<?php echo $image['sizes']['large']; ?>">
      
       <a href="<?php echo get_permalink($link);?>">
       <div class="carousel-caption text-uppercase">
         <h2 class="fw-bold cover-font"><?php echo $title; ?></h2>
         <p class="d-none d-sm-block cover-font-s"><?php echo $description; ?></p>
         
      </div>
      </a>
      
    </div>
    
    <!-- first element -->
    <?php } ?>



    
   
  


    

   <?php if( $counter > 0 ) { ?>
    
     
    <!-- other elements -->
    <div class="carousel-item">
      
        <img class="lazyload img-fluid" data-expand="-100" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php echo $title; ?>" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $image['sizes']['large']; ?>">
      
     
      <a href="<?php echo get_permalink($link);?>">
        
        <div class="carousel-caption text-uppercase">
        <h2 class="fw-bold cover-font"><?php echo $title; ?></h2>
        <p class="d-none d-sm-block cover-font-s"><?php echo $description; ?></p>
      </div>
      </a>
    </div>
    <!-- other elements -->  
<?php } ?>

  
	<?php $counter++; endwhile; ?>
	<?php endif; ?>
    
    
    
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>
      
<!-- carousel -->
  </div> 
    
      
      
         
         <div class="py-spacer justify-content-center bg-light text-center row ">
           
          
           <h2 class="fw-bold text-uppercase">Digital Marketing Agency Services</h2>
           
           <p class="mb-5">Your brand development for emarketing is our main strategy</p>
            
           <!-- show all categories -->
           

             <?php $categories = get_categories (array('orderby' => 'id', 'child_of'=>'1', 'hide_empty' => 1)); ?>

      <?php  foreach($categories as $category):  ?>

      <?php query_posts( array ( 'category_name' => $category->slug, 'showposts' => '5', 'child_of'=>'1' ) ); ?>
           
           <div class="col-12 col-md-4 col-lg-3">
             <div class="align-middle text-center"> <a href="<?php $category_id = get_query_var('cat'); echo get_category_link( $category_id ); ?>">
    <i class="my-4 fa fa-<?php $category = get_queried_object(); 'category_' . $category->term_id; // loading the category id?><?php if( get_field('icon', 'category_' . $category->term_id ) ): //if there something fire?><?php $id = 'category_'.get_queried_object()->term_id; the_field('icon', $id); ?><?php else: //if there not fire default ?><?php the_field('icon', 2); ?><?php endif; // end of category?> fa-3x"></i>
    <h3 class="mx-4 pb-3 border-bottom h6 text-dark text-uppercase border-3"><?php single_cat_title(); ?></h3>
               </a>
               
               
               

								
  <?php $category = get_queried_object(); 'category_' . $category->term_id; // loading the category id and get related tags?>       
  <?php if( have_rows('right_col',  'category_' . $category->term_id) ): ?>
  
    				

                  <ul class="lh-lg list-unstyled">
  <?php $category = get_queried_object(); 'category_' . $category->term_id; // loading the category id?>       
  <?php if( have_rows('right_col',  'category_' . $category->term_id) ): ?>
	<?php while( have_rows('right_col',  'category_' . $category->term_id) ): the_row(); 

									$tag_name = get_sub_field('tag_name');
									
	?>

  
  

                      <li>
     <a class="text-dark text-capitalize" href="<?php echo get_tag_link($tag_name); ?>"><?php $tag = get_tag($tag_name); echo $tag->name;?></a>
								</li>

  
<?php endwhile; ?>

                  </ul>
                  
            <?php endif; ?>
                  <?php endif; // end get related tags ?>      
                  
	
               
               
               
               
               
  </div>
</div>
         <?php endforeach; ?>
            
            <?php wp_reset_query(); ?>
            
            <!-- show all categories -->
         <p>
            <a href="services/" class="mt-5 btn btn-primary" >All digital marketing agency services</a>
           </p>  
    
           
         </div>

     
  
  
  <div class="py-spacer justify-content-center text-center row ">
    
         <h2 class="fw-bold text-uppercase">Latest Clients and Brands</h2>
           
           <p class="mb-5">From top organizations and leading financial companies to the most popular medical brands, this list reflects our dedication and hard work.</p>
    

    <?php //showing new clients posts
global $post;
$args = array( 'numberposts' => 12, 'offset'=> 0, 'category__in' => 2 );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :  setup_postdata($post); ?>          
       

      
      <a class="col-md-3 col-sm-3 col-6" href="<?php the_permalink(); ?>"> 
      
       <?php if( get_field('client_logo') ): //if client logo is ready ?>
      <?php $image = get_field( 'client_logo'); ?>
      <div class="mb-3 border">
    <img class="m-0 img-fluid imgwidthfull lazyload" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $image['sizes']['medium']; ?>" alt="<?php if( !empty($image['alt']) ): ?><?php echo $image['alt']; ?><?php else: ?><?php the_field('client_name'); ?><?php endif; ?>" width="<?php echo $image['width']?>" height="<?php echo $image['height']?>" title="<?php the_field('client_name'); ?>" />
        </div>
<?php endif; //end if client logo is ready ?>
      
      
      </a>
      
 
          
<?php endforeach; wp_reset_postdata();  //showing new clients posts ?>    
    
    
    <p class="text-center">
            <a href="clients/" class="mt-5 btn btn-primary" >Find Our Full Clients List</a>
           </p> 

    
  </div>

  

  
  <div id="mainposts" class="py-spacer justify-content-center  row bg-light">
    
    
    <div class=" text-center">

         <h2 class="fw-bold text-uppercase"><?php echo get_the_category_by_ID(1); ?> and Portofolio</h2>
           
           <p class="mb-5">Whether local or international brands, we strive to give creative digital solutions and make them ready for all your business.</p>
     </div>
    
    
    
    
<div class="row mb-5 p-0" data-masonry='{"percentPosition": true }'>
  
 <?php 

                                      
query_posts(array( 'orderby' => 'date', 'order' => 'DESC', cat => 1, 'posts_per_page' => 12 )); ?> 
  
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    
     <?php include get_theme_file_path( '/loop.php' ); //load loop.php ?>
    
 <?php endwhile; endif; ?>  
</div>

    
    
    <p class="text-center">
            <a href="latest-work/" class="mt-5 btn btn-primary" >Find All Digital Projects</a>
           </p> 
    
    
    
    
    
    
  </div>

  
   
  <div class="py-spacer justify-content-center text-center row">
    
         <h2 class="fw-bold text-uppercase">Our Digital Advertising Agency Clients are Worldwide</h2>
           
           <p class="mb-5">We specialize in full-range digital marketing solutions in Egypt, Middle East, Europe, China, and worldwide. Our performance-driven digital online marketing is trusted by 2500+ clients!</p>
    
        
       <?php $image = get_field('clients-location' , 1797); if( !empty($image) ):
        
        
        $size = 'large';
            $width = $image['sizes'][ $size . '-width' ];
            $height = $image['sizes'][ $size . '-height' ];
        
        
        ?>
        
				<img class="img-fluid lazyload" data-expand="-100" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" width="<?php echo $width ?>" height="<?php echo $height ?>" data-src="<?php echo $image['sizes']['large']; ?>" title="Clients Locations | <?php bloginfo('name'); ?>" alt="Our Digital Advertising Agency Clients are Worldwide | <?php bloginfo('name'); ?>" />
        
				<?php endif; ?>
        
    
     <p>
            <a href="clients/" class="mt-5 btn btn-primary" >Find full clients list</a>
           </p>  
    
        
  </div>

      
      <div class="row p-0 my-5 ">
        
        
      
        
        
         <div class="col-md-9">
           
           
           
           
           
           
           
           
           
           
           
           
           
           
             <h2 class="border-bottom border-3 mb-3 pb-3 ">Latest Articles</h2>

        <div class="row mb-3 p-0" data-masonry='{"percentPosition": true }'>   
           <?php query_posts('cat=155&showposts=6'); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php global $more; $more = 0; ?>
           <div class="mb-3 col-12 col-md-6">
           <div class="card mb-3">
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
        <?php wp_reset_query(); ?> 
</div>             
 
           
 
           <p class="text-center">
             <a href="articles/" class="mb-5 btn btn-primary" >All Our Agency Articles</a>
           </p>  
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           <h2 class="border-bottom border-3 mb-3 pb-3 ">Latest News</h2>
           
<div class="row mb-3 p-0" data-masonry='{"percentPosition": true }'>   
           <?php query_posts('cat=4&showposts=6'); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php global $more; $more = 0; ?>
           <div class="mb-3 col-12 col-md-6">
           <div class="card mb-3">
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
        <?php wp_reset_query(); ?> 
</div>             
 
           <p class="text-center">
             <a href="news/" class="mb-5 btn btn-primary" >All Our Agency News</a>
           </p>  
           
           
           
           
      
           
           
           
           
            <!-- flixable content -->
                      
           
           <article class="p-3 blog-post">
             
<?php if( have_rows('body' , 1797) ): ?>
<?php while( have_rows('body' , 1797) ): the_row(); ?>
             
             
    <?php include get_theme_file_path( '/flixable.php' ); //load sidebar.php ?>

                      

<?php endwhile; ?>
<?php endif; ?>
      
             
              </article>  
<!-- flixable content -->      
           
           
           
           
           
           
           
           
</div>
        
        
        <div class="col-md-3">
          
          
           <?php include get_theme_file_path( '/sidebar.php' ); //load sidebar.php ?>


    </div>
          
             
    
        
        
        
      </div>
      
      
       


<?php get_footer(); // This fxn gets the footer.php file and renders it ?>