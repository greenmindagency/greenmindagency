<?php if( get_row_layout() == 'description' ): ?>

<!-- //define if column start --> 
<?php while ( have_rows('column') ) : the_row(); $column_position = get_sub_field('column_position');?>
<?php if (strpos($column_position, 'start') !== false) { //if cond. ?><div class="row"> 
<?php } ?>
<?php endwhile; ?>
<!-- //define if column start --> 


<div class="description <?php $lead = get_sub_field('lead'); if( $lead && in_array('lead', $lead) ) { ?>lead<?php } else { ?><?php } ?> <?php	while ( have_rows('column') ) : the_row(); $column_container = get_sub_field('column_container'); $column_width = get_sub_field('column_width'); ?><?php echo $column_container ?><?php echo $column_width ?> <?php endwhile; ?>">

<?php the_sub_field('description'); ?>
</div>

<!-- //define if column end --> 
<?php while ( have_rows('column') ) : the_row(); $column_position = get_sub_field('column_position');?>
<?php if (strpos($column_position, 'end') !== false) { //if cond. ?></div> 
<?php } ?>
<?php endwhile; ?>
<!-- //define if column end -->         



<?php elseif( get_row_layout() == 'canva-embed' ): ?>

<!-- //define if column start --> 
<?php while ( have_rows('column') ) : the_row(); $column_position = get_sub_field('column_position');?>
<?php if (strpos($column_position, 'start') !== false) { //if cond. ?><div class="row"> 
<?php } ?>
<?php endwhile; ?>
<!-- //define if column start --> 


<div class="canva-embed <?php $lead = get_sub_field('lead'); if( $lead && in_array('lead', $lead) ) { ?>lead<?php } else { ?><?php } ?> <?php	while ( have_rows('column') ) : the_row(); $column_container = get_sub_field('column_container'); $column_width = get_sub_field('column_width'); ?><?php echo $column_container ?><?php echo $column_width ?> <?php endwhile; ?>">

    <?php 
        $code = get_sub_field('code'); // Fetch the sub-field value
        if ($code) {
            echo html_entity_decode($code); // Decode and output as HTML
        }
    ?>
</div>

<!-- //define if column end --> 
<?php while ( have_rows('column') ) : the_row(); $column_position = get_sub_field('column_position');?>
<?php if (strpos($column_position, 'end') !== false) { //if cond. ?></div> 
<?php } ?>
<?php endwhile; ?>
<!-- //define if column end -->       

		
		
	
<?php elseif( get_row_layout() == 'usdprice' ): ?>

<!-- //define if column start --> 
<?php while ( have_rows('column') ) : the_row(); $column_position = get_sub_field('column_position');?>
<?php if (strpos($column_position, 'start') !== false) { //if cond. ?><div class="row"> 
<?php } ?>
<?php endwhile; ?>
<!-- //define if column start --> 


<div class="usdprice <?php $lead = get_sub_field('lead'); if( $lead && in_array('lead', $lead) ) { ?>lead<?php } else { ?><?php } ?> <?php	while ( have_rows('column') ) : the_row(); $column_container = get_sub_field('column_container'); $column_width = get_sub_field('column_width'); ?><?php echo $column_container ?><?php echo $column_width ?> <?php endwhile; ?>">

<?php $price = getEgpRate(); ?>
<p class="fw-bold h5">Equivalent Price for $1: EGP <?php echo $price; ?></p>
<small>According to The Central Bank of Egypt on <?php
// Get today's date
$today_date = date('jS \of F Y');

// Get the date in the format "14th of April 2024"
$date_to_display = date('jS \of F Y', strtotime('2024-04-14'));

// Echo today's date
echo "$today_date<br>";

?> </small>





</div>

<!-- //define if column end --> 
<?php while ( have_rows('column') ) : the_row(); $column_position = get_sub_field('column_position');?>
<?php if (strpos($column_position, 'end') !== false) { //if cond. ?></div> 
<?php } ?>
<?php endwhile; ?>
<!-- //define if column end -->       

	
		
		
<?php elseif( get_row_layout() == 'video' ): ?>
<div class="mt-3 mb-4 ratio ratio-<?php the_sub_field('video_size'); ?> col-12">
  <iframe data-src="//www.youtube.com/embed/<?php the_sub_field('video'); ?>" class="my-2 lazyload" allowfullscreen></iframe>
</div>



<?php elseif( get_row_layout() == 'videogallery' ): ?>
 <div class="row row-cols-md-2" data-masonry='{"percentPosition": true }'>
   
	<?php	// loop through the rows of data
			    while ( have_rows('videogallery') ) : the_row();

	 $videoitem = get_sub_field('videoitem');
   $videosize = get_sub_field('videosize');
   ?>
   
    <div class="pb-4 col-md-6 col-12 row-cols-md-2">
<div class="ratio ratio-<?php echo $videosize  ?>">
  <iframe data-src="//www.youtube.com/embed/<?php echo $videoitem ?>" class="lazyload" allowfullscreen></iframe>
</div>
</div> 

		<?php		endwhile; ?> 
      
  
 
  </div>



<?php elseif( get_row_layout() == 'iframe' ): ?>
<div class="mt-3 mb-4 ratio ratio-<?php the_sub_field('iframe_size'); ?> col-12">
  <iframe data-src="<?php the_sub_field('video'); ?>" class="my-2 lazyload"></iframe>
</div>



<?php elseif( get_row_layout() == 'gdvideo' ): ?>                   
 <div class="ratio ratio-19x6">
  <iframe class="p-2 lazyload" src="<?php the_sub_field('gdvideo'); ?>"></iframe>
</div>

<?php elseif( get_row_layout() == 'fbvideo' ): ?>
                      
                      <div class="flex-video widescreen">
               <iframe src="https://www.facebook.com/plugins/video.php?href=<?php the_sub_field('fbvideo'); ?>&width=500&show_text=false&appId=1301774086510306&height=280" width="100%" height="480" style="border:none;overflow:hidden" scrolling="no" allowTransparency="true" allow="encrypted-media" allowFullScreen="true"></iframe>
              </div>




<?php elseif( get_row_layout() == 'toc' ): ?>

<!-- //define if column start --> 
<?php while ( have_rows('column') ) : the_row(); $column_position = get_sub_field('column_position');?>
<?php if (strpos($column_position, 'start') !== false) { //if cond. ?><div class="row"> 
<?php } ?>
<?php endwhile; ?>
<!-- //define if column start --> 

<div class="toc <?php	while ( have_rows('column') ) : the_row(); $column_container = get_sub_field('column_container'); $column_width = get_sub_field('column_width'); ?><?php echo $column_container ?><?php echo $column_width ?> <?php endwhile; ?>">


<div class="accordion shadow my-3" id="accordionTOC">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTOC">
      <button class="accordion-button <?php $expand = get_sub_field('expand'); if( $expand && in_array('expand', $expand) ) { ?><?php } else { ?>collapsed<?php } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTOC" aria-expanded="true" aria-controls="collapseTOC">
       Table of Content
      </button>
    </h2>
    <div id="collapseTOC" class="accordion-collapse collapse <?php $expand = get_sub_field('expand'); if( $expand && in_array('expand', $expand) ) { ?>show<?php } else { ?><?php } ?>" aria-labelledby="headingTOC" data-bs-parent="#accordionTOC">
	
	
	
	
      <div class="accordion-body p-0">
	  
<div id="tocDiv" class="lh-lg p-4 bg-light rounded well">
<ul id="tocList"></ul> 
</div>  

      </div>
    </div>
  </div>
  </div>



</div>

<!-- //define if column end --> 
<?php while ( have_rows('column') ) : the_row(); $column_position = get_sub_field('column_position');?>
<?php if (strpos($column_position, 'end') !== false) { //if cond. ?></div> 
<?php } ?>
<?php endwhile; ?>
<!-- //define if column end -->  


<?php elseif( get_row_layout() == 'testimonial' ): ?>


<!-- //define if column start --> 
<?php while ( have_rows('column') ) : the_row(); $column_position = get_sub_field('column_position');?>
<?php if (strpos($column_position, 'start') !== false) { //if cond. ?><div class="row"> 
<?php } ?>
<?php endwhile; ?>
<!-- //define if column start --> 




<!-- Testimonial loop -->


<h3 class="mb-4">Our Clients' Reviews</h3>


<div class="row mb-3 p-0" data-masonry='{"percentPosition": true }'>  

<?php

wp_reset_query();

$number_of_testimonials = get_sub_field('number_of_testimonials');


$args = array(
  'post_type' => 'post',
  'meta_query' => array(
    array(
      'key' => 'testimonial',
      'compare' => '!=',
      'value' => '',
    ),
  ),
  'posts_per_page' => !empty($number_of_testimonials) ? $number_of_testimonials : -1,
);


$testimonial_query = new WP_Query($args);

if ($testimonial_query->have_posts()) :
 while ($testimonial_query->have_posts()) :
  $testimonial_query->the_post();
?>


  <?php if (have_rows('testimonial')) : ?>

   <?php while (have_rows('testimonial')) : the_row();
    $name = get_sub_field('name');
    $position = get_sub_field('position');
    $testimonial_text = get_sub_field('testimonial_text');
    $stars = get_sub_field('stars');
   ?>

    
	  <div class="col-md-6">
	  
	  <div class="row justify-content-center mb-5">
		  
		  
		 <div class="col-md-2 text-center">
		  
		  
		     <?php if( get_field('client_logo') ): //if client logo is ready ?>
   <?php $image = get_field( 'client_logo'); ?>
	  
<div class="px-5 p-md-0">
 <a href="<?php the_permalink(); ?>">
  <img class="rounded-circle border img-fluid imgwidthfull lazyload" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $image['sizes']['medium']; ?>" alt="<?php if( !empty($image['alt']) ): ?><?php echo $image['alt']; ?><?php else: ?><?php the_title(); ?><?php endif; ?>" width="<?php echo $image['width']?>" height="<?php echo $image['height']?>" />
 </a>
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
		  
		</div>  
		  
		  
 <?php endwhile; ?>

  <?php endif; ?>
	


<?php
 endwhile;
 wp_reset_postdata(); // Restore original post data.
else :
 // If no testimonials found.
endif;
?>

	</div>

<!-- Testimonial loop -->


<!-- //define if column end --> 
<?php while ( have_rows('column') ) : the_row(); $column_position = get_sub_field('column_position');?>
<?php if (strpos($column_position, 'end') !== false) { //if cond. ?></div> 
<?php } ?>
<?php endwhile; ?>
<!-- //define if column end -->  




<?php elseif( get_row_layout() == 'services' ): ?>
<?php $termsss = get_sub_field('services'); ?> 
<?php foreach ($termsss as $term) { // let the loop understand the values you would like to echo  ?>

 <div class="card shadow my-5">
  <div class="card-header">
    <strong>Are You Impressed by Our <?php  echo $term->name; ?> Skills? </strong>
  </div>
   
   
   <div class="row">
   
   
   <div class="col-md-4">
     <a href="<?php echo get_tag_link($term); ?>"><img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php $image = get_field('image', $term);?><?php if( get_field('image', $term) ): ?><?php echo $image['sizes']['squaresmall']; ?><?php else: //if there not fire first image from the first post ?><?php endif; ?>" class="m-0 lazyload img-fluid card-img-top" data-expand="-100" alt="<?php $title = get_field('title', $term);?><?php echo $title; ?>" height="400" width="400"></a>
   
     </div>
   
   <div class="col-md-8">
  <div class="card-body">
    
    <p class="card-text">Here's what to do, book a 30 min call today and get a quick presentation about our agency and price list for your next digital marketing project.</p>
    
    <p class="card-title h5 mt-4">
      
    <?php $icon = get_field('icon', $term);?><i class="me-2 fa-1x fab fa-<?php echo $icon; ?>"></i>
      
      <strong> <a href="<?php echo get_tag_link($term); ?>"><?php  echo $term->name; ?></a></strong></p>

     <?php $description = get_field('description', $term);?><?php if( get_field('description', $term) ): ?><p class="card-text"><?php echo $description; ?></p><?php endif; ?> 
     
    <a href="#footer" class="btn btn-primary">Book a call</a>
  </div>
     </div>
   
   </div>
   
   
</div>

<?php }  wp_reset_query() // end of let the loop understand the values you would like to echo ?>    


          
<?php elseif( get_row_layout() == 'related' ): ?>

<?php $postsrelatedcat = get_sub_field('postsrelatedcat', $term); ?> 
<?php $related = get_sub_field('related', $term); ?>   
<?php $relatedcount = get_sub_field('relatedcount', $term); ?> 
<?php $relatedloop = get_sub_field('relatedloop', $term); ?> 
<?php $relatedoffset = get_sub_field('relatedoffset', $term); ?> 

<?php $infinite_loop = get_sub_field('infinite_loop', $term); ?> 





 <?php if (get_sub_field('related_title')) { ?>
                <h3 class="mt-5 mb-4"><?php the_sub_field('related_title'); ?></h3>            
<?php } ?>


                              

   
 <?php 
  
  global $wp_query; 
  
  
global $paged;
if(is_front_page()) {
    $paged = (get_query_var('page')) ? get_query_var('page') : 1;
}else {
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
}
  
  
  if(is_single()) { 
       $args = array( //add post_not to remove the current single from the loop
      
	  'cat' => $postsrelatedcat , //must use tag id for this field
        'tag__in' => $related , //must use tag id for this field
		'paged'  => $paged,
		'offset' => $relatedoffset,
		
		'post__not_in' => array($post->ID),		
        'posts_per_page' => $relatedcount
		
		
		); //get all posts
		
}else {
   
       $args = array( //for all loops excpet single
      
	  'cat' => $postsrelatedcat , //must use tag id for this field
        'tag__in' => $related , //must use tag id for this field
		'paged'  => $paged,
		'offset' => $relatedoffset,
		'posts_per_page' => $relatedcount
		
		
		); //get all posts
		
}
  
    
		
	
		
		

$the_query = new WP_Query( $args ); ?>



<?php if( get_sub_field('infinite_loop') ) { //if infinite checked ?> 

	<div class="grid row"> 
    
  <div class="grid__col-sizer"></div>
  <div class="grid__gutter-sizer"></div>
  
<?php } else { // can't get nothing at all?>
  <div class="row p-0" data-masonry='{"percentPosition": true }'> 
<?php }?>



  
  
<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    
	
	 
	
	<?php  if( get_sub_field('relatedloop') ): ?>

<?php include get_theme_file_path( $relatedloop ); //load loop.php ?>
<?php else: ?>
<?php include get_theme_file_path( '/loop-wide.php' ); //load loop.php ?>
    <?php  endif;  ?>
 

	
         

 
 
 
 
 
<?php endwhile; ?>

<?php endif; ?>

  </div>  
          






<?php if( get_sub_field('infinite_loop') ) { //if infinite checked ?> 
<!-- status elements -->
<div class="scroller-status">
    <div class="col-2 my-5 loader-ellips infinite-scroll-request">
        <span class="loader-ellips__dot"></span>
        <span class="loader-ellips__dot"></span>
        <span class="loader-ellips__dot"></span>
        <span class="loader-ellips__dot"></span>
      </div>
  <p class="infinite-scroll-last"></p>
  <p class="infinite-scroll-error"></p>
</div>
 <p class="pagination">
 <?php next_posts_link(''); ?>
</p>  
<!-- status elements -->

<?php } else { // can't get nothing at all?>
 
<?php }?>


             
<?php wp_reset_query() ?> 




<?php elseif( get_row_layout() == 'page' ): ?>
<?php $page =  get_sub_field('page');  ?>   
<?php foreach( $page as $post ): ?>


<div class="card border-0">
<div class="shadow border rounded my-5">
   
    <div class="text-white bg-dark card-header"><strong>It May Be Interesting to Check This!</strong></div>
   
   <div class="row">
     
     <div class="col-sm-4">
       <?php $image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "squaresmall" ); ?><?php $image_width = $image_data[1]; ?><?php $image_height = $image_data[2];  // get the featuered images width and height ?> 
  
  
   <a href="<?php echo get_permalink($post->ID) // get the loop-item the link ?>"><img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php the_post_thumbnail_url('squaresmall'); ?>" class="m-0 lazyload img-fluid card-img-top" data-expand="-100" alt="<?php the_title(); ?>" width="<?php echo $image_width; ?>" height="<?php echo $image_height; ?>"></a>
     </div>
     
      <div class="col-sm-8">
       
  <div class="card-body">
    <p class="h5 mt-3">Learn More About</p>
    <p class="h3 mb-3"><strong><?php the_title(); ?></strong></p>
    
     <?php $description = get_field('description');?><?php if( get_field('description') ): ?><p class="card-text"><?php echo $description; ?></p><?php endif; ?> 
     
    <a href="<?php echo get_permalink($post->ID) // get the loop-item the link ?>" class="btn btn-primary">See Details</a>
  </div>

     </div>
     
   </div>
  </div>
  </div>
  
  
<?php endforeach; wp_reset_query() ?>    


          
          
          
          
<?php elseif( get_row_layout() == 'iclayout' ): ?>

 <div class="row">  
	<?php	// loop through the rows of data
			    while ( have_rows('iclayout') ) : the_row();

	 $icimage = get_sub_field('image');
   $icicon = get_sub_field('icon');
   $icdescription = get_sub_field('description');
   $iccta = get_sub_field('cta');
   $icctalink = get_sub_field('cta-link');
   
   ?>
   
   
   
   
   
      
<?php if(get_sub_field('image')) { // if image is there ?>
  
<div class="col-sm-4 mt-4">
 
   
<?php $icimage = get_sub_field('image'); if( $icimage ): $alt = $image['alt']; ?>
<?php foreach( $icimage as $image ):
                      
            $size = 'medium';
            $width = $image['sizes'][ $size . '-width' ];
            $height = $image['sizes'][ $size . '-height' ];
                      
 ?>
							

      
                
<img class="border m-0 img-fluid imgwidthfull lazyload" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $image['sizes']['medium']; ?>" alt="<?php if( !empty($image['alt']) ): ?><?php echo $image['alt']; ?><?php else: ?><?php the_title(); ?><?php endif; ?>" width="<?php echo $width?>" height="<?php echo $height?>" >
							

      
<?php endforeach; ?>
<?php endif; ?> 
	
       
</div> 
  
<?php } // end if the image is there ?>

      
<?php if(get_sub_field('icon')) { // if image is there ?>
  
<div class="text-center col-5 col-sm-4  mt-4">
 
   <div class="position-relative ratio ratio-1x1 border bg-light ">
      
      <div class="icon-container">
     
<i class="position-absolute top-50 start-50 translate-middle fa-5x <?php echo $icicon ?>"></i>
  
	 </div>
     
    </div>
		
		
		
		
</div> 
  
<?php } // end if the image is there ?>

  
    <div class="col-sm-8 col-12 mb-4">

      <?php echo $icdescription  ?>
      
      
      
      
      
      
      

      
      
      
      
</div> 
   

		<?php endwhile; ?> 
      
  
   </div>

              











<?php elseif( get_row_layout() == 'isotopcat' ): ?>
<div id="filters" class="border-bottom border-3 mb-3">
<ul class="list-inline mb-2 mx-3">
<li class="list-inline-item pe-1 pb-2" ><a href="#filter" data-option-value="*" class="btn btn-primary">All</a></li>

<?php $catss = get_sub_field('isotopfilters'); ?> 
<?php foreach ($catss as $cat) { // let the loop understand the values you would like to echo  ?>

  
  
 <li class="list-inline-item pe-1 pb-2" > <a href="#filter" data-option-value=".<?php  echo $cat->term_id; ?>" class="btn btn-light"><?php  echo $cat->name; ?></a></li>
 
  
<?php }  wp_reset_query() // end of let the loop understand the values you would like to echo ?>  
  
  </ul>
</div>
<div id="da-thumbs" class="da-thumbs p-0">  




<?php $isotopcatnumbers = get_sub_field('isotopcatnumbers', $term); //register how many posts ?>


<?php $term = get_queried_object(); $isotopcat = get_sub_field('isotopcat', $term); // get related posts?>
<?php if( get_sub_field('isotopcat', $term) ): ?>

		  
<div class="row m-0 p-0"  data-masonry='{"percentPosition": true }'>


    <?php 
  global $wp_query;
        $args = array(
      
        'cat' => $isotopcat, 
        'posts_per_page' => -1); //get all posts


$posts = get_posts($args);

$count=0; // define count to stop the loop in a certen number of posts
if ($posts)  { // define if to start counting
	
foreach ($posts as $post) : ?>

<div class="pb-4 col-md-6 box <?php $tags = get_the_tags(); $html = ''; foreach ($tags as $tag){  $tag_link = get_tag_link($tag->term_id); $html .= "$tag->term_id";  }  $html .= '';  echo $html; // get tag id ?>">






    <div class="shadow card">
      <?php if ( has_post_thumbnail() ) { ?>
   
<?php $image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "medium" ); ?><?php $image_width = $image_data[1]; ?><?php $image_height = $image_data[2];  // get the featuered images width and height ?>  
      
      <a href="<?php echo get_permalink($post->ID) // get the loop-item the link ?>"><img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php the_post_thumbnail_url('medium'); ?>" class="border-bottom m-0 img-fluid card-img-top lazyload" data-expand="-100" alt="<?php the_title(); ?>" width="<?php echo $image_width; ?>" height="<?php echo $image_height; ?>">
      </a>
      <?php } else { ?>

<?php } ?>
            
      
      
      <div class="card-body pb-4">
        
        <small class="lh-lg text-muted">
		
		
<?php // get tag name and link
    $tags = get_the_tags();
    $html = '';
    foreach ($tags as $tag){
        $tag_link = get_tag_link($tag->term_id);

        $html .= "<a href='{$tag_link}' title='{$tag->name}' class='{$tag->slug}'>";
        $html .= "{$tag->name}</a>";
    }
    $html .= '';
    echo $html;
?>
		
		
		
	
		
		
		
		
	</small>
		









        
        <a href="<?php echo get_permalink($post->ID) // get the loop-item the link ?>"><p class="h4 mt-2 text-dark card-title"><?php the_title(); ?></p></a>
        
        <small class="font-italic text-muted"><?php echo get_the_time('jS', $post->ID); // get the loop-item the time ?> <?php echo get_the_time('M, Y', $post->ID); // get the loop-item the time  ?></small>
        
        
        	
        
         </div>
    </div>
  </div>




<?php 
$count++;
if( $count == $isotopcatnumbers ) break; //change the number to adjust the count ?>
 

 
<?php endforeach; ?>

 


<?php 
$count++;
if( $isotopcatnumbers <= 9 ) { ?>

<div class="my-4 row justify-content-center text-center">
<div class="col-md-4">
<a class="btn btn-primary" href="<?php foreach((get_the_category()) as $category) { if($category->parent != 1){  //load category?> <?php echo get_category_link($category->cat_ID) //echo the link?><?php } } ?>">Full List Of <?php foreach((get_the_category()) as $category) { if($category->parent != 1){ echo $category->cat_name . ' '; } } //echo the first category name ?></a>
</div>
</div>

<?php } ?>



 
<?php } // end if to end counting ?>
 
</div>
       
       


<?php else: //if there not fire default ?>
<?php endif; // end get related posts?>
     
</div>             
 

<!-- isotopcustom --> 



<?php elseif( get_row_layout() == 'isotopcustom' ): ?>

<div class="isotopcustom container-fluid">
  <?php
  // Get the values
  $imagesize = get_sub_field('imagesize'); // Fetch the image size selected in ACF
  $columns = get_sub_field('columns');
  $postscount = get_sub_field('postscount');
  $related_tags = get_sub_field('relatedtag'); // Fetch related tags from ACF
  ?>

  <div class="mt-5 container">

      <h3 class="fs-1 fw-bold">
        Our Latest Digital Marketing Success Stories
      </h3>
      <p class="mt-4 mb-5">
        Innovative Campaigns and Proven Results for Leading Brands
      </p>


    <?php $postsrelatedcat = get_sub_field('postsrelatedcat'); ?>

    <div class="row">
      <!-- Mobile Filter Button -->
<div class="col-12 d-grid">        
<button class="btn btn-light d-md-none mb-3" id="openFilter">
  <i class="fa-solid fa-sliders me-2"></i> Filter
</button>
</div>
      <!-- Sidebar Filter -->
      <div class="filter-sidebar d-md-none" id="filterSidebar">
        <button class="close-btn my-3" id="closeFilter"><i class="fa-solid fa-xmark me-2"></i> Close</button>
        
		
		<!-- Industry Filter Buttons -->
	   <div class="filter-buttons p-3">
	   <h4 class="mt-0 mb-4"><i class="fa-solid fa-industry me-2"></i> Industries</h4>
	   <button class="btn btn-primary mb-2" data-filter="*">All</button>
    <?php
$unique_industries = array(); // Initialize an empty array to store unique industries

$all_posts = get_posts(array(
    'posts_per_page' => -1, // Fetch all posts
    'post_type'      => 'post', // Adjust if you're using a custom post type
    'post_status'    => 'publish',
));

if ($all_posts) {
    foreach ($all_posts as $post) {
        setup_postdata($post); // Set up post data
        $industry = get_field('client_industry'); // Get the industry field
        
        if ($industry && !in_array($industry, $unique_industries)) {
            $unique_industries[] = $industry; // Add to array if not already added
        }
    }
    wp_reset_postdata(); // Reset post data after the loop
}
?>

<?php
if (!empty($unique_industries)) {
    foreach ($unique_industries as $industry) {
        echo '<button class="btn btn-outline-secondary mb-2 me-2" data-filter=".industry-' . sanitize_title($industry) . '">' . esc_html($industry) . '</button>';
    }
}
?>
</div>
		
		<hr>
		
		<!-- Location Filter Buttons -->
	   <div class="filter-buttons p-3">
	   <h4 class="mt-0 mb-4"><i class="fa-solid fa-map-marker-alt me-2"></i> Locations</h4>
	   <button class="btn btn-primary mb-2" data-filter="*">All</button>
    <?php
$unique_locations = array(); // Initialize an empty array to store unique industries

$all_posts = get_posts(array(
    'posts_per_page' => -1, // Fetch all posts
    'post_type'      => 'post', // Adjust if you're using a custom post type
    'post_status'    => 'publish',
));

if ($all_posts) {
    foreach ($all_posts as $post) {
        setup_postdata($post); // Set up post data
        $location = get_field('client_location'); // Get the location field
        
        if ($location && !in_array($location, $unique_locations)) {
            $unique_locations[] = $location; // Add to array if not already added
        }
    }
    wp_reset_postdata(); // Reset post data after the loop
}
?>

<?php
if (!empty($unique_locations)) {
    foreach ($unique_locations as $location) {
        echo '<button class="btn btn-outline-secondary mb-2 me-2" data-filter=".location-' . sanitize_title($location) . '">' . esc_html($location) . '</button>';
    }
}
?>
</div>
		
		<hr>
		
		<div class="filter-buttons p-3">
		<h4 class="mt-0 mb-4"><i class="fa-solid fa-briefcase me-2"></i>Services</h4>
          <button class="btn btn-primary mb-2 me-2" data-filter="*">All</button>
           <?php 
          if (!empty($related_tags)) {
    foreach ($related_tags as $tag_id) {
        $tag = get_tag($tag_id);
        echo '<button class="btn btn-outline-primary mb-2 me-2" data-filter=".tag-' . $tag->term_id . '">' . esc_html($tag->name) . '</button>';
    }
} else {
    $all_tags = get_tags(array('hide_empty' => false));
    foreach ($all_tags as $tag) {
        echo '<button class="btn btn-outline-primary mb-2 me-2" data-filter=".tag-' . $tag->term_id . '">' . esc_html($tag->name) . '</button>';
    }
}
          ?>
        </div>
      
	  
	  </div>

      <!-- Filtering Buttons Column for Desktop -->
      <div class="col-md-3 d-none d-md-block">
	  
	  
			
		<!-- Industry Filter Buttons -->
	   <div class="filter-buttons">
	   <h4 class="mt-0 mb-4"><i class="fa-solid fa-industry me-2"></i> Industries</h4>
	   <button class="btn btn-primary mb-2" data-filter="*">All</button>
    <?php
$unique_industries = array(); // Initialize an empty array to store unique industries

$all_posts = get_posts(array(
    'posts_per_page' => -1, // Fetch all posts
    'post_type'      => 'post', // Adjust if you're using a custom post type
    'post_status'    => 'publish',
));

if ($all_posts) {
    foreach ($all_posts as $post) {
        setup_postdata($post); // Set up post data
        $industry = get_field('client_industry'); // Get the industry field
        
        if ($industry && !in_array($industry, $unique_industries)) {
            $unique_industries[] = $industry; // Add to array if not already added
        }
    }
    wp_reset_postdata(); // Reset post data after the loop
}
?>

<?php
if (!empty($unique_industries)) {
    foreach ($unique_industries as $industry) {
        echo '<button class="btn btn-outline-secondary mb-2 me-2" data-filter=".industry-' . sanitize_title($industry) . '">' . esc_html($industry) . '</button>';
    }
}
?>
</div>
		
		<hr>
		
		<!-- Location Filter Buttons -->
	   <div class="filter-buttons">
	   <h4 class="mt-0 mb-4"><i class="fa-solid fa-map-marker-alt me-2"></i> Locations</h4>
	   <button class="btn btn-primary mb-2" data-filter="*">All</button>
    <?php
$unique_locations = array(); // Initialize an empty array to store unique industries

$all_posts = get_posts(array(
    'posts_per_page' => -1, // Fetch all posts
    'post_type'      => 'post', // Adjust if you're using a custom post type
    'post_status'    => 'publish',
));

if ($all_posts) {
    foreach ($all_posts as $post) {
        setup_postdata($post); // Set up post data
        $location = get_field('client_location'); // Get the location field
        
        if ($location && !in_array($location, $unique_locations)) {
            $unique_locations[] = $location; // Add to array if not already added
        }
    }
    wp_reset_postdata(); // Reset post data after the loop
}
?>

<?php
if (!empty($unique_locations)) {
    foreach ($unique_locations as $location) {
        echo '<button class="btn btn-outline-secondary mb-2 me-2" data-filter=".location-' . sanitize_title($location) . '">' . esc_html($location) . '</button>';
    }
}
?>
</div>
		
		<hr>
		
		<div class="filter-buttons">
		<h4 class="mt-0 mb-4"><i class="fa-solid fa-briefcase me-2"></i>Services</h4>
          <button class="btn btn-primary mb-2 me-2" data-filter="*">All</button>
           <?php 
          if (!empty($related_tags)) {
    foreach ($related_tags as $tag_id) {
        $tag = get_tag($tag_id);
        echo '<button class="btn btn-outline-primary mb-2 me-2" data-filter=".tag-' . $tag->term_id . '">' . esc_html($tag->name) . '</button>';
    }
} else {
    $all_tags = get_tags(array('hide_empty' => false));
    foreach ($all_tags as $tag) {
        echo '<button class="btn btn-outline-primary mb-2 me-2" data-filter=".tag-' . $tag->term_id . '">' . esc_html($tag->name) . '</button>';
    }
}
          ?>
        </div>
      
	  	  
	  </div>

      <!-- Posts Column -->
      <div class="col-md-9">
        <div class="row mt-3 posts-container" data-masonry='{"percentPosition": true }'>
          <?php 
          $args = array(
            'cat' => $postsrelatedcat, 
            'posts_per_page' => -1,
			'orderby' => 'default_date',
			'order' => 'DESC',
          );



          $related_tags = get_sub_field('relatedtag');
          if (!empty($related_tags)) {
            $args['tag__in'] = $related_tags;
          }

          $posts = get_posts($args);
          $count = 0;
          if ($posts) { 
            foreach ($posts as $post) : 
              $post_tags = get_the_tags($post->ID);
              $tag_classes = '';
              if ($post_tags) {
                foreach ($post_tags as $post_tag) {
                  $tag_classes .= ' tag-' . $post_tag->term_id;
                }
              }
          ?>
		  
		  
		  <?php //call industry
		  $client_industry = get_field('client_industry');$industry_class = $client_industry ? ' industry-' . sanitize_title($client_industry) : '';?>
		  
		  <?php //call location
		  $client_location = get_field('client_location');$location_class = $client_location ? ' location-' . sanitize_title($client_location) : '';?>  
		  
          <div class="pb-4 col-md-<?php echo intval(12 / $columns); ?> post-item <?php echo $tag_classes . $industry_class . $location_class ; ?>">
            <div class="shadow card">
              <?php
                if (has_post_thumbnail()) {
                    $image_data = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), $imagesize);
                    $image_width = $image_data[1];
                    $image_height = $image_data[2];

                    $svgPlaceholder = 'data:image/svg+xml;base64,' . base64_encode(
                      '<svg xmlns="http://www.w3.org/2000/svg" width="' . $image_width . '" height="' . $image_height . '" viewBox="0 0 ' . $image_width . ' ' . $image_height . '">
                         <rect width="100%" height="100%" fill="#f8f9fb"/>
                       </svg>'
                    );
              ?>
                  <a href="<?php echo get_permalink($post->ID); ?>">
                    <img
                      src="<?php echo $svgPlaceholder; ?>"
                      data-src="<?php echo get_the_post_thumbnail_url($post->ID, $imagesize); ?>"
                      class="border-bottom m-0 img-fluid card-img-top lazyload"
                      alt="<?php the_title(); ?>"
                      width="<?php echo $image_width; ?>"
                      height="<?php echo $image_height; ?>"
                    >
                  </a>
              <?php } ?>

              <div class="card-body pb-4">
			  
			  <?php 
$client_industry = get_field('client_industry'); 
if ($client_industry): ?>
  <small>
    <i class="fa fa-industry me-1"></i>
    <?php echo esc_html($client_industry); ?>
  </small>
<?php endif; ?>

			  
			  
                <a href="<?php echo get_permalink($post->ID); ?>">
                  <?php if ( is_single() || is_page() || is_tag() ) : ?>
                    <p class="h3 mt-2 text-dark card-title"><?php the_title(); ?></p>
                  <?php else : ?>
                    <h3 class="mt-2 text-dark card-title"><?php the_title(); ?></h3>
                  <?php endif; ?>
                </a>

                <div class="small my-3">
        
       <small class="font-italic text-muted me-3"><i class="me-1 fa fa-calendar"></i> <?php echo get_the_time('Y', $post->ID); // get the loop-item the year ?></small>
        
                
        	<?php if( get_field('client_location') ): ?>
        
										 <?php include get_theme_file_path( '/location.php' ); //load location.php ?>

        <?php endif; ?>	
       
        </div>

                <?php
                  $description = get_field('description'); 
                  if ($description):
                    echo '<p class="card-text">' . esc_html($description) . '</p>';
                  endif;
                ?>
              </div>
            </div>
          </div>
          <?php 
            $count++;
            if ($count == $postscount) break;
            endforeach; 
          } ?>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- isotopcustom --> 






<!-- accordion --> 

<?php elseif( get_row_layout() == 'accordion' ): $a = 0; ?>


<!-- //define if column start --> 
<?php while ( have_rows('column') ) : the_row(); $column_position = get_sub_field('column_position');?>
<?php if (strpos($column_position, 'start') !== false) { //if cond. ?><div class="row"> 
<?php } ?>
<?php endwhile; ?>
<!-- //define if column start --> 



<div class="accordion my-4 <?php	while ( have_rows('column') ) : the_row(); $column_container = get_sub_field('column_container'); $column_width = get_sub_field('column_width'); ?><?php echo $column_container ?><?php echo $column_width ?> <?php endwhile; ?>">

<h3><?php the_sub_field('accordion_title'); ?></h3>

<div class="accordion my-4" id="<?php echo "acc" . ++$a . ""; ?>">

<?php 
$b = 0; // Initialize $b variable
$isFirst = true; // Flag to track the first iteration

while (have_rows('accordion')): the_row(); 
  $accordionitemtitle = get_sub_field('accordionitemtitle');
  $accordionitembody = get_sub_field('accordionitembody');
?>

  <div class="accordion-item">
    <h4 class="m-0 p-0 accordion-header" id="<?php echo "heading" . ++$b . ""; ?>">
      <button class="accordion-button text-start bg-light shadow-none <?php echo $isFirst ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $b ?>" aria-expanded="<?php echo $isFirst ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $b ?>">
        <strong><?php echo $accordionitemtitle; ?></strong>
      </button>
    </h4>
    <div id="<?php echo "collapse" . $b . ""; ?>" class="accordion-collapse collapse <?php echo $isFirst ? 'show' : ''; ?>" aria-labelledby="<?php echo "heading" . $b . ""; ?>" data-bs-parent="#<?php echo "acc" . $a . ""; ?>">
      <div class="accordion-body">
        <?php echo $accordionitembody; ?>
      </div>
    </div>
  </div>

<?php 
$isFirst = false; // Set isFirst to false after the first iteration
endwhile; 
?>

</div>


</div>


 <!-- //define if column end --> 
<?php while ( have_rows('column') ) : the_row(); $column_position = get_sub_field('column_position');?>
<?php if (strpos($column_position, 'end') !== false) { //if cond. ?></div> 
<?php } ?>
<?php endwhile; ?>
<!-- //define if column end -->    
 
<!-- accordion --> 














<!-- numbers --> 

<?php elseif( get_row_layout() == 'numbers' ): $a = 0; ?>


<!-- //define if column start --> 
<?php while ( have_rows('column') ) : the_row(); $column_position = get_sub_field('column_position');?>
<?php if (strpos($column_position, 'start') !== false) { //if cond. ?><div class="row"> 
<?php } ?>
<?php endwhile; ?>
<!-- //define if column start --> 



<div class="numbers text-center my-4 <?php	while ( have_rows('column') ) : the_row(); $column_container = get_sub_field('column_container'); $column_width = get_sub_field('column_width'); ?><?php echo $column_container ?><?php echo $column_width ?> <?php endwhile; ?>">






<?php $numbers_title = get_sub_field('numbers_title'); if (get_sub_field('numbers_title')) { ?>
    <h3 class="fs-1"><?php the_sub_field('numbers_title'); ?></h3>
  <?php } else {?><?php } ?>

<h4 class="fs-2"><?php the_sub_field('numbers_description'); ?></h4>

<div class="numbers my-5 row justify-content-center">


<?php
// Define an associative array that maps descriptions to Font Awesome icons
$icons_map = array(
    'Total Users' => 'fas fa-users',
    'New Users' => 'fas fa-user-plus',
    'Engagement Rate' => 'fas fa-chart-line',
    'User Engagement' => 'fas fa-clock',
    'Sessions' => 'fas fa-network-wired',
    'Organic Search' => 'fas fa-search',
    'Organic Social' => 'fas fa-share-alt',
    'Paid Social' => 'fas fa-bullhorn',
    'Impressions' => 'fas fa-eye',
    'Clicks' => 'fas fa-mouse-pointer',
    'Site CTR' => 'fas fa-tachometer-alt',
	'Average Position' => 'fas fa-trophy',
    'New Page Likes' => 'fas fa-thumbs-up',
    'Page Views' => 'fas fa-desktop',
    'Total Followers Gain' => 'fas fa-user-friends',
    'Total Clicks' => 'fas fa-mouse-pointer',
    'Total Impressions' => 'fas fa-eye',
    'Total Unique Impressions' => 'fas fa-user-check',
    'Total Engagement' => 'fas fa-handshake',
    'Average CTR' => 'fas fa-chart-pie',
	'Results' => 'fas fa-tasks',
	'Cost per Result' => 'fas fa-coins',
	'Video Views' => 'fas fa-video',
    'Leads' => 'fas fa-address-card',
	'Cost per Lead' => 'fas fa-hand-holding-usd',
    'Purchases' => 'fas fa-shopping-cart',
    'Revenue' => 'fas fa-dollar-sign'
);
?>




<?php
// loop through the rows of data
while (have_rows('numbers')) : the_row(); 
    $numbersitem = get_sub_field('numbersitem');
    $numbersitemdescription = get_sub_field('numbersitemdescription');
    
    // Dynamically fetch the icon class based on the description, or use 'fas fa-users' as default
    $icon = isset($icons_map[$numbersitemdescription]) ? $icons_map[$numbersitemdescription] : 'fas fa-users'; // Default icon if no match found
?>
   
<div class="col-md-4 mb-4">
    <div class="numbers-item p-3 m-2 bg-light">
        <i class="mt-3 fa-2x <?php echo $icon; ?>"></i>
        <p class="fs-1 text-primary"><strong><?php echo $numbersitem; ?></strong></p>
        <p><?php echo $numbersitemdescription; ?></p>
    </div>
</div>

<?php endwhile; ?>


   
	  
</div> 
</div>


 <!-- //define if column end --> 
<?php while ( have_rows('column') ) : the_row(); $column_position = get_sub_field('column_position');?>
<?php if (strpos($column_position, 'end') !== false) { //if cond. ?></div> 
<?php } ?>
<?php endwhile; ?>
<!-- //define if column end -->    
 
<!-- numbers --> 











<!-- packages --> 




<?php elseif( get_row_layout() == 'packages' ): ?>


<h3><?php the_sub_field('packages_title'); ?></h3>


<div class="package my-4 row justify-content-md-center">





<?php	// repeater
while ( have_rows('package') ) : the_row();			
$title_1 = get_sub_field('title_1');
$title_2 = get_sub_field('title_2');	 
$title_3 = get_sub_field('title_3');
$elements = get_sub_field('elements');
$elements_highlighted = get_sub_field('elements_highlighted');
$cta = get_sub_field('cta');
$cta_link = get_sub_field('cta_link');
   ?>
   

    
<div class="mb-3 col-sm">
         <div class="p-5 text-center bg-dark text-white">
       <p class="fw-bold h2"><?php echo $title_1 ?></p>
        


<?php

// Remove the $ sign from $title_1
$title_1_ec = str_replace('$', '', $title_1);

$price = getEgpRate() * $title_1_ec;
$rounded_price = round($price, -2);
$formatted_price = number_format($rounded_price, 0, '.', ',');
$final_price = 'EGP ' . $formatted_price;
?>


<p class="fw-bold h5">or <?php echo $final_price; ?></p>




		
           <small><?php echo $title_3 ?></small>
         </div>
     
   
<ul class="list-group list-group-flush p-3 bg-light">
         
         
<li class="list-group-item">

<?php echo $elements = trim(preg_replace('/\s\s+/', '<li class="list-group-item"> ', $elements));  ?>
</li>


<li class="list-group-item list-group-item-dark">

<?php echo $elements_highlighted = trim(preg_replace('/\s\s+/', '<li class="list-group-item list-group-item-dark"> ', $elements_highlighted));  ?> 

<?php
// get title 2 for customised prices addons
if (!empty($title_2)) {
	echo $title_2 . " or " ."EGP " . number_format(round((preg_replace('/\$/', '', $title_2) * getEgpRate()), -2), 0, '.', ',');
}
?>

	

	
</li>


         </ul>         
         
        <a class="btn btn-light" href="<?php echo $cta_link ?>"><?php echo $cta ?></a>
  
  </div>




<?php endwhile; 	// end repeater  ?> 

   
   

   
   
   
   
   
 
   
   
   
   
   
   
   
   
   
   
   
   
	  
</div> 



<!-- Retrieve and display data from a repeater field -->




<?php
// Description: Retrieve and display data from a repeater field
// Purpose: Show the first and last values of 'title_1' from the repeater loop

// Initialize variables
$first_title_1 = '';
$last_title_1 = '';
$count = 0;

// Repeater loop to fetch data
while (have_rows('package')) : the_row();
    // Retrieve 'title_1' value
    $title_1 = get_sub_field('title_1');

    // Capture the first 'title_1' value
    if ($count === 0) {
        $first_title_1 = $title_1;
        $first_title_1 = str_replace('$', '', $first_title_1);
        $price = getEgpRate() * $first_title_1;
        $rounded_price_first = round($price, -2);
        $formatted_price_first = number_format($rounded_price_first, 0, '.', ',');
        $rounded_price_first = 'EGP ' . $formatted_price_first;
    }

    // Update the last 'title_1' value on each iteration
    $last_title_1 = $title_1;
    $last_title_1 = str_replace('$', '', $last_title_1);
    $price = getEgpRate() * $last_title_1;
    $rounded_price_last = round($price, -2);
    $formatted_price_last = number_format($rounded_price_last, 0, '.', ',');
    $rounded_price_last = 'EGP ' . $formatted_price_last;

    // Rest of your code to display the data from the repeater

    $count++;
endwhile; // End of repeater loop
?>

<?php
$contents = array();

// Check if the first and last prices are the same
if ($first_title_1 === $last_title_1) {
    $contents[] = '<p><strong>' . get_sub_field('packages_title') . '</strong> starting from <strong>' . $rounded_price_first . '</strong> in Egypt.</p>';
} else {
    $contents[] = '<p>Discover the power of our <strong>' . get_sub_field('packages_title') . '</strong> packages, ranging from <strong>' . $rounded_price_first . '</strong> to <strong>' . $rounded_price_last . '</strong> in Egypt.</p>';

    // Add other contents here if needed
    $contents[] = '<p>Elevate your online presence with our dynamic <strong>' . get_sub_field('packages_title') . '</strong> packages, spanning from <strong>' . $rounded_price_first . '</strong> to <strong>' . $rounded_price_last . '</strong> in Egypt.</p>';

    $contents[] = '<p>Unlock your online potential with our versatile <strong>' . get_sub_field('packages_title') . '</strong> packages, available from <strong>' . $rounded_price_first . '</strong> to <strong>' . $rounded_price_last . '</strong> in Egypt.</p>';
}

// Shuffle the contents only if the first and last prices are different
if ($first_title_1 !== $last_title_1) {
    // Shuffle the contents
    shuffle($contents);
}

// Echo the first content
echo $contents[0];
?>


<?php
// Exit the current loop and stop further execution
wp_reset_postdata();
return;
?>





<!-- Retrieve and display data from a repeater field -->
   
   
   

















<!-- packages --> 







<!-- potp -->

<?php elseif( get_row_layout() == 'potp' ): ?>		

<!-- //define if column start --> 
<?php while ( have_rows('column') ) : the_row(); $column_position = get_sub_field('column_position');?><?php if (strpos($column_position, 'start') !== false) { //if cond. ?><div class="row"><?php } ?><?php endwhile; ?>
<!-- //define if column start --> 


	

<div class="potp <?php	while ( have_rows('column') ) : the_row(); $column_container = get_sub_field('column_container'); $column_width = get_sub_field('column_width'); ?><?php echo $column_container ?><?php echo $column_width ?> <?php endwhile; ?>">
    <?php  
    $potp = get_sub_field('potp'); // Get the selected page/post ID 

    // Check if the 'body' repeater field exists and has rows
    if( have_rows('body', $potp ) ): 
        while( have_rows('body', $potp ) ): the_row(); 
            
            // Get the checkbox value to see if the field is marked as shared
            $is_shared = get_sub_field('shared'); // Replace 'shared' with the actual checkbox field name
            
            if ( $is_shared ): // Check if the field is marked to be shared
                include get_theme_file_path('/flixable.php'); // Load your template file
            endif;
        
        endwhile; 
    endif; 
    
    wp_reset_query(); 
    ?>
</div>


 <!-- //define if column end --> 
<?php while ( have_rows('column') ) : the_row(); $column_position = get_sub_field('column_position');?>
<?php if (strpos($column_position, 'end') !== false) { //if cond. ?></div> 
<?php } ?>
<?php endwhile; ?>
<!-- //define if column end -->    
			
<!-- potp -->  




<!-- imgcarousel -->

<?php elseif( get_row_layout() == 'imgcarousel' ): ?>



<!-- //define if column start --> 
<?php while ( have_rows('column') ) : the_row(); $column_position = get_sub_field('column_position');?>
<?php if (strpos($column_position, 'start') !== false) { //if cond. ?><div class="row"> 
<?php } ?>
<?php endwhile; ?>
<!-- //define if column start --> 







<?php

// Global variable to track carousel instances across multiple includes
global $carouselCounter;
if (!isset($carouselCounter)) {
    $carouselCounter = 1;
}

$imgcarousel = get_sub_field('imgcarousel');
if ($imgcarousel) :
    $isFirst = true;
    $startInterval = 5000;
    $intervalIncrement = $startInterval + (1000 * ($carouselCounter - 1)); // Adjust this value as needed

    ?>

    <div id="imgcarousel<?php echo $carouselCounter; ?>" data-bs-pause="false" data-bs-interval="<?php echo $intervalIncrement; ?>" class="imgcarousel carousel slide my-3 <?php while (have_rows('column')) : the_row(); $column_container = get_sub_field('column_container'); $column_width = get_sub_field('column_width'); ?><?php echo $column_container ?><?php echo $column_width ?> <?php endwhile; ?>" data-bs-ride="carousel">
        <div class="carousel-inner">

            <?php foreach ($imgcarousel as $image) : ?>
                <?php
                $size = 'large';
                $width = $image['sizes'][$size . '-width'];
                $height = $image['sizes'][$size . '-height'];
				
				// Add this line to set the $title variable
				$title = $image['title'];

                $lazyClass = $isFirst ? '' : 'lazyload';
                $lazyDataSrc = $isFirst ? $image['sizes']['large'] : 'data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=';
                ?>
                <div class="carousel-item <?php echo $isFirst ? 'active' : ''; ?>">
                    <img class="<?php echo $lazyClass; ?> img-fluid m-0" data-expand="-100" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php echo $title; ?>" src="<?php echo $lazyDataSrc; ?>" data-src="<?php echo $image['sizes']['large']; ?>">
                </div>
                <?php
                $isFirst = false;
            endforeach;
            ?>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#imgcarousel<?php echo $carouselCounter; ?>" data-bs-slide="prev">
            <span aria-hidden="true"><i class="fas fa-chevron-circle-left text-white fa-lg"></i></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#imgcarousel<?php echo $carouselCounter; ?>" data-bs-slide="next">
            <span aria-hidden="true"><i class="fas fa-chevron-circle-right text-white fa-lg"></i></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <?php
    $carouselCounter++;
endif;
?>








 <!-- //define if column end --> 
<?php while ( have_rows('column') ) : the_row(); $column_position = get_sub_field('column_position');?>
<?php if (strpos($column_position, 'end') !== false) { //if cond. ?></div> 
<?php } ?>
<?php endwhile; ?>
<!-- //define if column end -->    

<!-- imgcarousel -->  






<?php elseif( get_row_layout() == 'tagslist' ): ?>
<div class="my-5 tagslist container-fluid bg-light">
<div class="py-5 container">
          
          <?php if(get_sub_field('title')) { // if title is there ?>
           <h3 class="mb-5 fs-1 fw-bold" > <?php the_sub_field('title'); ?></h3>
	<?php } // end if the title is there ?>	   
		  
		  
<!-- show selected tags -->
<ul class="list-unstyled justify-content-center row">            
<?php $catss = get_sub_field('tags'); ?> 
<?php foreach ($catss as $cat) { // let the loop understand the values you would like to echo  ?>


<li class="m-4">

<div class="border py-5 px-3 row">
<div class="text-center col-3"><?php $icon = get_field('icon', $cat);?><i class="me-2 fa-3x <?php echo $icon; ?>"></i></div>

<div class="col-9"><p class="h3 fw-bold m-0 mb-2"><a href="<?php echo get_tag_link($cat); ?>"><?php  echo $cat->name; ?></a></p>

<?php $description = get_field('description', $cat);?><?php if( get_field('description', $cat) ): ?><p class="card-text"><?php echo $description; ?></p><?php endif; ?>  
</div>
</div>
</li>

<?php }  wp_reset_query() // end of let the loop understand the values you would like to echo ?>    
   </ul> 
<!-- show selected tags -->
      
</div>
</div>




	   
<?php elseif( get_row_layout() == 'images' ): //if has images do this?>



<?php

$images = get_sub_field('images');
// the above will return something
// other than an array
// if there are no images
if (is_array($images)) {
  // at lease 1 image

  if (count($images) == 1) {
    // only 1 image
	
	  ?> 

<!-- //define if column start --> 
<?php while ( have_rows('column') ) : the_row(); $column_position = get_sub_field('column_position');?>
<?php if (strpos($column_position, 'start') !== false) { //if cond. ?><div class="row"> 
<?php } ?>
<?php endwhile; ?>
<!-- //define if column start --> 


<?php $images = get_sub_field('images'); if( $images ): $alt = $image['alt']; 

$images_size = get_sub_field('images_size');

?>
<?php foreach( $images as $image ):
                      
					  
  if( get_sub_field('images_size') ): 
$size = $images_size; 
 else:
$size = 'large';
 endif; 
            
            $width = $image['sizes'][ $size . '-width' ];
            $height = $image['sizes'][ $size . '-height' ];
                      
 ?>
 
<div class="images <?php	while ( have_rows('column') ) : the_row(); $column_container = get_sub_field('column_container'); $column_width = get_sub_field('column_width'); ?><?php echo $column_container ?><?php echo $column_width ?> <?php endwhile; ?>">


<img class="mt-3 mb-4 img-fluid imgwidthfull lazyload" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $image['sizes'][$size]; ?>" alt="<?php if( !empty($image['alt']) ): ?><?php echo $image['alt']; ?><?php else: ?><?php the_title(); ?><?php endif; ?>" width="<?php echo $width?>" height="<?php echo $height?>" >

<?php endforeach; ?>
<?php endif; ?> 

</div>

 <!-- //define if column end --> 
<?php while ( have_rows('column') ) : the_row(); $column_position = get_sub_field('column_position');?>
<?php if (strpos($column_position, 'end') !== false) { //if cond. ?></div> 
<?php } ?>
<?php endwhile; ?>
<!-- //define if column end -->  




	  <?php
  } else {
    // more than 1 image
	
	?> 



  <div class="row mt-3 mb-4 row-cols-1 row-cols-sm-<?php $count = count(get_sub_field('images')); // make a count how many images to show colums ?><? if($count == 1) {  echo '1'; } elseif ($count > 1) {  echo '2'; } ?> row-cols-md-<?php $count = count(get_sub_field('images')); // make a count how many images to show colums ?><? if($count == 1) {  echo '1'; } elseif ($count > 1) {  echo '2'; } ?> row-cols-lg-<?php $count = count(get_sub_field('images')); // make a count how many images to show colums ?><? if($count == 1) {  echo '1'; } elseif ($count > 1) {  echo '2'; } ?>"  data-masonry='{"percentPosition": true }'>
  

<?php $images = get_sub_field('images'); if( $images ): $alt = $image['alt']; 

$images_size = get_sub_field('images_size');

?>
<?php foreach( $images as $image ):
                      
					  
  if( get_sub_field('images_size') ): 
$size = $images_size; 
 else:
$size = 'large';
 endif; 
            
            $width = $image['sizes'][ $size . '-width' ];
            $height = $image['sizes'][ $size . '-height' ];
                      
 ?>
							
<div class="col my-2">
                
<img class="m-0 img-fluid imgwidthfull lazyload" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $image['sizes'][$size]; ?>" alt="<?php if( !empty($image['alt']) ): ?><?php echo $image['alt']; ?><?php else: ?><?php the_title(); ?><?php endif; ?>" width="<?php echo $width?>" height="<?php echo $height?>" >
							
</div>	
<?php endforeach; ?>
<?php endif; ?> 
                      
</div>





	<?php
	
  }
}

?>








<?php elseif( get_row_layout() == 'countries' ): ?>

<!-- //define if column start --> 
<?php while ( have_rows('column') ) : the_row(); $column_position = get_sub_field('column_position');?>
<?php if (strpos($column_position, 'start') !== false) { //if cond. ?><div class="row"> 
<?php } ?>
<?php endwhile; ?>
<!-- //define if column start -->


<?php


$title = get_sub_field('title');


// Set up the query
$args = array(
    'post_type' => 'post',
    'posts_per_page' => -1,  // Show all posts (adjust as needed)
    'cat' => 1,  // Filter by category ID
);
$query = new WP_Query($args);

$total_projects = $query->found_posts; // Access total found posts

// Start date and time in market calculations (optional, adjust if needed)
$start_date = new DateTime('2014-02-01');
$today = new DateTime('now');
$time_in_market = $start_date->diff($today);

// Initialize data structures
$location_counts = array();
$sorted_locations = array();

// Loop through posts and accumulate counts
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();

        $client_location = get_field('client_location');

        if ($client_location) {
            if (!array_key_exists($client_location, $location_counts)) {
                $location_counts[$client_location] = 0;
            }
            $location_counts[$client_location]++;
        }
    }

    // Sort location counts (highest to lowest)
    arsort($location_counts);

    // Extract sorted locations and counts
    foreach ($location_counts as $location => $count) {
        $sorted_locations[] = array(
            'location' => $location,
            'count' => $count,
        );
    }
} else {
    // No posts found
    echo "No posts found.";
}

// Restore original post data
wp_reset_postdata();

// Array mapping countries to codes
$country_codes = array(
    'Egypt' => 'eg',
    'United Arab Emirates' => 'ae',
    'Lebanon' => 'lb',
	'Canada' => 'ca',
	'China' => 'cn',
	'United States of America' => 'us',
	'Saudi Arabia' => 'sa',
	'Italy' => 'it',
	'Australia' => 'au',
	'Bahrain' => 'bh',
	'Qatar' => 'qa'
	
);



// Initialize a variable to track unique countries
$unique_countries = array();

// Loop through sorted locations and counts
foreach ($sorted_locations as $location_data) {
  if ($location_data['location']) {
    $location = $location_data['location'];
    $country_code = $country_codes[$location] ?? '';

    // Add the country to the unique countries array if it's not already there
    if (!in_array($location, $unique_countries)) {
      $unique_countries[] = $location;
    }

    // ... your existing code for displaying each location ...
  }
}

// Calculate the total number of unique countries
$total_countries = count($unique_countries);


?>


<div class="mb-5">

<h3><?php echo $title ?></h3>

		
		<p class="h5 countries-covered mt-4"><i class="fas fa-globe-americas me-2"></i> Countries Covered: <strong><?php echo $total_countries; ?> Countries</strong></p>
		
		
<div class="row row-cols-auto g-3 m-0">



<?php

// Output sorted locations and counts
foreach ($sorted_locations as $location_data) {
    if ($location_data['location']) {
        $location = $location_data['location'];
        $country_code = $country_codes[$location] ?? ''; // Get country code from array
        ?>
		


	
		
      <div class="col d-flex align-items-center p-0">
        <div class="bi text-muted flex-shrink-0 me-1">
		<i class="flags-list me-1 flag-icon flag-icon-<?php echo $country_code; ?>"></i>
		</div>
		<div class="me-4">
          <p class="location-count h5"><?php echo $location_data['count']; ?> <?php echo ($location_data['count'] > 1) ? 'Clients' : 'Client'; ?></p>
        </div>
      </div>
	  
	 
		
		
		
		
		
		
        <?php
    }
}

?>

</div>

		
<p class="h5 total-projects my-4"><i class="fas fa-users me-2"></i> Total Clients: <strong><?php echo $total_projects; ?> Clients</strong></p>

<!-- calculate Time in Market -->
<?php if ($start_date && $time_in_market && $time_in_market->y + $time_in_market->m + $time_in_market->d > 0): ?>
  <p class="h5 time-in-market"><i class="fas fa-clock me-2"></i> Time in Market:
    <?php
      $years = $time_in_market->y;
      $months = $time_in_market->m;
      $days = $time_in_market->d;

      $output = "";
      $parts = []; // Array to store non-zero time units

      if ($years > 0) {
        $parts[] = "<strong>$years</strong> Year" . ($years > 1 ? "s" : "");
      }

      if ($months > 0) {
        $parts[] = "<strong>$months</strong> Month" . ($months > 1 ? "s" : "");
      }

      if ($days > 0) {
        $parts[] = "<strong>$days</strong> Day" . ($days > 1 ? "s" : "");
      }

      // Concatenate non-empty parts with commas, removing extra commas
      $output = implode(', ', array_filter($parts));

      echo $output;
    ?>
  </p>
<?php endif; ?>

<!-- calculate Time in Market -->

</div>

<!-- //define if column end --> 
<?php while ( have_rows('column') ) : the_row(); $column_position = get_sub_field('column_position');?>
<?php if (strpos($column_position, 'end') !== false) { //if cond. ?></div> 
<?php } ?>
<?php endwhile; ?>
<!-- //define if column end -->         






<!-- slider --> 

<?php elseif( get_row_layout() == 'slider' ): ?>

<!-- //define if column start --> 
<?php while ( have_rows('column') ) : the_row(); $column_position = get_sub_field('column_position');?>
<?php if (strpos($column_position, 'start') !== false) { ?><div class="container-fluid"> <div class="d-flex row align-items-stretch p-0"> 
<?php } ?>
<?php endwhile; ?>
<!-- //define if column start --> 

<?php
// Global variable to track carousel instances across multiple includes (if not already defined elsewhere)
global $sliderCounter;
if (!isset($sliderCounter)) {
  $sliderCounter = 1;
}
?>

<div id="slider<?php echo $sliderCounter; ?>" data-bs-pause="false" data-bs-interval="7000" class="bg-dark px-0 slider lazy-load carousel keyboard touch slide d-flex align-items-center <?php echo "slider-height-" . get_sub_field('height'); ?><?php $spacertop = get_sub_field('spacertop'); if (get_sub_field('spacertop')) {?> pt-<?php echo $spacertop; ?><?php } ?><?php $spacerbottom = get_sub_field('spacerbottom'); if (get_sub_field('spacerbottom')) {?> pb-<?php echo $spacerbottom; ?><?php } ?> p-0 <?php while ( have_rows('column') ) : the_row(); $column_container = get_sub_field('column_container'); $column_width = get_sub_field('column_width'); ?><?php echo $column_container ?><?php echo $column_width ?><?php endwhile; ?> <?php $center = get_sub_field('center'); if( $center && in_array('center', $center) ) { ?> text-center<?php } else { ?><?php } ?>" data-bs-ride="carousel">


  <div class="carousel-indicators">
    <ul class="list-unstyled d-flex justify-content-center m-0 p-0">

      <?php if( have_rows('slider') ): $counter = 0; ?>
      <?php $i = 0; ?>
      <?php while( have_rows('slider') ): the_row(); ?>

        <?php if( $counter == 0 ) { ?>
          <li data-bs-target="#slider<?php echo $sliderCounter; ?>" data-bs-slide-to="0" class="active"></li>
          <?php $i = 1; ?>
        <?php } ?>

        <?php if( $counter > 0 ) { ?>
          <li data-bs-target="#slider<?php echo $sliderCounter; ?>" data-bs-slide-to="<?php echo $i++; ?>"></li>

        <?php } ?>

        <?php $counter++; endwhile; ?>
      <?php endif; ?>


    </ul>
  </div>


  <div class="carousel-inner">

    <?php if( have_rows('slider') ): $counter = 0; ?>
    <?php while( have_rows('slider') ): the_row();

      $title = get_sub_field('title');
      $description = get_sub_field('description');
      $image = get_sub_field('image');
      $link = get_sub_field('link');	

      ?>

      <?php
$size = 'large';
$width = $image['sizes'][ $size . '-width' ];
$height = $image['sizes'][ $size . '-height' ];
?>  <?php if( $counter == 0 ) { ?>

      <div class="carousel-item active">

        <img class="img-fluid" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php echo $title; ?>" src="<?php echo $image['sizes']['large']; ?>">


<?php if ($link && $link !== 'none') : ?>
    <a href="<?php echo get_permalink($link);?>">
<?php endif; ?>

    <div class="carousel-caption text-uppercase">
        <h2 class="fw-bold cover-font"> <?php echo $title; ?> </h2>
        <p class="d-none d-sm-block cover-font-s fs-5"> <?php echo $description; ?> </p>
    </div>

<?php if ($link && $link !== 'none') : ?>
    </a>
<?php endif; ?>

      </div>

      <?php } ?>


    <?php if( $counter > 0 ) { ?>

      <div class="carousel-item">

        <img class="lazyload img-fluid" data-expand="-100" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php echo $title; ?>" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $image['sizes']['large']; ?>">

<?php if ($link && $link !== 'none') : ?>
    <a href="<?php echo get_permalink($link);?>">
<?php endif; ?>

    <div class="carousel-caption text-uppercase">
        <h2 class="fw-bold cover-font"> <?php echo $title; ?> </h2>
        <p class="d-none d-sm-block cover-font-s fs-5"> <?php echo $description; ?> </p>
    </div>

<?php if ($link && $link !== 'none') : ?>
    </a>
<?php endif; ?>

      </div>
      

    <?php } ?>

    <?php $counter++; endwhile; ?>
  <?php endif; ?>


  </div>
  <a class="carousel-control-prev" href="#slider<?php echo $sliderCounter; ?>" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#slider<?php echo $sliderCounter; ?>" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>

<?php $sliderCounter++; ?>

<!-- //define if column end --> 
<?php while ( have_rows('column') ) : the_row(); $column_position = get_sub_field('column_position');?>
<?php if (strpos($column_position, 'end') !== false) { ?></div> </div> 
<?php } ?>
<?php endwhile; ?>
<!-- //define if column end -->

<!-- slider -->

<!-- servicesall --> 

<?php elseif( get_row_layout() == 'servicesall' ): ?>        
         <div class="py-spacer justify-content-center bg-light text-center row ">
           
          
           <h2 class="fw-bold text-uppercase"><?php the_sub_field('title'); ?></h2>
           
           <p class="mb-5"><?php the_sub_field('subtitle'); ?></p>
            
           <!-- show all categories -->
           

             <?php $categories = get_categories (array('orderby' => 'id', 'child_of'=>'1', 'hide_empty' => 1)); ?>

      <?php  foreach($categories as $category):  ?>

      <?php query_posts( array ( 'category_name' => $category->slug, 'showposts' => '5', 'child_of'=>'1' ) ); ?>
           
           <div class="col-12 col-md-4 col-lg-3">
             <div class="align-middle text-center"> <a href="<?php $category_id = get_query_var('cat'); echo get_category_link( $category_id ); ?>">
    <i class="my-4 fa fa-<?php 
    $category = get_queried_object(); 
    $category_id = 'category_' . $category->term_id; 
    $icon = get_field('icon', $category_id); 

    echo $icon ? $icon : get_field('icon', 'category_2'); 
?> fa-3x"></i>
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

     

<!-- servicesall -->


<?php endif; //end for all get_row_layout?> 

                   