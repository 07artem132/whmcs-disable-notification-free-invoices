<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 04.07.2018
 * Time: 23:53
 */

function DisableNotificationFreeInvoices_config() {
	$configarray = [
		"name"        => "Отключать email уведомления клиенту о счетах с суммой 00.00",
		"description" => "Данный модуль позволяет не отправлять клиенту email уведомления о том что создан счет с суммой 00.00 и о том что он оплачен.",
		"version"     => "1",
		"author"      => "service-voice",
		"fields"      => [
		]
	];

	return $configarray;
}