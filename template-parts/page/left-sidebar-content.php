<h1>hi</h1>
<?php 
if(have_posts()) : while(have_posts()) : the_post();
the_title();
the_content();
endwhile;
endif;
?>