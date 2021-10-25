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
JHtml::_('formbehavior.chosen', 'select');
JHtml::_('bootstrap.tooltip');


// Load user_profile plugin language
$lang = JFactory::getLanguage();
$lang->load('plg_user_profile', JPATH_ADMINISTRATOR);

?>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/customerportal/css/hs-forms.css" type="text/css" />	
<div class="profile-edit<?php echo $this->pageclass_sfx; ?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
		<div class="page-header">
			<h1>
				<?php echo $this->escape($this->params->get('page_heading')); ?>
			</h1>
		</div>
	<?php endif; ?>
	<script type="text/javascript">
		Joomla.twoFactorMethodChange = function(e)
		{
			var selectedPane = 'com_users_twofactor_' + jQuery('#jform_twofactor_method').val();

			jQuery.each(jQuery('#com_users_twofactor_forms_container>div'), function(i, el)
			{
				if (el.id != selectedPane)
				{
					jQuery('#' + el.id).hide(0);
				}
				else
				{
					jQuery('#' + el.id).show(0);
				}
			});
		}
	</script>
	
	<form id="member-profile" action="<?php echo JRoute::_('index.php?option=com_users&task=profile.save'); ?>" method="post" class="form-validate form-horizontal well" enctype="multipart/form-data">
			<?php // Iterate through the form fieldsets and display each one. ?>
				<?php foreach ($this->form->getFieldsets() as $group => $fieldset) : ?>
					<?php $fields = $this->form->getFieldset($group); ?>
						<?php if (count($fields)) : ?>
								<h1 class="mt-5">Edit Profile</h1>
								<p class="lead">Use this page to update your <i>Display Name</i>, <i>Password</i> or <i>Email</i>.</p>
								<p class="lead">Note: updating you account details for the Records Transformation Customer Portal will <b>NOT</b> update your GilbyIM account details. &nbsp;For information about how to update you GilbyIM account details, please see our <a href="/gilbyim-faqs#change-password">GilbyIM FAQs</a>.</p>
						<?php // Iterate through the fields in the set and display them. ?>
							<?php foreach ($fields as $field) : ?>
							<?php // If the field is hidden, just display the input. ?>
							<?php if ($field->hidden) : ?>
							
							<?php else : 

									echo '<div class="mb-3 row">';
									switch ($field->id) {
										case "jform_name":
											$labeltext = "Display Name";
											break;
										case "jform_username":
											$labeltext = "Username";
											break;
										case "jform_password1":
											$labeltext = "New Password";
											break;
										case "jform_password2":
											$labeltext = "Confirm New Password";
											break;
										case "jform_email1":
											$labeltext = "Email Address";
											break;
										case "jform_email2":
											$labeltext = "Confirm Email Address";
											break;
									}
					
					
									$customlabel = '<label id="' . $field->id . '-lbl" for="' . $field->fieldname . '" class="hasPopover required" title="">' . $labeltext;
			
if ($field->required && $field->type !== 'Spacer')
											{
											$customlabel .= '<span class="star">&nbsp;*</span>';
											}
										else
											{
											$customlabel .= '<span class="optional"> ';
											$customlabel .= JText::_('COM_USERS_OPTIONAL');
											$customlabel .= '</span>';
											}
										$customlabel .= '</label>';
										echo $customlabel;?>

									<?php if ($field->fieldname === 'password1') : ?>
										<?php // Disables autocomplete ?>
										<input type="password" style="display:none">
									<?php endif; ?>
					
									<?php //echo $field->value; ?>
<?php
									switch ($field->id) {
										case "jform_name":
											$custominput = '<input type="text" name="' . $field->name . '" id="' . $field->id . '" value="' . $field->value .'" class="form-control required" required="required" aria-required="true" aria-invalid="false">';
											break;
										case "jform_username":
											$custominput = '<input type="text" name="' . $field->name . '" id="' . $field->id . '" value="' . $field->value .'" class="form-control" aria-required="false" readonly>';
											break;
										case "jform_password1":
											$custominput = '<input type="password" name="' . $field->name . '" id="' . $field->id . '" autocomplete="off" class="form-control validate-password">';
											break;
										case "jform_password2":
											$custominput = '<input type="password" name="' . $field->name . '" id="' . $field->id . '" value="' . $field->value .'" class="form-control validate-password">';
											break;
										case "jform_email1":
											$custominput = '<input type="email" name="' . $field->name . '" id="' . $field->id . '" value="' . $field->value .'" class="form-control validate-email required" required="required" aria-required="true">';
											break;
										case "jform_email2":
											$custominput = '<input type="email" name="' . $field->name . '" id="' . $field->id . '" value="' . $field->value .'" class="form-control validate-email required" required="required" aria-required="true">';
											break;
									}
					?>
									<?php ?>
					
									<?php echo '<div class="col-sm-3">';?>
									<?php //echo $field->input; ?>
									<?php echo $custominput; ?>
									<?php echo '</div></div>';?>
						<?php endif; ?>

					<?php endforeach; ?>
			<?php endif; ?>
		<?php endforeach; ?>
			<div class="col-12">
				<button type="submit" class="btn btn-primary validate">
					<?php echo JText::_('JSUBMIT'); ?>
				</button>
				<a class="btn" href="<?php echo JRoute::_('index.php?option=com_users&view=profile'); ?>" title="<?php echo JText::_('JCANCEL'); ?>">
					<?php echo JText::_('JCANCEL'); ?>
				</a>
			</div>
				<input type="hidden" name="option" value="com_users" />
				<input type="hidden" name="task" value="profile.save" />
		<?php echo JHtml::_('form.token'); ?>
	</form>
</div>
