<div class="row"><span class="span8 offset2 white" style='padding:40px'>
    <h1>Контакты</h1>
    <hr>
    <p><b>reptochki.by</b> - очень молодой проект, но постоянно разваивается. Каждый день появляются новые возможности, улучшается дизайн и производительность, исправляются ошибки. Мы рады каждому посетителю, и хотим чтобы у всех, кто попал на наш сайт, оставалиь только положительные впечатления. Поэтому мы готовы к любому сотрудничеству.
    </p>
    <p>Если Вы - талантливый дизайнер, программист, верстальщик и хотите помочь проекту - присоединяйтесь!</p>
    <p>Да что там, если Вы просто хотите помочь проекту - присоединяйтесь :)</p>
    <p>Если хотите, чтобы о проекте узнали - разместите пожалуйста баннер на своем сайте или персональной страничке</p>
    <hr>
    <textarea disabled="true" style='width:100%;height:60px'><a href="http://reptochki.by/" title="Минские репточки" target="_blank"><img src="http://reptochki.by/images/logo.png" width="88" height="31" border="0" alt="Репетиционные студии Минска"></a></textarea>
    <hr>
    <p></p>
    <p>Наши контакты:
    <ul>
        <li><b>skype:</b> - arseniy.zuev</li>
        <li><b>email:</b> - arseniy.zuev@gmail.com</li>
        <li><b>phone:</b> - +375-29-612-11-36</li>
    </ul>
    </p>
    <p></p>
    <p>Так же вы можете связаться с нами с помощью следующей формы</p>
    <?if(count($errors) && is_array($errors)):?>
    <span class="alert-error well span7">
        <?foreach($errors as $error):?>
        <div class="span7">
            <i class="icon-remove icon-b"></i>
            <span class="inline"><?=$error?></span>
        </div>
        <?endforeach;?>
    </span>
    <?endif;?>
    <?if(strlen($message)):?>
    <span class="alert-success well span7">
        <div class="span7">
            <i class="icon-check icon-b"></i>
            <span class="inline"><?=$message?></span>
        </div>
    </span>
    <?endif;?>
    <span class="span7">
        <form class="form-horizontal" method="post">
            <fieldset>
                <legend>Связаться с нами</legend>
                <div class="control-group">
                    <label class="control-label" for="input01">Заголовок сообщения</label>
                    <div class="controls">
                        <input name="title" type="text" class="input-xlarge" id="input01">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="input02">Ваш e-mail</label>
                    <div class="controls">
                        <input name="email" type="text" class="input-xlarge" id="input02">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" >Текст сообщения</label>
                    <div class="controls">
                        <textarea name="message"  style='width:100%' rows="10"></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <input type="submit" class="btn btn-primary">
                    </div>
                </div>
            </fieldset>
        </form>
    </span>

</span></div>