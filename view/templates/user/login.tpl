<main class="container">
    <h1 class="text-center h4 mt-4">Авторизация</h1>
    <hr class="mt-1 mb-4">

    <div class="container">
        <div class="card mx-auto mb-4 rounded-0" style="max-width: 35rem;">
            <div class="card-body position-relative">
                {if isset($message_login)}
                <p class="form-signin-heading">{$message_login}</p>
                {/if}
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
                        <button type="submit" class="btn btn-primary position-relative" name="login">Войти</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

{literal}
<script type="text/javascript">
import {
    let email = document.getElementById('email_div'),
    let password = document.getElementById('password_div'),
} from './import_input.tpl';

</script>
{/literal}
