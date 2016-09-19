<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/* LOGO Image */
$haslogo = (!empty($PAGE->theme->settings->logo));

/* Logo settings */
$logourl = $PAGE->theme->setting_file_url('logo', 'logo');


/* Header widget settings */
$hasheaderwidget = (!empty($PAGE->theme->settings->headerwidget));
$headerwidget = $PAGE->theme->settings->headerwidget;

?>

    <!-- ******HEADER****** --> 
    <header class="site-header">  
        <div class="top-bar">
            <div class="container"> 
                
                <h1 class="logo pull-left">
                    <?php if($haslogo) {?>
                    
                    <a href="<?php echo $CFG->wwwroot ?>"><img id="logo" class="img-responsive" src="<?php echo $logourl ?>" alt="<?php echo $SITE->shortname; ?>" /></a>
                    
                    <?php } else { ?>
                    
                    <a href="<?php echo $CFG->wwwroot ?>"><?php echo format_string($SITE->shortname, true, array('context' => context_course::instance(SITEID))); ?></a>
                    
                    <?php } ?>
                
                </h1><!--//logo-->

                <?php if($hasheaderwidget) {?>
                <div class="header-widget hidden-sm hidden-xs">
                    <?php echo $headerwidget ?>
                </div><!--//header-widget-->
                <?php }?>
                                
                <div class="logininfo-container">
                    <?php echo $PAGE->headingmenu ?>
                    <?php echo $OUTPUT->user_menu(); ?> 
                </div><!--//logininfo-container-->
                
                <?php /* Moodle 3.1 global search feature - solr needs to be configured */
                if (method_exists($OUTPUT, 'search_box')) {
                  echo $OUTPUT->search_box(); // global search, for Moodle 3.1+
                }
                ?>
                
            </div><!--//container-fluid-->
        </div><!--//topbar-->
        <div class="menu-wrapper">
            <div class="container">                
                <nav id="main-nav" class="main-nav" role="navigation">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button><!--//nav-toggle-->
                    </div><!--//navbar-header-->            
                    <div class="navbar-collapse collapse" id="navbar-collapse">
                        <?php echo $OUTPUT->custom_menu(); ?>
                    </div><!--//navabr-collapse-->
                </nav><!--//main-nav-->           
            </div><!--//container-->
        </div><!--//menu-wrapper-->
    </header><!--//site-header-->

