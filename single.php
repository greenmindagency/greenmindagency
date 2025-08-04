<?php get_header(); // This fxn gets the header.php file and renders it ?>
<main class="ms-sm-auto col-lg-10">
        
     <!-- jarallax image -->
 
    <div data-jarallax data-speed="0.2"  class="row p-0 bg-dark jarallax">
      
        <?php $image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "large" ); ?><?php $image_width = $image_data[1]; ?><?php $image_height = $image_data[2];  // get the featuered images width and height ?> 
      
      
      <img src="<?php the_post_thumbnail_url('large'); ?>" class="jarallax-img" alt="<?php the_title(); ?>" width="<?php echo $image_width; ?>" height="<?php echo $image_height; ?>">
      
    <div class="col-12 p-5 display-6 lead text-white text-center">
    <h1 class="my-4 fw-bold card-title"><?php the_title(); ?></h1>
    <h2 class="my-3 fw-bold text-uppercase"><a href="<?php foreach((get_the_category()) as $category) { if($category->parent != 1){  //load category?><?php echo get_category_link($category->cat_ID) //echo the link?><?php } } ?>"><i class="mx-2 fa fa-<?php foreach((get_the_category()) as $category) { if($category->parent != 1){  //load parent category?><?php if( get_field('icon', 'category_' . $category->term_id ) ): //if there something fire?><?php echo (get_field('icon', 'category_' . $category->term_id)) ?><?php else: //if there not fire default ?><?php endif; ?><?php } } // end of loading parent category?>"></i> <?php foreach((get_the_category()) as $category) { if($category->parent != 1){ echo $category->cat_name . ' '; } } //echo the first category name ?></a></h2>
    
    <p class="my-4 card-text"><?php the_field('description'); ?></p>
    </div>
</div>
    
    <!-- jarallax image --> 

    
      <div class="row p-0 my-5">
      
        <div class="col-md-9">
           

             <nav class="border-3 d-none d-sm-none d-md-block border-bottom pb-3" aria-label="breadcrumb">
               
               <?php echo do_shortcode('[custom_breadcrumbs]'); ?>
               
</nav>
            
 <div class="row my-3">
   
   
    <?php if ( in_category( 4 ) || in_category( 155 )) : //if in category news and articles ?>     
   
   
   
   <div class="col-md-6 mb-3">
     <?php $image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "large" ); ?><?php $image_width = $image_data[1]; ?><?php $image_height = $image_data[2];  // get the featuered images width and height ?> 
  
  
  <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php the_post_thumbnail_url('large'); ?>" class="lazyload img-fluid card-img-top" data-expand="-100" alt="<?php the_title(); ?>" width="<?php echo $image_width; ?>" height="<?php echo $image_height; ?>">
     
     
   </div>
   
   
      <div class="col-md-6 mb-3">
   
      
         
      <div class="lh-lg p-4 bg-light rounded " id="tocDiv">
    <small>Table of Content</small>
<ul id="tocList"></ul> 
      </div>
      
     
   </div> 
     
 <?php else: //if other?>
   
   
   
    <div class="col-md-4">
      
      
      
       <?php if( get_field('client_logo') ): //if client logo is ready ?>
      <?php $image = get_field( 'client_logo'); ?>
      <div class="mb-3 border">
    <img class="m-0 img-fluid imgwidthfull lazyload" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $image['sizes']['medium']; ?>" alt="<?php if( !empty($image['alt']) ): ?><?php echo $image['alt']; ?><?php else: ?><?php the_title(); ?><?php endif; ?>" width="<?php echo $image['width']?>" height="<?php echo $image['height']?>" />
        </div>
<?php endif; //end if client logo is ready ?>
      
     
<div class="lh-lg p-4 mb-3 bg-light rounded">
        <ul class="list-inline">
          
  

<li>			<?php if( get_field('client_name') ): ?>
				<i class="me-2 fa fa-briefcase"></i><?php the_field('client_name'); ?>
				<?php endif; ?>	
</li>  


 <?php if( get_field('client_industry') ): ?>

 <li>
 <span><i class="fa fa-industry me-1"></i>
                        
<?php the_field('client_industry'); ?></span>
						
</li>
  <?php endif; ?>	

  
          
<li>			<?php if( get_field('year') ): ?>
				<i class="me-2 fa fa-calendar"></i><?php the_field('year'); ?> <br>
				<?php endif; ?>	
</li>
<li><?php include get_theme_file_path( '/location.php' ); //load location.php ?></li>
  
  
  
  

  
 </ul> 
  
  
  
  
        
        
<?php if( get_field('examples')): ?>
<p>
<?php if( have_rows('examples')): ?>

<?php while( have_rows('examples') ): the_row(); 

		$channel = get_sub_field('channel');
		$url = get_sub_field('url');
		?>
		
		

<?php if (strpos($channel, 'Website') !== false) { //if cond. ?><i class="fas fa-globe me-1"></i>
<?php } elseif (strpos($channel, 'Facebook') !== false) { //if cond. ?><i class="fab fa-facebook me-1"></i>
<?php } elseif (strpos($channel, 'Instagram') !== false) { //if cond. ?><i class="fab fa-instagram me-1"></i>  
<?php } elseif (strpos($channel, 'Linkedin') !== false) { //if cond. ?><i class="fab fa-linkedin me-1"></i>  
<?php } elseif (strpos($channel, 'Twitter') !== false) { //if cond. ?><i class="fab fa-twitter me-1"></i>  
<?php } elseif (strpos($channel, 'Youtube') !== false) { //if cond. ?><i class="fab fa-youtube me-1"></i>  
<?php } elseif (strpos($channel, 'TikTok') !== false) { //if cond. ?><i class="fab fa-tiktok me-1"></i>  
<?php } elseif (strpos($channel, 'Demo') !== false) { //if cond. ?><i class="fas fa-globe me-1"></i> 
<?php } elseif (strpos($channel, 'Snapchat') !== false) { //if cond. ?><i class="fab fa-snapchat me-1"></i> 
<?php } ?>

		
		
		
		 <a href="<?php echo $url; ?>" target="_blank"><?php echo $channel; ?> <i class="fa fa-external-link-alt"></i> </a><br>
		
		
		<?php endwhile; ?>
		
		
		<?php endif; ?>

										
										
</p>
<?php endif; ?>

  
      </div>
     
     

   </div>
   
   
   
   
   <div class="col-md-8 mb-3">
     <?php $image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "large" ); ?><?php $image_width = $image_data[1]; ?><?php $image_height = $image_data[2];  // get the featuered images width and height ?> 
  
  
  <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php the_post_thumbnail_url('large'); ?>" class="lazyload img-fluid card-img-top" data-expand="-100" alt="<?php the_title(); ?>" width="<?php echo $image_width; ?>" height="<?php echo $image_height; ?>">
     
     
     
      
      
         
      <div class="lh-lg p-4 mt-3 bg-light rounded " id="tocDiv">
    <small>Table of Content</small>
<ul id="tocList"></ul> 
      </div>
      
     
     
     
   </div>
   
   
     <?php endif; //end if in category news ?>
   
             </div>            
             
                
<!-- flixable content -->
							
<article class="blog-post">



   <!-- flixable content -->
							
                      
<?php if( have_rows('body') ): ?>
<?php while( have_rows('body') ): the_row(); ?>
                      
<?php include get_theme_file_path( '/flixable.php' ); //load sidebar.php ?>
                 
<?php endwhile; ?>
<?php endif; ?>
          </article>                 
<!-- flixable content -->   
   
  

<?php if ( in_category( 4 )) : //if in category news and topics don't get tags ?>
          
<?php elseif ( in_category( 155 )) : //if in category topics don't get related projects ?>
          
          

<?php else: //if other not topics or news ?>
          

<?php $tags = get_the_tags(); if($tags) { //if get tags?>

  
  <p class="mt-5"><?php $catpost = get_the_category(); foreach ($catpost as $cat) {	if($cat->category_parent==2){	$namecat= $cat->cat_name;	echo $namecat;	}	} ?>  Services Covered:</p>
  
  <ul class="mb-5 list-inline">
  
<?php
  
if ($tags) {
  foreach($tags as $tag) {
    echo '<li class="pe-3 list-inline-item"><i class="pe-2 fa fa-arrow-right "></i> <a href='.get_tag_link($tag->term_id) .'>'.$tag->name . '</a></li>';
     
    }
  }
  
  
  

  ?>
  
   
    </ul> 




<!-- Testimonial content -->   
        
<?php if( get_field('testimonial')): ?>

	<h3 class="my-5">Testimonials</h3>

<?php if( have_rows('testimonial')): ?>

<?php while( have_rows('testimonial') ): the_row(); 

		$name = get_sub_field('name');
		$position = get_sub_field('position');
		$testimonial_text = get_sub_field('testimonial_text');
		$stars = get_sub_field('stars');		
		
		?>
		
	
	    <div class="row justify-content-center mb-5">
		  
		  
		  <div class="col-md-2 text-center">
		  
		  
		         <?php if( get_field('client_logo') ): //if client logo is ready ?>
      <?php $image = get_field( 'client_logo'); ?>
	  
<div class="px-5  pb-3 p-md-0">
    <img class="rounded-circle border img-fluid imgwidthfull lazyload" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $image['sizes']['medium']; ?>" alt="<?php if( !empty($image['alt']) ): ?><?php echo $image['alt']; ?><?php else: ?><?php the_title(); ?><?php endif; ?>" width="<?php echo $image['width']?>" height="<?php echo $image['height']?>" />
</div>

<?php endif; //end if client logo is ready ?>
		  
		  
		  
		  
			  </div>
			  <div class="col-md-8 align-self-center px-5 p-md-0">
			  <div class="p-4 border">
             <p class="bold h4 mb-3"><i class="fas fa-user pe-2"></i> <?php echo $name; ?></p>
            <p class="h6 mb-3"><?php echo $position; ?></p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
             <?php echo $testimonial_text; ?><i class="fas fa-quote-right ps-2"></i>
            </p>
            <ul class="<?php echo $stars; ?> list-unstyled d-flex text-warning mb-0">
			
			<?php


for ($i = 1; $i <= 5; $i++) {
    if ($i <= $stars) {
        echo '<li><i class="fas fa-star fa-sm"></i></li>';
    } else {
        echo '<li><i class="far fa-star fa-sm"></i></li>';
    }
}
?>


             
            </ul>
			</div>
			  </div>
          </div>
		  
		
		
		<?php endwhile; ?>
		
		
		<?php endif; ?>

										
										

<?php endif; ?>


   <!-- Testimonial content -->   
        










<?php }else{ //tags not there?>
    
<?php } ?>
  
  
<?php endif; //end if in category news don't get tags ?>   
          
    
        <?php wp_reset_query(); ?>   
 
</div>
        
        
        <div class="col-md-3">
          
          
         


          
<?php if ( in_category( 4 )) : //if in category news and topics don't get tags ?>
          
         <div class="mb-2 ">
   
<h2 class="border-bottom border-3 mb-3 pb-3">Latest News</h2>
           
           
 <?php $related = get_posts(  // get related posts from news categories
    array( 
        'category__in' => wp_get_post_categories( $post->ID ), 
        'numberposts'  => 2, 
        'post__not_in' => array( $post->ID ) 
    ) 
);

if( $related ) { 
    foreach( $related as $post ) {
        setup_postdata($post);
       ?>
      
      
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
      
      
   <?php    
    }
    wp_reset_postdata();
}
           
?>           
           
          </div>
          
<?php elseif ( in_category( 155 )) : //if in category topics don't get related projects ?>
          
          
          
          
          
          
          
     <?php else: //if other?>               
          
 <div class="mb-2 ">
   
<h2 id="mainposts" class="border-bottom border-3 mb-3 pb-3">Similar Projects</h2>
                            
      
   
<?php 

                                      
query_posts(array( 'post__not_in' => array($post->ID), 'orderby' => 'date', 'order' => 'DESC', 'cat' => 1, 'posts_per_page' => 5 )); ?> 
  
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 

    
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-12">
      
      <?php $image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "medium" ); ?><?php $image_width = $image_data[1]; ?><?php $image_height = $image_data[2];  // get the featuered images width and height ?>  
            
      <a href="<?php echo get_permalink($post->ID) // get the loop-item the link ?>"><img class="card-img-top img-fluid lazyload" data-expand="-100" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" width="<?php echo $image_width; ?>" height="<?php echo $image_height; ?>" data-src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" ></a>
      
      
    </div>
    <div class="col-12">
      <div class="card-body">
        <h3 class="card-title"><?php the_field('client_name'); ?></h3>
        <p class="card-text"><?php the_field('description'); ?></p>
        <p class="card-text"><small class="text-muted"><?php echo get_the_time('jS', $post->ID); // get the loop-item the time ?> <?php echo get_the_time('M, Y', $post->ID); // get the loop-item the time  ?></small></p>
      </div>
    </div>
  </div>
</div>
  
  
   <?php endwhile; endif; ?>  
  
  
<?php wp_reset_query(); ?>
         
   
  
      
    </div>
     
  
<?php endif; //end if in category news don't get related projects ?>       

   
            
     <div class="mb-5">
    
       <?php include get_theme_file_path( '/sidebar.php' ); //load sidebar.php ?>  
     
  </div>
      
          
          
          

    </div>
          
             
    
        
        
        
      </div>
      

    

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>