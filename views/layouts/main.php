<?

/* @var $this \yii\web\View */
/* @var $content string */

use app\common\utils\VueRenderer;
use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<? $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <? $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <? $this->head() ?>
    <?= VueRenderer::head() ?>
</head>
<body>
<? $this->beginBody() ?>
<?= $content ?>
<? $this->endBody() ?>
</body>
</html>
<? $this->endPage() ?>
