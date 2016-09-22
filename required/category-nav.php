<?php
    $mdfiles = glob($settings ["sitepath"] . '/content/' . $pwd . '/*.md');
    $emptycat = "<div class=\"emptycaterror\">There are no documents below this file. Try another category:</div>";

	if (empty($mdfiles)) {
        $mdfiles = glob($settings ["sitepath"] . '/content' . dirname($_SERVER['REQUEST_URI']) . '/*.md');
	$prevdir = rtrim(dirname($_SERVER['REQUEST_URI']),"/");
	//echo $emptycat;
	foreach( $mdfiles as $naventry ) {
        $slug = substr($naventry,0,-3);
	$navcontent = file_get_contents($naventry);
	$parser = new Mni\FrontYAML\Parser();
	$nav_raw = $parser->parse($navcontent);
	$nav_settings = $nav_raw->getYAML();
		echo '<li><a href="'.($settings ["siteurl"]).$prevdir. '/'
        .basename($slug).'">'
        .$nav_settings ["title"].'</a></li>';	
	    }		
	} else {
    foreach( $mdfiles as $naventry ) {
	$slug = substr($naventry,0,-3);
	$navcontent = file_get_contents($naventry);
	$parser = new Mni\FrontYAML\Parser(); 
	$nav_raw = $parser->parse($navcontent);
	$nav_settings = $nav_raw->getYAML();
        echo '<li><a href="'.($settings ["siteurl"]).'/'. $pwd . '/'
        .basename($slug).'">'
        .$nav_settings ["title"].'</a></li> ';
    	    }
	};
?>
