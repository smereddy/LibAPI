<div class="memorials form">
<?php echo $this->Form->create('Memorial'); ?>
	<fieldset>
		<legend><?php echo __('Add Memorial'); ?></legend>
	<?php
		echo $this->Form->input('Libraries_Library_ID');
		echo $this->Form->input('Donors_Donor_ID');
		echo $this->Form->input('Items_Donated_Item_ID');
		echo $this->Form->input('Party_Memorialized');
		echo $this->Form->input('Desciption');
		echo $this->Form->input('Memorial_Inscription');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Memorials'), array('action' => 'index')); ?></li>
	</ul>
</div>
