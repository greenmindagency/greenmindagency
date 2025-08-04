<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to begin 
	/* rendering the page and display the header/nav
	/*-----------------------------------------------------------------------------------*/
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">



<!-- 

<title><?php if ( is_front_page() && is_home() ) {?>
<?php is_front_page() ? bloginfo('description') : wp_title(''); ?> | <?php bloginfo('name'); ?>
<?php } elseif ( is_category() ) { // if category?><?php $category = get_queried_object(); 'category_' . $category->term_id; // loading the category id?><?php if( get_field('subtitle', 'category_' . $category->term_id ) ): //if there something fire?><?php $id = 'category_'.get_queried_object()->term_id; the_field('subtitle', $id); ?> | <?php bloginfo('name'); ?><?php else: //if there not fire default ?><?php is_front_page() ? bloginfo('description') : wp_title(''); ?> | <?php bloginfo('name'); ?><?php endif; // end of category?>
<?php } elseif ( is_single() ) {?><?php is_front_page() ? bloginfo('description') : wp_title(''); ?> | <?php bloginfo('name'); ?>
<?php } elseif ( is_page() ) {?><?php the_title(); ?> | <?php bloginfo('name'); ?>
<?php } elseif ( is_tag() ) { // if tags?><?php $term = get_queried_object(); $title = get_field('title', $term); // load the tag?><?php if( get_field('title', $term) ): // if there something fire?><?php echo $title; ?> | <?php bloginfo('name'); ?><?php else: //if there not fire default ?><?php is_front_page() ? bloginfo('description') : wp_title(''); ?> | <?php bloginfo('name'); ?><?php endif; // end of tag?>
<?php } else { // can't get nothing at all?><?php is_front_page() ? bloginfo('description') : wp_title(''); ?> | <?php bloginfo('name'); ?>
<?php }?>
</title>
<meta name="description" content="<?php if ( is_front_page() && is_home() ) { //if home page run default?><?php the_field('description', 1797); ?>
<?php } elseif ( is_category() ) { // if category?><?php $category = get_queried_object(); 'category_' . $category->term_id; // loading the category id?><?php if( get_field('description', 'category_' . $category->term_id ) ): //if there something fire?><?php $id = 'category_'.get_queried_object()->term_id; the_field('description', $id); ?><?php else: //if there not fire default ?><?php the_field('description', 1797); ?><?php endif; // end of category?>
<?php } elseif ( is_single() ) {?><?php the_field('description'); ?>
<?php } elseif ( is_page() ) {?><?php $term = get_queried_object(); $small_description = get_field('description', $term);?><?php if( get_field('description', $term) ): ?><?php echo $small_description; ?><?php else: //if there not fire default ?><?php the_field('description', 1797); ?><?php endif; // end of pages?>
<?php } elseif ( is_tag() ) { // if tags ?><?php $term = get_queried_object(); $short_description = get_field('description', $term);?><?php if( get_field('description', $term) ): ?><?php echo $short_description; ?><?php else: //if there not fire default ?><?php the_field('description', 1797); ?><?php endif; // end of tags?>
<?php } else { // if not spcfied at all?><?php the_field('description', 1797); ?>
<?php }?>">
<meta name="author" content="Green Mind Agency">
<meta name="site-name" content="<?php bloginfo('name'); ?>">

<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="alternate" href="<?php global $wp; echo home_url( $wp->request ) ?>/" hreflang="en-us" />
<link rel="alternate" href="<?php global $wp; echo home_url( $wp->request ) ?>/" hreflang="en-eg" />
<link rel="alternate" href="<?php global $wp; echo home_url( $wp->request ) ?>/" hreflang="en-gb">
<link rel="alternate" href="<?php global $wp; echo home_url( $wp->request ) ?>/" hreflang="en" />

<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>    
<meta property="og:title" content="<?php if ( is_front_page() && is_home() ) {?>
<?php is_front_page() ? bloginfo('description') : wp_title(''); ?> | <?php bloginfo('name'); ?>
<?php } elseif ( is_category() ) { // if category?><?php $category = get_queried_object(); 'category_' . $category->term_id; // loading the category id?><?php if( get_field('subtitle', 'category_' . $category->term_id ) ): //if there something fire?><?php $id = 'category_'.get_queried_object()->term_id; the_field('subtitle', $id); ?> | <?php bloginfo('name'); ?><?php else: //if there not fire default ?><?php is_front_page() ? bloginfo('description') : wp_title(''); ?> | <?php bloginfo('name'); ?><?php endif; // end of category?>
<?php } elseif ( is_single() ) {?><?php is_front_page() ? bloginfo('description') : wp_title(''); ?> | <?php bloginfo('name'); ?>
<?php } elseif ( is_page() ) {?><?php the_title(); ?> | <?php bloginfo('name'); ?>
<?php } elseif ( is_tag() ) { // if tags?><?php $term = get_queried_object(); $title = get_field('title', $term); // load the tag?><?php if( get_field('title', $term) ): // if there something fire?><?php echo $title; ?> | <?php bloginfo('name'); ?><?php else: //if there not fire default ?><?php is_front_page() ? bloginfo('description') : wp_title(''); ?> | <?php bloginfo('name'); ?><?php endif; // end of tag?>
<?php } else { // can't get nothing at all?><?php is_front_page() ? bloginfo('description') : wp_title(''); ?> | <?php bloginfo('name'); ?>
<?php }?>"/> 
      
<meta property="og:description" content="<?php if ( is_front_page() && is_home() ) { //if home page run default?><?php the_field('description', 1797); ?>
<?php } elseif ( is_category() ) { // if category?><?php $category = get_queried_object(); 'category_' . $category->term_id; // loading the category id?><?php if( get_field('description', 'category_' . $category->term_id ) ): //if there something fire?><?php $id = 'category_'.get_queried_object()->term_id; the_field('description', $id); ?><?php else: //if there not fire default ?><?php the_field('description', 1797); ?><?php endif; // end of category?>
<?php } elseif ( is_single() ) {?><?php the_field('description'); ?>
<?php } elseif ( is_page() ) {?><?php $term = get_queried_object(); $small_description = get_field('description', $term);?><?php if( get_field('description', $term) ): ?><?php echo $small_description; ?><?php else: //if there not fire default ?><?php the_field('description', 1797); ?><?php endif; // end of pages?>
<?php } elseif ( is_tag() ) { // if tags ?><?php $term = get_queried_object(); $short_description = get_field('description', $term);?><?php if( get_field('description', $term) ): ?><?php echo $short_description; ?><?php else: //if there not fire default ?><?php the_field('description', 1797); ?><?php endif; // end of tags?>
<?php } else { // if not spcfied at all?><?php the_field('description', 1797); ?>
<?php }?>"/>      
<meta property="og:image" content="<?php if ( is_front_page() ) {?>
<?php $image = get_field('image-header'); if( !empty($image) ):?><?php echo esc_url($image['url']); ?><?php endif; ?>
<?php } elseif ( is_category() ) {?><?php $category_idcat = get_queried_object_id(); //this code to get the image from taxonimy category?><?php $cat_idcat = 'category_'.$category_idcat; ?><?php $image = get_field( 'image', $cat_idcat); ?><?php if( get_field( 'image', $cat_idcat) ): // if there something fire?><?php echo $image['sizes']['large']; //this code to get the image from taxonimy category?><?php else: //if there not fire first image from the first post ?><?php query_posts('cat=' . $category_idcat . '&showposts=1'); // start the loop to get the first item?><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><?php global $more; $more = 0; ?><?php the_post_thumbnail_url('large'); ?><?php endwhile; endif; ?><?php wp_reset_query(); //end of the loop?><?php endif; // end of get the image from taxonimy category?>
<?php } elseif ( is_single() ) {?> <?php the_post_thumbnail_url('full'); ?> 
<?php } elseif ( is_page() ) {?> <?php the_post_thumbnail_url('full'); ?>
<?php } elseif ( is_tag() ) {?><?php $term = get_queried_object(); $image = get_field('image', $term);?><?php if( get_field('image', $term) ): ?><?php echo $image['sizes']['large']; ?><?php else: //if there not fire first image from the first post ?><?php the_post_thumbnail_url('full'); ?><?php endif; ?>
<?php } else {?> <?php $image = get_field('image-header'); if( !empty($image) ):?><?php echo esc_url($image['url']); ?><?php endif; ?>
<?php }?>">
  
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="628">
<meta property="og:image:type" content="image/png">
<meta property="og:url" content="<?php global $wp; echo home_url( $wp->request ) ?>/">
<meta property="og:type" content="website">
<meta property="fb:app_id" content="455396788003349">       

<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="<?php if ( is_front_page() && is_home() ) {?>
<?php is_front_page() ? bloginfo('description') : wp_title(''); ?> | <?php bloginfo('name'); ?>
<?php } elseif ( is_category() ) { // if category?><?php $category = get_queried_object(); 'category_' . $category->term_id; // loading the category id?><?php if( get_field('subtitle', 'category_' . $category->term_id ) ): //if there something fire?><?php $id = 'category_'.get_queried_object()->term_id; the_field('subtitle', $id); ?> | <?php bloginfo('name'); ?><?php else: //if there not fire default ?><?php is_front_page() ? bloginfo('description') : wp_title(''); ?> | <?php bloginfo('name'); ?><?php endif; // end of category?>
<?php } elseif ( is_single() ) {?><?php is_front_page() ? bloginfo('description') : wp_title(''); ?> | <?php bloginfo('name'); ?>
<?php } elseif ( is_page() ) {?><?php the_title(); ?> | <?php bloginfo('name'); ?>
<?php } elseif ( is_tag() ) { // if tags?><?php $term = get_queried_object(); $title = get_field('title', $term); // load the tag?><?php if( get_field('title', $term) ): // if there something fire?><?php echo $title; ?> | <?php bloginfo('name'); ?><?php else: //if there not fire default ?><?php is_front_page() ? bloginfo('description') : wp_title(''); ?> | <?php bloginfo('name'); ?><?php endif; // end of tag?>
<?php } else { // can't get nothing at all?><?php is_front_page() ? bloginfo('description') : wp_title(''); ?> | <?php bloginfo('name'); ?>
<?php }?>" />
<meta name="twitter:description" content="<?php if ( is_front_page() && is_home() ) { //if home page run default?><?php the_field('description', 1797); ?>
<?php } elseif ( is_category() ) { // if category?><?php $category = get_queried_object(); 'category_' . $category->term_id; // loading the category id?><?php if( get_field('description', 'category_' . $category->term_id ) ): //if there something fire?><?php $id = 'category_'.get_queried_object()->term_id; the_field('description', $id); ?><?php else: //if there not fire default ?><?php the_field('description', 1797); ?><?php endif; // end of category?>
<?php } elseif ( is_single() ) {?><?php the_field('description'); ?>
<?php } elseif ( is_page() ) {?><?php $term = get_queried_object(); $small_description = get_field('description', $term);?><?php if( get_field('description', $term) ): ?><?php echo $small_description; ?><?php else: //if there not fire default ?><?php the_field('description', 1797); ?><?php endif; // end of pages?>
<?php } elseif ( is_tag() ) { // if tags ?><?php $term = get_queried_object(); $short_description = get_field('description', $term);?><?php if( get_field('description', $term) ): ?><?php echo $short_description; ?><?php else: //if there not fire default ?><?php the_field('description', 1797); ?><?php endif; // end of tags?>
<?php } else { // if not spcfied at all?><?php the_field('description', 1797); ?>
<?php }?>" />
<meta name="twitter:image" content="<?php if ( is_front_page() ) {?>
<?php $image = get_field('image-header'); if( !empty($image) ):?><?php echo esc_url($image['url']); ?><?php endif; ?>
<?php } elseif ( is_category() ) {?><?php $category_idcat = get_queried_object_id(); //this code to get the image from taxonimy category?><?php $cat_idcat = 'category_'.$category_idcat; ?><?php $image = get_field( 'image', $cat_idcat); ?><?php if( get_field( 'image', $cat_idcat) ): // if there something fire?><?php echo $image['sizes']['large']; //this code to get the image from taxonimy category?><?php else: //if there not fire first image from the first post ?><?php query_posts('cat=' . $category_idcat . '&showposts=1'); // start the loop to get the first item?><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><?php global $more; $more = 0; ?><?php the_post_thumbnail_url('large'); ?><?php endwhile; endif; ?><?php wp_reset_query(); //end of the loop?><?php endif; // end of get the image from taxonimy category?>
<?php } elseif ( is_single() ) {?> <?php the_post_thumbnail_url('full'); ?> 
<?php } elseif ( is_page() ) {?> <?php the_post_thumbnail_url('full'); ?>
<?php } elseif ( is_tag() ) {?><?php $term = get_queried_object(); $image = get_field('image', $term);?><?php if( get_field('image', $term) ): ?><?php echo $image['sizes']['large']; ?><?php else: //if there not fire first image from the first post ?><?php the_post_thumbnail_url('full'); ?><?php endif; ?>
<?php } else {?> <?php $image = get_field('image-header'); if( !empty($image) ):?><?php echo esc_url($image['url']); ?><?php endif; ?>
<?php }?>" />
<meta name="twitter:site" content="@greenmindagency" />
<meta name="twitter:creator" content="@greenmindagency" />

	


 <link rel="canonical" href="<?php global $wp; echo home_url( $wp->request ) ?>/" />
  
  
    -->
	




  <?php wp_head(); ?>
  
  
  
  
  <!--  fix the cat and tag og:image since it's not supported in yoast   -->

<meta property="og:image" content="

<?php if ( is_category() ) {?>

<?php echo esc_url(get_field('image', 'category_' . get_queried_object()->term_id)['url']); ?>

<?php } elseif ( is_tag() ) {?>

<?php $term = get_queried_object(); $image = get_field('image', $term); ?><?php if( !empty($image) ): ?><?php echo esc_url($image['url']); // Outputs the full size image URL ?><?php else: // If no custom field image, get the featured image of the first post ?><?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?><?php endif; ?>

<?php }?>">


<?php if ( is_category() || is_tag() ) { ?>
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="628">
    <meta property="og:image:type" content="image/png">
<?php } ?>

<!--  fix the cat and tag og:image since it's not supported in yoast   -->  



<?php if (have_rows('contactdetails', 1797)) : ?>
    <?php while (have_rows('contactdetails', 1797)) : the_row(); ?>
        <?php 
		
		$telephone = get_sub_field('telephone');
		$price_range = get_sub_field('price_range');
		$street_address = get_sub_field('street_address');
		$city = get_sub_field('city');
		$region = get_sub_field('region');
		$country = get_sub_field('country');
?>
       
		
		
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Organization","name":"<?php bloginfo('name'); ?>","url":"<?php echo esc_url(get_home_url()); ?>/","logo":"<?php echo esc_url(get_stylesheet_directory_uri()); ?>/Green-Mind-Agency-Logo.jpg","contactPoint":{"@type":"ContactPoint","telephone":"<?php echo esc_html($telephone); ?>","contactType":"Customer Service"},"address":{"@type":"PostalAddress","streetAddress":"<?php echo esc_html($street_address); ?>","addressLocality":"<?php echo esc_html($city); ?>","addressRegion":"<?php echo esc_html($region); ?>","addressCountry":"<?php echo esc_html($country); ?>"}, "sameAs":["https://www.facebook.com/greenmindagency", "https://instagram.com/greenmindagency", "https://twitter.com/GreenMindAgency", "https://www.linkedin.com/company/green-mind-agency", "https://www.youtube.com/user/greenmindagency", "https://www.behance.net/greenmindagency", "https://www.flickr.com/photos/128952373@N03/", "https://www.pinterest.com/greenmindagency/"]}</script>


  
<script type="application/ld+json">{"@context":"https://schema.org","@graph":[{"@type":"LocalBusiness","name":"<?php bloginfo('name'); ?>","image":"<?php echo esc_url(get_stylesheet_directory_uri()); ?>/Green-Mind-Agency-Logo.jpg","telephone":"<?php echo esc_html($telephone); ?>","priceRange":"<?php echo esc_html($price_range); ?>","address":{"@type":"PostalAddress","streetAddress":"<?php echo esc_html($street_address); ?>","addressLocality":"<?php echo esc_html($city); ?>","addressRegion":"<?php echo esc_html($region); ?>","addressCountry":"<?php echo esc_html($country); ?>"}}]}</script>
		
		
		
		
		
    <?php endwhile; ?>
<?php endif; ?>


  







  
  
  	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-52XBRHN');</script>
<!-- End Google Tag Manager -->
  
  
  

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" integrity="sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
 
  
  </head>
  <body>

	<!-- Google Tag Manager (noscript) -->
<noscript><iframe class="hidden" src="https://www.googletagmanager.com/ns.html?id=GTM-52XBRHN"
height="0" width="0"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->



<header class="container-fluid shadow navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand my-1 me-0 ps-3 p-0 col-md-3 col-lg-2" title="<?php echo get_bloginfo( 'description' ); ?> | <?php echo get_bloginfo( 'name' ); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/Green-Mind-Agency-Logo.jpg" alt="<?php echo get_bloginfo( 'description' ); ?> | <?php echo get_bloginfo( 'name' ); ?>" width="130" height="37">
    </a>

    <!-- FLEX CONTAINER -->
    <div class="ms-auto pe-3 d-none d-lg-flex align-items-center gap-3">
        
        <!-- Search Form -->
<form class="is-search-form is-ajax-search" action="<?php echo esc_url(home_url('/')); ?>" method="get" role="search">
    <div class="input-group">
        <input type="search" name="s" class="form-control  p-1 ps-3 is-search-input" placeholder="Search" autocomplete="on">
        <button type="submit" class="btn btn-secondary">
            <span>
<i class="text-white fa fa-search"></i>
            </span>
        </button>
    </div>
</form>


        <!-- Dashboard Button -->
        <?php if ( is_user_logged_in() ) { ?>
            <a class="btn btn-primary" href="<?php echo admin_url(); ?>">Dashboard</a>  
        <?php } ?>

        <!-- Shorten URL Button -->
        <a class="clipboardcopy btn btn-outline-primary" data-clipboard-text='<?php
            function tiny_url($url){
                return file_get_contents("https://tinyurl.com/api-create.php?url=" . $url);
            }
            $url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            echo tiny_url($url);
        ?>'>
            <i class="text-dark fa fa-link"></i>
        </a> 
    </div>

    <!-- Mobile Navbar Toggle Button -->
    <button class="me-3 rounded-0 bg-light navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="text-primary p-2 fa fa-bars"></i>
    </button>
</header>

    
  
    
    
    <div class="container-fluid">
     
    
   
      <div class="row">
        <nav id="sidebarMenu" class="col-12 col-lg-2 d-lg-block bg-primary sidebar collapse" itemscope itemtype="https://www.schema.org/SiteNavigationElement">
      <div class="position-sticky">
        
    
        
        <ul class="nav flex-column">
          <li class="nav-item">
           
              <a class="text-white nav-link" aria-current="page" href="<?php global $wp; echo home_url() ?>"  itemprop="url"> <i class="text-white pe-2 fa fa-home"></i> <span itemprop="name">Home</span></a>
          </li>
          <li class="nav-item">
            <a class="text-white nav-link" href="/about-us/" itemprop="url"> <i class="text-white pe-2 fa fa-user-circle"></i> <span itemprop="name">About Us</span></a>
          </li>
         <li class="nav-item">
            <a class="text-white nav-link" href="/latest-work/" itemprop="url"> <i class="text-white pe-2 fa fa-briefcase"></i> <span itemprop="name">Latest Work</span></a>
          </li>
          <li class="nav-item">
            <a class="text-white nav-link" href="/clients/" itemprop="url"> <i class="text-white pe-2 fa fa-handshake"></i> <span itemprop="name">Clients</span></a>
          </li>
          
          
          
          
          
          
          
            
            <li class="nav-item">
            <a class="text-white nav-link dropdown-toggle" href="#digitalmarketingservices" data-bs-toggle="collapse" aria-expanded="false" itemprop="url"> <i class="text-white pe-2 fa fa-user-check"></i> <span itemprop="name">Services</span> </a>
            
           <ul class="ms-3 collapse list-unstyled" id="digitalmarketingservices">
              <li class="bg-primary nav-item">
                <a class="small text-white nav-link" href="/services/"> <i class="text-white pe-2 fa fa-cogs"></i> All Digital Services</a></li>
              
               <?php $categories = get_categories (array('orderby' => 'id', 'child_of'=>'1', 'hide_empty' => 1)); ?>

      <?php  foreach($categories as $category):  ?>

      <?php query_posts( array ( 'category_name' => $category->slug, 'showposts' => '5', 'child_of'=>'1' ) ); ?>
             
             
              <li class="bg-primary nav-item">
               <a class="small text-white nav-link dropdown-toggle" href="#<?php echo strtolower(preg_replace('/\s+/', '', single_tag_title('', false))); ?>" itemprop="url" data-bs-toggle="collapse" aria-expanded="false">
    <i class="text-white pe-2 fa fa-<?php $category = get_queried_object(); 'category_' . $category->term_id; // loading the category id?><?php if( get_field('icon', 'category_' . $category->term_id ) ): //if there something fire?><?php $id = 'category_'.get_queried_object()->term_id; the_field('icon', $id); ?><?php else: //if there not fire default ?><?php the_field('icon', 2); ?><?php endif; // end of category?>"></i>
   <span itemprop="name"><?php single_cat_title(); ?></span>
               </a>
                
               
  
    				

                  <ul class="bg-primary collapse lh-lg list-unstyled" id="<?php echo strtolower(preg_replace('/\s+/', '', single_tag_title('', false))); ?>">
                    
                     <?php $category = get_queried_object(); 'category_' . $category->term_id; // loading the category id and get related tags?>       
  <?php if( have_rows('right_col',  'category_' . $category->term_id) ): ?>
                    
  <?php $category = get_queried_object(); 'category_' . $category->term_id; // loading the category id?>       
  <?php if( have_rows('right_col',  'category_' . $category->term_id) ): ?>
	<?php while( have_rows('right_col',  'category_' . $category->term_id) ): the_row(); 

									$tag_name = get_sub_field('tag_name');
									
	?>

  
  

                      <li class="nav-item ">
     <a class="py-0 small text-white nav-link" href="<?php echo get_tag_link($tag_name); ?>"  itemprop="url">
      <i class="text-white pe-2 fa fa-chevron-right"></i> <span itemprop="name"><?php $tag = get_tag($tag_name); echo $tag->name;?></span>
                 </a>
								</li>

  
<?php endwhile; ?>
                    
                      <?php endif; ?>
                  <?php endif; // end get related tags ?>   

                  </ul>
                  
           
                
             </li>
             
             
             
                 <?php endforeach; ?>
            
            <?php wp_reset_query(); ?>
             
            </ul>
            
            
          </li>
            
          
          
          
          
          
          
          <li class="nav-item">
            <a class="text-white nav-link" href="/portfolio/" itemprop="url"> <i class="text-white pe-2 fa fa-camera-retro"></i> <span itemprop="name">Portfolio</span></a>
          </li>
          <li class="nav-item">
            <a class="text-white nav-link" href="/price-list/" itemprop="url"> <i class="text-white pe-2 fa fa-dollar-sign"></i> <span itemprop="name">Price List</span></a>
          </li>
          <li class="nav-item">
                <a class="text-white nav-link" href="/news/" itemprop="url"> <i class="text-white pe-2 fa fa-newspaper"></i> <span itemprop="name">News </span></a></li>
          <li class="nav-item">
                <a class="text-white nav-link" href="/articles/" itemprop="url"> <i class="text-white pe-2 fa fa-th-large"></i> <span itemprop="name">Articles </span></a></li>
          <li class="nav-item">
                <a class="text-white nav-link" href="/contact-us/" itemprop="url"> <i class="text-white pe-2 fa fa-id-badge"></i> <span itemprop="name">Contact Us </span></a></li>
          
          
        </ul>

        

        <p class="px-3 mt-4 mb-1 text-dark">Important Links</p>
        <ul class="nav flex-column mb-2">
          
           <li class="nav-item">
                <a class="text-white nav-link" href="/request-a-quote/" itemprop="url"> <i class="text-white pe-2 fa fa-edit"></i> <span itemprop="name">Request a Quote </span></a></li>
          
           <li class="nav-item">
                <a class="text-white nav-link" target="_blank" href="https://greenmindagency.com/blog/" itemprop="url"> <i class="text-white pe-2 fa fa-th"></i> <span itemprop="name">Blog </span></a></li>
          
          <li class="nav-item">
                <a class="text-white nav-link" href="/careers/" itemprop="url"> <i class="text-white pe-2 fa fa-building"></i> <span itemprop="name">Careers </span></a></li>
          
        </ul>
		
		<p class="px-3 mt-4 mb-1 text-dark">Markets</p>
		
<ul class="nav list-inline mb-2 px-3">
    <li class="list-inline-item">
        <a class="text-white nav-link px-0" href="/" itemprop="url">
            <i class="flag-icon flag-icon-eg fs-3"></i>
        </a>
    </li>
    <li class="list-inline-item">
        <a class="text-white nav-link px-0" href="/digital-marketing-agency-saudi-arabia/" itemprop="url">
            <i class="flag-icon flag-icon-sa fs-3"></i>
        </a>
    </li>
</ul>


		
		
		
		
      </div>
    </nav>
     
      