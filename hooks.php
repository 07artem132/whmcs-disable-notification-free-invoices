<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 04.07.2018
 * Time: 23:55
 */

use Illuminate\Database\Capsule\Manager as Capsule;

add_hook( "EmailPreSend", 1, function ( $vars ) {
	$email_template_name = $vars['messagename'];
	$merge_fields        = [];

	if ( $email_template_name == "Invoice Created" || $email_template_name == "Invoice Payment Confirmation" ) {
		$getInvoice = Capsule::table( 'tblinvoices' )->where( 'id', $vars['relid'] )->first();

		if ( $getInvoice->total == '0.00' ) {
			$merge_fields['abortsend'] = true;
		}
	}

	return $merge_fields;
} );
