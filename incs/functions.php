<?php

function debug($data) {
	echo '<pre>' . print_r($data, return: 1) . '</pre>';
}

function load($data) {
	foreach ($_POST as $key => $value) {
		if(array_key_exists($key, $data)) {
			$data[$key]['value'] = trim($value);
		}
	}
	return $data;
}