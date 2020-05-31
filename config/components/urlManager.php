<?

// ROUTE EVERY ROUTE TO YOUR INDEX

return [
    'class' => 'yii\web\UrlManager',
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        '/' => 'session/index',
        /*
        '/other-page' => 'session/index',
        '/my-page' => 'session/index'
        */
    ]
];
