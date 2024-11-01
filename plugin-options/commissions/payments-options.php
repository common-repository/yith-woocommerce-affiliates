<?php
/**
 * Payments options
 *
 * @author  YITH <plugins@yithemes.com>
 * @package YITH\Affiliates
 * @version 1.0.0
 */

if ( ! defined( 'YITH_WCAF' ) ) {
	exit;
} // Exit if accessed directly

/**
 * APPLY_FILTERS: yith_wcaf_payments_settings
 *
 * Filters the options available in the Commissions Payments subtab.
 *
 * @param array $options Array with options
 *
 * @return array
 */
return apply_filters(
	'yith_wcaf_payments_settings',
	array(
		'commissions-payments' => array(
			'payments-list-tab' => array(
				'type'   => 'custom_tab',
				'action' => 'yith_wcaf_print_payments_list_tab',
			),
		),
	)
);
