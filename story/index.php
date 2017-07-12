<?php
$response = array(
	'errno' => 0,
	'msg'   => '',
	'data' => array(
		'partici_num' => 2,
		'bargain_amount' => 1800,
		'partici_detail' => array(
			array(
			'user_name' => '凡达',
			'bargain_amount' => 1000,
			),
			array(
			'user_name' => '凡达23',
			'bargain_amount' => 800,
			),
		),
	),
);

#echo json_encode($response);
#var_export(json_encode($response), true);
#
#
#
$orderLastestResponse = array(
	'errno' => 0,
	'msg'   => '',
	'data' => array(
		'22222' => array(
			'deal_id' => '22222',
			'user_id' => 97813,
			'order_id' => 8239203,
			'pay_money' => 199,
			'pay_time' => '2017-07-10 12:10:00',
		),
		'33333' => array(
			'deal_id' => '33333',
			'user_id' => 9873,
			'order_id' => 8239293,
			'pay_money' => 199,
			'pay_time' => '2017-07-10 12:10:00',
		),
	),
);

echo json_encode($orderLastestResponse);