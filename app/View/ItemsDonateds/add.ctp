<div class="itemsDonateds form">
<?php echo $this->Form->create('ItemsDonated'); ?>
	<fieldset>
		<legend><?php echo __('Add Items Donated'); ?></legend>
	<?php
		echo $this->Form->input('Memorial_Mem_ID');
		echo $this->Form->input('Donors_Donor_ID');
		echo $this->Form->input('Item_Description');
		echo $this->Form->input('Item_Recieved_Date');
		echo $this->Form->input('Libraries_Library_ID');
		echo $this->Form->input('Item_Value');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Items Donateds'), array('action' => 'index')); ?></li>
	</ul>
</div>
