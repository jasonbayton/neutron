<?php
$path = $settings ["sitepath"] . '/content';
		
                function nav_menu( $path, $pwd, $settings ){
                $number = 1;
		$dirs = glob( $path . "/*");
		$realfile = glob( $path."/*.md" );
			foreach ($realfile as $ri){
				$number++;
				$slug = substr($ri,0,-3);
		                $subfile = glob( $slug . "/*.md");
				$ricontent = file_get_contents($ri);
        			$parser = new Mni\FrontYAML\Parser();
        			$ri_raw = $parser->parse($ricontent);
        			$ri_settings = $ri_raw->getYAML();
        			$ri_settings ["contenttype"] = ucfirst($ri_settings ["contenttype"]);
				echo '<ul class="nav-content-base">';
				if ($ri_settings ["contenttype"]=='Category'){
				echo '<li><a data-toggle="collapse" data-target="#sub'.$number.'">'
        			.$ri_settings ["title"].'<span class="caret"></span></a>'
        			.'</li>';
				} else {
				echo '<li class="nav-art"><a href="'.($settings ["siteurl"]).'/'
                                .basename($slug).'">'
                                .$ri_settings ["title"].'</a></li>';
				}
				echo '<div id="sub'.$number.'" class="collapse">';
				foreach ($subfile as $si){
					$number++;
					$subslug = substr($si,0,-3);
					$sub_subfile = glob( $subslug . "/*.md");
					echo '<ul class="nav-category-indent">';
					$sicontent = file_get_contents($si);
	                                $parser = new Mni\FrontYAML\Parser();
                                	$si_raw = $parser->parse($sicontent);
                                	$si_settings = $si_raw->getYAML();
                                	$si_settings ["contenttype"] = ucfirst($si_settings ["contenttype"]);
					if ($si_settings ["contenttype"]=='Category'){	
					echo '<li><a data-toggle="collapse" data-target="#subsub-'.$number.'">'
                                	.$si_settings ["title"].'<span class="caret"></span></a>'
                                	.'</li>';
        	                        } else {
	                                echo '<li class="nav-art"><a href="'.($settings ["siteurl"]) .'/'
                	                .basename($slug).'/'.basename($subslug).'">'
                        	        .$si_settings ["title"].'</a></li>';
                                	}
					echo '<div id="subsub-'.$number.'" class="collapse">';
					foreach ($sub_subfile as $mi){
						$number++;
						$sub_subslug = substr($mi,0,-3);
						$subsub_subfile = glob( $sub_subslug . "/*.md");
						echo '<ul class="nav-category-indent">';
						$micontent = file_get_contents($mi);
                                		$parser = new Mni\FrontYAML\Parser();
                                		$mi_raw = $parser->parse($micontent);
                                		$mi_settings = $mi_raw->getYAML();
                                		$mi_settings ["contenttype"] = ucfirst($mi_settings ["contenttype"]);
						if ($mi_settings ["contenttype"]=='Category'){
						echo '<li><a data-toggle="collapse" data-target="#subsubsub-'.$number.'">'
                                        	.$mi_settings ["title"].'<span class="caret"></span></a>'
                                		.'</li>';
	                                	} else {
        	                        	echo '<li class="nav-art"><a href="'.($settings ["siteurl"]) .'/'
                	                	.basename($slug).'/'.basename($subslug).'/'.basename($sub_subslug).'">'
                        	        	.$mi_settings ["title"].'</a></li>';
                                		}
						echo '<div id="subsubsub-'.$number.'" class="collapse">';
                                        	foreach ($subsub_subfile as $ci){
                                                	$number++;
                                                	$subsub_subslug = substr($ci,0,-3);
                                                	echo '<ul class="nav-category-indent">';
                                                	$cicontent = file_get_contents($ci);
                                                	$parser = new Mni\FrontYAML\Parser();
                                                	$ci_raw = $parser->parse($cicontent);
                                                	$ci_settings = $ci_raw->getYAML();
                                                	$ci_settings ["contenttype"] = ucfirst($ci_settings ["contenttype"]);
                                                	if ($ci_settings ["contenttype"]=='Category'){
                                                	echo '<li><a data-toggle="collapse" data-target="#subsubsub-'.$number.'">'
                                                	.$ci_settings ["title"].'<span class="caret"></span></a>'
                                                	.'</li>';
                       	                                } else {
        	                        		echo '<li class="nav-art"><a href="'.($settings ["siteurl"]).'/'
 	                               			.basename($slug).'/'.basename($subslug).'/'.basename($sub_subslug).'/'.basename($subsub_subslug).'">'
                	               			.$ci_settings ["title"].'</a></li>';
                        			        };

							echo '</ul>';
						};
	                                        echo '</div>';
	                                        echo '</ul>';

					};
					echo '</div>';
                       			echo '</ul>';
				};
				echo '</div>';
				echo '</ul>';  	
			}		
		
                }		
        nav_menu( $path, $pwd, $settings );
?>

