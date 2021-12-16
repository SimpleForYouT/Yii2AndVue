<?
/**
 * Created by SimpleForYou.
 * User: Marvin Thör
 * Datum: 31.05.2020 12:52
 */

namespace app\models;

use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface {

    public static function tableName(): string {
        return 'YOUR_USER_DB_TABLE';
    }
    
    public static function findIdentity($id) {
        // TODO: Implement findIdentity() method.
    }
    
    public static function findIdentityByAccessToken($token, $type = null) {
        // TODO: Implement findIdentityByAccessToken() method.
    }
    
    public function getId() {
        // TODO: Implement getId() method.
    }
    
    public function getAuthKey() {
        // TODO: Implement getAuthKey() method.
    }
    
    public function validateAuthKey($authKey) {
        // TODO: Implement validateAuthKey() method.
    }
}
