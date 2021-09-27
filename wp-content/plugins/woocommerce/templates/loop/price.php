<style>
	.date {
		/* 30/05/2021 - 01/06/2021 */
		position: static;
		font-family: 'Montserrat';
	}

	.dsp {
		/* Đầm sen Park */
		position: static;
		font-family: 'Montserrat';
	}

	.price {
		/* 25.000 VNĐ */
		position: static;
		font-family: 'Montserrat';
	}
</style>

<?php

/**
 * Loop Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

global $product;
?>
<?php if ($price_html = $product->get_price_html()) : ?>

	<span class="card-text">
		<b class="dsp" style="
		font-size: 18px;  ">Đầm sen Park</b>
	</span>
	<br>
	<span class="card-text">
		<b class="date"><i class='far fa-calendar-alt' style='font-size:18px;color: #ED7200 ; '> </i> 30/05/2021-01/06/2021 </b>
	</span>
	<span class="card-text price" style="
		color: #FA7D09; 
		font-size: 30px;
		font-weight: bold; 
		display: flex;
		align-items: center;
		letter-spacing: 0.005em;"><?php echo $price_html; ?></span>

<?php endif; ?>