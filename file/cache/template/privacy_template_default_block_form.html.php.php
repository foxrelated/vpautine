<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: August 6, 2012, 11:40 am */ ?>
<?php
/**
 * [PHPFOX_HEADER]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond_Benc
 * @package 		Phpfox
 * @version 		$Id: form.html.php 4106 2012-04-18 09:28:09Z Miguel_Espinoza $
 */
 


?>
<div class="<?php if ($this->_aVars['sPrivacyFormType'] == 'mini'): ?>privacy_setting_mini<?php else: ?>privacy_setting<?php endif; ?> privacy_setting_div">
	<div><input type="hidden" id="<?php echo $this->_aVars['sPrivacyFormName']; ?>" name="val<?php if (! empty ( $this->_aVars['sPrivacyArray'] )): ?>[<?php echo $this->_aVars['sPrivacyArray']; ?>]<?php endif; ?>[<?php echo $this->_aVars['sPrivacyFormName']; ?>]" value="<?php echo $this->_aVars['aSelectedPrivacyControl']['value']; ?>" /></div>
	<a href="#" class="privacy_setting_active<?php if ($this->_aVars['sPrivacyFormType'] == 'mini'): ?> js_hover_title<?php endif; ?>"><?php echo $this->_aVars['aSelectedPrivacyControl']['phrase']; ?><span class="js_hover_info"><?php echo $this->_aVars['aSelectedPrivacyControl']['phrase']; ?></span></a>
	<div class="privacy_setting_holder">
		<ul>
<?php if (count((array)$this->_aVars['aPrivacyControls'])):  foreach ((array) $this->_aVars['aPrivacyControls'] as $this->_aVars['aPrivacyControl']): ?>
			<li><a href="#"<?php if (isset ( $this->_aVars['aPrivacyControl']['onclick'] )): ?> onclick="<?php echo $this->_aVars['aPrivacyControl']['onclick']; ?> return false;"<?php endif; ?> rel="<?php echo $this->_aVars['aPrivacyControl']['value']; ?>" <?php if (isset ( $this->_aVars['aPrivacyControl']['is_active'] )): ?>class="is_active_image"<?php endif; ?>><?php echo $this->_aVars['aPrivacyControl']['phrase']; ?></a></li>
<?php endforeach; endif; ?>
		</ul>
	</div>
</div>
<?php if (! empty ( $this->_aVars['sPrivacyFormInfo'] )): ?>
<div class="extra_info">
<?php echo $this->_aVars['sPrivacyFormInfo']; ?>
</div>
<?php endif; ?>
