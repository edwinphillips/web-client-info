<li><?php echo $html->link('List Clients',array('controller'=>'clients','action'=>'index')); ?></li>
<li><?php echo $html->link('Delete Client',array('controller'=>'clients','action'=>'delete',$details['Client']['id']),null,'Are you sure you want to delete the client \'' . $details['Client']['name'] . '\'?'); ?></li>
<li><?php echo $html->link('Add Client',array('controller'=>'clients','action'=>'add')); ?></li>