<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: May 29, 2014, 9:20 am */ ?>
<?php 
/**
 * [PHPFOX_HEADER]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond_Benc
 * @package 		Phpfox
 * @version 		$Id: share.html.php 5840 2013-05-09 06:14:35Z Raymond_Benc $
 */
 
 

?>
<script type="text/javascript">$Behavior.loadAttachmentStaticFiles = function(){$Core.loadStaticFile('<?php echo $this->getStyle('static_script', 'share.js', 'attachment'); ?>');}</script>
<div class="global_attachment">
	<div class="global_attachment_header">
		<div class="global_attachment_manage">
			<a class="border_radius_4<?php if (! isset ( $this->_aVars['aForms']['total_attachment'] )): ?> is_not_active<?php endif; ?>" href="#" onclick="$('.js_attachment_list').slideToggle(); return false;"><?php echo Phpfox::getPhrase('attachment.manage_attachments'); ?></a>
		</div>		
		<ul class="global_attachment_list">	
			<li class="global_attachment_title"><?php echo Phpfox::getPhrase('attachment.insert'); ?>:</li>
			<li><a href="#" onclick="return $Core.shareInlineBox(this, '<?php echo $this->_aVars['aAttachmentShare']['id']; ?>', <?php if ($this->_aVars['aAttachmentShare']['inline']): ?>true<?php else: ?>false<?php endif; ?>, 'attachment.add', 500, '&amp;category_id=<?php echo $this->_aVars['aAttachmentShare']['type']; ?>&amp;attachment_custom=photo');" class="js_global_position_photo js_hover_title"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'feed/photo.png','class' => 'v_middle')); ?><span class="js_hover_info"><?php echo Phpfox::getPhrase('attachment.insert_a_photo'); ?></span></a></li>
			<li><a href="#" onclick="return $Core.shareInlineBox(this, '<?php echo $this->_aVars['aAttachmentShare']['id']; ?>', <?php if ($this->_aVars['aAttachmentShare']['inline']): ?>true<?php else: ?>false<?php endif; ?>, 'link.attach', 600, '&amp;category_id=<?php echo $this->_aVars['aAttachmentShare']['type']; ?>');" class="js_hover_title"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'feed/link.png','class' => 'v_middle')); ?><span class="js_hover_info"><?php echo Phpfox::getPhrase('attachment.attach_a_link'); ?></span></a></li>
<?php if (Phpfox ::isModule('video') && Phpfox ::getParam('video.allow_video_uploading')): ?>
			<li><a href="#" onclick="return $Core.shareInlineBox(this, '<?php echo $this->_aVars['aAttachmentShare']['id']; ?>', <?php if ($this->_aVars['aAttachmentShare']['inline']): ?>true<?php else: ?>false<?php endif; ?>, 'attachment.add', 500, '&amp;category_id=<?php echo $this->_aVars['aAttachmentShare']['type']; ?>&amp;attachment_custom=video');" class="js_hover_title"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'feed/video.png','class' => 'v_middle')); ?><span class="js_hover_info"><?php echo Phpfox::getPhrase('attachment.insert_a_video'); ?></span></a></li>
<?php endif; ?>
<?php if (! isset ( $this->_aVars['bNoAttachaFile'] )): ?>
			<li><a href="#" onclick="return $Core.shareInlineBox(this, '<?php echo $this->_aVars['aAttachmentShare']['id']; ?>', <?php if ($this->_aVars['aAttachmentShare']['inline']): ?>true<?php else: ?>false<?php endif; ?>, 'attachment.add', 500, '&amp;category_id=<?php echo $this->_aVars['aAttachmentShare']['type']; ?>');" class="js_hover_title"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'misc/application_add.png','class' => 'v_middle')); ?><span class="js_hover_info"><?php echo Phpfox::getPhrase('attachment.attach_a_file'); ?></span></a></li>
<?php endif; ?>
<?php if (Phpfox ::isModule('emoticon')): ?>
			<li><a href="#" onclick="return $Core.shareInlineBox(this, '<?php echo $this->_aVars['aAttachmentShare']['id']; ?>', <?php if ($this->_aVars['aAttachmentShare']['inline']): ?>true<?php else: ?>false<?php endif; ?>, 'emoticon.preview', 400, '&amp;editor_id=' + Editor.getId());" class="js_hover_title"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'editor/emoticon.png','class' => 'v_middle')); ?><span class="js_hover_info"><?php echo Phpfox::getPhrase('attachment.insert_emoticon'); ?></span></a></li>
<?php endif; ?>
		</ul>
		<div class="clear"></div>	
		<div class="global_attachment_list_holder"></div>
	</div>
</div>
<div class="js_attachment_list"<?php if (! isset ( $this->_aVars['aForms']['total_attachment'] )): ?> style="display:none;"<?php endif; ?>>
	<h3><?php echo Phpfox::getPhrase('attachment.attachments_display'); ?></h3>
	<div class="js_attachment_list_holder"></div>
<?php if (isset ( $this->_aVars['aForms']['total_attachment'] ) && $this->_aVars['aForms']['total_attachment'] && isset ( $this->_aVars['aAttachmentShare']['edit_id'] )): ?>
<?php Phpfox::getBlock('attachment.list', array('sType' => $this->_aVars['aAttachmentShare']['type'],'iItemId' => $this->_aVars['aAttachmentShare']['edit_id'],'attachment_no_header' => true)); ?>
<?php else: ?>
	<div class="extra_info t_center">
<?php echo Phpfox::getPhrase('attachment.no_attachments_available'); ?>
	</div>
<?php endif; ?>
</div>
