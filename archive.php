<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';

$pwd = $currenturl;
$pwd = trim ( $pwd ,'/' );

$files = glob($settings ["sitepath"] . '/content/*.md', GLOB_BRACE);
//foreach($files as $file) {

$index = 0;
$max   = count( $files );
while( $index < $max ){
$contents = file_get_contents($files[$index]);
   $index++;

$parser = new Mni\FrontYAML\Parser(); 

$mk_raw = $parser->parse($contents);

$mk_settings = $mk_raw->getYAML();
$mk_content = $mk_raw->getContent();
}
require_once $settings ["sitepath"] . '/required/layout.php';

?>
