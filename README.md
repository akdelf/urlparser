## URLPARSER

PHP >= 5.2.0

Quickstart MVC router without regular. MVC standart role: _controller/action/params_

Return result array (
  'protocol',
  'domain',
  'method',
  'control',
  'action',
  'params'
)

* protocol (http, https)
* domain (default $_SERVER['QUERY_STRING'])
* method (GET, POST ...)
* permanent MVC rule: control/action/params

