<div class="itemsDonateds view">
<h2><?php echo __('Items Donated'); ?></h2>
	<dl>
		<dt><?php echo __('Item  I D'); ?></dt>
		<dd>
			<?php echo h($itemsDonated['ItemsDonated']['Item_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Memorial  Mem  I D'); ?></dt>
		<dd>
			<?php echo h($itemsDonated['ItemsDonated']['Memorial_Mem_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Donors  Donor  I D'); ?></dt>
		<dd>
			<?php echo h($itemsDonated['ItemsDonated']['Donors_Donor_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item  Description'); ?></dt>
		<dd>
			<?php echo h($itemsDonated['ItemsDonated']['Item_Description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item  Recieved  Date'); ?></dt>
		<dd>
			<?php echo h($itemsDonated['ItemsDonated']['Item_Recieved_Date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Libraries  Library  I D'); ?></dt>
		<dd>
			<?php echo h($itemsDonated['ItemsDonated']['Libraries_Library_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item  Value'); ?></dt>
		<dd>
			<?php echo h($itemsDonated['ItemsDonated']['Item_Value']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Items Donated'), array('action' => 'edit', $itemsDonated['ItemsDonated']['Item_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Items Donated'), array('action' => 'delete', $itemsDonated['ItemsDonated']['Item_ID']), array(), __('Are you sure you want to delete # %s?', $itemsDonated['ItemsDonated']['Item_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Items Donateds'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Items Donated'), array('action' => 'add')); ?> </li>
	</ul>
</div>
