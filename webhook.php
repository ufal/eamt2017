<?php
	$res = array(
		'res'=>'nok'
	);

	if (@$_POST['payload'] ) {
		$out = shell_exec( 'cd /usr/share/drupal7/legacy/eamt2017/ && git reset --hard HEAD && git pull origin production 2>&1' );
		$res = array(
			'res'=>'ok',
			'out'=>$out
		);
	}
	print_r($res);
