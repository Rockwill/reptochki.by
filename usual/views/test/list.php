<div class="row">
        <span class="span7" >
        <div id='map' style='height: 320px'></div>
            <span id='schedule-wrapper' class="white">
                <h1>Свободное время</h1>
                <hr>
                <span id='schedule-content-wrapper'>
                    <span class='default schedule-active'><i>Репетиционная студия не выбрана</i></span>
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
                            <h3>Адрес</h3>
                            <p><?=$studio['adress']?></p>
                        </div>
                    </div>
                </div>
                <?endforeach;?>
            </div>
        </span>
</div>
<hr>