     



<div class="px-3 pb-3">


<div class="card">


<div class="row g-0">

<div class="col-md-4">
<div class="col-12">

      <?php if ( has_post_thumbnail() ) { ?>
   
<?php $image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "medium" ); ?><?php $image_width = $image_data[1]; ?><?php $image_height = $image_data[2];  // get the featuered images width and height ?>  
      
      <a href="<?php echo get_permalink($post->ID) // get the loop-item the link ?>"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAlgAAAE6AQMAAADwfL5TAAAAAXNSR0IB2cksfwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAANQTFRF////p8QbyAAAAC5JREFUeJztwTEBAAAAwqD1T20MH6AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAL4GXTgAAdfoTb8AAAAASUVORK5CYII=" data-src="<?php the_post_thumbnail_url('medium'); ?>" class="m-0 img-fluid card-img-top lazyload" data-expand="-100" alt="<?php the_title(); ?>" width="<?php echo $image_width; ?>" height="<?php echo $image_height; ?>">
      </a>
      <?php } else { ?>

<?php } ?>

</div>
</div>

<div class="col-md-8">

<div class="card-body">

        <?php if( get_field('client_industry') ): ?>
        <small class="lh-lg text-muted">
		<i class="fa fa-industry me-1"></i> 
		<a href="/latest-work/">  <?php the_field('client_industry'); ?></a>
		</small>
           <?php endif; ?>	



        <a href="<?php echo get_permalink($post->ID) // get the loop-item the link ?>">
		
		
<?php if ( is_single() ) { // if category?>
<p class="h3 mt-2 text-dark card-title"><?php the_title(); ?></p>
<?php } elseif ( is_page() ) { // if tags?>
<p class="h3 mt-2 text-dark card-title"><?php the_title(); ?></p>
<?php } elseif ( is_tag() ) { // if tags?>
<p class="h3 mt-2 text-dark card-title"><?php the_title(); ?></p>
<?php } else { // can't get nothing at all?>
<h3 class="mt-2 text-dark card-title"><?php the_title(); ?></h3>
<?php }?>


		
		
		</a>


     
        <small class="font-italic text-muted"><?php echo get_the_time('jS', $post->ID); // get the loop-item the time ?> <?php echo get_the_time('M, Y', $post->ID); // get the loop-item the time  ?></small>
        
        

<p class="text-dark card-text"><?php the_field('description'); ?></p>
</div>

</div>
</div>

</div>

</div>




    
