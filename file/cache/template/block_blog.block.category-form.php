<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: May 29, 2014, 9:20 am */ ?>
<label for="js_category<?php echo $this->_aVars['aItem']['category_id']; ?>" id="js_category_label<?php echo $this->_aVars['aItem']['category_id']; ?>">
<?php if (( ( $this->_aVars['aItem']['user_id'] == Phpfox ::getUserId() && Phpfox ::getUserParam('blog.can_delete_own_blog_category')) || Phpfox ::getUserParam('blog.can_delete_other_blog_category')) && $this->_aVars['aItem']['user_id'] != 0): ?>
	<span class="go_left" style="width:90%;">
		<input value="<?php echo $this->_aVars['aItem']['category_id']; ?>" type="checkbox" name="val[category][]" id="js_category<?php echo $this->_aVars['aItem']['category_id']; ?>" class="checkbox v_middle" onclick="if (this.checked) $('#js_selected_categories').val($('#js_selected_categories').val() + this.value + ','); else $('#js_selected_categories').val($('#js_selected_categories').val().replace(this.value + ',', ''));" /> <?php echo Phpfox::getLib('phpfox.parse.output')->clean(Phpfox::getLib('locale')->convert($this->_aVars['aItem']['name'])); ?>
	</span>
	<span>
		<a href="#" onclick="if (confirm(getPhrase('core.are_you_sure'))) $.ajaxCall('blog.deleteCategory', 'id=<?php echo $this->_aVars['aItem']['category_id']; ?>'); return false;"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'misc/delete.gif','alt' => '','class' => 'delete_hover v_middle')); ?></a>
	</span>
	<div class="clear"></div>
<?php else: ?>
	<input value="<?php echo $this->_aVars['aItem']['category_id']; ?>" type="checkbox" name="val[category][]" id="js_category<?php echo $this->_aVars['aItem']['category_id']; ?>" class="checkbox v_middle" onclick="if (this.checked) $('#js_selected_categories').val($('#js_selected_categories').val() + this.value + ','); else $('#js_selected_categories').val($('#js_selected_categories').val().replace(this.value + ',', ''));" /> <?php echo Phpfox::getLib('phpfox.parse.output')->clean(Phpfox::getLib('locale')->convert($this->_aVars['aItem']['name'])); ?>
<?php endif; ?>
</label>
<script type="text/javascript">
	$Behavior.loadBlogSelectCategories<?php echo $this->_aVars['aItem']['category_id']; ?> = function(){
	var aSelected = $('#js_selected_categories').val().split(',');
	for (var i in aSelected)
	{
	if (aSelected[i] == <?php echo $this->_aVars['aItem']['category_id']; ?>)
	{
	$('#js_category<?php echo $this->_aVars['aItem']['category_id']; ?>').attr('checked', 'checked');
	}
	}
	}
</script>
