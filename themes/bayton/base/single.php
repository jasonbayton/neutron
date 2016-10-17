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
					
				<!--? setPostViews(get_the_ID()); ?-->
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
						<div class="bytn-header">
							<h1 class="bytn-content-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
							<div class="bytn-meta">
								<div class="post-meta">
									<i class="fa fa-calendar"></i> <?php the_time( 'M j Y' ); ?>
								</div> 
								<div class="post-meta">
									<i class="fa fa-folder-open"></i> <?php the_category(', '); ?>
								</div>
                                                                        
								<div class="post-meta">
                                                                        <i class="fa fa-pencil"></i> <?php echo number_format( bytn_word_count(), 0, '', ',' ); ?>
                                                                </div>
 
								<div class="post-meta">
									<div style="display: inherit;"data-toggle="tooltip" data-placement="top" title="Views refresh daily. External links will always show 0."><i class="fa fa-eye"></i></div> <?php if ( function_exists( 'render_stats' ) ) echo render_stats($post->ID); ?>
								</div>
							</div>
						</div>
						<div class="featured-image">
							<?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail('feature', array('class' => '')); ?>
						</div>
						<hr class="style-two">
				<?php if ( function_exists( 'sharing_display' ) ) remove_filter( 'the_content', 'sharing_display', 19 ); ?>
				<?php the_content(); ?>
				<?php wp_link_pages(); ?>
				
				<?php if ( function_exists( 'sharing_display' ) ) echo sharing_display(); ?>	
						<div class="bytn-meta">
							<div class="post-meta post-tags">
								<i class="fa fa-tags"></i> <?php the_tags('',', '); ?>
							</div>
						</div>
					</div>
				</div>	
            <div class="row">
				<div class="col-lg-12">
					<div class="bytn-content">
						<div class="row">
							<div class="col-lg-4">
				<?php echo get_avatar( get_the_author_meta( 'user_email' ), 400 ); ?>
							</div>
							<div class="col-lg-8 bytn-author">
								<h2>About the author</h2>
				<?php echo apply_filters('the_content', get_the_author_description()); ?>
								<p>View all posts by <?php the_author_posts_link(); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Related posts -->
			<?php $orig_post = $post;
				global $post;
				$categories = get_the_category($post->ID);
				if ($categories) {
				$category_ids = array();
				foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
				$args=array(
				'category__in' => $category_ids,
				'post__not_in' => array($post->ID),
				'posts_per_page'=> 4, // Number of related posts that will be shown.
				'caller_get_posts'=>1
				);
				$my_query = new wp_query( $args );
				if( $my_query->have_posts() ) {
				echo '<div class="row">
						<div class="col-lg-12">
						<div class="bytn-content">

								<div class="related-content-title">
									<h2>Related Posts</h2>
								</div>
							<div class="row">';
				while( $my_query->have_posts() ) {
				$my_query->the_post();?>
								<div class="col-lg-3">
									
										<a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>">
				<?php if ( has_post_thumbnail() ) {  
				the_post_thumbnail('related');  
				} else { ?>  
										<img src="<?php bloginfo('template_directory'); ?>/img/placeholder.jpg" class="" alt="<?php the_title(); ?>" />  
				<?php } ?>				</a>
									<div class="relatedcontent">
										<h4><a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
									</div>
								</div>

				<?php } echo '</div></div></div></div>'; } }	$post = $orig_post;
				wp_reset_query(); 
			?>
			<!-- End related posts -->
			<?php include 'sidebar-single.php';?>
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
