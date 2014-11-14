## URLPARSER

PHP >= 5.2.0

Quickstart MVC router without regular. MVC standart role: _controller/action/params_

Return result array ( _'protocol', 'domain', 'method', 'control', 'action', 'params'_ )

* protocol (http, https)
* domain (default _$_SERVER['QUERY_STRING']_)
* method (GET, POST ...)
* permanent MVC rule: control/action/params




[EXAMPLE]


require 'urlparse.php';
$result = url_parser('http://www.argumenti.ru/rss/an/yandexnews');

print_r($result);

----------------------------------------------------------------
Array
(
    [protocol] => http
    [domain] => argumenti.ru
    [control] => rss
    [action] => an
    [params] => Array
        (
          [0] => yandexnews
        )


