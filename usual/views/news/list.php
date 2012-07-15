<style type="text/css">h1{
    text-align: center
}
hr{
    margin: 10px 0
}</style>
<div class="row"><span class="span11 white" style="padding:40px">
    <h1>Новости и акции на репетиционных студиях.</h1>
    <hr>
    <?if(count($news)):?>
    <?foreach($news as $new):?>
        <span class="span10">
            <h3><?=$new['title']?></h3>
            <p><?=$new['body']?></p>
            <i><?=$new['studio']?></i>
            <hr>
        </span>
     <?endforeach;?>
    <?else:?>
    <p><i>К сожалению, еще никто не публиковал новостей или акций. Вы можете стать первым:)</i></p>
    <?endif;?>
</span>
</div>