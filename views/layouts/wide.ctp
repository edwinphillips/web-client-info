<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.skel.views.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('Web Client Info ::'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('extranet');
		echo $scripts_for_layout;
                echo $this->Html->script('jquery');
	?>
</head>

<body class="<?php echo $this->params['controller']; ?>">

    <div id="spinner" style="display: none; float: right;">
        <?php echo $html->image('ajax-loader.gif'); ?>
    </div>    
    
    <div id="wrap">

        <div id="header">
            <?php echo $html->link('Web Client Info',array('controller'=>'pages', 'action'=>'home'),null,null);?>
            <?php echo $html->link('Logout',array('controller'=>'users', 'action'=>'logout'),array('class'=>'logout'),'Are you sure you want to log out?'); ?>
        </div>

        <div id="nav">
            <ul>
                <li><?php echo $html->link('Clients',array('controller'=>'clients','action'=>'index')); ?></li>
                <li><?php echo $html->link('Contacts',array('controller'=>'contacts','action'=>'index')); ?></li>
                <li><?php echo $html->link('Websites',array('controller'=>'websites','action'=>'index')); ?></li>
            </ul>
        </div>
        
        <div id="wide-main">
                <?php echo $this->Session->flash(); ?>
                <?php echo $content_for_layout; ?>    
        </div>

        <div id="footer">
            <p></p>
        </div>

    </div>
    
</body>

</html>
