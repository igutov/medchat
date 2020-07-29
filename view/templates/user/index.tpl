<main class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="navbar" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                {foreach from=$li item=item key=key name=name}
                <li class="nav-item">
                    <a class="nav-link" href="{$item.url}">{$item.label}</a>
                </li>
                {/foreach}

                {* <li class="nav-item">
                <a class="nav-link" href="?page=user&action=login">Авторизация</a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="?page=user&action=logout">Выйти</a>
        </li>

        <li class="nav-item">
        <a class="nav-link" href="?page=user&action=create">Регистрация</a>
    </li>

    <li class="nav-item">
    <a class="nav-link" href="?page=user&action=info">Информация о пользователе</a>
</li>

<li class="nav-item">
<a class="nav-link" href="?page=user&action=appeal">Сообщение администратору</a>
</li> *}
</ul>
</div>
</nav>
{if isset($include)}
{include file={$include}}
{/if}
</main>
