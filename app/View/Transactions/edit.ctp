<div class="transactions form">
<?php echo $this->Form->create('Transaction'); ?>
	<fieldset>
		<legend><?php echo __('Edit Transaction'); ?></legend>
	<?php
		echo $this->Form->input('Trans_ID');
		echo $this->Form->input('Libraries_Library_ID');
		echo $this->Form->input('Items_Donated_Item_ID');
		echo $this->Form->input('Appeal_Appeal_ID');
		echo $this->Form->input('Donors_Donor_ID');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Transaction.Trans_ID')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Transaction.Trans_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('action' => 'index')); ?></li>
	</ul>
</div>
