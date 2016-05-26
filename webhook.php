<?php
	$res = array(
		'res'=>'nok',
		'pay'=>$_POST['payload']['ref']
	);

	if (@$_POST['payload'] && $_POST['payload']['ref'] == 'refs/heads/production') {
		$out = shell_exec( 'cd /usr/share/drupal7/legacy/eamt2017/ && git reset --hard HEAD && git pull origin production 2>&1' );
		$res = array(
			'res'=>'ok',
			'out'=>$out
		);
	}
	print_r($res);
