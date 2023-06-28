<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content', 'page' );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile; // End of the loop.
        ?>	
<style>
	div#content {
    background-color: white;
}
.error-container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: calc(100vh - 25vh);
}
	@media(max-width:767px){	
.error-container h2 {
    font-size: 28px;
}	
}	
</style>		


<div class="error-container">
		<div class="text-center">
			<h2 class="fialova">Chyba 404</h2>
			<h2>Stránka nebyla nalezena</h2>
			<p style="margin-top:20px;">Vypadá to, že odkaz, který vás sem odkázal, byl chybný. <br> Možná jste se chtěli <b><a href="https://emitent.jamesapp.cz/">přihlásit</a></b> do aplikace James?</p>
		</div>
</div>
<script>
        document.addEventListener("DOMContentLoaded", function() {
            var navItems = document.querySelectorAll("#primary-site-navigation-desktop a[href^='#']"); 
            var homeUrl = "https://www.jamesapp.cz/";

            navItems.forEach(function(navItem) {
                var anchor = navItem.getAttribute("href");
                navItem.setAttribute("href", homeUrl + anchor);
            });
        });
    </script>		


    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();