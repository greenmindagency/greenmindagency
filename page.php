<?php get_header(); // This fxn gets the header.php file and renders it ?>
<main class="ms-sm-auto col-lg-10">
        
     <!-- jarallax image -->
 
    <div data-jarallax data-speed="0.2"  class="row p-0 bg-dark jarallax">
      
        <?php $image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "medium" ); ?><?php $image_width = $image_data[1]; ?><?php $image_height = $image_data[2];  // get the featuered images width and height ?> 
      
      
      <img src="<?php the_post_thumbnail_url('medium'); ?>" class="jarallax-img" alt="<?php the_title(); ?>" width="<?php echo $image_width; ?>" height="<?php echo $image_height; ?>">
      
    <div class="col-12 p-5 text-white text-center">
    <h1 class="my-4 fw-bold card-title display-4"><?php the_title(); ?></h1>
    <h2 class="my-3 fw-bold display-5"><?php bloginfo('name'); ?></h2>
    
    <p class="my-4 card-text"><?php the_field('description'); ?></p>
    </div>
</div>
    
    <!-- jarallax image --> 

    
<div class="row my-5">

<!-- nave for all pages --> 	  
<nav class=" col-md-12 d-none d-sm-none d-md-block" aria-label="breadcrumb">
               <div class=" border-3 border-bottom pb-1 mb-4">
               <?php echo do_shortcode('[custom_breadcrumbs]'); ?>
               </div>
</nav>
<!-- nave for all pages --> 	   
	  
	  
	  
        <div class="col-md-9 mb-5">
           


            

   
   
   <?php if ( is_page( '145' )) { // Contact us page?>
   <div class="row">
   <div class="col-md-5">
     
            <h3 class="my-3">Contact Form</h3>
            
            <?php echo do_shortcode( '[contact-form-7 id="1793" title="contact"]' ); ?>
                        
   </div>
   
   <div class="col-md-7">
     
    
            <h3 class="my-3">Location</h3>
            <address>
            <strong>Green Mind Agency, Inc.</strong><br />
            125 Toman Bey Street, Zeitoun, Cairo, Egypt.
            </address>
            <ul class="list-unstyled lh-lg">
              <li> <i class="fa fa-mobile-alt me-3"></i> <abbr title="Phone">P:</abbr> +20 1000 1712 08 </li>
              <li> <i class="fa fa-phone me-3"></i> <abbr title="Phone">P:</abbr> +20 2451 4955 </li>
            </ul>
        
          
     
     <div class="ratio ratio-1x1">
       
     
     <iframe class="lazyload" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3451.67041369061!2d31.313073914899785!3d30.103624181860813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145815848ef2525b%3A0x51825e4511618dee!2sGreen%20Mind%20Agency!5e0!3m2!1sen!2seg!4v1612025318888!5m2!1sen!2seg" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
   </div>
   </div>
   
   
   
       <?php } elseif ( is_page( '642' )) { // quotation page?>
    <div class="row">
   <div class="col-md-8">
     
     <h3 class="my-3">Request a Quote Form</h3>
        <?php echo do_shortcode( '[contact-form-7 id="1793" title="contact"]' ); ?>
     
     
   </div>
  
   <div class="col-md-4">
     
     <div class="m-3">
            <h3 class="my-3">Location</h3>
            <address>
            <strong>Green Mind Agency, Inc.</strong><br />
            125 Toman Bey Street, Cairo, Egypt.
            </address>
            <ul class="list-unstyled lh-lg">
              <li> <i class="fa fa-mobile-alt me-3"></i> <abbr title="Phone">P:</abbr> +20 1000 1712 08 </li>
              <li> <i class="fa fa-phone me-3"></i> <abbr title="Phone">P:</abbr> +20 2451 4955 </li>
            </ul>
          </div>
     
   </div>
    </div>
	
          <?php } elseif ( is_page( '4875' )) { // portfolio page?>
 
   
     
     <h3 class="my-3">Client List</h3>
       
     
           <!-- show all categories -->
            <ul class="list-inline list-unstyled mb-0">

               <?php //showing new clients posts
global $post;
$args = array( 'numberposts' => 0, 'offset'=> 0, 'category__in' => 2, 'posts_per_page' => -1 );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :  setup_postdata($post); ?>   
           
          
             <li class="list-inline-item"> <i class='ps-2  fa fa-arrow-right'></i>  <a href="<?php the_permalink(); ?>">
    
    <?php the_field('client_name'); ?>
               </a>
               
  </li>

           
<?php endforeach; wp_reset_postdata();  //showing new clients posts ?>    
  
  
            
            <?php wp_reset_query(); ?>
              
            </ul>
            <!-- show all categories -->
     
     
     
    <div class="my-5 p-0" data-masonry='{"percentPosition": true }'>


 <?php query_posts('cat=1&showposts=99'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			

<!-- loading the thumbinails -->					

			<div class="p-1 col-md-4 col-12">
        
          <?php $image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "large" ); ?><?php $image_width = $image_data[1]; ?><?php $image_height = $image_data[2];  // get the featuered images width and height ?> 
        
        
        <a href="<?php echo get_permalink($link);?>"><img class="img-fluid lazyload" width="<?php echo $image_width; ?>" height="<?php echo $image_height; ?>" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php the_post_thumbnail_url('medium'); ?>"  alt="<?php if( !empty($image['alt']) ): ?><?php echo $image['alt']; ?><?php else: ?><?php the_title(); ?><?php endif; ?>" ></a>
					
      </div>
							
               
					
	<!-- loading the video if there  -->				
				
      
                  <?php if( have_rows('body') ): ?>
    <?php while( have_rows('body') ): the_row(); ?>
      
      
      
   <?php if( get_row_layout() == 'video' ): ?>
      <div class="p-1 col-md-4 col-12">
<div class="ratio ratio-<?php the_sub_field('video_size'); ?>">
  <iframe data-src="//www.youtube.com/embed/<?php the_sub_field('video'); ?>" class="lazyload" allowfullscreen></iframe>
</div>
</div>    
      
      
      
      
      
      
      <?php elseif( get_row_layout() == 'videogallery' ): ?>

   
	<?php	// loop through the rows of data
			    while ( have_rows('videogallery') ) : the_row();

	 $videoitem = get_sub_field('videoitem');
   $videosize = get_sub_field('videosize');
   ?>
   
    <div class="p-1 col-md-4 col-12">
<div class="ratio ratio-<?php echo $videosize  ?>">
  <iframe data-src="//www.youtube.com/embed/<?php echo $videoitem ?>" class="lazyload" allowfullscreen></iframe>
</div>
</div> 

		<?php		endwhile; ?> 

 
      
      
      
      
      
                  
<?php elseif( get_row_layout() == 'images' ): //if has images do this?>

  
<?php $images = get_sub_field('images'); if( $images ): ?>
<?php foreach( $images as $image ):
                      
            $size = 'large';
            $width = $image['sizes'][ $size . '-width' ];
            $height = $image['sizes'][ $size . '-height' ];
                      
 ?>
							
<div class="p-1 col-md-4 col-12">
                
<a href="<?php echo get_permalink($link);?>"><img class="m-0 img-fluid imgwidthfull lazyload" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $image['sizes']['large']; ?>" alt="<?php if( !empty($image['alt']) ): ?><?php echo $image['alt']; ?><?php else: ?><?php the_title(); ?><?php endif; ?>" width="<?php echo $width?>" height="<?php echo $height?>" ></a>
							
</div>	
<?php endforeach; ?>
<?php endif; ?> 
                      



      
      
      
      
      
      
       <?php endif; //end of if for all objects?>
      
       <?php endwhile; ?> 
   <?php endif; //end of if for all objects?>
   
      
			
	 <?php endwhile; endif; ?>


	
			
</div>	

     

<?php } elseif ( is_page( '5876' )) { // prices page?>
  
   <!-- flixable content -->
<article class="blog-post">

							
                      
<?php if( have_rows('body') ): ?>
<?php while( have_rows('body') ): the_row(); ?>
                      
<?php include get_theme_file_path( '/flixable.php' ); //load sidebar.php ?>
                 
<?php endwhile; ?>
<?php endif; ?>
          </article>                 
<!-- flixable content -->  



  
    <?php } elseif ( is_page( '4680' )) { // services page?>
   
     
    
   
     <div class="col-12 ">
     <h3 class=" mb-5 border-bottom border-3 mb-3 pb-3">Digital Marketing Services List</h3>
     </div>
     
   
   
   
       <?php $categories = get_categories (array('orderby' => 'id', 'child_of'=>'1', 'hide_empty' => 1)); ?>

      <?php  foreach($categories as $category):  ?>

      <?php query_posts( array ( 'category_name' => $category->slug, 'showposts' => '5', 'child_of'=>'1' ) ); ?>
           
           <div class="col-12">
             <div class="align-middle">
               
               
               
               <a href="<?php $category_id = get_query_var('cat'); echo get_category_link( $category_id ); ?>">
               
               <div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4"> 
      
      
      
      
      
      
      <?php $category_id = get_queried_object_id(); //this code to get the image from taxonimy category?>
 <?php $cat_id = 'category_'.$category_id; ?>
 <?php $imagecat = get_field( 'image', $cat_id); ?>
      
      
      
     <!-- getting the size of each image to be added  -->
    <?php foreach( $imagecat as $images ):
            
            $size = 'medium';
            $width = $imagecat['sizes'][ $size . '-width' ];
            $height = $imagecat['sizes'][ $size . '-height' ];
            
           ?><?php endforeach; ?>
     <!-- getting the size of each image to be added  -->
      
  <div class="col-12">
 <img class="img-fluid lazyload" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $imagecat['sizes']['medium']; ?>" alt="<?php echo $imagecat['alt']; //this code to get the image from taxonimy category?>"  width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
 </div> 
      
      
      
      
    
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h4 class="card-title text-dark"> <i class="me-2 fa fa-<?php $category = get_queried_object(); 'category_' . $category->term_id; // loading the category id?><?php if( get_field('icon', 'category_' . $category->term_id ) ): //if there something fire?><?php $id = 'category_'.get_queried_object()->term_id; the_field('icon', $id); ?><?php else: //if there not fire default ?><?php the_field('icon', 2); ?><?php endif; // end of category?> fa-1x"></i> <?php single_cat_title(); ?></h4>
        <p class=" text-dark card-text"><?php $id = 'category_'.get_queried_object()->term_id; the_field('description', $id); ?></p>
        <p class="card-text"><i class="pe-2 fa fa-arrow-right "></i> 
     More Details</p>
      </div>
    </div>
  </div>
</div>
    </a>             
               
            
  </div>
</div>
         <?php endforeach; ?>
            
            <?php wp_reset_query(); ?>
   
   
   
   
   
     <div class="col-12 ">
     <h3 class=" my-5 border-bottom border-3 mb-3 pb-3">Services List</h3>
     </div>
     
   
   
     <div class="col-12 ">
           <div class="row p-0" data-masonry='{"percentPosition": true }' >
             
    <?php
        $tags = get_tags();
        foreach ( $tags as $tag ) :
        $tag_link = get_tag_link( $tag->term_id );
   
    
     	$tag_name = get_sub_field('tag_name');
              $descriptiontag = get_field('description', $tag);
								
                   
                    $imagetag = get_field( 'image', $tag);
               $icontag = get_field( 'icon', $tag);
    ?>

    
          
         
            
      
         
            
    <div class="col-12 col-md-6">
      
                <a href="<?php echo $tag_link; ?>"> 
               <div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-12">
      <!-- getting the size of each image to be added  -->
    <?php foreach( $imagetag as $images ):
            
            $size = 'medium';
            $width = $imagetag['sizes'][ $size . '-width' ];
            $height = $imagetag['sizes'][ $size . '-height' ];
            
           ?><?php endforeach; ?>
     <!-- getting the size of each image to be added  -->
               
               
              
     
               
               <img class="img-fluid lazyload" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $imagetag['sizes']['medium']; ?>" alt="<?php echo $imagetag['alt']; //this code to get the image from taxonimy category?>"  width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
    </div>
    <div class="col-md-12">
      <div class="card-body">
        <h4 class="text-dark card-title">
          
          
         <i class="me-2 fa-1x <?php echo $icontag; ?>"></i>
          
          
          <?php echo $tag->name; ?></h4>
        <p class="text-dark card-text">  <?php echo $descriptiontag; ?></p>
       
      </div>
    </div>
  </div>
</div>
               
          
               </a>
            </div>  
    
    
    
    <?php
        endforeach;
    ?>

           <?php wp_reset_query(); ?>
             </div>  
          
           </div>   
   
   
   <!-- flixable content -->
<article class="blog-post">

							
                      
<?php if( have_rows('body') ): ?>
<?php while( have_rows('body') ): the_row(); ?>
                      
<?php include get_theme_file_path( '/flixable.php' ); //load sidebar.php ?>
                 
<?php endwhile; ?>
<?php endif; ?>
          </article>                 
<!-- flixable content -->   

   
   
   <?php } else { // Other / All Other pages ?>
   

             
<!-- flixable content -->
<article class="blog-post">

							
                      
<?php if( have_rows('body') ): ?>
<?php while( have_rows('body') ): the_row(); ?>
                      
<?php include get_theme_file_path( '/flixable.php' ); //load sidebar.php ?>
                 
<?php endwhile; ?>
<?php endif; ?>
          </article>                 
<!-- flixable content -->   
       
	   
	   
   <?php } ?>
   
   
   
                   
             
                
   
           
 
</div>
        
        
        <div class="col-md-3">
          
          
           <?php include get_theme_file_path( '/sidebar.php' ); //load sidebar.php ?>


    </div>
          
          
             
    
        
        
        
      </div>
      

    

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>