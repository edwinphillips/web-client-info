<?php
    $this->Paginator->options(array(
    'update' => '#main',
    'evalScripts' => true,
    'before' => $this->Js->get('#spinner')->effect('fadeIn', array('buffer' => false)),
    'complete' => $this->Js->get('#spinner')->effect('fadeOut', array('buffer' => false)),
));
?>

<?php echo $html->addCrumb('Contacts'); ?>
<h1>Contacts</h1>

<table class="data">

    <tr>
        <td colspan="6">
            <center>
                <?php echo $this->Paginator->prev('« Previous', null, null, array('class' => 'disabled')) . ' | '; ?>
                <?php echo $this->Paginator->numbers() . ' | '; ?>
                <?php echo $this->Paginator->next('Next »', null, null, array('class' => 'disabled')); ?>
            </center>
        </td>  
    </tr> 

    <tr>
        <td>
            <strong><?php echo $this->Paginator->sort('Firstname', 'Contact.firstname'); ?></strong>
        </td>
        <td>
            <strong><?php echo $this->Paginator->sort('Lastname', 'Contact.lastname'); ?></strong>
        </td>
        <td colspan="4">
            <strong><?php echo $this->Paginator->sort('Client', 'Client.name'); ?></strong>
        </td>
    </tr>    
    
    <?php foreach ($contacts as $contact) { ?>
    <tr<?php echo $class = empty($class) ? ' class="altrow"' : '';?>>
        
        <td><?php echo $this->Html->link($contact['Contact']['firstname'], array('controller' => 'contacts', 'action' => 'view', $contact['Contact']['slug']) ); ?></td>
        <td><?php echo $this->Html->link($contact['Contact']['lastname'], array('controller' => 'contacts', 'action' => 'view', $contact['Contact']['slug']) ); ?></td>
        <td><?php echo $this->Html->link($contact['Client']['name'], array('controller'=>'clients', 'action'=>'view', $contact['Client']['slug']) ); ?></td>
        <td><center><?php echo $this->Html->link('View', array('controller' => 'contacts', 'action' => 'view', $contact['Contact']['slug']) ); ?></center></td>
        <td><center><?php echo $this->Html->link('Edit', array('controller' => 'contacts', 'action' => 'edit', $contact['Contact']['slug']) ); ?></center></td>
        <td><center><?php echo $this->Html->link('Delete', array('controller' => 'contacts', 'action' => 'delete', $contact['Contact']['id']), '', 'Are you sure you wish to delete the contact \'' . $contact['Contact']['firstname'] . ' ' . $contact['Contact']['lastname'] . '\'?') ; ?></center></td>
            
    </tr>
    <?php } ?>

</table>

<?php echo $js->writeBuffer(); ?>