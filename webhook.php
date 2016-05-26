<?php
	if (@$_POST['payload'] ) {
		  shell_exec( 'cd /usr/share/drupal7/legacy/eamt2017/ && git reset --hard HEAD && git pull' );
	}
	$res = array(
		'res'=>'ok'
	);
	print_r($res);
