<?php echo $html->addCrumb('Websites',array('controller'=>'websites','action'=>'index')); ?>
<?php echo $html->addCrumb($details['Website']['name']); ?>
<h1>Website: <?php echo $details['Website']['name']; ?></h1>
<p>
Url: <?php echo $this->Html->link($details['Website']['url'],$details['Website']['url'],array('target'=>'_blank')); ?><br/>
Client: <?php echo $this->Html->link($details['Client']['name'],array('controller'=>'clients','action'=>'view',$details['Client']['slug'])); ?>

<?php if (!empty($details['Website']['details'])) { ?>
<br/>Details: <?php echo $details['Website']['details']; ?>
<?php } ?>

</p>
<div class="related">
    <h3>Database connections</h3>
    <?php if (!empty($website_dataconnections)) { ?>
    <table class="data">
        <tr>
            <td>Name</td>
            <td>Host</td>
            <td>Username</td>
            <td>Password</td>
            <td>Catalog</td>
            <td>Type</td>
            <td colspan="2"></td>
        </tr>
        <?php foreach ($website_dataconnections as $website_dataconnection) { ?>
        <tr<?php echo $class = empty($class) ? ' class="altrow"' : '';?>>
            <td><?php echo $this->Html->link($website_dataconnection['Dataconnection']['name'],array('controller'=>'dataconnections','action'=>'view',$website_dataconnection['Dataconnection']['id'])); ?></td>
            <td><?php echo $website_dataconnection['Dataconnection']['host']; ?></td>
            <td><?php echo $website_dataconnection['Dataconnection']['username']; ?></td>
            <td><?php echo $website_dataconnection['Dataconnection']['password']; ?></td>
            <td><?php echo $website_dataconnection['Dataconnection']['catalog']; ?></td>
            <td><?php echo $website_dataconnection['Datatype']['name']; ?></td>
            <td><center><?php echo $this->Html->link('Edit',array('controller'=>'dataconnections','action'=>'edit',$website_dataconnection['Dataconnection']['id'])); ?></center></td>
            <td><center><?php echo $this->Html->link('Delete',array('controller'=>'dataconnections','action'=>'delete',$website_dataconnection['Dataconnection']['id']),null,'Are you sure you want to delete database connection details \'' . $website_dataconnection['Dataconnection']['name'] . '\' from website \'' . $details['Website']['name'] . '\'?'); ?></center></td>
        </tr>
        <?php } ?>
    </table>
    <?php } ?>
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link('Add Database connection',array('controller'=>'dataconnections','action'=>'add',$details['Website']['slug']),array('class'=>'add-button')); ?></li>
        </ul>
    </div>
</div>

<div class="related">
    <h3>FTP accounts</h3>
    <?php if (!empty($website_ftpconnections)) { ?>
    <table class="data">
        <tr>
            <td>Host</td>
            <td>Username</td>
            <td>Password</td>
            <td>Path</td>
            <td>Protocol</td>
            <td></td>
            <td></td>
        </tr>
        <?php foreach ($website_ftpconnections as $website_ftpconnection) { ?>
        <tr<?php echo $class = empty($class) ? ' class="altrow"' : '';?>>
            <td><?php echo $website_ftpconnection['Ftpconnection']['host']; ?></td>
            <td><?php echo $website_ftpconnection['Ftpconnection']['username']; ?></td>
            <td><?php echo $website_ftpconnection['Ftpconnection']['password']; ?></td>
            <td><?php echo $website_ftpconnection['Ftpconnection']['path']; ?></td>
            <td><?php echo $website_ftpconnection['Protocol']['name']; ?></td>
            <td><center><?php echo $this->Html->link('Edit',array('controller'=>'ftpconnections','action'=>'edit',$website_ftpconnection['Ftpconnection']['id'])); ?></center></td>
            <td><center><?php echo $this->Html->link('Delete',array('controller'=>'ftpconnections','action'=>'delete',$website_ftpconnection['Ftpconnection']['id']),null,'Are you sure?'); ?></center></td>
        </tr>
        <?php } ?>
    </table>
    <?php } ?>
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link('Add FTP account',array('controller'=>'ftpconnections','action'=>'add',$details['Website']['slug']),array('class'=>'add-button')); ?></li>
        </ul>
    </div>
</div>

<div class="related">
    <h3>Admin areas</h3>
    <?php if (!empty($website_adminareas)) { ?>
    <table class="data">
        <?php foreach ($website_adminareas as $website_adminarea) { ?>
        <tr<?php echo $class = empty($class) ? ' class="altrow"' : '';?>>
            <td><?php echo $this->Html->link($website_adminarea['Adminarea']['name'],array('controller'=>'adminareas','action'=>'view',$website_adminarea['Adminarea']['id'])); ?></td>
        </tr>
        <?php } ?>
    </table>      
    <?php } ?>
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link('Add Admin area',array('controller'=>'adminareas','action'=>'add',$details['Website']['slug']),array('class'=>'add-button')); ?></li>
        </ul>
    </div>
</div>