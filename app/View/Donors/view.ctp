<div class="donors view">
<h2><?php echo __('Donor'); ?></h2>
	<dl>
		<dt><?php echo __('Donor  I D'); ?></dt>
		<dd>
			<?php echo h($donor['Donor']['Donor_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Donor  Last  Name'); ?></dt>
		<dd>
			<?php echo h($donor['Donor']['Donor_Last_Name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Donor  First  Name'); ?></dt>
		<dd>
			<?php echo h($donor['Donor']['Donor_First_Name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Donor  Organization'); ?></dt>
		<dd>
			<?php echo h($donor['Donor']['Donor_Organization']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Donor  Street'); ?></dt>
		<dd>
			<?php echo h($donor['Donor']['Donor_Street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Donor  City'); ?></dt>
		<dd>
			<?php echo h($donor['Donor']['Donor_City']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Donor  State'); ?></dt>
		<dd>
			<?php echo h($donor['Donor']['Donor_State']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Donor  Zip'); ?></dt>
		<dd>
			<?php echo h($donor['Donor']['Donor_Zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Donor  Email'); ?></dt>
		<dd>
			<?php echo h($donor['Donor']['Donor_Email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Donor  Phone'); ?></dt>
		<dd>
			<?php echo h($donor['Donor']['Donor_Phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Donor  Notes'); ?></dt>
		<dd>
			<?php echo h($donor['Donor']['Donor_Notes']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Donor'), array('action' => 'edit', $donor['Donor']['Donor_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Donor'), array('action' => 'delete', $donor['Donor']['Donor_ID']), array(), __('Are you sure you want to delete # %s?', $donor['Donor']['Donor_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Donors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Donor'), array('action' => 'add')); ?> </li>
	</ul>
</div>
