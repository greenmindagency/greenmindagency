<?php get_header(); // This fxn gets the header.php file and renders it ?>
<div class="ms-sm-auto col-lg-10">
        
     <!-- jarallax image -->
 
    <div data-jarallax data-speed="0.2"  class="row p-0 bg-dark jarallax">
      
        <?php $image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "medium" ); ?><?php $image_width = $image_data[1]; ?><?php $image_height = $image_data[2];  // get the featuered images width and height ?> 
      
      
      <img loading="lazy" src="<?php the_post_thumbnail_url('medium'); ?>" class="jarallax-img" alt="<?php the_title(); ?>" width="<?php echo $image_width; ?>" height="<?php echo $image_height; ?>">
      
    <div class="col-12 p-5 text-white text-center">
    <h1 class="fw-bold card-title display-4 text-uppercase"><?php the_title(); ?></h1>
    <h2 class="fw-bold display-5 text-uppercase"><?php bloginfo('name'); ?></h2>
    
    <p class="card-text"><?php the_field('description'); ?></p>
    </div>
</div>
    
    <!-- jarallax image --> 
	
========================





			--------------



<?php $price = getEgpRate(); ?>
<p class="fw-bold h5">Equivalent Price for $1: EGP <?php echo $price; ?></p>
<small> Based on The Central Bank of Egypt </small>



------------


<?php

// URL of the website
$url = "https://www.investing.com/currencies/usd-egpp";

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Execute cURL session and get the content
$html = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
    exit;
}

// Close cURL session
curl_close($ch);

// Load the HTML content into a DOMDocument
$dom = new DOMDocument;
@$dom->loadHTML($html);

// Create a DOMXPath object to query the document
$xpath = new DOMXPath($dom);

// Define your XPath query
$xpathQuery = "//*[@id='__next']/div[2]/div[2]/div[2]/div[1]/div[1]/div[3]/div[1]/div[1]/div[1]";

// Use XPath to get the desired content
$result = $xpath->query($xpathQuery);

// Output the content
if ($result->length > 0) {
    echo "<p class='h5'>Equivalent Price for \$1: <strong>EGP " . $result->item(0)->nodeValue . "</strong></p>";
} else {
    echo "XPath query did not match any elements.";
}
?>



			
											
====== flixable content ======
 
		       
<!-- flixable content -->
							
<article class="blog-post">

				
                      
<?php if( have_rows('body') ): ?>
<?php while( have_rows('body') ): the_row(); ?>
                      
<?php include get_theme_file_path( '/flixable.php' ); //load sidebar.php ?>
                 
<?php endwhile; ?>
<?php endif; ?>
          </article>                 
<!-- flixable content -->   
   

   
		  
		  
            
=========================
   <ul>
    
  
  <?php
$tagslist = get_tags();
foreach($tagslist as $tag) { 
?>
    <li>
        
        <a class="tag-list_item theme-<?php echo $tag->slug; ?>" data-tag="<?php echo $tag->term_id; ?>" href="<?php echo get_tag_link($tag->term_id); ?>" >
             <?php echo $tag->name; ?>
        </a>
      <p><?php echo get_field('description', 'post_tag_'.$tag->term_id); ?></p>
    </li>                        
<?php } ?>
  
  

  
  </ul>
             
 
  ===========================
          
   <h1>
     Categories:
          </h1>
          
          
           <ul>
          
     <?php $categories = get_categories (array('orderby' => 'id', 'hide_empty' => 1)); ?>
      <?php  foreach($categories as $category):  ?>
      <?php query_posts( array ( 'category_name' => $category->slug ) ); ?>
          
          <li><a class="link-light"  target="_blank" href="<?php $category_id = get_query_var('cat'); echo get_category_link( $category_id ); ?>">
    
    <?php $category_id = get_query_var('cat'); echo get_category_link( $category_id ); ?>
               </a> - <?php $id = 'category_'.get_queried_object()->term_id; the_field('subtitle', $id); ?></li>
           <?php endforeach; ?>
            
            <?php wp_reset_query(); ?>
        </ul>

          
       
            <h1>
     Pages:
          </h1>
          
          
           <ul>
          
    
<?php
$pages = get_pages();
foreach ( $pages as $page ) {
?>
          <li> <a target="_blank" href="<?php echo get_page_link( $page->ID ) ?>" class="header-link"><?php echo get_page_link( $page->ID ) ?></a> - <?php echo $page->post_title ?>
             </li>  
             
             <?php 
}
?> 
          
          
             </ul> 
          
          
          
            <h1>
     Tags:
          </h1>
          
          
           <ul>
 
<?php
    $tags = get_tags('post_tag'); //taxonomy=post_tag
    
    if ( $tags ) :
        foreach ( $tags as $tag ) : ?>
            <li class="tag-item-manually"><a class="tag" target="_blank" href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_url( get_tag_link( $tag->term_id ) ); ?></a> - <?php  $title = get_field('title', $tag);?><?php if( get_field('title', $tag) ): ?><?php echo $title; ?> <?php endif; ?></li>
        <?php endforeach; ?>
    <?php endif; ?>

        </ul> 
          
          
          
           <h1>
     Posts:
          </h1>
          
          
           <ul>
          
     <?php query_posts('showposts=99999999999'); ?>   
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    
    <li><a  target="_blank" href="<?php echo get_permalink($post->ID) // get the loop-item the link ?>"><?php echo get_permalink($post->ID) // get the loop-item the link ?></a> - <?php the_title(); ?>
	
		<?php if( get_field('client_location') ): ?> |

				
	
	<span class="bg-primary"> <?php the_field('client_location'); ?></span>
	<?php endif; ?>	
	</li>
    
 <?php endwhile; endif; ?>  
          
          
          </ul>
             
   
---------------------------------------
          
          
          
          
 
          
        
       
       
          
          
          
          
       ------------------------------   
          
          
          
          
          
          
 
 </div> 
          
             
    
        
        
        
 
      

    

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>


