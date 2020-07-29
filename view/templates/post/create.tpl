{*<main class="container">*}
{*    *}{* <fieldset class="form_post">*}
{*    {if isset($message_post)}*}
{*    {$message_post}*}
{*    {/if}*}
{*    <legend>Рецептурный бланк</legend>*}
{*    <form class="" action="" method="post">*}
{*    <select class="" name="id_patient">*}
{*    {foreach from=$patients item=item}*}
{*    <option value="{$item.id}">{$item.name} {$item.surname} {$item.patronymic} {$item.date}</option>*}
{*    {/foreach}*}
{*</select>*}

{*<label for="series">Серия</label>*}
{*<input type="text" name="series" value="">*}

{*<label for="number">Номер</label>*}
{*<input type="text" name="number" value="">*}

{*<label for="age">Тип рецепта</label>*}
{*<input type="radio" name="age" value="2">Взрослый*}
{*<input type="radio" name="age" value="1">Детский*}

{*<label for="time">Рецепт действителен в течение</label>*}
{*<input type="radio" name="time" value="2">10 дней*}
{*<input type="radio" name="time" value="1">1 месяца*}

{*<label for="recommendation">Рекомендации</label>*}
{*<textarea name="recommendation"></textarea>*}

{*<label for="medicine">Препарат</label>*}
{*<input type="text" name="medicine" value="">*}



{*<input type="submit" name="create_post" value="Опубликовать">*}
{*</form>*}
{*</fieldset> *}

{*<form class="form-signin" method="post">*}
{*    {if isset($message_post)}*}
{*    <h2 class="form-signin-heading">{$message_post}</h2>*}
{*    {/if}*}
{*    *}{* <label for="inputEmail" class="sr-only">Логин</label>*}
{*    <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email" required="" autofocus="">*}
{*    <label for="inputPassword" class="sr-only">Пароль</label>*}
{*    <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required=""> *}
{*    <select class="form-control" name="id_patient">*}
{*        {foreach from=$patients item=item}*}
{*        <option value="{$item.id}">{$item.name} {$item.surname} {$item.patronymic} {$item.date}</option>*}
{*        {/foreach}*}
{*    </select>*}
{*    <div class="form-row">*}
{*        <div class="col">*}
{*            <label for="series">Серия</label>*}
{*            <input class="form-control" type="text" name="series" value="">*}
{*        </div>*}
{*        <div class="col">*}
{*            <label for="number">Номер</label>*}
{*            <input class="form-control" type="text" name="number" value="">*}
{*        </div>*}
{*    </div>*}
{*    <div class="form-group">*}
{*        <div class="form-check">*}
{*            <label class="form-check-label" for="age">Тип рецепта</label>*}
{*            <input class="form-check-input" type="radio" name="age" value="2">Взрослый*}
{*            <input class="form-check-input" type="radio" name="age" value="1">Детский*}
{*        </div>*}
{*        <div class="form-check">*}

{*            <label class="form-check-label" for="time">Рецепт действителен в течение</label>*}
{*            <input type="radio" name="time" value="2">10 дней*}
{*            <input type="radio" name="time" value="1">1 месяца*}
{*        </div>*}
{*    </div>*}

{*    <label for="recommendation">Рекомендации</label>*}
{*    <textarea class="form-control" name="recommendation"></textarea>*}

{*    <label for="medicine">Препарат</label>*}
{*    <input class="form-control" type="text" name="medicine" value="">*}

{*    <button class="btn btn-lg btn-primary btn-block" type="submit" name="create_post">Опубликовать</button>*}
{*</form>*}
{*</main>*}


{* <div class="card-body position-relative">
{if isset($message_post)}
<p class="form-signin-heading">{$message_post}</p>
{/if}
<!-- Форма обратной связи -->
<form method="post">
<select class="form-control" name="id_patient">
{foreach from=$patients item=item}
<option value="{$item.id}">{$item.name} {$item.surname} {$item.patronymic} {$item.date}</option>
{/foreach}
</select>

<div class="form-row">
<div class="col-sm-6">
<!-- Email пользователя -->
<div class="form-group">
<label for="series" class="control-label">Серия</label>
<input type="text" name="series" required="required" class="form-control" value="" placeholder="Email-адрес">
<div class="invalid-feedback"></div>
</div>
</div>
<div class="col-sm-6">
<!-- Email пользователя -->
<div class="form-group">
<label for="series" class="control-label">Номер</label>
<input type="text" name="series" required="required" class="form-control" value="" placeholder="Email-адрес">
<div class="invalid-feedback"></div>
</div>
</div>
<div class="col-sm-6">
<!-- Email пользователя -->
<div class="form-group">
<label for="password" class="control-label">Пароль</label>
<input id="email" type="password" name="password" required="required" class="form-control" value="" placeholder="Пароль">
<div class="invalid-feedback"></div>
</div>
</div>
</div>
<!-- Кнопка для отправки формы -->
<div class="text-right submit">
<button type="submit" class="btn btn-primary position-relative" name="login">Войти</button>
</div>
</form>
</div> *}
<main class="container">
    <h1 class="text-center h4 mt-4">{$form_name}</h1>
    <hr class="mt-1 mb-4">

    <div class="container">
        <div class="card mx-auto mb-4 rounded-0" style="max-width: 35rem;">
            <div class="card-body position-relative">
                <h4>Запись</h4>
                {if isset($message_post)}
                <p class="form-signin-heading">{$message_post}</p>
                {/if}
                <form method="post">
                    {if isset($patients)}
                    <div class="form-column">
                        <div class="col-sm-12">
                            <select class="form-control" name="patient">
                                {foreach from=$patients item=item}
                                <option value="{$item.id}">{$item.name} {$item.surname} {$item.patronymic} {$item.date}</option>
                                {/foreach}
                            </select>
                        </div>
                        <div class="col-sm-12">
                            <!-- Email пользователя -->
                            <div class="form-group">
                                <label for="medicine" class="control-label">Препарат</label>
                                <input type="text" name="medicine" required="required" class="form-control" value="" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <!-- Email пользователя -->
                            <div class="form-group">
                                <label for="recommendation" class="control-label">Рекомендация</label>
                                <textarea name="recommendation" id="message" class="form-control" rows="5" placeholder="" required></textarea>
                            </div>
                        </div>
                        <div class="text-right submit">
                            <button type="submit" class="btn btn-primary position-relative" name="create_post">Отправить</button>
                        </div>
                    </div>
                    {else}
                    <div class="form-column">
                        <div class="list-group">
                            {foreach from=$posts item=item}
                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">{$item.medicine}</h6>
                                    {* <small>{$item.date}</small> *}
                                </div>
                                <p class="mb-1">{$item.recommendation}</small>
                                </a>
                                {/foreach}
                            </div>
                            {* <ul class="list-group">
                            {foreach from=$posts item=item}
                            <li class="list-group-item">
                            <p class="form-signin-heading">{$item.recommendation}</p>
                            <h6>{$item.medicine}</h6>
                        </li>
                        {/foreach}
                    </ul> *}
                    {* {foreach from=$posts item=item}
                    <div class="col-sm-12">
                    <div class="form-group">
                    <label for="recommendation" class="control-label">Рекомендация</label>
                    <input disabled type="text" name="recommendation" required="required" class="form-control" value="{$item.recommendation}" placeholder="">

                </div>
            </div>
            <div class="col-sm-12">
            <div class="form-group">
            <label for="medicine" class="control-label">Препарат</label>
            <input disabled type="text" name="medicine" required="required" class="form-control" value="{$item.medicine}" placeholder="">
            <textarea name="medicine" id="message" class="form-control" rows="5" placeholder="" required disabled>{$item.medicine}</textarea>
        </div>
    </div>
    {/foreach} *}
</div>
{/if}
</form>
{if isset($comments)}
{foreach from=$comments item=item}
<div class="card-body position-relative">
    <ul class="list-group">
        <li class="list-group-item">{$item.message}</li>
    </ul>
</div>
{/foreach}
{/if}
{if isset($message_comment)}
<p class="form-signin-heading">{$message_comment}</p>
{/if}
<form method="post">
    <div class="card-body position-relative">
        <h4>{$comment_name}</h4>
        <div class="form-group">
            <label for="message" class="control-label">Сообщение</label>
            <textarea name="message" class="form-control" rows="5" placeholder="Заполните поле" required></textarea>
        </div>
        <button type="submit" class="btn btn-success btn-lg pull-right" name="create_comment">Отправить</button>
    </div>
</form>
</div>
{* <div class="card-body position-relative">
<h4>Просмотр вопросов</h4>
<ul class="list-group">
<li class="list-group-item">Cras justo odio</li>
</ul>
</div> *}
</div>
</div>
</main>
