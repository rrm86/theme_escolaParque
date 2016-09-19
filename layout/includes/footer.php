<?php
$hascopyright = (empty($PAGE->theme->settings->copyright)) ? false : $PAGE->theme->settings->copyright;
$hasfooterwidget = (empty($PAGE->theme->settings->footerwidget)) ? false : $PAGE->theme->settings->footerwidget;
$footerwidget = $PAGE->theme->settings->footerwidget;

?>
    
    <footer class="site-footer">
        
            <div class="container text-center">
                
                <?php require_once('social-media.php'); ?>
                
                <p class="helplink"><?php echo page_doc_link(get_string('moodledocslink')); ?></p>
                <?php if ($hasfooterwidget) {?>
                <div class="footerwidget"><?php echo $footerwidget ?></div>
                <?php }?> 
                
                <div class="copyright">
                <?php if ($hascopyright) {
                echo '<small class="copyright">&copy; '.date("Y").' '.$hascopyright.'</small>';
                } ?> 
                </div>
            
            </div><!--//container-->
        
    </footer><!--//site-footer--> 

    
	

