<div class="items form">
<?php echo $this->Form->create('Item'); ?>
	<fieldset>
		<legend><?php echo __('Edit Item'); ?></legend>
	<?php
		echo $this->Form->input('Item_ID');
		echo $this->Form->input('Mem_ID');
		echo $this->Form->input('Donor_ID');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Item.Item_ID')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Item.Item_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?></li>
	</ul>
</div>
