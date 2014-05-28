<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: May 28, 2014, 8:33 am */ ?>
<?php 
/**
 * [PHPFOX_HEADER]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_User
 * @version 		$Id: privacy.html.php 628 2009-06-02 14:06:59Z Raymond_Benc $
 */
 
 

?>		
<?php if (( $this->_aVars['sPrivacy'] != 'rss.can_subscribe_profile' ) || ! Phpfox ::getParam('core.friends_only_community')): ?>
		<div class="table">
			<div class="table_left">
<?php echo $this->_aVars['aProfile']['phrase']; ?>
			</div>
			<div class="table_right">
				<select name="val[privacy][<?php echo $this->_aVars['sPrivacy']; ?>]">
<?php if (! isset ( $this->_aVars['aProfile']['anyone'] ) && ! Phpfox ::getParam('core.friends_only_community')): ?>
						<option value="0"<?php if ($this->_aVars['aProfile']['default'] == '0'): ?> selected="selected"<?php endif; ?>><?php echo Phpfox::getPhrase('user.anyone'); ?></option>
<?php endif; ?>
<?php if (! isset ( $this->_aVars['aProfile']['no_user'] )): ?>
<?php if (! Phpfox ::getParam('core.friends_only_community')): ?>
						<option value="1"<?php if ($this->_aVars['aProfile']['default'] == '1'): ?> selected="selected"<?php endif; ?>><?php echo Phpfox::getPhrase('user.community'); ?></option>									
<?php endif; ?>
<?php if (Phpfox ::isModule('friend')): ?>
					<option value="2"<?php if ($this->_aVars['aProfile']['default'] == '2'): ?> selected="selected"<?php endif; ?>><?php echo Phpfox::getPhrase('user.friends_only'); ?></option>
<?php endif; ?>
<?php endif; ?>
					<option value="4"<?php if ($this->_aVars['aProfile']['default'] == '4'): ?> selected="selected"<?php endif; ?>><?php echo Phpfox::getPhrase('user.no_one'); ?></option>
				</select>				
			</div>			
		</div>		
<?php endif; ?>
