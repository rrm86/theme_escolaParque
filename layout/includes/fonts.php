<?php 
$fontsdir = $CFG->wwwroot.'/theme/'. $PAGE->theme->name.'/fonts/'; 
?>
<style type="text/css">
@font-face {
  font-family: 'FontAwesome';
  src: url('<?php echo $fontsdir ?>fontawesome-webfont.eot?v=4.6.3');
  src: url('<?php echo $fontsdir ?>fontawesome-webfont.eot?#iefix&v=4.6.3') format('embedded-opentype'),
                url('<?php echo $fontsdir ?>fontawesome-webfont.woff2?v=4.6.3') format('woff2'), 
                url('<?php echo $fontsdir ?>fontawesome-webfont.woff?v=4.6.3') format('woff'), 
                url('<?php echo $fontsdir ?>fontawesome-webfont.ttf?v=4.6.3') format('truetype'), 
                url('<?php echo $fontsdir ?>fontawesome-webfont.svg?v=4.6.3#fontawesomeregular') format('svg');
  font-weight: normal;
  font-style: normal;
}
@font-face {
  font-family: 'Glyphicons Halflings';
  src: url('<?php echo $fontsdir ?>glyphicons-halflings-regular.eot');
  src: url('<?php echo $fontsdir ?>glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), url('<?php echo $fontsdir ?>glyphicons-halflings-regular.woff') format('woff'), url('<?php echo $fontsdir ?>glyphicons-halflings-regular.ttf') format('truetype'), url('<?php echo $fontsdir ?>glyphicons-halflings-regular.svg#glyphicons-halflingsregular') format('svg');
}
</style>