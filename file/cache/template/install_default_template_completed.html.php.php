<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: May 28, 2014, 7:03 am */ ?>
<?php 
/**
 * [PHPFOX_HEADER]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author			Raymond Benc
 * @package 		Phpfox
 * @version 		$Id: completed.html.php 5350 2013-02-13 10:59:22Z Raymond_Benc $
 */
 
 

?>
<div class="completed_message">
<?php if ($this->_aVars['bIsUpgrade']): ?>
	Successfully upgraded to phpFox version <?php echo $this->_aVars['sUpgradeVersion']; ?>.
<?php else: ?>
	Successfully installed phpFox <?php echo $this->_aVars['sUpgradeVersion']; ?>.
<?php endif; ?>
	<div class="p_4">
<center>
Enjoy another fine phpFox release presented by <a href="http://nullcamp.com">Nullcamp.com</a>
</center>
			</div>
</div>

<a href="../index.php" class="installed_link">View Your Site</a>
<br />

