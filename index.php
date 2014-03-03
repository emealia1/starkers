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

<section id="hght-20" class="clear-both">
	<img id="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-ph.png">

	<nav class="float-right txt-white">
		<a href="/" class="nav-item nav-item-active txt-center">Page 1</a>
		<a href="/" class="nav-item txt-center">Page 2</a>
		<a href="/" class="nav-item txt-center">Page 3</a>
		<a href="/" class="nav-item txt-center">Page 4</a>
	</nav>
</section>

<section id="hght-40" class="main-img">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Beach-Landscape.png">
</section>

<section id="hght-30">
	<p class="col">
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quam erat, lacinia nec semper et, condimentum quis ipsum. Morbi lacinia vitae sem ac pretium. In tempor, ligula sit amet volutpat cursus, quam magna rutrum mauris, vitae tristique elit turpis ut felis.
	</p>

	<p class="col">
	Integer augue metus, molestie ac varius quis, tincidunt sed neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas aliquam sed massa eu condimentum. Sed aliquet odio quis varius vulputate. 
	</p>

	<p class="col">
	Sed rhoncus faucibus felis ac sagittis. Sed semper cursus semper. Nullam vitae mauris eu lacus convallis ultrices. Curabitur lobortis velit a libero suscipit, tincidunt sodales diam auctor. Nam tincidunt turpis ac pellentesque faucibus.
	</p>
</section>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>