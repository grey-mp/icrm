<?php

return array(
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
);

/* End of file main.php */
