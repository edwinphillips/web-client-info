<?php
    $this->Html->addCrumb('Clients', array('controller'=>'clients','action'=>'index'));
    $this->Html->addCrumb($details['Client']['name']);
?>
<h2>Client: <?php echo $details['Client']['name']; ?></h2>

<?php if (!empty($details['Client']['details'])) { ?>
<p>Details: <?php echo $details['Client']['details']; ?></p>
<?php } ?>

<div class="related">
    <h3>Contacts</h3>
    <?php if (!empty($client_contacts)) {?>
    <table class="data">
        <?php foreach ($client_contacts as $client_contact) { ?>
        <tr<?php echo $class = empty($class) ? ' class="altrow"' : '';?>>
            <td><?php echo $this->Html->link($client_contact['Contact']['firstname'] . ' ' . $client_contact['Contact']['lastname'],array('controller'=>'contacts','action'=>'view',$client_contact['Contact']['slug'])); ?></td>
            <td><center><?php echo $this->Html->link('Edit',array('controller'=>'contacts','action'=>'edit', $client_contact['Contact']['slug'])); ?></center></td>
            <td><center><?php echo $this->Html->link('Delete',array('controller'=>'contacts','action'=>'delete', $client_contact['Contact']['id']),null,'Are you sure you want to delete \'' . $client_contact['Contact']['firstname'] . ' ' . $client_contact['Contact']['lastname'] . '\'?'); ?></center></td>
        </tr>
        <?php } ?>
    </table>
    <?php } ?>
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link('Add Contact',array('controller'=>'contacts','action'=>'add',$details['Client']['slug']),array('class'=>'add-button')); ?></li>
        </ul>
    </div>
</div>

<div class="related">
    <h3>Websites</h3>
    <?php if (!empty($client_websites)) {?>
    <table class="data">
        <?php foreach ($client_websites as $client_website) { ?>
        <tr<?php echo $class = empty($class) ? ' class="altrow"' : '';?>>
            <td><?php echo $this->Html->link($client_website['Website']['name'],array('controller'=>'websites','action'=>'view',$client_website['Website']['slug'])); ?></td>
            <td><center><?php echo $this->Html->link('Edit',array('controller'=>'websites','action'=>'edit',$client_website['Website']['slug'])); ?></center></td>
            <td><center><?php echo $this->Html->link('Delete',array('controller'=>'websites','action'=>'delete',$client_website['Website']['id']),null,'Sure?'); ?></center></td>
        </tr>
        <?php } ?>
    </table>
    <?php } ?>
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link('Add Website',array('controller'=>'websites','action'=>'add',$details['Client']['slug']),array('class'=>'add-button')); ?></li>
        </ul>
    </div>
</div>

<div class="related">
    <h3>Domain Control</h3>
    <?php if (!empty($client_domaincontrols)) {?>
    <table class="data">
        <?php foreach ($client_domaincontrols as $client_domaincontrol) { ?>
        <tr<?php echo $class = empty($class) ? ' class="altrow"' : '';?>>
            <td><?php echo $this->Html->link($client_domaincontrol['Domaincontrol']['name'],array('controller'=>'domaincontrols','action'=>'view',$client_domaincontrol['Domaincontrol']['id'])); ?></td>
            <td><center>Edit</center></td>
            <td><center>Delete</center></td>
        </tr>
        <?php } ?>
    </table>    
    <?php } ?>
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link('Add Domain Control',array('controller'=>'domaincontrols','action'=>'add',$details['Client']['slug']),array('class'=>'add-button')); ?></li>
        </ul>
    </div>
</div>

<div class="related">
    <h3>Addresses</h3>
    <?php if (!empty($client_addresses)) {?>
    <table class="data">
        <?php foreach ($client_addresses as $client_address) { ?>
        <tr<?php echo $class = empty($class) ? ' class="altrow"' : '';?>>
            <td><?php echo $this->Html->link($client_address['Address']['name'],array('controller'=>'addresses','action'=>'view',$client_address['Address']['id'])); ?></td>
            <td><center>Edit</center></td>
            <td><center>Delete</center></td>
        </tr>
        <?php } ?>
    </table>  
    <?php } ?>
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link('Add Address', array('controller'=>'addresses','action'=>'add',$details['Client']['slug']),array('class'=>'add-button')); ?></li>
        </ul>
    </div>
</div>

<div class="related">
    <h3>Web Accounts</h3>
    <?php if (!empty($client_accounts)) {?>
    <table class="data">
        <?php foreach ($client_accounts as $client_account) { ?>
        <tr<?php echo $class = empty($class) ? ' class="altrow"' : '';?>>
            <td><?php echo $this->Html->link($client_account['Provider']['name'],array('controller'=>'accounts','action'=>'view',$client_account['Account']['id'])); ?></td>
            <td><center>
            Edit
            
            
        </center></td>
            <td><center>Delete</center></td>
        </tr>
        <?php } ?>
    </table>
    <?php } ?>
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link('Add Web Account',array('controller'=>'accounts','action'=>'add',$details['Client']['slug']),array('class'=>'add-button')); ?></li>
        </ul>
    </div>
</div>