<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: May 29, 2014, 9:30 am */ ?>
<?php 
/**
 * [PHPFOX_HEADER]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_Blog
 * @version 		$Id: entry.html.php 2232 2010-12-03 21:04:43Z Raymond_Benc $
 */
 
 

?>
<?php if (( Phpfox ::getUserParam('blog.edit_own_blog') && Phpfox ::getUserId() == $this->_aVars['aItem']['user_id'] ) || Phpfox ::getUserParam('blog.edit_user_blog')): ?>
						<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl("blog.add", array('id' => "".$this->_aVars['aItem']['blog_id']."")); ?>"><?php echo Phpfox::getPhrase('core.edit'); ?></a></li>
<?php endif; ?>
<?php if (( Phpfox ::getUserParam('blog.delete_own_blog') && Phpfox ::getUserId() == $this->_aVars['aItem']['user_id'] ) || Phpfox ::getUserParam('blog.delete_user_blog')): ?>
						<li class="item_delete"><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl("blog.delete", array('id' => "".$this->_aVars['aItem']['blog_id']."")); ?>" class="no_ajax_link" onclick="return confirm('<?php echo Phpfox::getPhrase('blog.are_you_sure_you_want_to_delete_this_blog', array('phpfox_squote' => true)); ?>');" title="<?php echo Phpfox::getPhrase('blog.delete_blog'); ?>"><?php echo Phpfox::getPhrase('core.delete'); ?></a></li>
<?php endif; ?>
<?php (($sPlugin = Phpfox_Plugin::get('blog.template_block_entry_links_main')) ? eval($sPlugin) : false); ?>
