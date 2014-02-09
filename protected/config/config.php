<?php

return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'icrm',
    'language' => null,
    'timeZone' => 'Europe/Rome',
    'preload' => array('log'),
    'import' => array(
        'application.models.*',
        'application.components.*',
        'application.components.framework.*',
    ),
    'components' => array(
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => YII_DEBUG ? 'CWebLogRoute' : 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            ),
        ),
    ),
    'params' => require dirname(__FILE__) . '/config_params.php',
);

/* End of file main.php */
