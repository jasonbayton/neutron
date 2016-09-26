<?php
$path = $settings ["sitepath"] . '/content/' . $pwd;

                function recursive_menu( $path, $pwd, $settings ){
                $dirs = glob( $path . "/*");
		$realfile = glob( $path."/*.md" );
		$emptycat = "<div class=\"bs-callout bs-callout-danger\">                                                                           <h4>No documents available</h4>                                                                                         <p>There are no documents in this category. Try another from the category navigation or go up a level..</p>
                	    </div>";
		if (!$realfile) {
		echo $emptycat;
		} else {
			foreach ($realfile as $ri){
				$slug = substr($ri,0,-3);
		                $subfile = glob( $slug . "/*.md");
				$ricontent = file_get_contents($ri);
        			$parser = new Mni\FrontYAML\Parser();
        			$ri_raw = $parser->parse($ricontent);
        			$ri_settings = $ri_raw->getYAML();
        			echo '<ul class="content-base">';
				echo '<li><a href="'.($settings ["siteurl"]).'/'. $pwd . '/'
        			.basename($slug).'"><h3>'
        			.$ri_settings ["title"].'</h3></a>'
        			.'<i class="fa fa-calendar"></i> '.$ri_settings ["date"]
        			.'<i class="fa fa-file-o"></i> '.$ri_settings ["contenttype"]
        			.'<i class="fa fa-user"></i> '.$ri_settings ["author"].'</li>'.'<hr>';

				foreach ($subfile as $si){
					$subslug = substr($si,0,-3);
					$sub_subfile = glob( $subslug . "/*.md");
					echo '<ul class="the-category-indent">';
					
					$sicontent = file_get_contents($si);
	                                $parser = new Mni\FrontYAML\Parser();
                                	$si_raw = $parser->parse($sicontent);
                                	$si_settings = $si_raw->getYAML();
                                	echo '<li><a href="'.($settings ["siteurl"]).'/'. $pwd . '/'
                                	.basename($slug).'/'
					.basename($subslug).'"><h3>'
                                	.$si_settings ["title"].'</h3></a>'
                                	.'<i class="fa fa-calendar"></i> '.$si_settings ["date"]
                                	.'<i class="fa fa-file-o"></i> '.$si_settings ["contenttype"]
                                	.'<i class="fa fa-user"></i> '.$si_settings ["author"].'</li>'.'<hr>';

					foreach ($sub_subfile as $mi){
						$sub_subslug = substr($mi,0,-3);
						echo '<ul class="the-category-indent">';
                                        	
						$micontent = file_get_contents($mi);
                                		$parser = new Mni\FrontYAML\Parser();
                                		$mi_raw = $parser->parse($micontent);
                                		$mi_settings = $mi_raw->getYAML();
                                		echo '<li><a href="'.($settings ["siteurl"]).'/'. $pwd . '/'
                                		.basename($slug).'/'
						.basename($subslug).'/'
						.basename($sub_subslug).'"><h3>'
                                		.$mi_settings ["title"].'</h3></a>'
                                		.'<i class="fa fa-calendar"></i> '.$mi_settings ["date"]
                                		.'<i class="fa fa-file-o"></i> '.$mi_settings ["contenttype"]
                                		.'<i class="fa fa-user"></i> '.$mi_settings ["author"].'</li>'.'<hr>';
						
						echo '</ul>';
					};
                       			echo '</ul>';
				};
				echo '</ul>';  	
			}		
		}
                }	
	
        recursive_menu( $path, $pwd, $settings );
?>

