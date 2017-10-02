<?php
return array(
    'appsignature' => 'none', 
	'clientid' => getenv('APP_CENTER_API_INTEGRATION_CLIENTID'),//'j8o0682vcfjzd6embewqhpbc',
	'clientsecret' => getenv('APP_CENTER_API_INTEGRATION_CLIENT_SECRET'),//'QkXBQHPuVcOZKGuEOoIYYxkr',
	'defaultwsdl' => 'https://webservice.exacttarget.com/etframework.wsdl',
    'xmlloc' => './ExactTargetWSDL.xml',
);