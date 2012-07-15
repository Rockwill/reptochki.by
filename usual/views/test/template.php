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
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">
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
            <a class="brand" href="http://reptochki.by">Репетиционные точки Минска</a>
            <div class="nav-collapse">
                <ul class="nav">
                    <li><a href="http://m.reptochki.by">Мобильная версия</a></li>
                    <li><a href="http://reptochki.by/contact">Контакты</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <?=$content?>
</div>
<footer style='padding: 20px' class='container'>
    <div class='row'><a href="http://www.arec.by/" title="репетиционная точка и студия звукозаписи ARec"><img src="http://www.arec.by/images/arec_88_31.gif" width="88" height="31" border="0" alt="репетиционная точка и студия звукозаписи ARec"></a>
        <a href="http://1by.by" title="Каталог сайтов 1BY.BY" target="_blank"><img src="http://1by.by/88x33.jpg" width="88" height="33" border="0" /></a>
        <a href="http://gene.by/" title="Репетиции в Минске" target="_blank"><img src="http://gene.by/logo.png" width="73" height="33" border="0" alt="Репетиции в Минске"></a>
        <a href="http://catalog.tut.by/">
            <img src="http://catalog.tut.by/images/catalog-tut.gif" border=0 width=88 height=31 alt="Каталог TUT.BY"></a><!-- BEGIN Rating All.BY CODE - ALTERNATING THIS CODE WILL CAUSE TERMINATION ACCOUNT-->
        <A HREF="http://www.all.by/">
            <IMG SRC="http://www.all.by/cgi-bin/rating.cgi?id=10088867&amp;ni=4" BORDER="0" WIDTH="88" HEIGHT="31" ALT="Rating All.BY"></A>
        <!-- END Rating All.BY CODE--></div></footer>
<?foreach($scripts as $script):?>
<script type="text/javascript" src='<?=$script?>'></script>
<?endforeach;?>
</body>
</html>