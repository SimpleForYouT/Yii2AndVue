<?
/**
 * Created by SimpleForYou.
 * User: Marvin Thör
 * Datum: 31.05.2020 12:50
 */

namespace app\controllers;

use Yii;
use yii\filters\Cors;
use yii\web\Controller;

class SiteController extends Controller {
    
    public function behaviors() {
        if(Yii::$app->params['develop']) {
            // for local start
            return [
                'corsFilter' => [
                    'class' => Cors::class,
                    'cors' => [
                        'Origin' => ['YOUR_MAIN_PAGE', 'https://csa.simpleforyou.de'],
                        'Access-Control-Request-Method' => ['POST', 'GET', 'PUT', 'DELETE', 'OPTIONS'],
                        'Access-Control-Allow-Credentials' => true,
                        'Access-Control-Max-Age' => 3600,
                        'Access-Control-Allow-Headers' => ['authorization', 'X-Requested-With', 'content-type', 'access-control-allow-origin', 'YOUR_COSTOM_HEADER'],
                        'Access-Control-Allow-Origin' => ['http://localhost:8080', 'YOUR_MAIN_PAGE']
                    ],
                ],
            ];
        }
        
        return parent::behaviors();
    }
    
    public function actionIndex() {
        return $this->render('index');
    }
}
