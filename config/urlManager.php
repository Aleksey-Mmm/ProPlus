<?php
/**
 *
 * User: Alex
 * Date: 24.11.2018
 * Time: 10:46
 */
return  [
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        '<_c:[\w\-]+>/<id:\d+>' => '<_c>/view',
        '<_c:[\w\-]+>' => '<_c>/index',
        '<_c:[\w\-]+>/<_a:[\w\-]+>/<id:\d+>' => '<_c>/<_a>',
    ],
];