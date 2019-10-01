
<h1>Custom Theme!</h1>

<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 10/1/2019
 * Time: 7:49 AM
 */
//<h1>Custom Theme!</h1>

get_header();
if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
    <?php the_content() ?>
    <?php endwhile;
        else :
            echo '<p>There are no posts!</p>';
        endif;
            get_footer();
?>
