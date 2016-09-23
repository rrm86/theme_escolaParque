<?php
$hasleftsidebar = (empty($PAGE->theme->settings->layout)) ? false : $PAGE->theme->settings->layout;
$hasanalytics = (empty($PAGE->theme->settings->useanalytics)) ? false : $PAGE->theme->settings->useanalytics;

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Moodle Theme by 3rd Wave Media | elearning.3rdwavemedia.com" />
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,100italic,300italic,400italic,500italic,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <?php require_once(dirname(__FILE__).'/includes/fonts.php'); ?>
    <?php echo $OUTPUT->standard_head_html() ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php if ($hasanalytics) { ?>
    <!-- Start Google Analytics -->
    <?php require_once(dirname(__FILE__).'/includes/analytics.php'); ?>
    <!-- End Google Analytics -->
    <?php } ?>
</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

    <?php require_once(dirname(__FILE__).'/includes/header.php'); ?>

    <div id="page">

        <p class="dashed_line"></p>
        <div class="marketing-wrapper">
            <?php require_once(dirname(__FILE__).'/includes/home-hero-slideshow.php');?>
        </div><!--//marketing-wrapper-->

        <div class="page-wrapper page-wrapper-loggedin">
            <div class="container">
                <div id="page-content" class="row">
                    <?php /*
                    <div id="page-navbar" class=" col-md-12 clearfix">
                    	<div class="breadcrumb-nav"><?php echo $OUTPUT->navbar(); ?></div>
                    	<nav class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></nav>
                	</div>
                	*/ ?>
                   <?php if ($hasleftsidebar) { ?>
                    <div id="region-main" class="col-md-9 col-sm-12 col-xs-12 pull-right">
                    <?php } else { ?>
                    <div id="region-main" class="hidden col-md-9 col-sm-12 col-xs-12">
                    <?php } ?>
                        <?php
                        echo $OUTPUT->course_content_header();
                        echo $OUTPUT->main_content();
                        echo $OUTPUT->course_content_footer();
                        ?>
                    </div>
                </div><!--//page-content-->
            </div><!--//container-->
        </div><!--page-wrapper-->
        <p class="dashed_line"></p>
    </div><!--//#page-->
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h4>Acesso ao ambiente Virtual</h4>
                <div class=""></div>
                <div class="well">
                    <form class="form-inline" action="<?php echo $CFG->httpswwwroot; ?>/login/index.php" method="post" id="login"  <?php echo $autocomplete; ?>>
                      <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="text" name="username" id="username" size="15" placeholder="Matrícula" value="<?php p($frm->username) ?>">
                      </div>
                      <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" name="password" id="password" size="15" placeholder="**********" value="" <?php echo $autocomplete; ?>"">
                      </div>
                      <div class="checkbox">
                        <label><input input type="submit" id="loginbtn" value="<?php print_string("login") ?>"> Remember me</label>
                        <input type="checkbox"></input>
                      </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <?php require_once(dirname(__FILE__).'/includes/footer.php'); ?>


<?php echo $OUTPUT->standard_end_of_body_html() ?>

<!-- Frontpage Javascript -->
<script>
    jQuery(document).ready(function($) {

        /* ======= Header Background Slideshow - Flexslider ======= */
        /* Ref: https://github.com/woothemes/FlexSlider/wiki/FlexSlider-Properties */

        $('#bg-slider').flexslider({
            animation: "fade",
            directionNav: false, //remove the default direction-nav - https://github.com/woothemes/FlexSlider/wiki/FlexSlider-Properties
            controlNav: true, //remove the default control-nav
            slideshowSpeed: 8000,
            start: function(){
                 $(this).find('.slide').css("display", "block"); //prevent flash of the images
            },
        });

    });
</script>

</body>
</html>
