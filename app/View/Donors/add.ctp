<div class="donors form">
<?php echo $this->Form->create('Donor'); ?>
	<fieldset>
		<legend><?php echo __('Add Donor'); ?></legend>
	<?php
		echo $this->Form->input('Donor_Last_Name');
		echo $this->Form->input('Donor_First_Name');
		echo $this->Form->input('Donor_Organization');
		echo $this->Form->input('Donor_Street');
		echo $this->Form->input('Donor_City');
		echo $this->Form->input('Donor_State');
		echo $this->Form->input('Donor_Zip');
		echo $this->Form->input('Donor_Email');
		echo $this->Form->input('Donor_Phone');
		echo $this->Form->input('Donor_Notes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Donors'), array('action' => 'index')); ?></li>
	</ul>
</div>
