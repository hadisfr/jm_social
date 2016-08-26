<?php 
/*
	jm_social
	2016 © Hadi Safari
*/
// No direct access
defined("_JEXEC") or die; ?>
<?php $document = JFactory::getDocument(); $document->addStyleSheet("modules/jm_social/css/style.css"); ?>
<div class="jm_social <?php echo (($padded) ? "padded" : "") ?> <?php echo (($center) ? "center" : "") ?>">
	<?php echo $socials; ?>
</div>