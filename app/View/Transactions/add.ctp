<div class="transactions form">
<?php echo $this->Form->create('Transaction'); ?>
	<fieldset>
		<legend><?php echo __('Add Transaction'); ?></legend>
	<?php
		echo $this->Form->input('Library_ID');
		echo $this->Form->input('Item_ID');
		echo $this->Form->input('Appeal_ID');
		echo $this->Form->input('Donor_ID');
		echo $this->Form->input('Trans_Amount');
		echo $this->Form->input('Trans_Time_Date');
		echo $this->Form->input('Trans_Type');
		echo $this->Form->input('Transaction_Token');
		echo $this->Form->input('Notes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Transactions'), array('action' => 'index')); ?></li>
	</ul>
</div>
