<div class="items index">
	<h2><?php echo __('Items'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Item_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Mem_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Donor_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Item_Description'); ?></th>
			<th><?php echo $this->Paginator->sort('Item_Recieved_Date'); ?></th>
			<th><?php echo $this->Paginator->sort('Libraries_Library_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Item_Value'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($items as $item): ?>
	<tr>
		<td><?php echo h($item['Item']['Item_ID']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['Mem_ID']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['Donor_ID']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['Item_Description']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['Item_Recieved_Date']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['Libraries_Library_ID']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['Item_Value']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $item['Item']['Item_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $item['Item']['Item_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $item['Item']['Item_ID']), array('confirm' => __('Are you sure you want to delete # %s?', $item['Item']['Item_ID']))); ?>
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
	<li class="active"><a href="users">Home</a></li>
	</ul>
	<ul>
	<li><?php echo $this->Html->link( "Logout", array('action'=>'logout') ); ?></li>
	
	<ul>
		<li><?php echo $this->Html->link(__('New Item'), array('action' => 'add')); ?></li>
	</ul>
</div>
