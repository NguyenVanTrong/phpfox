<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: May 28, 2014, 7:51 am */ ?>
<?php 
/**
 * [PHPFOX_HEADER]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_Language
 * @version 		$Id: add.html.php 1161 2009-10-09 07:42:41Z Raymond_Benc $
 */
 
 

 if ($this->_aVars['sCachePhrase']): ?>
<div class="p_4">
	<div class="p_4">	
		<div class="go_left t_right" style="width:150px;"><b><?php echo Phpfox::getPhrase('language.php'); ?></b>:</div>
		<div><input type="text" name="php" value="Phpfox::getPhrase('<?php echo $this->_aVars['sCachePhrase']; ?>')" size="40" onclick="this.select();" /></div>
		<div class="clear"></div>
	</div>
	<div class="p_4">	
		<div class="go_left t_right" style="width:150px;"><b><?php echo Phpfox::getPhrase('language.php_single_quoted'); ?></b>:</div>
		<div><input type="text" name="php" value="' . Phpfox::getPhrase('<?php echo $this->_aVars['sCachePhrase']; ?>') . '" size="40" onclick="this.select();" /></div>
		<div class="clear"></div>
	</div>	
	<div class="p_4">	
		<div class="go_left t_right" style="width:150px;"><b><?php echo Phpfox::getPhrase('language.php_double_quoted'); ?></b>:</div>
		<div><input type="text" name="php" value="&quot; . Phpfox::getPhrase('<?php echo $this->_aVars['sCachePhrase']; ?>') . &quot;" size="40" onclick="this.select();" /></div>
		<div class="clear"></div>
	</div>		
	<div class="p_4">
		<div class="go_left t_right" style="width:150px;"><b><?php echo Phpfox::getPhrase('language.html'); ?></b>:</div>
		<div><input type="text" name="html" value="<?php echo '{'; ?>
phrase var='<?php echo $this->_aVars['sCachePhrase']; ?>'<?php echo '}'; ?>
" size="40" onclick="this.select();" /></div>
		<div class="clear"></div>
	</div>
	<div class="p_4">
		<div class="go_left t_right" style="width:150px;"><b><?php echo Phpfox::getPhrase('language.js'); ?></b>:</div>
		<div><input type="text" name="html" value="oTranslations['<?php echo $this->_aVars['sCachePhrase']; ?>']" size="40" onclick="this.select();" /></div>
		<div class="clear"></div>
	</div>	
	<div class="p_4">
		<div class="go_left t_right" style="width:150px;"><b><?php echo Phpfox::getPhrase('language.text'); ?></b>:</div>
		<div><input type="text" name="html" value="<?php echo $this->_aVars['sCachePhrase']; ?>" size="40" onclick="this.select();" /></div>
		<div class="clear"></div>
	</div>		
</div>
<?php endif;  echo $this->_aVars['sCreateJs']; ?>
<form method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.language.phrase.add', array('last-module' => $this->_aVars['sLastModuleId'])); ?>" id="js_phrase_form" onsubmit="<?php echo $this->_aVars['sGetJsForm']; ?>">
<?php echo '<div><input type="hidden" name="' . Phpfox::getTokenName() . '[security_token]" value="' . Phpfox::getService('log.session')->getToken() . '" /></div>';  if ($this->_aVars['sReturn']): ?>
<div><input type="hidden" name="return" value="<?php echo $this->_aVars['sReturn']; ?>" /></div>
<?php endif;  if ($this->_aVars['sVar']): ?>
<div><input type="hidden" name="val[is_help]" value="true" /></div>
<?php endif; ?>
<div class="table_header">
<?php echo Phpfox::getPhrase('language.phrase_form'); ?>
</div>
<div class="table">
	<div class="table_left">
<?php echo Phpfox::getPhrase('language.product'); ?>:
	</div>
	<div class="table_right">
		<select name="val[product_id]">
<?php if (count((array)$this->_aVars['aProducts'])):  foreach ((array) $this->_aVars['aProducts'] as $this->_aVars['aProduct']): ?>
			<option value="<?php echo $this->_aVars['aProduct']['product_id']; ?>"><?php echo $this->_aVars['aProduct']['title']; ?></option>
<?php endforeach; endif; ?>
		</select>
<?php Phpfox::getBlock('help.popup', array('phrase' => 'admincp.language_add_phrase_product')); ?>
	</div>
	<div class="clear"></div>
</div>
<div class="table">
	<div class="table_left">
<?php echo Phpfox::getPhrase('language.module'); ?>:
	</div>
	<div class="table_right">
		<select name="val[module]">
<?php if (count((array)$this->_aVars['aModules'])):  foreach ((array) $this->_aVars['aModules'] as $this->_aVars['sModule'] => $this->_aVars['iModuleId']): ?>
			<option value="<?php echo $this->_aVars['iModuleId']; ?>|<?php echo $this->_aVars['sModule']; ?>"<?php if (! empty ( $this->_aVars['sLastModuleId'] ) && $this->_aVars['sLastModuleId'] == $this->_aVars['sModule']): ?> selected="selected"<?php endif; ?>><?php echo $this->_aVars['sModule']; ?></option>
<?php endforeach; endif; ?>
		</select>
<?php Phpfox::getBlock('help.popup', array('phrase' => 'admincp.language_add_phrase_module')); ?>
	</div>
	<div class="clear"></div>
</div>
<div class="table">
	<div class="table_left">
<?php echo Phpfox::getPhrase('language.varname'); ?>:
	</div>
	<div class="table_right">
		<input type="text" name="val[var_name]" value="<?php echo $this->_aVars['sVar']; ?>" size="40" id="var_name" maxlength="100" />
<?php Phpfox::getBlock('help.popup', array('phrase' => 'admincp.language_add_phrase_varname')); ?>
	</div>
	<div class="clear"></div>
</div>
<div class="table">
	<div class="table_left">
<?php echo Phpfox::getPhrase('language.text'); ?>:
	</div>
	<div class="table_right_text">
<?php if (count((array)$this->_aVars['aLanguages'])):  foreach ((array) $this->_aVars['aLanguages'] as $this->_aVars['aLanguage']): ?>
		<b><?php echo $this->_aVars['aLanguage']['title']; ?></b>
		<div class="p_4">
			<textarea cols="50" rows="8" name="val[text][<?php echo $this->_aVars['aLanguage']['language_id']; ?>]"></textarea>
<?php Phpfox::getBlock('help.popup', array('phrase' => 'admincp.language_add_phrase_text')); ?>
		</div>
<?php endforeach; endif; ?>
	</div>
	<div class="clear"></div>
</div>
<div class="table_clear">
	<input type="submit" value="<?php echo Phpfox::getPhrase('core.submit'); ?>" class="button" />
</div>

</form>

