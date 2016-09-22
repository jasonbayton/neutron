<?php
   // $files = glob($settings ["sitepath"] . '/content/*.md');
    // foreach( $files as $file ) {
      //  $file = substr($file,0,-3);
      //  $ufile = basename($file);
      //  $ufile = ucfirst(strtolower($ufile));
      //  echo '<li><a href="'.($settings ["siteurl"]).'/'
      //  .basename($file).'">'
      //  .$ufile.'</a></li> ';
  //  };
    
    $mdfiles = glob($settings ["sitepath"] . '/content/*.md');
    foreach( $mdfiles as $naventry ) {
	$slug = substr($naventry,0,-3);
	$navcontent = file_get_contents($naventry);
	$parser = new Mni\FrontYAML\Parser(); 
	$nav_raw = $parser->parse($navcontent);
	$nav_settings = $nav_raw->getYAML();
        echo '<li><a href="'.($settings ["siteurl"]).'/'
        .basename($slug).'">'
        .$nav_settings ["title"].'</a></li> ';
    }
?>

