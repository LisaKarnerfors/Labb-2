<?php get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
	        while (have_posts()) {
            	the_post(); ?>
					<h1><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>            
        <?php } ?>

		</main>
	</div>

<?php

get_footer();
