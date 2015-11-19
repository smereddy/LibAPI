<div class="appeals index">
	<h2><?php echo __('Appeals'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Appeal_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Donor_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Appeal_Description'); ?></th>
			<th><?php echo $this->Paginator->sort('Start_Time_Date'); ?></th>
			<th><?php echo $this->Paginator->sort('End_Time_Date'); ?></th>
			<th><?php echo $this->Paginator->sort('Type'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($appeals as $appeal): ?>
	<tr>
		<td><?php echo h($appeal['Appeal']['Appeal_ID']); ?>&nbsp;</td>
		<td><?php echo h($appeal['Appeal']['Donor_ID']); ?>&nbsp;</td>
		<td><?php echo h($appeal['Appeal']['Appeal_Description']); ?>&nbsp;</td>
		<td><?php echo h($appeal['Appeal']['Start_Time_Date']); ?>&nbsp;</td>
		<td><?php echo h($appeal['Appeal']['End_Time_Date']); ?>&nbsp;</td>
		<td><?php echo h($appeal['Appeal']['Type']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $appeal['Appeal']['Appeal_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $appeal['Appeal']['Appeal_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $appeal['Appeal']['Appeal_ID']), array('confirm' => __('Are you sure you want to delete # %s?', $appeal['Appeal']['Appeal_ID']))); ?>
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
	</ul>
	<ul>
		<li><?php echo $this->Html->link(__('New Appeal'), array('action' => 'add')); ?></li>
	</ul>
	
</div>
