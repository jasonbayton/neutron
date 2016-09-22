<div class="featured-image">
<?php if (!$mk_settings ["featuredimage"]){
	echo "<p>No image :(<p>
	      <p>In the markdown file, input the full path to your <br />image (eg: /content/2016/04/myimg.png) to have it display here.";
	} else {
	echo '<img src="' . $mk_settings ["featuredimage"] . '"/>';
	}
?>
</div>
