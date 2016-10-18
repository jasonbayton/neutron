<?php
$path = $settings ["sitepath"] . '/content/' . $pwd;

                function recursive_menu( $path, $pwd, $settings ){
                $dirs = glob( $path . "/*");
		$realfile = glob( $path."/*.md" );
			foreach ($realfile as $ri){
				$slug = substr($ri,0,-3);
		                $subfile = glob( $slug . "/*.md");
				$ricontent = file_get_contents($ri);
        			$parser = new Mni\FrontYAML\Parser();
        			$ri_raw = $parser->parse($ricontent);
        			$ri_settings = $ri_raw->getYAML();
        			$ri_settings ["contenttype"] = ucfirst($ri_settings ["contenttype"]);
				echo '<ul class="nav-content-base">';
				if ($ri_settings ["contenttype"]=='Category'){
				echo '<li><a href="'.($settings ["siteurl"]).'/'. $pwd . '/'
        			.basename($slug).'">'
        			.$ri_settings ["title"].'</a>'
        			.'</li>';
				}
				foreach ($subfile as $si){
					$subslug = substr($si,0,-3);
					$sub_subfile = glob( $subslug . "/*.md");
					echo '<ul class="nav-category-indent">';
					$sicontent = file_get_contents($si);
	                                $parser = new Mni\FrontYAML\Parser();
                                	$si_raw = $parser->parse($sicontent);
                                	$si_settings = $si_raw->getYAML();
                                	$si_settings ["contenttype"] = ucfirst($si_settings ["contenttype"]);
					if ($si_settings ["contenttype"]=='Category'){	
					echo '<li><a href="'.($settings ["siteurl"]).'/'. $pwd . '/'
                                	.basename($slug).'/'
					.basename($subslug).'">'
                                	.$si_settings ["title"].'</a>'
                                	.'</li>';
					}
					foreach ($sub_subfile as $mi){
						$sub_subslug = substr($mi,0,-3);
						echo '<ul class="nav-category-indent">';
						$micontent = file_get_contents($mi);
                                		$parser = new Mni\FrontYAML\Parser();
                                		$mi_raw = $parser->parse($micontent);
                                		$mi_settings = $mi_raw->getYAML();
                                		$mi_settings ["contenttype"] = ucfirst($mi_settings ["contenttype"]);
						if ($mi_settings ["contenttype"]=='Category'){
						echo '<li><a href="'.($settings ["siteurl"]).'/'. $pwd . '/'
                                		.basename($slug).'/'
						.basename($subslug).'/'
						.basename($sub_subslug).'">'
                                		.$mi_settings ["title"].'</a>'
                                		.'</li>';
						}
						echo '</ul>';
					};
                       			echo '</ul>';
				};
				echo '</ul>';  	
			}		
		
                }	
	
        recursive_menu( $path, $pwd, $settings );
?>

