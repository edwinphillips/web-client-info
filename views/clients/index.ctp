<?php
    $this->Paginator->options(array(
    'update' => '#main',
    'evalScripts' => true,
    'before' => $this->Js->get('#spinner')->effect('fadeIn', array('buffer' => false)),
    'complete' => $this->Js->get('#spinner')->effect('fadeOut', array('buffer' => false)),
));
?>

<?php echo $html->addCrumb('Clients'); ?>
<h1>Clients</h1>

<table class="data">

    <tr>
        <td colspan="4">
            <center>
                <?php echo $this->Paginator->prev('« Previous', null, null, array('class' => 'disabled')) . ' | '; ?>
                <?php echo $this->Paginator->numbers() . ' | '; ?>
                <?php echo $this->Paginator->next('Next »', null, null, array('class' => 'disabled')); ?>
            </center>
        </td>  
    </tr>    
    
    <tr>
        <td colspan="4">
            <strong><?php echo $this->Paginator->sort('Client Name', 'name'); ?></strong>
        </td>
    </tr>
    
    <?php foreach ($clients as $client) { ?>
    <tr<?php echo $class = empty($class) ? ' class="altrow"' : '';?>>
        <td><?php echo $this->Html->link($client['Client']['name'], array('controller' => 'clients', 'action' => 'view', $client['Client']['slug']) ); ?></td>
        <td><center><?php echo $this->Html->link('View', array('controller' => 'clients', 'action' => 'view', $client['Client']['slug']) ); ?></center></td>
        <td><center><?php echo $this->Html->link('Edit', array('controller' => 'clients', 'action' => 'edit', $client['Client']['slug']) ); ?></center></td>
        <td><center><?php echo $this->Html->link('Delete', array('controller' => 'clients', 'action' => 'delete', $client['Client']['id']), '', 'Are you sure you wish to delete \'' . $client['Client']['name'] . '\'?') ; ?></center></td>
    </tr>
    <?php } ?>

</table>

<?php echo $js->writeBuffer(); ?>