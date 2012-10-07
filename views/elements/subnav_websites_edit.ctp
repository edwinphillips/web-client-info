<li><?php echo $html->link('List Websites',array('controller'=>'websites','action'=>'index')); ?></li>
<li><?php echo $html->link('Delete Website',array('controller'=>'websites','action'=>'delete',$this->params['pass'][0]),null,'Are you sure you want to delete this website?'); ?></li>
<li><?php echo $html->link('New Website',array('controller'=>'websites','action'=>'add')); ?></li>