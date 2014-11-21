<?php 

		/**
		* return scheme, host, path, controller, action, items 
		*/


		function url_parser($uri = null) {

			if ($uri == null and isset($_SERVER['QUERY_STRING']))
				$uri = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].$_SERVER['QUERY_STRING'].'/';
			
			$result = parse_url(urldecode($uri));
						
			if ($result['path'] !== '/') {
				$items = explode('/', trim($result['path'], '/'));
				$sized = sizeof($items);
				if ($sized > 0) {
					$result['controller'] = array_shift($items);
					if ($sized > 1) {
						$result['action'] = array_shift($items);
						if ($sized > 2) {
							$result['items'] = $items;
						}
					}	
				}		
			}

		}