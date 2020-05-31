<?
/**
 * Created by SimpleForYou.
 * User: Marvin Thör
 * Datum: 31.05.2020 12:50
 */

namespace app\controllers;

use yii\filters\Cors;
use yii\web\Controller;

class SiteController extends Controller {
    
    public function behaviors() {
        // Enable this for production work
        // return parent::behaviors();
        // for local start
        return [
            'corsFilter' => [
                'class' => Cors::class,
                'cors' => [
                    'Origin' => [$_SERVER["REMOTE_ADDR"], 'http://localhost:8080'],
                    'Access-Control-Request-Method' => ['POST', 'GET', 'OPTIONS'],
                    'Access-Control-Allow-Credentials' => true,
                    'Access-Control-Max-Age' => 3600,
                    'Access-Control-Allow-Headers' => ['authorization', 'X-Requested-With', 'content-type', 'some_custom_header']
                ],
            ],
        ];
    }
    
    public function actionIndex() {
        return $this->render('index');
    }
}
