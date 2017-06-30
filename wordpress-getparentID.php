<?php 

//get the parent id of the current post

$id = the_ID();
$postparent = wp_get_post_parent_id($id); 

echo "<pre>";
echo "Post parent = " . $postparent;
echo "</pre>";

?>


