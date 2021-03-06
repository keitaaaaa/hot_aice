<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'HOT AICE.com');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('test');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		
		<div id="left">
			<div id="logo">
					<?php echo $this->Html->image('logo_top.png',
						array('width' => '220',
								'url' => array('controller' => 'contents',
												'action' => 'index'))); ?>
			</div>

			<div id="navi">
				<p><?php echo $this->Html->image('cds.png',
					array('width' => '220',
						'url' => array('controller' => 'musics',
						'action' => 'index'))); ?></p>
				<p><?php echo $this->Html->image('gallery.png',
					array('width' => '220',
						'url' => array('controller' => 'photos',
						'action' => 'index'))); ?></p>
				<p><?php echo $this->Html->image('blog.png',
					array('width' => '220',
						'url' => array('controller' => 'posts',
						'action' => 'index'))); ?></p>
				<p><?php echo $this->Html->image('goods.png',
					array('width' => '220',
						'url' => array('controller' => 'orders',
						'action' => 'add'))); ?></p>
			</div>
		</div>
		
		<div id="content">
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
</body>
</html>
