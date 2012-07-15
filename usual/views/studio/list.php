<ul data-role="listview" data-theme="g">
<?foreach($studios as $studio):?>
<li>
    <a href="/studio_<?=$studio['id']?>">
        <h3><?=$studio['title']?></h3>
        <p><?=$studio['meta']?></p>
    </a>
</li>
<?endforeach;?>
    </ul>