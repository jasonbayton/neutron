<?php

        $theme = array(
                        'fullpath' => $settings ["sitepath"] . $settings ["themedir"] . $settings ["theme"] . '/base/' . $mk_settings["contenttype"] . '.php',
                        'themebase' => $settings ["sitepath"] . $settings ["themedir"] . $settings ["theme"] . '/base/',
                        'themefragments' => $settings ["sitepath"] . $settings ["themedir"] . $settings ["theme"] . '/fragments/',
                        'themeresources' => $settings ["sitepath"] . $settings ["themedir"] . $settings ["theme"] . '/resources/',
                        'htmlresources' => $settings ["themedir"] . $settings ["theme"] . '/resources/',
                       );

        /*$sitetheme = $settings ["sitepath"] . $settings ["themedir"] . $settings ["theme"] . '/base/' . $content ["contenttype"] . '.php';*/


	include ($theme ["fullpath"]);

?>
