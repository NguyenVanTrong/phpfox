<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: May 28, 2014, 7:36 am */ ?>
<?php 
/**
 * [PHPFOX_HEADER]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_Admincp
 * @version 		$Id: add.html.php 979 2009-09-14 14:05:38Z Raymond_Benc $
 */
 
 

?>
<script type="text/javascript">
<!--
<?php echo '
function isMenu(bNoSpeed)
{
	if ($(\'#js_select_menu\').val() == \'0\')
	{
		$(\'#js_add_menu_div\').hide((bNoSpeed ? \'\' : \'slow\'));
		return true;
	}
	
	$(\'#js_add_menu_div\').show((bNoSpeed ? \'\' : \'slow\'));
	return true;
}
'; ?>

-->
</script>
<?php echo $this->_aVars['sCreateJs']; ?>
<form method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl("admincp.module.add"); ?>" id="js_form" onsubmit="<?php echo $this->_aVars['sGetJsForm']; ?>">
<?php echo '<div><input type="hidden" name="' . Phpfox::getTokenName() . '[security_token]" value="' . Phpfox::getService('log.session')->getToken() . '" /></div>';  if ($this->_aVars['bIsEdit']): ?>
<div><input type="hidden" name="module_id" value="<?php echo $this->_aVars['aForms']['module_id']; ?>" /></div>
<?php endif; ?>
<div class="table_header">
<?php echo Phpfox::getPhrase('admincp.module_details'); ?>
</div>
<div class="table">
	<div class="table_left">
<?php echo Phpfox::getPhrase('admincp.product'); ?>:
	</div>
	<div class="table_right">
		<select name="val[product_id]">
<?php if (count((array)$this->_aVars['aProducts'])):  foreach ((array) $this->_aVars['aProducts'] as $this->_aVars['aProduct']): ?>
			<option value="<?php echo $this->_aVars['aProduct']['product_id']; ?>" <?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('product_id') && in_array('product_id', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['product_id'])
								&& $aParams['product_id'] == $this->_aVars['aProduct']['product_id'])

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['product_id'])
									&& !isset($aParams['product_id'])
									&& $this->_aVars['aForms']['product_id'] == $this->_aVars['aProduct']['product_id'])
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							?>
><?php echo $this->_aVars['aProduct']['title']; ?></option>
<?php endforeach; endif; ?>
		</select>
<?php Phpfox::getBlock('help.popup', array('phrase' => 'admincp.module_add_product')); ?>
	</div>
	<div class="clear"></div>
</div>
<?php if (PHPFOX_DEBUG): ?>
<div class="table">
	<div class="table_left">
<?php echo Phpfox::getPhrase('admincp.core_module'); ?>:
	</div>
	<div class="table_right">
		<label><input type="radio" name="val[is_core]" style="vertical-align:bottom;" value="1" <?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));
if (isset($this->_aVars['aForms']) && is_numeric('is_core') && in_array('is_core', $this->_aVars['aForms']) ){echo ' checked="checked"';}
if ((isset($aParams['is_core']) && $aParams['is_core'] == '1'))
{echo ' checked="checked" ';}
else
{
 if (isset($this->_aVars['aForms']) && isset($this->_aVars['aForms']['is_core']) && !isset($aParams['is_core']) && $this->_aVars['aForms']['is_core'] == '1')
 {
    echo ' checked="checked" ';}
 else
 {
 }
}
?> 
 /><?php echo Phpfox::getPhrase('admincp.yes'); ?></label>
		<label><input type="radio" name="val[is_core]" style="vertical-align:bottom;" value="0" <?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));
if (isset($this->_aVars['aForms']) && is_numeric('is_core') && in_array('is_core', $this->_aVars['aForms']) ){echo ' checked="checked"';}
if ((isset($aParams['is_core']) && $aParams['is_core'] == '0'))
{echo ' checked="checked" ';}
else
{
 if (isset($this->_aVars['aForms']) && isset($this->_aVars['aForms']['is_core']) && !isset($aParams['is_core']) && $this->_aVars['aForms']['is_core'] == '0')
 {
    echo ' checked="checked" ';}
 else
 {
 if (!isset($this->_aVars['aForms']) || ((isset($this->_aVars['aForms']) && !isset($this->_aVars['aForms']['is_core']) && !isset($aParams['is_core']))))
{
 echo ' checked="checked"';
}
 }
}
?> 
 /><?php echo Phpfox::getPhrase('admincp.no'); ?></label>
<?php Phpfox::getBlock('help.popup', array('phrase' => 'admincp.module_add_core')); ?>
	</div>
	<div class="clear"></div>
</div>
<?php endif; ?>
<div class="table">
	<div class="table_left">
<?php echo Phpfox::getPhrase('admincp.module_id'); ?>:
	</div>
	<div class="table_right">
<?php if ($this->_aVars['bIsEdit']): ?>
		<div><input type="hidden" name="val[module_id]" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['module_id']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['module_id']) : (isset($this->_aVars['aForms']['module_id']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['module_id']) : '')); ?>
" size="40" id="name" maxlength="75" /></div>
<?php echo Phpfox::getLib('phpfox.locale')->translate($this->_aVars['aForms']['module_id'], 'module'); ?>
<?php else: ?>
		<input type="text" name="val[module_id]" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['module_id']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['module_id']) : (isset($this->_aVars['aForms']['module_id']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['module_id']) : '')); ?>
" size="40" id="name" maxlength="75" />	
<?php Phpfox::getBlock('help.popup', array('phrase' => 'admincp.module_add_name')); ?>
<?php endif; ?>
	</div>
	<div class="clear"></div>
</div>
<div class="table">
	<div class="table_left">
<?php echo Phpfox::getPhrase('admincp.add_menu'); ?>:
	</div>
	<div class="table_right">
		<select name="val[is_menu]" id="js_select_menu" onchange="isMenu();">
			<option value="1" <?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('is_menu') && in_array('is_menu', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['is_menu'])
								&& $aParams['is_menu'] == '1')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['is_menu'])
									&& !isset($aParams['is_menu'])
									&& $this->_aVars['aForms']['is_menu'] == '1')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							?>
><?php echo Phpfox::getPhrase('admincp.yes'); ?></option>
			<option value="0" <?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('is_menu') && in_array('is_menu', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['is_menu'])
								&& $aParams['is_menu'] == '0')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['is_menu'])
									&& !isset($aParams['is_menu'])
									&& $this->_aVars['aForms']['is_menu'] == '0')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							?>
><?php echo Phpfox::getPhrase('admincp.no'); ?></option>
		</select>
<?php Phpfox::getBlock('help.popup', array('phrase' => 'admincp.module_add_is_menu')); ?>
	</div>
	<div class="clear"></div>
</div>
<div class="table" id="js_add_menu_div">
	<div class="table_left">
<?php echo Phpfox::getPhrase('admincp.sub_menu'); ?>:
	</div>
	<div class="table_right">
		<script type="text/javascript">
		<!--
		function addMore()
<?php echo '{'; ?>

			var iCnt = (parseInt($('#js_add_more_count').html()) + 1);
			var sHtml = '<div class="p_4" id="js_new_content' + iCnt + '"><?php echo Phpfox::getPhrase('admincp.phrase'); ?>: <input type="text" name="val[menu][' + iCnt + '][phrase]" value="" /> <?php echo Phpfox::getPhrase('admincp.link'); ?>: <input type="text" name="val[menu][' + iCnt + '][link]" value="" /> [ <a href="#" onclick="$(\'#js_new_content' + iCnt + '\').html(\'\'); return false;"><?php echo Phpfox::getPhrase('admincp.remove'); ?></a> ]</div>';
			$('#js_add_more_div').append(sHtml);
			$('#js_add_more_count').html(iCnt);
			return false;
<?php echo '}'; ?>

		-->
		</script>
<?php for ($this->_aVars['i'] = 0; $this->_aVars['i'] <= $this->_aVars['iMenus']; $this->_aVars['i']++): ?>
<?php if ($this->_aVars['bIsEdit'] && isset ( $this->_aVars['aMenus'][$this->_aVars['i']]['var_name'] )): ?>
		<div id="jsmenu_<?php echo $this->_aVars['aMenus'][$this->_aVars['i']]['var_name']; ?>">
		 <input type="hidden" name="val[menu][<?php echo $this->_aVars['i']; ?>][phrase_var]" value="<?php echo $this->_aVars['aMenus'][$this->_aVars['i']]['var_name']; ?>" />
<?php endif; ?>
		<div class="p_4"><?php echo Phpfox::getPhrase('admincp.phrase'); ?>: <input type="text" name="val[menu][<?php echo $this->_aVars['i']; ?>][phrase]" value="<?php if (isset ( $this->_aVars['aMenus'][$this->_aVars['i']]['phrase'] )):  echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aMenus'][$this->_aVars['i']]['phrase']);  endif; ?>" /> <?php echo Phpfox::getPhrase('admincp.link'); ?>: <input type="text" name="val[menu][<?php echo $this->_aVars['i']; ?>][link]" value="<?php if (isset ( $this->_aVars['aMenus'][$this->_aVars['i']]['phrase'] )):  echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aMenus'][$this->_aVars['i']]['link']);  endif; ?>" /><?php if ($this->_aVars['bIsEdit'] && isset ( $this->_aVars['aMenus'][$this->_aVars['i']]['var_name'] )): ?> <a href="#?call=admincp.module.deleteMenu&amp;var=<?php echo $this->_aVars['aMenus'][$this->_aVars['i']]['var_name']; ?>&amp;id=<?php echo $this->_aVars['aForms']['module_id']; ?>" class="delete_link"><?php echo Phpfox::getPhrase('admincp.delete'); ?></a><?php endif; ?></div>
<?php if ($this->_aVars['bIsEdit'] && isset ( $this->_aVars['aMenus'][$this->_aVars['i']]['var_name'] )): ?>
		</div>
<?php endif; ?>
<?php endfor; ?>
		<div id="js_add_more_div"></div>
		<div id="js_add_more_count" style="display:none;"><?php echo $this->_aVars['iMenus']; ?></div>
		<div class="p_4" style="padding-left:50px;">
			<a href="#" onclick="return addMore();"><?php echo Phpfox::getPhrase('admincp.add_more'); ?></a>
		</div>
<?php Phpfox::getBlock('help.popup', array('phrase' => 'admincp.module_add_menu')); ?>
	</div>
	<div class="clear"></div>
</div>
<div class="table_header">
<?php echo Phpfox::getPhrase('admincp.language_package_details'); ?>
</div>
<div class="table">
	<div class="table_left">
<?php echo Phpfox::getPhrase('admincp.info'); ?>:
	</div>
	<div class="table_right_text">
<?php if (count((array)$this->_aVars['aLanguages'])):  foreach ((array) $this->_aVars['aLanguages'] as $this->_aVars['aLanguage']): ?>
		<b><?php echo $this->_aVars['aLanguage']['title']; ?></b>
		<div class="p_4">
			<textarea cols="50" rows="5" name="val[text][<?php echo $this->_aVars['aLanguage']['language_id']; ?>]"><?php if (isset ( $this->_aVars['aLanguage']['text'] )):  echo $this->_aVars['aLanguage']['text'];  endif; ?></textarea>
		</div>
<?php endforeach; endif; ?>
<?php if ($this->_aVars['bIsEdit'] && PHPFOX_DEVELOPER): ?>
		<div class="p_4">
<?php echo Phpfox::getPhrase('admincp.overwrite_default_data'); ?>: <label><input type="checkbox" name="val[text_default]" value="1" style="vertical-align:middle;" /><?php echo Phpfox::getPhrase('admincp.yes'); ?></label>
		</div>
<?php endif; ?>
<?php Phpfox::getBlock('help.popup', array('phrase' => 'admincp.module_add_info')); ?>
	</div>
	<div class="clear"></div>
</div>
<div class="table_clear">
	<input type="submit" value="<?php echo Phpfox::getPhrase('admincp.submit'); ?>" class="button" />
</div>

</form>

<script type="text/javascript">
	isMenu(true);
</script>
