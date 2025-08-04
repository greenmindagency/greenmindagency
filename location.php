<span><i class="fa fa-map-marker-alt me-1"></i>
                        
<i class=" me-1 flag-icon flag-icon-<?php $country = get_field('client_location'); //defin the country ?>
<?php if (strpos($country, 'Egypt') !== false) { //if cond. ?>eg
<?php } elseif (strpos($country, 'United Arab Emirates') !== false) { //if cond. ?>ae
<?php } elseif (strpos($country, 'Lebanon') !== false) { //if cond. ?>lb
<?php } elseif (strpos($country, 'Canada') !== false) { //if cond. ?>ca
<?php } elseif (strpos($country, 'China') !== false) { //if cond. ?>cn
<?php } elseif (strpos($country, 'United States of America') !== false) { //if cond. ?>us
<?php } elseif (strpos($country, 'Saudi Arabia') !== false) { //if cond. ?>sa
<?php } elseif (strpos($country, 'Italy') !== false) { //if cond. ?>it
<?php } elseif (strpos($country, 'Australia') !== false) { //if cond. ?>au
<?php } elseif (strpos($country, 'Bahrain') !== false) { //if cond. ?>bh  
<?php } elseif (strpos($country, 'Qatar') !== false) { //if cond. ?>qa   
<?php } ?>">
  
  
                        </i>
                        <?php the_field('client_location'); ?></span>