<?php

/*
Plugin Name: Remote Host
Description: Add server ip address on toolbar.
Version: 1.0
Author: Edermen
License: A "Slug" license name e.g. GPL3
*/
add_action( 'admin_bar_menu', 'add_remote_hosts',10000 );
function add_remote_hosts($wp_admin_bar) {
	$ip=$_SERVER['REMOTE_ADDR'];
	if (preg_match('/127.0.+/', $ip) == 1) {
		$addr =  '<span style="color:lightgreen; font-weight: bold">localhost</span>';
	} else {
		$addr =  '<span style="color:red; font-weight: bold">' .$ip . '</span>';
	}

	$wp_admin_bar->add_node(
		array(
			'id' => 'remote-address',
			'title' =>  'SERVER IP: ' . $addr
		)
	);
}