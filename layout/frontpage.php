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
        <h3 class="pdacesso">Acesso ao Ambiente Virtual</h3>
            <div class="loginbox clearfix <?php echo $columns ?>">

  <div class="loginpanel">
<?php
  if (($CFG->registerauth == 'email') || !empty($CFG->registerauth)) { ?>
      <div class="skiplinks"><a class="skip" href="signup.php"><?php print_string("tocreatenewaccount"); ?></a></div>
<?php
  } ?>

      <div class="subcontent loginsub">
        <?php
          if (!empty($errormsg)) {
              echo html_writer::start_tag('div', array('class' => 'loginerrors'));
              echo html_writer::link('#', $errormsg, array('id' => 'loginerrormessage', 'class' => 'accesshide'));
              echo $OUTPUT->error_text($errormsg);
              echo html_writer::end_tag('div');
          }
        ?>
        <form class="form-inline" action="<?php echo $CFG->httpswwwroot; ?>/login/index.php" method="post" id="login" <?php echo $autocomplete; ?> >
        <div class="row">
            <div class="input-group col-md-5">
                <span style="background-color:#5dbd5f;color:white" class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input class="form-control input-lg" type="text" name="username" id="username" placeholder="Matrícula" value="<?php p($frm->username) ?>">
            </div>


            <div class="input-group col-md-5">
                <span style="background-color:#5dbd5f;color:white" class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input class="form-control input-lg" type="password" name="password" id="password"  placeholder="**********" value="" <?php echo $autocomplete; ?>"">
            </div>

                <button style="background-color:#eca154"  type="submit" id="loginbtn" >Entrar</button>

          </div>
          <div><br></div>

            <div class="row">
              <div class="pd_zero">

              <?php if (isset($CFG->rememberusername) and $CFG->rememberusername == 2) { ?>
              <div class="rememberpass">

                  <input  type="checkbox" name="rememberusername" id="rememberusername" value="1" <?php if ($frm->username) {echo 'checked="checked"';} ?> />
                  <label for="rememberusername">Lembrar Usuário    |   </label>
                  <span class=""><a style="color:#5dbd5f" href="forgot_password.php"><?php print_string("forgotten") ?></a></span>
              </div>

              <?php } ?>

          <input id="anchor" type="hidden" name="anchor" value="" />
          <script>document.getElementById('anchor').value = location.hash</script>


          </div>

          </div>



        </form>

      </div>

     </div>
      <div class="row">
        <div><br></div>
        <div class="text-center">©2016 Escola Parque</div>
        <div><br></div>
      </div>

<?php if ($show_instructions) { ?>
    <div class="signuppanel">
      <h2><?php print_string("firsttime") ?></h2>
      <div class="subcontent">
<?php     if (is_enabled_auth('none')) { // instructions override the rest for security reasons
              print_string("loginstepsnone");
          } else if ($CFG->registerauth == 'email') {
              if (!empty($CFG->auth_instructions)) {
                  echo format_text($CFG->auth_instructions);
              } else {
                  print_string("loginsteps", "", "signup.php");
              } ?>
                 <div class="signupform">
                   <form action="signup.php" method="get" id="signup">
                   <div><input type="submit" value="<?php print_string("startsignup") ?>" /></div>
                   </form>
                 </div>
<?php     } else if (!empty($CFG->registerauth)) {
              echo format_text($CFG->auth_instructions); ?>
              <div class="signupform">
                <form action="signup.php" method="get" id="signup">
                <div><input type="submit" value="<?php print_string("startsignup") ?>" /></div>
                </form>
              </div>
<?php     } else {
              echo format_text($CFG->auth_instructions);
          } ?>
      </div>
    </div>
<?php } ?>
<?php if (!empty($potentialidps)) { ?>
    <div class="subcontent potentialidps">
        <h6><?php print_string('potentialidps', 'auth'); ?></h6>
        <div class="potentialidplist">
<?php foreach ($potentialidps as $idp) {
    echo  '<div class="potentialidp"><a href="' . $idp['url']->out() . '" title="' . $idp['name'] . '">' . $OUTPUT->render($idp['icon'], $idp['name']) . $idp['name'] . '</a></div>';
} ?>
        </div>
    </div>
<?php } ?>
</div>
        </div>
    </div>



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
