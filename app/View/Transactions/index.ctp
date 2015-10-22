<div class="transactions index">
	<h2><?php echo __('Transactions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Trans_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Libraries_Library_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Items_Donated_Item_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Appeal_Appeal_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Donors_Donor_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Trans_Amount'); ?></th>
			<th><?php echo $this->Paginator->sort('Trans_Time_Date'); ?></th>
			<th><?php echo $this->Paginator->sort('Trans_Type'); ?></th>
			<th><?php echo $this->Paginator->sort('Transaction_Token'); ?></th>
			<th><?php echo $this->Paginator->sort('Notes'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($transactions as $transaction): ?>
	<tr>
		<td><?php echo h($transaction['Transaction']['Trans_ID']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['Libraries_Library_ID']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['Items_Donated_Item_ID']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['Appeal_Appeal_ID']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['Donors_Donor_ID']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['Trans_Amount']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['Trans_Time_Date']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['Trans_Type']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['Transaction_Token']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['Notes']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $transaction['Transaction']['Trans_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $transaction['Transaction']['Trans_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $transaction['Transaction']['Trans_ID']), array('confirm' => __('Are you sure you want to delete # %s?', $transaction['Transaction']['Trans_ID']))); ?>
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
		<li><?php echo $this->Html->link(__('New Transaction'), array('action' => 'add')); ?></li>
	</ul>
</div>
