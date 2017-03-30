<?php get_header(); ?>

<h2>Результаты поиска</h2>
<?php while ( have_posts() ) : the_post(); ?>
<a href="<?php the_permalink() ?>"><?php the_title(); ?></a> <br><br>
<?php endwhile; ?>


<?php get_footer(); ?>