<?php 

		function url_parser($uri = null) {

			
			if ($uri == null and isset($_SERVER['QUERY_STRING'])){ // default = QUERY_STRING
				$uri = $_SERVER['QUERY_STRING'];
				$result['protocol'] = $_SERVER['REQUEST_SCHEME'];
				$result['domain'] = $_SERVER['HTTP_HOST'];
				$result['method'] =  $_SERVER['REQUEST_METHOD'];
				$items = explode($separ, $uri);
			}	
			else {
			
				if ($find = strpos($uri, '://')) { // http, https
					$result['protocol'] = substr($uri, 0, $find);
					$uri = substr($uri, $find + 3);
				}

				$items = explode('/', $uri);

				if (filter_var(gethostbyname($items[0]), FILTER_VALIDATE_IP)) //domain name
					$result['domain'] = array_shift($items);

			}		

			$result['control'] = array_shift($items);
			$result['action'] = array_shift($items);
			$result['params'] = $items; // more params

			
			return $result;

		}