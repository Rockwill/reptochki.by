<!DOCTYPE html>
<html>
<head>
<head>
    <style>
        .ui-li{
           border-style: solid;
            border-bottom-color: black;
        }
    </style>
    <meta charset="utf-8">
    <title><?=$page_title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-32394090-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
</head>
<body>
<div data-role="page">
    <div data-role="header">
        <?if(isset($back)):?>
        <a href="/" data-role="button" data-inline="true" data-theme="b">Назад</a>
        <?endif;?>
        <h4><?=$page_title?></h4>

    </div><!-- /header-->
    <div data-role="content">

            <?=$content;?>

    </div><!-- /content-->
    <div data-role="footer">
        <h4>Реп.точки Минска</h4>
    </div><!-- /footer-->
</div><!-- /page->
<!-- /page-->
</body>
</html>