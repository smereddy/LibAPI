<div class="itemsDonateds index">
	<h2><?php echo __('Items Donateds'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Item_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Memorial_Mem_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Donors_Donor_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Item_Description'); ?></th>
			<th><?php echo $this->Paginator->sort('Item_Recieved_Date'); ?></th>
			<th><?php echo $this->Paginator->sort('Libraries_Library_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Item_Value'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($itemsDonateds as $itemsDonated): ?>
	<tr>
		<td><?php echo h($itemsDonated['ItemsDonated']['Item_ID']); ?>&nbsp;</td>
		<td><?php echo h($itemsDonated['ItemsDonated']['Memorial_Mem_ID']); ?>&nbsp;</td>
		<td><?php echo h($itemsDonated['ItemsDonated']['Donors_Donor_ID']); ?>&nbsp;</td>
		<td><?php echo h($itemsDonated['ItemsDonated']['Item_Description']); ?>&nbsp;</td>
		<td><?php echo h($itemsDonated['ItemsDonated']['Item_Recieved_Date']); ?>&nbsp;</td>
		<td><?php echo h($itemsDonated['ItemsDonated']['Libraries_Library_ID']); ?>&nbsp;</td>
		<td><?php echo h($itemsDonated['ItemsDonated']['Item_Value']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $itemsDonated['ItemsDonated']['Item_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $itemsDonated['ItemsDonated']['Item_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $itemsDonated['ItemsDonated']['Item_ID']), array('confirm' => __('Are you sure you want to delete # %s?', $itemsDonated['ItemsDonated']['Item_ID']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Items Donated'), array('action' => 'add')); ?></li>
	</ul>
</div>
