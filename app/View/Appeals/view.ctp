<div class="appeals view">
<h2><?php echo __('Appeal'); ?></h2>
	<dl>
		<dt><?php echo __('Appeal  I D'); ?></dt>
		<dd>
			<?php echo h($appeal['Appeal']['Appeal_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Donor  I D'); ?></dt>
		<dd>
			<?php echo h($appeal['Appeal']['Donor_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Appeal  Description'); ?></dt>
		<dd>
			<?php echo h($appeal['Appeal']['Appeal_Description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start  Time  Date'); ?></dt>
		<dd>
			<?php echo h($appeal['Appeal']['Start_Time_Date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End  Time  Date'); ?></dt>
		<dd>
			<?php echo h($appeal['Appeal']['End_Time_Date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($appeal['Appeal']['Type']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Appeal'), array('action' => 'edit', $appeal['Appeal']['Appeal_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Appeal'), array('action' => 'delete', $appeal['Appeal']['Appeal_ID']), array(), __('Are you sure you want to delete # %s?', $appeal['Appeal']['Appeal_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Appeals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Appeal'), array('action' => 'add')); ?> </li>
	</ul>
</div>
