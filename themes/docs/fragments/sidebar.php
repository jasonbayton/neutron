<div id="sidebar-wrapper">
	<div id="logo">
		<div id="identity">
			<a href="/"><?php echo $settings ["sitename"] ?></a>
		</div>
 	<!--?php include $theme ["themefragments"] . 'nav-button.php';?-->
	  <div class="content">
        <div class="in-menu-but">
          <a class="home-but btn btn-default" href="/">
            <i class="fa fa-home" aria-hidden="true"></i>
          </a>
          <a class="home-but btn btn-default" href="//twitter.com/jasonbayton">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
          <a class="home-but btn btn-default" href="//linkedin.com/in/jasonbayton">
            <i class="fa fa-linkedin" aria-hidden="true"></i>
          </a>
        </div>
</div>
</div>

	<div class="nav-head">
	<h4>Global navigation</h4>
	<ul class="sidebar-nav">
        	<?php include ($settings ["sitepath"] . '/required/nav.php'); ?>
        </ul>
	</div>
	<div class="nav-head">
	<h4>Category navigation</h4>
	<?php if($currenturl=='/'){
	echo 'Select a category above to begin';
	} else {?>
	<ul class="sidebar-nav">
        <?php include ($settings ["sitepath"] . '/required/category-nav.php');?> 
	</ul>
	<?php } ?>
	</div>
</div>

