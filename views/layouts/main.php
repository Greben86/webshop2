<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html> 
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <title><?= Html::encode($this->title) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content=""> 

    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/img/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/img/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/img/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/img/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="favicon.png">  
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/scripts.js"></script>
</head>

<body>
<?php $this->beginBody() ?>
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo Url::toRoute(['site/index']); ?>"> Главная</a></li>
                        <li><a href="<?php echo Url::toRoute(['site/brands']); ?>">Бренды</a></li>
                        <li><a href="#action">Акции</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Прайс-листы <b class="caret"></b></a>
                            <ul class="dropdown-menu multi-level">							
                                <li><a href="prices/price1.xls">Общий (химия)</a></li>
                                <li><a href="prices/price2.xls">Канцелярские товары</a></li>
                                <li><a href="prices/price3.xls">Хозяйственные товары 1 склад</a></li>
                                <li><a href="prices/price4.xls">Хозяйственные товары 3 склад</a></li>
                                <li><a href="prices/price5.xls">Хозяйственные товары 3а склад</a></li>
                                <li><a href="prices/price6.xls">Хозяйственные товары 5 склад</a></li>
                                <li><a href="prices/price7.xls">Мелочи жизни</a></li>
                                <li><a href="prices/price8.xls">Колготки</a></li>								
                                <li><a href="prices/price9.xls">Колготки Conte</a></li>
                                <li><a href="prices/price10.xls">Акции с 01.06.17 по 30.06.17</a></li>                                
                            </ul>
                        </li>
                        <li><a href="#footer">Контакты и схема проезда</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right" style="padding-right:10px;">
                        <li>
                            <h3>
                                <font color=white>(831) 216-27-12&nbsp;&nbsp;&nbsp;&nbsp;</font>
                            </h3>
                        </li>
                    </ul>
                </div>				
            </nav>
            <div class="row clearfix">
                <div id="wrapper">
                    <div id="sidebar-wrapper">
                        <img src="img/zolushka.png" class="small-invisible" width=100% style="padding-top:70px;"/>
                        <div class="list-group" style="padding-top:20px;">
                            <a href="<?php echo Url::toRoute('site/index'); ?>" class="list-group-item active">Главная страница</a>
                            <a href="<?php echo Url::toRoute('site/brands'); ?>" class="list-group-item" style="">Бренды</a>
                            <a href="#action" class="list-group-item">Акции</a>
                            <a class="list-group-item disabled">Прайс-листы:</a>
                            <a href="prices/price1.xls" class="list-group-item">...Общий (химия)</a>
                            <a href="prices/price2.xls" class="list-group-item">...Канцелярские товары</a>
                            <a href="prices/price3.xls" class="list-group-item">...Хозяйственные товары 1 склад</a>
                            <a href="prices/price4.xls" class="list-group-item">...Хозяйственные товары 3 склад</a>
                            <a href="prices/price5.xls" class="list-group-item">...Хозяйственные товары 3а склад</a>
                            <a href="prices/price6.xls" class="list-group-item">...Хозяйственные товары 5 склад</a>
                            <a href="prices/price7.xls" class="list-group-item">...Мелочи жизни</a>
                            <a href="prices/price8.xls" class="list-group-item">...Колготки</a>
                            <a href="prices/price9.xls" class="list-group-item">...Колготки Conte</a>
                            <a href="prices/price10.xls" class="list-group-item">...Акции с 01.06.17 по 30.06.17</a>
                            <a href="#footer" class="list-group-item">Контакты и схема проезда</a>
                        </div>
                    </div>
                    <div id="page-content-wrapper">
                        <div class="page-content">
                            <div class="container">
                                <a href="<?php echo Url::toRoute('site/login'); ?>" style="margin-top: 75px; position: fixed; right: 0%;">
                                   <small>
                                       <?php echo Yii::$app->user->isGuest ? 'Вход' : 'Управление (' . Yii::$app->user->identity->username . ')'; ?>
                                   </small>
                                </a>
                                <div class="row" style="margin-top:100px;">
                                    <div class="col-md-12">
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                                <li data-target="#myCarousel" data-slide-to="3"></li>
                                                <li data-target="#myCarousel" data-slide-to="4"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="item active">
                                              <img src="/assets/1slide.jpg" alt="First slide">
                                              <div class="container">
                                                    <div class="carousel-caption">
                                                      <h1>Отгружаем автотранспортом и Ж/Д контейнерами</h1>
                                                    </div>
                                              </div>
                                            </div>
                                            <div class="item">
                                              <img src="/assets/money.jpg" alt="Second slide">
                                              <div class="container">
                                                    <div class="carousel-caption">
                                                      <h3 style="text-shadow: black 1px 0px, black 1px 1px, black 0px 1px, black -1px 1px, black -1px 0px, black -1px -1px, black 0px -1px, black 1px -1px, black 0 0 3px, black 0 0 3px, black 0 0 3px, black 0 0 3px, black 0 0 3px, black 0 0 3px, black 0 0 3px, black 0 0 3px;">Предварительный заказ + Оплата по факту + Самовывоз = Дополнительная скидка до 10%</h3>
                                                      <h4 style="text-shadow: black 1px 0px, black 1px 1px, black 0px 1px, black -1px 1px, black -1px 0px, black -1px -1px, black 0px -1px, black 1px -1px, black 0 0 3px, black 0 0 3px, black 0 0 3px, black 0 0 3px, black 0 0 3px, black 0 0 3px, black 0 0 3px, black 0 0 3px;">(на согласованный ассортимент)</h4>
                                                    </div>
                                              </div>
                                            </div>
                                            <div class="item">
                                              <img src="/assets/2slide.jpg" alt="Second slide">
                                              <div class="container">
                                                    <div class="carousel-caption">
                                                      <h1>Приглашаем к сотрудничеству участников торгов (тендеров)</h1>
                                                    </div>
                                              </div>
                                            </div>
                                            <div class="item">
                                              <img src="/assets/money.jpg" alt="Second slide">
                                              <div class="container">
                                                    <div class="carousel-caption">
                                                      <h3 style="text-shadow: black 1px 0px, black 1px 1px, black 0px 1px, black -1px 1px, black -1px 0px, black -1px -1px, black 0px -1px, black 1px -1px, black 0 0 3px, black 0 0 3px, black 0 0 3px, black 0 0 3px, black 0 0 3px, black 0 0 3px, black 0 0 3px, black 0 0 3px;">Предварительный заказ + Оплата по факту + Самовывоз = Дополнительная скидка до 10%</h3>
                                                      <h4 style="text-shadow: black 1px 0px, black 1px 1px, black 0px 1px, black -1px 1px, black -1px 0px, black -1px -1px, black 0px -1px, black 1px -1px, black 0 0 3px, black 0 0 3px, black 0 0 3px, black 0 0 3px, black 0 0 3px, black 0 0 3px, black 0 0 3px, black 0 0 3px;">(на согласованный ассортимент)</h4>
                                                    </div>
                                              </div>
                                            </div>						
                                            <div class="item">
                                              <img src="/assets/3slide.jpg" alt="Third slide">
                                              <div class="container">
                                                    <div class="carousel-caption">
                                                      <h1>Приглашаем к сотрудничеству производителей</h1>
                                                    </div>
                                              </div>
                                            </div>
                                        </div>
                                        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                        <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                                        </div>				
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?= $content ?>

                <div style="margin-left:10px; margin-top: 15px" class="col-md-12 column">
                    <div class="row clearfix">
                        <div class="col-sm-3 col-xs-3 col-md-3 small-invisible" style="margin-bottom:20px;">
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-9 column"> <!-- style="padding-left:26%"> -->
                            <div class="row clearfix"> 
                            </div>
                            <div class="row clearfix">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer style="padding-left:280px; padding-right:7%;">
    <p><a name="footer"></a></p>
    <div style="padding-top:70px">
        <h2>Наши партнеры:</h2>
        <div class="media">
                <a class="pull-left" href="http://xn----dtbfebrf2ajbi0aeo.xn--p1ai/">
                    <img class="media-object" src="http://нпо-содействие.рф/img/frame.png" alt="Логотип" height="64px">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">Потребительский кооператив взаимного обеспечения "СОДЕЙСТВИЕ"</h4>
                    <a href="http://xn----dtbfebrf2ajbi0aeo.xn--p1ai/"><span class="glyphicon glyphicon-link" aria-hidden="true"></span> нпо-содействие.рф</a>
                </div>
        </div>
        <h2>Контактная информация:</h2>
        <p>Оптово-розничный склад "Золушка"</p>
        <p>Телефон: (831) 216-27-12</p>
        <p>Email: <a href="mailto:info@zolushka52.ru?subject=Письмо с сайта" target="_blank">info@zolushka52.ru</a></p>
        <p>Адрес: 603057, Нижний Новгород, ул. Бекетова, 3А, к33, территория Овощной базы №4</p>
        <p>Проезд любым транспортом до ост. "Музыкальное училище", "Дворец Спорта"</p>
    </div>
<a id="firmsonmap_biglink" href="http://maps.2gis.ru/#/?history=project/n_novgorod/center/43.986053933549,56.28924495776/zoom/17/state/widget/id/2674541560336718/firms/2674541560336718">Перейти к большой карте</a>
<script charset="utf-8" type="text/javascript" src="http://firmsonmap.api.2gis.ru/js/DGWidgetLoader.js"></script>
<script charset="utf-8" type="text/javascript">new DGWidgetLoader({"borderColor":"#a3a3a3","width":"100%","height":"400","wid":"f924d49533413b6f6bab4a5ae4a3d42e","pos":{"lon":"43.986053933549","lat":"56.28924495776","zoom":"17"},"opt":{"ref":"hidden","card":["name","schedule"],"city":"n_novgorod"},"org":[{"id":"2674541560336718"}]});</script>
<noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
    <p>Designed by 2014 RegionSoft Developer Studio</p>
</footer>
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'oGdVHv5nG1';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->


<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter23948401 = new Ya.Metrika({id:23948401,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/23948401" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48015734-1', 'zolushka52.ru');
  ga('send', 'pageview');

</script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>