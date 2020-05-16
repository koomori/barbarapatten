<?php
/**
 * The template for displaying the home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main" class="home-page for-the-home-page">

<div class="background-river">
	<section id="center-audio">
    <div id="audio-container">
      <div id="commercial-container">
        <h2 class="first">Commercial</h2>
        <div class="icon-audio">
          <i class="fas fa-microphone-alt fa-2x" aria-hidden="true"></i>
          <audio controls src="http://localhost:8888/wp-content/uploads/2020/05/Commercial-Compilation.mp3"></audio>
        </div>
      </div>
      <div id="accents-languages-container">
        <h2>Accents & Languages</h2>
        <div class="icon-audio"></div>
      </div>
      <div id="narration-explainer">
        <h2>Narration & Explainer</h2>
        <div class="icon-audio"></div>
      </div>
    </div>
	</section>
</div>
	<!-- <?php

	/* if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		} 
	} */

	?> -->

</main><!-- #site-content -->
<section id="below-main">
	<div id="voice-actor">
	</div>
</section>

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
