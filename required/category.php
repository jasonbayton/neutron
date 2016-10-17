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
        			$ri_settings ["contenttype"] = ucfirst($ri_settings ["contenttype"]);
				echo '<ul class="content-base">';
				if ($ri_settings ["contenttype"]=='Category'){
				echo '<li><a href="'.($settings ["siteurl"]).'/'. $pwd . '/'
        			.basename($slug).'"><h3>'
        			.$ri_settings ["title"].'</h3></a>'
        			.'</li>'.'<hr>';
				} else {
				echo '<li class="not-cat"><a href="'.($settings ["siteurl"]).'/'. $pwd . '/'
                                .basename($slug).'"><h3>'
                                .$ri_settings ["title"].'</h3></a>'
				.'<div class="meta-list"><i class="fa fa-calendar"></i> '.$ri_settings ["date"].'
</div>'
                                .'<div class="meta-list"><i class="fa fa-file-text-o"></i> '.$ri_settings ["contenttype"].'</div>'
                                .'<div class="meta-list"><i class="fa fa-user"></i> '.$ri_settings ["author"].'</div></li>'.'<hr>';

				}
				foreach ($subfile as $si){
					$subslug = substr($si,0,-3);
					$sub_subfile = glob( $subslug . "/*.md");
					echo '<ul class="the-category-indent">';
					$sicontent = file_get_contents($si);
	                                $parser = new Mni\FrontYAML\Parser();
                                	$si_raw = $parser->parse($sicontent);
                                	$si_settings = $si_raw->getYAML();
                                	$si_settings ["contenttype"] = ucfirst($si_settings ["contenttype"]);
					if ($si_settings ["contenttype"]=='Category'){	
					echo '<li><a href="'.($settings ["siteurl"]).'/'. $pwd . '/'
                                	.basename($slug).'/'
					.basename($subslug).'"><h3>'
                                	.$si_settings ["title"].'</h3></a>'
                                	.'</li>'.'<hr>';
					} else {
					echo '<li class="not-cat"><a href="'.($settings ["siteurl"]).'/'. $pwd . '/'
                                        .basename($slug).'/'
                                        .basename($subslug).'"><h3>'
                                        .$si_settings ["title"].'</h3></a>'
					.'<div class="meta-list"><i class="fa fa-calendar"></i> '.$si_settings ["date"].'
</div>'
                                .'<div class="meta-list"><i class="fa fa-file-text-o"></i> '.$si_settings ["contenttype"].'</div>'
                                .'<div class="meta-list"><i class="fa fa-user"></i> '.$si_settings ["author"].'</div></li>'.'<hr>';

					}
					foreach ($sub_subfile as $mi){
						$sub_subslug = substr($mi,0,-3);
						echo '<ul class="the-category-indent">';
						$micontent = file_get_contents($mi);
                                		$parser = new Mni\FrontYAML\Parser();
                                		$mi_raw = $parser->parse($micontent);
                                		$mi_settings = $mi_raw->getYAML();
                                		$mi_settings ["contenttype"] = ucfirst($mi_settings ["contenttype"]);
						if ($mi_settings ["contenttype"]=='Category'){
						echo '<li><a href="'.($settings ["siteurl"]).'/'. $pwd . '/'
                                		.basename($slug).'/'
						.basename($subslug).'/'
						.basename($sub_subslug).'"><h3>'
                                		.$mi_settings ["title"].'</h3></a>'
                                		.'</li>'.'<hr>';
						} else {
						echo '<li class="not-cat"><a href="'.($settings ["siteurl"]).'/'. $pwd . '/'
                                                .basename($slug).'/'
                                                .basename($subslug).'/'
                                                .basename($sub_subslug).'"><h3>'
                                                .$mi_settings ["title"].'</h3></a>'
						.'<div class="meta-list"><i class="fa fa-calendar"></i> '.$mi_settings ["date"].'
</div>'
                                .'<div class="meta-list"><i class="fa fa-file-text-o"></i> '.$mi_settings ["contenttype"].'</div>'
                                .'<div class="meta-list"><i class="fa fa-user"></i> '.$mi_settings ["author"].'</div></li>'.'<hr>';

						}
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

