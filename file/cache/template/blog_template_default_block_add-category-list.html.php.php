<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: May 29, 2014, 9:20 am */ ?>
<div id="js_add_new_category"></div>
<?php if (count((array)$this->_aVars['aItems'])):  foreach ((array) $this->_aVars['aItems'] as $this->_aVars['aItem']): ?>
	<?php
						Phpfox::getLib('template')->getBuiltFile('blog.block.category-form');						
						 endforeach; else: ?>
<div class="p_4">
<?php echo Phpfox::getPhrase('blog.no_categories_added'); ?>
</div>
<?php endif; ?>
