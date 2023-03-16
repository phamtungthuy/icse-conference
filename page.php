<?php 
get_header();
?>
<td>
<?php 
    if(have_posts()) {
        while(have_posts()) {
            the_post();
            the_content();
        }
    }
?>


</td>
<?php 
    get_footer();
?>