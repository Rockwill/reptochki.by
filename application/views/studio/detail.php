<div class="ui-grid-a">
    <?if(strlen($studio['image'])):?>
    <div class="ui-block-a">

        <img src="/upload/<?=$studio['image']?>">

    </div>
    <?endif;?>
    <div class="ui-block-b"><strong><?=$studio['title']?></strong> <?=$studio['meta']?></div>
</div>
<div data-role="collapsible-set" data-theme="c" data-content-theme="d">
    <div data-role="collapsible">
        <h3>Описание</h3>
        <p><?=$studio['description']?></p>
    </div>
    <div data-role="collapsible">
        <h3>Телефоны</h3>
        <p><?=$studio['phones']?></p>
    </div>
    <div data-role="collapsible">
        <h3>Где находится</h3>
        <p><?=$studio['adress']?></p>
    </div>
    <div data-role="collapsible">
        <h3>Свободное время</h3>
        <p><?if(strlen($studio['schedule'])):?>
            <?=$studio['schedule']?>
            <?else:?><?endif;?>
            Информации о свободном времени нет:(
        </p>
    </div>
</div>