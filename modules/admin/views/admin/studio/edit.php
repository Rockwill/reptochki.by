<script type="text/javascript">

    ymaps.ready(function () {
        var flag = null;
        get_flag = function(){
            return flag;
        }
        open_baloon = function(id){
            myMap.balloon.close();
            myMap.geoObjects.each(function(e){
                if(e.properties.get('id') == id){
                    flag = id;
                    e.balloon.open();
                    myMap.setCenter(e.geometry.getCoordinates());
                }
            });
        }
        close_balloons = function(){
            myMap.balloon.close();
        }

        var myMap = new ymaps.Map('map', {
            center: [53.90308410015761, 27.553968378250158], // Москва
            zoom: 12,
            type:'yandex#publicMap'
        });
        <?if(strlen($studio['lat'])):?>
        var marker = new ymaps.Placemark([<?=$studio['lat']?>, <?=$studio['lon']?>]);
        myMap.geoObjects.add(marker);
        <?endif;?>
            myMap.controls
            // Кнопка изменения масштаба
            .add('zoomControl')
            // Список типов карты
            .add('typeSelector')
            // Стандартный набор кнопок
            .add('mapTools');

        // Также в метод add можно передать экземпляр класса, реализующего определенный элемент управления.
        // Например, линейка масштаба ('scaleLine')
        myMap.controls
            .add(new ymaps.control.ScaleLine());
        myMap.behaviors.enable("scrollZoom");
        myMap.behaviors.disable('dblClickZoom')
        myMap.events.add("dblclick",
            function(e) {
                myMap.geoObjects.each(function(el){
                    el.geometry.setCoordinates(e.get("coordPosition"));
                    var flag = true;
                });
                if(!flag){
                var coords = e.get("coordPosition");
                var marker = new ymaps.Placemark(coords);
                myMap.geoObjects.add(marker);
                }
                var true_coords = e.get("coordPosition");

                $('#lat').val(true_coords[0]);
                $('#lon').val(true_coords[1]);

            }
        );


    });
</script>
<span class='span12'><h1>Редактирование</h1>
    <br>
    <form class="form-horizontal" method="post" name='add'>
        <fieldset>
            <legend>Изменение информации о студии</legend>
            <div class="control-group">
                <label class="control-label" for="input01">Название</label>
                <div class="controls">
                    <input name="title" type="text" class="span6" id="input01" value="<?=$studio['title']?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="input02">Краткое описание</label>
                <div class="controls">
                    <input name="meta" type="text" class="span6" id="input02" value="<?=$studio['meta']?>">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="input02">Метка</label>
                <div class="controls">
                    <div id='map' style="width: 400px;height: 300px"></div>
                    <br>
                    <input type='text' value="<?=$studio['lat']?>" name='lat' id='lat'> <input name="lon" type='text' value="<?=$studio['lon']?>" id='lon'>
                    <p class="help-block">Двойной клик на карте - добавить/изменить метку</p>
                </div>
                <!--<p class="help-block">Та информация, которая видна на списке. Краткое описание</p>-->
            </div>

            <div class="control-group">
                <label class="control-label" >Телефоны</label>
                <div class="controls">
                    <textarea rows="" cols="" name="phones"><?=$studio['phones']?></textarea>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" >Адрес</label>
                <div class="controls">
                    <textarea class='span8' cols="" name="adress"><?=$studio['adress']?></textarea>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="input02">Описание</label>
                <div class="controls">
                    <textarea class="span6" name='description' id="textarea" rows="30" cols='100' style='width:620px;height: 400px' style="margin: 0px; height: 54px; width: 320px; "><?=$studio['description']?></textarea>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="input02">Информация о свободном времени</label>
                <div class="controls">
                    <textarea class="span6" name='schedule' rows="30" cols='100' style='width:620px;height: 400px' style="margin: 0px; height: 54px; width: 320px; "><?=$studio['schedule']?></textarea>
                </div>
            </div>

            <div class="form-actions">
                <a class='btn btn-success' onclick="document.add.submit()"><i class=' icon-ok'></i> Сохранить</a>
                <a class='btn btn-primary' href='/admin/studio/list'><i class="icon-arrow-left icon-white"></i> Назад к списку</a>
            </div>
        </fieldset>
    </form>

    </span>