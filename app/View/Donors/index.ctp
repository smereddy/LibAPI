<div class="donors index">
	<h2><?php echo __('Donors'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Donor_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Donor_Last_Name'); ?></th>
			<th><?php echo $this->Paginator->sort('Donor_First_Name'); ?></th>
			<th><?php echo $this->Paginator->sort('Donor_Organization'); ?></th>
			<th><?php echo $this->Paginator->sort('Donor_Street'); ?></th>
			<th><?php echo $this->Paginator->sort('Donor_City'); ?></th>
			<th><?php echo $this->Paginator->sort('Donor_State'); ?></th>
			<th><?php echo $this->Paginator->sort('Donor_Zip'); ?></th>
			<th><?php echo $this->Paginator->sort('Donor_Email'); ?></th>
			<th><?php echo $this->Paginator->sort('Donor_Phone'); ?></th>
			<th><?php echo $this->Paginator->sort('Donor_Notes'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($donors as $donor): ?>
	<tr>
		<td><?php echo h($donor['Donor']['Donor_ID']); ?>&nbsp;</td>
		<td><?php echo h($donor['Donor']['Donor_Last_Name']); ?>&nbsp;</td>
		<td><?php echo h($donor['Donor']['Donor_First_Name']); ?>&nbsp;</td>
		<td><?php echo h($donor['Donor']['Donor_Organization']); ?>&nbsp;</td>
		<td><?php echo h($donor['Donor']['Donor_Street']); ?>&nbsp;</td>
		<td><?php echo h($donor['Donor']['Donor_City']); ?>&nbsp;</td>
		<td><?php echo h($donor['Donor']['Donor_State']); ?>&nbsp;</td>
		<td><?php echo h($donor['Donor']['Donor_Zip']); ?>&nbsp;</td>
		<td><?php echo h($donor['Donor']['Donor_Email']); ?>&nbsp;</td>
		<td><?php echo h($donor['Donor']['Donor_Phone']); ?>&nbsp;</td>
		<td><?php echo h($donor['Donor']['Donor_Notes']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $donor['Donor']['Donor_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $donor['Donor']['Donor_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $donor['Donor']['Donor_ID']), array('confirm' => __('Are you sure you want to delete # %s?', $donor['Donor']['Donor_ID']))); ?>
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
		<li><?php echo $this->Html->link(__('New Donor'), array('action' => 'add')); ?></li>
	</ul>
</div>
