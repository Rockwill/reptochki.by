<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Минские репетиционные точки</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <META Name="keywords" Content="Минск, Репетиция ,репетиционные студии, репточки, реп.точки, реп.точка, реп.точки, реп точки минск">
    <META Name="description" Content="Репетиционные студии и точки в городе Минск и Беларуси">
    <!-- Le styles -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">
    <script type="text/javascript" src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
    <script src="http://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU" type="text/javascript"></script>
    <script type="text/javascript" src="/js/main.js"></script>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-32392896-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
</head>
<body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" href="/">Репетиционные точки Минска</a>
            <div class="nav-collapse">
                <ul class="nav">
                    <li><a href="http://m.reptochki.by">Мобильная версия</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <span class="span7" >
        <div id='map' style='height: 320px'></div>
            <span id='schedule-wrapper'>
                <h1>Информация о доступном времени</h1>
                <hr>
                <span id='schedule-content-wrapper'>
                    <span class='default schedule-active'><i>Репетиционная точка не выбрана</i></span>
                    <?foreach($studios as $studio):?>
                    <span id='schedule-<?=$studio['id']?>' style='display: none;'>
                        <?if(strlen($studio['schedule'])):?>
                        <?=$studio['schedule']?>
                        <?else:?>
                        <i>Информации о свободном времени нет :(</i>
                        <?endif;?>
                    </span>
                    <?endforeach;?>
                </span>
            </span>
        </span>
        <span class='span5'>
            <div class="accordion" id="accordion2">
                <?foreach($studios as $studio):?>
                <div class="accordion-group">
                    <div class="accordion-heading" style='background: white'>
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?=$studio['id']?>">
                            <?=$studio['title']?>
                        </a>
                    </div>
                    <div style='background: white' id="collapse<?=$studio['id']?>" class="accordion-body collapse studio<?=$studio['id']?>" rel='<?=$studio['id']?>' style="height: 0px; ">
                        <div class="accordion-inner">
                            <h3>Описание</h3>
                            <p><?=$studio['description']?></p>

                            <h3>Телефоны</h3>
                            <p><?=$studio['phones']?></p>

                            <h3>Где находится</h3>
                            <p><?=$studio['adress']?></p>
                        </div>
                    </div>
                </div>
                    <?endforeach;?>
            </div>
        </span>
    </div>
<hr>
</div> <!-- /container -->
<footer style='padding: 20px' class='container'>
    <div class='row'><a href="http://www.arec.by/" title="репетиционная точка и студия звукозаписи ARec"><img src="http://www.arec.by/images/arec_88_31.gif" width="88" height="31" border="0" alt="репетиционная точка и студия звукозаписи ARec"></a>
    <a href="http://1by.by" title="Каталог сайтов 1BY.BY" target="_blank"><img src="http://1by.by/88x33.jpg" width="88" height="33" border="0" /></a>
        <a href="http://gene.by/" title="Репетиции в Минске" target="_blank"><img src="http://gene.by/logo.png" width="73" height="33" border="0" alt="Репетиции в Минске"></a></div></footer>
<script type="text/javascript" src='/js/bootstrap-collapse.js'></script>
<script type="text/javascript" src='/js/bootstrap-transition.js'></script>
</body>
</html>