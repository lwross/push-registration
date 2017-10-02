<?php
return array(
    'appsignature' => 'none', 
	'clientid' => getenv('APP_CENTER_API_INTEGRATION_CLIENTID'),
	'clientsecret' => getenv('APP_CENTER_API_INTEGRATION_CLIENT_SECRET'),
	'defaultwsdl' => 'https://webservice.exacttarget.com/etframework.wsdl',
    'xmlloc' => './ExactTargetWSDL.xml',
);