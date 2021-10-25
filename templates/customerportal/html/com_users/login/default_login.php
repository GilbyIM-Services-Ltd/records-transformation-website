<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidator');

?>

<h1 class="mt-5">Login</h1>
<p class="lead">Enter your username and password to access the Records Transformation Ltd Customer Portal.</p>


<div class="login<?php echo $this->pageclass_sfx; ?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
		<div class="page-header">
			<h1>
				<?php echo $this->escape($this->params->get('page_heading')); ?>
			</h1>
		</div>
	<?php endif; ?>
	<?php if (($this->params->get('logindescription_show') == 1 && str_replace(' ', '', $this->params->get('login_description')) != '') || $this->params->get('login_image') != '') : ?>
		<div class="login-description">
	<?php endif; ?>
	<?php if ($this->params->get('logindescription_show') == 1) : ?>
		<?php echo $this->params->get('login_description'); ?>
	<?php endif; ?>
	<?php if ($this->params->get('login_image') != '') : ?>
		<img src="<?php echo $this->escape($this->params->get('login_image')); ?>" class="login-image" alt="<?php echo JText::_('COM_USERS_LOGIN_IMAGE_ALT'); ?>" />
	<?php endif; ?>
	<?php if (($this->params->get('logindescription_show') == 1 && str_replace(' ', '', $this->params->get('login_description')) != '') || $this->params->get('login_image') != '') : ?>
		</div>
	<?php endif; ?>
	<form action="<?php echo JRoute::_('index.php?option=com_users&task=user.login'); ?>" method="post" class="form-validate form-horizontal well">
		<fieldset>
			<?php // echo $this->form->renderFieldset('credentials'); ?>
			<div class="mb-3 row">
				<label id="username-lbl" for="username" class="col-sm-2 col-form-label required">Username<span class="star">&nbsp;*</span></label>
				<div class="col-sm-2">
					<input type="text" name="username" class="form-control required" id="username" required="required" aria-required="true" autofocus="">
			</div>
			</div>
			<div class="mb-3 row">
				<label id="password-lbl" for="password" class="col-sm-2 col-form-label required">Password<span class="star">&nbsp;*</span></label>
				<div class="col-sm-2">
					<input type="password" id="password" name="password" class="form-control validate-password required" maxlength="99" required="required" aria-required="true" >
				</div>
			</div>
			<?php if ($this->tfa) : ?>
				<?php echo $this->form->renderField('secretkey'); ?>
			<?php endif; ?>
			<?php if (JPluginHelper::isEnabled('system', 'remember')) : ?>
			<div class="mb-3 row">
				<label class="form-check-label col-sm-2 col-form-label" for="remember">
					<?php echo JText::_('COM_USERS_LOGIN_REMEMBER_ME'); ?>
				</label>
				<div class="col-sm-2">
					<input id="remember" class="form-check-input" type="checkbox" value="yes" id="remember" aria-invalid="false">
				</div>
			</div>
			<?php endif; ?>
			<div class="col-12">
				<button type="submit" class="btn btn-primary">
					<?php echo JText::_('JLOGIN'); ?>
				</button>
			</div>
			<?php $return = $this->form->getValue('return', '', $this->params->get('login_redirect_url', $this->params->get('login_redirect_menuitem'))); ?>
			<input type="hidden" name="return" value="<?php echo base64_encode($return); ?>" />
			<?php echo JHtml::_('form.token'); ?>
		</fieldset>
	</form>
</div>
<div>
	<ul class="login-links">
		<li>
			<a href="<?php echo JRoute::_('index.php?option=com_users&view=reset'); ?>">
				<?php echo JText::_('COM_USERS_LOGIN_RESET'); ?>
			</a>
		</li>
		<li>
			<a href="<?php echo JRoute::_('index.php?option=com_users&view=remind'); ?>">
				<?php echo JText::_('COM_USERS_LOGIN_REMIND'); ?>
			</a>
		</li>
		<?php $usersConfig = JComponentHelper::getParams('com_users'); ?>
		<?php if ($usersConfig->get('allowUserRegistration')) : ?>
			<li>
				<a href="<?php echo JRoute::_('index.php?option=com_users&view=registration'); ?>">
					<?php echo JText::_('COM_USERS_LOGIN_REGISTER'); ?>
				</a>
			</li>
		<?php endif; ?>
	</ul>
</div>
