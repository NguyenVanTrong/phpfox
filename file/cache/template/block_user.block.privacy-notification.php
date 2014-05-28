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
		<div class="table">
			<div class="table_left">
<?php echo $this->_aVars['aNotification']['phrase']; ?>
			</div>
			<div class="table_right">			
				<div class="item_is_active_holder">	
					<span class="js_item_active item_is_active"><input type="radio" value="0" name="val[notification][<?php echo $this->_aVars['sNotification']; ?>]" <?php if ($this->_aVars['aNotification']['default']): ?> checked="checked"<?php endif; ?> class="checkbox" /> <?php echo Phpfox::getPhrase('user.yes'); ?></span>
					<span class="js_item_active item_is_not_active"><input type="radio" value="1" name="val[notification][<?php echo $this->_aVars['sNotification']; ?>]" <?php if (! $this->_aVars['aNotification']['default']): ?> checked="checked"<?php endif; ?> class="checkbox" /> <?php echo Phpfox::getPhrase('user.no'); ?></span>
				</div>
			</div>
		</div>
