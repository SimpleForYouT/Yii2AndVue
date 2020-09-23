<?

// ROUTE EVERY ROUTE TO YOUR INDEX

return [
    'class' => 'yii\web\UrlManager',
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        '/' => 'site/index',
        /*
        '/other-page' => 'session/index',
        '/my-page' => 'session/index'
        */
    ]
];
