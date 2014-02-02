<?php

return array(
    'name' => 'icrm',
    'preload' => array('log'),
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
