<div class="libraries view">
<h2><?php echo __('Library'); ?></h2>
	<dl>
		<dt><?php echo __('Library  I D'); ?></dt>
		<dd>
			<?php echo h($library['Library']['Library_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Library  Name'); ?></dt>
		<dd>
			<?php echo h($library['Library']['Library_Name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Library  Address'); ?></dt>
		<dd>
			<?php echo h($library['Library']['Library_Address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Library  City'); ?></dt>
		<dd>
			<?php echo h($library['Library']['Library_City']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Library  State'); ?></dt>
		<dd>
			<?php echo h($library['Library']['Library_State']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Library  Zip'); ?></dt>
		<dd>
			<?php echo h($library['Library']['Library_Zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Librarian'); ?></dt>
		<dd>
			<?php echo h($library['Library']['Librarian']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Librarian  Email'); ?></dt>
		<dd>
			<?php echo h($library['Library']['Librarian_Email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Work  Phone'); ?></dt>
		<dd>
			<?php echo h($library['Library']['Work_Phone']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Library'), array('action' => 'edit', $library['Library']['Library_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Library'), array('action' => 'delete', $library['Library']['Library_ID']), array(), __('Are you sure you want to delete # %s?', $library['Library']['Library_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Libraries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Library'), array('action' => 'add')); ?> </li>
	</ul>
</div>
