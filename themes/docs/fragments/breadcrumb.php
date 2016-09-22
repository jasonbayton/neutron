                <?php if($currenturl=='/'){
                echo "";
                }else{
                $returnURL = dirname($_SERVER['REQUEST_URI']);
                echo "<div class=\"row bread-crumb\">
                        <div class=\"col-lg-12\">
                                <a href=" . $returnURL . ">Up a level <i class=\"fa fa-level-up\" aria-hidden=\"true\"></i></a>
                        </div>
                </div>";
                        }?>

