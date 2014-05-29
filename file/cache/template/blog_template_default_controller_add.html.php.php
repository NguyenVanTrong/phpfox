<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: May 29, 2014, 9:20 am */ ?>
<?php 
/**
 * [PHPFOX_HEADER]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_Blog
 * @version 		$Id: add.html.php 6216 2013-07-08 08:20:46Z Raymond_Benc $
 */
 
 

 if (isset ( $this->_aVars['aForms']['blog_id'] )): ?>
<div class="view_item_link">
	<a href="<?php echo Phpfox::permalink('blog', $this->_aVars['aForms']['blog_id'], $this->_aVars['aForms']['title'], false, null, (array) array (
)); ?>"><?php echo Phpfox::getPhrase('blog.view_blog'); ?></a>
</div>
<?php endif; ?>

<script type="text/javascript">
<?php echo '
	function plugin_addFriendToSelectList()
	{
		$(\'#js_allow_list_input\').show();
	}
'; ?>

</script>
<div class="main_break">
<?php echo $this->_aVars['sCreateJs']; ?>
	<form method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('blog.add'); ?>" id="core_js_blog_form" onsubmit="<?php echo $this->_aVars['sGetJsForm']; ?>" enctype="multipart/form-data">
<?php echo '<div><input type="hidden" name="' . Phpfox::getTokenName() . '[security_token]" value="' . Phpfox::getService('log.session')->getToken() . '" /></div>'; ?>
<?php if (isset ( $this->_aVars['iItem'] ) && isset ( $this->_aVars['sModule'] )): ?>
			<div><input type="hidden" name="val[module_id]" value="<?php echo Phpfox::getLib('parse.output')->htmlspecialchars($this->_aVars['sModule']); ?>" /></div>
			<div><input type="hidden" name="val[item_id]" value="<?php echo Phpfox::getLib('parse.output')->htmlspecialchars($this->_aVars['iItem']); ?>" /></div>
<?php endif; ?>
		<div id="js_custom_privacy_input_holder">
<?php if ($this->_aVars['bIsEdit']): ?>
<?php Phpfox::getBlock('privacy.build', array('privacy_item_id' => $this->_aVars['aForms']['blog_id'],'privacy_module_id' => 'blog')); ?>
<?php endif; ?>
		</div>
		<div><input type="hidden" name="val[attachment]" class="js_attachment" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['attachment']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['attachment']) : (isset($this->_aVars['aForms']['attachment']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['attachment']) : '')); ?>
" /></div>
		<div><input type="hidden" name="val[selected_categories]" id="js_selected_categories" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['selected_categories']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['selected_categories']) : (isset($this->_aVars['aForms']['selected_categories']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['selected_categories']) : '')); ?>
" /></div>
		
<?php if ($this->_aVars['bIsEdit']): ?>
			<div><input type="hidden" name="id" value="<?php echo $this->_aVars['aForms']['blog_id']; ?>" /></div>
<?php endif; ?>
<?php (($sPlugin = Phpfox_Plugin::get('blog.template_controller_add_hidden_form')) ? eval($sPlugin) : false); ?>
		
		<div class="table">
			<div class="table_left">
				<label for="title"><?php if (Phpfox::getParam('core.display_required')): ?><span class="required"><?php echo Phpfox::getParam('core.required_symbol'); ?></span><?php endif;  echo Phpfox::getPhrase('blog.title'); ?>:</label>
			</div>
			<div class="table_right">
				<input type="text" name="val[title]" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['title']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['title']) : (isset($this->_aVars['aForms']['title']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['title']) : '')); ?>
" id="title" size="40" />
			</div>			
		</div>
		
<?php (($sPlugin = Phpfox_Plugin::get('blog.template_controller_add_textarea_start')) ? eval($sPlugin) : false); ?>
		
		<div class="table">
			<div class="table_left">
				<label for="text"><?php if (Phpfox::getParam('core.display_required')): ?><span class="required"><?php echo Phpfox::getParam('core.required_symbol'); ?></span><?php endif;  echo Phpfox::getPhrase('blog.post'); ?>:</label>
			</div>
			<div class="table_right">
				<?php Phpfox::getBlock('attachment.share');  echo Phpfox::getLib('phpfox.editor')->get('text', array (
  'id' => 'text',
)); ?>
			</div>			
		</div>
		
		<div class="table">
			<div class="table_left">
<?php echo Phpfox::getPhrase('blog.categories'); ?>:
			</div>
			<div class="table_right">
<?php if (Phpfox ::getUserParam('blog.blog_add_categories')): ?>
				<div class="label_flow_menu">	
					<ul>
						<li class="label_flow_menu_active"><a href="#blog.displayCategories?sType=default<?php if ($this->_aVars['bIsEdit']): ?>&amp;blog_id=<?php echo $this->_aVars['aForms']['blog_id'];  endif; ?>"><?php echo Phpfox::getPhrase('blog.all'); ?></a></li>
						<li><a href="#blog.displayCategories?sType=public<?php if ($this->_aVars['bIsEdit']): ?>&amp;blog_id=<?php echo $this->_aVars['aForms']['blog_id'];  endif; ?>"><?php echo Phpfox::getPhrase('blog.public'); ?></a></li>
						<li id="js_user_personal_categories"><a href="#blog.displayCategories?sType=personal<?php if ($this->_aVars['bIsEdit']): ?>&amp;blog_id=<?php echo $this->_aVars['aForms']['blog_id'];  endif; ?>"><?php echo Phpfox::getPhrase('blog.personal'); ?></a></li>
						<li class="last"><a href="#blog.displayCategories?sType=used<?php if ($this->_aVars['bIsEdit']): ?>&amp;blog_id=<?php echo $this->_aVars['aForms']['blog_id'];  endif; ?>"><?php echo Phpfox::getPhrase('blog.most_used'); ?></a></li>
					</ul>
					<br class="clear" />
				</div>
<?php endif; ?>
				<div class="label_flow label_hover labelFlowContent" style="height:100px;" id="js_category_content">
<?php if ($this->_aVars['bIsEdit']): ?>
<?php Phpfox::getBlock('blog.add-category-list', array('user_id' => $this->_aVars['aForms']['user_id'])); ?>
<?php else: ?>
<?php Phpfox::getBlock('blog.add-category-list', array()); ?>
<?php endif; ?>
				</div>
<?php if (Phpfox ::getUserParam('blog.blog_add_categories') && $this->_aVars['bCanEditPersonalData']): ?>
				<div class="p_top_15">
					<script type="text/javascript">
					<?php echo '
					function addBlogCategory()
					{
						'; ?>

						if ($('#js_add_category').val() != '' && $('#js_add_category').val() != '<?php echo Phpfox::getPhrase('blog.add_a_new_category', array('phpfox_squote' => true)); ?>')
						<?php echo '
						{
							$(\'#js_add_category\').ajaxCall(\'blog.addCategory\');
						}
					}
					'; ?>

					</script>
					<input type="text" name="val[add]" value="<?php echo Phpfox::getPhrase('blog.add_a_new_category'); ?>" onclick="if(this.value=='<?php echo Phpfox::getPhrase('blog.add_a_new_category', array('phpfox_squote' => true)); ?>')this.value='';" onblur="if(this.value=='')this.value='<?php echo Phpfox::getPhrase('blog.add_a_new_category', array('phpfox_squote' => true)); ?>';" id="js_add_category" class="v_middle" /> <input type="button" value="<?php echo Phpfox::getPhrase('blog.add'); ?>" class="button v_middle button_off" onclick="addBlogCategory();"  />
					<span id="js_category_info"></span>
					<div class="extra_info"><?php echo Phpfox::getPhrase('blog.multiple_categories_with_commas'); ?></div>
				</div>	
<?php endif; ?>
			</div>			
		</div>
		
<?php if (Phpfox ::isModule('tag') && Phpfox ::getUserParam('tag.can_add_tags_on_blogs')):  Phpfox::getBlock('tag.add', array('sType' => 'blog'));  endif; ?>
		
<?php if (Phpfox ::isModule('privacy') && Phpfox ::getUserParam('privacy.can_set_allow_list_on_blogs')): ?>
		<div class="table">
			<div class="table_left">
<?php echo Phpfox::getPhrase('blog.privacy'); ?>:
			</div>
			<div class="table_right">	
<?php Phpfox::getBlock('privacy.form', array('privacy_name' => 'privacy','privacy_info' => 'blog.control_who_can_see_this_blog','default_privacy' => 'blog.default_privacy_setting')); ?>
			</div>			
		</div>
<?php endif; ?>
		
<?php if (Phpfox ::isModule('comment') && Phpfox ::isModule('privacy') && Phpfox ::getUserParam('blog.can_control_comments_on_blogs')): ?>
		<div class="table">
			<div class="table_left">
<?php echo Phpfox::getPhrase('blog.comment_privacy'); ?>:
			</div>
			<div class="table_right">	
<?php Phpfox::getBlock('privacy.form', array('privacy_name' => 'privacy_comment','privacy_info' => 'blog.control_who_can_comment_on_this_blog','privacy_no_custom' => true)); ?>
			</div>			
		</div>
<?php endif; ?>
		
<?php if (Phpfox ::isModule('captcha') && Phpfox ::getUserParam('captcha.captcha_on_blog_add')):  Phpfox::getBlock('captcha.form', array('sType' => 'blog'));  endif; ?>
		
<?php (($sPlugin = Phpfox_Plugin::get('blog-template_controller_add_textarea_end')) ? eval($sPlugin) : false); ?>
		
		<div class="table" style="display:none;">
			<div class="table_left">
<?php echo Phpfox::getPhrase('blog.post_status'); ?>:
			</div>
			<div class="table_right label_hover">
				<label><input value="1" type="radio" name="val[post_status]" id="js_post_status1" class="checkbox" <?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('post_status') && in_array('post_status', $this->_aVars['aForms']))
							
{
								echo ' checked="checked" ';
							}

							if (isset($aParams['post_status'])
								&& $aParams['post_status'] == '1')

							{

								echo ' checked="checked" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['post_status'])
									&& !isset($aParams['post_status'])
									&& $this->_aVars['aForms']['post_status'] == '1')
								{
								 echo ' checked="checked" ';
								}
								else
								{
									echo "";
								}
							}
							?>
/> <?php echo Phpfox::getPhrase('blog.published'); ?></label>
				<label><input value="2" type="radio" name="val[post_status]" id="js_post_status2" class="checkbox" <?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('post_status') && in_array('post_status', $this->_aVars['aForms']))
							
{
								echo ' checked="checked" ';
							}

							if (isset($aParams['post_status'])
								&& $aParams['post_status'] == '2')

							{

								echo ' checked="checked" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['post_status'])
									&& !isset($aParams['post_status'])
									&& $this->_aVars['aForms']['post_status'] == '2')
								{
								 echo ' checked="checked" ';
								}
								else
								{
									echo "";
								}
							}
							?>
/> <?php echo Phpfox::getPhrase('blog.draft'); ?></label>
			</div>			
		</div>		
		
		<div class="table_clear">
			<ul class="table_clear_button">
<?php (($sPlugin = Phpfox_Plugin::get('blog.template_controller_add_submit_buttons')) ? eval($sPlugin) : false); ?>
<?php if ($this->_aVars['bIsEdit'] && $this->_aVars['aForms']['post_status'] == 2): ?>
				<li><input type="submit" name="val[draft_update]" value="<?php echo Phpfox::getPhrase('blog.update'); ?>" class="button" /></li>
				<li><input type="submit" name="val[draft_publish]" value="<?php echo Phpfox::getPhrase('blog.publish'); ?>" class="button button_off" /></li>
<?php else: ?>
				<li><input type="submit" name="val[<?php if ($this->_aVars['bIsEdit']): ?>update<?php else: ?>publish<?php endif; ?>]" value="<?php if ($this->_aVars['bIsEdit']):  echo Phpfox::getPhrase('blog.update');  else:  echo Phpfox::getPhrase('blog.publish');  endif; ?>" class="button" /></li>
<?php endif; ?>
<?php if (! $this->_aVars['bIsEdit']): ?><li><input type="submit" name="val[draft]" value="<?php echo Phpfox::getPhrase('blog.save_as_draft'); ?>" class="button button_off" /></li><?php endif; ?>
				<li><input type="button" name="val[preview]" value="<?php echo Phpfox::getPhrase('blog.preview'); ?>" class="button button_off" onclick="tb_show('<?php echo Phpfox::getPhrase('blog.blog_preview', array('phpfox_squote' => true)); ?>', $.ajaxBox('blog.preview', 'height=400&amp;width=600&amp;text=' + encodeURIComponent(Editor.getContent())), null, '', false,'POST');" /></li>
			</ul>
			<div class="clear"></div>
		</div>		
	
	
</form>

	
<?php if (Phpfox ::getParam('core.display_required')): ?>
	<div class="table_clear">
<?php if (Phpfox::getParam('core.display_required')): ?><span class="required"><?php echo Phpfox::getParam('core.required_symbol'); ?></span><?php endif; ?> <?php echo Phpfox::getPhrase('core.required_fields'); ?>
	</div>
<?php endif; ?>
</div>

