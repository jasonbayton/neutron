<!DOCTYPE html>
<html lang="en">
<?php include $theme ["themefragments"] . 'header.php';?>
<body>
	<?php include $theme ["themefragments"] . 'nav.php';?>
    <!-- Intro Section -->
    	<section id="intro" class="fix-width">
        	<div class="container">
        	    <div class="row">
			<?php include $theme ["themefragments"] . 'sidebar.php';?>
			<div class="col-lg-9">
				<div class="row">
					<div class="col-lg-12">
					<div class="bytn-content">
						<div class="bytn-header">
							<h1 class="bytn-content-title"><a href="" rel="bookmark" title="Permanent Link to"><?php echo $mk_settings ["title"]; ?></a></h1>
						</div>
						<div id="the-post-contents">
							<?php echo $mk_content ?>
						</div>
						<div class="bytn-meta">
							<div class="post-meta post-tags">
								<i class="fa fa-tags"></i> 
							</div>
						</div>
					</div>
				</div>
			</div>		
						  
			<div class="row">
				<div class="col-lg-3 pull-left">
					<div class="navigation index">
						<div class="next-post-link-left"></div>
						</div><!--end navigation-->
					</div>
					<div class="col-lg-3 pull-right navind-right">
						<div class="navigation index">
							<div></div>
						</div><!--end navigation-->
					</div>
				</div>
			</div>						
		</div>
        </div>
    </section>
	
<?php include $theme ["themefragments"] . 'footer.php';?>

</body>

</html>
