							<div class="bytn-meta">
		                                                <div class="post-meta">
                                                                        <i class="fa fa-calendar"></i>
									<?php if (!$mk_settings ["date"]){
                                                                                echo "Undefined";
                                                                        } else {
                                                                                echo $mk_settings ["date"];
                                                                                }
                                                                        ?>
 
                                                                </div>
                                                                <div class="post-meta">
                                                                        <i class="fa fa-folder-open"></i>
									<?php if (!$mk_settings ["category"]){
									        echo "Undefined";
								        } else {
									        echo $mk_settings ["category"];
									        }
									?>
                                                                </div>

                                                                <div class="post-meta">
                                                                        <i class="fa fa-clock-o"></i> <?php echo $readtime; ?> min
                                                                </div>

                                                                <!--div class="post-meta">
                                                                        <div style="display: inherit;"data-toggle="tooltip" data-placement="top" title="Views refresh daily. External links will always show 0."><i class="fa fa-eye"></i></div>
                                                                </div-->
                                                        </div>

