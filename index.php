<?php
/**
 * The page layout
 *
 * @package the-loop
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<header class="wrap">
		<h1 class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		</h1>
		<p class="site-description">
			<?php echo get_bloginfo( 'description', 'display' ); ?>
		</p>
	</header>

	<main class="wrap">
<?php
	if ( have_posts() ) {
		while ( have_posts() ) {

			the_post();
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			the_content();

		}
	}
?>
	</main>
	<?php wp_footer(); ?>
</body>

</html>
