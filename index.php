<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';

$pwd = $currenturl;
$pwd = trim ( $pwd ,'/' );

/*if($_SERVER['SERVER_NAME']==$pwd){*/

if($currenturl=='/'){
$contents = file_get_contents('home.md');
} else if (file_exists($settings ["sitepath"] . '/content/' . $pwd . '.md')){
$contents = file_get_contents($settings ["sitepath"] . '/content/' . $pwd . '.md');
} else if($currenturl=='/sitemap'){
$contents = file_get_contents('sitemap.md');
} else {
$contents = file_get_contents('404.md');
}
$parser = new Mni\FrontYAML\Parser(); 

$mk_raw = $parser->parse($contents);

$mk_settings = $mk_raw->getYAML();
$mk_content = $mk_raw->getContent();

$words = explode ( " ", $mk_content );
$wordCount = count( $words );
$readtime = $wordCount / 200;
$readtime = ceil($readtime);

require_once $settings ["sitepath"] . '/required/layout.php';

?>
