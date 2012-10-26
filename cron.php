<?php
require('classes/MulticraftAPI.php');
require('config/servers.php');

$total_memory = 0;

foreach( $servers as $server ) {
	$api = new MulticraftAPI($server['API_URL'], $server['API_USER'], $server['API_PASS']);
	$server_ids = $server['SERVER_IDS'];
	
	foreach( $server_ids as $server_id ) {
		$memory_query = $api->getConnectionMemory($server_id, 0);
		
		if( $memory_query['success'] == 1 ) {
			$total_memory += $memory_query['data']['used'];
		}
	}
}

$cache_file = "./memory.cache";
$fh = fopen($cache_file, 'w');

if( is_int($total_memory) ) {
	fwrite($fh, $total_memory);
}

fclose($fh);
?>