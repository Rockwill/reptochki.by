    <?if($errors):?>
    <span class="alert-error well span6 offset3">
        <div class="span6">
            <i class="icon-remove icon-b"></i>
            <span class="inline"><?=$errors?></span>
        </div>
    </span>
    <?endif;?>
    <span class="span6 offset3">
        <form class="form-horizontal" method="post">
            <fieldset>
                <legend>Авторизация</legend>
                <div class="control-group">
                    <label class="control-label" for="input01">Логин</label>
                    <div class="controls">
                        <input name="login" type="text" class="input-xlarge" id="input01">
                        <p class="help-block">Введите Ваш логин или e-mail</p>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="input02">Пароль</label>
                    <div class="controls">
                        <input name="password" type="password" class="input-xlarge" id="input02">
                        <p class="help-block">Введите Ваш пароль</p>
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