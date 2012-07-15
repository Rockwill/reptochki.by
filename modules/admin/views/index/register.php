<span class="span8 offset2">
    <strong>Внимание!</strong><br>
           Вы регистрируете аккаунт администратора репетиционной точки <strong><?=$studio?></strong> на e-mail <strong><?=$email?></strong>, который впоследствии будет Вашим логином. Спасибо за регистрацию и успехов в бизнесе:)
<hr>
</span>
<span class="span6 offset3">
    <?if($errors):?>
    <span class="alert-error well span6">
        <div class="span6">
            <?foreach($errors as $error):?>
            <i class="icon-remove icon-b"></i>
            <span class="inline"><?=$error?></span>
            <?endforeach;?>
        </div>
    </span>
    <?endif;?>
        <form class="form-horizontal" method="post">
            <fieldset>
                <legend>Регистрация нового пользователя</legend>
                <div class="control-group">
                    <label class="control-label" for="input01">Пароль</label>
                    <div class="controls">
                        <input name="password" type="password" class="input-xlarge" id="input01">
                        <p class="help-block">Введите пароль</p>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="input02">Подтверждение пароля</label>
                    <div class="controls">
                        <input name="password_confirm" type="password" class="input-xlarge" id="input02">
                        <p class="help-block">Повторите пароль</p>
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