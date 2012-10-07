<div class="domaincontrols index">
	<h2><?php __('Domaincontrols');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('url');?></th>
			<th><?php echo $this->Paginator->sort('username');?></th>
			<th><?php echo $this->Paginator->sort('password');?></th>
			<th><?php echo $this->Paginator->sort('details');?></th>
			<th><?php echo $this->Paginator->sort('client_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($domaincontrols as $domaincontrol):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $domaincontrol['Domaincontrol']['id']; ?>&nbsp;</td>
		<td><?php echo $domaincontrol['Domaincontrol']['name']; ?>&nbsp;</td>
		<td><?php echo $domaincontrol['Domaincontrol']['url']; ?>&nbsp;</td>
		<td><?php echo $domaincontrol['Domaincontrol']['username']; ?>&nbsp;</td>
		<td><?php echo $domaincontrol['Domaincontrol']['password']; ?>&nbsp;</td>
		<td><?php echo $domaincontrol['Domaincontrol']['details']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($domaincontrol['Client']['name'], array('controller' => 'clients', 'action' => 'view', $domaincontrol['Client']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $domaincontrol['Domaincontrol']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $domaincontrol['Domaincontrol']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $domaincontrol['Domaincontrol']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $domaincontrol['Domaincontrol']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Domaincontrol', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients', true), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client', true), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>