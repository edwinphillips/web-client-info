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
		<?php __('Magnetic Works Extranet ::'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('extranet');
		echo $scripts_for_layout;
                echo $this->Html->script('jquery');
	?>
</head>

<body>
    
    <div id="wrap">

        <div id="header"><h1>Simple 2 column CSS layout, final layout</h1></div>

        <div id="nav">
            <ul>
                <li><a href="/">Option 1</a></li>
                <li><a href="/">Option 2</a></li>
                <li><a href="/">Option 3</a></li>
                <li><a href="/">Option 4</a></li>
                <li><a href="/">Option 5</a></li>
            </ul>
        </div>

        <div id="main">
            <h2>Column 1</h2>
            <p><a href="/">456 Berea Street Home</a></p>
            <p><a href="/lab/developing_with_web_standards/csslayout/2-col/">Simple 2 column CSS layout</a></p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris vel magna. Mauris risus nunc, tristique varius, gravida in, lacinia vel, elit. Nam ornare, felis non faucibus molestie, nulla augue adipiscing mauris, a nonummy diam ligula ut risus. Praesent varius. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            <p>Nulla a lacus. Nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Fusce pulvinar lobortis purus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec semper ipsum et urna. Ut consequat neque vitae felis. Suspendisse dapibus, magna quis pulvinar laoreet, dolor neque lacinia arcu, et luctus mi erat vestibulum sem. Mauris faucibus iaculis lacus. Aliquam nec ante in quam sollicitudin congue. Quisque congue egestas elit. Quisque viverra. Donec feugiat elementum est. Etiam vel lorem.</p>
            <p>Aenean tempor. Mauris tortor quam, elementum eu, convallis a, semper quis, purus. Cras at tortor in purus tincidunt tristique. In hac habitasse platea dictumst. Ut eu lectus eu metus molestie iaculis. In ornare. Donec at enim vel erat tempor congue. Nullam varius. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla feugiat hendrerit risus. Integer enim velit, gravida id, sollicitudin at, consequat sit amet, leo. Fusce imperdiet condimentum velit. Phasellus nonummy interdum est. Pellentesque quam.</p>
            <h3>Consectetuer adipiscing elit</h3>
            <p>Nulla dictum. Praesent turpis libero, pretium in, pretium ac, malesuada sed, ligula. Sed a urna eu ipsum luctus faucibus. Curabitur fringilla. Suspendisse sit amet quam. Sed vel pede id libero luctus fermentum. Vestibulum volutpat tempor lectus. Vivamus convallis tempus ante. Nullam adipiscing dui blandit ipsum. Nullam convallis lacus ut quam. Mauris semper elit at ante. Vivamus tristique. Pellentesque pharetra ante at pede. In ultrices arcu vitae purus. In rutrum, erat at mollis consequat, leo massa consequat libero, ac vestibulum libero tellus sed risus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
            <p>Maecenas eu velit nec magna venenatis consequat. In neque. Vivamus pellentesque, lacus eu aliquet semper, lorem metus rhoncus metus, a ornare orci ante a diam. Nunc sem nisl, aliquet quis, elementum nec, imperdiet in, wisi. Proin in lorem. Etiam molestie diam eget ante. Morbi quis tortor id lacus mollis venenatis. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam vel orci sit amet tellus mollis eleifend. Donec urna diam, viverra eget, ultricies gravida, ultrices eu, erat. Proin vel arcu. Sed diam. Cras hendrerit arcu sed augue. Sed justo felis, luctus a, accumsan in, tincidunt facilisis, libero. Phasellus eu eros.</p>
        </div>

        <div id="sidebar">
            <h2>Column 2</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris vel magna.</p>
            <ul>
                <li><a href="/">Link 1</a></li>
                <li><a href="/">Link 2</a></li>
                <li><a href="/">Link 3</a></li>
                <li><a href="/">Link 4</a></li>
                <li><a href="/">Link 5</a></li>
                <li><a href="/">Link 6</a></li>
                <li><a href="/">Link 7</a></li>
                <li><a href="/">Link 8</a></li>
                <li><a href="/">Link 9</a></li>
                <li><a href="/">Link 10</a></li>
                <li><a href="/">Link 11</a></li>
                <li><a href="/">Link 12</a></li>
                <li><a href="/">Link 13</a></li>
                <li><a href="/">Link 14</a></li>
                <li><a href="/">Link 15</a></li>
            </ul>
        </div>

        <div id="footer">
            <p>Footer</p>
        </div>

    </div>
    
</body>

</html>
