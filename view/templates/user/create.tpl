<main class="container">
    <h1 class="text-center h4 mt-4">Регистрация</h1>
    <hr class="mt-1 mb-4">
    <div class="container">
        <div class="card mx-auto mb-4 rounded-0" style="max-width: 35rem;">
            <div class="card-body position-relative">
                {if isset($message_registration)}
                <p class="form-signin-heading">{$message_registration}</p>
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
                    <div class="form-group agreement">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="agree" class="custom-control-input" id="customCheck">
                            <label class="custom-control-label" for="customCheck">Нажимая кнопку, я принимаю условия
                                <a href="#">Пользовательского соглашения</a> и даю своё согласие на обработку моих персональных данных, в соответствии
                                с Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных».</label>
                            </div>
                        </div>
                        <!-- Кнопка для отправки формы -->
                        <div class="text-right submit">
                            <button type="submit" class="btn btn-primary position-relative" name="registration_user">Регистрация</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
