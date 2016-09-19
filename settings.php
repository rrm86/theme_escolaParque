<?php
$settings = null;

defined('MOODLE_INTERNAL') || die;
    
	$ADMIN->add('themes', new admin_category('theme_element', 'Element'));

	// "genericsettings" settingpage
	$temp = new admin_settingpage('theme_element_generic',  get_string('geneticsettings', 'theme_element'));
	
    // Logo file setting.   
    $name = 'theme_element/logo';
    $title = get_string('logo','theme_element');
    $description = get_string('logodesc', 'theme_element');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);  

    // Layout - sidebar position.
    $name = 'theme_element/layout';
    $title = get_string('layout', 'theme_element');
    $description = get_string('layoutdesc', 'theme_element');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
   
    // Copyright setting.
    $name = 'theme_element/copyright';
    $title = get_string('copyright', 'theme_element');
    $description = get_string('copyrightdesc', 'theme_element');
    $default = '3rd Wave Media';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Header widget setting
    $name = 'theme_element/headerwidget';
    $title = get_string('headerwidget','theme_element');
    $description = get_string('headerwidgetdesc', 'theme_element');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Footerwidget setting.
    $name = 'theme_element/footerwidget';
    $title = get_string('footerwidget', 'theme_element');
    $description = get_string('footerwidgetdesc', 'theme_element');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Custom CSS file.
    $name = 'theme_element/customcss';
    $title = get_string('customcss', 'theme_element');
    $description = get_string('customcssdesc', 'theme_element');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $ADMIN->add('theme_element', $temp);

 
    /* Frontpage Hero Slideshow Settings */
    $temp = new admin_settingpage('theme_element_slideshow', get_string('slideshowheading', 'theme_element'));
    $temp->add(new admin_setting_heading('theme_element_slideshow', get_string('slideshowheadingsub', 'theme_element'),
            format_text(get_string('slideshowdesc' , 'theme_element'), FORMAT_MARKDOWN)));
    
    // Enable Hero Slideshow    
    $name = 'theme_element/useheroslideshow';
    $title = get_string('useheroslideshow', 'theme_element');
    $description = get_string('useheroslideshowdesc', 'theme_element');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    

    /* Slide 1 */

    // Description for Slide 1
    $name = 'theme_element/slide1info';
    $heading = get_string('slide1', 'theme_element');
    $information = get_string('slideinfodesc', 'theme_element');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // ImageURL.
    $name = 'theme_element/slide1image';
    $title = get_string('slideimage', 'theme_element');
    $description = get_string('slideimagedesc', 'theme_element');
    $default = 'http://dummyimage.com/1200x460/666/ccc.png';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');    
    $temp->add($setting);
    
    // Heading
    $name = 'theme_element/slide1heading';
    $title = get_string('slideheading', 'theme_element');
    $description = get_string('slideheadingdesc', 'theme_element');
    $default = 'Slide One Heading';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Intro
    $name = 'theme_element/slide1intro';
    $title = get_string('slideintro', 'theme_element');
    $description = get_string('slideintrodesc', 'theme_element');
    $default = 'Slide 1 description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam malesuada, erat bibendum gravida varius.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // CTA
    $name = 'theme_element/slide1btn';
    $title = get_string('slidebtn', 'theme_element');
    $description = get_string('slidebtndesc', 'theme_element');
    $default = 'Button 1 Text';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // CTA URL.
    $name = 'theme_element/slide1url';
    $title = get_string('slideurl', 'theme_element');
    $description = get_string('slideurldesc', 'theme_element');
    $default = '#link1';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    /* Slide 2 */
     
    // Description for Slide 2
    $name = 'theme_element/slide2info';
    $heading = get_string('slide2', 'theme_element');
    $information = get_string('slideinfodesc', 'theme_element');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // ImageURL.
    $name = 'theme_element/slide2image';
    $title = get_string('slideimage', 'theme_element');
    $description = get_string('slideimagedesc', 'theme_element');
    $default = 'http://dummyimage.com/1280x496/666/ccc.png';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');    
    $temp->add($setting);
    
    // Heading
    $name = 'theme_element/slide2heading';
    $title = get_string('slideheading', 'theme_element');
    $description = get_string('slideheadingdesc', 'theme_element');
    $default = 'Slide Two Heading';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Intro
    $name = 'theme_element/slide2intro';
    $title = get_string('slideintro', 'theme_element');
    $description = get_string('slideintrodesc', 'theme_element');
    $default = 'Slide 2 description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam malesuada, erat bibendum gravida varius.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // CTA
    $name = 'theme_element/slide2btn';
    $title = get_string('slidebtn', 'theme_element');
    $description = get_string('slidebtndesc', 'theme_element');
    $default = 'Button 2 Text';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // CTA URL.
    $name = 'theme_element/slide2url';
    $title = get_string('slideurl', 'theme_element');
    $description = get_string('slideurldesc', 'theme_element');
    $default = '#link2';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    
    /* Slide 3 */
     
    // Description for Slide 3
    $name = 'theme_element/slide3info';
    $heading = get_string('slide3', 'theme_element');
    $information = get_string('slideinfodesc', 'theme_element');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // ImageURL.
    $name = 'theme_element/slide3image';
    $title = get_string('slideimage', 'theme_element');
    $description = get_string('slideimagedesc', 'theme_element');
    $default = 'http://dummyimage.com/1280x496/666/ccc.png';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');    
    $temp->add($setting);
    
    // Heading
    $name = 'theme_element/slide3heading';
    $title = get_string('slideheading', 'theme_element');
    $description = get_string('slideheadingdesc', 'theme_element');
    $default = 'Slide Three Heading';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Intro
    $name = 'theme_element/slide3intro';
    $title = get_string('slideintro', 'theme_element');
    $description = get_string('slideintrodesc', 'theme_element');
    $default = 'Slide 3 description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam malesuada, erat bibendum gravida varius.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // CTA
    $name = 'theme_element/slide3btn';
    $title = get_string('slidebtn', 'theme_element');
    $description = get_string('slidebtndesc', 'theme_element');
    $default = 'Button 3 Text';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // CTA URL.
    $name = 'theme_element/slide3url';
    $title = get_string('slideurl', 'theme_element');
    $description = get_string('slideurldesc', 'theme_element');
    $default = '#link3';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /* Slide 4 */
     
    // Description for Slide 4
    $name = 'theme_element/slide4info';
    $heading = get_string('slide4', 'theme_element');
    $information = get_string('slideinfodesc', 'theme_element');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // ImageURL.
    $name = 'theme_element/slide4image';
    $title = get_string('slideimage', 'theme_element');
    $description = get_string('slideimagedesc', 'theme_element');
    $default = 'Button 4 Text';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');    
    $temp->add($setting);
    
    // Heading
    $name = 'theme_element/slide4heading';
    $title = get_string('slideheading', 'theme_element');
    $description = get_string('slideheadingdesc', 'theme_element');
    $default = 'Slide Four Heading';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Intro
    $name = 'theme_element/slide4intro';
    $title = get_string('slideintro', 'theme_element');
    $description = get_string('slideintrodesc', 'theme_element');
    $default = 'Slide 4 description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam malesuada, erat bibendum gravida varius.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // CTA
    $name = 'theme_element/slide4btn';
    $title = get_string('slidebtn', 'theme_element');
    $description = get_string('slidebtndesc', 'theme_element');
    $default = 'Button 4 Text';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // CTA URL.
    $name = 'theme_element/slide4url';
    $title = get_string('slideurl', 'theme_element');
    $description = get_string('slideurldesc', 'theme_element');
    $default = '#link4';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    $ADMIN->add('theme_element', $temp);
    
    
	/* Footer Social Media Settings */
	$temp = new admin_settingpage('theme_element_social', get_string('socialheading', 'theme_element'));
	$temp->add(new admin_setting_heading('theme_element_social', get_string('socialheadingsub', 'theme_element'),
            format_text(get_string('socialdesc' , 'theme_element'), FORMAT_MARKDOWN)));
            
    // Enable social media 
    $name = 'theme_element/enablesocial';
    $title = get_string('enablesocial', 'theme_element');
    $description = get_string('enablesocialdesc', 'theme_element');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
            
    // Twitter url setting.
    $name = 'theme_element/twitter';
    $title = get_string('twitter', 'theme_element');
    $description = get_string('twitterdesc', 'theme_element');
    $default = '#twitter-link';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Facebook url setting.
    $name = 'theme_element/facebook';
    $title = get_string('facebook', 'theme_element');
    $description = get_string('facebookdesc', 'theme_element');
    $default = '#facebook-link';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // YouTube url setting.
    $name = 'theme_element/youtube';
    $title = get_string('youtube', 'theme_element');
    $description = get_string('youtubedesc', 'theme_element');
    $default = '#youtube-link';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Vimeo url setting.
    $name = 'theme_element/vimeo';
    $title = get_string('vimeo', 'theme_element');
    $description = get_string('vimeodesc', 'theme_element');
    $default = '#vimeo-link';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // LinkedIn url setting.
    $name = 'theme_element/linkedin';
    $title = get_string('linkedin', 'theme_element');
    $description = get_string('linkedindesc', 'theme_element');
    $default = '#linkedin';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Flickr url setting.
    $name = 'theme_element/flickr';
    $title = get_string('flickr', 'theme_element');
    $description = get_string('flickrdesc', 'theme_element');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Google+ url setting.
    $name = 'theme_element/googleplus';
    $title = get_string('googleplus', 'theme_element');
    $description = get_string('googleplusdesc', 'theme_element');
    $default = '#google-link';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Pinterest url setting.
    $name = 'theme_element/pinterest';
    $title = get_string('pinterest', 'theme_element');
    $description = get_string('pinterestdesc', 'theme_element');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Instagram url setting.
    $name = 'theme_element/instagram';
    $title = get_string('instagram', 'theme_element');
    $description = get_string('instagramdesc', 'theme_element');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Skype account setting.
    $name = 'theme_element/skype';
    $title = get_string('skype', 'theme_element');
    $description = get_string('skypedesc', 'theme_element');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // RSS url setting.
    $name = 'theme_element/rss';
    $title = get_string('rss', 'theme_element');
    $description = get_string('rssdesc', 'theme_element');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $ADMIN->add('theme_element', $temp);   
    
    /* Analytics Settings */
    $temp = new admin_settingpage('theme_element_analytics', get_string('analyticsheading', 'theme_element'));
	$temp->add(new admin_setting_heading('theme_element_analytics', get_string('analyticsheadingsub', 'theme_element'),
            format_text(get_string('analyticsdesc' , 'theme_element'), FORMAT_MARKDOWN)));
    
    // Enable Analytics
    $name = 'theme_element/useanalytics';
    $title = get_string('useanalytics', 'theme_element');
    $description = get_string('useanalyticsdesc', 'theme_element');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Google Analytics ID
    $name = 'theme_element/analyticsid';
    $title = get_string('analyticsid', 'theme_element');
    $description = get_string('analyticsiddesc', 'theme_element');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
        
    $ADMIN->add('theme_element', $temp);
