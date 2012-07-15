<span class='span12'><h1>Ваши репетиционные точки</h1>
    <br>
        <table class='table'>
            <thead>
            <th>Название</th>
            <th>Краткая информация</th>
            <th>Описание</th>
            <th>Адрес</th>
            <th>Телефоны</th>
            <th>Действия</th>
            </thead>
<?foreach($studios as $studio):?>
            <tr>
                <td><?=$studio['title']?></td>
                <td><?=$studio['meta']?></td>
                <td><?=$studio['description']?></td>
                <td><?=$studio['adress']?></td>
                <td><?=$studio['phones']?></td>
                <td><a style='width:70px' href='/admin/studio/edit/<?= $studio['id']?>' class='btn btn-info'><i class='icon-pencil icon-white'></i> Править</a></td>
            </tr>
<?endforeach;?>
 </table>
    </span>