<?php
    $this->Paginator->options(array(
    'update' => '#main',
    'evalScripts' => true,
    'before' => $this->Js->get('#spinner')->effect('fadeIn', array('buffer' => false)),
    'complete' => $this->Js->get('#spinner')->effect('fadeOut', array('buffer' => false)),
));
?>

<?php echo $html->addCrumb('Websites'); ?>
<h1>Websites</h1>

<table class="data">

    <?php if (1==1) { ?>
    <tr>
        <td colspan="2">
            <center>
                <?php 
                    echo $this->Paginator->prev('« Previous', null, null, array('class' => 'disabled')) . ' | ';
                    echo $this->Paginator->numbers() . ' | ';
                    echo $this->Paginator->next('Next »', null, null, array('class' => 'disabled'));
                ?>
            </center>
        </td>  
    </tr>    
    <?php } ?>
    
    <tr>
        <td>
            <strong><?php echo $this->Paginator->sort('Website', 'name'); ?></strong>
        </td>
        <!--<td>
            <strong><?php echo $this->Paginator->sort('URL', 'url'); ?></strong>
        </td>-->
        <td>
            <strong><?php echo $this->Paginator->sort('Client', 'name'); ?></strong>
        </td>
    </tr>

    <?php foreach ($websites as $website) { ?>
    <tr<?php echo $class = empty($class) ? ' class="altrow"' : '';?>>
        <td><?php echo $this->Html->link($website['Website']['name'], array('controller' => 'websites', 'action' => 'view', $website['Website']['slug']) ); ?></td>
        <!--<td><?php echo $this->Html->link($website['Website']['url'], $website['Website']['url'], array('target'=>'_blank') ); ?></td>-->
        <td><?php echo $this->Html->link($website['Client']['name'], array('controller'=>'clients', 'action'=>'view', $website['Client']['slug']) ); ?></td>
        <!--<td><?php echo $this->Html->link('View', array('controller' => 'websites', 'action' => 'view', $website['Website']['slug']) ); ?></td>
        <td><?php echo $this->Html->link('Edit', array('controller' => 'websites', 'action' => 'edit', $website['Website']['slug']) ); ?></td>
        <td><?php echo $this->Html->link('Delete', array('controller' => 'websites', 'action' => 'delete', $website['Website']['id']), '', 'Are you sure you wish to delete the website \'' . $website['Website']['name'] . '\'?') ; ?></td>-->
    </tr>
    <?php } ?>

</table>

<?php echo $js->writeBuffer(); ?>