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

    <div id="wrap">

        <div id="header">Web Client Info</div>

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
