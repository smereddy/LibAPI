<div class="memorials view">
<h2><?php echo __('Memorial'); ?></h2>
	<dl>
		<dt><?php echo __('Mem  I D'); ?></dt>
		<dd>
			<?php echo h($memorial['Memorial']['Mem_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Library  I D'); ?></dt>
		<dd>
			<?php echo h($memorial['Memorial']['Library_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Donor  I D'); ?></dt>
		<dd>
			<?php echo h($memorial['Memorial']['Donor_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item  I D'); ?></dt>
		<dd>
			<?php echo h($memorial['Memorial']['Item_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Party  Memorialized'); ?></dt>
		<dd>
			<?php echo h($memorial['Memorial']['Party_Memorialized']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($memorial['Memorial']['Description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Memorial  Inscription'); ?></dt>
		<dd>
			<?php echo h($memorial['Memorial']['Memorial_Inscription']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Memorial'), array('action' => 'edit', $memorial['Memorial']['Mem_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Memorial'), array('action' => 'delete', $memorial['Memorial']['Mem_ID']), array(), __('Are you sure you want to delete # %s?', $memorial['Memorial']['Mem_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Memorials'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Memorial'), array('action' => 'add')); ?> </li>
	</ul>
</div>
