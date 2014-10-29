<?php

use YouthSkillsCenter\Families\Family;

return [

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mailgun' => [
		'domain' => 'mailgun.redcode.io',
		'secret' => '6ee37b6d9bbadfd08ed3b68092bc23af',
	],

	'mandrill' => [
		'secret' => '',
	],

	'stripe' => [
		'model'  => Family::class,
		'secret' => getenv('stripe_secret'),
		'publishable' => getenv('stripe_publishable'),
	],

];
