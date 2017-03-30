<?php
  $post = $wp_query->post;
 
if (in_category('2')) {
	include(TEMPLATEPATH.'/single-services.php');
}
else if (in_category('11')) {
	include(TEMPLATEPATH.'/single-tv.php');
}
else {
	include(TEMPLATEPATH.'/single-product.php');
}
?>