<?php

use yii\helpers\Html;
use dee\adminlte\AdminlteAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AdminlteAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <style>
            a {
                color: #333;
            }

            .pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus {
                z-index: 3;
                color: rgb(51, 51, 51);
                cursor: default;
                background-color: rgb(221, 221, 221);
                border-color: rgb(221, 221, 221);
            }
            .content-wrapper {
                min-height: 100%;
                background-color: #ffffff;
                z-index: 800;
            }
        </style>
    </head>
    <?php $this->beginBody() ?>
    <body class="skin-black layout-top-nav">
        <div class="wrapper">

            <div class="content-wrapper" style="height: 100%">
                <div class="container">
                    <section class="content">
                        <?= $content ?>
                    </section>
                </div>
            </div>


        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
