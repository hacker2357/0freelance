<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(

	'driver'       => 'ORM',
	'hash_method'  => 'sha256',
	'hash_key'     => 'F*fM6#UM5$Kni0%qbDT6qtK6uJ^i2Aj6IYhe3WM%0Cog%CNgm7Ja%Ckk^Bt*Gp$ZV2n~Zc$Ti!Gbj5G~7eY!yC*n1ON^7s&2O@5',
	'lifetime'     => 1209600,
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',

	// Username/password combinations for the Auth File driver
	'users' => array(
		// 'admin' => 'b3154acf3a344170077d11bdb5fff31532f679a1919e716a02',
	),

);
