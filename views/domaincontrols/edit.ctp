<div class="domaincontrols form">
<?php echo $this->Form->create('Domaincontrol');?>
	<fieldset>
 		<legend><?php __('Edit Domaincontrol'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('url');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('details');
		echo $this->Form->input('client_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Domaincontrol.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Domaincontrol.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Domaincontrols', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Clients', true), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client', true), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>