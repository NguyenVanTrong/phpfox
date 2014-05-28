<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: May 28, 2014, 8:33 am */ ?>
<?php 
/**
 * [PHPFOX_HEADER]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_User
 * @version 		$Id: privacy-item.html.php 2692 2011-06-27 19:13:17Z Raymond_Benc $
 */
 
 

?>		
		<div class="table">
			<div class="table_left">
<?php echo $this->_aVars['aItem']['phrase']; ?>
			</div>
			<div class="table_right">
<?php Phpfox::getBlock('privacy.form', array('privacy_name' => $this->_aVars['sPrivacy'],'privacy_info' => '','privacy_array' => $this->_aVars['sPrivacy'],'privacy_custom_id' => 'js_custom_privacy_input_holder_'.$this->_aVars['aItem']['custom_id'].'','privacy_no_custom' => true)); ?>
			</div>			
		</div>		
