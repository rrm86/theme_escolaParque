<?php

$hasslide1image = (!empty($PAGE->theme->settings->slide1image));
$hasslide2image = (!empty($PAGE->theme->settings->slide2image));
$hasslide3image = (!empty($PAGE->theme->settings->slide3image));
$hasslide4image = (!empty($PAGE->theme->settings->slide4image));

$hasslide1heading = (!empty($PAGE->theme->settings->slide1heading));
$hasslide2heading = (!empty($PAGE->theme->settings->slide2heading));
$hasslide3heading = (!empty($PAGE->theme->settings->slide3heading));
$hasslide4heading = (!empty($PAGE->theme->settings->slide4heading));


$hasslide1intro = (!empty($PAGE->theme->settings->slide1intro));
$hasslide2intro = (!empty($PAGE->theme->settings->slide2intro));
$hasslide3intro = (!empty($PAGE->theme->settings->slide3intro));
$hasslide4intro = (!empty($PAGE->theme->settings->slide4intro));


$hasslide1btn = (!empty($PAGE->theme->settings->slide1btn));
$hasslide2btn = (!empty($PAGE->theme->settings->slide2btn));
$hasslide3btn = (!empty($PAGE->theme->settings->slide3btn));
$hasslide4btn = (!empty($PAGE->theme->settings->slide4btn));


$hasslide1url = (!empty($PAGE->theme->settings->slide1url));
$hasslide2url = (!empty($PAGE->theme->settings->slide2url));
$hasslide3url = (!empty($PAGE->theme->settings->slide3url));
$hasslide4url = (!empty($PAGE->theme->settings->slide4url));


/* slide1 settings */
$slide1image = $PAGE->theme->settings->slide1image;
$slide1heading = $PAGE->theme->settings->slide1heading;
$slide1intro = $PAGE->theme->settings->slide1intro;
$slide1btn = $PAGE->theme->settings->slide1btn;
$slide1url = $PAGE->theme->settings->slide1url;

/* slide2 settings */
$slide2image = $PAGE->theme->settings->slide2image;
$slide2heading = $PAGE->theme->settings->slide2heading;
$slide2intro = $PAGE->theme->settings->slide2intro;
$slide2btn = $PAGE->theme->settings->slide2btn;
$slide2url = $PAGE->theme->settings->slide2url;

/* slide3 settings */
$slide3image = $PAGE->theme->settings->slide3image;
$slide3heading = $PAGE->theme->settings->slide3heading;
$slide3intro = $PAGE->theme->settings->slide3intro;
$slide3btn = $PAGE->theme->settings->slide3btn;
$slide3url = $PAGE->theme->settings->slide3url;

/* slide4 settings */
$slide4image = $PAGE->theme->settings->slide4image;
$slide4heading = $PAGE->theme->settings->slide4heading;
$slide4intro = $PAGE->theme->settings->slide4intro;
$slide4btn = $PAGE->theme->settings->slide4btn;
$slide4url = $PAGE->theme->settings->slide4url;


?>

<?php if ($PAGE->theme->settings->useheroslideshow == 1) { ?>   

    <!-- ******HERO****** --> 
    <div class="hero-section">
        <div class="bg-slider-wrapper">
            <div id="bg-slider" class="flexslider bg-slider">
                <ul class="slides">
                    <?php if ($hasslide1image) { ?>
                    <li class="slide slide-1" style="display:none">
                        <?php if ($hasslide1heading||$hasslide1intro) { ?>
                        <div class="slide-content container">
                            <div class="slide-content-inner">
                                <?php if ($hasslide1heading) { ?>
                                <h2 class="slide-heading"><?php echo $slide1heading ?></h2>
                                <?php } ?>
                                <?php if ($hasslide1intro) { ?>
                                <div class="slide-intro">
                                    <?php echo $slide1intro ?>
                                </div>
                                <?php } ?>
                                <?php if ($hasslide1btn) { ?>
                                <a class="btn btn-primary" href="<?php if ($hasslide1url) { ?><?php echo $slide1url ?><?php } ?>"><?php echo $slide1btn ?></a>
                                <?php } ?>
                            </div><!--//slide-content-inner-->
                        </div><!--//slide-content-->
                         <?php } ?>
                    </li>
                    <?php } ?>
                    <?php if ($hasslide2image) { ?>
                    <li class="slide slide-2" style="display:none">
                        <?php if ($hasslide2heading||$hasslide2intro) { ?>
                        <div class="slide-content container">
                            <div class="slide-content-inner">
                                <?php if ($hasslide2heading) { ?>
                                <h2 class="slide-heading"><?php echo $slide2heading ?></h2>
                                <?php } ?>
                                <?php if ($hasslide2intro) { ?>
                                <div class="slide-intro">
                                    <?php echo $slide2intro ?>
                                </div>
                                <?php } ?>
                                <?php if ($hasslide2btn) { ?>
                                <a class="btn btn-primary" href="<?php if ($hasslide2url) { ?><?php echo $slide2url ?><?php } ?>"><?php echo $slide2btn ?></a>
                                <?php } ?>
                            </div><!--//slide-content-inner-->
                        </div><!--//slide-content-->
                         <?php } ?>
                    </li>
                    <?php } ?>
                    <?php if ($hasslide3image) { ?>
                    <li class="slide slide-3" style="display:none">
                        <?php if ($hasslide3heading||$hasslide3intro) { ?>
                        <div class="slide-content container">
                            <div class="slide-content-inner">
                                <?php if ($hasslide3heading) { ?>
                                <h2 class="slide-heading"><?php echo $slide3heading ?></h2>
                                <?php } ?>
                                <?php if ($hasslide3intro) { ?>
                                <div class="slide-intro">
                                    <?php echo $slide3intro ?>
                                </div>
                                <?php } ?>
                                <?php if ($hasslide3btn) { ?>
                                <a class="btn btn-primary" href="<?php if ($hasslide3url) { ?><?php echo $slide3url ?><?php } ?>"><?php echo $slide3btn ?></a>
                                <?php } ?>
                            </div><!--//slide-content-inner-->
                        </div><!--//slide-content-->
                         <?php } ?>
                    </li>
                    <?php } ?>
                    <?php if ($hasslide4image) { ?>
                    <li class="slide slide-4" style="display:none">
                        <?php if ($hasslide4heading||$hasslide4intro) { ?>
                        <div class="slide-content container">
                            <div class="slide-content-inner">
                                <?php if ($hasslide4heading) { ?>
                                <h2 class="slide-heading"><?php echo $slide4heading ?></h2>
                                <?php } ?>
                                <?php if ($hasslide4intro) { ?>
                                <div class="slide-intro">
                                    <?php echo $slide4intro ?>
                                </div>
                                <?php } ?>
                                <?php if ($hasslide4btn) { ?>
                                <a class="btn btn-primary" href="<?php if ($hasslide4url) { ?><?php echo $slide4url ?><?php } ?>"><?php echo $slide4btn ?></a>
                                <?php } ?>
                            </div><!--//slide-content-inner-->
                        </div><!--//slide-content-->
                         <?php } ?>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div><!--//bg-slider-wrapper--> 
                
    </div><!--//hero-section-->
 
<?php } ?>