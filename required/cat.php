<?php
$path = $settings ["sitepath"] . '/content/' . $pwd;

        function build_menu( $path, $pwd, $settings ){
            $mdfiles = glob( $path . "/*");
            foreach( $mdfiles as $naventry ){
	    $extension = pathinfo($naventry, PATHINFO_EXTENSION);
	    $allowed = 'md';	
		if ($extension == $allowed){	
		$slug = substr($naventry,0,-3);
		$navcontent = file_get_contents($naventry);
		$parser = new Mni\FrontYAML\Parser();
		$nav_raw = $parser->parse($navcontent);
		$nav_settings = $nav_raw->getYAML();
		echo '<li><a href="'.($settings ["siteurl"]).'/'. $pwd . '/'
		.basename($slug).'"><h3>'
        	.$nav_settings ["title"].'</h3></a>'
        	.'<i class="fa fa-calendar"></i> '.$nav_settings ["date"]
        	.'<i class="fa fa-file-o"></i> '.$nav_settings ["contenttype"].'<br />'
        	.'<i class="fa fa-user"></i> '.$nav_settings ["author"].'</li>'.'<hr>';
		};

			if (is_dir ($naventry)){
			
			echo"<ul class=\"the-category-indent\">";
				build_menu ($naventry, $pwd, $settings);
			echo "</ul>";
			  		       }
				     	      	}
				   			}	

	build_menu( $path, $pwd, $settings );

?>

