<?php get_header(); // This fxn gets the header.php file and renders it ?>
<main class="ms-sm-auto col-lg-10">
  
<!-- jarallax image -->
 
<div data-jarallax data-speed="0.2"  class="row p-0 bg-dark jarallax">
      
        <?php $image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "squaresmall" ); ?><?php $image_width = $image_data[1]; ?><?php $image_height = $image_data[2];  // get the featuered images width and height ?> 
      

      <img src="<?php $term = get_queried_object(); $image = get_field('image', $term);?><?php if( get_field('image', $term) ): ?><?php echo $image['sizes']['squaresmall']; ?><?php else: //if there not fire first image from the first post ?><?php the_post_thumbnail_url('squaresmall'); ?><?php endif; ?>" alt="<?php if( !empty($image['alt']) ): ?><?php echo $image['alt']; ?><?php else: ?><?php the_title(); ?><?php endif; ?>" class="jarallax-img" width="<?php echo $image_width; ?>" height="<?php echo $image_height; ?>">
      
    <div class="col-12 p-5 text-white text-center">
     <?php $term = get_queried_object(); $title = get_field('title', $term);?><?php if( get_field('title', $term) ): ?><h1 class="m-4 fw-bold"><?php echo $title; ?></h1> <?php endif; ?>
      
      
      
      <h2 class="m-3 fw-bold card-title text-uppercase"><?php $term = get_queried_object(); $icon = get_field('icon', $term);?><?php if( get_field('icon', $term) ): ?><i class="text-white mx-2 fa-1x <?php echo $icon; ?>"></i><?php else: //if there not fire default ?><?php endif;?> <?php single_cat_title(); ?></h2>
      
    <?php $term = get_queried_object(); $description = get_field('description', $term);?><?php if( get_field('description', $term) ): ?><p class="card-text"><?php echo $description; ?></p><?php endif; ?> 
    
       <a href="#Latest-Projects" class="m-1 btn btn-primary ">Latest Projects</a>
      <a class="m-1 btn btn-light" href="#footer">Start a Project</a>
       
    </div>
</div>
    
    <!-- jarallax image --> 



<div class="container-fluid p-0">
    
<div class="row p-0 my-5">
      

        
 <div class="col-md-9">
           
             <nav class="border-3 d-none d-sm-none d-md-block border-bottom pb-3 mb-3" aria-label="breadcrumb">
               
               <ul class="breadcrumb">
               <li class="breadcrumb-item active"><a href="/" rel="v:url" property="v:title">Home</a></li>
               <li class="breadcrumb-item"><a href="/services">Services</a></li>
               <li class="breadcrumb-item active"><?php single_cat_title(); ?></li></ul>
               
</nav>
          
   
   
           <!-- flixable content -->
		 <article class="blog-post mb-5">					
<?php $term = get_queried_object(); // get the current taxonomy term ?>
<?php if( have_rows('body', $term) ): ?>
<?php while( have_rows('body', $term) ): the_row(); ?>
          

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
      
</div>

    

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>