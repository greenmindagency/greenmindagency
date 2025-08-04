<?php

// page-templates
add_theme_support('page-templates');


// remove "Private: " from titles
function remove_private_prefix($title) { 
	$title = str_replace('Private: ', '', $title);
	return $title;
}
add_filter('the_title', 'remove_private_prefix');
      
    

// better pagination
function bittersweet_pagination() {

global $wp_query;

if ( $wp_query->max_num_pages <= 1 ) return; 

$big = 999999999; // need an unlikely integer

$pages = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'type'  => 'array',
        'prev_text' => '<',
        'next_text' => '>',
    ) );
    if( is_array( $pages ) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<div class="row justify-content-center"><div class="col-11 d-flex justify-content-center mx-1 px-1 border-top border-3 py-5"><nav aria-label="Page navigation example"><ul class="pagination">';
        foreach ( $pages as $page ) {
                echo "<li class='page-item'>$page</li>";
        }
       echo '</ul></nav></div></div>  ';
        }
}



//qt_custom_breadcrumbs()
function custom_breadcrumbs()
{
    // Set variables for later use
    $here_text        = __( '' );
    $home_link        = home_url('/');
    $home_text        = __( 'Home' );
    $link_before      = '<li class="breadcrumb-item">';
    $link_after       = '</li>';
    $link_attr        = '';
    $link             = $link_before . '<a' . $link_attr . ' href="%1$s">%2$s</a>' . $link_after;
    $delimiter        = '';              // Delimiter between crumbs
    $before           = '<li class="breadcrumb-item active">'; // Tag before the current crumb
    $after            = '</li>';                // Tag after the current crumb
    $page_addon       = '';                       // Adds the page number if the query is paged
    $breadcrumb_trail = '';
    $category_links   = '';

    /** 
     * Set our own $wp_the_query variable. Do not use the global variable version due to 
     * reliability
     */
    $wp_the_query   = $GLOBALS['wp_the_query'];
    $queried_object = $wp_the_query->get_queried_object();

    // Handle single post requests which includes single pages, posts and attatchments
    if ( is_singular() ) 
    {
        /** 
         * Set our own $post variable. Do not use the global variable version due to 
         * reliability. We will set $post_object variable to $GLOBALS['wp_the_query']
         */
        $post_object = sanitize_post( $queried_object );

        // Set variables 
        $title          = apply_filters( 'the_title', $post_object->post_title );
        $parent         = $post_object->post_parent;
        $post_type      = $post_object->post_type;
        $post_id        = $post_object->ID;
        $post_link      = $before . $title . $after;
        $parent_string  = '';
        $post_type_link = '';

        if ( 'post' === $post_type ) 
        {
            // Get the post categories
            $categories = get_the_category( $post_id );
            if ( $categories ) {
                // Lets grab the first category
                $category  = $categories[0];

                $category_links = get_category_parents( $category, true, $delimiter );
                $category_links = str_replace( '<a',   $link_before . '<a' . $link_attr, $category_links );
                $category_links = str_replace( '</a>', '</a>' . $link_after,             $category_links );
            }
        }

        if ( !in_array( $post_type, ['post', 'page', 'attachment'] ) )
        {
            $post_type_object = get_post_type_object( $post_type );
            $archive_link     = esc_url( get_post_type_archive_link( $post_type ) );

            $post_type_link   = sprintf( $link, $archive_link, $post_type_object->labels->singular_name );
        }

        // Get post parents if $parent !== 0
        if ( 0 !== $parent ) 
        {
            $parent_links = [];
            while ( $parent ) {
                $post_parent = get_post( $parent );

                $parent_links[] = sprintf( $link, esc_url( get_permalink( $post_parent->ID ) ), get_the_title( $post_parent->ID ) );

                $parent = $post_parent->post_parent;
            }

            $parent_links = array_reverse( $parent_links );

            $parent_string = implode( $delimiter, $parent_links );
        }

        // Lets build the breadcrumb trail
        if ( $parent_string ) {
            $breadcrumb_trail = $parent_string . $delimiter . $post_link;
        } else {
            $breadcrumb_trail = $post_link;
        }

        if ( $post_type_link )
            $breadcrumb_trail = $post_type_link . $delimiter . $breadcrumb_trail;

        if ( $category_links )
            $breadcrumb_trail = $category_links . $breadcrumb_trail;
    }

    // Handle archives which includes category-, tag-, taxonomy-, date-, custom post type archives and author archives
    if( is_archive() )
    {
        if (    is_category()
             || is_tag()
             || is_tax()
        ) {
            // Set the variables for this section
            $term_object        = get_term( $queried_object );
            $taxonomy           = $term_object->taxonomy;
            $term_id            = $term_object->term_id;
            $term_name          = $term_object->name;
            $term_parent        = $term_object->parent;
            $taxonomy_object    = get_taxonomy( $taxonomy );
            $current_term_link  = $before . $taxonomy_object->labels->singular_name . ': ' . $term_name . $after;
            $parent_term_string = '';

            if ( 0 !== $term_parent )
            {
                // Get all the current term ancestors
                $parent_term_links = [];
                while ( $term_parent ) {
                    $term = get_term( $term_parent, $taxonomy );

                    $parent_term_links[] = sprintf( $link, esc_url( get_term_link( $term ) ), $term->name );

                    $term_parent = $term->parent;
                }

                $parent_term_links  = array_reverse( $parent_term_links );
                $parent_term_string = implode( $delimiter, $parent_term_links );
            }

            if ( $parent_term_string ) {
                $breadcrumb_trail = $parent_term_string . $delimiter . $current_term_link;
            } else {
                $breadcrumb_trail = $current_term_link;
            }

        } elseif ( is_author() ) {

            $breadcrumb_trail = __( 'Author archive for ') .  $before . $queried_object->data->display_name . $after;

        } elseif ( is_date() ) {
            // Set default variables
            $year     = $wp_the_query->query_vars['year'];
            $monthnum = $wp_the_query->query_vars['monthnum'];
            $day      = $wp_the_query->query_vars['day'];

            // Get the month name if $monthnum has a value
            if ( $monthnum ) {
                $date_time  = DateTime::createFromFormat( '!m', $monthnum );
                $month_name = $date_time->format( 'F' );
            }

            if ( is_year() ) {

                $breadcrumb_trail = $before . $year . $after;

            } elseif( is_month() ) {

                $year_link        = sprintf( $link, esc_url( get_year_link( $year ) ), $year );

                $breadcrumb_trail = $year_link . $delimiter . $before . $month_name . $after;

            } elseif( is_day() ) {

                $year_link        = sprintf( $link, esc_url( get_year_link( $year ) ),             $year       );
                $month_link       = sprintf( $link, esc_url( get_month_link( $year, $monthnum ) ), $month_name );

                $breadcrumb_trail = $year_link . $delimiter . $month_link . $delimiter . $before . $day . $after;
            }

        } elseif ( is_post_type_archive() ) {

            $post_type        = $wp_the_query->query_vars['post_type'];
            $post_type_object = get_post_type_object( $post_type );

            $breadcrumb_trail = $before . $post_type_object->labels->singular_name . $after;

        }
    }   

    // Handle the search page
    if ( is_search() ) {
        $breadcrumb_trail = __( 'Search query for: ' ) . $before . get_search_query() . $after;
    }

    // Handle 404's
    if ( is_404() ) {
        $breadcrumb_trail = $before . __( 'Error 404' ) . $after;
    }

    // Handle paged pages
    if ( is_paged() ) {
        $current_page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : get_query_var( 'page' );
        $page_addon   = $before . sprintf( __( ' ( Page %s )' ), number_format_i18n( $current_page ) ) . $after;
    }

    $breadcrumb_output_link  = '';
    $breadcrumb_output_link .= '<ul class="breadcrumb">';
    if (    is_home()
         || is_front_page()
    ) {
        // Do not show breadcrumbs on page one of home and frontpage
        if ( is_paged() ) {
            $breadcrumb_output_link .= $here_text . $delimiter;
            $breadcrumb_output_link .= '<li class="breadcrumb-item"><a href="' . $home_link . '">' . $home_text . '</a></li>';
            $breadcrumb_output_link .= $page_addon;
        }
    } else {
        $breadcrumb_output_link .= $here_text . $delimiter;
        $breadcrumb_output_link .= '<li class="breadcrumb-item active"><a href="' . $home_link . '" rel="v:url" property="v:title">' . $home_text . '</a></li>';
        $breadcrumb_output_link .= $delimiter;
        $breadcrumb_output_link .= $breadcrumb_trail;
        $breadcrumb_output_link .= $page_addon;
    }
    $breadcrumb_output_link .= '</ul><!-- .breadcrumbs -->';

    return $breadcrumb_output_link;
}
add_shortcode('custom_breadcrumbs','custom_breadcrumbs');
// end qt_custom_breadcrumbs()


// Add theme support for Featured Images
add_theme_support('post-thumbnails', array(
'post',
'page',
'custom-post-type-name',
));


/////////////////Category Template Based on Category Level
function is_category_level($depth){
$current_category = get_query_var('cat');
$my_category  = get_categories('include='.$current_category);
$cat_depth=0;

 if ($my_category[0]->category_parent == 0){
 	$cat_depth = 0;
 	} else {

 while( $my_category[0]->category_parent != 0 ) {
  $my_category = get_categories('include='.$my_category[0]->category_parent);
  $cat_depth++;
  }
  }
  if ($cat_depth == intval($depth)) { return true; }
  return null;
}


// hide category column in the wp-admin
function removecategorydescrption($columns)
{
 // only edit the columns on the current taxonomy
 if ( !isset($_GET['taxonomy']) || $_GET['taxonomy'] != 'category' )
 return $columns;

 // unset the description columns
 if ( $posts = $columns['description'] ){ unset($columns['description']); }

 return $columns;
}
add_filter('manage_edit-category_columns','removecategorydescrption');



//get the category Parent ID function
function getParentCatID(){
$thiscat =  get_query_var('cat'); // The id of the current category
$catobject = get_category($thiscat,false); // Get the Category object by the id of current category
$parentcat = $catobject->category_parent; // the id of the parent category 
}


// Remove category base
add_filter('category_link', 'no_category_parents',1000,2);
function no_category_parents($catlink, $category_id) {
  $category = get_category( $category_id );
  if ( is_wp_error( $category ) )
    return $category;
  $category_nicename = $category->slug;

  $catlink = trailingslashit(get_option( 'home' )) . user_trailingslashit( $category_nicename, 'category' );
  return $catlink;
}


// Add our custom category rewrite rules
add_filter('category_rewrite_rules', 'no_category_parents_rewrite_rules');
function no_category_parents_rewrite_rules($category_rewrite) {
    //print_r($category_rewrite); // For Debugging

    $category_rewrite=array();
    $categories=get_categories(array('hide_empty'=>false));
    foreach($categories as $category) {
        $category_nicename = $category->slug;
        $category_rewrite['('.$category_nicename.')/(?:feed/)?(feed|rdf|rss|rss2|atom)/?$'] = 'index.php?category_name=$matches[1]&feed=$matches[2]';
        $category_rewrite['('.$category_nicename.')/page/?([0-9]{1,})/?$'] = 'index.php?category_name=$matches[1]&paged=$matches[2]';
        $category_rewrite['('.$category_nicename.')/?$'] = 'index.php?category_name=$matches[1]';
    }
    // Redirect support from Old Category Base
    global $wp_rewrite;
    $old_base = $wp_rewrite->get_category_permastruct();
    $old_base = str_replace( '%category%', '(.+)', $old_base );
    $old_base = trim($old_base, '/');
    $category_rewrite[$old_base.'$'] = 'index.php?category_redirect=$matches[1]';

    //print_r($category_rewrite); // For Debugging
    return $category_rewrite;
}

// Add 'category_redirect' query variable
add_filter('query_vars', 'no_category_parents_query_vars');
function no_category_parents_query_vars($public_query_vars) {
    $public_query_vars[] = 'category_redirect';
    return $public_query_vars;
}
// Redirect if 'category_redirect' is set
add_filter('request', 'no_category_parents_request');
function no_category_parents_request($query_vars) {
    //print_r($query_vars); // For Debugging
    if(isset($query_vars['category_redirect'])) {
        $catlink = trailingslashit(get_option( 'home' )) . user_trailingslashit( $query_vars['category_redirect'], 'category' );
        status_header(301);
        header("Location: $catlink");
        exit();
    }
    return $query_vars;
}
/////////////////Category Template Based on Category Level



/*********************************   new image size for square images  *********************************/


  add_theme_support( 'square' );
  add_image_size( 'square', '628', '628', true );
  
  add_theme_support( 'squaresmall' );
  add_image_size( 'squaresmall', '400', '400', true );

/* sizes
Thumbnail size (150px square)
Medium size (maximum 300px width and height)
Large size (maximum 1024px width and height)
Full size (full/original image size you uploaded)
*/

/*********************************   new image size for square images  *********************************/




//this code is giving a new permlink fresh every refresh
flush_rewrite_rules(true);





/*********************************   replace css on the admin panel  *********************************/
add_action('admin_head', 'my_custom_style');

function my_custom_style() {
  echo '<style>
   #edittag {max-width: 100%;}
   .term-description-wrap, #wp-content-wrap, #post-status-info {display:none; visibility:hidden}
	.acf-fc-layout-handle  { background-color:#ccc} 
  </style>';
}
/*********************************   replace css on the admin panel  *********************************/



/************   adding class to posts_link_attributes to make infinite loop work   ******************/

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
  return 'class="pagination__next"';
}

/************   adding class to posts_link_attributes to make infinite loop work   ******************/



/***  getEgpRate ***/
function getEgpRate() {
  $url = 'https://open.er-api.com/v6/latest/USD';

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  $response = curl_exec($ch);
  curl_close($ch);

  $json = json_decode($response);

  $egp_rate = $json->rates->EGP;

  return $egp_rate;
}

$egp_rate = getEgpRate(); 


/***  getEgpRate ***/

/**show empty categories or tags in loops by default**/

function include_empty_taxonomies_in_queries($args, $taxonomy) {
    // Modify only if 'hide_empty' is set to true
    if (isset($args['hide_empty']) && $args['hide_empty'] === true) {
        $args['hide_empty'] = false;
    }
    return $args;
}
add_filter('get_terms_args', 'include_empty_taxonomies_in_queries', 10, 2);

/**show empty categories or tags in loops by default**/


/**Redirects attachment pages to their parent post or homepage, ensuring media files are not accessible as standalone pages.**/

function redirect_attachment_page() {
    if (is_attachment()) {
        global $post;
        if ($post && $post->post_parent) {
            wp_redirect(get_permalink($post->post_parent), 301);
            exit;
        } else {
            wp_redirect(home_url(), 301);
            exit;
        }
    }
}
add_action('template_redirect', 'redirect_attachment_page');
/**Redirects attachment pages to their parent post or homepage, ensuring media files are not accessible as standalone pages.**/


/**
 * Automatically adds an alt tag to images upon upload if not already provided.
 * The alt tag is set to the image title, or a default text if the title is empty.
 */
 
function add_default_alt_text($post_ID) {
    $image = get_post($post_ID);
    $alt_text = get_post_meta($post_ID, '_wp_attachment_image_alt', true);

    // If alt text is empty, set it to the image title
    if (empty($alt_text)) {
        $alt_text = $image->post_title;

        // You can also set a custom alt text if the title is empty
        if (empty($alt_text)) {
            $alt_text = 'Default Alt Text'; // Replace this with your preferred default alt text
        }

        // Update the alt text
        update_post_meta($post_ID, '_wp_attachment_image_alt', $alt_text);
    }
}
add_action('add_attachment', 'add_default_alt_text');

/**
 * Automatically adds an alt tag to images upon upload if not already provided.
 * The alt tag is set to the image title, or a default text if the title is empty.
 */
 
 
//block new editor for posts and pages/
add_filter('use_block_editor_for_post', '__return_false', 10);
//block new editor for posts and pages/

//modify the script output and remove the type attribute

function remove_script_type_attribute( $tag, $handle, $src ) {
// Remove 'type="text/javascript"' from the script tag
return str_replace( ' type="text/javascript"', '', $tag );
}
add_filter( 'script_loader_tag', 'remove_script_type_attribute', 10, 3 );
//modify the script output and remove the type attribute




?>