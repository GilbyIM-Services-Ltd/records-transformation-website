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
<div class="reset<?php echo $this->pageclass_sfx; ?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
		<div class="page-header">
			<h1>
				<?php echo $this->escape($this->params->get('page_heading')); ?>
			</h1>
		</div>
	<?php endif; ?>
	<h1 class="mt-5">Reset Password</h1>
	<p class="lead">Please enter the email address associated with your User account.<br />A verification code will be sent to you. Once you have received the verification code, you will be able to choose a new password for your account.</p>
	<form id="user-registration" action="<?php echo JRoute::_('index.php?option=com_users&task=reset.request'); ?>" method="post" class="form-validate form-horizontal well">
			<div class="mb-3 row">
				<label id="jform_email-lbl" for="jform_email" class="col-sm-2 col-form-label required" title="" data-content="Please enter the email address associated with your User account.<br />A verification code will be sent to you. Once you have received the verification code, you will be able to choose a new password for your account." data-original-title="Email Address" data-bs-original-title="">
					Email Address
					<span class="star">&nbsp;*</span>
				</label>

				<div class="col-sm-2">
					<input type="text" name="jform[email]" id="jform_email" value="" class="form-control validate-username required"required="required" aria-required="true" aria-invalid="true">
				</div>
			</div>
			<div class="col-12">
				<button type="submit" class="btn btn-primary validate">
					<?php echo JText::_('JSUBMIT'); ?>
				</button>
			</div>
		<?php echo JHtml::_('form.token'); ?>
	</form>
</div>
