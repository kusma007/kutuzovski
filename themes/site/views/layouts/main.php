<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
//use rmrevin\yii\fontawesome\FA;

AppAsset::register($this);
rmrevin\yii\fontawesome\AssetBundle::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <meta name="viewport" content="width=1024">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
//        'brandLabel' => 'Кутузовский',
        'brandLabel' => Html::img('@web/images/logo.png', ['class' => 'logo', 'alt' => 'ТК Кутузовский']),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-fixed-top navbar-header-top',
        ],
    ]);
    ?>
    <div class="header-phone pull-right text-center">
        <div class="header-phone-link-block"><a class="header-phone-link" href="tel:84012999999"><span>4012</span> 999 999</a></div>
        <button class="btn btn-xs"><i class="fa fa-phone"></i> Заказать звонок</button>
    </div>
    <?php
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'О комплексе', 'url' => ['/#about']],
            ['label' => 'Преимущества', 'url' => ['/#advantages']],
            ['label' => 'Арендаторам', 'url' => ['/#arenda']],
            ['label' => 'Галерея', 'url' => ['/#']],
            ['label' => 'Расположение', 'url' => ['/#location']],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="footer-block">
            <div class="row">
                <div class="col-xs-3 logo-footer-block"><?php echo Html::img('@web/images/logo-footer.png', ['class' => 'logo-footer', 'alt' => 'ТК Кутузовский']) ?></div>
                <div class="col-xs-2 link-footer-block">
                    <div><a href="#about" class="footer-link">О комплексе</a></div>
                    <div><a href="#advantages" class="footer-link">Преимущества</a></div>
                    <div><a href="#arenda" class="footer-link">Арендаторам</a></div>
                </div>
                <div class="col-xs-2 link-footer-block">
                    <div><a href="#" class="footer-link">Галерея</a></div>
                    <div><a href="#location" class="footer-link">Расположение</a></div>
                </div>
                <div class="col-xs-2 link-footer-block text-right">
                    <div><a href="tel:84012999999" class="footer-link">8 4012 999 999</a></div>
                    <div class="footer-link-descr">каждый день с 9.00 до 18.00</div>
                <div><a href="mailto:info@mail.com" class="footer-link">info@mail.com</a></div>
                    <div class="footer-link-descr">пишите в любое время</div>
                </div>
                <div class="col-xs-3 footer-social text-right">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-vk"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr style="border-color: #383838">
        <div class="text-center footer-copyright">
            <span>Разработка и поддержка - </span><a href="http://pixlet.ru/" target="_blank">Pixlet</a>
        </div>
        <!--<p class="pull-left">&copy; My Company <?php /*echo date('Y') */?></p>

        <p class="pull-right"><?php /*echo Yii::powered() */?></p>-->
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
