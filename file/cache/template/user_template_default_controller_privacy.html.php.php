<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: May 28, 2014, 8:33 am */ ?>
<?php 
/**
 * [PHPFOX_HEADER]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_User
 * @version 		$Id: privacy.html.php 4514 2012-07-17 10:38:33Z Miguel_Espinoza $
 */
 
 

?>
<div id="privacy_holder_table" class="p_4">
	<form method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('user.privacy'); ?>">
<?php echo '<div><input type="hidden" name="' . Phpfox::getTokenName() . '[security_token]" value="' . Phpfox::getService('log.session')->getToken() . '" /></div>'; ?>
		
<?php if (Phpfox ::getUserParam('user.can_be_invisible')): ?>
		<div id="js_privacy_block_invisible" class="js_privacy_block page_section_menu_holder" style="display:none;">
			<div class="extra_info">
<?php echo Phpfox::getPhrase('user.invisible_mode_allows_you_to_browse_the_site_without_appearing_on_any_online_lists'); ?>
			</div>
			<br />
			<div class="table">
				<div class="table_left">
<?php echo Phpfox::getPhrase('user.enable_invisible_mode'); ?>
				</div>
				<div class="table_right">			
					<div class="item_is_active_holder">	
						<span class="js_item_active item_is_active"><input value="1" name="val[invisible]" class="checkbox" type="radio"<?php if ($this->_aVars['aUserInfo']['is_invisible']): ?> checked="checked"<?php endif; ?> /> <?php echo Phpfox::getPhrase('user.yes'); ?></span>
						<span class="js_item_active item_is_not_active"><input value="0" name="val[invisible]" class="checkbox" type="radio"<?php if (! $this->_aVars['aUserInfo']['is_invisible']): ?> checked="checked"<?php endif; ?> /> <?php echo Phpfox::getPhrase('user.no'); ?></span>
					</div>
				</div>
			</div>		
			
			<div class="table_clear">
				<input type="submit" value="<?php echo Phpfox::getPhrase('user.save_changes'); ?>" class="button" />			
			</div>	
		</div>		
<?php endif; ?>
	
<?php if (Phpfox ::getUserParam('user.can_control_profile_privacy')): ?>
		<div id="js_privacy_block_profile" class="js_privacy_block page_section_menu_holder">
			<div class="extra_info">
<?php echo Phpfox::getPhrase('user.customize_how_other_users_interact_with_your_profile'); ?>
			</div>
<?php if (count((array)$this->_aVars['aProfiles'])):  foreach ((array) $this->_aVars['aProfiles'] as $this->_aVars['aModules']): ?>
<?php if (count((array)$this->_aVars['aModules'])):  foreach ((array) $this->_aVars['aModules'] as $this->_aVars['sPrivacy'] => $this->_aVars['aProfile']): ?>
				<?php
						Phpfox::getLib('template')->getBuiltFile('user.block.privacy-profile');						
						?>
<?php endforeach; endif; ?>
<?php endforeach; endif; ?>
			<div class="table">
				<div class="table_left">
<?php echo Phpfox::getPhrase('user.date_of_birth'); ?>:
				</div>
				<div class="table_right">
					<select name="val[special][dob_setting]">
						<option value="0"<?php if (empty ( $this->_aVars['aUserInfo']['dob_setting'] )): ?> selected="selected"<?php endif; ?>><?php echo Phpfox::getPhrase('core.select'); ?>:</option>					
						<option value="1"<?php if ($this->_aVars['aUserInfo']['dob_setting'] == '1'): ?> selected="selected"<?php endif; ?>><?php echo Phpfox::getPhrase('user.show_only_month_amp_day_in_my_profile'); ?></option>		
						<option value="2"<?php if ($this->_aVars['aUserInfo']['dob_setting'] == '2'): ?> selected="selected"<?php endif; ?>><?php echo Phpfox::getPhrase('user.display_only_my_age'); ?></option>
						<option value="3"<?php if ($this->_aVars['aUserInfo']['dob_setting'] == '3'): ?> selected="selected"<?php endif; ?>><?php echo Phpfox::getPhrase('user.don_t_show_my_birthday_in_my_profile'); ?></option>
						<option value="4"<?php if ($this->_aVars['aUserInfo']['dob_setting'] == '4'): ?> selected="selected"<?php endif; ?>><?php echo Phpfox::getPhrase('user.show_my_full_birthday_in_my_profile'); ?></option>
					</select>
				</div>
			</div>		
			
			<div class="table_clear">
				<input type="submit" value="<?php echo Phpfox::getPhrase('user.save_changes'); ?>" class="button" />		
			</div>		
		</div>
<?php endif; ?>
		
		<div id="js_privacy_block_items" class="js_privacy_block page_section_menu_holder" style="display:none;">
			<div class="extra_info">
<?php echo Phpfox::getPhrase('user.customize_your_default_settings_for_when_sharing_new_items_on_the_site'); ?>
			</div>			
<?php if (count((array)$this->_aVars['aItems'])):  foreach ((array) $this->_aVars['aItems'] as $this->_aVars['aModules']): ?>
<?php if (count((array)$this->_aVars['aModules'])):  foreach ((array) $this->_aVars['aModules'] as $this->_aVars['sPrivacy'] => $this->_aVars['aItem']): ?>
				<?php
						Phpfox::getLib('template')->getBuiltFile('user.block.privacy-item');						
						?>
<?php endforeach; endif; ?>
<?php endforeach; endif; ?>
				
			<div class="table_clear">
				<input type="submit" value="<?php echo Phpfox::getPhrase('user.save_changes'); ?>" class="button" />			
			</div>			
		</div>
		
<?php if (Phpfox ::getUserParam('user.can_control_notification_privacy') && count ( $this->_aVars['aPrivacyNotifications'] )): ?>
		<div id="js_privacy_block_notifications" class="js_privacy_block page_section_menu_holder" style="display:none;">
<?php if (count((array)$this->_aVars['aPrivacyNotifications'])):  foreach ((array) $this->_aVars['aPrivacyNotifications'] as $this->_aVars['aModules']): ?>
<?php if (count((array)$this->_aVars['aModules'])):  foreach ((array) $this->_aVars['aModules'] as $this->_aVars['sNotification'] => $this->_aVars['aNotification']): ?>
				<?php
						Phpfox::getLib('template')->getBuiltFile('user.block.privacy-notification');						
						?>
<?php endforeach; endif; ?>
<?php endforeach; endif; ?>
			
			<div class="table_clear">
				<input type="submit" value="<?php echo Phpfox::getPhrase('user.save_changes'); ?>" class="button" />			
			</div>
		</div>
<?php endif; ?>

		<div id="js_privacy_block_blocked" class="js_privacy_block page_section_menu_holder" style="display:none;">
<?php if (count ( $this->_aVars['aBlockedUsers'] )): ?>
			<div class="extra_info">
<?php echo Phpfox::getPhrase('user.check_the_boxes_to_unblock_users'); ?>
			</div>		
<?php if (count((array)$this->_aVars['aBlockedUsers'])):  $this->_aPhpfoxVars['iteration']['blocked'] = 0;  foreach ((array) $this->_aVars['aBlockedUsers'] as $this->_aVars['aBlockedUser']):  $this->_aPhpfoxVars['iteration']['blocked']++; ?>

			<div class="go_left" style="width:30%;">
				<div class="<?php if (is_int ( $this->_aPhpfoxVars['iteration']['blocked'] / 2 )): ?>row1<?php else: ?>row2<?php endif;  if ($this->_aPhpfoxVars['iteration']['blocked'] == 1 || $this->_aPhpfoxVars['iteration']['blocked'] == 2 || $this->_aPhpfoxVars['iteration']['blocked'] == 3): ?> row_first<?php endif; ?>">
					<label><input type="checkbox" name="val[blocked][]" value="<?php echo $this->_aVars['aBlockedUser']['block_user_id']; ?>" class="v_middle" /> <?php echo '<span class="user_profile_link_span" id="js_user_name_link_' . $this->_aVars['aBlockedUser']['user_name'] . '"><a href="' . Phpfox::getLib('phpfox.url')->makeUrl('profile', array($this->_aVars['aBlockedUser']['user_name'], ((empty($this->_aVars['aBlockedUser']['user_name']) && isset($this->_aVars['aBlockedUser']['profile_page_id'])) ? $this->_aVars['aBlockedUser']['profile_page_id'] : null))) . '">' . Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getService('user')->getCurrentName($this->_aVars['aBlockedUser']['user_id'], $this->_aVars['aBlockedUser']['full_name']), Phpfox::getParam('user.maximum_length_for_full_name')) . '</a></span>'; ?></label>
				</div>
			</div>
<?php if (is_int ( $this->_aPhpfoxVars['iteration']['blocked'] / 3 )): ?>
			<div class="clear"></div>
<?php endif; ?>
<?php endforeach; endif; ?>
			<div class="clear"></div>
			<div class="table_clear">
				<input type="submit" value="<?php echo Phpfox::getPhrase('user.save_changes'); ?>" class="button" />			
			</div>		
<?php else: ?>
			<div class="extra_info">
<?php echo Phpfox::getPhrase('user.you_have_not_blocked_any_users'); ?>
			</div>
<?php endif; ?>
		</div>
		
	
</form>

</div>

<?php if (isset ( $this->_aVars['bGoToBlocked'] )): ?>
<script type="text/javascript">
	$Behavior.showBlocked = function()
	{
		$("a[rel^='js_privacy_block_blocke']").click();
	}
</script>
<?php endif; ?>
