<?

// ROUTE EVERY ROUTE TO YOUR INDEX

return [
    'class' => 'yii\web\UrlManager',
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        '/' => 'site/index',
        /*
        '/other-page' => 'site/index',
        '/my-page' => 'site/index'
        */
    ]
];
