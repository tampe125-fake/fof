<?php
/**
 * @package	    FrameworkOnFramework.UnitTest
 *
 * @copyright   Copyright (C) 2010 - 2012 Akeeba Ltd. All rights reserved.
 * @license	    GNU General Public License version 2 or later; see LICENSE.txt
 *
 * Configuration for running the unit tests
 */

$fofTestConfig = array(
	'2.5' => realpath('environments/2.5/unzip'),
	'3.x' => realpath('environments/3.x/unzip'),
	'dbparams' => array(
		'host'  => '127.0.0.1',
		'user'  => 'travis',
		'pwd'   => '',
		'db'    => 'fof_test'
	)
);