<?php 

		function url_parse($url, $separ = '/') {

			$items = explode($separ, urldecode($url));

			print_r($items);

			$control = array_shift($items);
			$action = array_shift($items);
			$params = $items; // more params

			return array (
				
				'control' => $control,
				'action' => $action,
				'params' => $params
				
			);

		}