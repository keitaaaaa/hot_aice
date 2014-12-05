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
 * @package       app.View.Emails.text
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<?php printf("氏名：%s\n", $arrVal['Order']['customer']); ?>

<?php printf("住所：%s\n", $arrVal['Order']['adress']); ?>

<?php printf("メールアドレス：%s\n", $arrVal['Order']['mail']); ?>

<?php printf("色：%s\n", $arrVal['Order']['color']); ?>

<?php printf("サイズ：%s\n", $arrVal['Order']['size']); ?>

<?php printf("個数：%s\n", $arrVal['Order']['volume']); ?>

<?php
	$money = $arrVal['Order']['volume'] * 2500;
	printf("合計：%d円\n", $money);
?>