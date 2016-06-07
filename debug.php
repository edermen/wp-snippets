<?php 
// ==== DEBUG ====
  // load global styles array
  global $wp_styles;
  var_dump($wp_styles);

  // load global scripts array
  global $wp_scripts;
  var_dump($wp_scripts);
// EN DEBUG
?>



// SIMPLE TEST HOOKS
<?php
function test_filter() {
	return "SOlli!";
}
add_filter('the_title', 'test_filter', 40);
?>