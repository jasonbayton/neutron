<!DOCTYPE html>
<html lang="en">
<?php include 'header.php';?>
<body>
<?php include 'nav.php';?>
    <!-- Intro Section -->
    <section id="intro" class="fix-width">
        <div class="container">
            <div class="row">
				<div class="col-lg-12">
				<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
				
					<div class="bytn-content">
					
				<?php setPostViews(get_the_ID()); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
						<div class="bytn-header">
							<h1 class="bytn-content-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
							<div class="bytn-meta">
								<div class="post-meta">
									<i class="fa fa-calendar"></i> <?php the_time( 'M j Y' ); ?>
								</div> 
							</div>
						</div>
						<div class="featured-image">
							<?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail('feature', array('class' => '')); ?>
						</div>
						<hr class="style-two">
				<?php echo wp_get_attachment_image( get_the_ID(), 'large' ); ?>
				<?php wp_link_pages(); ?>
					</div>
				</div>	
			</div>
		</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="bytn-content">
						<div class="comments-title"><h2>Comments</h2></div>
						<div class="comments"><?php comments_template(); ?></div>
					</div>
				</div>
			</div>
		<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
				<div class="row">
                                                <div class="col-lg-3 pull-left">
                                                        <div class="navigation index">
                                                                <div class="next-post-link-left"><?php next_posts_link( 'Older Entries' ); ?></div>
                                                          </div><!--end navigation-->
                                                </div>
                                                <div class="col-lg-3 pull-right">
                                                        <div class="navigation index">
                                                                <div><?php previous_posts_link( 'Newer Entries' ); ?></div>
                                                          </div><!--end navigation-->
                                                </div>
                                        </div><!--end navigation-->
			<?php else : ?>
				<h2>There's nothing to see here.</h2>
				<p>Thank you for your interest, but there's nothing to see here just yet. Why not pop back later?</p>
			<?php endif; ?>	
	
			</div>



	   </div>
    </section>
	
<?php include 'footer.php';?>

</body>

</html>
