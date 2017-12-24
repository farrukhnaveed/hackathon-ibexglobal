<?php
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Hackathon',
    
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.businessmodels.*'  
    ),
    
    'modules' => array(
        // uncomment the following to enable the Gii tool
        
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            
            'password' => false,
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array(
                '127.0.0.1',
                '::1',
                'localhost'
            )
			),
        
    ),
    
    'components' => array(
		'urlManager' => array(
			//path is slash separated format aka www.url.com/controller/action/getparam/getvalue
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'caseSensitive'=>true,                     
			'rules'=>array(
				//site is your controller, comapny is your action and the name is get variable actionCompany is waiting for.
				'<name>' => 'site/contact'
			)
		),

	    'routes' => array(
	        // Configures Yii to email all errors and warnings to an email address
	        array(
	            'class' => 'CEmailLogRoute',
	            'levels' => 'error, warning',
	            'emails' => 'farrukh.naveed@ibexglobal.com'
	        )
	    ),
	    // DB configurations for Local MY-SQL Server data acquision
	    'db' => array(
	        'connectionString' => 'mysql:host=localhost;dbname=tks',
	        'emulatePrepare' => true,
	        'username' => 'root',
	        'password' => '',
	        'charset' => 'utf8'
	    ),
	    'log' => array(
	        'class' => 'CLogRouter',
	        'routes' => array(
	            array(
	                'class' => 'CWebLogRoute',
	                'levels' => 'error, warning, info'
	            )
	        )
	    )
    ),
        
);

?>