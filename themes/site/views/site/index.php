<?php

use yii\bootstrap\Modal;
use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Торговый комплекс Кутузовский';
?>
<div class="site-index">
    <div id="top" class="main-picture-block">
<!--        <div class="main-picture"></div>-->
        <div class="full-page-bg"></div>

    </div>
    <div id="about">
        <h2 class="text-center">О комплексе</h2>
        <p><b>Мы рады приветсвовать в Торговом комплексе "Кутузовский", в мире ярких идей, впечатлений и эмоций!</b></p>
        <p>
            ТК "Кутузовский" откроется  полностью осенью 2016 года. ТЦ "Кутузовский" создан для тех, кто ценит кеординарность,
            любит делать приятные подарки себе и своим близким, следит за модой и сохраняет свою индивидуальность.
            Благодаря атмосфере праздника, царящей в торговом комплексе, к нам хочется возвращатся снова и снова
        </p>
        <p>
            Витрины бутиков и разнообразие брендов и ассортимента поразят воображения даже искушенных ценителей моды
            ТК "Кутузовский" представлены ведущие российские и европейские бренды мужской и женской одежды. аксессуаров,
            кожгалантереи, обуви, парфюмерии и косметики, бытовой техники и многое другое.
        </p>
        <p>
            В нашем торговом комплексе можно не только пройтись по мгазинам, а так же в пельменую, для утоления голода.
        </p>
        <p>
            Для ТК "Кутузовский" была разработана оригинальная визуализальная концепция британской студией.
        </p>
        <p>
            К безусловным преимуществам ТК "Кутузовский" стоит отнести наличие наземного пракинга, зоны отдыха и кафе,
            что делает комплекс прекрасным местом для достижения необходимых целей, даже всей семьей.
        </p>
        <p><b>ТК "Кутузовский" - праздник каждый день!</b></p>
    </div>
    <div id="advantages">
        <div class="full-page-bg"></div>
        <div class="advantages-block">
            <div class="row">
                <div class="col-xs-4 advantages-box advantages-box-1">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="advantages-box-img"><?php echo Html::img('@web/images/icons/3-korpusa.png') ?></div>
                        </div>
                        <div class="col-xs-8">
                            <div><b>3</b></div>
                            <div>корпуса</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 advantages-box advantages-box-2">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="advantages-box-img"><?php echo Html::img('@web/images/icons/m.png') ?></div>
                        </div>
                        <div class="col-xs-8">
                            <div><b>1300 м<sup>2</sup></b></div>
                            <div>площадь центра</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 advantages-box advantages-box-3">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="advantages-box-img"><?php echo Html::img('@web/images/icons/lock.png') ?></div>
                        </div>
                        <div class="col-xs-8">
                            <div><b>24 часа</b></div>
                            <div>ваш офис под нашей охраной</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 advantages-box advantages-box-4">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="advantages-box-img"><?php echo Html::img('@web/images/icons/office.png') ?></div>
                        </div>
                        <div class="col-xs-8">
                            <div><b>300</b></div>
                            <div>уютных офисов</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 advantages-box advantages-box-5">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="advantages-box-img"><?php echo Html::img('@web/images/icons/parking.png') ?></div>
                        </div>
                        <div class="col-xs-8">
                            <div><b>500</b></div>
                            <div>парковочных мест</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 advantages-box advantages-box-6">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="advantages-box-img"><?php echo Html::img('@web/images/icons/center.png') ?></div>
                        </div>
                        <div class="col-xs-8">
                            <div><b>15 минут</b></div>
                            <div>до центра города</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id="arenda" class="text-center">
        <div class="full-page-bg"></div>
        <div class="arenda-block">
            <h3><b>Станьте арендатором прямо сейчас</b></h3>
            <p>Вы можете просмотреть свободные офисы в специальном разделе на нашем сайте</p>
<!--            <button class="btn"><i class="fa fa-check"></i> Выбрать офис</button>-->
            <?php
            Modal::begin([
                'header' => '<h2>Схемы помещений готового здания.</h2>',
                'toggleButton' => ['label' => '<button class="btn"><i class="fa fa-check"></i> Выбрать офис</button>', 'tag' => 'div'],
            ]);

            echo Html::img('@web/images/здание_1_1этаж.png', ['class' => 'img-responsive']);
            echo Html::img('@web/images/здание_1_2этаж.png', ['class' => 'img-responsive']);
            ?>

            <?php

            Modal::end();
                ?>
        </div>
    </div>
    <div id="location">
        <div class="maps">
<!--            https://yandex.ru/maps/?um=constructor:tEUNwlJ3l_uLPSQliUs77aKDbFSSWVQo&amp;source=constructorLink-->
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=tEUNwlJ3l_uLPSQliUs77aKDbFSSWVQo&amp;width=100%&amp;height=490&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>        </div>
        <!--<a class="dg-widget-link"
           href="http://2gis.ru/kaliningrad/firm/70000001018143586/center/20.52683830261231,54.768092615794814/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть
            на карте Калининграда</a>
        <div class="dg-widget-link"><a
                href="http://2gis.ru/kaliningrad/firm/70000001018143586/photos/70000001018143586/center/20.52683830261231,54.768092615794814/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">Фотографии
                компании</a></div>
        <div class="dg-widget-link"><a
                href="http://2gis.ru/kaliningrad/center/20.526833,54.768032/zoom/16/routeTab/rsType/bus/to/20.526833,54.768032╎Балт Маркет Групп, ООО, торговая компания?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти
                проезд до Балт Маркет Групп, ООО, торговая компания</a></div>
        <script charset="utf-8" src="http://widgets.2gis.com/js/DGWidgetLoader.js"></script>
        <script charset="utf-8">new DGWidgetLoader({
//                "width": 640,
                "height": 600,
                "borderColor": "#a3a3a3",
                "pos": {"lat": 54.768092615794814, "lon": 20.52683830261231, "zoom": 16},
                "opt": {"city": "kaliningrad"},
                "org": [{"id": "70000001018143586"}]
            });</script>
        <noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в
            настройках вашего браузера.
        </noscript>-->
    </div>
</div>
