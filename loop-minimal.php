     



<div class="grid-item col-sm-6 px-3 pb-3">



     <div class="card mb-3">
  <div class="row g-0">
    <div class="col-4">
      
      <?php $image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "squaresmall" ); ?><?php $image_width = $image_data[1]; ?><?php $image_height = $image_data[2];  // get the featuered images width and height ?>  
            
      <a href="<?php echo get_permalink($post->ID) // get the loop-item the link ?>"><img class="m-0 card-img-top img-fluid lazyload" data-expand="-100" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" width="<?php echo $image_width; ?>" height="<?php echo $image_height; ?>" data-src="<?php the_post_thumbnail_url('squaresmall'); ?>" alt="<?php the_title(); ?>" ></a>
      
      
    </div>
    <div class="col-8">
      <div class="card-body">
        <p class="h5 card-title"><?php the_title(); ?></p>
        <p class="card-text"><small class="text-muted"><?php echo get_the_time('jS', $post->ID); // get the loop-item the time ?> <?php echo get_the_time('M, Y', $post->ID); // get the loop-item the time  ?></small></p>
      </div>
    </div>
  </div>
</div>

</div>




    
