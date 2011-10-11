<?php

if( chdir( dirname( __FILE__) ) )
{
	set_time_limit(0);
	if( count( $argv ) > 6 )
		$_SERVER['REMOTE_USER'] = $argv[6];
	if( count( $argv ) > 5 )
	{
		require_once( "unpack.php" );
		$up = rUnpack::load();
		if($up->enabled)
		{
			$base_name = (intval($argv[3]) ? $argv[1] : addslash($argv[1]).$argv[2]);
			$up->startSilentTask($base_name,rawurldecode($argv[4]),$argv[5]);
		}
	}
}

?>