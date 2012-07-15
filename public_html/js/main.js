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

    myMap.controls.add('zoomControl').add('typeSelector').add('mapTools').add(new ymaps.control.ScaleLine());
    myMap.behaviors.enable("scrollZoom");
    $('.collapse').on('show',function(){
        var current = this;
        var test = $('.collapse:first').is(current);
        if(!test){
            $(this).parents('.accordion-group').insertBefore($('.collapse:first').parents('.accordion-group'));
        }
        $('.collapse.active').collapse('hide').removeClass('active');
        $(this).addClass('active');

        var studio_id = $(this).attr('rel');
        if(flag != studio_id){
            open_baloon(studio_id);
        }
        $('.schedule-active').hide().removeClass('schedule-active');
        $('#schedule-' + studio_id).show().addClass('schedule-active');


    });
    $('.collapse').on('hide',function(){
        close_balloons();
    });
    $.ajax({
        type: 'GET',
        url: '/studio/markers',
        success: function(data){
            data = $.parseJSON(data);
            $.each(data,function(key,value){
                var studio = new ymaps.Placemark([value.lat, value.lon],{
                    iconContent: value.title,
                    balloonContentHeader: "<h3>" + value.title + "</h3>",
                    balloonContentBody: "<p>" + value.phones + "</p>",
                    id: value.id
                }, {
                    preset: 'twirl#blueStretchyIcon' // иконка растягивается под контент
                });
                studio.events.add('click',function(e){
                    flag = e.originalEvent.target.properties.get('id');
                    $('.studio' + e.originalEvent.target.properties.get('id')).collapse('show');
                });
                myMap.geoObjects.add(studio);
            })
        }
    });
});

