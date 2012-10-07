<?php echo $html->addCrumb('Contacts',array('controller'=>'contacts','action'=>'index')); ?>
<?php echo $html->addCrumb($details['Contact']['firstname'] . ' ' . $details['Contact']['lastname']); ?>
<h1>Contact: <?php echo $details['Contact']['firstname'] . ' ' . $details['Contact']['lastname']; ?></h1>

<p>
    Email: <?php echo $this->Html->link($details['Contact']['email'],'mailto:' . $details['Contact']['email']); ?><br/>
    Phone: <?php echo $details['Contact']['phone']; ?><br/>
    
    <?php if (!empty($details['Contact']['mobile'])) { ?>
    Mobile: <?php echo $details['Contact']['mobile']; ?><br/>
    <?php } ?>
    
    Client: <?php echo $this->Html->link($details['Client']['name'],array('controller'=>'clients','action'=>'view',$details['Client']['slug'])); ?><br/>
    
    <?php if (!empty($details['Contact']['details'])) { ?>
    Details: <?php echo $details['Contact']['details']; ?><br/>
    <?php } ?>
</p>
