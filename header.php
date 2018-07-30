<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blog_Stuff
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

<body id="wrapper" <?php body_class(); ?>>

<!-- Header -->
<header id="header">
            <div class="avatar">
                <img src="http://www.brandonhogan.com/images/me.jpg" alt="" />
            </div>
            <ul class="icons">
                <li>
                    <a href="https://github.com/BrandonMHogan" class="icon style2 fa-github">
                        <span class="label">Facebook</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/brandonmhogan" class="icon style2 fa-linkedin">
                        <span class="label">Facebook</span>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/brandonmhogan" class="icon style2 fa-twitter">
                        <span class="label">Twitter</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/brandon.m.hogan/" class="icon style2 fa-instagram">
                        <span class="label">Instagram</span>
                    </a>
                </li>
                <li>
                    <a href="mailto:me@brandonhogan.com" class="icon style2 fa-envelope-o">
                        <span class="label">Email</span>
                    </a>
                </li>
            </ul>
            <h1>Hello, I'm
                <strong>Brandon Hogan</strong>. A mobile, web, and API developer.
                <br />I also dabble in just about everything else.</h1>
        </header>

<div id="page" class="site">
	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'blog-stuff' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
