<div class="transactions view">
<h2><?php echo __('Transaction'); ?></h2>
	<dl>
		<dt><?php echo __('Trans  I D'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['Trans_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Library  I D'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['Library_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item  I D'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['Item_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Appeal  I D'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['Appeal_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Donor  I D'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['Donor_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trans  Amount'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['Trans_Amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trans  Time  Date'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['Trans_Time_Date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trans  Type'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['Trans_Type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Transaction  Token'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['Transaction_Token']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['Notes']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Transaction'), array('action' => 'edit', $transaction['Transaction']['Trans_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Transaction'), array('action' => 'delete', $transaction['Transaction']['Trans_ID']), array(), __('Are you sure you want to delete # %s?', $transaction['Transaction']['Trans_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transaction'), array('action' => 'add')); ?> </li>
	</ul>
</div>
