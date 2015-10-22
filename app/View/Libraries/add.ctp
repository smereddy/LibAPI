<div class="libraries form">
<?php echo $this->Form->create('Library'); ?>
	<fieldset>
		<legend><?php echo __('Add Library'); ?></legend>
	<?php
		echo $this->Form->input('Library_Name');
		echo $this->Form->input('Library_Address');
		echo $this->Form->input('Library_City');
		echo $this->Form->input('Library_State');
		echo $this->Form->input('Library_Zip');
		echo $this->Form->input('Librarian');
		echo $this->Form->input('Librarian_Email');
		echo $this->Form->input('Work_Phone');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Libraries'), array('action' => 'index')); ?></li>
	</ul>
</div>
