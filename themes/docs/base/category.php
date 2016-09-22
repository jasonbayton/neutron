<!DOCTYPE html>
<html lang="en">
<?php include $theme ["themefragments"] . 'header.php';?>
<body>

    <div id="wrapper">
	<?php include $theme ["themefragments"] . 'sidebar.php';?>
        <div id="page-content-wrapper">
            <div class="container-fluid">
		<?php include $theme ["themefragments"] . 'mobileheader.php';?>
                <?php include $theme ["themefragments"] . 'breadcrumb.php';?>
		<div class="row">
                    <div class="col-lg-12">
                        <h1 class="bytn-content-title"><?php echo $mk_settings ["title"]; ?></h1>
			<?php include $theme ["themefragments"] . 'meta.php';?>
			<div id="the-post-contents">
				<?php echo $mk_content ?>
				<div class="the-category">
					<h2>Contents</h2>
					<ul>
					<?php include ($settings ["sitepath"] . '/required/category.php'); ?>
					</ul>
				</div>
			</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
	<?php include $theme ["themefragments"] . 'footer.php';?>
    </div>
    <!-- /#wrapper -->


</body>

</html>
