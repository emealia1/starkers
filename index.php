<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<img src="logo.png">

<nav>
	<a href="/" class="nav-item">Page 1</a>
	<a href="/" class="nav-item">Page 2</a>
	<a href="/" class="nav-item">Page 3</a>
	<a href="/" class="nav-item">Page 4</a>
</nav>

<div class="main-img"></div>

<section>
	<p class="col">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quam erat, lacinia nec semper et, condimentum quis ipsum. Morbi lacinia vitae sem ac pretium. In tempor, ligula sit amet volutpat cursus, quam magna rutrum mauris, vitae tristique elit turpis ut felis.
	</p>

	<p class="col">Integer augue metus, molestie ac varius quis, tincidunt sed neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas aliquam sed massa eu condimentum. Sed aliquet odio quis varius vulputate. 
	</p>

	<p class="col">Sed rhoncus faucibus felis ac sagittis. Sed semper cursus semper. Nullam vitae mauris eu lacus convallis ultrices. Curabitur lobortis velit a libero suscipit, tincidunt sodales diam auctor. Nam tincidunt turpis ac pellentesque faucibus.
	</p>
</section>	


<?php if ( have_posts() ): ?>
<h2>Latest Posts</h2>	
<ol>
<?php while ( have_posts() ) : the_post(); ?>
	<li>
		<article>
			<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
			<?php the_content(); ?>
		</article>
	</li>
<?php endwhile; ?>
</ol>
<?php else: ?>
<h2>No posts to display</h2>
<?php endif; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>