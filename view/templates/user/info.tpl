{* <div class="col-sm-6">
<!-- Email пользователя -->
<div class="form-group">
<label for="password" class="control-label">Email-адрес</label>
<input type="password" name="password" required="required" class="form-control" value="" placeholder="Email-адрес">
<div class="invalid-feedback"></div>
</div>
</div>
<div class="col-sm-6">
<!-- Email пользователя -->
<div class="form-group">
<label for="password_new" class="control-label">Cтарый пароль</label>
<input type="password" name="password_new" required="required" class="form-control" value="" placeholder="Cтарый пароль">
<div class="invalid-feedback"></div>
</div>
</div>
<div class="col-sm-6">
<!-- Email пользователя -->
<div class="form-group">
<label for="password_new" class="control-label">Новый пароль</label>
<input type="password" name="password_new" required="required" class="form-control" value="" placeholder="Новый пароль">
<div class="invalid-feedback"></div>
</div>
</div>

<div class="col-sm-6">

<div class="form-group">
<label for="password_new_check" class="control-label">Повторите новый пароль</label>
<input type="password" name="password_new_check" required="required" class="form-control" value="" placeholder="Повторите новый пароль">
<div class="invalid-feedback"></div>
</div>
</div>
<div class="col-sm-6">

<div class="form-group">
<label for="name" class="control-label">Имя</label>
<input type="text" name="name" required="required" class="form-control" value="{$name}" placeholder="Пароль">
<div class="invalid-feedback"></div>
</div>
</div>
<div class="col-sm-6">

<div class="form-group">
<label for="surname" class="control-label">Фамилия</label>
<input type="text" name="surname" required="required" class="form-control" value="{$surname}" placeholder="Пароль">
<div class="invalid-feedback"></div>
</div>
</div>
<div class="col-sm-6">

<div class="form-group">
<label for="patronymicбрбрб" class="control-label">Отчество</label>
<input type="text" name="patronymic" required="required" class="form-control" value="{$patronymic}" placeholder="Пароль">
<div class="invalid-feedback"></div>
</div>
</div>
<div class="col-sm-6">

<div class="form-group">
<label for="password_new" class="control-label">Дата</label>
<input type="date" name="password_new" required="required" class="form-control" value="{$date}">
<div class="invalid-feedback"></div>
</div>
</div> *}
<main class="container">
    <h1 class="text-center h4 mt-4">Пользовательские данные</h1>
    <hr class="mt-1 mb-4">

    <div class="container">
        <div class="card mx-auto mb-4 rounded-0" style="max-width: 35rem;">
            <div class="card-body position-relative">
                {if isset($message_login)}
                <p class="form-signin-heading">{$message_login}</p>
                {/if}
                <!-- Форма обратной связи -->
                <form method="post">
                    <div class="form-row">

                        {foreach from=$input item=item key=key name=name}
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="{$item.name}" class="control-label">{$item.label}</label>
                                <input type="{$item.type}" name="{$item.name}" required="required" class="form-control" value="" placeholder="{$item.label}">
                            </div>
                        </div>
                        {/foreach}
                    </div>
                    <!-- Кнопка для отправки формы -->
                    <div class="text-right submit">
                        <button type="submit" class="btn btn-primary position-relative" name="changes">Изменить данные</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

{* /* {literal}
<script type="text/javascript">
// $(document).ready(function() {
    // $('input[type=tel]').mask("+7 (999) 99-99-999");
    document.getElementByTagName("phone").placeholder = "+7 (___) ___ __ __";
// });
</script>
{/literal} */ *}
